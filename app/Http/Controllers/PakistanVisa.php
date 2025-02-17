<?php

namespace App\Http\Controllers;
use App\Models\Trip;

use Illuminate\Http\Request;

class PakistanVisa extends Controller
{
    public function pakistan_visa(){
        $similar_trips = Trip::inRandomOrder()
                         ->take(3) // Adjust the number of similar trips displayed
                         ->get();
        $dynamicTitle = 'Pakistan Journey Starts Here: Visa Solutions & Bespoke Travel Support | Destination Pakistan';
        $dynamicDescription = 'Destination Pakistan offers comprehensive visa assistance and personalized travel services for exploring the vibrant landscapes and cultural richness of Pakistan. Seamlessly navigate the visa process and tailor your journey with our expert guidance and support.';
        
        return view('website.pakistan-visa',[
            'similar_trips' => $similar_trips,
            'title' => $dynamicTitle,
            'description' => $dynamicDescription]);

    }
}
