<?php

namespace App\Http\Controllers;
use App\Models\Trip;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $trips = Trip::with('category', 'mediaGalleries')->get();

        return view('website.index', compact('trips'));
    }
}
