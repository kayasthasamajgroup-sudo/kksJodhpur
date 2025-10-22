@extends('layouts.app')

@section('title', 'Events Page')

@section('content')
<div class="container py-5">
    <h1 class="text-primary h1 text-center mb-5 bold">Kayastha Kalyaan Samiti Events</h1>
    <div class="row">
        @foreach($events as $event)
            <div class="col-md-3 col-6 mb-4">
                <div class="card text-center">
                    <!-- Thumbnail Image -->
                    <img  src="{{ asset('storage/' . $event->event_photo) }}" 
                         alt="{{ $event->event_name }}" 
                         class="card-img-top event-image"
                         
                         data-bs-toggle="modal" 
                         data-bs-target="#imageModal-{{ $event->id }}">

                    <!-- Modal -->
                    <div class="modal fade" id="imageModal-{{ $event->id }}" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">
                                <div class="modal-body p-0">
                                    <img   src="{{ asset('storage/' . $event->event_photo) }}" class="img-fluid w-100 " alt="{{ $event->event_name }}">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <!-- Clickable name -->
                        <p class="card-title">
                            <a class="bold" href="{{ route('event.participate.form', $event->id) }}">
                                Participate in  {{ $event->event_name }}
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
