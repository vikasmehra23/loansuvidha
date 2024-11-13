@extends('layouts.app')

@if(!empty($metaTitle->value))
@section("title", $metaTitle->value)
@else
@section("title", "Home Loan")
@endif

@if(!empty($metaDesc->value))
@section("description", $metaDesc->value)
@else
@section("description", "Home Loan desc")
@endif

@if(!empty($metaKey->value))
@section("keywords", $metaKey->value)
@else
@section("keywords", "Home-Loan,key")
@endif
@section('links')
<link rel="canonical" href="https://loansuvidhaa.com/home-loan" />
@endsection

@section('content')
<section class="first">
    <div class="container">
        <div class="row align-items-center gx-0">
            <div class="col-lg-7 col-md-12 col-12">
                <div class="main_banner">
                    <h1>Get A Home Loan <br><span>Unlock Your Dream Home with Our Tailored Home Loan Solutions
                        </span></h1>
                    <div class="btm-brdr"></div>
                    <p>Secure a Home Loan with Loan Suvidha. Simple, easy and hussle-free process.</p>

                </div>
            </div>
            <div class="col-lg-5 col-md-12 col-12 main_col mt-md-3">

                <div class="title_2 loan_Assi_h2">

                    <h2>Get Home Loan</h2>
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
                            <div class="col-md-12">
                                <label></label>
                                <select class="form-control" name="assistance_type" aria-label="Default select example"
                                    required>
                                    <option selected value="1">Home Loan</option>
                                </select>
                            </div>
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
                                <option class="form-control" value="{{ $state->id }}">{{ $state->name }}
                                </option>
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
                                <option class="form-control" value="{{ $city->id }}">{{ $city->city }}
                                </option>
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


<section class="second">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="main_second_session">
                    <h2>How Loan Suvidha Benefits In Home Loan Process</h2>
                        <p>Loan Suvidhaa simplifies the home loan process by offering expert guidance, personalised solutions, and seamless access to <a href="{{ route('home.loan') }}">Canara Bank Home Loan</a>, HDFC Home Loan, SBI Home Loan and all services. We ensure quick approvals and hassle-free documentation for a stress-free experience.</p>
                </div>

                <div class="row py-2">
                    <div class="col-lg-6 col-md-6 col-12">
                        <ul class="ul_list">
                            <li class="li_list">
                                <div class="reason_home_loan">
                                    <i class="fa fa-house-user" style="color: #fc5900"></i>
                                </div>
                                <div class="content">
                                    <h3>Efficient Application Procedure</h3>
                                    <p>Simplified method for quicker start of your desired house journey, reducing
                                        documentation and waiting times. </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        </li>
                        <li class="li_list">
                            <div class="reason_home_loan">
                                <i class="fa fa-building" style="color: #fc5900"></i>
                            </div>
                            <div class="content">
                                <h3>Immediate Loan Approval</h3>
                                <p>Cutting-edge technology allows swift replies to applications, speeding up your house
                                    purchase with assurance and effectiveness.</p>
                            </div>
                        </li>
                        </ul>
                    </div>
                </div>
                <div class="row py-2">
                    <div class="col-lg-6 col-md-6 col-12">
                        <ul class="ul_list">
                            <li class="li_list">
                                <div class="reason_home_loan">

                                    <i class="fa-solid fa-sack-dollar" style="color: #fc5900"></i>
                                </div>
                                <div class="content">
                                    <h3>Simple Loan Procedure</h3>
                                    <p>Smooth journey from application to distribution, ensuring trust and minimal
                                        trouble throughout the borrowing process.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <ul>
                            <li class="li_list">
                                <div class="reason_home_loan">

                                    <i class="fa-solid fa-clock" style="color: #fc5900;"></i>
                                </div>
                                <div class="content">
                                    <h3>24/7 Assistance</h3>
                                    <p>Round-the-clock support for inquiries, advice, and assistance, offering
                                        convenience and peace of mind to borrowers.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row py-2">
                    <div class="col-lg-6 col-md-6 col-12">
                        <ul class="ul_list">
                            <li class="li_list">
                                <div class="reason_home_loan">

                                    <i class="fa-solid fa-chart-simple" style="color: #fc5900;"></i>
                                </div>
                                <div class="content">
                                    <h3>Competitive Interest Rates</h3>
                                    <p>
                                        Access to favorable rates reduces long-term expenses, making homeownership more
                                        accessible and sustainable over the years.
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <ul>
                            <li class="li_list">
                                <div class="reason_home_loan">

                                    <i class="fa-solid fa-hand-holding-dollar" style="color: #fc5900;"></i>
                                </div>
                                <div class="content">
                                    <h3>Tax Advantages:</h3>
                                    <p>Beneficial deductions on interest payments decrease taxable income, maximizing
                                        savings and financial efficiency for homeowners.
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ================= -->


<section class="third _home_lone_e suvidha_in">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="main_third_box suvidha_a">
                    <div class="main_second_session lone_home_a ">
                    </div>
                    <p class="lone_suvidha_p">At Loan Suvidha, we understand the deep importance of owning a home and the significant financial factors involved. Our platform is carefully designed to help you & secure the perfect home loan from all banks (<a href="{{ route('home.loan') }}">Canara Bank Home Loan</a>, HDFC Bank Home Loan, Axis Bank and more) or all private firms that fits your specific needs and financial circumstances. Our team is very much efficient in making the application process easier, ensuring a smooth journey. With access to a wide range of resources and knowledge, our committed team offers personalised advice and assistance, whether you're a first-time purchaser or an experienced investor. By utilising our extensive network, we simplify the procedure, saving your time and energy.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ========sllider -->
<section class="multi_Sec flexblie_box">

    <div class="container">
        <div class="main_second_session featur_an">
            <h2>Feature and Benefits of <span> Home Loan </span> with Loan Suvidha</h2>
            <p>
        </div>

        <div id="multiple-items" class="multi_item" ;>

            <div class="item">
                <div class="first_box how_work svg_img_text">
                    <img src="public/assets/img/att.svg" alt="">
                    <h3>Attractive Interest Rates</h3>
                    <p>We provide competitive interest rates starting at 8.55% p.a., one of the lowest rates
                        in the market. Please also note that rates are subject to the markets.</p>
                </div>
            </div>
            <div class="item">
                <div class="first_box how_work svg_img_text">
                    <img src="public/assets/img/att2.svg" alt="">
                    <h3>Flexible Repayment Tenure</h3>
                    <p>Obtain Your Desired Loan Amount and Repay at Your Convenience. Extend Your Home Loan Tenure for
                        Up to 30 Years.</p>
                </div>
            </div>
            <div class="item">
                <div class="first_box how_work svg_img_text">
                    <img src="public/assets/img/att3.svg" alt="">
                    <h3>Instant Sanction Letter</h3>
                    <p>Receive an Instant Sanction Letter Upon Approval of Your Home Loan. Refer to the Sanction Letter
                        for Clear Understanding of the Loan's Terms and Conditions.
                    </p>
                </div>
            </div>
            <div class="item ">
                <div class="first_box how_work svg_img_text">
                    <img src="public/assets/img/att4.svg" alt="">
                    <h3>Instant Approval</h3>
                    <p>While traditional lenders may take weeks to approve your loan, we can do it in few simple steps.
                        Simply click on apply now and fill the form our expert team will process your loan application
                        in few minutes.
                    </p>
                </div>
            </div>
            <div class="item">
                <div class="first_box how_work svg_img_text">
                    <div class="graduation_cap text-c">
                        <img src="public/assets/img/att5.svg" alt="">
                    </div>
                    <h3>100% Paper Less Process</h3>
                    <p>No paperwork requirement. Our process of housing loan is completely paperless, from loan
                        application to approval, ensuring a seamless quick journey for you.</p>
                </div>
            </div>
            <div class="item">
                <div class="first_box how_work svg_img_text">
                    <div class="graduation_cap text-c">
                        <img src="public/assets/img/att6.svg" alt="">
                    </div>
                    <h3>Zero Processing Fee</h3>
                    <p>We do not impose any processing fees. Additionally, you can pre-close your housing loan without
                        incurring any extra charges, making it even more convenient for you.</p>
                </div>
            </div>

        </div>
    </div>
</section>




<!-- =====slider_end -->


<!-- ================= -->




<section class="interest_rate  ">
    <div class="container">
        <div class="row interest_s">
            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                <div class="lone_home_W">
                    <img src="public/assets/img/homeLoan.jpg" alt="" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                <div class="lone_home_W">
                    <div class="sec-title home_trust rate_cha">
                        <h2>How to Apply for Home<br> Loan?</h2>
                    </div>
                    <ul class="fa_slode_checking apply_h">
                        <li>
                            <h2>Step 1</h2>
                            <span> Fill out an easy online form.</span>
                        </li>
                        <li>
                            <h2>Step 2</h2><span>Upload your ID documents and bank
                                statement.</span>
                        </li>

                        <li>
                            <h2>Step 3</h2><span>Get instant money in to your bank account.</span>
                        </li>
                    </ul>

                    <div class="row mt-5 btn_main_div">
                        <div class="col">

                            <button type="button" class="btn btn-primary home_lone_btn" onclick="home_pay_form_fun()">
                                Apply For Home Loan Now
                            </button>
                        </div>

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
                                                <h3>Get Home Loan</h3>
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
                                                <input aria-label="Last name" class="form-control"
                                                    placeholder="Phone No" type="text">
                                            </div>

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <label></label>
                                                    <input aria-label="Last name" class="form-control"
                                                        placeholder="Home Loan" type="text">
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
                                                        <option class="form-control" value="{{ $state->id }}">
                                                            {{ $state->name }}</option>
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
                                                        <option class="form-control" value="{{ $city->id }}">
                                                            {{ $city->city }}</option>
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
    </div>
</section>
<!-- =============== -->
<section class="fourth">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="main_second_session">
                    <h2>How <span>Loan Suvidha </span>Works?</h2>
                    <p>Let's delve into how Loan Suvidha works to simplify the process of acquiring a home loan.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12 py-2">
                    <div class="first_box how_work">
                        <h3>Trustworthy Lending Network</h3>
                        <p>Gain access to a variety of loan choices at competitive rates from reliable lenders.
                        </p>
                    </div>
                </div>


                <div class="col-lg-3 col-md-6 col-12 py-2">
                    <div class="first_box how_work">
                        <h3>Application Process</h3>
                        <p>Enjoy a seamless process with easy-to-use tools and a user-friendly interface.</p>

                    </div>
                </div>



                <div class="col-lg-3 col-md-6 col-12 py-2">
                    <div class="first_box how_work">
                        <h3>Online Application</h3>
                        <p>Easily submit loan applications through the Loan Suvidha website for increased efficiency.
                        </p>

                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-12 py-2">
                    <div class="first_box how_work">

                        <h3>Up-to-date</h3>
                        <p> Clear communication with borrowers, offering instant updates on application status for
                            improved interaction.
                        </p>

                    </div>
                </div>

            </div>



        </div>
    </div>
</section>

<section class="interest_rate">
    <div class="container">
        <div class="row interest_s">
            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                <div class="lone_home_W">
                    <div class="sec-title home_trust rate_cha">
                        <h2>Home Loan Interest Rate and Charges</h2>
                    </div>
                    <div class="ul_li_main onwards">
                        <ul>
                            <li>
                                <p>Interest Rate: 8.55% p.a. onwards</p>
                            </li>
                            <li>
                                <p>Loan Amount: Up to Rs.5 crore</p>
                            </li>
                            <li>
                                <p>Tenure: Up to 30 years</p>
                            </li>
                            <li>
                                <p>Foreclosure Charges: Zero</p>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                <div class="lone_home_W">
                    <img src="public/assets/img/homeLoan.jpg" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>



<section class="eligibility_home">
    <div class="container">

        <div class="row interest_s home_lone_row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-12">

                <div class="lone_home_W">
                    <img src="public/assets/img/Eligibility.jpg" alt="" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                <div class="lone_home_W">
                    <div class="sec-title home_trust rate_cha eligibil ">
                        <h2 class="creiter">Home Loan Eligibility Criteria</h2>
                    </div>
                    <table class="table_personal home_loan_tebal">
                        <tbody>
                            <tr>
                                <th>Particulars</th>
                                <th>For Salaried</th>
                                <th>For self-employed</th>
                            </tr>
                            <tr>
                                <td>Age Limit</td>
                                <td>23 years to 70 years</td>
                                <td>23 years to 70 years</td>
                            </tr>

                            <tr>
                                <td>Required Credit Score</td>
                                <td>700 Or Higher </td>
                                <td>700 Or Higher </td>

                            </tr>
                            <tr>
                                <td>Minimum Income Per Annum</td>
                                <td>Minimum 3Lac Per Annum </td>
                                <td>Minimum 5Lac Per Annum </td>

                            </tr>
                            <tr>
                                <td>Nationality</td>
                                <td>Indian, residing within the country</td>
                                <td>Indian, residing within the country</td>

                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ======================================== -->
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
                                <p class="card-text">“Loan Suvidha provided excellent service for my home loan needs in
                                    Bangalore. Their team was efficient and responsive, making the entire process
                                    hassle-free.” <strong>From: </strong>Banglore</p>
                                <div class="d-flex align-items-center pt-2">
                                    <img src="assets/img/Navita_.png" alt="bootstrap testimonial carousel slider 2">
                                    <div>
                                        <div class="flex_icon_star">
                                            <h5 class="card-title fw-bold">Navita</h5>
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
                                <p class="card-text">"I had a positive experience with Loan Suvidha while applying for a
                                    home loan. Their professionalism and timely assistance made the process straightforward.
                                    Sunil Mehta, Home Loan Applicant."</p>
                                <div class="d-flex align-items-center pt-2">
                                    <img src="assets/img/Sunil_mehta_.png" alt="bootstrap testimonial carousel slider 2">
                                    <div>

                                        <div class="flex_icon_star">
                                            <h5 class="card-title fw-bold">Sunil Mehta</h5>
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
                                    They’ve been there from the start to help when I’ve needed it."</p>
                                <div class="d-flex align-items-center pt-2">
                                    <img src="assets/img/sachin_sharma.jpg" alt="bootstrap testimonial carousel slider 2">
                                    <div>

                                        <div class="flex_icon_star">
                                            <h5 class="card-title fw-bold">Sachin Sharma</h5>
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

<section class="testimonial_Sec_slicky pt-0">
    <div class="container">
        <div class="title_testimonial">
            <h2>Testimonial</h2>
        </div>
        <div class="slick-slider mt-5">
            <div class="slick_home_testimonial">
                <div class="cntnrt_slicky">
                    <p class="card-text">“Loan Suvidha provided excellent service for my home loan needs in
                        Bangalore. Their team was efficient and responsive, making the entire process
                        hassle-free.” <strong>From: </strong>Banglore
                    </p>
                    <div class="mainlx_sl">
                        <div class="main_under_slicky">
                            <img src="public/assets/img/Navita_.png" alt="">
                            <div class="neetu_texture">
                                <h5 class="card-title fw-bold">Navita </h5>
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
                    <p class="card-text">"I had a positive experience with Loan Suvidha while applying for a
                        home loan. Their professionalism and timely assistance made the process straightforward.
                        Sunil Mehta, Home Loan Applicant."
                    </p>
                    <div class="mainlx_sl">
                        <div class="main_under_slicky">
                            <img src="public/assets/img/Sunil_mehta_.png" alt="">
                            <div class="neetu_texture">
                                <h5 class="card-title fw-bold">Sunil Mehta </h5>
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
                        They’ve been there from the start to help when I’ve needed it."</p>
                    <div class="d-flex align-items-center pt-2">
                        </p>
                        <div class="mainlx_sl">
                            <div class="main_under_slicky">
                                <img src="public/assets/img/sachin_sharma.jpg" alt="">
                                <div class="neetu_texture">
                                    <h5 class="card-title fw-bold">Sachin Sharma</h5>
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
<section class="faq_Sec_main_Sec pt-0">

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
                                What are the benefits of choosing Loan Suvidha for a home loan?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse " aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>Loan Suvidha provides round-the-clock assistance, competitive interest rates, tax
                                    advantages, and a simple loan procedure, ensuring trust, minimal trouble,
                                    convenience,
                                    and peace of mind for borrowers throughout the home loan process.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                What is the eligibility criteria for obtaining a home loan through Loan Suvidha?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>Loan Suvidha's eligibility criteria include age limits, required credit scores, work
                                    experience, minimum income per annum, and nationality requirements for both salaried
                                    and
                                    self-employed individuals, ensuring borrowers meet the necessary criteria for loan
                                    approval.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                How can I apply for a home loan through Loan Suvidha?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>Applying for a home loan with Loan Suvidha is a simple three-step process: fill out
                                    an
                                    easy online form, upload your ID documents and bank statement, and receive instant
                                    money
                                    in your bank account, ensuring a hassle-free experience for borrowers.</p>
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
                                Why should I consider a home loan?
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p>Home loans offer financial support, flexible repayment options, tax benefits, and the
                                    opportunity to invest in a valuable asset, making homeownership a feasible and
                                    beneficial choice for individuals.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                aria-controls="flush-collapseTwo">
                                What makes the application procedure for a home loan efficient with Loan Suvidha?
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p>Loan Suvidha offers a simplified method for quicker initiation of the house buying
                                    journey, reducing documentation and waiting times, ensuring a smoother borrowing
                                    process
                                    for applicants.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseThree" aria-expanded="false"
                                aria-controls="flush-collapseThree">
                                How quickly can I expect loan approval with Loan Suvidha?
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p>Loan Suvidha utilizes cutting-edge technology to provide swift replies to loan
                                    applications, facilitating immediate loan approval and expediting the house purchase
                                    process with assurance and effectiveness.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- footer -->
@include('modals.pay_form')
@endsection

@section('scripts')
<script>
    function home_pay_form_fun() {
        $('#pay_modal_form').modal('show');
    }

    $(document).ready(function () {

        $('.pay_model_val').on('click', function () {
            $('select[name="city"]').empty();
        });

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