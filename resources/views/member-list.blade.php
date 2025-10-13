@extends('layouts.app')

@section('content')
<div class="container">
    <form method="GET" action="{{ route('membership.index') }}" class="mb-4 mt-4 w-lg-50">
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
                        <img src="{{ asset('storage/'.$member->pic_path) ?? 'https://via.placeholder.com/100' }}" 
                             class="img-fluid rounded-circle mt-4 mb-4" alt="{{ $member->member_name }}">
                    </div>
                    <!-- Middle: Details -->
                    <div class="col-7 details">
                        <div class="card-body p-1">
                            <h5 class="card-title robotoBold">{{ $member->member_name }}</h5>
                            <p class="card-text fs-14  m-0 "> {{ $member->phone }}</p>
                            <p class="card-text fs-14   m-0" > {{ $member->email }}</p>
                        </div>
                    </div>
     
                  
                    <div class="border-top d-flex justify-content-between align-items-center">
                        <a href="{{ route('membership.show', $member->id) }}" class="m-1 mb-2 ">More Details →</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <!-- Pagination -->
    <div class="d-flex justify-content-center">
        {{ $members->links() }}
    </div>
</div>
@endsection
