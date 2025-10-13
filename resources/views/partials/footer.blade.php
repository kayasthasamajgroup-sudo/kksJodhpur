   <!-- Footer Start -->
   <div class="container-fluid footer position-relative bg-light text-black-50 py-3 wow fadeIn" data-wow-delay="0.2s">
    <div class="container py-1">
        <div class="row g-5">
            <div class="col-lg-6 pe-lg-5">
                <a href="index.html" class="navbar-brand">
                    {{-- <h1 class="display-5 text-primary mb-0"><i class="bi bi-scissors"></i>Salone</h1> --}}
                    <img src="{{ asset('banner-image/kks-jodhpur-logo.png') }}" alt="KKSjodhpur">
                </a>
                <p class="text-dark">{{ __('messages.footer_text') }}</p>
                <p class="mb-2 text-dark"><i class="fa fa-map-marker-alt me-2"></i>123 Street, Noida</p>
                <p class="mb-2 text-dark"><i class="fa fa-phone-alt me-2"></i>+91 99501 25210</p>
                <p class="text-dark"><i class="fa fa-envelope me-2"></i>info@example.com</p>
                <div class="d-flex justify-content-start mt-4">
                    <a class="btn btn-sm-square btn-primary me-3 social-icon" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-sm-square btn-primary me-3 social-icon" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-sm-square btn-primary me-3 social-icon" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-sm-square btn-primary me-3 social-icon" href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-6 ps-lg-5">
                <div class="row g-4">
                    <div class="col-sm-4">
                        <h5 class="text-primary mb-4 bold">Support Links</h5>
                        <a class="btn btn-link bold" href="/about-us">{{ __('messages.about_us') }}</a>
                        <a class="btn btn-link bold" href="/contact-us">{{ __('messages.contact-us') }}</a>
                        <a class="btn btn-link bold" href="/privacy-policy">{{ __('messages.privacy-policy') }}</a>
                        <a class="btn btn-link bold" href="/terms-and-conditions">{{ __('messages.terms-conditions') }}</a>
                    </div>
                    <div class="col-sm-4">
                        <h5 class="text-primary mb-4 bold">Helpfull Links</h5>
                        <a class="btn btn-link bold" href="/stuti-arti">{{ __('messages.stuti_arti') }}</a>
                        <a class="btn btn-link bold" href="/ENews">{{ __('messages.kayastha_enews') }}</a>
                        <a class="btn btn-link bold" href="/matrimonial">{{ __('messages.matrimonial_form') }}</a>
                        <a class="btn btn-link bold" href="/membership">{{ __('messages.membership_registration') }}</a>
                        <a class="btn btn-link bold" href="/events">{{ __('messages.events') }}</a>
                    </div>
                    <div class="col-sm-4">
                        <h5 class="text-primary mb-4 bold">Other Links</h5>
                        <a class="btn btn-link bold" href="/business-form">{{ __('messages.register_business_btn') }}</a>
                        <a class="btn btn-link bold" href="/active-businesses">{{ __('messages.active_businesses_btn') }}</a>
                        <a class="btn btn-link bold" href="/members">{{ __('messages.matrimonial_list') }}</a>
                        <a class="btn btn-link bold" href="/matrimonial-members">{{ __('messages.members_list') }}</a>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->


<!-- Copyright Start -->
<div class="container-fluid bg-dark text-white border-top border-secondary py-4 wow fadeIn" data-wow-delay="0.1s">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center  mb-3 mb-md-0">
                &copy; 2025 <a  href="/">Kayastha Kalyaan Samiti</a>. All Right Reserved.
            </div>
    
        </div>
    </div>
</div>
<!-- Copyright End -->