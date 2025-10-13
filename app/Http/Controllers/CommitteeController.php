<?php

namespace App\Http\Controllers;

use App\Models\Committee;
use Illuminate\Http\Request;

class CommitteeController extends Controller
{
    public function index($committee = null)
    {
        // All committee records for buttons
        $allCommittees = ['core', 'female', 'youth'];

        // Fetch content based on selected committee
        if ($committee && in_array($committee, $allCommittees)) {
            $content = Committee::where('committee', $committee)->get();
        } else {
            $content = collect(); // empty collection if none selected
        }

        return view('committee', [
            'allCommittees' => $allCommittees,
            'content' => $content,
            'activeCommittee' => $committee,
        ]);
    }
}

    

