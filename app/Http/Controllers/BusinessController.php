<?php

namespace App\Http\Controllers;

use App\Models\Business;
use Illuminate\Http\Request;

class BusinessController extends Controller
{
    public function create()
    {
        return view('Business-form');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'owner_name' => 'required|string|max:255',
            'category' => 'nullable|string|max:100',
            'description' => 'nullable|string',
            'email' => 'nullable|email',
            'phone' => 'nullable|string|max:20',
            'city' => 'nullable|string|max:50',
            'state' => 'nullable|string|max:50',
            'country' => 'nullable|string|max:50',
            'website' => 'nullable|url|max:255',
            'logo' => 'nullable|image|max:100', // 100 KB
            'is_active' => 'nullable|boolean',
        ]);

        $data = $request->all();

        if ($request->hasFile('logo')) {
            $data['logo'] = $request->file('logo')->store('logos', 'public');
        }

        Business::create($data);

        return redirect()->back()->with('success', 'Business registered successfully!');
    }
    public function active()
{
    // sirf active businesses fetch karo
    $businesses = \App\Models\Business::where('is_active', true)->get();

    return view('active-businesses', compact('businesses'));
}
   
}
