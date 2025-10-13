<?php

namespace App\Http\Controllers;

use App\Models\LatestUpdate;
use App\Models\President;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        // Presidents list
        $presidents = President::all(); 

        // Latest Updates scrolling titles
        $latestUpdates = LatestUpdate::latest()->pluck('title'); // last 10 updates

        // Pass both to view
        return view('welcome', compact('presidents', 'latestUpdates'));
    }
}
