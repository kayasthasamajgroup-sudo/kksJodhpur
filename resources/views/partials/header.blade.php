
    <!-- Navbar Start -->
    <div class="container-fluid bg-light sticky-top p-0">
        <nav class="navbar navbar-expand-lg navbar-light p-0">
        
                <a href="/" class="navbar-brand  py-4 px-2 me-0">
                  
                    <img src="{{ asset('banner-image/kks-jodhpur-logo.png') }}" alt="KKSjodhpur">

                </a>
          
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse p-3" id="navbarCollapse">
                <div class="navbar-nav mx-auto">
                  
                    <a href="/ENews" class="nav-item nav-link text-primary bold">{{ __('messages.kayastha_enews') }}</a>
                   

                    <div class="nav-item dropdown">
                        <p  class="nav-link dropdown-toggle text-primary bold" data-bs-toggle="dropdown">{{ __('messages.matrimonial') }}</p>
                        <div class="dropdown-menu bg-light mt-2">
                            <a href="/matrimonial" class="dropdown-item">{{ __('messages.matrimonial_form') }}</a>
                            <a href="/matrimonial-members" class="dropdown-item">{{ __('messages.matrimonial_list') }}</a>
                           
                        </div>
                    </div>
                  
                    <div class="nav-item dropdown">
                        <p  class="nav-link dropdown-toggle text-primary bold" data-bs-toggle="dropdown">{{ __('messages.kks_membership') }}</p>
                        <div class="dropdown-menu bg-light mt-2">
                            <a href="/membership" class="dropdown-item">{{ __('messages.membership_registration') }}</a>
                            <a href="/members" class="dropdown-item">{{ __('messages.members_list') }}</a>
                           
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="/about-us" class="nav-link dropdown-toggle text-primary bold">{{ __('messages.about_us') }}</a>
                        
                        <div class="dropdown-menu bg-light mt-2">
                            <a href="/committees/core" class="dropdown-item">{{ __('messages.Core_Committee') }}</a>
                            <a href="/committees/female" class="dropdown-item">{{ __('messages.Female_Committee') }}</a>
                            <a href="/committees/youth" class="dropdown-item">{{ __('messages.Youth_Committee') }}</a>
                           
                        </div>
                    </div>
                  
                    <a href="/events" class="nav-item nav-link text-primary bold">{{ __('messages.events') }}</a>
                    {{-- <a href="/contact-us" class="nav-item nav-link text-primary bold">{{ __('messages.contact-us') }}</a> --}}
                </div>
                <div class="d-flex">
                    <a href="{{ route('lang.switch', 'hi') }}">हिंदी</a> | 
                    <a href="{{ route('lang.switch', 'en') }}">English</a>
                    
                    

                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->