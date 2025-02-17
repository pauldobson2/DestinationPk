<?php

namespace App\Http\Controllers;
use App\Models\NewsletterSubscription;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Models\Trip;
use App\Models\Category;
use Illuminate\Http\Request;
use Barryvdh\Snappy\Facades\SnappyPdf as PDF;
use Illuminate\Support\Facades\Mail;
use App\Mail\TripBrochureEmail;
use Illuminate\Support\Facades\File;


class TripDetailsController extends Controller
{
    public function tripDetails($slug){
        $trip_details = Trip::where('title_slug', $slug)->with('category', 'mediaGalleries','destinations','itineraries')->firstOrFail();

        // Get related trips based on the current trip's category
        $related_trips = Trip::whereHas('category', function ($query) use ($trip_details) {
            $query->where('id', $trip_details->category->id);
        })->where('id', '!=', $trip_details->id)->take(6)->get(); // Adjust the limit as needed

        $similar_trips = Trip::where('id', '!=', $trip_details->id)
                         ->inRandomOrder()
                         ->take(3) // Adjust the number of similar trips displayed
                         ->get();
        $dynamicTitle=$trip_details->trip_title. ' | Destination Pakistan';
        $dynamicDescription=$trip_details->trip_description. ' | Destination Pakistan';
        $dynamicImageURL=asset('assets/images/resources/featured/' . $trip_details->trip_image);

        return view('website.trip_details', [
            'trip_details' => $trip_details,
            'trip_destinations' => $trip_details->destinations,
            'related_trips' => $related_trips,
            'similar_trips' => $similar_trips,
            'title' => $dynamicTitle,
            'description' => $dynamicDescription,
            'image' => $dynamicImageURL,
            'mediaGalleries' => $trip_details->mediaGalleries,
        ]);
    }

    public function tripbrochure(Request $request){
        try {
            $request->validate([
                'email' => 'required|email',
                'slug' => 'required'
            ]);

            $check = NewsletterSubscription::where('email',$request->email)->first();
            if(!$check){
                NewsletterSubscription::create([
                    'email' => $request->email
                ]);
            }
            return response()->json(['slug' => $request->slug]);

        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to generate brochure'], 500);
        }
    }
    public function downloadPdf($slug)
    {
        try {
            $trip_details = Trip::where('title_slug', $slug)
                ->with('category', 'destinations', 'itineraries')
                ->firstOrFail();

            $dynamicTitle = $trip_details->trip_title . ' | Destination Pakistan';
            $dynamicDescription = $trip_details->trip_description . ' | Destination Pakistan';
            $dynamicImageURL = asset('assets/images/resources/featured/' . $trip_details->trip_image);

            // GOOGLE MAP
            $apiKey = 'YOUR-KEY';

            $markers = [];
            foreach ($trip_details->destinations as $destination_coordinates) {
                $markers[] = $destination_coordinates->latitude . ',' . $destination_coordinates->longitude;
            }

            $markers = implode('|', $markers);

            $google_map_url = 'https://maps.googleapis.com/maps/api/staticmap?'
                . 'size=650x450'
                . '&maptype=roadmap'
                . '&zoom=6'
                . '&markers=size:tiny|color:blue|' . $markers
                . '&path=color:0x00aefd|weight:2|' . $markers
                . '&key=' . $apiKey;

            // Fetch map image data
            $google_map_data = file_get_contents($google_map_url);

            if ($google_map_data === FALSE) {
                // Handle error
                $image_path= "Error fetching map image data from Google Maps API";
                exit;
            }

// Ensure the directory exists
            $image_directory = public_path('images/maps');
            if (!file_exists($image_directory)) {
                mkdir($image_directory, 0755, true);
            }

// Save the map image to a file
            $image_path = $image_directory . '/'.$trip_details->title_slug.'_trip_map.png';
            file_put_contents($image_path, $google_map_data);

// Check if the image was saved successfully
            if (!file_exists($image_path)) {
                // Failed to save image
                $image_path = "Failed to save map image";
            }

            $data = [
                'trip_details'      => $trip_details,
                'trip_destinations' => $trip_details->destinations,
                'title'             => $dynamicTitle,
                'description'       => $dynamicDescription,
                'image'             => $dynamicImageURL,
                'google_map'        => $trip_details->title_slug.'_trip_map.png',
            ];

             //return view('website.trip_brouchure_style', $data);
            $pdf = PDF::loadView('website.trip_brouchure', $data);
            return $pdf->download('trip_brouchure.pdf');
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to generate brochure', 'message' => $e->getMessage()], 500);
        }
    }

    public function trip_brouchure_download($slug)
    {
        try {
            $trip_details = Trip::where('title_slug', $slug)
                ->with('category', 'destinations', 'itineraries')
                ->firstOrFail();

            $dynamicTitle = $trip_details->trip_title . ' | Destination Pakistan';
            $dynamicDescription = $trip_details->trip_description . ' | Destination Pakistan';
            $dynamicImageURL = asset('assets/images/resources/featured/' . $trip_details->trip_image);

            // GOOGLE MAP
            $apiKey = 'YOUR-KEY';

            $markers = [];
            foreach ($trip_details->destinations as $destination_coordinates) {
                $markers[] = $destination_coordinates->latitude . ',' . $destination_coordinates->longitude;
            }

            $markers = implode('|', $markers);

            $google_map_url = 'https://maps.googleapis.com/maps/api/staticmap?'
                . 'size=7000x450'
                . '&maptype=roadmap'
                . '&zoom=6'
                . '&markers=size:tiny|color:blue|' . $markers
                . '&path=color:0x00aefd|weight:4|' . $markers
                . '&key=' . $apiKey;

            // Fetch map image data
            $google_map_data = file_get_contents($google_map_url);

            if ($google_map_data === FALSE) {
                // Handle error
                $image_path= "Error fetching map image data from Google Maps API";
                exit;
            }

// Ensure the directory exists
            $image_directory = public_path('images/maps');
            if (!file_exists($image_directory)) {
                mkdir($image_directory, 0755, true);
            }

// Save the map image to a file
            $image_path = $image_directory . '/'.$trip_details->title_slug.'_trip_map.png';
            file_put_contents($image_path, $google_map_data);

// Check if the image was saved successfully
            if (!file_exists($image_path)) {
                // Failed to save image
                $image_path = "Failed to save map image";
            }

            $data = [
                'trip_details'      => $trip_details,
                'trip_destinations' => $trip_details->destinations,
                'title'             => $dynamicTitle,
                'description'       => $dynamicDescription,
                'image'             => $dynamicImageURL,
                'google_map'        => $trip_details->title_slug.'_trip_map.png',
            ];

             return view('website.trip_brouchure_style', $data);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to generate brochure', 'message' => $e->getMessage()], 500);
        }
    }

    public function tripList($categoryName)
    {
        try {
            // Fetch the category
            $category = Category::where('name', $categoryName)->firstOrFail();
            // Get the trips associated with this category
            $trips = $category->trips()->get();

            // Pass the trips to a view or return the data as needed
            return view('website.trip_list', ['category' => $category, 'trips' => $trips]);
        } catch (ModelNotFoundException $e) {
            // Handle the case where the category does not exist
            abort(404);
        }
    }

    public function tripsList($locationName)
    {
        try {
            // Fetch the category
            // $category = Category::where('name', $categoryName)->firstOrFail();

            // Get the trips associated with this category
            $trips = Trip::where('trip_destinations', 'LIKE', '%' . $locationName . '%')->get();

            // Pass the trips to a view or return the data as needed
            return view('website.trip_list', ['trips' => $trips]);
        } catch (ModelNotFoundException $e) {
            // Handle the case where the category does not exist
            abort(404);
        }
    }

}
