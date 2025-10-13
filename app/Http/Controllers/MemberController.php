<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function showForm()
    {
        return view('membership-form');
    }

    public function show($id)
    {
        $member = Member::findOrFail($id);
        return view('members-details', compact('member'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'member_name' => 'required|string|max:255',
            'spouse_name' => 'required|string|max:255',
            'age' => 'required|integer',
            'dob' => 'required|date',
            'father_name' => 'required|string|max:255',
            'mother_name' => 'required|string|max:255',
            'sub_caste' => 'required|string|max:255',
            'gotra' => 'required|string|max:255',
            'qualification' => 'required|string|max:255',
            'profession' => 'required|string|max:255',
            'parental_place' => 'required|string|max:255',
            'postal_address' => 'required|string',
            'office_address' => 'required|string',
            'email' => 'required|email|unique:kks_members,email',
            'phone' => 'required|string',
            'family_members' => 'required|string',
            'pic' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'signature' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'receipt' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:5120',
        ]);

        // File uploads
        $picPath = $request->file('pic')->store('uploads', 'public');
        $signPath = $request->file('signature')->store('uploads', 'public');
        $receiptPath = $request->file('receipt')->store('uploads', 'public');

        // Save to DB
        Member::create([
            'member_name' => $request->member_name,
            'spouse_name' => $request->spouse_name,
            'age' => $request->age,
            'dob' => $request->dob,
            'father_name' => $request->father_name,
            'mother_name' => $request->mother_name,
            'sub_caste' => $request->sub_caste,
            'gotra' => $request->gotra,
            'qualification' => $request->qualification,
            'profession' => $request->profession,
            'parental_place' => $request->parental_place,
            'postal_address' => $request->postal_address,
            'office_address' => $request->office_address,
            'email' => $request->email,
            'phone' => $request->phone,
            'family_members' => $request->family_members,
            'pic_path' => $picPath,
            'sign_path' => $signPath,
            'receipt_path' => $receiptPath,
        ]);

        return redirect()->back()->with('success', 'Member registered successfully!');

    



    }
    // MemberController.php

    public function index(Request $request)
    {
        $query = Member::query();
    
        // Agar search query present hai
        if ($request->has('search') && $request->search != '') {
            $query->where('phone', 'like', '%' . $request->search . '%');
        }
    
        // 10 members per page
        $members = $query->paginate(10)->withQueryString(); // pagination ke saath search query maintain rahe
        return view('member-list', compact('members'));
    }
    
// MemberController.php

}
