@extends('layouts.app')

@section('title', 'Events Page')

@section('content')
<div class="container py-5">
    <h1 class="text-primary h1 text-center mb-5">{{ __('messages.enews_page_title') }}</h1>
    <div class="row">
        @foreach($news as $news)
            <div class="col-md-4 col-6 mb-4">
                <div class="card text-center">
                    <!-- Thumbnail Image -->
                    <img height="180" src="{{ asset('storage/' . $news->news_photo) }}" 
                         alt="{{ $news->news_name }}" 
                         style="cursor:pointer;" 
                         data-bs-toggle="modal" 
                         data-bs-target="#imageModal-{{ $news->id }}">

                    <!-- Modal -->
                    <div class="modal fade" id="imageModal-{{ $news->id }}" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">
                                <div class="modal-body p-0">
                                    <img src="{{ asset('storage/' . $news->news_photo) }}" class="img-fluid w-100" alt="{{ $news->news_name }}">
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
                           
                                {{ $news->news_name }}
                          
                        </p>
                        <a  href="{{ route('single.news', $news->id) }}">
                            Read More
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
