@extends('layouts.app')

@if(!empty($metaTitle->value))
@section("title", $metaTitle->value)
@else
@section("title", "Vehicle Loan")
@endif

@if(!empty($metaDesc->value))
@section("description", $metaDesc->value)
@else
@section("description", "Vehicle Loan desc")
@endif

@if(!empty($metaKey->value))
@section("keywords", $metaKey->value)
@else
@section("keywords", "Vehicle-Loan, key")
@endif
@section('links')
<link rel="canonical" href="https://loansuvidhaa.com/vehicle-loan" />
@endsection

@section('content')
<section class="vehicle_banner_main">
    <div class="container">
        <div class="row align-items-center gx-0">
            <div class="col-md-12 col-lg-7 col-12">
                <div class="main_banner">
                    <h1>Drive Your Dreams, <span>Fast-Track Your Journey with Our Vehicle Loans!</span></h1>
                    <div class="btm-brdr"></div>
                    <p>
                        Accelerate Your Journey, Unlocking Keys to Your Dream Ride with Our Customized, Quick &
                        Hassle-Free Vehicle Loans.</p>

                </div>
            </div>
            <div class="col-lg-5 col-md-12 col-12 main_col mt-md-3">

                <div class="title_2 loan_Assi_h2">
                    <h2>Get Vehicle Loan</h2>
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
                                <option selected value="1">Vehicle Loan</option>
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

<section class="Online_loan">
    <div class="container">
        <div class="online_loan_cnt">
            <h3>Vehicle Loan With Loan Suvidha (Loan Suvidhaa)</h3>
            <p class="text_vi">Embark on your car ownership journey with our hassle-free vehicle loans solutions like <a href="{{ route('vehicle.loan') }}">Indian Bank vehicle loan </a>(IB vehicle loan), Yes bank vehicle loan, Axis bank vehicle loan, <a href="{{ route('vehicle.loan') }}">Bajaj vehicle loan</a>, IDFC bank vehicle loan, ICICI bank vehicle loan, <a href="{{ route('vehicle.loan') }}">SBI commercial vehicle loan </a>and from all other private firms. Whether you're eyeing a sleek sedan, a rugged SUV, or a fuel-efficient hybrid, we've got you covered. Our flexible terms and competitive rates make it easier than ever to drive away in your dream car. With quick approval processes and personalised assistance, we ensure a seamless experience from application to ownership.</p>
        </div>
    </div>
</section>
<!-- Online Loan Heading -->


<!-- Online Loan -->
<section class="perfact_loan">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-12 py-2">
                <div class="Better_then">
                    <div class="better_all">
                        <div class="better_icon">
                            <img src="public/assets/img/motorcycle.png" alt="">
                        </div>
                        <div class="better_text">
                            <h3> Easy Application Process</h3>
                            <p>Apply for a vehicle loan effortlessly through Loan Suvidha's user-friendly platform.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-12 col-12 py-2">
                <div class="Better_then">
                    <div class="better_two">
                        <div class="better_icon">
                            <img src="public/assets/img/best-price.png" alt="">
                        </div>
                        <div class="better_text">
                            <h3> Competitive Rates</h3>
                            <p>Benefit from competitive interest rates and flexible repayment options tailored to
                                your budget.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-12 col-12 py-2">
                <div class="Better_then">
                    <div class="better_three">
                        <div class="better_icon">
                            <img src="public/assets/img/quality.png" alt="">
                        </div>
                        <div class="better_text">
                            <h3>Quick Approval</h3>
                            <p>Get fast approval on your vehicle loan application, allowing you to drive away with
                                your dream car sooner.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-12 col-12 py-2">
                <div class="Better_then">
                    <div class="better_four">
                        <div class="better_icon">
                            <img src="public/assets/img/customer1.png" alt="">
                        </div>
                        <div class="better_text">
                            <h3> Dedicated Support</h3>
                            <p>Receive personalized assistance from Loan Suvidha's team throughout the loan process,
                                ensuring a smooth and hassle-free experience.</p>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>
<!-- Online Loan -->



<!-- how_it_work -->

<section class="how_it_work">
    <div class="container">
        <div class="how_work_cnt  worked_on_face">
            <h3>How Vehicle Loan Works With Loan Suvidha?</h3>
            <p class="text_vi">Embarking on the journey towards owning your dream vehicle involves more than just selecting the make and model; it requires navigating the intricacies of vehicle financing. <a href="https://loansuvidhaa.com">Loan Suvidha</a> (Loan Suvidhaa) steps in as your trusted companion, simplifying the process of acquiring vehicle loans like an <a href="{{ route('vehicle.loan')}}">SBI Commercial Vehicle Loan, Indian Bank Vehicle Loan</a>, or <a href="{{ route('vehicle.loan') }}">Bajaj Vehicle Loan</a>, and all other, putting you in the driver's seat of your automotive aspirations. Let's unravel the mechanics of how vehicle loans work with Loan Suvidha and how they can propel you towards your desired ride.</p>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-12">
                <div class="how_work_box simple_work_u">
                    <div class="work_icon new_icon_app ">
                        <img src="public/assets/img/user (2).png" alt="">
                    </div>
                    <div class=" simple_work_u">
                        <h3>Application </h3>
                        <p> Start by completing a straightforward online application form, entering essential
                            information about yourself and the vehicle you intend to buy.
                        </p>
                    </div>
                </div>

            </div>

            <div class="col-lg-3 col-md-6 col-12">
                <div class="how_work_box simple_work_u">
                    <div class="work_icon new_icon_app">
                        <img src="public/assets/img/money.png" alt="">
                    </div>
                    <div class=" simple_work_u">
                        <h3>Verification</h3>
                        <p>Our team will carefully access your application and documents to verify accuracy and
                            determine eligibility
                            for a vehicle loan.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-12">
                <div class="how_work_box simple_work_u">
                    <div class="work_icon new_icon_app">
                        <img src="public/assets/img/funding.png" alt="">
                    </div>
                    <div class="simple_work_u">
                        <h3> Approval</h3>
                        <p>Once your loan verification will be successfully completed, your loan application will be
                            proceed for loan processing, and you will receive a decision regarding loan approval.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-12">
                <div class="how_work_box simple_work_u">
                    <div class="work_icon new_icon_app">
                        <img src="public/assets/img/bank.png" alt="">
                    </div>
                    <div class="simple_work_u">
                        <h3>Disbursement</h3>
                        <p>Once your loan is approved, the loan amount will be directly disbursed to the seller or
                            dealership, enabling you to drive off in your new vehicle.</p>
                    </div>
                </div>
            </div>


        </div>
        <div class="row mt-5 btn_main_div vihical_lone_c">
            <div class="col">
                <button type="button" class="btn btn-primary vihical_lone_btn" onclick="home_pay_form_fun()">
                    Apply For Vehicle Loan Now
                </button>
            </div>

            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="col-lg-12 col-md-12 col-12 mt-md-3">

                                <div class="title_2 loan_Assi_h2">
                                    <h3>Get Vehicle Loan</h3>
                                    <p>Fill The Enquiry Form Now</p>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label></label>
                                        <input aria-label="First name" class="form-control" placeholder="Full Name"
                                            type="text">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <label></label>
                                    <input aria-label="Last name" class="form-control" placeholder="Email" type="text">
                                </div>
                                <div class="col-md-12">
                                    <label></label>
                                    <input aria-label="Last name" class="form-control" placeholder="Phone No"
                                        type="text">
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <label></label>
                                        <input aria-label="Last name" class="form-control" placeholder="Vehicle Loan"
                                            type="text">
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-6">

                                        @php
                                        $states = App\Models\State::orderBy('name', 'ASC')->get();
                                        @endphp
                                        <select class="form-select" name="state" aria-label="Default select example">
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
                                        <select class="form-select" name="city" aria-label="Default select example">
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

</section>


<section class="doyou_wantto vehicle_car_ ">
    <div class="container">
        <div class="row text-center ">
            <div class="col-lg-12 col-md-12">
                <div class="doyou_wantto_heading">
                    <h2>Do You Want Vehicle Loan For:</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <div class="row justify-content-center text-center ">
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="doyou_heading mb-4">
                            <div class="doyou_img final_m">

                                <img src="public/assets/img/vehicle_loan_1.png" alt="" class="img-fluid ">
                            </div>
                            <div class="doyou_txt">
                                <p> New Car <br>Loan</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="doyou_heading mb-3">
                            <div class="doyou_img final_m">
                                <img src="public/assets/img/vehicle_loan_2.png" alt="" class="img-fluid">
                            </div>
                            <div class="doyou_txt">
                                <p>Used Car<br> Loan</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="doyou_heading mb-3">
                            <div class="doyou_img final_m">
                                <img src="public/assets/img/vehicle_loan_3.png" alt="" class="img-fluid ">
                            </div>
                            <div class="doyou_txt">
                                <p>Commercial Vehicle <br>Loan</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="doyou_heading mb-3">
                            <div class="doyou_img final_m">
                                <img src="public/assets/img/vehicle_loan_4.png" alt="" class="img-fluid ">
                            </div>
                            <div class="doyou_txt">
                                <p>Two Wheeler <br>Loan</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="row text-center ">
            <div class="col-lg-12">
                <div class="doyou_main_txt">
                    <p>Our comprehensive vehicle loan solutions cater to all your needs, ensuring a seamless experience
                        regardless of the vehicle type. Whether you're eyeing a new car or old one, a rugged truck or a
                        sleek motorcycle, or even a recreational vehicle, we've got you covered. With flexible terms,
                        competitive rates, and personalized assistance,
                        our easy application process makes acquiring your dream vehicle a breeze.

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
                                                    placeholder="vehicle Loan" type="text">
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
</section>
<!-- ====doyou_wantto vehicle_car_ end== -->


<!-- ====== -->

<section class="vehicle_choose">
    <div class="choose_rup_india_bg py-lg-5 py-md-4 py-4">
        <h2 class="section-heading text-center">
            <strong>Benefits of Vehicle Loan in India</strong><br>
            <span class="light-font" style="font-size: 1.4rem">Here are some reasons why one should take an
                <b>Instant Business loan</b> from <span class="loan_suv">Loan Suvidha</span></span>
        </h2>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="choose_rup_india">
                        <div class="choose_rup_ind_box">
                            <h3>Flexibility to Choose Tenure</h3>
                            <p>We provide a very flexible loan tenure of 3, 5 or 7 Years (84 months) for your
                                convenience, ensuring that repayment
                                doesn't become a financial burden for you.</p>
                        </div>
                        <div class="choose_rup_ind_box">
                            <h3>No Collateral Required</h3>
                            <p>Securing collateral can add pressure when applying for a loan. However, obtaining a loan
                                with us alleviates that pressure. You don't need any collateral to apply for a loan with
                                us.</p>
                        </div>
                        <div class="choose_rup_ind_box">
                            <h3>Payment Facility</h3>
                            <p>We offer an easy EMI payment option to simplify repayment for you. You can select the
                                installment that suits your convenience.</p>
                        </div>
                        <div class="choose_rup_ind_box">
                            <h3>Flexibility to Choose Interest Type</h3>
                            <p>You have the freedom to select between fixed or floating interest rates according to your
                                preference.</p>
                        </div>
                        <div class="choose_rup_ind_box">
                            <h3>Fast Loan Processing</h3>
                            <p>A vehicle loan doesn't require collateral for approval, and it typically processes faster
                                than other types of loans.</p>
                        </div>
                        <div class="choose_rup_ind_box">
                            <h3>No Need to Use Your Savings</h3>
                            <p>You can even receive the entire loan amount you've applied for with us, eliminating the
                                need to spend any of your savings.</p>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<!-- ====== -->


<section class="who_can_appli_ls vehicle_eligibility ">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="main_slid_items">
                    <h2>Eligibility & Criteria</h2>
                    <p>Now owning your dream vehicle is simpler than ever with our vehicle loan eligibility and
                        criteria. We understand that each individual's circumstances are unique, so we offer flexible
                        eligibility requirements tailored to your needs. Whether you're a first-time buyer or a seasoned
                        car enthusiast, our criteria accommodate a wide range of applicants. With competitive interest
                        rates and hassle-free application processes, we ensure that owning your desired vehicle is
                        within reach. Our transparent eligibility guidelines empower you to make informed decisions,
                        paving the way for a smooth and seamless
                        loan approval process. Drive towards your aspirations today! </p>
                </div>
            </div>

            <div class="col-md-6">
                <div class="img_Sess">
                    <img src="public/assets/img/loan-against-car.png" alt="" class="img-fluid ">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================= -->

<section class="cibil_score_main">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-12 py-2">
                <div class="main_Session">
                    <div class="img_Session">
                        <img src="public/assets/img/draw_1.svg" alt="" class="img-fluid ">
                    </div>
                    <div class="main_cntnt_g">
                        <h2>700+ Cibil Score</h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12 py-2">
                <div class="main_Session">
                    <div class="img_Session">
                        <img src="public/assets/img/draw-12.png" alt="" class="img-fluid ">
                    </div>
                    <div class="main_cntnt_g">
                        <h2>Age</h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12 py-2">
                <div class="main_Session">
                    <div class="img_Session">
                        <img src="public/assets/img/draw-13.png" alt="" class="img-fluid ">
                    </div>
                    <div class="main_cntnt_g">
                        <h2>Identity and Address Proof</h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12 py-2">
                <div class="main_Session">
                    <div class="img_Session">
                        <img src="public/assets/img/draw_3.svg" alt="" class="img-fluid ">
                    </div>
                    <div class="main_cntnt_g">
                        <h2>Employment and Income Proof</h2>
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
<!-- ============================== -->
<section class="testimonial_Sec_slicky">
    <div class="container">
        <div class="title_testimonial">
            <h2>Testimonial</h2>
        </div>
        <div class="slick-slider mt-5">
            <div class="slick_home_testimonial">
                <div class="cntnrt_slicky">
                    <p class="card-text">“My experience with Loan Suvidha for my vehicle loan was positive.
                        Their team provided helpful guidance and efficient service throughout the process. I
                        would recommend Loan Suvidha to others seeking vehicle financing.”
                    </p>
                    <div class="mainlx_sl">
                        <div class="main_under_slicky">
                            <img src="public/assets/img/vehicle_testimonial_img1.jpg" alt="">
                            <div class="neetu_texture">
                                <h5 class="card-title fw-bold">Rakesh Mittal</h5>
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
                    <p class="card-text">"Loan Suvidha offered reliable support for my vehicle loan needs.
                        Their
                        professionalism and clear communication made the process straightforward and
                        hassle-free. I appreciate their assistance and would consider them for future financial
                        needs."
                    </p>
                    <div class="mainlx_sl">
                        <div class="main_under_slicky">
                            <img src="public/assets/img/vehicle_testimonial_img2.jpg" alt="">
                            <div class="neetu_texture">
                                <h5 class="card-title fw-bold">Neeraj Choopra</h5>
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
                    <p class="card-text">"Choosing Loan Suvidha for my vehicle loan was a good decision. Their
                        team provided prompt responses and guided me through each step of the process. I would
                        recommend Loan Suvidha to anyone in need of vehicle financing."
                    </p>
                    <div class="mainlx_sl">
                        <div class="main_under_slicky">
                            <img src="public/assets/img/vehicle_testimonial_img3.jpg" alt="">
                            <div class="neetu_texture">
                                <h5 class="card-title fw-bold">Akash Panwar</h5>
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

<!-- ===================== -->
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
                                What are the eligibility criteria for obtaining a vehicle loan from Loan Suvidha?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse " aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>Eligibility criteria include a minimum CIBIL score of 700, meeting age requirements,
                                    providing identity and address proof, and furnishing employment and income proof,
                                    ensuring that Loan Suvidha accommodates a wide range of applicants.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                What types of repayment options are available for vehicle loans from Loan Suvidha?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>Loan Suvidha offers flexible repayment options, allowing you to choose the loan tenure
                                    that suits your financial situation best, ensuring that repayment doesn't become a
                                    burden.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Why should I consider taking a vehicle loan instead of using my savings to purchase a
                                vehicle?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                               <p>Opting for a vehicle loan allows you to retain your savings while still acquiring the
                                vehicle you desire. With no collateral required and fast processing, a vehicle loan
                                provides a convenient and efficient financing option for your automotive aspirations.</p>
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
                                What types of vehicles can I finance with Loan Suvidha's vehicle loans?
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p>Loan Suvidha's vehicle loans cover a wide range of vehicles, including new cars, used
                                    cars, commercial vehicles, and two-wheelers, ensuring that your financing needs for
                                    any type of vehicle are met.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                aria-controls="flush-collapseTwo">
                                How does the vehicle loan application process work with Loan Suvidha?
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p>The application process involves completing a simple online form, submitting
                                    necessary
                                    documentation, verification by Loan Suvidha's team, loan approval, and direct
                                    disbursement of the loan amount to the seller or dealership, streamlining the
                                    process
                                    for acquiring your dream vehicle.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseThree" aria-expanded="false"
                                aria-controls="flush-collapseThree">
                                What are the benefits of choosing Loan Suvidha for my vehicle loan?
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p>Enjoy benefits such as flexible loan tenure, no requirement for collateral, easy EMI
                                    payment options, choice between fixed or floating interest rates, fast loan
                                    processing,
                                    and the ability to finance your vehicle without tapping into your savings.</p>
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
</script>
@endsection