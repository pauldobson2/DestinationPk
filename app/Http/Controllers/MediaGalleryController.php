<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trip;
use App\Models\MediaGallery;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;


class MediaGalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($trip_id)
    {
        // Fetch the trip details using $trip_id
        $trip = Trip::findOrFail($trip_id);

        // Pass the $trip details to the view
        return view('media-galleries.create', compact('trip'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { //dd($request->all());
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'trip_id' => 'required|exists:trips,id',
        ]);

        $tripId = $request->trip_id;
        $trip = Trip::findOrFail($tripId);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            // Extract the original file name and replace spaces with underscores
            $originalFileName = str_replace(' ', '_', $image->getClientOriginalName());

            // Generate the new image name
            $imageName = 'destination_pakistan_' . time() . '_' . $originalFileName;


            // Resize and save the image in WebP format
            $resizedImage = Image::make($image->getRealPath())->fit(2000, 1200)->encode('webp', 80);
            $imageName = $imageName .'.webp';
            // $resizedImage->save(public_path('assets/images/resources/destinations/gallery/') . $imageName . '.webp');
            $resizedImage->save(base_path('assets/images/resources/destinations/gallery/' . $imageName));

            // Store the image path in the database
            MediaGallery::create([
                'trip_id' => $tripId,
                'image_path' => $imageName,
            ]);

            return redirect()->route('trips.index')->with('success', 'Image uploaded and added to the gallery.');
        }

        return redirect()->back()->with('error', 'No image found to upload.');
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
        $mediaGallery = MediaGallery::findOrFail($id);

        return view('media-galleries.edit', compact('mediaGallery'));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function update(Request $request, MediaGallery $media_gallery)
    {
        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Add your image validation rules
        ]);

        if ($request->hasFile('image')) {
            // Delete existing image if it exists
            File::delete(public_path('assets/images/resources/destinations/gallery/' . $media_gallery->image_path));

            // Upload and update the new image
            $imageName = 'destination_pakistan_' . time() . '_' . str_replace(" ", "_", $request->file('image')->getClientOriginalName());
            $resizedImage = Image::make($request->file('image')->getRealPath())->fit(2000, 1200)->encode('webp', 80);
            // $resizedImage->save(public_path('assets/images/resources/destinations/gallery/' . $imageName . '.webp'));
            $resizedImage->save(base_path('assets/images/resources/destinations/gallery/' . $imageName), 801, 'webp');

            // Update the image path in the database
            $media_gallery->image_path = $imageName . '.webp';
        }

        // Save changes
        $media_gallery->save();

        return redirect()->back()->with('success', 'Media gallery updated successfully.');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $media = MediaGallery::findOrFail($id);

        // Delete the image file
        Storage::delete('assets/images/resources/destinations/gallery/' . $media->image_path);

        // Delete the record from the database
        $media->delete();

        return redirect()->back()->with('success', 'Image deleted successfully!');
    }
}
