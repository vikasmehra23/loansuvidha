@extends('layouts.app')

@if(!empty($metaTitle->value))
@section("title", $metaTitle->value)
@else
@section("title", "Loan Suvidhaa | SIP Investing")
@endif

@if(!empty($metaDesc->value))
@section("description", $metaDesc->value)
@else
@section("description", "SIP, Systematic Investment Plan")
@endif

@if(!empty($metaKey->value))
@section("keywords", $metaKey->value)
@else
@section("keywords", "SIP, Investment, Financial")
@endif
@section('links')
<link rel="canonical" href="https://loansuvidhaa.com/sip" />
@endsection

@section('content')
<section class="plan_in_india loan_suvidha_sip">

    <div class="container">

        <div class="row justify-content-between gx-0">

            <div class="col-lg-6 col-md-8 col-md-12">
                <div class="plan_india_heading">
                    <h1>
                        SIP Investing: Smart, Simple, Sustainable
                    </h1>

                    <p>Systematic Investment Plan (SIP) facilitates mutual fund investing by allowing fixed
                        contributions at
                        regular intervals. It minimizes the impact of market fluctuations by averaging the rupee cost
                        and taking
                        advantage of the aggregate benefits. Simple and accessible, SIPs take on a disciplined savings
                        character,
                        making them an effective way to accumulate long-term wealth and financial stability. With Loan
                        Suvidha
                        included, investors gain additional support in managing their financial journey.
                    </p>
                </div>
            </div>

            <div class="col-lg-5 col-md-12 col-12 main_col ">

                <div class="title_2 loan_Assi_h2">
                    <h2>To Create Wealth invest in SIP</h2>
                    <p>Fill The Enquiry Form Now</p>
                </div>

                <form action="{{ route('phonePe') }}" method="POST">
                    @csrf
                    <div class="row">

                        <div class="col-md-12">
                            <label></label>
                            <input aria-label="Full name" name="name" class="form-control" placeholder="Full Name"
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
                                <option selected value="7">Sip Investment</option>
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


<section class="cibil_score_main">

    <div class="container">

        <div class="cibi_head">
            <h2>Benefits of SIP</h2>
        </div>

        <div class="row">

            <div class="col-lg-4 col-md-4 col-12 py-2">

                <div class="main_Session">
                    <div class="img_Session">
                        <img src="{{asset('public/assets/img/Rupee_cost_Average.png')}}" alt="" class="img-fluid ">
                    </div>

                    <div class="main_cntnt_g">
                        <h2>Rupee cost Average </h2>
                    </div>
                </div>

            </div>

            <div class="col-lg-4 col-md-4 col-12 py-2">

                <div class="main_Session">
                    <div class="img_Session">
                        <img src="{{asset('public/assets/img/power_compounding.jpg')}}" alt="" class="img-fluid ">
                    </div>

                    <div class="main_cntnt_g">
                        <h2>Power of compounding</h2>
                    </div>
                </div>

            </div>

            <div class="col-lg-4 col-md-4 col-12 py-2">

                <div class="main_Session">
                    <div class="img_Session">
                        <img src="{{asset('public/assets/img/Flexible_investment.png')}}" alt="" class="img-fluid ">
                    </div>

                    <div class="main_cntnt_g">
                        <h2>Flexible investment amount</h2>
                    </div>
                </div>

            </div>

            <div class="col-lg-4 col-md-4 col-12 py-2">

                <div class="main_Session">

                    <div class="img_Session">

                        <img src="{{asset('public/assets/img/Convenient_investment .jpg')}}" alt="" class="img-fluid ">

                    </div>

                    <div class="main_cntnt_g">

                        <h2>Convenient investment amount</h2>

                    </div>

                </div>

            </div>

            <div class="col-lg-4 col-md-4 col-12 py-2">

                <div class="main_Session">

                    <div class="img_Session">

                        <img src="{{asset('public/assets/img/Disciplined_saving.png')}}" alt="" class="img-fluid ">

                    </div>

                    <div class="main_cntnt_g">

                        <h2>Disciplined saving</h2>

                    </div>

                </div>

            </div>

            <div class="col-lg-4 col-md-4 col-12 py-2">

                <div class="main_Session">

                    <div class="img_Session">

                        <img src="{{asset('public/assets/img/Flexible_investment_tenure.png')}}" alt="" class="img-fluid ">

                    </div>

                    <div class="main_cntnt_g">

                        <h2>Flexible investment tenure</h2>

                    </div>

                </div>

            </div>

        </div>

        <div class="main_btn_applys">

            <button type="button" class="sip_na_btn" onclick="home_pay_form_fun()">

                Apply Now

            </button>

            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">

                <div class="modal-dialog">

                    <div class="modal-content">

                        <div class="modal-header">

                            <button type="button" class="btn-close " data-bs-dismiss="modal"
                                aria-label="Close"></button>

                        </div>

                        <div class="modal-body">

                            <div class="col-lg-12 col-md-12 col-12 mt-md-3">

                                <div class="title_2 loan_Assi_h2">

                                    <h3>To Create Wealth invest in SIP</h3>

                                    <p>Fill The Enquiry Form Nows</p>

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

                                    <input aria-label="Last name" class="form-control" maxlength="10"
                                        placeholder="Phone No" type="tel">

                                </div>

                                <div class="row">

                                    <div class="col-md-12">

                                        <label></label>

                                        <input aria-label="Last name" class="form-control" placeholder="Sip Investment"
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

<section class="documents_requireds_health_sec mt-4">

    <div class="container">

        <div class="row align-items-center doc_requ gx-0">

            <div class="col-lg-6 col-md-12 col-12">

                <div class="doc_health_insurance">

                    <div class="documents_requireds">

                        <h4>Documents Required to Open Free Mutual Fund Account for SIP</h4>

                    </div>

                    <ul class="documents_requireds_li">

                        <li>Aadhaar Card</li>

                        <li>Pan Card</li>

                        <li> Cancel cheque or Bank passbook </li>

                        <li> Digital Signature </li>

                        <li> Nominee Pan card or Aadhar Card </li>

                        <li>Email</li>

                        <li> Mobile No</li>

                    </ul>

                </div>

            </div>

            <div class="col-md-6 pt-3">

                <div class="document_submission_img text-center">

                    <img src="{{ asset('public/assets/img/sip_new_doc_img.jpg') }}" alt="" class="img-fluid">

                </div>

            </div>

        </div>

    </div>

</section>

<section class="the_full_form">

    <div class="container">


        <div class="row align-items-center">

            <div class="col-lg-6 col-md-12 col-sm-12 py-2">
                <div class="the_full_form_heading">

                    <h4>How Does SIP work?</h4>

                </div>

                <p>

                    SIP, or Systematic Investment Plan, streamlines the investment process by automatically debiting
                    predetermined
                    amounts from your bank account and investing them in selected mutual funds at regular intervals. At
                    day's end,
                    you receive mutual fund units based on the NAV. Over time, as market rates fluctuate, more units are
                    added to
                    your account, amplifying returns. Investors can choose to receive returns either at the SIP's end or
                    periodically. With Loan Suvidha included, investors gain additional support in managing their
                    financial
                    journey.

                </p>

                <ul>

                    <li>Automatic Debit and Investment: SIP simplifies investing by automating the process of debiting
                        funds from
                        your bank account and investing them in chosen mutual funds regularly.</li>

                    <li>Enhanced Returns Over Time: As market rates fluctuate, SIP accumulates more units over time,
                        potentially
                        amplifying returns due to the principle of rupee cost averaging.</li>

                </ul>

            </div>



            <div class="col-lg-6 col-md-12 col-sm-12 py-2">

                <div class="principle_img_ban">

                    <img src="{{ asset('public/assets/img/trading_sip_mai.jpg') }}" alt="">

                </div>

            </div>

        </div>

    </div>

</section>

<section class="features_of_sip">

    <div class="container">

        <div class="features_off_sip_headind">

            <h4>Unlocking Key Features of SIP Investment Plans with Loan Suvidha</h4>

            <p>Explore the essential characteristics of investing in a Systematic Investment Plan (SIP) in India, along
                with
                the added support of Loan Suvidha. Discover the key features outlined in the table below:</p>

        </div>

        <div class="row">

            <div class="col-lg-12 col-md-12 col-sm-12">

                <table class="table caption-top">

                    <caption>List of users</caption>

                    <thead>

                        <tr>

                            <th scope="col">Features</th>

                            <th scope="col"> Details</th>

                        </tr>

                    </thead>

                    <tbody>

                        <tr>

                            <td>

                                <h5>Portfolio Diversification

                                </h5>

                            </td>

                            <td>

                                <ul>

                                    <li>SIP Plans enable investment in a diversified portfolio including stocks, bonds,
                                        money market
                                        instruments, ETFs, index funds, and other assets. This diversification reduces
                                        overall investment
                                        risk and maximizes long-term returns.</li>

                                </ul>

                            </td>

                        </tr>

                        <tr>

                            <td>

                                <h5>Small Investments</h5>

                            </td>

                            <td>

                                <ul>

                                    <li>Start investing in top SIP plans with as little as Rs. 100 per month.</li>

                                </ul>

                            </td>

                        </tr>

                        <tr>

                            <td>

                                <h5>Top Up Facility</h5>

                            </td>

                            <td>

                                <ul>

                                    <li>

                                        Benefit from top-up payments in SIP plans with additional available funds,
                                        leading to higher
                                        maturity returns in ULIP and mutual fund SIP plans.

                                    </li>

                                </ul>

                            </td>

                        </tr>

                        <tr>

                            <td>

                                <h5>Flexibility</h5>

                            </td>

                            <td>

                                <p>Enjoy flexibility in investment amount, payment frequency, and tenure according to
                                    financial goals
                                    and risk appetite.

                                </p>

                            </td>

                        </tr>

                        <tr>

                            <td>

                                <h5>Rupee Cost Averaging</h5>

                            </td>

                            <td>

                                <ul>

                                    <li>

                                        Buy more units when prices are low and fewer units when prices are high,
                                        averaging out the cost of
                                        purchase and reducing the impact of market volatility.

                                    </li>

                                </ul>

                            </td>

                        </tr>

                        <tr>

                            <td>

                                <h5>Automatic Investment</h5>

                            </td>

                            <td>

                                <ul>

                                    <li>

                                        Automate your investment process by setting up standing instructions with your
                                        bank or mutual fund
                                        company.

                                    </li>

                                </ul>

                            </td>

                        </tr>

                        <tr>

                            <td>

                                <h5>Professional Fund Management</h5>

                            </td>

                            <td>

                                <ul>

                                    <li>

                                        SIP plans are managed by professional fund managers who aim to generate maximum
                                        returns by selecting
                                        and managing stocks and other assets.

                                    </li>

                                </ul>

                            </td>

                        </tr>

                        <tr>

                            <td>

                                <h5>Transparency And Regular Monitoring</h5>

                            </td>

                            <td>

                                <p>Monitor your SIP investments regularly through mutual fund websites, mobile
                                    applications, and receive
                                    regular notifications.

                                </p>

                            </td>

                        </tr>

                        <tr>

                            <td>

                                <h5>Tax Benefits</h5>

                            </td>

                            <td>

                                <ul>

                                    <li>

                                        SIP installments in ULIP funds or ELSS mutual funds qualify for tax deductions
                                        under Section 80C of
                                        the Income Tax Act 1961.

                                    </li>

                                </ul>

                            </td>

                        </tr>

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</section>




<section class="testimonial_Sec_slicky pt-0">
    <div class="container">
        <div class="title_testimonial">
            <h2>Testimonial</h2>
        </div>
        <div class="slick-slider mt-5">
            <div class="slick_home_testimonial">
                <div class="cntnrt_slicky">
                    <p class="card-text">“My experience with Loan Suvidha for SIP was satisfactory. Their team
                        provided clear
                        information and assistance throughout the process. I would recommend Loan Suvidha to
                        others considering
                        SIP investments.”
                    </p>
                    <div class="mainlx_sl">
                        <div class="main_under_slicky">
                            <img src="{{asset('public/assets/img/textmonial-img.jpg')}}" alt="">
                            <div class="neetu_texture">
                                <h5 class="card-title fw-bold">Abhisek Sharma</h5>
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
                    <p class="card-text">"Loan Suvidha offered helpful support for my SIP investment needs.
                        Their team was
                        responsive and professional, addressing all my queries efficiently. I appreciate their
                        guidance and
                        would consider them for future investment opportunities"
                    </p>
                    <div class="mainlx_sl">
                        <div class="main_under_slicky">
                            <img src="{{asset('public/assets/img/text-monial-img-two.jpg')}}" alt="">
                            <div class="neetu_texture">
                                <h5 class="card-title fw-bold">Sandeep Kumar</h5>
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
                    <p class="card-text">"Choosing Loan Suvidha for my SIP investments was a wise decision.
                        Their
                        knowledgeable staff provided personalized advice and made the process seamless. I would
                        recommend Loan
                        Suvidha to anyone looking for reliable SIP investment services"
                    </p>
                    <div class="mainlx_sl">
                        <div class="main_under_slicky">
                            <img src="{{asset('public/assets/img/text-monial-img-three.jpg')}}" alt="">
                            <div class="neetu_texture">
                                <h5 class="card-title fw-bold">Sachin Malhotra</h5>
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
                                What are Some Best SIP Plans Available?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse " aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                              <p> Some of the best SIP plans available include Axis Bluechip Fund, SBI Small Cap Fund,
                                Mirae Asset
                                Emerging Fund, ICICI Prudential Bluechip Fund, HDFC Balanced Advantage Fund, and Aditya
                                Sun Life Relief
                                Fund. These plans offer varying returns annually and cater to different risk appetites.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                               What are the Key Features of SIP Investment Plans?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                              <p> SIP investment plans offer features such as portfolio diversification, small investments
                                starting from
                                as low as Rs. 100 per month, top-up facility for additional investments, flexibility in
                                investment
                                amount and frequency, rupee cost averaging, automatic investment, professional fund
                                management,
                                transparency, regular monitoring, and tax benefits.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                How Can Loan Suvidha Assist with SIP Investments?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                             <p>Loan Suvidha provides additional support in managing your financial journey by offering
                                tools like the
                                SIP calculator for estimating potential returns from your SIP investments. Additionally,
                                Loan Suvidha
                                ensures transparency, flexibility, and expert assistance throughout the SIP investment
                                process, helping
                                investors make informed decisions and achieve their financial goals.</p>
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
                                What is a SIP and How Does it Work?
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                             <p>A SIP, or Systematic Investment Plan, is an investment method that allows you to
                                    invest a fixed
                                    amount regularly in mutual funds. It automates the investment process by debiting
                                    predetermined
                                    amounts from your bank account and investing them in selected mutual funds at
                                    regular intervals,
                                    helping you accumulate wealth over time.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                aria-controls="flush-collapseTwo">
                               What are the Steps Involved in Starting a SIP?
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                            <strong>Starting a SIP involves several steps:</strong>

                                <p>1. Research and analyze potential SIP options based on your financial objectives.</p>

                                <p>2. Select a SIP scheme aligned with your risk tolerance and investment goals.</p>

                                <p>3. Invest in either a mutual fund SIP or a suitable ULIP policy.</p>

                                <p>4. Determine the frequency and amount of your SIP contributions.</p>

                                <p>5. Complete KYC verification and set up auto-debit from your bank account for
                                    seamless SIP
                                    investments.</p>

                                <p>6. Once activated, your SIP contributions will be allocated to your chosen ULIP fund
                                    or mutual fund
                                    scheme.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseThree" aria-expanded="false"
                                aria-controls="flush-collapseThree">
                                What Returns Can I Expect from SIP Investments?
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                            <p>Returns from SIPs in ULIPs and mutual funds are subject to fund performance.
                                Historically, SIPs have
                                proven to be a reliable method for long-term wealth accumulation. The returns can vary
                                depending on the
                                chosen SIP plan and market conditions.</p>
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
<!-- <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> -->

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>

    $(document).ready(function () {
    $('.pay_model_val').on('click', function () {
            $('select[name="city"]').empty();
        });

    });
    function home_pay_form_fun() {
        $('#pay_modal_form').modal('show');
    }

    let currentWatt,

        catchWatt = document.getElementById("watts"),

        catchTooltipMaxSlide = catchWatt.offsetWidth - 15,

        catchTooltip = document.getElementById("showValue"),

        catchTextValue = document.getElementById("textValue"),



        catchVolt = document.getElementById("volts"),

        catchTooltip2MaxSlide = catchVolt.offsetWidth - 7,

        catchTooltip2 = document.getElementById("showValue2"),

        currentVolt,

        catchTextValue2 = document.getElementById("textValue2"),

        catchAmps = document.getElementById("showAmps"),

        catchReturn = document.getElementById("showReturn"),

        catchInvested = document.getElementById("showInvested"),



        currentYear,

        catchYear = document.getElementById("years"),

        catchTooltip3MaxSlide = catchYear.offsetWidth - 7,

        catchTooltip3 = document.getElementById("showValue3"),

        catchTextValue3 = document.getElementById("textValue3"),

        futureValue,

        invested,

        returnedValue;



    catchWatt.oninput = function () {

        tooltipSliding("watt");

        calculateAmps();

    };

    catchVolt.oninput = function () {

        tooltipSliding("volt");

        calculateAmps();

    };

    catchYear.oninput = function () {

        tooltipSliding("year");

        calculateAmps();

    };



    function tooltipSliding(slider, textInput = "") {

        if (slider == "watt") {

            currentWatt = textInput == "" ? catchWatt.value : textInput;

            catchTooltip.innerHTML = currentWatt < 500 ? 500 : currentWatt;

            catchTextValue.value = parseInt(currentWatt);

            let tooltipCanSlide = catchTooltipMaxSlide;

            catchTooltip.style.left = `${parseInt(

                (tooltipCanSlide / 200000) * currentWatt

            )}px`;

        } else if (slider == "volt") {

            currentVolt = textInput == "" ? catchVolt.value : textInput;

            catchTooltip2.innerHTML = currentVolt;

            catchTextValue2.value = parseInt(currentVolt);

            let tooltipCanSlide = catchTooltip2MaxSlide;

            catchTooltip2.style.left = `${parseInt(

                (tooltipCanSlide / 30) * currentVolt - 9

            )}px`;

            console.log(catchTooltip2.style.left)

        } else if (slider == "year") {

            currentYear = textInput == "" ? catchYear.value : textInput;

            catchTooltip3.innerHTML = currentYear;

            catchTextValue3.value = parseInt(currentYear);

            let tooltipCanSlide = catchTooltip3MaxSlide;

            catchTooltip3.style.left = `${parseInt(

                (tooltipCanSlide / 30) * currentYear - 9

            )}px`;

        }

    }



    function setWattValue() {

        let pattern = /^[0-9]*$/,

            v = catchTextValue.value;

        if (pattern.test(v) && v != '' && v <= 200000 && v >= 500 || v == 50) {

            originalValue = parseInt(catchTextValue.value);

            catchTextValue.value = originalValue;

            catchWatt.value = originalValue;

            tooltipSliding("watt", originalValue);

        } else {

            catchTextValue.value = 500;

            catchWatt.value = 500;

            tooltipSliding("watt", 500);

        }

        if (v != '' && v <= 200000 && v >= 500) calculateAmps();

    }



    function setVoltValue() {

        let pattern = /^[0-9]*$/,

            v = catchTextValue2.value;

        if (pattern.test(v) && v > -1 && v <= 30) {

            originalValue = isNaN(parseInt(catchTextValue2.value)) ? 1 : parseInt(catchTextValue2.value);

            catchTextValue2.value = originalValue;

            catchVolt.value = originalValue;

            tooltipSliding("volt", originalValue);

            console.log('here', originalValue)

        } else if (v != '') {

            console.log('here2')

            catchTextValue2.value = 1;

            catchVolt.value = 1;

            tooltipSliding("volt", 1);

        }

        calculateAmps();

    }



    function setYearValue() {

        let pattern = /^[0-9]*$/,

            v = catchTextValue3.value;

        if (pattern.test(v) && v != '' && v >= 1 && v <= 30) {

            originalValue = isNaN(parseInt(catchTextValue3.value)) ? 1 : parseInt(catchTextValue3.value);

            catchTextValue3.value = originalValue;

            catchYear.value = originalValue;

            tooltipSliding("year", originalValue);

        } else {

            catchTextValue3.value = 1;

            catchYear.value = 1;

            tooltipSliding("year", 1);

        }

        calculateAmps();

    }



    window.addEventListener(

        "resize",

        function (event) {

            catchTooltipMaxSlide = catchWatt.offsetWidth - 20;

            catchTooltip2MaxSlide = catchVolt.offsetWidth - 20;

        },

        true

    );



    let myChart;



    function calculateAmps() {

        currentWatt = isNaN(currentWatt) ? 500 : currentWatt;

        currentVolt = isNaN(currentVolt) ? 1 : currentVolt;

        currentYear = isNaN(currentYear) ? 1 : currentYear;



        futureValue = futureValue == undefined ? 6266.33 : currentWatt * (((Math.pow((1 + (currentVolt / 100) / 12), (
            currentYear * 12))) - 1) / ((currentVolt / 100) / 12)) * (1 + (currentVolt / 100) / 12);

        invested = invested == undefined ? 6000 : currentWatt * currentYear * 12;

        returnedValue = futureValue - invested;

        console.log('VALUES :', futureValue, invested, returnedValue)



        if (Number.isNaN(futureValue) == false) {

            catchAmps.innerHTML = `₹${futureValue.toFixed(0)}`;

            catchReturn.innerHTML = `₹${returnedValue.toFixed(0)}`;

            catchInvested.innerHTML = `₹${invested.toFixed(0)}`;

        } else {

            catchAmps.innerHTML = "";

        }

        generateChart(parseInt(futureValue), parseInt(invested), parseInt(returnedValue))

    }

    calculateAmps();





    function generateChart(a, b, c) {

        console.log('CHART===========', a, b, c)

        if (!(isNaN(futureValue), isNaN(invested), isNaN(returnedValue))) {

            if (myChart !== undefined) {

                myChart.destroy();

            }

            const data = {

                labels: [

                    'Total',

                    'Invested',

                    'Return'

                ],

                datasets: [{

                    label: 'My First Dataset',

                    data: [a, b, c],

                    backgroundColor: [

                        'rgb(230 109 18)',

                        'rgb(54, 162, 235)',

                        'rgb(255, 205, 86)'

                    ],

                    hoverOffset: 4

                }]

            };

            const config = {

                type: 'doughnut',

                data: data,

            };

            myChart = new Chart(

                document.getElementById('myChart'),

                config

            );

        }

    };
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