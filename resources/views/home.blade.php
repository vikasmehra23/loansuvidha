@extends('layouts.app')
@if (!empty($metaTitle->value))
    @section("title", $metaTitle->value)
@else
    @section("title", "Loan Suvidhaa")
@endif
@if (!empty($metaDesc->value))
    @section("description", $metaDesc->value)
@else
    @section("description", "Loan Suvidhaa")
@endif
@if (!empty($metaKey->value))
    @section("keywords", $metaKey->value)
@else
    @section("keywords", "Loan Suvidhaa")
@endif

@section('style')
    <style>
        .slick-slider .element {
            height: 100%;
            width: 100px;
            background-color: #000;
            color: #fff;
            border-radius: 5px;
            display: inline-block;
            margin: 0px 10px;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            font-size: 20px;
        }

        .slick-slider .slick-disabled {
            opacity: 0;
            pointer-events: none;
        }

        /*----start whatsap---*/

        section.whatsap_Sec #whatsapp {
            position: fixed;
            bottom: 80px;
            right: 20px;
            z-index: 999;
        }

        section.whatsap_Sec svg {
            width: 80px;
            display: inline-block;
            vertical-align: middle;
            filter: drop-shadow(0 1px 4px rgba(0, 0, 0, .4));
        }

        section.whatsap_Sec circle {
            fill: #25d366;
        }

        section.whatsap_Sec path {
            fill: #fff;
        }

        section.whatsap_Sec #whatsapp a {
            padding: 20px 0;
        }


        section.whatsap_Sec #whatsapp a::before {
            content: 'Help For Loan Suvidha';
            display: inline-block;
            vertical-align: middle;
            padding: 5px 10px;
            margin-right: 10px;
            color: rgba(0, 0, 0, .8);
            background: white;
            border: 1px solid #ccc;
            border-radius: 20px;
            filter: drop-shadow(0 1px 4px rgba(0, 0, 0, .4));
            transition: .3s ease;
            opacity: 0;
        }

        section.whatsap_Sec #whatsapp:hover a::before {
            opacity: 1;
        }

        /*----end whatsap----*/
    </style>
@endsection
@section('content')
    <!-- banner section -->
    <section class="banner-area-6">
        <div class="slide_banner">
            <div class="item">
                <div class="main_Second_item_">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="under_txt_content">
                                    <h1>Struggling To Get Your <br> Loan Approval ? </span></h1>
                                    <p>Get consultancy <span>@ Rs.99</span> to process your loan through our expert team.
                                    </p>
                                    <div class="banner_btn">
                                        <a class="theme-btn" href="{{route('contact')}}">Get Assistance</a>
                                        <!-- <a href="#" class="theme_btn">Get Assistance</a> -->
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="banner_img">
                                    <img src="{{ asset('public/assets/img/Strugleloan_img11.webp') }}" alt="loan suvidha"
                                        class="struggle_loan" loading="lazy">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="main_Second_item_">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="under_txt_content">
                                    <h2>Make Your Loan Process Easy With Loan Suvidha</h2>
                                    <p>We are associated partner with most of the Banks, NBFC'S and all lending Partners.
                                    </p>
                                    <div class="main_btn">
                                        <ul>
                                            <li>
                                                <a href="{{ route('personal.loan') }}">Personal Loan </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('home.loan') }}">Home Loan </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('business.loan') }}">Business Loan </a>
                                            </li>
                                        </ul>
                                        <ul>
                                            <li>
                                                <a href="{{ route('property_loan') }}">Property Loan </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('vehicle.loan') }}">Vehicle Loan </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="banner_img">
                                    <img src="{{ asset('public/assets/img/personaloan_img11.webp') }}"alt="loan suvidha"
                                        class="img-fluid mutual_img_Sec" loading="lazy">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="main_Second_item_">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="under_txt_content">
                                    <h2>Make Your Life Easy With Best Insurance Policies</h2>
                                    <p>Protecting your today for a secure tomorrow - explore our range of insurance policies
                                        .
                                    </p>
                                    <div class="main_btn">
                                        <ul>
                                            <li>
                                                <a href="{{ url('/life-insurance') }}">Life Insurance </a>
                                            </li>
                                            <li>
                                                <a href="{{ url('/health-insurance') }}">Health Insurance </a>
                                            </li>
                                            <li>
                                                <a href="{{ url('/general-insurance') }}">General (Vehicle)Insurance</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="banner_img">
                                    <img src="{{ asset('public/assets/img/life_healthins_img11.webp') }}" alt="loan suvidha"
                                        class="lazyload" loading="lazy">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="main_Second_item_">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="under_txt_content">
                                    <h2>Smart Investment For Better Tomorrow In Mutual Fund</h2>
                                    <p>Get the best investment plan & grow your money.</p>
                                    <div class="main_btn main_flex_div">
                                        <ul class="ol_ul">
                                            <li>
                                                <a href="{{ url('/sip') }}">SIP</a>
                                            </li>
                                            <li>
                                                <a href="{{ url('/swp') }}">SWP</a>
                                            </li>
                                        </ul>
                                        <ul class="ol_ul_">
                                            <li>
                                                <a href="{{ url('/elss') }}">ELSS</a>
                                            </li>
                                            <li>
                                                <a href="{{ url('/lumpsum') }}">LUMPSUM AMOUNT</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="banner_img">
                                    <img src="{{ asset('public/assets/img/mutal_img11.webp') }}" alt="loan suvidha"
                                        class="img-fluid mutual_img_Sec" loading="lazy">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="main_Second_item_">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="under_txt_content">
                                    <h2>Get Affordable Property Options At Loan Suvidha</h2>
                                    <p>Discover your dream property options with us</p>
                                    <div class="main_btn">
                                        <ul>
                                            <li>
                                                <a href="{{ route('property_loan') }}">Property Sale/Purchase</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="banner_img">
                                    <img src="{{ asset('public/assets/img/salepurchase_img11.webp') }}" alt="loan suvidha" loading="lazy">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="banner-fact">
        <div class="container">
            <div class="row gy-lg-0 gy-4">
                <div class="col-lg-4 col-md-6 " data-wow-delay="0.1s">
                    <div class="single-fact">
                        <div class="icon">
                            <i class="fas fa-globe"></i>
                        </div>
                        <p>Work On Pan India Customer Base.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 " data-wow-delay="0.4s">
                    <div class="single-fact">
                        <div class="icon">
                            <i class="fas fa-user"></i>
                        </div>
                        <p>All The DSA'S Or Freelance Can Join Us.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6  mx-auto" data-wow-delay="0.7s">
                    <div class="single-fact">
                        <div class="icon">
                            <i class="fas fa-briefcase"></i>
                        </div>
                        <p>Great Work Experience In Financial Service.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="about-section">
        <div class="container">
            <div class="row clearfix text-align-center">
                <!--Content Column-->
                <div class="content-column col-md-6 col-sm-12 col-xs-12">
                    <div class="inner-colum">
                        <div class="sec-title">
                            <div class="title">About Us</div>
                            <h2>Your Trusted Financial Partner</h2>
                        </div>
                        <div class="text">Welcome at Loan Suvidha (Loan Suvidhaa), where we have been providing easy
                            access to
                            financial services since 2016. We know how difficult it can be to get a loan, and we are here to
                            make
                            it easier for you. Our team of seasoned financial professionals and industry experts is
                            passionate
                            about providing personalized assistance and support to you. With a focus on exceptional service
                            and
                            cutting-edge solutions, we are your one-stop providers for all your financial needs.
                            We provide customized solutions to meet the varied needs of individuals and companies. Whether
                            you are
                            seeking a personal loan, a business loan or any other type of financial assistance, we are here
                            to
                            help you. Trust us to provide transparency, efficiency and convenience at every stage of the
                            loan
                            process.
                            Let us be your one-stop destination for all of your lending needs. To know more, click now.
                        </div>
                        <a href="{{ url('/about') }}" class="theme-btn">Read More</a>
                    </div>
                </div>
                
                <div class="image-column col-md-6 col-sm-12 col-xs-12">
                    <div class="inner-column " data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image">
                            <img src="{{asset('public/assets/img/about1.webp')}}" alt="loan suvidha" loading="lazy">
                            <div class="overlay-box">
                                <div class="year-box"><span class="number">8+</span>Years <br> Working <br> Experience
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="whatsap_Sec">
        <div id="container">
            <div id="whatsapp">

            <a href="https://api.whatsapp.com/send?phone=+91-9318360570&text= Help For Loan Suvidha" target="_blank">
                    <svg width="80" height="80" xmlns="http://www.w3.org/2000/svg"
                        xmlns:svg="http://www.w3.org/2000/svg">
                        <g class="layer">
                            <circle cx="40" cy="40" fill="#fff" id="svg_1" r="30" stroke="#000000"
                                stroke-width="0" />
                            <path
                                d="m57.81072,21.975c-4.48928,-4.5 -10.46786,-6.975 -16.82142,-6.975c-13.11429,0 -23.78571,10.67143 -23.78571,23.78571c0,4.18928 1.09286,8.28215 3.17143,11.89286l-3.375,12.32142l12.61072,-3.31072c3.47143,1.89642 7.38215,2.89286 11.36786,2.89286l0.01072,0c13.10358,0 24.01072,-10.67143 24.01072,-23.78571c0,-6.35357 -2.7,-12.32142 -7.18928,-16.82142l-0.00001,-0.00001l-0.00001,0l-0.00002,0.00001zm-16.82142,36.6c-3.55714,0 -7.03928,-0.95357 -10.07143,-2.75357l-0.71785,-0.42857l-7.47858,1.96072l1.99286,-7.29642l-0.47143,-0.75c-1.98215,-3.15 -3.02142,-6.78215 -3.02142,-10.52142c0,-10.89642 8.87143,-19.76786 19.77858,-19.76786c5.28215,0 10.24286,2.05714 13.97143,5.79642c3.72857,3.73928 6.02142,8.7 6.01072,13.98215c0,10.90714 -9.09642,19.77858 -19.99286,19.77858l0,-0.00002l-0.00001,0l-0.00001,-0.00001zm10.84286,-14.80714c-0.58928,-0.3 -3.51429,-1.73572 -4.06072,-1.92857c-0.54643,-0.20358 -0.94286,-0.3 -1.33928,0.3c-0.39642,0.6 -1.53214,1.92857 -1.88571,2.33572c-0.34286,0.39642 -0.69642,0.45 -1.28571,0.15c-3.49286,-1.74643 -5.78571,-3.11785 -8.08928,-7.07143c-0.61072,-1.05 0.61072,-0.975 1.74643,-3.24643c0.19286,-0.39642 0.09642,-0.73928 -0.05357,-1.03928c-0.15,-0.3 -1.33928,-3.225 -1.83214,-4.41429c-0.48215,-1.15714 -0.975,-0.99642 -1.33928,-1.01785c-0.34286,-0.02142 -0.73928,-0.02142 -1.13572,-0.02142c-0.39642,0 -1.03928,0.15 -1.58571,0.73928c-0.54643,0.6 -2.07858,2.03572 -2.07858,4.96072c0,2.925 2.13214,5.75357 2.42142,6.15c0.3,0.39642 4.18928,6.39642 10.15714,8.97858c3.77143,1.62857 5.25,1.76786 7.13572,1.48928c1.14643,-0.17143 3.51429,-1.43572 4.00714,-2.82857c0.49286,-1.39286 0.49286,-2.58215 0.34286,-2.82857c-0.13928,-0.26786 -0.53572,-0.41785 -1.125,-0.70714l-0.00001,-0.00001l0.00002,-0.00001l-0.00002,-0.00001z"
                                fill="currentColor" id="svg_2" />
                        </g>
                    </svg>
                </a>
            </div>
        </div>
    </section>


    <section class="pt-60 pb-60 our_feature_Sec feature-area-3">
        <div class="container">
            <div class="section-title our_feature">
                <span class="short-title-2">OUR Features</span>
                <h2 class="wow fadeInUp  RENFFFF">Wide Range Of Loan Offering</h2>
            </div>
            <div class="row gy-4 mt-50">
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="feature-card-widget-9 wow fadeInUp" data-wow-delay="0.1s">
                        <img src="{{asset('public/assets/img/home-5/feature-icon-1.svg')}}" alt="canara bank home loan" loading="lazy">
                        <h5>Home Loan</h5>
                        <p>Secure your dream home with our competitive home loan options and personalized guidance.
                        </p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="feature-card-widget-9 wow fadeInUp" data-wow-delay="0.3s">
                        <img src="{{asset('public/assets/img/home-5/feature-icon-2.svg')}}" alt="loan against property without income proof" loading="lazy">
                        <h5>Loan Against Property</h5>
                        <p>Unlock the value of your property with hassle-free loan against property solutions tailored to
                            your needs.
                        </p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="feature-card-widget-9 wow fadeInUp" data-wow-delay="0.5s">
                        <img src="{{ asset('public/assets/img/home-5/feature-icon-3.svg') }}" alt="startup business loans" loading="lazy">
                        <h5>Business Loan</h5>
                        <p>Empower your business ventures with flexible financing options and expert advice.</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="feature-card-widget-9 wow fadeInUp" data-wow-delay="0.7s">
                        <img src="{{ asset('public/assets/img/home-5/feature-icon-4.svg') }}" alt="personal loan for self employed" loading="lazy">
                        <h5>Personal Loan</h5>
                        <p>Achieve your personal aspirations with our tailored personal loan services and quick approval
                            process.
                        </p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="feature-card-widget-9 wow fadeInUp loan_ag" data-wow-delay="1.1s">
                        <img src="{{ asset('public/assets/img/home-5/feature-icon-6.svg') }}" alt="bajaj personal loan" loading="lazy">
                        <h5>Loan Against Share</h5>
                        <p>Leverage your shares for quick financing solutions and unlock liquidity effortlessly.</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="feature-card-widget-9 wow fadeInUp" data-wow-delay="1.3s">
                        <img src="{{ asset('public/assets/img/home-5/feature-icon-7.svg') }}" alt="muthoot finance personal loan" loading="lazy">
                        <h5>Safe & Secured</h5>
                        <p>Rest assured with our safe and secured financial services, ensuring your peace of mind.</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="feature-card-widget-9 wow fadeInUp" data-wow-delay="1.3s">
                        <img src="{{ asset('public/assets/img/car_loan_n.webp') }}" alt="indian bank vehicle loan" loading="lazy">
                        <h5>Vehicle Loan</h5>
                        <p>Get on the road to ownership with our hassle-free vehicle loans. Experience convenience and
                            flexibility tailored to your needs.
                        </p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="feature-card-widget-9 wow fadeInUp" data-wow-delay="1.3s">
                        <img src="{{ asset('public/assets/img/small_loan_n.webp') }}" alt="1 lakh personal loan" loading="lazy">
                        <h5>Small Loan</h5>
                        <p>Get quick financial support with Loan Suvidha small loans. Simple application process and
                            competitive rates to meet your needs.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="why_invest_sec">
        <div class="container">
            <div class="why_heading">
                <h2>Why Choose Loan Suvidha?</h2>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12 py-3">
                    <div class="invest_under_sec">
                        <div class="img_invest">
                            <img src="{{ asset('public/assets/img/home-5/invest_1.webp') }}" alt="loan suvidha" loading="lazy">
                        </div>
                        <div class="invest_txt">
                            <h3>Focused Services</h3>
                            <p>Our aim is to provide focused services to the customers which is fearly to get specially in
                                loan Segment.
                                We focus on customer satisfaction, by providing complete process of loan till the end
                                (Disbursment Or Rejection)
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12 py-2">
                    <div class="invest_under_sec">
                        <div class="img_invest">
                            <img src="{{ asset('public/assets/img/home-5/invest_2.webp') }}" alt="loan suvidha" loading="lazy">
                        </div>
                        <div class="invest_txt">
                            <h3>Collection And Recovery</h3>
                            <p>We provide “Free” collection and legal recovery support for
                                all loans lent on our platform. We have a well-defined process
                                in place to ensure a hassle-free experience for investors.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12 py-2">
                    <div class="invest_under_sec">
                        <div class="img_invest">
                            <img src="{{ asset('public/assets/img/home-5/invest_3.webp') }}" alt="loan suvidha" loading="lazy">
                        </div>
                        <div class="invest_txt">
                            <h3>High-Quality P2P Loans</h3>
                            <p>Loan Suvidha offers high-quality peer-to-peer loans, providing investors with secure and
                                rewarding opportunities. Experience the benefits of our trusted platform for seamless P2P
                                lending solutions tailored to your needs.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12 py-2">
                    <div class="invest_under_sec">
                        <div class="img_invest">
                            <img src="{{ asset('public/assets/img/home-5/invest_4.webp') }}" alt="loan suvidha" loading="lazy">
                        </div>
                        <div class="invest_txt">
                            <h3>Transparent And Services</h3>
                            <p>At Loan Suvidha, transparency and security are paramount. Rest assured knowing that our
                                processes are transparent, and your financial transactions are securely managed for your
                                peace of mind.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="nav_tab_main_sec">
        <div class="container">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                        aria-selected="true">LOAN</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                        aria-selected="false">INSURANCE</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                        aria-selected="false">MUTUAL FUND</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-bank-tab" data-bs-toggle="pill" data-bs-target="#pills-bank"
                        type="button" role="tab" aria-controls="pills-bank" aria-selected="false">PROPERTY</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-partner-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-partner" type="button" role="tab" aria-controls="pills-partner"
                        aria-selected="false">BE A PARTNER</button>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <div class="main_loan_pill">
                                    <h2>Loan</h2>
                                    <p>Unlock your financial potential with Loan Suvidha. Access flexible loan options
                                        tailored to your needs and goals.
                                    </p>
                                    <div class="ul_li_main">
                                        <ul>
                                            <li>
                                                <a href="{{ url('/loan-assistance') }}">Loan Assistance</a>
                                            </li>
                                            <li>
                                                <a href="{{ url('/personal-loan') }}">Personal Loan</a>
                                            <li>
                                                <a href="{{ url('/business-loan') }}">Business Loan</a>
                                            </li>
                                        </ul>
                                        <ul>
                                            <li>
                                                <a href="{{ url('/home-loan') }}">Home Loan</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('property_loan') }}">Property Loan</a>
                                            </li>
                                            <li>
                                                <a href="{{ url('/vehicle-loan') }}">Vehicle Loan</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="img_loan_under">
                                    <img src="{{ asset('public/assets/img/life2.webp') }}" alt="loan assist" loading="lazy">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <div class="main_loan_pill">
                                    <h2>Insurance</h2>
                                    <p>Insurance provides financial protection against risks. Secure your future with the
                                        right coverage tailored to your needs.
                                    </p>
                                    <div class="ul_li_main">
                                        <ul>
                                            <li>
                                                <a href="{{ url('/life-insurance') }}">Life Insurance</a>
                                            </li>
                                            <li>
                                                <a href="{{ url('/health-insurance') }}">Health Insurance</a>
                                            </li>
                                            <li>
                                                <a href="{{ url('/general-insurance') }}">General Insurance</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="img_loan_under">
                                    <img src="{{ asset('public/assets/img/Insurance2.webp') }}" alt="top 10 life insurance companies in india" loading="lazy">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <div class="main_loan_pill">
                                    <h2>Mutual Fund</h2>
                                    <p>Diversify investments and access professional management. Grow wealth with mutual
                                        funds tailored to your financial goals and risk tolerance.
                                    </p>
                                    <div class="ul_li_main">
                                        <ul>
                                            <li>
                                                <a href="{{ url('/sip') }}">SIP</a>
                                            </li>
                                            <li>
                                                <a href="{{ url('/swp') }}">SWP</a>
                                            </li>
                                        </ul>
                                        <ul>
                                            <li>
                                                <a href="{{ url('/elss') }}">ELSS</a>
                                            </li>
                                            <li>
                                                <a href="{{ url('/lumpsum') }}">LUMPSUM AMOUNT</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="img_loan_under">
                                    <img src="{{ asset('public/assets/img/mutual_funds2.webp') }}" alt="max life insurance agent" loading="lazy">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-bank" role="tabpanel" aria-labelledby="pills-part-tab">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <div class="main_loan_pill">
                                    <h2>Property</h2>
                                    <p>Property is something you own, like a house or land. It can grow in value over time,
                                        securing your future.
                                    </p>
                                    <div class="ul_li_main">
                                        <ul>
                                            <li>
                                                <a href="{{ url('/property-sale') }}">Property Sale/Purchase</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="img_loan_under">
                                    <img src="{{ asset('public/assets/img/property2.webp') }}" alt="property in delhi" loading="lazy">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <div class="main_loan_pill">
                                    <h2>Insurance</h2>
                                    <p>If you’ve ever applied for a personal loan at a bank,
                                        you might have realized that the process is complicated and time-consuming.
                                        The process is confusing for all — except for the bank staff!
                                    </p>
                                    <div class="ul_li_main">
                                        <ul>
                                            <li>
                                                <p>Life Insurance</p>
                                            </li>
                                            <li>
                                                <p>Health Insurance</p>
                                            </li>
                                            <li>
                                                <p>General Insurance</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="img_loan_under">
                                    <img src="{{ asset('public/assets/img/Insurance_one.webp') }}"alt="no 1 life insurance company in india" loading="lazy">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-partner" role="tabpanel" aria-labelledby="pills-partner-tab">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <div class="main_loan_pill">
                                    <h2>Be A Partner</h2>
                                    <p>Join our network and become a valued partner with Loan Suvidha. Enjoy exclusive
                                        benefits, personalized support, and lucrative opportunities for business growth.
                                    </p>
                                    <div class="ul_li_main">
                                        <ul>
                                            <li>
                                                <a href="{{route('become.partner')}}">Be A Partner</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="img_loan_under">
                                    <img src="{{ asset('public/assets/img/partner2.webp') }}" alt="loan assist" loading="lazy">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="our_Services_sec">
        <div class="container">
            <div class="title_Services">
                <h2>Benefits Of Partnering With Loan Suvidha
                </h2>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12 py-2">
                    <div class="main_Services_under">
                        <div class="img_ser">
                            <img src="{{ asset('public/assets/img/services_2.webp') }}" alt="startup business loans" loading="lazy">
                        </div>
                        <div class="main_Ser_txt">
                            <h3>Best In Market Commission</h3>
                            <p>Earn top-tier commissions with Loan Suvidha, ensuring you receive the most competitive
                                compensation in the industry for your valuable services as a loan agent.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12 py-2">
                    <div class="main_Services_under">
                        <div class="img_ser">
                            <img src="{{ asset('public/assets/img/wide_range_suvidhaa1.webp') }}" alt="loan assist" loading="lazy">
                        </div>
                        <div class="main_Ser_txt">
                            <h3>Wide Range Of Loan Suvidha</h3>
                            <p>Access a diverse array of loan options with Loan Suvidha,
                                catering to the varied needs and preferences of your clients
                                for seamless financial solutions.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12 py-2">
                    <div class="main_Services_under">
                        <div class="img_ser">
                            <img src="{{ asset('public/assets/img/services_31.webp') }}" alt="startup business loans" loading="lazy">
                        </div>
                        <div class="main_Ser_txt">
                            <h3>Digital Lead Process</h3>
                            <p>Streamline your workflow with our digital lead process,
                                enabling you to efficiently manage & track leads online to
                                enhance productivity and convenience.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12 py-2">
                    <div class="main_Services_under">
                        <div class="img_ser">
                            <img src="{{ asset('public/assets/img/services_41.webp') }}" alt="personal loan for self employed" loading="lazy">
                        </div>
                        <div class="main_Ser_txt">
                            <h3>Instant Paperless Registration</h3>
                            <p>Experience hassle-free registration with Loan Suvidha instant paperless process, eliminating
                                paperwork and delays to get you up and running as a loan agent swiftly and effortlessly.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="form_main_home">
        <div class="container">
            <div class="form_title">
                <h2>Contact Us</h2>
            </div>
            <div class="row align-items-center gx-0 ">
                <div class="col-md-6 iri_img">
                    <div class="img_form">
                        <img src="{{ asset('public/assets/img/loan_contact_img1.webp') }}" alt="loan suvidha" loading="lazy">
                    </div>
                </div>
                <div class="col-md-6 main_form_home">
                    <form action="{{ route('phonePe') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <label></label>
                                <input type="text" class="form-control" name="name" placeholder="Name"
                                    aria-label="First name" required>
                            </div>
                            <div class="col-md-6">
                                <label></label>
                                <input type="tel" class="form-control" name="phone" maxlength="10"
                                    placeholder="Mobile No." aria-label="Last name" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label></label>
                            <input type="email" class="form-control" name="email" placeholder="Email ID"
                                aria-label="Email" required>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <select class="form-select" name="assistance_type" aria-label="Default select example"
                                    required>
                                    <option selected value="">Loan Assistance</option>
                                    <option value="1">Loan </option>
                                    <option value="2">Insurance</option>
                                    <option value="3">Mutual Fund</option>
                                    <option value="4">Buy and sell Property </option>
                                    <option value="5">Improve Your Cibil </option>
                                    <option value="6">Become A Partner</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                @php
                                    $states = App\Models\State::orderBy('name', 'ASC')->get();
                                @endphp
                                <select class="form-select" name="state" aria-label="Default select example" required>
                                    <option value="">State</option>
                                    @foreach ($states as $state)
                                        <option class="form-control" value="{{ $state->id }}">{{ $state->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6">
                                <select class="form-select" name="city" aria-label="Default select example" required>
                                    <option value="">City</option>
                                </select>
                            </div>
                        </div>
                        <div class="btn_form_submit">
                            <input type="hidden" name="pay_amount" class="pay_amount" value="99">
                            <button type="submit" class="submit">Pay<span class="span_rupee"
                                    id="price_dynamic">₹99</span></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section class="faq_Sec_main_Sec">
        <div class="container">
            <div class="col">
                <h4>Frequently Asked Questions</h4>
            </div>
            <div class="row">

                <div class="col-md-6">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    What is the interest rate for Loan Suvidha loans in India?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse " aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p> Interest rates can vary based on the type of loan, market conditions, and individual
                                        credit profiles. Loan Suvidha aims to provide competitive rates tailored to meet
                                        customer needs.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Which documents are necessary for a loan in India?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p> Documentation requirements vary by loan type but commonly include proof of identity,
                                        address, income, and property documents if applicable. Loan Suvidha ensures a smooth
                                        application process with clear documentation guidelines.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    How much minimum and a maximum loan can I avail?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p> Loan amounts vary depending on factors such as income, credit history, and the type
                                        of
                                        loan. Loan Suvidha offers a wide range of loan options catering to diverse financial
                                        needs, with flexible borrowing limits.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseOne" aria-expanded="false"
                                    aria-controls="flush-collapseOne">
                                    Who can be eligible for a loan in India?
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>Eligibility criteria vary based on the type of loan. Generally, individuals with a
                                        stable income source, good credit history, and necessary documentation are eligible.
                                        Loan Suvidha provides tailored solutions to meet diverse needs.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                    aria-controls="flush-collapseTwo">
                                    How much salary is required for a loan in India?
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Salary requirements depend on various factors like the loan
                                    amount,
                                    type, and lender
                                    policies. Loan Suvidha offers flexible options designed to accommodate different income
                                    levels.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseThree" aria-expanded="false"
                                    aria-controls="flush-collapseThree">
                                    Can I avail myself of a loan without a salary?
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body"> Yes, certain loans like loan against property or loans secured
                                    against
                                    assets may not
                                    require a regular salary. Loan Suvidha offers a range of loan options to suit various
                                    financial situations.</div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Loan section -->
    <section class="blog_video">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12  feedback_na">
                    <div class="title_feedback_customer">
                        <h2>Our Reviews & Videos</h2>
                    </div>
                    <div class="row align-items-center ">
                        <div class="multiple-items owl-theme">
                            <div class="item">
                                <div class="ourl_blog mt-2 mb-2">
                                    <div class="coverage_img">
                                        <video width="250px" height="205" controls>
                                            <source src="{{ asset('public/assets/video/loan-video.mp4') }}" type="video/mp4">
                                        </video>
                                    </div>
                                    <div class="ourl_blog_txt">
                                        <h5>Stress-Free Support: Loan Suvidha's Efficiency</h5>
                                        <p>Loan Suvidha's swift service and easy process made getting a personal loan
                                            stress-free.
                                            Thank you for being there!</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="ourl_blog mt-2 mb-2">
                                    <div class="coverage_img">
                                        <video width="250px" height="205" controls>
                                            <source src="{{ asset('public/assets/video/video__121.mp4') }}" type="video/mp4">
                                        </video>

                                    </div>
                                    <div class="ourl_blog_txt">
                                        <h5>Kickstart Success: Loan Suvidha's Support</h5>
                                        <p>
                                            Loan Suvidha provided me seamless loan application process and transparent
                                            services gave me the confidence to pursue my dreams.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="ourl_blog mt-2 mb-2">
                                    <div class="coverage_img">
                                        <video width="250px" height="205" controls>
                                            <source src="{{ asset('public/assets/video/video_14.mp4') }}" type="video/mp4">
                                        </video>
                                    </div>
                                    <div class="ourl_blog_txt">
                                        <h5>Business Milestones: Loan Suvidha's Empowerment</h5>
                                        <p>Loan Suvidha's flexible financing and expert advice were crucial for my business
                                            growth.
                                            Grateful for their partnership.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="ourl_blog mt-2 mb-2">
                                    <div class="coverage_img">
                                        <video width="250px" height="205" controls>
                                            <source src="{{ asset('public/assets/video/video_22.mp4') }}" type="video/mp4">
                                        </video>
                                    </div>
                                    <div class="ourl_blog_txt">
                                        <h5> Turning Dreams into Reality: Loan Suvidha's Expert Guidance</h5>
                                        <p> Loan Suvidha transformed my dream of owning a home into reality, offering
                                            tailored
                                            guidance and competitive loan options</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="ourl_blog mt-2 mb-2">
                                    <div class="coverage_img">
                                        <video width="250px" height="205" controls>
                                            <source src="{{ asset('public/assets/video/video_21.mp4') }}" type="video/mp4">
                                        </video>
                                    </div>
                                    <div class="ourl_blog_txt">
                                        <h5>
                                            Dream Home Reality: Loan Suvidha's Guidance
                                        </h5>
                                        <p>
                                            Loan Suvidha made owning my dream home a reality with personalized guidance and
                                            competitive loan options.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="ourl_blog mt-2 mb-2">
                                    <div class="coverage_img">
                                        <video width="250px" height="205" controls>
                                            <source src="{{ asset('public/assets/video/video_12345.mp4') }}" type="video/mp4">
                                        </video>
                                    </div>
                                    <div class="ourl_blog_txt">
                                        <h5>
                                            India's Government-Registered Loans Gateway
                                        </h5>
                                        <p>
                                            Join Hon. Surender Singh presenting Govt. licensed Loan Suvidha: Easy loans for
                                            all,
                                            nationwide.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="testimonial_Sec_slicky">
        <div class="container">
            <div class="title_testimonial">
                <h2>Testimonial</h2>
            </div>
            <div class="slick-slider mt-5">
                <div class="slick_home_testimonial">
                    <div class="cntnrt_slicky">
                        <p class="card-text">I was struggling for money also getting loan,But I reach to Loan
                            Suvidha and they Solve my problem of getting loan. Thanks Loan Suvidha
                        </p>
                        <div class="mainlx_sl">
                            <div class="main_under_slicky">
                                <img src="{{asset('public/assets/img/customer11.webp')}}" alt="sbi business loan" loading="lazy">
                                <div class="neetu_texture">
                                    <h5 class="card-title fw-bold">Neetu bhist </h5>
                                    <div class="star_flex">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slick_home_testimonial">
                    <div class="cntnrt_slicky">
                        <p class="card-text">Loan Suvidha become a supportive partner in our success due to Loan
                            Suvidha's support of business loan its possible to get growth in my business. Thanks
                            Loan Suvidha
                        </p>
                        <div class="mainlx_sl">
                            <div class="main_under_slicky">
                                <img src="{{asset('public/assets/img/customer21.webp')}}" alt="personal loans for students" loading="lazy">
                                <div class="neetu_texture">
                                    <h5 class="card-title fw-bold">Vishal ahuja </h5>
                                    <div class="star_flex">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slick_home_testimonial">
                    <div class="cntnrt_slicky">
                        <p class="card-text">Choosing Loan Suvidha for information was a good decision. It provided
                            relevant details and contact information, making it convenient to learn about their
                            services. I would recommend Loan Suvidha to anyone in search of financial assistance.
                        </p>
                        <div class="mainlx_sl">
                            <div class="main_under_slicky">
                                <img src="{{asset('public/assets/img/homepage_testmonial_31.webp')}}" alt="personal loan for low cibil" loading="lazy">
                                <div class="neetu_texture">
                                    <h5 class="card-title fw-bold">Rohan Rawat </h5>
                                    <div class="star_flex">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- testimonial -->

    <section id="marquee">
        <div class="container">
            <div class="pic-container">
                <div class="pic">
                    <img src="{{ asset('public/assets/img/bandhan_bank_logo111.webp') }}" alt="canara bank home loan" loading="lazy">
                </div>
                <div class="pic">
                    <img src="{{ asset('public/assets/img/punjab_national_bank111.webp') }}" alt="muthoot finance personal loan" loading="lazy">
                </div>
                <div class="pic">
                    <img src="{{ asset('public/assets/img/aditya_birla_logo111.webp') }}" alt="sbi loan against property" loading="lazy">
                </div>
                <div class="pic">
                    <img src="{{ asset('public/assets/img/bajaj_logo111.webp') }}" alt="bajaj personal loan" loading="lazy">
                </div>
                <div class="pic">
                    <img src="{{ asset('public/assets/img/L&fiance.webp') }}" alt="muthoot finance personal loan" loading="lazy">
                </div>
                <div class="pic">
                    <img src="{{ asset('public/assets/img/bank11.webp') }}" alt="indian bank vehicle loan" loading="lazy">
                </div>
                <div class="pic">
                    <img src="{{ asset('public/assets/img/bank21.webp') }}" alt="tata capital business loan" loading="lazy">
                </div>
                <div class="pic">
                    <img src="{{ asset('public/assets/img/bank31.webp') }}" alt="sbi business loan" loading="lazy">
                </div>
                <div class="pic">
                    <img src="{{ asset('public/assets/img/bank41.webp') }}" alt="max life insurance agent" loading="lazy">
                </div>
                <div class="pic">
                    <img src="{{ asset('public/assets/img/bank51.webp') }}" alt="bajaj vehicle loan" loading="lazy">
                </div>
                <div class="pic">
                    <img src="{{ asset('public/assets/img/bank61.webp') }}" alt="sbi commercial vehicle loan" loading="lazy">
                </div>
                <div class="pic">
                    <img src="{{ asset('public/assets/img/bank11.webp') }}" alt="canara bank business loan" loading="lazy">
                </div>
                <div class="pic">
                    <img src="{{ asset('public/assets/img/bank21.webp') }}" alt="muthoot finance personal loan" loading="lazy">
                </div>
                <div class="pic">
                    <img src="{{ asset('public/assets/img/bank31.webp') }}" alt="max life insurance agent" loading="lazy">
                </div>
                <div class="pic">
                    <img src="{{ asset('public/assets/img/bank41.webp') }}" alt="lic health insurance" loading="lazy">
                </div>
                <div class="pic">
                    <img src="{{ asset('public/assets/img/bank51.webp') }}" alt="muthoot finance personal loan" loading="lazy">
                </div>
                <div class="pic">
                    <img src="{{ asset('public/assets/img/bank61.webp') }}" alt="canara bank business loan" loading="lazy">
                </div>
            </div>
        </div>
    </section>
    @include('frontend.popup.homepopup')
    <div class="modal fade" id="home_pay_form" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="col-lg-12 col-md-12 col-12 mt-md-3">
                        <div class="title_2 loan_Assi_h2">
                            <h3>Get Personal Loan</h3>
                            <p>Fill The Enquiry Form Now</p>
                        </div>
                        <form action="{{ route('phonePe') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <input aria-label="Full name" name="name" class="form-control"
                                        placeholder="Full Name" type="text" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <input aria-label="Email" name="email" class="form-control" placeholder="Email"
                                        type="email" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <input aria-label="Phone" name="phone" class="form-control" placeholder="Phone No"
                                        type="number" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <select class="form-select" name="assistance_type"
                                        aria-label="Default select example" required>
                                        <option value="1">Loan Assistance</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    @php
                                        $states = App\Models\State::orderBy('name', 'ASC')->get();
                                    @endphp
                                    <select class="form-select" name="state" aria-label="Default select example"
                                        required>
                                        <option selected value="">State</option>
                                        @foreach ($states as $state)
                                            <option class="form-control" value="{{ $state->id }}">
                                                {{ $state->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <select class="form-select" name="city" aria-label="Default select example"
                                        required>
                                        <option selected value="">City</option>
                                    </select>
                                </div>
                            </div>
                            <div class="btn_div_buttons">
                                <div class="btn_form_submit">
                                    <input type="hidden" name="pay_amount" class="pay_amount" value="99">
                                    <button type="submit" class="submit">Pay<span class="span_rupee"
                                            id="price_dynamic">₹99</span></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        function home_pay_form_fun() {
            $('#home_pay_form').modal('show');
        }
        $(document).ready(function() {

             setTimeout(function () {
                $('#bannerModal').modal('show');
             }, 7000);
            

            $('select[name="state"]').on('change', function() {
                var state_id = $(this).val();
                if (state_id) {
                    $.ajax({
                        url: "{{ url('/city/') }}/" + state_id,
                        type: "GET",
                        dataType: "json",
                        success: function(data) {
                            $('select[name="city"]').empty();
                            $.each(data, function(key, value) {
                                console.log(value);
                                $('select[name="city"]').append('<option value="' +
                                    value.id + '">' + value.city + '</option>');
                            });
                        }
                    });
                } else {
                    $('select[name="city"]').empty();
                }
            });

            $('select[name="assistance_type"]').on('change', function() {

                var assistance_type = $(this).val();
                $('#price_dynamic').empty();
                $('.pay_amount').val('');

                if (assistance_type == '6') {
                    $('#price_dynamic').append('₹590');
                    $('.pay_amount').val('590');
                } else if (assistance_type == '5') {
                    $('#price_dynamic').append('₹499');
                    $('.pay_amount').val('499');
                } else {
                    $('#price_dynamic').append('₹99');
                    $('.pay_amount').val('99');
                }
            });

        });


        $(".slick-slider").slick({
            slidesToShow: 2,
            infinite: true,
            slidesToScroll: 2,
            autoplay: true,
            prevArrow: '<button type="button" class="slick-custom-arrow slick-prev"> < </button>',
            nextArrow: '<button type="button" class="slick-custom-arrow slick-next"> > </button>',
            autoplaySpeed: 3000,

            responsive: [{
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                    },
                },
                {
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    },
                },

            ],

        });

</script>
@endsection
