@extends('layouts.app')

@section('title', 'Active Businesses')

@section('content')
<link
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
rel="stylesheet"
/>
<link
href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
rel="stylesheet"
/>
<style>
    body {
        background-color:#f8f7f4; /* apna desired color */
    }
</style>
<div class="container my-5">
    <h2 class="mb-4 text-center text-primary bold">Businesses</h2>

    <div class="row">
        @forelse($businesses as $business)
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    @if($business->logo)
                        <img width="150px" height="100px"  src="{{ asset('storage/' . $business->logo) }}" class="mx-auto" alt="{{ $business->name }}">
                    @endif
                    <div class="card-body">
                        <p class="card-title fs-4">{{ $business->name }}
                           
                        </p>
<p class="m-1"> {{-- Active badge --}}
    @if($business->is_active)
        <span class="active-business">
            active
        </span>
    @else
        <span class="badge bg-secondary d-flex align-items-center gap-1">
            <i class="bi bi-x-circle-fill"></i> Inactive
        </span>
    @endif</p>
    <p class="card-text m-0"><i class="fa-solid fa-circle-user me-2 "></i>Owner Of This : {{ $business->owner_name }}</p>
                        <p class="card-text m-0"><i class="bi bi-envelope-fill  me-2"></i>{{ $business->email }} , <i class="bi bi-telephone-fill me-2"></i>{{$business->phone}}</p>
                        <p class="card-text m-0"><i class="bi bi-briefcase-fill me-2"></i>{{ $business->category }}</p>
                        <p class="card-text m-0"><i class="bi bi-building  me-2"></i>{{ $business->city }}, {{ $business->state }} , {{ $business->country }}</p>
                        {{-- Description Accordion --}}
    @if($business->description)
    <div class="accordion mt-2" id="accordion{{ $business->id }}">
        <div class="accordion-item">
            <h2 class="accordion-header" id="heading{{ $business->id }}">
                <button class="accordion-button collapsed p-2 text-primary robotoBold fs-14 " type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse{{ $business->id }}" aria-expanded="false"
                    aria-controls="collapse{{ $business->id }}">
                    View Description
                </button>
            </h2>
            <div id="collapse{{ $business->id }}" class="accordion-collapse collapse"
                aria-labelledby="heading{{ $business->id }}" data-bs-parent="#accordion{{ $business->id }}">
                <div class="accordion-body p-2">
                    {{ $business->description }}
                </div>
            </div>
        </div>
    </div>
@endif
                        
                       
                        @if($business->website)
                        <a href="{{ $business->website }}" target="_blank" class="btn btn-primary btn-sm mt-4">
                            Visit Website
                        </a>
                    @endif
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12">
                <p class="text-center">No active businesses found.</p>
            </div>
        @endforelse
    </div>
</div>
@endsection
