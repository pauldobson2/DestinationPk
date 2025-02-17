<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Trip;
use App\Models\TripDestination;
use App\Models\TripItinerary;
use App\Models\TripSchedule;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;


use Illuminate\Http\Request;

class TripController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trips = Trip::with('category','destinations','itineraries')->get();
        return view('trips.index', ['trips' => $trips]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::get();

        return view('trips.create', ['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */

    public function store(Request $request)
    {
        DB::beginTransaction();

        try {
            // Validation rules, adjust as needed
            $validatedData = $request->validate([
                'trip_title' => 'required|string',
                'trip_category' => 'required|string',
                'trip_duration' => 'required|string',
                'trip_price' => 'required|numeric',
                'trip_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'trip_description' => 'required|string',
                'trip_overview' => 'nullable',
                'trip_includes' => 'required|string',
                'trip_excludes' => 'required|string',
            ]);

            // Handle file upload, resize, and convert to WebP
            if ($request->hasFile('trip_image')) {
                $image = $request->file('trip_image')->getClientOriginalName();
                $image = pathinfo($image, PATHINFO_FILENAME);
               // $imageName = time() . '_' . str_replace(" ", "_", $image) . '.webp';

                $image = preg_replace('/[^a-zA-Z0-9]/', '_', $image);

                $imageName = time() . '_' . $image . '.webp';

                // Resize to 480x320 and convert to WebP
                $img = Image::make($request->file('trip_image')->getRealPath());
                $img->resize(480, 320)->encode('webp', 80);
                $destinationPath = base_path('assets/images/resources/destinations/' . $imageName);
                $img->save($destinationPath);

                // Resize to 900x500 and convert to WebP
                $img = Image::make($request->file('trip_image')->getRealPath());
                $img->resize(900, 500)->encode('webp', 80);
                $featuredPath = base_path('assets/images/resources/featured/' . $imageName);
                $img->save($featuredPath);

                $validatedData['trip_image'] = $imageName;
            }

            // Create a new trip with the validated data
            $trip = Trip::create($validatedData);

            // Save trip destinations
            if($this->hasNonEmptyDestinationArrayItem($request->trip_destinations)) {
                foreach ($request->trip_destinations as $destination) {
                    TripDestination::create([
                        'trip_id' => $trip->id,
                        'name' => $destination['name'],
                        'latitude' => $destination['latitude'],
                        'longitude' => $destination['longitude'],
                    ]);
                }
            }

            // Save trip itineraries
            if(!empty($request->trip_itineraries)) {
                foreach ($request->trip_itineraries as $index => $itineraryData) {
                    $itinerary = new TripItinerary();
                    $itinerary->trip_id = $trip->id;
                    $itinerary->title = $itineraryData['title'];
                    $itinerary->day = $index;
                    $itinerary->detail = $itineraryData['detail'];

                    // Handle file upload, resize, and convert to WebP
                    if ($request->hasFile("trip_itineraries.{$index}.image")) {
                        $image = $request->file("trip_itineraries.{$index}.image")->getClientOriginalName();
                        $image = pathinfo($image, PATHINFO_FILENAME);
                        $imageName = time() . '_' . str_replace(" ", "_", $image) . '.webp';

                        // Resize to 480x320 and convert to WebP
                        $img = Image::make($request->file("trip_itineraries.{$index}.image")->getRealPath());
                        $img->resize(480, 320)->encode('webp', 80);
                        $destinationPath = base_path('assets/images/resources/destinations/' . $imageName);
                        $img->save($destinationPath);

                        // Resize to 900x500 and convert to WebP
                        $img = Image::make($request->file("trip_itineraries.{$index}.image")->getRealPath());
                        $img->resize(900, 500)->encode('webp', 80);
                        $featuredPath = base_path('assets/images/resources/featured/' . $imageName);
                        $img->save($featuredPath);

                        $itinerary->image = $imageName;
                    }

                    $trip->itineraries()->save($itinerary);
                }
            }

            // Create trip schedules
            if($this->hasNonEmptyScheduleArrayItem($request->trip_schedules)) {
                foreach ($request->trip_schedules as $scheduleData) {
                    TripSchedule::create([
                        'trip_id' => $trip->id,
                        'month' => date('F', strtotime($scheduleData['start_date'])),
                        'year' => date('Y', strtotime($scheduleData['start_date'])),
                        'start_date' => $scheduleData['start_date'],
                        'end_date' => $scheduleData['end_date'],
                        'price' => $scheduleData['price'],
                    ]);
                }
            }

            // Commit the transaction
            DB::commit();
            // Redirect with success message
            return redirect()->route('trips.create', $trip->id)
                ->with('success', 'Trip created successfully!');

        } catch (\Exception $e) {
            // Rollback the transaction
            DB::rollBack();
            // Handle any errors that occur during the process
            return redirect()->back()->withErrors(['error' => 'An error occurred: ' . $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $trip = Trip::where('id',$id)->with('category','destinations','itineraries')->first();
        $categories = Category::get(); // Retrieve all categories

        return view('trips.edit', compact('trip', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $id)
    {
        DB::beginTransaction();
        try {
            // Validate the incoming request data
            $validatedData = $request->validate([
                'trip_title' => 'required|string',
                'trip_category' => 'required|exists:categories,id',
                'trip_duration' => 'required|numeric',
                'trip_image' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'trip_price' => 'required|numeric',
                'trip_description' => 'required|string',
                'trip_overview' => 'nullable',
                'trip_includes' => 'required|string',
                'trip_excludes' => 'required|string',
            ]);

            // Fetch the trip by ID
            $trip = Trip::findOrFail($id);

            // Handle the image update and deletion
            if ($request->hasFile('trip_image')) {
                // Delete the previous image
                if ($trip->trip_image) {
                    File::delete(base_path('assets/images/resources/featured/' . $trip->trip_image));
                    File::delete(base_path('assets/images/resources/destinations/' . $trip->trip_image));
                }

                // Process and store the new image
                $image = $request->file('trip_image')->getClientOriginalName();
                $image = pathinfo($image, PATHINFO_FILENAME);
              //  $imageName = 'destination_pakistan_' . time() . '_' . str_replace(" ", "_", $image) . '.webp';
                $image = preg_replace('/[^a-zA-Z0-9]/', '_', $image);

                $imageName = time() . '_' . $image . '.webp';

                // Resize and save different versions of the image
                $this->resizeAndSaveImage($request->file('trip_image'), $imageName);

                $trip->trip_image = $imageName;
            }

            // Update other trip fields
            $trip->trip_title       = $validatedData['trip_title'];
            $trip->trip_category    = $validatedData['trip_category'];
            $trip->trip_duration    = $validatedData['trip_duration'];
            $trip->trip_price       = $validatedData['trip_price'];
            $trip->trip_description = $validatedData['trip_description'];
            $trip->trip_overview    = $validatedData['trip_overview'];
            $trip->trip_includes    = $validatedData['trip_includes'];
            $trip->trip_excludes    = $validatedData['trip_excludes'];

            // Save the updated trip
            $trip->save();

            // Save new destinations
            if($this->hasNonEmptyDestinationArrayItem($request->trip_destinations)) {
                $trip->destinations()->delete();
                foreach ($request->trip_destinations as $destination) {
                    TripDestination::create([
                        'trip_id' => $trip->id,
                        'name' => $destination['name'],
                        'latitude' => $destination['latitude'],
                        'longitude' => $destination['longitude'],
                    ]);
                }
            }

            // Save new itineraries
            if(!empty($request->trip_itineraries)) {
                $trip->itineraries()->delete();
                foreach ($request->trip_itineraries as $index => $itineraryData) {
                    $itinerary = new TripItinerary();
                    $itinerary->trip_id = $trip->id;
                    $itinerary->title = $itineraryData['title'];
                    $itinerary->day = $index;
                    $itinerary->detail = $itineraryData['detail'];

                    // Handle file upload, resize, and convert to WebP
                    if ($request->hasFile("trip_itineraries.{$index}.image")) {
                        $image = $request->file("trip_itineraries.{$index}.image")->getClientOriginalName();
                        $image = pathinfo($image, PATHINFO_FILENAME);
                        $imageName = time() . '_' . str_replace(" ", "_", $image) . '.webp';

                        // Resize to 480x320 and convert to WebP
                        $img = Image::make($request->file("trip_itineraries.{$index}.image")->getRealPath());
                        $img->resize(480, 320)->encode('webp', 80);
                        $destinationPath = base_path('assets/images/resources/destinations/' . $imageName);
                        $img->save($destinationPath);

                        // Resize to 900x500 and convert to WebP
                        $img = Image::make($request->file("trip_itineraries.{$index}.image")->getRealPath());
                        $img->resize(900, 500)->encode('webp', 80);
                        $featuredPath = base_path('assets/images/resources/featured/' . $imageName);
                        $img->save($featuredPath);

                        $itinerary->image = $imageName;
                    } else {
                        $itinerary->image = isset($itineraryData['existing_image']) ? $itineraryData['existing_image'] : "";
                    }

                    $trip->itineraries()->save($itinerary);
                }
            }

            // Create trip schedules
            if(!empty($request->trip_schedules)) {
                $trip->schedules()->delete();
                foreach ($request->trip_schedules as $scheduleData) {
                    TripSchedule::create([
                        'trip_id' => $trip->id,
                        'month' => date('F', strtotime($scheduleData['start_date'])),
                        'year' => date('Y', strtotime($scheduleData['start_date'])),
                        'start_date' => $scheduleData['start_date'],
                        'end_date' => $scheduleData['end_date'],
                        'price' => $scheduleData['price'],
                    ]);
                }
            }

            // Commit the transaction
            DB::commit();
            // Redirect back with a success message
            return redirect()->route('trips.index')->with('success', 'Trip updated successfully!');
        } catch (\Exception $e) {
            // Rollback the transaction
            DB::rollBack();
            // Handle any errors that occur during the process
            return redirect()->back()->withErrors(['error' => 'An error occurred: ' . $e->getMessage()]);
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $trip = Trip::find($id);
            if ($trip) {
                // Assuming cascading deletes are set up in the model relationships
                $trip->mediaGalleries->delete();
                $trip->schedules->delete();
                $trip->itineraries->delete();
                $trip->destinations->delete();
                $trip->delete();

                return response()->json(['message' => 'Trip deleted successfully'], 204);
            } else {
                return response()->json(['error' => 'Trip not found'], 404);
            }
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }


    private function resizeAndSaveImage($file, $imageName)
    {
        $img = Image::make($file->getRealPath());

        // Resize to 480*320 and convert to WebP
        $img->resize(480, 320)->encode('webp');
        $img->save(base_path('assets/images/resources/destinations/' . $imageName . '.webp'), 80, 'webp');

        // Resize to 900*500 and convert to WebP
        $img = Image::make($file->getRealPath());
        $img->resize(900, 500)->encode('webp');
        $img->save(base_path('assets/images/resources/featured/' . $imageName . '.webp'), 80, 'webp');
    }

    private function hasNonEmptyDestinationArrayItem($destinationArray)
    {
        foreach ($destinationArray as $row) {
            // Check if any item in the array contains non-empty data
            if (!empty($row['name']) && !empty($row['latitude']) && !empty($row['longitude'])) {
                return true;
            }
        }

        return false;
    }

    private function hasNonEmptyScheduleArrayItem($Array)
    {
        foreach ($Array as $row) {
            // Check if any item in the array contains non-empty data
            if (!empty($row['start_date']) && !empty($row['end_date'])) {
                return true;
            }
        }

        return false;
    }
    private function hasNonEmptyArrayItem($Array)
    {
        foreach ($Array as $row) {
            // Check if any item in the array contains non-empty data
            if (!empty($row['name']) ) {
                return true;
            }
        }

        return false;
    }

}
