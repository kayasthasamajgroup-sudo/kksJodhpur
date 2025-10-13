<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

use App\Models\EventMember;

class EventController extends Controller
{
    public function index()
    {
        // Sabhi events fetch karo
        $events = Event::all();

        // Blade view me pass karo
        return view('events', compact('events'));
    }
    public function participateForm(Event $event)
    {
        // Event ke data ko form me send karo
        return view('event-participate-form', compact('event'));
    }

    

    public function participateSubmit(Request $request)
    {
        $request->validate(
            [
                'member_name' => 'required|string|max:255',
                'email' => 'required|email:rfc,dns',
                'phone' => ['required', 'regex:/^[0-9]{10}$/'],
                'home_address' => 'required|string|max:500',
                'family_members' => 'required|integer|min:1|max:9',
                'event_name' => 'required|string|max:255',
                'receipt_photo' => 'required|file|image|max:2048', // max 2MB
            ],
            [
                'phone.regex' => 'Phone number must be 10 digits',
                'email.email' => 'Please enter a valid email address',
            ],
        );

        $data = $request->only('member_name', 'email', 'phone', 'home_address', 'family_members', 'event_name');

        if ($request->hasFile('receipt_photo')) {
            $data['receipt_photo'] = $request->file('receipt_photo')->store('receipts', 'public');
        }

        EventMember::create($data);

        return back()->with('success', 'Participation submitted!');
    }
}
