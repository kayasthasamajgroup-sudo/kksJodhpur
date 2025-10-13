
@extends('layouts.app')

@section('title', 'Contact Page')

@section('content')
<!-- Contact Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="text-center wow fadeIn" data-wow-delay="0.1s">
            <h1 class="font-dancing-script text-primary">{{__('messages.contact-us') }}</h1>
            <h1 class="mb-5">{{__('contact.Have_Any_Query?_Contact_Us') }}</h1>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <p class="text-center mb-4"></p>
                <div class="wow fadeIn" data-wow-delay="0.3s">
                    @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                
                <form action="send-mail" method="POST">
                    @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="name" id="name" placeholder="{{ __('contact.Your_Name') }}" required>
                                    <label for="name">{{ __('contact.Your_Name') }} <span class="red">*
                                    </span></label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="{{ __('contact.Your_Email') }}" required>
                                    <label for="email">{{ __('contact.Your_Email') }} <span class="red">*
                                    </span></label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="subject" id="subject" placeholder="{{ __('contact.Subject') }}" required>
                                    <label for="subject">{{ __('contact.Subject') }} <span class="red">*
                                    </span> </label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" name="message" placeholder="Leave a message here" id="message" required
                                        style="height: 150px"></textarea>
                                    <label for="message">{{ __('contact.Message') }} <span class="red">*
                                    </span></label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3 ms-0" type="submit">{{ __('contact.send_message') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->

@if(session('success'))
<div class="popup success">
    Your query is submitted!
</div>

@else
<div class="popup alert">
    Something Went Wrong!
</div>
@endif
@endsection