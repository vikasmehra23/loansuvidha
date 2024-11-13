@extends('layouts.app')
@if(!empty($metaTitle->value))
@section("title", $metaTitle->value)
@else
@section("title", "Loan Suvidhaa | Equity Linked Savings Schemes")
@endif

@if(!empty($metaDesc->value))
@section("description", $metaDesc->value)
@else
@section("description", "ELSS, Equity Linked Savings Schemes")
@endif

@if(!empty($metaKey->value))
@section("keywords", $metaKey->value)
@else
@section("keywords", "ELSS, Equity, reducing tax")
@endif
@section('links')
<link rel="canonical" href="https://loansuvidhaa.com/elss" />
@endsection
@section('content')

<style>
    i.fa-regular.fa-envelope.mt-2 {
        padding-top: 2px;
    }
    section#marquee img {
        height: 100% !important;
    }
</style>

    <section class="elss_main_bg_img pt-170"
        style="background-image: linear-gradient(0deg, rgb(107 107 107 / 59%), rgb(78 76 77 / 37%)), url({{ asset('public/public/img/loan-banner-two.jpg')}});">

        <div class="container">

            <div class="row justify-content-between pb-140 gx-0">

                <div class="col-lg-6 col-md-8 col-12">

                    <div class="banner-content py-5">

                        <div class="section-title elss_hd_p">

                            <h1 class="wow fadeInUp mb-0" data-wow-delay="0.2s"
                                style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">Save Tax
                                and Build Your Wealth invest in Equity Linked Saving Scheme (ELSS)</h1>

                            <p>Discover the benefits of Equity Linked Savings Schemes (ELSS) for tax-saving and
                                wealth-building. With expert guidance from Loan Suvidha, explore how ELSS investments
                                offer potential returns while reducing tax liabilities. Learn how to select the right
                                ELSS funds to achieve your financial goals.</p>

                        </div>


                    </div>

                </div>

                <div class="col-lg-5 col-md-12 col-12 main_col mt-md-3">



                    <div class="title_2 loan_Assi_h2">

                        <h2>Invest in ELSS</h2>

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
                            <input aria-label="Phone" name="phone" class="form-control" placeholder="Phone No"
                                type="tel" maxlength="10" required>
                        </div>



                        <div class="row">

                            <div class="col-md-12">

                                <label></label>
                                <select class="form-control" name="assistance_type" aria-label="Default select example"
                                    required>
                                    <option selected value="7">Elss Investment</option>
                                </select>

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
                                    <option class="form-control" value="{{ $state->id }}">{{ $state->name }}
                                    </option>
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



    <section class="about-section">

        <div class="container">

            <div class="row clearfix text-align-center align-items-center ">



                <!--Content Column-->

                <div class="content-column col-md-6 col-sm-12 col-xs-12">

                    <div class="inner-colum">

                        <div class="sec-title">

                            <div class="title">About ELSS</div>

                            <h2>Optimizing Tax Benefits with ELSS Supported by Loan Suvidha</h2>

                        </div>

                        <div class="text">ELSS, or Equity Linked Savings Scheme, backed by Loan Suvidha, are mutual
                            funds primarily investing in stocks or related assets, offering tax-saving benefits under
                            Section 80C of the Income Tax Act, 1961. With a lock-in period of three years, ELSS funds
                            provide opportunities for long-term growth while reducing tax liabilities. Explore how Loan
                            Suvidha can assist you in maximizing tax benefits and achieving your financial goals through
                            ELSS investments.</div>


                    </div>

                </div>



                <!--Image Column-->

                <div class="image-column col-md-6 col-sm-12 col-xs-12">

                    <div class="inner-column " data-wow-delay="0ms" data-wow-duration="1500ms">

                        <div class="image">

                            <img src="{{ asset('public/assets/img/mutual_funds_about_elss.png')}}" alt="mutual_funds_about_elss" class="img-fluid ">

                        </div>

                    </div>

                </div>



            </div>

        </div>

    </section>



    <section class="Why_is_it pt-0">

        <div class="container">

            <div class="why_it_is_cnt">

                <h4>Understand The Significance of Investment in ELSS</h4>

                <p class="text-dark">ELSS investments, with Loan Suvidha assistance, are paramount for fostering
                    financial growth, ensuring tax compliance, safeguarding wealth, securing health, providing peace of
                    mind, and establishing long-term financial stability.

                </p>

            </div>

            <div class="row">

                <div class="col-lg-4 col-md-12 col-sm-12 mb-4 ">

                    <div class="why_is_box-general ">

                        <img src="{{ asset('public/assets/img/high_rtn_.png')}}" alt="">

                        <h4 class="heading_Color">High Returns</h4>

                        <p class="text-light" id="para1">An ELSS investment provides the potential for significant

                            returns over the long term. By investing in the Equity Linked Savings Scheme (ELSS), you

                            can benefit from the growth potential of the stock market while enjoying tax-saving

                            advantages.

                        </p>

                    </div>

                </div>



                <div class="col-lg-4 col-md-12 col-sm-12 mb-4">

                    <div class="why_is_box-general ">

                        <img src="{{ asset('public/assets/img/high_rtn_1.png')}}" alt="high_rtn">

                        <h4 class="heading_Color">Zero Capital Gains Tax</h4>

                        <p class="text-light " id="para1">Similar to certain mandatory general insurance policies,

                            investing in ELSS offers tax benefits, specifically in the form of zero capital gains

                            tax. This means that any profits earned from ELSS investments are not subject to capital

                            gains tax, providing investors with a significant advantage.

                        </p>

                    </div>

                </div>



                <div class="col-lg-4 col-md-12 col-sm-12 mb-4">

                    <div class="why_is_box-general ">

                        <img src="{{ asset('public/assets/img/high_rtn_2.png')}}" alt="high_rtn-2">

                        <h4 class="heading_Color">Save Upto Rs 46,800</h4>

                        <p class="text-light" id="para1">Just as health insurance covers medical expenses,
                            investing

                            in ELSS offers tax savings of up to Rs 46,800 under Section 80C of the Income Tax Act.

                            By investing in Equity Linked Savings Scheme (ELSS), you can secure tax benefits while

                            also building wealth for the future.

                        </p>

                    </div>

                </div>





            </div>

        </div>

    </section>






    <section class="benefits_buying_insur mb-0 mt-0 benefits_buy_insur_">

        <div class="container">

            <div class="row">

                <div class="col-lg-12 col-md-12 col-12">

                    <div class="benefits_buying_insur_main">

                        <h2>
                            Understand How ELSS Work..?
                        </h2>

                        <p class="text-dark">

                            Discover the operational process of the Equity Linked Savings Scheme (ELSS) with Loan
                            Suvidha guidance

                        </p>

                    </div>

                </div>

            </div>
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12 col-12">
                    <div class="benefits_buying_insur_online">

                        <ul>

                            <li>

                                <b>Step 1:</b> Invest your funds in an ELSS scheme.



                            </li>

                            <li>

                                <b>Step 2:</b> The appointed fund manager allocates your investment across a
                                diversified
                                portfolio comprising stocks, convertible bonds, and other equity-linked
                                investment
                                instruments.



                            </li>

                            <li>

                                <b>Step 3:</b> The value of your investment fluctuates based on the performance
                                of the
                                underlying assets.





                            </li>

                            <li>
                                <b>Step 4:</b> After a lock-in period of three years, you have the option to
                                withdraw
                                your funds from the scheme
                            </li>
                            <li>
                                <b>Step 5:</b>Unlock potential after the lock-in dream.
                            </li>
                            <li>
                                <b>Step 6:</b>The value of your investment fluctuates, sways.
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-12">
                    <div class="under_elss_wrk">
                        <img src="{{ asset('public/assets/img/elss_img__.jpg')}}" alt="elss_img">
                    </div>
                </div>
            </div>

        </div>

    </section>



    <section class="helth mttop_main pt-0">

        <div class="container">

            <div class="helth_benifits_heading">

                <h3>Benefits of Investing in ELSS</h3>

                <p>ELSS funds come with huge benefits. The most common reasons for investing in an ELSS fund are as

                    follows</p>

            </div>

            <div class="row">



                <div class="col-lg-3 col-md-6 col-12">

                    <div class="helth_benifits">

                        <div class="helth_icon">

                            <img src="{{ asset('public/assets/img/clock (1).png')}}" alt="clock-1">

                        </div>

                        <div class="work_box_cnt">

                            <h3>Tax Saving Investments</h3>

                            <p>Select a loan assistance service with minimal waiting times, ensuring prompt access

                                to financial support without unnecessary delays.

                            </p>

                            <a href="#">Read More</a>

                        </div>

                    </div>

                </div>



                <div class="col-lg-3 col-md-6 col-12">

                    <div class="helth_benifits">

                        <div class="helth_icon">

                            <img src="{{ asset('public/assets/img/funding.png')}}" alt="funding">

                        </div>

                        <div class="work_box_cnt">

                            <h3>Long-Term Investment Options</h3>

                            <p>Opt for loan assistance programs without co-payment requirements, avoiding additional

                                financial burdens during the loan repayment process.

                            </p>

                            <a href="#">Read More</a>

                        </div>

                    </div>

                </div>



                <div class="col-lg-3 col-md-6 col-12">

                    <div class="helth_benifits">

                        <div class="helth_icon">

                            <img src="{{ asset('public/assets/img/health-insurance (3).png')}}" alt="health-insurance">

                        </div>

                        <div class="work_box_cnt">

                            <h3>High Returns In The Long Run</h3>

                            <p>Look for loan assistance services that offer annual check-up facilities, promoting

                                proactive financial health management.

                            </p>

                            <a href="#">Read More</a>

                        </div>

                    </div>

                </div>



                <div class="col-lg-3 col-md-6 col-12">

                    <div class="helth_benifits">

                        <div class="helth_icon">

                            <img src="{{ asset('public/assets/img/calendar.png')}}" alt="calendar">

                        </div>

                        <div class="work_box_cnt">

                            <h3>The Discipline Of Investing</h3>

                            <p> Choose a loan assistance service offering generous grace periods, providing

                                flexibility and peace of mind during repayment periods.

                            </p>

                            <a href="#">Read More</a>

                        </div>

                    </div>

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
                        <p class="card-text">“My experience with Loan Suvidha for managing a lump sum amount
                            was satisfactory. Their team provided clear information and assistance throughout
                            the process. I would recommend Loan Suvidha to others seeking guidance for lump sum
                            investments”
                        </p>
                        <div class="mainlx_sl">
                            <div class="main_under_slicky">
                                <img src="{{ asset('public/assets/img/elss-monial-ten.jpg')}}" alt="elss-monial-ten">
                                <div class="neetu_texture">
                                    <h5 class="card-title fw-bold">Mrs. Shraddha Sarkate</h5>
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
                        <p class="card-text">"Loan Suvidha offered helpful support for managing my lump sum
                            amount. Their team was responsive and professional, addressing all my concerns
                            efficiently. I appreciate their guidance and would consider them for future
                            investment needs"
                        </p>
                        <div class="mainlx_sl">
                            <div class="main_under_slicky">
                                <img src="{{ asset('public/assets/img/elss-monial-good.jpg')}}" alt="elss-monial-good">
                                <div class="neetu_texture">
                                    <h5 class="card-title fw-bold">Mrs. Rachana Patil</h5>
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
                        <p class="card-text">"Choosing Loan Suvidha for managing my lump sum amount was a good
                            decision. Their knowledgeable staff provided comprehensive advice and made the
                            process straightforward. I would recommend Loan Suvidha to anyone looking for
                            reliable assistance in handling lump sum investments"
                        </p>
                        <div class="mainlx_sl">
                            <div class="main_under_slicky">
                                <img src="{{ asset('public/assets/img/elss-monial-three.jpg')}}" alt="elss-monial-three.jpg">
                                <div class="neetu_texture">
                                    <h5 class="card-title fw-bold">Butta Ram</h5>
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
                                    Can Loan Suvidha Help in Selecting the Right ELSS Funds?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse " aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                   <p>Yes, Loan Suvidha assists investors in selecting the right ELSS funds based on their
                                    risk tolerance, investment horizon, and financial goals. We provide comprehensive
                                    analysis and recommendations to help investors make informed choices.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    What Makes Loan Suvidha's ELSS Investment Approach Unique?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Loan Suvidha's ELSS investment approach is characterized by personalized guidance,
                                        thorough research, and a focus on long-term wealth creation. We prioritize the
                                        financial well-being of our clients and strive to deliver tailored solutions that
                                        meet their unique needs.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    How Can I Get Started with ELSS Investments through Loan Suvidha?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                   <p>Getting started with ELSS investments through Loan Suvidha is simple. You can fill
                                    out our enquiry form with your details, and one of our experienced advisors will
                                    reach out to assist you. We'll guide you through the process, answer any questions
                                    you may have, and help you begin your journey towards financial growth and tax
                                    savings.</p>
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
                                    What is Loan Suvidha's Role in ELSS Investments?
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>Loan Suvidha provides expert guidance and support to investors seeking to
                                        maximize benefits from Equity Linked Savings Scheme (ELSS) investments. We
                                        assist in selecting the right ELSS funds aligned with your financial goals,
                                        optimizing tax savings, and achieving long-term financial stability.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                    aria-controls="flush-collapseTwo">
                                    How Does Loan Suvidha Assist in Optimizing Tax Benefits with ELSS?
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>Loan Suvidha helps investors understand the tax-saving benefits offered by ELSS
                                        under Section 80C of the Income Tax Act, 1961. We provide guidance on maximizing
                                        tax
                                        savings of up to Rs 46,800 and ensure compliance with tax regulations.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseThree" aria-expanded="false"
                                    aria-controls="flush-collapseThree">
                                    Why Should I Choose Loan Suvidha for ELSS Investments?
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>Loan Suvidha offers personalized assistance and expertise in ELSS investments,
                                        ensuring that investors make informed decisions aligned with their financial
                                        objectives. With Loan Suvidha's support, investors can navigate the complexities
                                        of
                                        ELSS investments with confidence.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </section>
    @endsection

    @section('scripts')
    <script>
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