
    
    
@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-5">
    

                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.2s">
                    <img class="img-fluid mb-3" src="banner-image/about-banner.jpg" alt="">
                    <div class="d-flex align-items-center bg-light">
                        <div class="btn-square flex-shrink-0 bg-primary" style="width: 100px; height: 100px;">
                            <i class="fa fa-phone fa-2x text-dark"></i>
                        </div>
                        <div class="px-3">
                            <h3>
                                +91 99501 25210</h3>
                            <span>{{ __('messages.contact') }}</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="font-dancing-script text-primary bold">{{ __('messages.about_us') }}</h1>
                    <h1 class="mb-5">{{ __('messages.choose_us') }}</h1>
                    <p class="mb-4">{{ __('about.about_us_page_p1') }}</p>
                    <div class="row g-3 mb-5">
                        <div class="col-sm-6">
                            <div class="bg-light text-center p-4">
                                <i class="fas fa-calendar-alt fa-4x text-primary"></i>
                                <h1 class="display-5" data-toggle="counter-up">10</h1>
                                <p class="text-dark text-uppercase mb-0">{{ __('messages.years_of_service') }}</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="bg-light text-center p-4">
                                <i class="fas fa-users fa-4x text-primary"></i>
                                <h1 class="display-5" data-toggle="counter-up">200</h1>
                                <p class="text-dark text-uppercase mb-0">{{ __('messages.trusted_members') }}</p>
                            </div>
                        </div>
                    </div>
                  
                </div>
            </div>
            <div class="row g-5">
                <p class="display-4 mt-2 text-primary">{{ __('about.The_Story_of_Dedication_and_Service') }}</p>
                <p class="mt-2">{{ __('about.p1') }}</p>
                <p class="mt-2">{{ __('about.p2') }}</p>
                <p class="mt-2">{{ __('about.p3') }}</p>

                </div>
        </div>
    </div>
    <!-- About End -->
    @endsection