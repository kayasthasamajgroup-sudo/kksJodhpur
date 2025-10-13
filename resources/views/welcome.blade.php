

@extends('layouts.app')

@section('title', 'Home Page')

@section('content')

    <!-- Hero Start -->
    <div class="container-fluid p-0 hero-header bg-light pt-md-5 pb-md-5">
        <div class="container p-0">
            <div class="row g-0 align-items-center">
                <div class="col-lg-6 hero-header-text pt-md-5 pb-md-5">
                    <div class="pb-md-5 px-3 ps-lg-0">
                

                        <h1 class="font-dancing-script text-primary animated slideInLeft">{{ __('messages.welcome') }}</h1>
                        <h1 class="display-1 mb-4 animated slideInLeft">{{ __('messages.name') }}</h1>
                        <div class="row g-4 animated slideInLeft d-none d-md-block">
                            <div class="col-6 ">
                                <div class="d-flex align-items-center">
                                    <div class="btn-square btn btn-primary flex-shrink-0">
                                        <i class="fa fa-phone text-dark"></i>
                                
                                    </div>
                                    <div class="px-3 mt-md-4 ">
                                        <h5 class="text-primary mb-0 text-size">{{ __('messages.call_us') }}</h5>
                                        <p class="fs-5 text-dark mb-0">+91 99501 25210</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <div class="btn-square btn btn-primary flex-shrink-0">
                                        <i class="fa fa-envelope text-dark"></i>
                                    </div>
                                    <div class="px-3">
                                        <h5 class="text-primary mb-0">{{ __('messages.mail_us') }}</h5>
                                        <p class="fs-5 text-dark mb-0">info@domain.com</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="owl-carousel header-carousel animated fadeIn">
                        <img class="img-fluid" src="banner-image/banner1.webp" loading="lazy" alt="">
                        <img class="img-fluid" src="banner-image/banner2.webp" loading="lazy" alt="">
                        <img class="img-fluid" src="banner-image/banner3.webp" loading="lazy" alt="">
                    </div>
                </div>
               
            </div>
        </div>
    </div>
    <!-- Hero End -->

{{-- news line start --}}
<div class="container-fluid p-0">
    <div class="latest-updates">
      <div class="d-flex">
        <span class="bg-primary text-white">{{ __('messages.latest_updates') }}</span>
        @if($latestUpdates->count())
        <marquee behavior="scroll" direction="left" scrollamount="5" loop="infinite">
            @foreach($latestUpdates as $title)
            {{ $title }} &nbsp;&nbsp;|&nbsp;&nbsp;
        @endforeach
        </marquee>
        @else
    <p>No latest updates found.</p>
@endif
      </div>
    </div>
  </div>
  
{{-- news line end --}}

<!-- president member Start -->
<div class="container-fluid py-md-5 mt-3 mt-md-0">
    <div class="container">
        <div class="text-center wow fadeIn" data-wow-delay="0.2s">
            <p class="h1 font-dancing-script text-primary mb-3">{{ __('messages.kks_presidents') }}</p>
            {{-- <h1 class="mb-5">What Clients Say!</h1> --}}
        </div>
        <div class="owl-carousel testimonial-carousel wow fadeIn mt-2" data-wow-delay="0.3s">
            @foreach($presidents as $president)
            <div class="text-center bg-light p-1 p-md-4">
                <i class="fa fa-quote-left fa-3x mb-3"></i>
                @if($president->photo)
                <img src="{{ asset('storage/' . $president->photo) }}" alt="{{ $president->name }}" class="img-fluid mx-auto border p-1 mb-3" loading="lazy" >
                @endif
                <h4 class="mb-1">{{ $president->name }}</h4>
                <span>{{ $president->term }}</span>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- president member End -->
    <!-- About Start -->
    <div class="container-fluid py-5 pb-0">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.2s">
                    <img class="img-fluid mb-3" src="banner-image/about-banner.jpg" alt="">
                    <div class="d-flex align-items-center bg-light">
                        <div class="btn-square flex-shrink-0 bg-primary" style="width: 100px; height: 100px;">
                            <i class="fa fa-phone fa-2x text-dark"></i>
                        </div>
                        <div class="px-3">
                            <h3>+91 99501 25210</h3>
                            <span>{{ __('messages.contact') }}</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="font-dancing-script text-primary">{{ __('messages.about_us') }}</h1>
                    <h1 class="mb-md-5 mb-2">{{ __('messages.choose_us') }}</h1>
                    <p class="mb-4"> {{ __('messages.about_content') }}</p>
                    <div class="row g-3 mb-md-5 mb-2">
                        <div class="col-6">
                            <div class="bg-light text-center p-4">
                                <i class="fas fa-calendar-alt fa-4x text-primary"></i>
                                <h1 class="display-5" data-toggle="counter-up">10</h1>
                                <p class="text-dark text-uppercase mb-0">{{ __('messages.years_of_service') }}</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="bg-light text-center p-4">
                                <i class="fas fa-users fa-4x text-primary"></i>
                                <h1 class="display-5" data-toggle="counter-up">200</h1>
                                <p class="text-dark text-uppercase mb-0">{{ __('messages.trusted_members') }}</p>
                            </div>
                        </div>
                    </div>
                    <a class="btn btn-primary text-uppercase px-md-5 py-3 d-md-inline d-block mx-auto w-md-auto w-50" href="/about-us">{{ __('messages.read_more') }}</a>
                </div>
            </div>
           
        </div>
    </div>
    <!-- About End -->

{{-- business section start --}}
<div class="container-fluid  pt-2">
    <div class="container">
        <div class="row g-5 mt-0">
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.2s">
                <img  class="img-fluid mb-3 business-image" src="banner-image/business.svg" alt="">
               
            </div>
            <div class="col-lg-6 wow fadeIn mt-md-5 mt-0" data-wow-delay="0.5s">
                <h1 class="font-dancing-script text-primary mt-md-4 mt-0">{{ __('messages.business_title') }}</h1>
                <h1 class="mb-md-5 mb-2">{{ __('messages.business_heading') }}</h1>
                <p class="mb-md-5 mb-2"> {{ __('messages.business_description') }}</p>
                <p class="mt-4">
                <a class="btn btn-primary text-uppercase px-md-5 py-3 d-inline mx-auto w-md-auto w-50 " href="/business-form">{{ __('messages.register_business_btn') }} </a>
                <a class="btn btn-primary text-uppercase px-md-5 py-3 d-inline mx-auto w-md-auto w-50 bg-white" href="/active-businesses">{{ __('messages.active_businesses_btn') }} </a>
                </p>
            </div>
        </div>
       
    </div>
</div>

{{-- business section end --}}

    <!-- Service Start -->
    <div class="container-fluid service py-5 pb-0">
        <div class="container">
            <div class="text-center wow fadeIn" data-wow-delay="0.1s">
                <h1 class="font-dancing-script text-primary">{{ __('messages.our_services') }}</h1>
                <h1 class="mb-5">{{ __('messages.explore_our_services') }}</h1>
            </div>
            <div class="row g-4 g-md-0 text-center">
                <div class="col-md-6 col-lg-4">
                    <div class="service-item h-100 p-4 border-bottom border-end wow fadeIn" data-wow-delay="0.1s">
                   
                        <h3 class="mb-3 fs-4">{{ __('messages.charity') }}</h3>
                        <p class="mb-3">{{ __('messages.charity_content') }}</p>
                       
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-item h-100 p-4 border-bottom border-lg-end wow fadeIn" data-wow-delay="0.3s">
                        
                        <h3 class="mb-3 fs-4">{{ __('messages.donation') }}</h3>
                        <p class="mb-3">{{ __('messages.donation_content') }}</p>
                        {{-- <a class="btn btn-sm btn-primary text-uppercase" href="">Read More <i
                                class="bi bi-arrow-right"></i></a> --}}
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-item h-100 p-4 border-bottom border-end border-lg-end-0 wow fadeIn"
                        data-wow-delay="0.5s">
                      
                        <h3 class="mb-3 fs-4">{{ __('messages.disaster') }}</h3>
                        <p class="mb-3">{{ __('messages.disaster_content') }}</p>
                       
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-item h-100 p-4 border-bottom border-lg-bottom-0 border-lg-end wow fadeIn"
                        data-wow-delay="0.1s">
                     
                        <h3 class="mb-3 fs-4">{{ __('messages.education_support') }}</h3>
                        <p class="mb-3">{{ __('messages.education_support_content') }}</p>
                      
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-item h-100 p-4 border-end wow fadeIn" data-wow-delay="0.3s">
                      
                        <h3 class="mb-3 fs-4">{{ __('messages.healthcare_assistance') }}</h3>
                        <p class="mb-3">{{ __('messages.healthcare_assistance_content') }}</p>
                       
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-item h-100 p-4 wow fadeIn" data-wow-delay="0.5s">
                        <h3 class="mb-3 fs-4">{{ __('messages.woman') }}</h3>
                        <p class="mb-3">{{ __('messages.woman_content') }}</p>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->



    <!-- KKS Yearly Book Start -->
    <div class="container-fluid price px-0 py-5">
        <div class="row g-0">
            <div class="col-md-6">
                <div class="d-flex align-items-center h-100 bg-primary p-md-5 p-3">
                    <div class="wow fadeIn" data-wow-delay="0.3s">
                        <h1 class="font-dancing-script text-white">KKS</h1>
                        <h1 class="mb-0">{{ __('messages.yearly_book') }}</h1>
                        <h1 class="display-3 text-uppercase mb-5" style="letter-spacing: 10px;">{{ __('messages.kayasth_upliftment') }}</h1>
                      
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="h-100 bg-dark p-5 text-white">
                    <div class="text-center p-5">
                        <img class="book-image" src="banner-image/KKS-Book-1-copy.jpg" loading="lazy" alt="">
                    </div>
                  
                  <p> 
                    {{ __('messages.book_content') }}
                  </p>
                 
                  <a class="btn btn-sm btn-primary text-uppercase" href="/banner-image/KKS-Book.zip">{{ __('messages.download_pdf') }}<i
                    class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- KKS Yearly Book End -->


    



   

    {{-- <!-- Blog Start -->
    <div class="container-fluid blog p-0 mt-5">
        <div class="row g-0">
            <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                <div class="h-100 d-flex flex-column justify-content-center bg-primary py-5 px-4">
                    <p class="mb-2"><i class="fa fa-calendar-alt text-dark me-1"></i>Jan 01, 2045 | <i
                            class="fa fa-folder-open text-dark me-1"></i>Hair Salon</p>
                    <h3 class="mb-3">How to Extend The Life of Your Haircolor</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas eget libero lobortis, auctor
                        nisi quis, aliquet nunc. Nam dapibus interdum lacus.</p>
                    <a class="btn btn-dark align-self-start text-uppercase" href="">Read More <i
                            class="bi bi-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.3s">
                <div class="h-100">
                    <img class="img-fluid w-100 h-100" src="banner-image/image-1.webp" alt="" style="object-fit: cover;">
                </div>
            </div>
            <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.5s">
                <div class="h-100 d-flex flex-column justify-content-center bg-primary py-5 px-4">
                    <p class="mb-2"><i class="fa fa-calendar-alt text-dark me-1"></i>Jan 01, 2045 | <i
                            class="fa fa-folder-open text-dark me-1"></i>Hair Salon</p>
                    <h3 class="mb-3">Hottest Hairstyles and Haircuts in 2045</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas eget libero lobortis, auctor
                        nisi quis, aliquet nunc. Nam dapibus interdum lacus.</p>
                    <a class="btn btn-dark align-self-start text-uppercase" href="">Read More <i
                            class="bi bi-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.7s">
                <div class="h-100">
                    <img class="img-fluid w-100 h-100" src="banner-image/image-2.webp" alt="" style="object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End --> --}}


 
    @endsection

  