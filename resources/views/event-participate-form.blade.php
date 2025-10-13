

@extends('layouts.app')

@section('title', 'Home Page')

@section('content')

<div class="container my-5">
  <div class="row align-items-center">
    <!-- Left Column: Image -->
    <div class="col-lg-6 mb-4 mb-lg-0 text-center d-none d-md-inline">
        <img src="{{ asset('storage/' . $event->event_photo) }}" class="img-fluid" alt="{{ $event->event_name }}">

    </div>

    <!-- Right Column: Form -->
    <div class="col-lg-6">
      <div class="card p-4 shadow-sm">
        <h2 class="text-primary text-capitalize">Participate in {{ $event->event_name }}</h2>

     

        <form action="{{ route('event.participate') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <!-- Step 1 -->
          <div class="step active">
          
            <input type="text" name="member_name" class="form-control mb-3" placeholder="Member's Name" required>
            <input type="email" 
            name="email" 
            class="form-control mb-3" 
            placeholder="Email Address"  
           
            title="Please enter a valid email address" 
            required>
           
            <input type="text" name="phone" class="form-control mb-3" placeholder="Phone Number" pattern="[0-9]{10}" title="Enter 10 digit phone number" required>
            
          
                
                <select name="family_members" class="form-select mb-3" required>
                    <option value="">-- Select Participate --</option>
                    <option value="1">1 Member</option>
                    <option value="2">2 Members</option>
                    <option value="3">3 Members</option>
                    <option value="4">4 Members</option>
                    <option value="5">5 Members</option>
                    <option value="6">6 Members</option>
                    <option value="7">7 Members</option>
                    <option value="8">8 Members</option>
                    <option value="9">9 Members</option>
                </select>
            
                <input type="text" value="{{ $event->event_name }}"  name="event_name" class="form-control mb-3" required>
            
            
                <input type="text"  name="home_address" class="form-control mb-3" placeholder="home address" required>
           
    
        
                <label>Receipt Photo</label>
                <input type="file" name="receipt_photo" class="form-control mb-3" required>
            
    
            <button type="submit" class="btn btn-primary">Submit</button>
          

          </div>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection
@if(session('success'))
<div class="toast-container position-fixed top-0 end-0 p-5">

  <div id="successToast" class="toast align-items-center text-bg-success border-0 show" role="alert" aria-live="assertive" aria-atomic="true">
      <div class="d-flex">
          <div class="toast-body">{{ session('success') }}</div>
          <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
      </div>
  </div>

</div>

@endif
@include('partials.toast')
