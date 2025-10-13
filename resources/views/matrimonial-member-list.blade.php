@extends('layouts.app')

@section('content')
<div class="container">
    <form method="GET" action="{{ route('matrimonial.index') }}" class="mb-4 mt-4 w-lg-50">
        <div class="input-group ">
            <input type="text" name="search" class="form-control search-form border border-primary" placeholder="Search by Phone number" 
                   value="{{ request('search') }}">
            <button class="btn btn-primary" type="submit">Search</button>
        </div>
    </form>
    <div class="row">
        @foreach($members as $member)
        <div class="col-md-6 col-lg-4 mb-4 ">
            <div class="card h-100 border border-primary">
                <div class="row g-0 align-items-center">
                    <!-- Left: Image -->
                    <div class="col-4 ms-2">
                        <img src="{{ asset('storage/'.$member->pic) ?? 'https://via.placeholder.com/100' }}" 
                             class="img-fluid rounded-circle mt-4 mb-4" alt="{{ $member->member_name }}">
                    </div>
                    <!-- Middle: Name, Phone, Email -->
                    <div class="col-7 details">
                        <div class="card-body p-1">
                            <h5 class="card-title robotoBold">{{ $member->person_name }}</h5>
                            <p class="card-text fs-14  m-0 "> {{ $member->age }} yrs , {{ $member->marital_status }}</p>
                            <p class="card-text fs-14   m-0" > {{ $member->postal_address }}</p>
                            <p class="card-text fs-14   m-0" > {{ $member->profession }} ,{{ $member->qualification }} </p>
                            
                           
                        </div>
                       
                       
                    </div>
     
                  
                    <div class="border-top d-flex justify-content-between align-items-center">
                        <a href="{{ route('matrimonial.show', $member->id) }}" class="m-1 mb-2 ">More Details →</a>
                        <form action="{{ route('send-interest') }}" method="POST">
                            @csrf
                            <input type="hidden" name="email" value="{{ $member->email }}">
                            <button type="submit" class="send-request m-1 mb-2">
                                Send Interest
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @if(session('success'))
<div class="popup success">
    Your Interest is submitted!
</div>

@else
<div class="popup alert">
    Something Went Wrong!
</div>
@endif
        @endforeach
    </div>

    <!-- Pagination -->
    <div class="d-flex justify-content-center">
        {{ $members->links() }}
    </div>
</div>

@endsection
