@extends('layouts.app')

@if(!empty($metaTitle->value))
@section("title", $metaTitle->value)
@else
@section("title", "Life Insurance")
@endif

@if(!empty($metaDesc->value))
@section("description", $metaDesc->value)
@else
@section("description", "Life Insurance desc")
@endif

@if(!empty($metaKey->value))
@section("keywords", $metaKey->value)
@else
@section("keywords", "Life-Insurance, key")
@endif
@section('links')
<link rel="canonical" href="https://loansuvidhaa.com/life-insurance" />
@endsection

@section('content')
<!-- Header end-->
 <style>
    span.plan_invest {
    text-shadow: 1px 1px #ffffff;
}

p.bottom_title_aheadd {
    color: #fff;
    font-size: 20px;
    text-align: center;
    margin-bottom: 40px;
}
h2.choosing_viaaa {
    margin-bottom: 10px;
}
 </style>
<section class="life_Insurance">
    <div class="container">
        <div class="row justify-content-between gx-0">
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="row">
                    <div class="life_main_heading">
                        <h1>Life Insurance With <span style="color:#e66d12;" class="plan_invest">Loan Suvidha</span></h1>
                        <div class="life_term_li">
                            <img src="{{asset('public/assets/img/umbrella_img.png')}}" alt="">
                            <ul>
                                <li>
                                    <h2>Wealth Creation With Life Cover</h2>
                                </li>

                                <li>
                                    <p>Secure financial stability with Loan Suvidha's Investment Plan, enabling you to
                                        achieve your long-term objectives while providing for your family's future
                                        security.
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 py-3">
                        <div class="life_main_heading">
                            <div class="life_term_li">
                                <img src="{{asset('public/assets/img/lic_logoo.png')}}" alt="">
                                <ul>
                                    <li>
                                        <h2> LIC Life Insurance </h2>
                                    </li>

                                    <li>
                                        <p>Explore the diverse array of LIC Life Insurance plans designed to offer
                                            comprehensive coverage and customized financial security tailored precisely
                                            to meet your requirements.</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-12 col-12 main_col mt-md-3">
                <div class="title_2 loan_Assi_h2">
                    <h2>Get Life Insurance</h2>
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
                                <option selected value="2">Life Insurance</option>
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
<!-- / BANNER HTML / -->
<!-- Insurance_box html -->
<section class="Insurance_box">
    <div class="container">
        <div class="bg_ox">
            <div class="row">
                <div class="col-lg-2 col-md-4 col-12">
                    <div class="box_imahe_a">
                        <div class="iconn">
                            <img src="{{asset('public/assets/img/termsplanimg1.png')}}" alt="">
                        </div>
                        <div class="contentt">
                            <p>Saving <br> Plans</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-12">
                    <div class="box_imahe_a">
                        <div class="iconn">
                            <img src="{{asset('public/assets/img/termsplanimg2.png')}}" alt="">
                        </div>
                        <div class="contentt">
                            <p>Pension <br> Plans</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-12">
                    <div class="box_imahe_a">
                        <div class="iconn">
                            <img src="{{asset('public/assets/img/termsplanimg3.png')}}" alt="">
                        </div>
                        <div class="contentt">
                            <p>Guranted Income <br> Plans</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-12">
                    <div class="box_imahe_a">
                        <div class="iconn">
                            <img src="{{asset('public/assets/img/termsplanimg4.png')}}" alt="">
                        </div>
                        <div class="contentt">
                            <p>Return of Premium <br> Term Plans</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-12">
                    <div class="box_imahe_a">
                        <div class="iconn">
                            <img src="{{asset('public/assets/img/termsplanimg5.png')}}" alt="">
                        </div>
                        <div class="contentt">
                            <p>Investment <br> Plans</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-12">
                    <div class="box_imahe_a">
                        <div class="iconn">
                            <img src="{{asset('public/assets/img/termsplanimg6.png')}}" alt="">
                        </div>
                        <div class="contentt">
                            <p>Children <br> Plans</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Insurance_box html-->
<section class="vehicle_choose life_choose_india">
    <div class="choose_rup_india_bg py-lg-5 py-md-4 py-4">
        <h2 class="section-heading text-center">
            <strong>Type of Life Insurance Policies in India</strong><br>
        </h2>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="choose_rup_india">
                        <div class="choose_rup_ind_box">
                            <h3>Term Insurance</h3>
                            <p>Term insurance stands out as the most straightforward and cost-effective life coverage
                                solution available. It provides financial protection to the insured for a specified
                                period against a fixed premium amount. In the event of the policyholder's premature
                                demise, the chosen beneficiary receives the predetermined sum assured.</p>
                        </div>
                        <div class="choose_rup_ind_box">
                            <h3>Term Return of Premium (TROP)</h3>
                            <p>TROP, a variation of term insurance, goes beyond mere life coverage by incorporating a
                                survival benefit feature. If the policyholder outlives the policy term, all premiums
                                paid are refunded, except for GST charges.</p>
                        </div>
                        <div class="choose_rup_ind_box">
                            <h3>Whole life Insurance</h3>
                            <p>Whole life insurance guarantees coverage until the age of 100, ensuring a lasting
                                financial safety net for your loved ones. Opting for a whole life term insurance plan is
                                ideal if you wish to leave behind a legacy and ensure ongoing financial security for
                                your family.</p>
                        </div>
                        <div class="choose_rup_ind_box">
                            <h3>Market Linked Systematic Investment Plan (ULIP)</h3>
                            <p>ULIPs represent a distinctive blend of market-linked investment opportunities and life
                                insurance coverage. These plans offer the dual advantage of wealth accumulation through
                                investments in equity, debt, or a combination thereof, along with life coverage.
                                High-performing ULIPs have demonstrated tax-free returns of 15-20%, making them a
                                preferred choice for medium to long-term investors.</p>
                        </div>
                        <div class="choose_rup_ind_box">
                            <h3>Guaranteed Return Plan (Endowment Policy)</h3>
                            <p>Endowment policies, also known as guaranteed return plans, serve as a combination of
                                savings and insurance benefits. They enable systematic saving and provide maturity
                                benefits upon survival of the policy term. Additionally, these plans offer death
                                benefits in the unfortunate event of the policyholder's demise during the policy term.
                            </p>
                        </div>
                        <div class="choose_rup_ind_box">
                            <h3>Retirement Plans</h3>
                            <p>Retirement plans offer a strategic approach to securing a stable income post-retirement.
                                Through regular premium payments over an extended period, these plans accumulate and
                                grow, ensuring financial stability during retirement. Upon reaching retirement age, the
                                accumulated corpus can be availed either as a lump sum or as regular income, depending
                                on the individual's preference.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- how_does html -->
<section class="how_does">
    <div class="container">
        <div class="title_main_ahead">
            <h2 class="choosing_viaaa">Why To Choose Life Insurance via Loan Suvidha? </h2>
            <p class="bottom_title_aheadd"><a href="{{url('/')}}">Loan Suvidha</a> (Loan Suvidhaa) provides expert guidance for Life Insurance from all govt. or private firms. If you are looking for max life insurance we provide a <a href="{{url('life-insurance')}}">max life insurance agent</a> to you. Don't worry, Loan Suvidha is the <a href="{{url('life-insurance')}}">No.1 Life Insurance Company in India</a> from the <a href="{{url('life-insurance')}}">Top 10 Life Insurance Companies in India</a>.  Choose your life insurance via Loan Suvidha now!</p>
        </div>
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="main_how_does">
                    <div class="img_does">
                        <img class="img-fluid" src="{{asset('public/assets/img/heart_health_main.svg')}}" alt="">
                    </div>
                    <div class="main_content_does">
                        <h2>Buy Life Insurance</h2>
                        <p>Purchase life insurance with confidence by comparing and selecting the optimal plan that
                            perfectly aligns with your needs.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="main_how_does">
                    <div class="img_does">
                        <img class="img-fluid" src="{{asset('public/assets/img/phone_earing.png')}}" alt="">
                    </div>
                    <div class="main_content_does">
                        <h2>Pay the Premiums</h2>
                        <p>Ensure the continuity of your plan by consistently paying your premiums on time.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="main_how_does">
                    <div class="img_does">
                        <img class="img-fluid" src="{{asset('public/assets/img/moneyy.svg')}}" alt="">
                    </div>
                    <div class="main_content_does">
                        <h2>Enjoy Coverage</h2>
                        <p>Provide your loved ones with financial security and peace of mind</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="main_how_does">
                    <div class="img_does">
                        <img class="img-fluid" src="{{asset('public/assets/img/notification_n.png')}}" alt="">
                    </div>
                    <div class="main_content_does">
                        <h2>Receive Benefits</h2>
                        <p>Experience the perks of our policy with maturity and survival benefits, subject to terms and
                            conditions.</p>
                    </div>
                </div>
            </div>
           
        </div>
    </div>
</section>
<!-- how_does html -->
<!-- benefits_buying_insur -->
<section class="benefits_buying_insur">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <div class="benefits_buying_insur_main">
                    <h2>
                        Benefits of Buying Life Insurance Plans
                    </h2>
                    <p>
                        Discover the benefits of purchasing a life insurance policy below
                    </p>
                </div>
                <div class="benefits_buying_insur_online">
                    <ul>
                        <li>
                            <b>Marriage Plan - </b>Ensure the well-being of both partners and provide financial security
                            for pregnancy and childbirth with comprehensive life insurance coverage.
                        </li>
                        <li>
                            <b>Retirement Plan - </b>Secure long-term financial stability and peace of mind with
                            tailored life insurance coverage designed for retirees, ensuring continued health care
                            support.
                        </li>
                        <li>
                            <b>Protection - </b>Life insurance acts as a safety net for your family. In the event of
                            your passing, they receive a lump sum from the insurance company, offering financial
                            security during difficult times.
                        </li>
                        <li>
                            <b>Helps You Save - </b> Life insurance facilitates easy and systematic savings. You can pay
                            your premiums monthly, quarterly, or yearly without hassle, contributing to your financial
                            future.
                        </li>
                        <li>
                            <b>Liquidity - </b>Life insurance can serve as a valuable asset for future financial needs.
                            You can leverage your policy as collateral for loans, providing liquidity when required.
                        </li>
                        <li>
                            <b>Tax Benefits - </b>Life insurance offers potential tax advantages, potentially reducing
                            your tax burden and enhancing your financial planning strategies.
                        </li>
                        <li>
                            <b>Easy Comparison – </b>Online platforms like Policybazaar.com simplify the process of
                            comparing different life insurance plans from various insurers, empowering you to make
                            informed decisions.
                        </li>
                        <li>
                            <b>Convenience – </b>Purchasing life insurance online eliminates the need to visit insurance
                            company branches or schedule appointments with agents, offering greater convenience and
                            flexibility.
                        </li>
                        <li>
                            <b>Online Discounts – </b>Buying insurance online often entitles you to discounts on
                            premiums, providing cost-saving opportunities.
                        </li>
                        <li>
                            <b>Lower Premiums – </b> Online health insurance plans typically come with lower premiums as
                            insurers save on operational costs, translating to more affordable coverage options.
                        </li>
                        <li>
                            <b>Minimal Paperwork – </b>The online process for purchasing life insurance involves minimal
                            to no paperwork, streamlining the application process for greater efficiency.
                        </li>
                        <li>
                            <b>24x7 Availability – </b>Life insurance policies are accessible online 24/7, even on
                            public holidays, offering unparalleled convenience compared to traditional offline methods.
                        </li>
                        <li>
                            <b>Digital Payment Options – </b>Online purchasing allows for secure digital payment
                            methods, eliminating the need for cash transactions and ensuring safer premium payments
                        </li>
                        <li>
                            <b>Time-saving – </b>Online life insurance purchases are swift, with policies issued within
                            minutes, saving you valuable time and providing immediate coverage.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- benefits_buying_insur -->
<section class="importent_term">
    <div class="container">
        <div class="title_main_ahead">
            <h2>Important Terms Life Insurance</h2>
        </div>
        <div class="row">
            <!-- <div class="col-lg-12 col-md-12 col-sm-12">
                <img src="./img/important-term-about-life-insurance-full.avif" alt="" class="img-fluid ">
                </div> -->
            <div class="col-lg-3 col-md-4 mb-4">
                <div class="col-ab">
                    <div class="col-imgg">
                        <img class="img-fluid" src="{{asset('public/assets/img/holder.svg')}}" alt="">
                    </div>
                    <div class="col-textt">
                        <h3>Policyholder</h3>
                        <p>The policyholder is the person who buys and pays for the insurance policy.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 mb-4">
                <div class="col-ab">
                    <div class="col-imgg">
                        <img class="img-fluid" src="{{asset('public/assets/img/assured.svg')}}" alt="">
                    </div>
                    <div class="col-textt">
                        <h3>Life Assured</h3>
                        <p>The life assured is the individual who is covered by the insurance policy.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 mb-4">
                <div class="col-ab">
                    <div class="col-imgg">
                        <img class="img-fluid" src="{{asset('public/assets/img/premimus.svg')}}" alt="">
                    </div>
                    <div class="col-textt">
                        <h3>Premiums</h3>
                        <p>Premiums are the payments made by the policyholder to the insurance company in exchange for
                            the life cover provided by the policy.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 mb-4 ">
                <div class="col-ab">
                    <div class="col-imgg">
                        <img class="img-fluid" src="{{asset('public/assets/img/docor_u.png')}}" alt="">
                    </div>
                    <div class="col-textt">
                        <h3>Riders</h3>
                        <p>Riders are extra benefits that can be added to a policy for a small fee.</p>
                    </div>
                </div>
            </div>
      
        
            <div class="col-lg-3 col-md-4 mb-4">
                <div class="col-ab">
                    <div class="col-imgg">
                        <img class="img-fluid" src="{{asset('public/assets/img/nomineee_.png')}}" alt="">
                    </div>
                    <div class="col-textt">
                        <h3>Nominee</h3>
                        <p>The nominee is the individual designated by the policyholder to receive the benefit amount in
                            the event of the policyholder's demise.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 mb-4 ">
                <div class="col-ab">
                    <div class="col-imgg">
                        <img class="img-fluid" src="{{asset('public/assets/img/policy_term.svg')}}" alt="">
                    </div>
                    <div class="col-textt">
                        <h3>Policy Term</h3>
                        <p>Tenure for which the policy offers cover and benefits</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 mb-4">
                <div class="col-ab">
                    <div class="col-imgg">
                        <img class="img-fluid" src="{{asset('public/assets/img/maturity_money.svg')}}" alt="">
                    </div>
                    <div class="col-textt">
                        <h3>Maturity Benefit</h3>
                        <p>Maturity Benefit is the amount paid by the insurer upon the policyholder outliving the policy
                            term.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 mb-4">
                <div class="col-ab">
                    <div class="col-imgg">
                        <img class="img-fluid" src="{{asset('public/assets/img/RIP_.png')}}" alt="">
                    </div>
                    <div class="col-textt">
                        <h3>Death Benefit</h3>
                        <p>
                            Death Benefit is the sum paid by the insurer to the nominee or beneficiary upon the death of
                            the policyholder.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Why_is_it html -->
<section class="Why_is_it">
    <div class="container">
        <div class="why_it_is_cnt">
            <h4>What Makes Life Insurance Essential?</h4>
            <p>Life insurance offers financial security and reassurance for both you and your loved ones. Below are key
                reasons highlighting the importance of investing in a life insurance policy</p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-12 col-12 mb-4 ">
                <div class="why_is_box">
                    <img src="{{asset('public/assets/img/Debt-Repayment.png')}}" alt="">
                    <h4>Financial Stability</h4>
                    <p>Life insurance offers a safety cushion for your family and dependents, guaranteeing financial
                        support in case of your demise. It encompasses living expenses, mortgage payments, education
                        fees, and other financial commitments, providing reassurance during challenging circumstances.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-12 mb-4">
                <div class="why_is_box">
                    <img src="{{asset('public/assets/img/Income-Replacement.png')}}" alt="">
                    <h4>Debt Settlement</h4>
                    <p>Life insurance can aid in clearing off existing debts like mortgages, loans, or credit card
                        balances, sparing your loved ones from shouldering financial responsibilities. This safeguards
                        your family's financial equilibrium, alleviating additional strain during difficult times.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-12 mb-4">
                <div class="why_is_box">
                    <img src="{{asset('public/assets/img/income-substitution1.png')}}" alt="" class="img-fluid">
                    <h4>Income Substitution</h4>
                    <p>As the primary provider in your family, life insurance can step in to substitute lost income,
                        enabling your loved ones to sustain their lifestyle and fulfill ongoing financial requirements.
                        It serves as a vital financial lifeline, guaranteeing that your family can persevere and
                        flourish in your absence.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ======testimonial---start============= -->
<section class="testimonial_Sec_slicky pt-0">
    <div class="container">
        <div class="title_testimonial">
            <h2>Testimonial</h2>
        </div>
        <div class="slick-slider mt-5">
            <div class="slick_home_testimonial">
                <div class="cntnrt_slicky">
                    <p class="card-text">“Loan Suvidha provided helpful assistance for my life insurance needs.
                        Their team offered clear explanations and guidance, making the process easy to
                        understand. I would recommend Loan Suvidha to others seeking life insurance solutions.
                        For:(Term plan)” <strong>From: </strong>Aurangabad (Maharashtra)
                    </p>
                    <div class="mainlx_sl">
                        <div class="main_under_slicky">
                            <img src="{{asset('public/assets/img/life_insur_testimonial_img.jpg')}}" alt="">
                            <div class="neetu_texture">
                                <h5 class="card-title fw-bold">Mr. Sunil Waghmare</h5>
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
                    <p class="card-text">"I had a positive experience with Loan Suvidha when exploring life
                        insurance options. Their team was responsive and professional, addressing all my queries
                        efficiently. I appreciate their support and would consider them for future insurance
                        needs. For:(Retirement plan with LIC jeevan Ustav plan)" <strong>From:
                        </strong>Ahmednagar (Maharashtra)
                    </p>
                    <div class="mainlx_sl">
                        <div class="main_under_slicky">
                            <img src="{{asset('public/assets/img/life_insur_testimonial_img2.jpg')}}" alt="">
                            <div class="neetu_texture">
                                <h5 class="card-title fw-bold">Mr. Balaji Jadhav </h5>
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
                    <p class="card-text">"Loan Suvidha proved to be a reliable choice for my life insurance
                        requirements. Their knowledgeable staff provided personalized advice and made the
                        application process seamless. I would recommend Loan Suvidha to anyone looking for
                        trustworthy life insurance services."
                    </p>
                    <div class="mainlx_sl">
                        <div class="main_under_slicky">
                            <img src="{{asset('public/assets/img/life_insur_testimonial_img3.jpg')}}" alt="">
                            <div class="neetu_texture">
                                <h5 class="card-title fw-bold">Neeraj purwal</h5>
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

<!-- ======testimonial---end============= -->
<!-- =======faq_Sec_main start -->
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
                                What are the benefits of purchasing a guaranteed return plan (endowment policy)?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse " aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>Endowment policies provide a combination of savings and insurance benefits, offering
                                    maturity benefits upon survival of the policy term and death benefits in case of the
                                    policyholder's demise. They serve as a secure way to systematically save and ensure
                                    financial stability.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                How can life insurance help in wealth creation and financial stability?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>Life insurance acts as a safety net for your family, providing financial stability in
                                    case of your demise. It helps settle debts, substitutes lost income, and ensures
                                    continuity of living expenses, mortgage payments, and education fees, offering
                                    reassurance during challenging times.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                What are the important terms to understand in a life insurance policy?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>Understanding terms like policyholder, life assured, premiums, riders, nominee,
                                    policy
                                    term, maturity benefit, and death benefit is essential for making informed decisions
                                    when purchasing a life insurance policy. These terms dictate the coverage and
                                    benefits
                                    provided by the policy.</p>
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
                                What types of life insurance plans does Loan Suvidha offer?
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p>Loan Suvidha provides a variety of life insurance plans, including saving plans,
                                    pension plans, guaranteed income plans, return of premium term plans, investment
                                    plans, and children plans, ensuring comprehensive coverage tailored to different
                                    financial needs.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                aria-controls="flush-collapseTwo">
                                How does term insurance differ from whole life insurance?
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p>Term insurance provides coverage for a specified period, while whole life insurance
                                    guarantees coverage until the age of 100, offering a lasting financial safety net
                                    for
                                    your loved ones. Understanding these differences can help you choose the right plan
                                    for
                                    your needs.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseThree" aria-expanded="false"
                                aria-controls="flush-collapseThree">
                                What are ULIPs, and how do they work?
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p>ULIPs, or Unit Linked Insurance Plans, combine market-linked investment opportunities
                                    with life insurance coverage. These plans offer the dual advantage of wealth
                                    accumulation through investments and life coverage, making them suitable for medium
                                    to
                                    long-term investors.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>
<!-- =======faq_Sec_main end -->
<section id="marquee" class="life_insur_marque life_insurance_mrq">
    <div class="container">
        <div class="pic-container">
            <div class="pic">
                <img src="{{asset('public/assets/img/life_insurance_m_logo1.png')}}" alt="img">
            </div>
            <div class="pic">
                <img src="{{asset('public/assets/img/life_insurance_m_logo2.png')}}" alt="img">
            </div>
            <div class="pic">
                <img src="{{asset('public/assets/img/life_insurance_m_logo3.png')}}" alt="img">
            </div>
            <div class="pic">
                <img src="{{asset('public/assets/img/life_insurance_m_logo4.png')}}" alt="img">
            </div>
            <div class="pic">
                <img src="{{asset('public/assets/img/life_insurance_m_logo5.png')}}" alt="img">
            </div>
            <div class="pic">
                <img src="{{asset('public/assets/img/life_insurance_m_logo1.png')}}" alt="img">
            </div>
            <div class="pic">
                <img src="{{asset('public/assets/img/life_insurance_m_logo2.png')}}" alt="img">
            </div>
            <div class="pic">
                <img src="{{asset('public/assets/img/life_insurance_m_logo3.png')}}" alt="img">
            </div>
            <div class="pic">
                <img src="{{asset('public/assets/img/life_insurance_m_logo4.png')}}" alt="img">
            </div>
            <div class="pic">
                <img src="{{asset('public/assets/img/life_insurance_m_logo5.png')}}" alt="img">
            </div>
        </div>
    </div>
</section>
<!-- footer -->
@endsection
@section('scripts')
<script>
    function calculateInvestment() {

        let monthlyAmount = parseFloat($('#investmentAmount').val()); // Monthly investment amount
        let rateOfReturn = parseFloat($('#rateOfReturn').val()); // Expected rate of return in percentage
        let investYears = parseInt($('#investYears').val()); // Years to invest initially
        let stayInvestedYears = parseInt($('#stayInvestedYears').val()); // Total years to stay invested


        rateOfReturn /= 100;

        let totalInvestment = monthlyAmount * 12 * investYears;


        let futureValue = totalInvestment * Math.pow(1 + rateOfReturn, stayInvestedYears - investYears);

        $('#totalInvestment').text("₹" + (totalInvestment / 100000).toFixed(2) + " L");
        $('#investYearsResult').text(investYears + " Years");
        $('#futureValue').text("₹" + (futureValue / 100000).toFixed(2) + " L");
        $('#stayInvestedYearsResult').text(stayInvestedYears + " Years");
    }
</script>


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