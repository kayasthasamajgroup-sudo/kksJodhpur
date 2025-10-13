



@extends('layouts.app')

@section('content')
<link
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
rel="stylesheet"
/>
<link
href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
rel="stylesheet"
/>

<div class="container py-5 ps-5 pe-5">
    <h2 class="mb-4 text-center fw-bold text-primary bold">Member Details</h2>

    <div class="card shadow-lg border-0 overflow-hidden">
        <div class="row g-0">
            
            <!-- Left Side -->
            <div class="col-md-4 bg-brown text-dark d-flex flex-column align-items-center pt-3 p-md-4">
                <img src="{{ $member->pic_path ? asset('storage/'.$member->pic_path) : 'https://via.placeholder.com/200' }}" 
                     alt="{{ $member->member_name }}"
                     class=" member-image img-fluid rounded-circle mb-3 border border-3 border-light"
                   >
                
               
            </div>

            <!-- Right Side -->
            <div class="col-md-8">
                <!-- Top Brown Stripe -->
                <div class="bg-brown  px-4 py-3">
                    <h5 class="mb-0 text-white display-1 display-md-4"><i class="fa-solid fa-circle-user me-2 fs-1"></i>{{ $member->member_name }}</h5>
                </div>

                <!-- Details -->
                <div class="p-4">
                    <div class="row">
                        <div class="col-sm-6 mb-3"><i class="bi bi-envelope-fill text-brown me-2"></i><strong>Email:</strong> {{ $member->email }}</div>
                        <div class="col-sm-6 mb-3"><i class="bi bi-telephone-fill text-brown me-2"></i><strong>Phone:</strong> {{ $member->phone }}</div>
                        <div class="col-sm-6 mb-3"><i class="bi bi-calendar-fill text-brown me-2"></i><strong>Age:</strong> {{ $member->age }}</div>
                        <div class="col-sm-6 mb-3"><i class="bi bi-calendar-date-fill text-brown me-2"></i><strong>Date Of Birth:</strong> {{ $member->dob }}</div>
                        <div class="col-sm-6 mb-3"><i class="bi bi-heart-fill text-brown me-2"></i><strong>Spouse:</strong> {{ $member->spouse_name }}</div>
                        <div class="col-sm-6 mb-3"><i class="bi bi-people-fill text-brown me-2"></i><strong>Family Members:</strong> {{ $member->family_members }}</div>
                        <div class="col-sm-6 mb-3"><i class="bi bi-diagram-3-fill text-brown me-2"></i><strong>Sub Caste:</strong> {{ $member->sub_caste }}</div>
                        <div class="col-sm-6 mb-3"><i class="bi bi-tree-fill text-brown me-2"></i><strong>Gotra:</strong> {{ $member->gotra }}</div>
                        <div class="col-sm-6 mb-3"><i class="bi bi-book-fill text-brown me-2"></i><strong>Qualification:</strong> {{ $member->qualification }}</div>
                        <div class="col-sm-6 mb-3"><i class="bi bi-geo-alt-fill text-brown me-2"></i><strong>Parental Place:</strong> {{ $member->parental_place }}</div>
                        <div class="col-sm-6 mb-3"><i class="bi bi-house-fill text-brown me-2"></i><strong>Postal Address:</strong> {{ $member->postal_address }}</div>
                        <div class="col-sm-6 mb-3"><i class="bi bi-building text-brown me-2"></i><strong>Office Address:</strong> {{ $member->office_address }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="text-center mt-4">
        <a href="{{ route('membership.index') }}" class="btn btn-primary">Back</a>
    </div>
</div>




@endsection
