@extends('layouts.app')

@section('title', __('terms-conditions.page_title'))

@section('content')



<div class="container">
    <header class="text-center mt-5">
        <h1 class="text-primary bold ">{{ __('terms-conditions.header_title') }}</h1>
        <p class="lead text-primary bold">{{ __('terms-conditions.header_subtitle') }}</p>
    </header>

    <section>
        <h3 class="text-primary bold fs-5">{{ __('terms-conditions.intro_title') }}</h3>
        <p>{{ __('terms-conditions.intro_body') }}</p>
    </section>

    <section >
        <h3 class="text-primary bold fs-5">{{ __('terms-conditions.terms_title') }}</h3>
        <ul>
            <li>{{ __('terms-conditions.terms_item_1') }}</li>
            <li>{{ __('terms-conditions.terms_item_2') }}</li>
            <li>{{ __('terms-conditions.terms_item_3') }}</li>
        </ul>
    </section>

    <section >
        <h3 class="text-primary bold fs-5">{{ __('terms-conditions.privacy_title') }}</h3>
        <p>{{ __('terms-conditions.privacy_body') }} <a href="/privacy-policy">{{ __('terms-conditions.privacy_link_text') }}</a></p>
    </section>

    <section>
        <h3 class="text-primary bold fs-5">{{ __('terms-conditions.ip_title') }}</h3>
        <p>{{ __('terms-conditions.ip_body') }}</p>
    </section>

    <section>
        <h3 class="text-primary bold fs-5">{{ __('terms-conditions.liability_title') }}</h3>
        <p>{{ __('terms-conditions.liability_body') }}</p>
    </section>

    <section>
        <h3 class="text-primary bold fs-5">{{ __('terms-conditions.contact_title') }}</h3>
        <p>{{ __('terms-conditions.contact_body') }}</p>
        <p>{{ __('terms-conditions.contact_email_label') }}: <a href="mailto:info@kksjodhpur.in">info@kksjodhpur.in</a></p>
        <p>{{ __('terms-conditions.contact_phone_label') }}: +91 99501 25210</p>
    </section>

    
</div>



@endsection