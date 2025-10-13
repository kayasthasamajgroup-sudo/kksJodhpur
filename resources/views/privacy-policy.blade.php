
@extends('layouts.app')

@section('title', 'Privacy Policy')

@section('content')
<div class="container mt-5">
    <header class="text-center mb-4">
        <h2 class="text-primary bold">{{ __('privacyPolicy.privacy-policy') }}</h2>
        <p class="lead">{{ __('privacyPolicy.Last_Updated') }}: October, 01 2025.</p>
    </header>

    <section>
        <p>{{ __('privacyPolicy.intro') }}</p>
    </section>

    <section>
        <h2 class="text-primary bold fs-5">1. {{__('privacyPolicy.Who_We_Are')}}</h2>
        <p>{{ __('privacyPolicy.content1') }}</p>
    </section>

    <section>
        <h2 class="text-primary bold fs-5">2. {{ __('privacyPolicy.What_Information_We_Collect') }}</h2>
        <ul>
            <li>{{ __('privacyPolicy.Personal_Information') }}</li>
            <li>{{ __('privacyPolicy.Communication_Information') }}</li>
            <li>{{ __('privacyPolicy.Technical_Information') }}</li>
        </ul>
    </section>

    <section>
        <h2 class="text-primary bold fs-5">3. {{ __('privacyPolicy.How_We_Use_Information') }}</h2>
        <ul>
            <li>{{ __('privacyPolicy.point1') }}</li>
            <li>{{ __('privacyPolicy.point2') }}</li>
            <li>{{ __('privacyPolicy.point3') }}</li>
        
        </ul>
    </section>

    <section>
        <h2 class="text-primary bold fs-5">4. {{ __('privacyPolicy.How_We_keep_Your_Information_Secure') }}</h2>
        <p>{{ __('privacyPolicy.content2') }}</p>
    </section>

    <section>
        <h2 class="text-primary bold fs-5">5. {{ __('privacyPolicy.Do_We_Share_Your_Information?') }}</h2>
        <p>{{ __('privacyPolicy.content3') }}</p>
    </section>

    <section>
        <h2 class="text-primary bold fs-5">6. {{ __('privacyPolicy.Your_Rights_Regarding_Your_Information') }}</h2>
        <ul>
            <li>{{ __('privacyPolicy.point4') }}</li>
            <li>{{ __('privacyPolicy.point5') }}</li>
            <li>{{ __('privacyPolicy.point6') }}</li>
          
        </ul>
    </section>

    <section>
        <h2 class="text-primary bold fs-5">7. {{ __('privacyPolicy.Use_of_Cookies') }}</h2>
        <p>{{ __('privacyPolicy.content4') }}</p>
    </section>

    <section>
        <h3 class="text-primary bold fs-5">8. {{ __('privacyPolicy.Changes_to_the_Policy') }}</h3>
        <p>{{ __('privacyPolicy.content5') }}</p>
    </section>

    <section>
        <h4 class="text-primary bold fs-5">9. {{ __('privacyPolicy.Contact_Information') }}</h4>
        <p>{{ __('privacyPolicy.content6') }}</p>
        <p>{{ __('privacyPolicy.Email') }}: <a href="mailto:info@kksjodhpur.in">info@kksjodhpur.in</a></p>
        <p>{{ __('privacyPolicy.Phone') }}: <a href="tel:99501 25210"> +91 99501 25210</a></p>
    </section>

    @endsection