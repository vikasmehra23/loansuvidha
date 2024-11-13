@extends('layouts.app')

@if(!empty($metaTitle->value))
@section("title", $metaTitle->value)
@else
@section("title", "Loan Suvidhaa | Systematic Withdrawal Plans")
@endif

@if(!empty($metaDesc->value))
@section("description", $metaDesc->value)
@else
@section("description", "SWP, Systematic Withdrawal Plans")
@endif

@if(!empty($metaKey->value))
@section("keywords", $metaKey->value)
@else
@section("keywords", "SWP, Investment, wealth management")
@endif
@section('links')
<link rel="canonical" href="https://loansuvidhaa.com/swp" />
@endsection


@section('content')
<section class="plan_in_india">

    <div class="container">

        <div class="row justify-content-between gx-0">

            <div class="col-lg-6 col-md-8 col-md-12">

                <div class="plan_india_heading">

                    <h1>Best Way To Create Second Source of Income: Systematic Withdrawal Plan
                        in Mutual Fund (SWP)</h1>

                    <p>Discover how Loan Suvidha Systematic Withdrawal Plans (SWP) streamline your investment management

                        process. SWP allows you to withdraw a fixed amount from your mutual fund investments regularly,
                        ensuring a

                        steady income stream alongside capital appreciation. Our SWP solutions are tailored to your
                        financial
                        objectives, offering

                        flexibility and convenience in wealth management.

                    </p>

                </div>

            </div>

            <div class="col-lg-5 col-md-12 col-12 main_col mt-md-3">

                <div class="title_2 loan_Assi_h2">

                    <h2>Get Income growth In SWP</h2>

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
                                <option selected value="7">Swp Investment</option>
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

<section class="Insurance_box">

    <div class="container">

        <div class="bg_ox">

            <div class="row justify-content-center">

                <div class="col-lg-2 col-md-4 col-12 mb-3">

                    <div class="box_imahe_a">

                        <div class="iconnnn">

                            <img src="{{asset('public/assets/img/renew_main_1.png')}}" alt="" class="img-fluid">

                        </div>

                        <div class="contentt">

                            <p>Convenient</p>

                        </div>

                    </div>

                </div>

                <div class="col-lg-2 col-md-4 col-12 mb-3">

                    <div class="box_imahe_a">

                        <div class="iconnnn">

                            <img src="{{asset('public/assets/img/renew_main_2.png')}}" alt="" class="img-fluid">

                        </div>

                        <div class="contentt">

                            <p> Flexible</p>

                        </div>

                    </div>

                </div>

                <div class="col-lg-2 col-md-4 col-12 mb-3">

                    <div class="box_imahe_a">

                        <div class="iconnnn">

                            <img src="{{asset('public/assets/img/renew_main_3.png')}}" alt="" class="img-fluid">

                        </div>

                        <div class="contentt">

                            <p>Withdrawal Flexibility</p>

                        </div>

                    </div>

                </div>

                <div class="col-lg-2 col-md-4 col-12 mb-3">

                    <div class="box_imahe_a">

                        <div class="iconnnn">

                            <img src="{{asset('public/assets/img/renew_main_4.png')}}" alt="" class="img-fluid">

                        </div>

                        <div class="contentt">

                            <p>Capital <br>Appreciation</p>

                        </div>

                    </div>

                </div>

                <div class="col-lg-2 col-md-4 col-12 mb-3">

                    <div class="box_imahe_a">

                        <div class="iconnnn">

                            <img src="{{asset('public/assets/img/renew_main_5.png')}}" alt="" class="img-fluid">

                        </div>

                        <div class="contentt">

                            <p>Tax Efficient</p>

                        </div>

                    </div>

                </div>



            </div>

        </div>

    </div>

</section>


<section class="persnal-loan-sec">

    <div class="container">

        <h2 class="PRHeading green text-left mb-3">₹10,00,000/- INVESTED FOR 10 YEARS</h2>



        <div class="row loan_rate_starting swp_invested_tb">

            <div class="col-md-12">

                <div style="overflow-x: auto">

                    <table class="dcf-table dcf-table-responsive dcf-table-bordered dcf-w-100% w-100">

                        <thead>

                            <tr>

                                <th scope="col"> </th>

                                <th scope="col" class="">Bank FD</th>

                                <th scope="col">Fees &amp; SWP</th>

                            </tr>

                        </thead>

                        <tbody>

                            <tr>

                                <th scope="row">Monthly Income @ 6%</th>

                                <td data-label="Amount Chargeable">₹ 5,000/-</td>

                                <td data-label="Amount Chargeable">₹ 5,000/-</td>

                            </tr>

                            <tr>

                                <th scope="row">Total Amount Received in 10 Years</th>

                                <td data-label="Amount Chargeable">₹ 6,00,000/-</td>

                                <td data-label="Amount Chargeable">₹ 6,00,000/-</td>

                            </tr>

                            <tr>

                                <th scope="row">TDS/Tax Deduction</th>

                                <td data-label="Amount Chargeable">₹ 60,000/-</td>

                                <td data-label="Amount Chargeable">NIL</td>

                            </tr>

                            <tr>

                                <th scope="row">Taxation</th>

                                <td data-label="Amount Chargeable">as Per IT Slab</td>

                                <td data-label="Amount Chargeable">LOW**</td>

                            </tr>

                            <tr>

                                <th scope="row">End Value at the Time of Maturity</th>

                                <td data-label="Amount Chargeable">₹10,00,000/-</td>

                                <td data-label="Amount Chargeable">₹21,78,000/-***</td>

                            </tr>

                            <tr>

                                <th scope="row">Total Approax Received Value</th>

                                <td data-label="Amount Chargeable">₹16,00,000/-</td>

                                <td data-label="Amount Chargeable">₹27,78,000/-***</td>

                            </tr>

                        </tbody>

                    </table>

                </div>

            </div>

        </div>

    </div>

</section>

<section class="swp_plans mb-5">

    <div class="container">

        <div class="row">

            <div class="col-lg-12 col-md-12 col-sm-12">

                <div class="best_swp_loan">

                    <h4>Key Considerations For Choosing The Best SWP Plan With Loan Suvidha</h4>

                    <p class="best_plan_p">Before selecting the right SWP plan with Loan Suvidha, consider essential
                        factors
                        such as the stability of mutual funds, asset allocation strategies, and associated fees. Align
                        your
                        investments with your financial goals, evaluate withdrawal consistency, and understand tax
                        implications to make well-informed decisions for your future financial security.</p>

                </div>

                <div class="best_swp_loan mt-3">

                    <h4>Assessing Financial Needs for Strategic Investing</h4>

                    <p class="best_plan_p">When determining your investment amount, it's vital to consider future
                        financial
                        goals like retirement or significant purchases such as a home or car. With Loan Suvidha,
                        strategically
                        plan your investments to align with your long-term aspirations.

                    </p>

                </div>

                <div class="best_swp_loan mt-3">

                    <h4>Steady Earnings with Loan Suvidha</h4>

                    <p class="best_plan_p">Before opting for SWP, evaluate your financial requirements. If you don't
                        need
                        constant access to funds, consider lump-sum withdrawals or monthly SWP for a customized
                        approach.</p>

                </div>

                <div class="best_swp_loan mt-3">

                    <h4>Retirement Income Planning with Loan Suvidha</h4>

                    <p class="best_plan_p">Leverage SWP as a reliable source of retirement income with preferred mutual
                        funds. When set up correctly, it ensures a consistent income stream during retirement, providing
                        financial stability.</p>

                </div>

                <div class="best_swp_loan mt-3">

                    <h4>Tax Implications with Loan Suvidha</h4>

                    <p class="best_plan_p">Supplementing your income with SWP requires careful consideration of tax
                        implications. SWP distributions are subject to capital gains tax, which varies based on
                        investment
                        duration and tax regulations. Loan Suvidha offers guidance to navigate these complexities,
                        empowering
                        you to make informed decisions.</p>

                </div>

                <div class="best_swp_loan mt-3">

                    <h4>Market Analysis with Loan Suvidha</h4>

                    <p class="best_plan_p">Before investing in SWP mutual funds, analyze market conditions thoroughly.
                        With
                        Loan Suvidha expert guidance, make informed decisions based on market performance, ensuring
                        long-term
                        investment success.</p>

                </div>

            </div>

        </div>

    </div>

</section>

<section class="why_choose_swp mt-5 mb-5">

    <div class="container">

        <div class="why_choose_swp_heading">

            <h4>Why Choose SWP?</h4>

            <p>Discover why SWP is a preferred choice for investors seeking regular income while safeguarding their
                capital. Ideal for retirement planning and addressing specific financial needs over time, SWP offers a
                reliable solution for achieving financial security.</p>

        </div>

        <div class="row align-items-center">

            <div class="col-lg-6 col-md-6 col-sm-12">

                <div class="why_choose_img_box">

                    <img src="{{asset('public/assets/img/benefits_loan.jpg')}}" alt="" class="img-fluid ">

                </div>

            </div>

            <div class="col-lg-6 col-md-6 col-sm-12">

                <div class="why_choose_benefits_box">

                    <h4>Unlocking the Advantages of Systematic Withdrawal Plan (SWP)</h4>

                    <p>Explore the numerous advantages of SWP, a strategic investment instrument facilitating systematic
                        fund
                        withdrawals and reinvestments. Experience the stability of fixed income streams coupled with the
                        potential for long-term capital growth. With SWP, tailor your withdrawal amount and frequency to
                        ensure tax-efficient returns. Benefit from the absence of Tax Deductions at Source (TDS),
                        allowing you
                        to optimize tax obligations. Strategically manage withdrawals to uphold steady income while
                        preserving
                        your principal capital for future expansion, empowering you to confidently pursue and attain
                        your
                        financial objectives with assurance and precision.</p>

                </div>

            </div>

        </div>

    </div>

</section>

<section class="features_of_sip">

    <div class="container">

        <div class="features_off_sip_headind">

            <h4>Exploring Key Features of SWP Investment Plans?</h4>

            <p>Discover the key characteristics of investing in a Systematic Withdrawal Plan (SWP) in India, outlined in
                the table below:</p>

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

                                <h4>Taxes with Indexation Benefit</h4>

                            </td>

                            <td>

                                <ul>

                                    <li>An SWP is considered a long-term investment plan, allowing tax-free withdrawals
                                        after one
                                        year of investment.</li>

                                </ul>

                            </td>

                        </tr>

                        <tr>

                            <td>

                                <h4>Regular Return and High Gain</h4>

                            </td>

                            <td>

                                <ul>

                                    <li>Unlike fixed deposits, SWP offers the potential for higher returns over time. If
                                        the
                                        mutual fund scheme performs well, investors can expect better returns compared
                                        to fixed
                                        deposits.</li>

                                </ul>

                            </td>

                        </tr>

                        <tr>

                            <td>

                                <h4>Investment in SIP</h4>

                            </td>

                            <td>

                                <ul>

                                    <li>SWP allows reinvestment of returns from mutual fund units, creating an
                                        opportunity to
                                        start a new SIP without additional investment. Reinvesting SWP returns in
                                        another scheme
                                        enhances investment diversification and potential returns.</li>

                                </ul>

                            </td>

                        </tr>

                        <tr>

                            <td>

                                <h4>Inflation Benefits</h4>

                            </td>

                            <td>

                                <ul>

                                    <li>Unlike fixed deposits, SWP returns are influenced by inflation rates, providing
                                        investors
                                        with returns that better align with inflation. Investing in equity and related
                                        securities
                                        under SWP can offer additional inflation benefits, enhancing long-term wealth
                                        accumulation.</li>

                                </ul>

                            </td>

                        </tr>

                        <tr>

                            <td>

                                <h4>Low Risk</h4>

                            </td>

                            <td>

                                <ul>

                                    <li>SWP enables regular withdrawals, helping to mitigate market volatility risks by
                                        averaging
                                        out market fluctuations. Withdrawing specific amounts at regular intervals
                                        reduces the
                                        risk of losing the entire investment, making SWP a low-risk investment option.
                                    </li>

                                </ul>

                            </td>

                        </tr>

                        <tr>

                            <td>

                                <h4>Minimum Balance</h4>

                            </td>

                            <td>

                                <ul>

                                    <li>Starting an SWP account requires a minimum balance of Rs. 25,000 in the mutual
                                        fund.
                                        While this initial amount is necessary, it remains accessible for withdrawals
                                        over time,
                                        providing flexibility in managing finances.</li>

                                </ul>

                            </td>

                        </tr>

                        <tr>

                            <td>

                                <h4>Fund Selection Options</h4>

                            </td>

                            <td>

                                <ul>

                                    <li>Investors have the flexibility to choose from a wide range of mutual funds and
                                        investment
                                        schemes for SWP, allowing them to select options that align with their risk
                                        tolerance,
                                        investment objectives, and financial goals. Diverse fund selection options
                                        enable
                                        investors to create a customized SWP strategy tailored to their specific needs.
                                    </li>

                                </ul>

                            </td>

                        </tr>

                        <tr>

                            <td>

                                <h4>Capital Preservation</h4>

                            </td>

                            <td>

                                <ul>

                                    <li>SWP focuses on preserving capital while providing regular income, making it
                                        suitable for
                                        investors seeking to maintain their investment principal while generating a
                                        steady stream
                                        of income. This capital preservation aspect enhances financial security and
                                        stability over
                                        the long term.</li>

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
                    <p class="card-text">“Loan Suvidha provided satisfactory support for my SWP needs. Their
                        team
                        offered clear explanations and guidance throughout the process. I would recommend Loan
                        Suvidha
                        to others considering SWP investments”
                    </p>
                    <div class="mainlx_sl">
                        <div class="main_under_slicky">
                            <img src="{{asset('public/assets/img/swp-text-monial-one.jpg')}}" alt="">
                            <div class="neetu_texture">
                                <h5 class="card-title fw-bold">Anil Kumar</h5>
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
                    <p class="card-text">"I had a positive experience with Loan Suvidha while exploring SWP
                        options.
                        Their team was responsive and professional, addressing all my concerns promptly. I
                        appreciate
                        their assistance and would consider them for future investment needs"
                    </p>
                    <div class="mainlx_sl">
                        <div class="main_under_slicky">
                            <img src="{{asset('public/assets/img/swp-text-monial-two.jpg')}}" alt="">
                            <div class="neetu_texture">
                                <h5 class="card-title fw-bold">Sunil Grover</h5>
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
                    <p class="card-text">"Loan Suvidha proved to be a reliable choice for my SWP investments.
                        Their
                        knowledgeable staff provided comprehensive advice and made the process straightforward.
                        I would
                        recommend Loan Suvidha to anyone in search of quality SWP services"
                    </p>
                    <div class="mainlx_sl">
                        <div class="main_under_slicky">
                            <img src="{{asset('public/assets/img/swp-text-monial-three.jpg')}}" alt="">
                            <div class="neetu_texture">
                                <h5 class="card-title fw-bold">Dinesh Kumar</h5>
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
                                How Can SWP Help with Retirement Income Planning?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse " aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p> SWP can serve as a reliable source of retirement income when set up correctly. By
                                    selecting
                                    preferred mutual funds, investors can ensure a consistent income stream during
                                    retirement,
                                    providing financial stability in later years.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                What are the Tax Implications of SWP?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>Supplementing income with SWP requires careful consideration of tax implications. SWP
                                    distributions are subject to capital gains tax, which varies based on investment
                                    duration and
                                    tax regulations. Loan Suvidha offers guidance to navigate these complexities and
                                    optimize tax
                                    obligations.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                What are the Advantages of Systematic Withdrawal Plans (SWP)?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>SWP offers numerous advantages, including stable fixed income streams, potential
                                    long-term
                                    capital growth, tax-efficient returns, absence of Tax Deductions at Source (TDS),
                                    steady
                                    income
                                    preservation, and flexibility in managing withdrawals. It is an ideal solution for
                                    retirement
                                    planning and addressing specific financial needs over time.</p>
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
                                What is a Systematic Withdrawal Plan (SWP) and How Does it Work?
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p>An SWP is an investment strategy that allows investors to withdraw a fixed amount
                                    from their
                                    mutual fund investments regularly. It provides a steady income stream while also
                                    allowing for
                                    capital appreciation. With Loan Suvidha's SWP solutions, investors can tailor their
                                    withdrawals to meet their financial objectives.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                aria-controls="flush-collapseTwo">
                                What SWP Plans are Available with Loan Suvidha?
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p>Loan Suvidha offers a range of SWP plans tailored to different financial needs,
                                    including
                                    Retirement Savings SWP, Education Fund SWP, Emergency Cash SWP, Travel & Leisure
                                    SWP,
                                    Home
                                    Renovation SWP, and Medical Expenses SWP. Each plan offers returns of up to 19%,
                                    catering to
                                    specific financial goals.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseThree" aria-expanded="false"
                                aria-controls="flush-collapseThree">
                                What Factors Should I Consider When Choosing the Best SWP Plan?
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p> When selecting an SWP plan, it's essential to consider factors such as mutual fund
                                    stability,
                                    asset allocation strategies, associated fees, withdrawal consistency, and tax
                                    implications.
                                    Aligning investments with financial goals and evaluating market conditions are also
                                    crucial
                                    considerations.</p>
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
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    let currentWatt,

        catchWatt = document.getElementById("investe_watts"),

        catchTooltipMaxSlide = catchWatt.offsetWidth - 15,

        catchTooltip = document.getElementById("investeshowValue"),

        catchTextValue = document.getElementById("investetextValue"),



        catchVolt = document.getElementById("Withdrawal_withdraw"),

        catchTooltip2MaxSlide = catchVolt.offsetWidth - 7,

        catchTooltip2 = document.getElementById("WithdrawalshowValue"),

        currentVolt,





        catchTextValue2 = document.getElementById("monthlyWithdrawal"),


        futureValue,

        invested,

        returnedValue;







    catchWatt.oninput = function () {

        tooltipSliding("watt");

        calculateSWP();

    };

    catchVolt.oninput = function () {

        tooltipSliding("withdraw");

        calculateSWP();

    };





    function setWattValue() {

        let pattern = /^[0-9]*$/,

            v = catchTextValue.value;

        if (pattern.test(v) && v != '' && v <= 150000000 && v >= 500 || v == 50) {

            originalValue = parseInt(catchTextValue.value);

            catchTextValue.value = originalValue;

            catchWatt.value = originalValue;

            tooltipSliding("watt", originalValue);

        } else {

            catchTextValue.value = 500;

            catchWatt.value = 500;

            tooltipSliding("watt", 500);

        }

        if (v != '' && v <= 150000000 && v >= 500) calculateSWP();

    }





    function setVoltValue() {

        let pattern = /^[0-9]*$/,

            v = catchTextValue2.value;

        if (pattern.test(v) && v > -1 && v <= 30) {

            originalValue = isNaN(parseInt(catchTextValue2.value)) ? 1 : parseInt(catchTextValue2.value);

            catchTextValue2.value = originalValue;

            catchVolt.value = originalValue;

            tooltipSliding("volt", originalValue);

        } else if (v != '') {



            catchTextValue2.value = 1;

            catchVolt.value = 1;

            tooltipSliding("volt", 1);

        }

        calculateSWP();

    }



    function tooltipSliding(slider, textInput = "") {

        if (slider == "watt") {

            currentWatt = textInput == "" ? catchWatt.value : textInput;

            catchTooltip.innerHTML = currentWatt < 500 ? 500 : currentWatt;

            catchTextValue.value = parseInt(currentWatt);

            let tooltipCanSlide = catchTooltipMaxSlide;

            catchTooltip.style.left = `${parseInt(

                (tooltipCanSlide / 200000) * currentWatt

            )}px`;

        } else if (slider == "withdraw") {

            currentVolt = textInput == "" ? catchVolt.value : textInput;

            catchTooltip2.innerHTML = currentVolt;

            catchTextValue2.value = parseInt(currentVolt);

            let tooltipCanSlide = catchTooltip2MaxSlide;

            catchTooltip2.style.left = `${parseInt(

                (tooltipCanSlide / 30) * currentVolt - 9

            )}px`;

        }



    }







    let myChart;

    function calculateSWP() {

        const initialAmount = parseFloat(document.getElementById('investetextValue').value);

        const monthlyWithdrawal = parseFloat(document.getElementById('monthlyWithdrawal').value);

        const annualInterestRate = parseFloat(document.getElementById('annualInterestRate').value) / 100;

        const numberOfYears = parseInt(document.getElementById('numberOfYears').value);



        let totalWithdrawn = 0;

        let balance = initialAmount;



        for (let i = 1; i <= numberOfYears * 12; i++) {

            const monthlyInterest = balance * (annualInterestRate / 12);

            balance += monthlyInterest - monthlyWithdrawal;

            totalWithdrawn += monthlyWithdrawal;



            if (balance <= 0) {

                break;

            }

        }



        const remainingBalance = balance + (monthlyWithdrawal * (numberOfYears * 12 - totalWithdrawn /
            monthlyWithdrawal));

        const totalInterest = initialAmount - totalWithdrawn - remainingBalance;

        // const totalInterest = remainingBalance - initialAmount - totalWithdrawn;



        document.getElementById('totalWithdrawn').textContent = totalWithdrawn.toFixed(2);

        document.getElementById('finalBalance').textContent = remainingBalance.toFixed(2);

        document.getElementById('totalInterest').textContent = Math.abs(totalInterest).toFixed(2);



        futureValue = remainingBalance.toFixed(2);

        invested = totalWithdrawn.toFixed(2);

        returnedValue = totalInterest.toFixed(2);



        generateChart(parseInt(futureValue), parseInt(invested), parseInt(returnedValue))



    }

    calculateSWP();









    function generateChart(a, b, c) {

        // console.log('CHART===========',a,b,c)

        if (!(isNaN(futureValue), isNaN(invested), isNaN(returnedValue))) {

            if (myChart !== undefined) {

                myChart.destroy();

            }

            const data = {

                labels: [

                    'Final',

                    'Invested',

                    'Return'

                ],

                datasets: [{

                    label: 'My First Dataset',

                    data: [a, b, c],

                    backgroundColor: [

                        'rgb(255, 99, 132)',

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

                document.getElementById('lumpsumChart'),

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