@extends('layouts.app')

@if(!empty($metaTitle->value))
@section("title", $metaTitle->value)
@else
@section("title", "General Insurance")
@endif

@if(!empty($metaDesc->value))
@section("description", $metaDesc->value)
@else
@section("description", "General Insurance desc")
@endif

@if(!empty($metaKey->value))
@section("keywords", $metaKey->value)
@else
@section("keywords", "General-Insurance, key")
@endif
@section('links')
<link rel="canonical" href="https://loansuvidhaa.com/general-insurance" />
@endsection

@section('content')
<style>
    .bg_ox-general {
        padding: 37px;
        box-shadow: rgba(0, 0, 0, 0.2) 0px 12px 28px 0px, rgba(0, 0, 0, 0.1) 0px 2px 4px 0px, rgba(255, 255, 255, 0.05) 0px 0px 0px 1px inset;
        margin-bottom: 30px;
        border-radius: 15px;
    }
    .box_imahe_a-general {
        text-align: center;
        border: solid 1px #EEAD7D;
        border-radius: 5px;
        padding: 15px;
    }
    p#para1 {
        text-align: justify;
    }
</style>


<main>
    <!-- Banner start -->
    <section class="banner-area-2 main_about_main pt-170" style="background-image: linear-gradient
       (0deg, rgb(16 13 13 / 42%), rgb(20 19 19 / 69%)), url({{asset('public/assets/img/head_way_mmm.jpg')}});">
        <div class="container">
            <div class="row align-items-center pb-140 gx-0">
                <div class="col-md-6">
                    <div class="banner-content py-5">
                        <div class="section-title">
                            <h1 class="wow fadeInUp mb-0" data-wow-delay='0.2s'>General Insurance</h1>
                        </div>
                    </div>
                </div>


                <div class="col-lg-5 col-md-12 col-12 main_col mt-md-3">

                    <div class="title_2 loan_Assi_h2">
                        <h2>Get General Insurance</h2>
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
                            <input aria-label="Phone" name="phone" class="form-control" placeholder="Phone No"
                                type="tel" maxlength="10" required>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <label></label>
                                <select class="form-control" name="assistance_type" aria-label="Default select example"
                                    required>
                                    <option selected value="2">General Insurance</option>
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
    <!-- Banner end -->

    <section class="Insurance_box-general  pt-0">
        <div class="container">
            <div class="bg_ox-general">
                <div class="row">

                    <div class="col-lg-2 col-md-6 col-12 ">
                        <div class="box_imahe_a-general">
                            <div class="iconn">
                                <img src="{{asset('public/assets/img/veccch.png')}}" alt="">
                            </div>
                            <div class="contentt">
                                <p>Speedy Resolutions<br>Guaranteed</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-12 mt-2 mt-lg-0 mt-md-0">
                        <div class="box_imahe_a-general">
                            <div class="iconn">
                                <img src="{{asset('public/assets/img/engine_img.png')}}" alt="">
                            </div>
                            <div class="contentt">
                                <p>Engine Protection <br>Cover</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-12 mt-lg-0 mt-md-2 mt-2">
                        <div class="box_imahe_a-general">
                            <div class="iconn">
                                <img src="{{asset('public/assets/img/eco.png')}}" alt="">
                            </div>
                            <div class="contentt">
                                <p>Streamlined and <br>Sustainable</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-12 mt-lg-0 mt-md-2 mt-2">
                        <div class="box_imahe_a-general">
                            <div class="iconn">
                                <img src="{{asset('public/assets/img/budget.png')}}" alt="">
                            </div>
                            <div class="contentt">
                                <p>Budget-Friendly <br> Protection</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-12 mt-lg-0 mt-md-2 mt-2">
                        <div class="box_imahe_a-general">
                            <div class="iconn">
                                <img src="{{asset('public/assets/img/round_clock.png')}}" alt="">
                            </div>
                            <div class="contentt">
                                <p>Round-the-clock <br>supportUser</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-12 mt-lg-0 mt-md-2 mt-2">
                        <div class="box_imahe_a-general">
                            <div class="iconn">
                                <img src="{{asset('public/assets/img/seamless.png')}}" alt="">
                            </div>
                            <div class="contentt">
                                <p>Seamless claims<br> processes</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="car_loansec">

        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12 col-12">
                    <div class="car_loans_img">
                        <img src="{{asset('public/assets/img/Car_loan_sec_img.jpg')}}" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-12 py-3">
                    <div class="car_loans_txt">
                        <h2>Automobile Protection Plan</h2>
                        <p>Safeguard your vehicle with Loan's comprehensive car insurance solutions, meticulously
                            tailored to suit your unique requirements. From fundamental coverage to comprehensive
                            protection, our array of options ensures you receive optimal security. Benefit from
                            competitive rates while maintaining uncompromised quality, maximizing the value of your
                            investment. Our streamlined claims procedure ensures ease of use, with our dedicated team
                            readily available to assist you every step of the way. Customer satisfaction is our utmost
                            priority, and we are committed to delivering exceptional service. Drive with confidence,
                            knowing you're fully shielded against unforeseen mishaps. Reach out to us today to explore
                            our diverse car insurance offerings and ensure your vehicle's safety with Loan.
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="Why_is_it general_why_is mb-5">
        <div class="container">
            <div class="why_it_is_cnt">
                <h4>Why Buying a General Insurance Policy Matters?
                </h4>
                <p class="text-dark">General insurance policies are critical for financial protection, legal
                    compliance,
                    asset safeguarding, health security, peace of mind, and business continuity.
                </p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12 mb-4 ">
                    <div class="why_is_box-general">
                        <img src="{{asset('public/assets/img/financial_protection_img.png')}}" alt="">
                        <h4>Financial Protection</h4>
                        <p class="text-white" id="para1">General insurance shields you against an array of risks,
                            encompassing property damage, liability claims, and medical expenses, ensuring your
                            financial security.
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12 col-sm-12 mb-4">
                    <div class="why_is_box-general">
                        <img src="{{asset('public/assets/img/leagal_compliance_img.png')}}" alt="">
                        <h4>Legal Compliance</h4>
                        <p class="text-white" id="para1">As part of general insurance, health insurance extends
                            coverage
                            for medical expenses arising from illness, injury,
                            or hospitalization, ensuring access to quality healthcare without imposing significant
                            financial burden.



                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12 col-sm-12 mb-4">
                    <div class="why_is_box-general">
                        <img src="{{asset('public/assets/img/health_security_img.png')}}" alt="">
                        <h4>Medical Coverage</h4>
                        <p class="text-white" id="para1">Medical Coverage, a form of general insurance, safeguards
                            against the costs associated with illness, injury, or hospitalization,
                            providing access to superior healthcare services without financial strain.</p>
                    </div>
                </div>
                <div class="row mt-5 btn_main_divs">
                    <div class="col">
                        <button type="button" class="btn btn-primary app_ly" onclick="home_pay_form_fun()">
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
                                                <h3>General Loan</h3>
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
                                                        placeholder="General Insurance" type="text">
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
    </section>



    <section class="happy_family mt-5 mb-5">
        <div class="container">
            <div class="row">

                <div class="col-lg-7 col-md-12 col-sm-12">
                    <div class="happy_family_text mt-4">
                        <h3>Loan Suvidha's General Insurance <span style="color: #e66d12"></span>
                        </h3>
                        <p class="text-dark">At Loan Suvidha, our general insurance portfolio comprises a diverse array
                            of non-life insurance solutions meticulously crafted to shield individuals and assets from
                            unexpected risks. From automobile and homeowner's insurance to marine coverage and beyond,
                            our comprehensive policies offer financial protection to policyholders in the event of
                            specified losses. </p>
                        <p class="text-dark mt-4">With Loan Suvidha, you can trust that your general insurance
                            requirements are catered to with unwavering reliability and expertise, ensuring your
                            protection against a myriad of life's potential threats.
                        </p>
                    </div>
                </div>

                <div class="col-lg-5 col-md-12 col-sm-12">
                    <div class="happy_family_img-general text-md-center mt-md-4 mt-lg-0 mt-4">
                        <img src="{{asset('public/assets/img/happy_family_img.jpg')}}" alt="" class="img-fluid">
                    </div>
                </div>



            </div>
        </div>
    </section>


    <section class="helth  beneficial_require">
        <div class="container">
            <div class="helth_benifits_heading">
                <h3>Benefits of Buying General Insurance Online

                </h3>
                <p>Delve into the distinctive advantages of procuring a general insurance policy online, unlocking a
                    realm of benefits. Explore the following
                </p>
            </div>
            <div class="row align-items-center ">

                <div class="col-lg-3 col-md-6 col-12">
                    <div class="helth_benifits clockkkk">
                        <div class="helth_icon">
                            <img src="{{asset('public/assets/img/clock4.png')}}" alt="">
                        </div>
                        <div class="work_box_cnt">
                            <h3>Convenience</h3>
                            <p id="para1">Buying general insurance online is hassle-free, allowing easy policy
                                comparison and informed decisions from home.

                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-12">
                    <div class="helth_benifits clockkkk">
                        <div class="helth_icon">
                            <img src="{{asset('public/assets/img/funding6.png')}}" alt="">
                        </div>
                        <div class="work_box_cnt">
                            <h3> Cost-effectiveness</h3>
                            <p id="para1">Online policies often offer lower premiums and discounts, saving money
                                without
                                compromising reliability</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-12">
                    <div class="helth_benifits clockkkk">
                        <div class="helth_icon">
                            <img src="{{asset('public/assets/img/health-insurance8.png')}}" alt="">
                        </div>
                        <div class="work_box_cnt">
                            <h3>Easy Access</h3>
                            <p id="para1">Platforms like Loan provide a wide range of general insurance plans at
                                your
                                fingertips.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-12">
                    <div class="helth_benifits clockkkk">
                        <div class="helth_icon">
                            <img src="{{asset('public/assets/img/calendar2.png')}}" alt="">
                        </div>
                        <div class="work_box_cnt">
                            <h3>Quick Processing</h3>
                            <p id="para1">Online applications are swiftly processed, ensuring immediate coverage.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-12">
                    <div class="helth_benifits clockkkk">
                        <div class="helth_icon">
                            <img src="{{asset('public/assets/img/data-recovery5.png')}}" alt="">
                        </div>
                        <div class="work_box_cnt">
                            <h3>Transparent Information</h3>
                            <p id="para1">Detailed policy features and terms are readily available online, enabling
                                informed choices.</p>
                        </div>
                    </div>

                </div>

                <div class="col-lg-3 col-md-6 col-12">
                    <div class="helth_benifits clockkkk">
                        <div class="helth_icon">
                            <img src="{{asset('public/assets/img/claim3.png')}}" alt="">
                        </div>
                        <div class="work_box_cnt">
                            <h3>Flexible Options</h3>
                            <p id="para1">Online plans offer flexibility in coverage, premiums, and payment
                                methods.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-12">
                    <div class="helth_benifits clockkkk">
                        <div class="helth_icon">
                            <img src="{{asset('public/assets/img/warning13.png')}}" alt="">
                        </div>
                        <div class="work_box_cnt">
                            <h3>Expert Assistance</h3>
                            <p id="para1">Platforms like Loan offer guidance throughout the purchasing process.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-12">
                    <div class="helth_benifits clockkkk">
                        <div class="helth_icon">
                            <img src="{{asset('public/assets/img/health-insurance8.png')}}" alt="">
                        </div>
                        <div class="work_box_cnt">
                            <h3>Secure Transactions</h3>
                            <p id="para1">Online transactions are encrypted, safeguarding personal and financial
                                data.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="car_loansec">

        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12 col-12">
                    <div class="car_loans_txt vehicle_insurance_loan">
                        <h2>Vehicle Protection with Loan</h2>
                        <p>Secure your vehicles with our trusted insurance solutions. Whether it's your personal car or
                            a commercial fleet, we've got you covered against all risks. From basic to specialized
                            plans, choose the coverage that suits you best, all at competitive rates without
                            compromising quality. Our seamless claim process and expert advisors ensure stress-free
                            insurance for your vehicles. At Loan, customer satisfaction is our priority, and we're
                            committed to delivering exceptional service every step of the way. Drive with confidence
                            knowing your vehicles are fully shielded against the unexpected. Contact us today to explore
                            our unique vehicle insurance options and enjoy peace of mind on the road with Loan.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-12">
                    <div class="car_loans_img mt-lg-0 mt-md-0 mt-4">
                        <img src="{{asset('public/assets/img/vehicle_loan_s.jpg')}}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>

    </section>


    <section class="benefits_buying_insur  buting_colll">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="benefits_buying_insur_main">
                        <h2>
                            Advantages of General Insurance Plans in India

                        </h2>
                        <p class="text-dark">
                            Purchasing a general insurance policy online offers numerous benefits. Here are some

                        </p>
                    </div>
                    <div class="benefits_buying_insur_online">
                        <ul>
                            <li>
                                <b>Financial Protection – </b>Knowing you're financially covered allows you to face
                                uncertainties with a calmer mind. You can focus on recovery or repairs without worrying
                                about the immediate costs.

                            </li>
                            <li>
                                <b>Hospitalization Expenses –
                                </b>Health insurance, a type of general insurance, protects you from hefty medical bills
                                in case of hospitalization due to illness or accidents.

                            </li>
                            <li>
                                <b>Property Damage– </b> Home insurance and other property insurance plans shield you
                                from financial losses caused by natural disasters, fire, theft, or other unforeseen
                                events.


                            </li>
                            <li>
                                <b>Vehicle Coverage –
                                </b>Motor insurance safeguards you against financial liabilities arising from accidents,
                                theft, or damage to your vehicle.


                            </li>
                            <li>
                                <b>Cashless Treatment – </b>Many general insurance policies, particularly health
                                insurance, offer cashless hospitalization facilities at network hospitals. This
                                eliminates the need for upfront payments.

                            </li>
                            <li>
                                <b>Tax Benefits –
                                </b>Premiums paid for most general insurance plans are eligible for tax deductions under
                                Income Tax Act provisions in India.


                            </li>
                            <li>
                                <b>Affordable Premiums– </b> A variety of general insurance plans are available at
                                competitive premiums to suit your budget and specific needs.

                            </li>
                            <li>
                                <b>Wider Coverage Options– </b>General insurance offers a wide range of plans to cover
                                various aspects of your life, from health and vehicles to homes and travel.


                            </li>
                        </ul>
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
                        <p class="card-text">“My experience with Loan Suvidha for general insurance was
                            positive. Their team provided clear explanations and efficient service throughout
                            the process. I would recommend Loan Suvidha to others seeking general insurance
                            solutions. For:(Car insurance)” <strong>From: </strong> Pune(Maharashtra)
                        </p>
                        <div class="mainlx_sl">
                            <div class="main_under_slicky">
                                <img src="{{asset('public/assets/img/general_insur_testimonial_img3.jpg')}}" alt="">
                                <div class="neetu_texture">
                                    <h5 class="card-title fw-bold">Mr. Dinesh</h5>
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
                        <p class="card-text">"Loan Suvidha offered reliable support for my general insurance
                            needs. Their professionalism and clear communication made the process
                            straightforward and hassle-free. I appreciate their assistance and would consider
                            them for future insurance needs. For(Bike Insurance)" <strong>From: </strong>Nanded
                            (Maharashtra)
                        </p>
                        <div class="mainlx_sl">
                            <div class="main_under_slicky">
                                <img src="{{asset('public/assets/img/general_insur_testimonial_img2.jpg')}}" alt="">
                                <div class="neetu_texture">
                                    <h5 class="card-title fw-bold">Mr. Altaf Shaikh</h5>
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
                        <p class="card-text">"Choosing Loan Suvidha for my general insurance was a good
                            decision. Their team provided prompt responses and guided me through each step of
                            the process. I would recommend Loan Suvidha to anyone in need of general insurance
                            coverage."
                        </p>
                        <div class="mainlx_sl">
                            <div class="main_under_slicky">
                                <img src="{{asset('public/assets/img/general_insur_testimonial_img1.png')}}" alt="">
                                <div class="neetu_texture">
                                    <h5 class="card-title fw-bold">Komal Devi</h5>
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
    <!-- =========testimonial==end========== -->

    <!-- ===faq==section_start= -->
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
                                    Why Should I Secure My Vehicles with Loan Suvidha's Insurance Solutions?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse " aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Loan Suvidha offers trusted insurance solutions to secure your vehicles, whether
                                        personal or commercial, against all risks. From basic to specialized plans, we
                                        provide coverage at competitive rates without compromising quality. Our seamless
                                        claim process and expert advisors ensure stress-free insurance for your vehicles.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    How Does General Insurance Provide Financial Protection?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>General insurance offers financial protection by covering expenses related to
                                        hospitalization, property damage, vehicle repairs, and other unforeseen events. It
                                        allows individuals to face uncertainties with a calmer mind, focusing on recovery or
                                        repairs without worrying about immediate costs.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    What are Some Common Types of General Insurance Plans in India?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Common types of general insurance plans in India include health insurance, which
                                        covers hospitalization expenses, property insurance for home and belongings, motor
                                        insurance for vehicles, and various other plans for travel, liability, and more.</p>
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
                                    What is General Insurance and Why is it Important?
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>General insurance provides financial protection against a range of risks such as
                                        property damage, liability claims, medical expenses, and more. It is essential
                                        for safeguarding assets, ensuring financial security, legal compliance, health
                                        coverage, peace of mind, and business continuity.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                    aria-controls="flush-collapseTwo">
                                    What Does Loan Suvidha's General Insurance Cover?
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>Loan Suvidha's general insurance portfolio includes a diverse array of non-life
                                        insurance solutions tailored to shield individuals and assets from unexpected risks.
                                        From automobile and homeowner's insurance to marine coverage and beyond, our
                                        comprehensive policies offer financial protection in the event of specified losses.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseThree" aria-expanded="false"
                                    aria-controls="flush-collapseThree">
                                    What are the Benefits of Buying General Insurance Online?
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>Buying general insurance online offers several advantages, including convenience,
                                        cost-effectiveness, easy access to a wide range of plans, quick processing,
                                        transparent information, flexible options, expert assistance, and secure
                                        transactions.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="general_table_sec">
        <div class="container">
            <div class="diff_life_general_insur">
                <h4>Difference between Life Insurance and General Insurance</h4>
            </div>
            <div class="row ">
                <div class="col-lg-12">
                    <div class="" style="overflow-x:auto;">
                        <table class="life_general_insurance_tb" style="width:100%">
                            <tr class="life_general_insurance_th">
                                <th></th>
                                <th>General Insurance</th>
                                <th>Life Insurance</th>
                            </tr>
                            <tr class="life_general_insurance_th">
                                <td>Claim Process</td>
                                <td>Consider Mr. A, who obtained a life insurance policy worth Rs. 1 Crore with an
                                    annual premium of Rs. 20,000 for 50 years. Tragically, Mr. A passed away in a road
                                    accident after approximately 10 installments. His family received the entire sum
                                    assured of Rs. 1 Crore. Therefore, in life insurance, reimbursements occur either
                                    upon death or maturity.</td>
                                <td>Now, Mr. A also secured a Fire Insurance plan for his business, with a sum insured
                                    of Rs. 1 Crore and an annual premium of Rs. 10 lakhs. In the event of fire damage,
                                    the insurance provider will settle the claim amount after considering any applicable
                                    deductibles.</td>
                            </tr>
                            <tr class="life_general_insurance_th">
                                <td>Policy Duration</td>
                                <td>Rajat invested in an endowment plan that offers returns upon maturity or provides
                                    financial support to his family in case of his demise. A life insurance policy
                                    typically extends throughout the policyholder's lifetime or until maturity.</td>
                                <td>On the other hand, Rajat opted for a comprehensive car insurance policy for his
                                    vehicle, valid from March 2, 2019, to March 1, 2020. General insurance policies are
                                    typically purchased for a one-year term.
                                </td>
                            </tr>
                            <tr class="life_general_insurance_th">
                                <td>Reimbursement Process</td>
                                <td>Priti opted for a life insurance plan worth Rs. 50 lakhs, with a premium payment
                                    period of ten years. Upon completing these ten years, she received the entire sum
                                    assured of Rs. 50 lakhs. In essence, a life insurance plan functions as an
                                    investment that pays out upon maturity.</td>
                                <td>In contrast, Proto insured her car for Rs. 5 lakhs. When her car sustained damage in
                                    an accident, incurring a repair cost of Rs. 15,000 for the bumper, the insurance
                                    provider reimbursed her after deducting any applicable deductibles. General
                                    insurance policies operate within the defined limits and conditions specified in the
                                    policy.</td>
                            </tr>
                            <tr class="life_general_insurance_th">
                                <td>Insurable Interest</td>
                                <td>Pankaj secured a term insurance policy, requiring his presence at the time of
                                    contract. In life insurance, the policyholder with the insurable interest must be
                                    present during the contract.</td>
                                <td>Pankaj has insured his car with a car insurance policy. Pankaj sold his car to Ruchi
                                    after one year. Ruchi renewed the car insurance policy as the vehicle remained in
                                    use. However, this time, the policy was renewed by Ruchi, not Pankaj. In general
                                    insurance policies, the insurable interest of the insured party must be present at
                                    the time of renewal.</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===faq==end= -->

    <section id="marquee" class="life_insur_marque">
        <div class="container">
            <div class="pic-container">
                <div class="pic">
                    <img src="{{asset('public/assets/img/health_insur_m_img1.png')}}" alt="img">
                </div>
                <div class="pic">
                    <img src="{{asset('public/assets/img/health_insur_m_img2.jpg')}}" alt="img">
                </div>
                <div class="pic">
                    <img src="{{asset('public/assets/img/health_insur_m_img3.jpg')}}" alt="img">
                </div>
                <div class="pic">
                    <img src="{{asset('public/assets/img/health_insur_m_img4.png')}}" alt="img">
                </div>
                <div class="pic">
                    <img src="{{asset('public/assets/img/health_insur_m_img5.jpg')}}" alt="img">
                </div>
                <div class="pic">
                    <img src="{{asset('public/assets/img/health_insur_m_img6.png')}}" alt="img">
                </div>
                <div class="pic">
                    <img src="{{asset('public/assets/img/health_insur_m_img7.gif')}}" alt="img">
                </div>
                <div class="pic">
                    <img src="{{asset('public/assets/img/health_insur_m_img1.png')}}" alt="img">
                </div>
                <div class="pic">
                    <img src="{{asset('public/assets/img/health_insur_m_img2.jpg')}}" alt="img">
                </div>
                <div class="pic">
                    <img src="{{asset('public/assets/img/health_insur_m_img3.jpg')}}" alt="img">
                </div>
                <div class="pic">
                    <img src="{{asset('public/assets/img/health_insur_m_img4.png')}}" alt="img">
                </div>
                <div class="pic">
                    <img src="{{asset('public/assets/img/health_insur_m_img5.jpg')}}" alt="img">
                </div>
                <div class="pic">
                    <img src="{{asset('public/assets/img/health_insur_m_img6.png')}}" alt="img">
                </div>
                <div class="pic">
                    <img src="{{asset('public/assets/img/health_insur_m_img7.gif')}}" alt="img">
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