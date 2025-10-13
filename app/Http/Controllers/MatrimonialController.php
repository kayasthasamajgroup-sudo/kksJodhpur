<?php

namespace App\Http\Controllers;

use App\Mail\MailSubmitted;
use App\Models\Matrimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
class MatrimonialController extends Controller
{
    public function create() {
        return view('matrimonial-form'); // your Blade file
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'createdBy' => 'required|string',
            'person_name' => 'required|string|max:255',
            'age' => 'required|integer|min:18|max:100',
            'marital_status' => 'required|string',
            'gender' => 'required|string|in:male,female',
            'dob' => 'required|date',
            'sub_cast' => 'required|string',
            'gotra' => 'required|string',

            'father_name' => 'required|string|max:255',
            'father_occupation' => 'required|string|max:255',
            'mother_name' => 'required|string|max:255',
            'email' => 'required|email|unique:matrimonials,email',
            'phone' => 'required|string|max:15',
            'qualification' => 'required|string',
            'profession' => 'required|string',
            'hobbies' => 'nullable|string',

            'postal_address' => 'required|string',
            'pic' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
        ]);

        if ($request->hasFile('pic')) {
            $validated['pic'] = $request->file('pic')->store('uploads/matrimonials', 'public');
        }

        Matrimonial::create($validated);

        return redirect()->back()->with('success', 'Form submitted successfully!');
    }
    public function show($id)
    {
        $member = Matrimonial::findOrFail($id);
        return view('matrimonial-member-details', compact('member'));
    }
    public function index(Request $request)
    {
        $query = Matrimonial::query();
    
        // Agar search query present hai
        if ($request->has('search') && $request->search != '') {
            $query->where('phone', 'like', '%' . $request->search . '%');
        }
    
        // 10 members per page
        $members = $query->paginate(10)->withQueryString(); // pagination ke saath search query maintain rahe
        return view('matrimonial-member-list', compact('members'));
    }

    function sendInterest(Request $request){
        $data = $request->only('email');
      
        // $to=$request->to;
        // $msg=$request->message;
        // $subject=$request->subject;
        Mail::to('tanyagulati783@gmail.com')->send(new MailSubmitted($data));
        return redirect()->back()->with('success','Your Interest is submitted!');
    }
}
