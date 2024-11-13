@extends('layouts.app')

@if(!empty($metaTitle->value))
@section("title", $metaTitle->value)
@else
@section("title", 'Business Loan ' )
@endif

@if(!empty($metaDesc->value))
@section("description", $metaDesc->value)
@else
@section("description", "Business Loan desc")
@endif

@if(!empty($metaKey->value))
@section("keywords", $metaKey->value)
@else
@section("keywords", ' Business-Loan, key')
@endif
@section('links')
<link rel="canonical" href="https://loansuvidhaa.com/business-loan" />
@endsection

@section('content')
<section class="business_loanqc">
    <div class="container">
        <div class="row mb-4 gx-0">
            <div class="col-lg-7 col-md-12 col-12">
                <div class="quick_collateral">
                    <h1>Fueling Ambitions, Powering Business with Our Business Loan Assistance</h1>
                    <p>Whether you're expanding operations, upgrading equipment, or seizing new opportunities, our flexible financing options, including <a href="{{ route('business.loan') }}">startup business loans</a>, provide the capital you need, when you need it</p>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12">
                        <div class="row my-3">
                            <div class="col-lg-3 col-md-3 col-6">
                                <div class="businessbq_main text-center">
                                    <div class="businessbq_img">
                                        <img src="public/assets/img/online-Disbursement.png" alt="" class="img-fluid">
                                    </div>
                                    <div class="businessbq">
                                        <p>Business Loans Up <br> To 30 Lacs</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-6">
                                <div class="businessbq_main text-center">
                                    <div class="businessbq_img">
                                        <img src="public/assets/img/interest-rate.png" alt="" class="img-fluid">
                                    </div>
                                    <div class="businessbq">
                                        <p>Rates Starting As <br> Low As 12%</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-6">
                                <div class="businessbq_main text-center">
                                    <div class="businessbq_img">
                                        <img src="public/assets/img/loan-duration-icon.png" alt="" class="img-fluid">
                                    </div>
                                    <div class="businessbq">
                                        <p>Borrow For 3 To 36 <br> Months</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-6">
                                <div class="businessbq_main text-center">
                                    <div class="businessbq_img">
                                        <img src="public/assets/img/collateral.png" alt="" class="img-fluid">
                                    </div>
                                    <div class="businessbq">
                                        <p>No Fees Or <br> Collateral</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-12 col-12 main_col mt-md-3">

                <div class="title_2 loan_Assi_h2">
                    <h2>Get Business Loan</h2>
                    <p>Fill The Enquiry Form Now</p>
                </div>

                <form action="{{ route('phonePe') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <label></label>
                            <input aria-label="First name" name="name" class="form-control" placeholder="Full Name"
                                type="text" required>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label></label>
                        <input aria-label="Email" name="email" class="form-control" placeholder="Email" type="email"
                            required>
                    </div>
                    <div class="col-md-12">
                        <label></label>
                        <input aria-label="Phone" name="phone" class="form-control" placeholder="Phone No" type="tel"
                            maxlength="10" required>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <label></label>
                            <select class="form-control" name="assistance_type" aria-label="Default select example"
                                required>
                                <option selected value="1">Business Loan</option>
                            </select>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-6">

                            @php
                            $states = App\Models\State::orderBy('name', 'ASC')->get();
                            @endphp
                            <select class="form-select form-control" name="state" aria-label="Default select example"
                                required>
                                <option selected value="">State</option>
                                @foreach ($states as $state)
                                <option class="form-control" value="{{ $state->id }}">{{ $state->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6">
                            @php
                            $citys = App\Models\City::orderBy('city', 'ASC')->get();
                            @endphp
                            <select class="form-select" name="city" aria-label="Default select example" required>
                                <option selected value="">City</option>
                                @foreach ($citys as $city)
                                <option class="form-control" value="{{ $city->id }}">{{ $city->city }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="btn_div_buttons">
                        <div class="btn_form_submit">
                            <input type="hidden" name="pay_amount" class="pay_amount" value="99">
                            <button type="submit" class="submit">Pay Now<span class="span_rupee"
                                    id="price_dynamic">₹99</span></button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</section>


<section class="small_bs_loan">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <div class="smallbs_loan_main">
                    <div class="smallbs_loan_heading text-center">
                        <h2>Empower Your Business <br>With Business Loans</span></h2>
                    </div>
                    <div class="business_finance">
                        <p>Empower Your Business with Business Loans sets the stage for a transformative journey. In a world where entrepreneurship is driven by dreams, easy access to capital from banks like SBI, Canara Bank, Yes Bank, Axis Bank, and private firms such as Tata Capital, Bajaj Finserv, Home Credit, and others serves as the bridge between vision and reality. Our tailored solutions cater to the unique needs of small businesses, offering not only financial assistance but also a clear path to growth, innovation, and success. With flexible terms, competitive rates, and personalised support, we stand as partners in your journey - empowering you to expand operations, invest in technology, and ultimately achieve your goals. Instant Approval Loans are <a href="{{ route('business.loan') }}">SBI business loan, Tata Capital business loan, Canara Bank</a> business loan now. If you want business loans from other banks or private firms, contact us. 
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="doyou_wantto">
    <div class="container">
        <div class="row text-center ">
            <div class="col-lg-12 col-md-12">
                <div class="doyou_wantto_heading">
                    <h2>Do You Want Business Loan For</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <div class="row justify-content-center text-center ">
                    <div class="col-lg-2 col-md-6 col-12">
                        <div class="doyou_heading mb-4">
                            <div class="doyou_img">

                                <img src="public/assets/img/why-invest-icon1.png" alt="" class="img-fluid ">
                            </div>
                            <div class="doyou_txt">
                                <p>Business Expansion</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-12">
                        <div class="doyou_heading mb-3">
                            <div class="doyou_img final_m">
                                <img src="public/assets/img/finacil_support.png" alt="" class="img-fluid">
                            </div>
                            <div class="doyou_txt">
                                <p>Financial Support</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-12">
                        <div class="doyou_heading mb-3">
                            <div class="doyou_img final_m">
                                <img src="public/assets/img/office_reno-re.png" alt="" class="img-fluid ">
                            </div>
                            <div class="doyou_txt">
                                <p>Office Renovation</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-12">
                        <div class="doyou_heading mb-3">
                            <div class="doyou_img final_m">
                                <img src="public/assets/img/grgrgr.png" alt="" class="img-fluid ">
                            </div>
                            <div class="doyou_txt">
                                <p>Office Equipment</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-12">
                        <div class="doyou_heading mb-3">
                            <div class="doyou_img">
                                <img src="public/assets/img/workplace.png" alt="" class="img-fluid ">
                            </div>
                            <div class="doyou_txt">
                                <p>Technology Investment</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row text-center ">
            <div class="col-lg-12">
                <div class="doyou_main_txt">
                    <p>Ready to take your business to the next level? Unlock growth opportunities with our
                        unique customized quick business loan solution. Whatever is your requirement whether you're
                        expanding operations, need financial support, investing in new equipment, or renovating your
                        office, boosting working capital or investing in technology,
                        we've got you covered for all your business needs. Say goodbye to financial barriers and
                        hello to success. Let's fuel your business dreams together.

                    </p>
                </div>
                <div class="applybn_loan">

                    <button type="button" class="mazin_" onclick="home_pay_form_fun()">
                        Apply Now

                    </button>
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">

                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="col-lg-12 col-md-12 col-12 mt-md-3">

                                        <div class="title_2 loan_Assi_h2">
                                            <h3>Get Business Loan</h3>
                                            <p>Fill The Enquiry Form Now</p>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label></label>
                                                <input aria-label="First name" class="form-control"
                                                    placeholder="Full Name" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <label></label>
                                            <input aria-label="Last name" class="form-control" placeholder="Email"
                                                type="text">
                                        </div>
                                        <div class="col-md-12">
                                            <label></label>
                                            <input aria-label="Last name" class="form-control" placeholder="Phone No"
                                                type="text">
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <label></label>
                                                <input aria-label="Last name" class="form-control"
                                                    placeholder="Business Loan" type="text">
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">

                                                @php
                                                $states = App\Models\State::orderBy('name', 'ASC')->get();
                                                @endphp
                                                <select class="form-select" name="state"
                                                    aria-label="Default select example">
                                                    <option selected value="">State</option>
                                                    @foreach ($states as $state)
                                                    <option class="form-control" value="{{ $state->id }}">{{
                                                        $state->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-md-6">
                                                @php
                                                $citys = App\Models\City::orderBy('city', 'ASC')->get();
                                                @endphp
                                                <select class="form-select" name="city"
                                                    aria-label="Default select example">
                                                    <option selected value="">City</option>
                                                    @foreach ($citys as $city)
                                                    <option class="form-control" value="{{ $city->id }}">{{ $city->city
                                                        }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="btn_div_buttons">
                                            <div class="btn_form_submit">
                                                <a href="" class="submit">Submit</a>
                                            </div>
                                        </div>

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

<section>

    <div class="choose_rup_india_bg py-lg-5 py-md-4 py-4">
        <h2 class="section-heading text-center">
            <strong>Why Choose Loan Suvidha ?</strong><br>
            <span class="light-font" style="font-size: 1.4rem">Here are some reasons why one should take an
                <b>Instant Business loan</b> from <span class="loan_suv">Loan Suvidha</span></span>
        </h2>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12 py-2">
                    <div class="choose_rup_ind_box">
                        <h3>1K+ happy customers</h3>
                        <p>Our commitment to customer satisfaction has consistently left
                            smiles on our customers' faces, establishing us as the premier platform for delivering
                            instant business loans to over 1000+ satisfied customers.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12 py-2">
                    <div class="choose_rup_ind_box">
                        <h3>Easy documentation Process</h3>
                        <p>Our streamlined online documentation process prioritizes your safety. Conducted nationwide,
                            our online documentation ensures accessibility to loans, even in the most remote areas.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12 py-2">
                    <div class="choose_rup_ind_box">
                        <h3>8+ years of experience</h3>
                        <p>With over 8 years of unwavering dedication and expertise in the field, we bring a wealth of
                            knowledge and insight to the business loan landscape.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12 py-2">
                    <div class="choose_rup_ind_box">
                        <h3>Online disbursal</h3>
                        <p>We assured your funds are deposited directly into your account, ensuring convenience and
                            security. </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12 py-2">
                    <div class="choose_rup_ind_box">
                        <h3>Customer transparency</h3>
                        <p>We take our customer's privacy very seriously, treating it as our utmost responsibility. Our
                            stringent privacy policies are designed to safeguard the confidentiality of our customer's
                            information.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12 py-2">
                    <div class="choose_rup_ind_box">
                        <h3>Quick sanction</h3>
                        <p>Our well efficient team provide you support in quick loan approval process and get it done
                            within 48 hours of submission. </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12 py-2">
                    <div class="choose_rup_ind_box">
                        <h3>Highest loan approval rate</h3>
                        <p>We are really thankful for that we have DSAs with many lenders, banks, NBFCs and we have a
                            high loan approval rate.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12 py-2">
                    <div class="choose_rup_ind_box">
                        <h3>Collateral-free loans</h3>
                        <p>Your credit history alone sufficient for your loan approval; no collateral required. A
                            favorable credit score ensures swift approval of your loan application.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="who_can_appli_ls">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="main_slid_items">
                    <h2>Eligibility & Criteria </h2>
                    <p>Eligibility and criteria for a Business Loan are crucial factors in the mortgage process.
                        Typically, lenders consider various aspects such as credit score, income stability, employment
                        history,
                        and debt-to-income ratio. A good credit score, usually above 620, demonstrates financial
                        responsibility and enhances eligibility.
                        Stable employment and income stream ensure the ability to repay the loan. </p>
                </div>
            </div>

            <div class="col-md-6">
                <div class="owl-carousels owl-theme" id="main_slide">
                    <div class="item">
                        <div class="carousel_img_main">
                            <img src="public/assets/img/businesss_loan (1).jpg" alt="" class="img-fluid ">
                        </div>
                    </div>

                    <div class="item">
                        <div class="carousel_img_main">
                            <img src="public/assets/img/medium_business_loan (2).jpg" alt="" class="img-fluid ">
                        </div>
                    </div>
                    <div class="item">
                        <div class="carousel_img_main">
                            <img src="public/assets/img/Business-Loan-for-Manufacturers (1).jpg" alt="" class="img-fluid ">
                        </div>
                    </div>
                    <div class="item">
                        <div class="carousel_img_main">
                            <img src="public/assets/img/business_loan_industries.jpg" alt="" class="img-fluid ">
                        </div>
                    </div>
                    <div class="item">
                        <div class="carousel_img_main">
                            <img src="public/assets/img/business loan for Propietor 11.jpg" alt="" class="img-fluid ">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<section class="cibil_score_main">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12 py-2">
                <div class="main_Session">
                    <div class="img_Session">
                        <img src="public/assets/img/draw_1.svg" alt="" class="img-fluid ">
                    </div>
                    <div class="main_cntnt_g">
                        <h2>700+ CIBIL Score </h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12 py-2">
                <div class="main_Session">
                    <div class="img_Session">
                        <img src="public/assets/img/draw_2.svg" alt="" class="img-fluid ">
                    </div>
                    <div class="main_cntnt_g">
                        <h2>Minimum 2+ Years Business operations</h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12 py-2">
                <div class="main_Session">
                    <div class="img_Session">
                        <img src="public/assets/img/draw_3.svg" alt="" class="img-fluid ">
                    </div>
                    <div class="main_cntnt_g">
                        <h2>Latest 12 months bank <br>statement</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="main_btn_apply">
            <button type="button" class="" onclick="home_pay_form_fun()">
                Apply Now
            </button>
        </div>
    </div>
</section>

<!-- testimonial -->

<!-- <section class="testimonial_sec">
        <div class="container bg-body-tertiary py-3">
            <div class="title_testimonial">
                <h2>Testimonial</h2>
            </div>
            <div id="testimonialCarousel" class="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="card shadow-sm rounded-3">
                            <div class="quotes display-2 text-body-tertiary">
                                <i class="bi bi-quote"></i>
                            </div>
                            <div class="card-body">
                                <p class="card-text">"I am Very Happy due to get the Loan for my business when I was stuck
                                    in the business.
                                    Thanks to Loan Suvidha they make very easy and simple process of Business Loan."
                                    <strong>From: </strong>Greater Noida/Up
                                </p>
                                <div class="d-flex align-items-center pt-2">
                                    <img src="assets/img/mr_vinay_.png" alt="bootstrap testimonial carousel slider 2">
                                    <div>
                                        <div class="flex_icon_star">
                                            <h5 class="card-title fw-bold">Mr. Vinay</h5>
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
                    <div class="carousel-item">
                        <div class="card shadow-sm rounded-3">
                            <div class="quotes display-2 text-body-tertiary">
                                <i class="bi bi-quote"></i>
                            </div>
                            <div class="card-body">
                                <p class="card-text">"Thanks Loan Suvidha.. helping me to grow in my business with the help
                                    of providing Loan.
                                    I strongly recommend Loan Suvidha for secured and fast Loan process." <strong>From:
                                    </strong>Noida/Up</p>
                                <div class="d-flex align-items-center pt-2">
                                    <img src="assets/img/ajay_bhati_.png" alt="bootstrap testimonial carousel slider 2">
                                    <div>

                                        <div class="flex_icon_star">
                                            <h5 class="card-title fw-bold">Ajay Bhati</h5>
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
                    <div class="carousel-item">
                        <div class="card shadow-sm rounded-3">
                            <div class="quotes display-2 text-body-tertiary">
                                <i class="bi bi-quote"></i>
                            </div>
                            <div class="card-body">
                                <p class="card-text">Loan Suvidha provided valuable support in securing my business loan.
                                    Their team offered expert advice and efficient assistance throughout the process,
                                    ensuring everything ran smoothly.
                                    I would recommend Loan Suvidha to other entrepreneurs seeking financial assistance.</p>
                                <div class="d-flex align-items-center pt-2">
                                    <img src="assets/img/shiv_uuuu.png" alt="bootstrap testimonial carousel slider 2">
                                    <div>

                                        <div class="flex_icon_star">
                                            <h5 class="card-title fw-bold">shiva Thakur</h5>
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
                <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

    </section> -->


<section class="testimonial_Sec_slicky">
    <div class="container">
        <div class="title_testimonial">
            <h2>Testimonial</h2>
        </div>
        <div class="slick-slider mt-5">
            <div class="slick_home_testimonial">
                <div class="cntnrt_slicky">
                    <p class="card-text">I am Very Happy due to get the Loan for my business when I was stuck
                        in the business.
                        Thanks to Loan Suvidha they make very easy and simple process of Business Loan."
                        <strong>From: </strong>Greater Noida/Up
                    </p>
                    <div class="mainlx_sl">
                        <div class="main_under_slicky">
                            <img src="public/assets/img/mr_vinay_.png" alt="">
                            <div class="neetu_texture">
                                <h5 class="card-title fw-bold">Mr. Vinay </h5>
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
                    <p class="card-text">"Thanks Loan Suvidha.. helping me to grow in my business with the help
                        of providing Loan.
                        I strongly recommend Loan Suvidha for secured and fast Loan process." <strong>From:
                        </strong>Noida/Up
                    </p>
                    <div class="mainlx_sl">
                        <div class="main_under_slicky">
                            <img src="public/assets/img/ajay_bhati_.png" alt="">
                            <div class="neetu_texture">
                                <h5 class="card-title fw-bold">Ajay Bhati</h5>
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
                    <p class="card-text">Loan Suvidha provided valuable support in securing my business loan.
                        Their team offered expert advice and efficient assistance throughout the process,
                        ensuring everything ran smoothly.
                        I would recommend Loan Suvidha to other entrepreneurs seeking financial assistance.
                    </p>
                    <div class="mainlx_sl">
                        <div class="main_under_slicky">
                            <img src="public/assets/img/shiv_uuuu.png" alt="">
                            <div class="neetu_texture">
                                <h5 class="card-title fw-bold">shiva Thakur </h5>
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

<section class="faq_Sec_main_Sec faq_per ">

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
                                Why should I choose Loan Suvidha for an instant business loan?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse " aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>Loan Suvidha stands out as a premier platform for instant business loans, with over 8
                                    years of experience, a streamlined online documentation process, quick disbursal,
                                    customer transparency, high loan approval rates, and collateral-free loans, ensuring
                                    convenience, security, and accessibility for borrowers.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                What are the eligibility criteria for obtaining a business loan from Loan Suvidha?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>Loan Suvidha considers factors such as a credit score of 700+, minimum 2+ years of
                                    business operations, and the latest 12 months' bank statements when assessing
                                    eligibility for business loans, ensuring borrowers meet the necessary criteria for
                                    loan
                                    approval.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                How can I calculate and apply for a business loan through Loan Suvidha?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>Loan Suvidha provides a loan calculator tool for estimating loan details such as
                                    total
                                    amount, EMI, and interest payable. After calculating, borrowers can easily apply
                                    online
                                    through Loan Suvidha's simplified application process, ensuring a hassle-free
                                    experience.</p>
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
                                What are the key features of business loans offered by Loan Suvidha?
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p>Loan Suvidha's business loans offer flexible financing options up to 30 lacs,
                                    competitive interest rates starting as low as 12%, repayment terms ranging from 3 to
                                    36 months, and no fees or collateral requirements, ensuring hassle-free access to
                                    capital for small businesses.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                aria-controls="flush-collapseTwo">
                                How can a business loan empower my small business?
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p>Business loans from Loan Suvidha empower small businesses by providing not just
                                    financial assistance but also a pathway to growth, innovation, and success. With
                                    tailored solutions, competitive rates, and personalized support, Loan Suvidha stands
                                    as
                                    a partner in your business journey, helping you expand operations, invest in
                                    technology,
                                    and achieve your goals.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseThree" aria-expanded="false"
                                aria-controls="flush-collapseThree">
                                What are the common purposes for which I can use a business loan?
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p>You can utilize a business loan for various purposes such as business expansion,
                                    financial support, office renovation, acquiring office equipment, and investing in
                                    technology, offering you the flexibility to address diverse business needs.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>
<!-- testimonial -->


@include('modals.pay_form')
@endsection


@section('scripts')
<script>

$(document).ready(function () {

        $('.pay_model_val').on('click', function () {
            $('select[name="city"]').empty();
        });

    })
    
    $(document).ready(function () {

        $('select[name="state"]').on('change', function () {
            var state_id = $(this).val();
            if (state_id) {
                $.ajax({
                    url: "{{ url('/city/') }}/" + state_id,
                    type: "GET",
                    dataType: "json",
                    success: function (data) {
                        $('select[name="city"]').empty();
                        $.each(data, function (key, value) {
                            //console.log(value);
                            $('select[name="city"]').append('<option value="' +
                                value.id + '">' + value.city + '</option>');
                        });
                    }
                });
            } else {
                $('select[name="city"]').empty();
            }
        });

    });
</script>

<script>

    function home_pay_form_fun() {
        $('#pay_modal_form').modal('show');
    }

    $(document).ready(function () {

        $('select[name="state"]').on('change', function () {
            var state_id = $(this).val();
            if (state_id) {
                $.ajax({
                    url: "{{ url('/city/') }}/" + state_id,
                    type: "GET",
                    dataType: "json",
                    success: function (data) {
                        $('select[name="city"]').empty();
                        $.each(data, function (key, value) {
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

    });


    $(".slick-slider").slick({
        slidesToShow: 2,
        infinite: true,
        slidesToScroll: 2,
        autoplay: true,
        prevArrow: '<button type="button" class="slick-custom-arrow slick-prev"> < </button>',
        nextArrow: '<button type="button" class="slick-custom-arrow slick-next"> > </button>',
        autoplaySpeed: 3000,

        responsive: [
            {
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