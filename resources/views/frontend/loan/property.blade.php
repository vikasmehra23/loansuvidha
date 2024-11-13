@extends('layouts.app')

@if(!empty($metaTitle->value))
@section("title", $metaTitle->value)
@else
@section("title", "Property Loan")
@endif

@if(!empty($metaDesc->value))
@section("description", $metaDesc->value)
@else
@section("description", "Property Loan desc")
@endif

@if(!empty($metaKey->value))
@section("keywords", $metaKey->value)
@else
@section("keywords", "Property-Loan, key")
@endif
@section('links')
<link rel="canonical" href="https://loansuvidhaa.com/property-loan" />
@endsection

@section('content')
<section class="proprty_main_Sec_im">
    <div class="container">
        <div class="row justify-content-between gx-0">
            <div class="col-lg-6 col-md-12 col-12">
                <div class="main_banner">
                    <h1>Unlock Your Dream Property with 
                        <span>Our Property Loan Solutions</span>
                    </h1>

                    <div class="btm-brdr"></div>

                    <p>Unlock your dream property with Loan Suvidhaa's services! We offer a <a href="{{ route('property_loan') }}">loan against property without income proof</a>, tailored commercial property loans, and <a href="{{ route('property_loan') }}">SBI loan against property </a>to help you secure the best financing options. Whether you need a <a href="{{ route('property_loan') }}">loan for purchase of commercial property</a> or a <a href="{{ route('property_loan') }}">loan against land property</a>, we’re here to assist you!</p>
                    <!-- <button>Apply Now</button> -->
                </div>
            </div>
            <div class="col-lg-5 col-md-12 col-12 main_col mt-md-3">

                <div class="title_2 loan_Assi_h2">
                    <h2>Get Property Loan</h2>
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
                                <option selected value="1">Property Loan</option>
                            </select>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-6">

                            @php
                            $states = App\Models\State::orderBy('name', 'ASC')->get();
                            @endphp
                            <select class="form-select" name="state" aria-label="Default select example" required>
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



<section class="proper_main_top_Sec">
    <div class="container">
        <div class="main_pro_txt">
            <h2>Apply for Loan Against Property With Loan Suvidha</h2>
            <p>Unlocking the hidden potential of your property isn't just about owning a piece of real estate; it's about leveraging it to fulfill your financial aspirations. Enter the world of <a href="{{ route('property_loan') }}">Loan Against Property</a> (LAP), a versatile financial instrument offered by Loan Suvidhaa that transforms your property into a valuable asset, providing numerous opportunities and benefits. Whether you're looking for a <a href="{{ route('property_loan') }}">loan against property without income proof</a>, a <a href="{{ route('property_loan') }}">commercial property loan</a>, or an <a href="{{ route('property_loan') }}">SBI loan against property</a>, or any <a href="{{ route('property_loan') }}">loan to buy property</a>, LAP is a game-changer in the realm of borrowing and financial management. 
            </p>
        </div>
    </div>
</section>


<section class="features-sec">
    <div class="container">
        <div class="property_loan_hu">
            <h2 class="PRHeading green text-center">Features and Benefits for Loan Against Property</h2>
            <div class="col-md-12 text-center">
            </div>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="cityCard dflexClass panipatSection">
                        <div class="feature_img">
                            <img class="img-fluid" src="public/assets/img/masking_kkkk.png" alt="">
                        </div>
                        <div>
                            <h3>Mortgage loan amount:</h3>
                            <p>You may receive the loan amount between INR 20 lakh to INR 7.5 crore, determined by the
                                market value of your property and other eligibility criteria</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="cityCard dflexClass panipatSection">
                        <div class="feature_img">
                            <img class="img-fluid" src="public/assets/img/seconnd.png" alt="">
                        </div>
                        <div>
                            <h3>LTV Ratio:</h3>
                            <p>The Loan-to-Value (LTV) Ratio can go up to 75% of your property's value, giving you ample
                                funds to meet your goals and enabling you to secure a higher loan amount based on your
                                property's value.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="cityCard dflexClass panipatSection">
                        <div class="feature_img">
                            <img class="img-fluid" src="public/assets/img/third_.png" alt="">
                        </div>
                        <div>
                            <h3>Flexible Tenure:</h3>
                            <p>The repayment period for LAP can extend up to 15 years, easing the burden for borrowers
                                to manage their EMIs comfortably.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-md-4 mb-4">
                    <div class="cityCard dflexClass panipatSection">
                        <div class="feature_img">
                            <img class="img-fluid" src="public/assets/img/fours.png" alt="">
                        </div>
                        <div>
                            <h3>Low-Interest Rate: </h3>
                            <p>Get Benefit of the competitive interest rates provided by Loan Suvidha's Property Loan,
                                ensuring affordability and efficient, cost-effective financing.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="cityCard dflexClass panipatSection">
                        <div class="feature_img rerere">
                            <img class="img-fluid" src="public/assets/img/Hassle-free Documentation.png" alt="">
                        </div>
                        <div>
                            <h3>Hassle-free Documentation:</h3>
                            <p>Streamline the loan application process with Loan Suvidha's Property Loan, as we ensure
                                straightforward documentation for your convenience.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="cityCard dflexClass panipatSection">
                        <div class="feature_img rerere">
                            <img class="img-fluid" src="public/assets/img/repayment.png" alt="">
                        </div>
                        <div>
                            <h3>Easy Repayment &amp; Longer Tenure:</h3>
                            <p>Take advantage of flexible repayment options and an extended loan duration with Loan
                                Suvidha's Property Loan, ensuring ease in managing your financial affairs.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="second">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="main_second_session">
                    <h2>Exploring Property Loan With 
                    <span>Loan Suvidha (Loan Suvidhaa)</span></h2>
                    <p>Unlock Your Future with a Loan Against Property: No Income Proof Needed for Your Dream Commercial or Land Property!</p>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-4 col-12 mb-5">
                        <ul class="ul_list  list_main_thing">
                            <li class="li_list py-2">
                                <div class="image_hurt_h">
                                    <img class="img-fluid" src="public/assets/img/icccccccccccccccc.png" alt="">
                                </div>
                                <div class="content">
                                    <h3>Age</h3>
                                    <p>An Indian national with a minimum age of 25 years and maximum age of 75 years.
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-4 col-12 mb-5">
                        <ul class="ul_list list_main_thing">
                            <li class="li_list py-2">
                                <div class="image_hurt_h">
                                    <img class="img-fluid" src="public/assets/img/citizenship.png" alt="">
                                </div>
                                <div class="content">
                                    <h3>Citizenship</h3>
                                    <p>Verify your Indian citizenship status to fulfil the criteria for the instant
                                        mortgage loan.</p>
                                </div>
                            </li>
                        </ul>
                    </div>


                    <div class="col-lg-4 col-md-4 col-12 mb-5">
                        <ul class="ul_list list_main_thing">
                            <li class="li_list py-2">
                                <div class="image_hurt_h">
                                    <img class="img-fluid" src="public/assets/img/employment.png" alt="">
                                </div>
                                <div class="content">
                                    <h3>Employment Status</h3>
                                    <p>If you meet the requirements for an immediate mortgage loan. For the loan to be
                                        authorized, your company must have operated for at least three years.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-12 mb-5">
                        <ul class="ul_list list_main_thing">
                            <li class="li_list py-2">
                                <div class="image_hurt_h">
                                    <img class="img-fluid" src="public/assets/img/ruppee_uu.png" alt="">
                                </div>
                                <div class="content">
                                    <h3>Business Status</h3>
                                    <p>Applicants should be in the business for at least 3 years.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12 mb-5">
                        <ul class="ul_list list_main_thing">
                            <li class="li_list py-2">
                                <div class="image_hurt_h">
                                    <img class="img-fluid" src="public/assets/img/maximum.png" alt="">
                                </div>
                                <div class="content">
                                    <h3>Maximum Loan Tenure</h3>
                                    <p>The loan is available for a flexible tenure of 15 years.</p>
                                </div>
                            </li>
                        </ul>
                    </div>


                    <div class="col-lg-4 col-md-4 col-12 mb-5">
                        <ul class="ul_list list_main_thing">
                            <li class="li_list py-2">
                                <div class="image_hurt_h">
                                    <img class="img-fluid" src="public/assets/img/occupation.png" alt="">
                                </div>
                                <div class="content">
                                    <h3>Occupation Status</h3>
                                    <p>You must run a successful firm. People in the salaried class are ineligible for
                                        our mortgage loan.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="main_third_boxs">
                <p>Getting a property loan from Loan Suvidha is easy. Apply online, and our team will review
                    your request, set fair rates, and provide fast funding. Once approved, funds are
                    deposited directly into your bank account. With transparent terms and dedicated support,
                    we make the process smooth and stress-free for you.</p>
            </div>
        </div>
    </div>
</div>
</section> --}}


<section class="slider_sec2 text-center eligibily-sec">

    <div class="container">
        <h2 class="PRHeading green text-center">Why Choose Loan Suvidha For Loan Against Property?</h2>

        <div class="row align-items-center">
            <div class="col-12 col-carousel">
                <div class="owl-carousel2 carousel-main2">
                    <div class="slide_box">
                        <img class="img-fluid" src="public/assets/img/icccccccccccccccc.png" alt="">
                        <span>Loan amount</span>
                        <p>Loan Suvidha offers mortgage loans up to 75% of the collateral value.</p>
                        <br>
                    </div>
                    <div class="slide_box">
                        <img class="img-fluid" src="public/assets/img/Tenure and interest rates.png" alt="">
                        <span>Tenure and interest rates</span>
                        <p>Low-interest rates and long tenures make LAP loans an attractive option when you need a large
                            sum of money.</p>
                    </div>
                    <div class="slide_box">
                        <img class="img-fluid" src="public/assets/img/Variety of collaterals accepted.png" alt="">
                        <span>Variety of collaterals accepted</span>
                        <p>Loan Suvidha accepts almost all kinds of property as collateral. They can include land,
                            building, apartment, factory, shops, hospitals, schools, and more.</p>
                    </div>
                    <div class="slide_box">
                        <img class="img-fluid" src="public/assets/img/Multiple repayment modes.png" alt="">
                        <span>Multiple repayment modes</span>
                        <p>You can repay your loan through online payment, Electronic Clearing Service (ECS), or
                            National Automated Clearing House (NACH).</p>
                        <p>&nbsp;</p>
                    </div>
                    <div class="slide_box">
                        <img class="img-fluid" src="public/assets/img/Doorstep document collection.png" alt="">
                        <span>Doorstep document collection</span>
                        <p>Customer relationship professionals visit your home to collect all the necessary documents.
                        </p>
                    </div>
                    <div class="slide_box">
                        <img class="img-fluid" src="public/assets/img/Fast processing.png" alt="">
                        <span>Fast processing</span>
                        <p>It takes only about 7 to 10 days to process a loan against property in India if you are
                            eligible and all the documents are in place.</p>
                    </div>



                </div>
            </div>
        </div>
    </div>
</section>



<!-- job feature start -->
<section class="bg_disable bg_disapply ">
    <div class="container">
        <div class="section-title text-start">
            <h2 class="wow fadeInUp text-center">A Step-by-Step Guide With Loan Suvidha</h2>

        </div>

        <div class="row gy-4 mt-30">
            <div class="col-md-6 col-lg-4">
                <div class="feature-card-widget-7 wow fadeInUp" data-wow-delay="0.1s">
                    <h4>Application</h4>
                    <p>Start by filling out an application form with Loan Suvidha, providing details about your
                        property and financing needs.
                    </p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="feature-card-widget-7 wow fadeInUp" data-wow-delay="0.3s">
                    <h4>Evaluation</h4>
                    <p>Loan Suvidha's team evaluates your application, considering factors like property value,
                        credit history, and income.
                    </p>

                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="feature-card-widget-7 wow fadeInUp" data-wow-delay="0.5s">
                    <h4>Approval</h4>
                    <p>Once your application is approved, Loan Suvidha offers you a loan amount based on the
                        evaluation, along with interest rates and repayment terms.</p>

                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="feature-card-widget-7 wow fadeInUp" data-wow-delay="0.7s">
                    <h4>Documentation</h4>
                    <p>You'll need to submit necessary documents such as property papers, income proof, and
                        identity verification for finalizing the loan</p>

                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="feature-card-widget-7 wow fadeInUp" data-wow-delay="0.9s">
                    <h4>Disbursement</h4>
                    <p>After verifying the documents, Loan Suvidha disburses the approved loan amount directly
                        to your bank account or to the seller's account, facilitating the property purchase.</p>

                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="feature-card-widget-7 wow fadeInUp" data-wow-delay="1.1s">
                    <h4>Repayment</h4>
                    <p>You'll then start repaying the loan amount in monthly installments, including both
                        principal and interest, according to the agreed-upon terms and tenure.</p>

                </div>
            </div>

        </div>
    </div>
</section>
<!-- job feature end -->

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
                                <p class="card-text">“Loan Suvidha proved to be a reliable choice for my commercial
                                    property loan needs. Their process was straightforward, and they provided efficient
                                    service from start to finish.” <strong>From:</strong> Kadarpur/gurgaon </p>
                                <div class="d-flex align-items-center pt-2">
                                    <img src="assets/img/shersinghdamaya.png"
                                        alt="bootstrap testimonial carousel slider 2">
                                    <div>
                                        <div class="flex_icon_star">
                                            <h5 class="card-title fw-bold">Sher Singh Damaya</h5>
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
                                <p class="card-text">"Loan Suvidha has been an absolute game-changer for me, especially
                                    when it came to securing my property loan. Their efficiency and professionalism made the
                                    entire process smooth sailing." <strong>From:</strong> Badshahpur/haryana </p>
                                <div class="d-flex align-items-center pt-2">
                                    <img src="assets/img/yogesh_yadav_.png" alt="bootstrap testimonial carousel slider 2">
                                    <div>

                                        <div class="flex_icon_star">
                                            <h5 class="card-title fw-bold">Yogesh Yadav</h5>
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
                                <p class="card-text">"Anytime I’ve had an issue, I’ve reached out to The Loan Suvidha.
                                    They’ve been there from the start to help when I’ve needed it. <strong>From:
                                    </strong>Azadpur/delhi </p>
                                <div class="d-flex align-items-center pt-2">
                                    <img src="assets/img/ajay_kumar_.png" alt="bootstrap testimonial carousel slider 2">
                                    <div>

                                        <div class="flex_icon_star">
                                            <h5 class="card-title fw-bold">Ajay Kumar</h5>
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
                    <p class="card-text">“Loan Suvidha proved to be a reliable choice for my commercial
                        property loan needs. Their process was straightforward, and they provided efficient
                        service from start to finish.” <strong>From:</strong> Kadarpur/gurgaon </p>

                    </p>
                    <div class="mainlx_sl">
                        <div class="main_under_slicky">
                            <img src="public/assets/img/shersinghdamaya.png" alt="">
                            <div class="neetu_texture">
                                <h5 class="card-title fw-bold">Sher Singh Damaya</h5>
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
                    <p class="card-text">"Loan Suvidha has been an absolute game-changer for me, especially
                        when it came to securing my property loan. Their efficiency and professionalism made the
                        entire process smooth sailing." <strong>From:</strong> Badshahpur/haryana </p>

                    </p>
                    <div class="mainlx_sl">
                        <div class="main_under_slicky">
                            <img src="public/assets/img/yogesh_yadav_.png" alt="">
                            <div class="neetu_texture">
                                <h5 class="card-title fw-bold">Yogesh Yadav </h5>
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
                    <p class="card-text">"Anytime I’ve had an issue, I’ve reached out to The Loan Suvidha.
                        They’ve been there from the start to help when I’ve needed it. <strong>From:
                        </strong>Azadpur/delhi
                    </p>
                    <div class="mainlx_sl">
                        <div class="main_under_slicky">
                            <img src="public/assets/img/ajay_kumar_.png" alt="">
                            <div class="neetu_texture">
                                <h5 class="card-title fw-bold">Ajay Kumar </h5>
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
                                What documents are required for applying for a loan against property?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse " aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>Required documentation includes a duly filled application form, proof of identity and
                                    address, proof of business existence, income proof, property-related documents, and
                                    signature proof, ensuring a smooth application process for borrowers.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                What are the interest rates and fees associated with a loan against property from Loan
                                Suvidha?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>Loan Against Property interest rates start at 11% per annum, with loan amounts
                                    ranging
                                    from ₹20 lakh to ₹7.5 crore. Additionally, there are loan processing charges and
                                    foreclosure charges, ensuring transparency and clarity for borrowers regarding fees
                                    and
                                    charges.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Why should I choose Loan Suvidha for a loan against property?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>Loan Suvidha offers competitive loan amounts, low-interest rates, accepts a variety
                                    of
                                    collaterals, provides multiple repayment modes, offers doorstep document collection,
                                    and
                                    ensures fast processing, making it a reliable and efficient choice for obtaining a
                                    loan
                                    against property.</p>
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
                                What is a loan against property (LAP), and why should I consider it?
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p>A loan against property allows you to leverage your property to fulfill financial
                                    aspirations. With features like flexible tenure, competitive interest rates, and
                                    hassle-free documentation, LAP offers a versatile and beneficial borrowing option.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                aria-controls="flush-collapseTwo">
                                What are the key features and benefits of Loan Against Property offered by Loan Suvidha?
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p>Loan Suvidha's Loan Against Property offers mortgage loan amounts up to INR 7.5
                                    crore,
                                    high Loan-to-Value (LTV) ratios, flexible tenure up to 15 years, competitive
                                    interest
                                    rates, hassle-free documentation, and easy repayment options, ensuring financial
                                    peace
                                    of mind for borrowers.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseThree" aria-expanded="false"
                                aria-controls="flush-collapseThree">
                                What are the eligibility criteria for obtaining a loan against property from Loan
                                Suvidha?
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p>Eligibility criteria include being an Indian national aged between 25 to 75 years,
                                    owning property in India, having a stable employment or business status, and meeting
                                    specific income requirements, ensuring borrowers meet the necessary criteria for
                                    loan
                                    approval.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>


<!-- footer -->
@endsection

@section('scripts')
<script>
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



</script>
@endsection