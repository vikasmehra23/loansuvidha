 
 
 
 
 <div class="top_header">

    <div class="container">
        <div class="row">

            <div class="col-lg-4 col-md-4 col-6">

                <div class="contact_no d-flex ">
                    <i class="fa-solid fa-phone"></i>
                    <a href="tel:+91-9873370717"><h3 class=" mx-2">+91-9873370717</h3></a>
                </div>
            </div>



            <div class="col-lg-4 col-md-4 d-none d-lg-block d-md-block">
                <div class="contact_no d-flex justify-content-lg-center ">
                    <i class="fa-regular fa-envelope"></i>
                    <a href="mailto:contact@loansuvidhaa.com"><h3 class=" mx-2">contact@loansuvidhaa.com</h3></a>
                </div>

            </div>



            <div class="col-lg-4 col-md-4 col-6">
                <div class="contact_no d-flex justify-content-lg-end">
                    <i class="fa-solid fa-gavel"></i> <a href="#"><h3 class="mx-2">LEGAL CONSULTANCY</h3></a>
                </div>
            </div>
        </div>

    </div>

</div>



<!-- Header -->

<header class="header mt-5 main_home_header">

    <div class="header-menu header-menu-2" id="sticky">

        <nav class="navbar navbar-expand-lg">

            <div class="container">

                <a class="navbar-brand" href="{{ route('home') }}">

                    <img src="{{ asset('public/assets/img/logo/top_design_logo1.webp') }}" srcset="{{ asset('public/assets/img/logo/top_design_logo1.webp') }}" alt="logo"  loading="lazy">

                </a>

                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"

                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"

                    aria-expanded="false" aria-label="Toggle navigation">

                    <span class="menu_toggle">

                        <span class="hamburger">

                            <span></span>
                            <span></span>
                            <span></span>
                        </span>

                        <span class="hamburger-cross">

                            <span></span>
                            <span></span>
                        </span>
                    </span>

                </button>



                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <ul class="navbar-nav menu ms-auto">

                        <li class="nav-item dropdown submenu ">

                            <a href="{{ route('home') }}" class="nav-link dropdown-toggle active" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Home</a>
                            <i class="arrow_carrot-down_alt2 mobile_dropdown_icon" aria-hidden="true" data-bs-toggle="dropdown"></i> </li>

                        <li class="nav-item dropdown submenu">

                            <a class="nav-link dropdown-toggle" href="{{ url('/about') }}" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About Us </a>
                            <i class="arrow_carrot-down_alt2 mobile_dropdown_icon" aria-hidden="false" data-bs-toggle="dropdown"></i>

                        <li class="nav-item dropdown submenu">

                            <a class="nav-link dropdown-toggle" href="javascript:void(0)" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Loan</a>
                            <i class="arrow_carrot-down_alt2 mobile_dropdown_icon" aria-hidden="false" data-bs-toggle="dropdown"></i>


                            <ul class="dropdown-menu">

                                <li class="nav-item"><a class="nav-link" href="{{ route('loan.assistance') }}">Loan Assistance</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('personal.loan') }}">Personal Loan</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('business.loan') }}">Business Loan</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('home.loan') }}">Home Loan</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('property_loan') }}">Property Loan</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('vehicle.loan') }}">Vehicle Loan</a></li>

                            </ul>

                        </li>

                        <li class="nav-item dropdown submenu">

                            <a class="nav-link dropdown-toggle" href="javascript:void(0)" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Insurance</a>
                            <i class="arrow_carrot-down_alt2 mobile_dropdown_icon" aria-hidden="false" data-bs-toggle="dropdown"></i>

                            <ul class="dropdown-menu">
                                <li class="nav-item"><a class="nav-link" href="{{url('life-insurance')}}">Life Insurance</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{url('health-insurance')}}">Health Insurance</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{url('general-insurance')}}">General Insurance</a> </li>
                            </ul>

                        </li>

                        <li class="nav-item dropdown submenu">

                            <a class="nav-link dropdown-toggle" href="javascript:void(0)" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Mutual Fund</a>
                            <i class="arrow_carrot-down_alt2 mobile_dropdown_icon" aria-hidden="false" data-bs-toggle="dropdown"></i>

                            <ul class="dropdown-menu">
                                <li class="nav-item"><a class="nav-link" href="{{ url('/sip') }}">SIP</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ url('/swp') }}">SWP</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ url('/elss') }}">ELSS</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ url('/lumpsum') }}">LUMPSUM AMOUNT</a>
                            </ul>

                        </li>



                        <li class="nav-item dropdown submenu">

                            <a class="nav-link dropdown-toggle" href="javascript:void(0)" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Property</a>
                            <i class="arrow_carrot-down_alt2 mobile_dropdown_icon" aria-hidden="false" data-bs-toggle="dropdown"></i>

                            <ul class="dropdown-menu ">
                                <li class="nav-item"><a class="nav-link" href="{{ url('/property-sale') }}">Property Sale/Purchase</a></li>
                            </ul>

                        </li>

                           <li class="nav-item dropdown submenu"><a class="nav-link dropdown-toggle" href="{{ url('/become-partner') }}" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Be A Partner</a></li>

                    </ul>

                    <a class="theme-btn" href="{{ route('contact') }}">Contact</a>

                </div>
            </div>

        </nav>
    </div>

</header>

<!-- Header end-->