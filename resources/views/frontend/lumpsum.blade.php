@extends('layouts.app')

@if(!empty($metaTitle->value))
@section("title", $metaTitle->value)
@else
@section("title", "Loan Suvidhaa | Lump-Sum investment")
@endif

@if(!empty($metaDesc->value))
@section("description", $metaDesc->value)
@else
@section("description", "Lump-Sum investment")
@endif

@if(!empty($metaKey->value))
@section("keywords", $metaKey->value)
@else
@section("keywords", "Lumpsum, Mutual Fund")
@endif
@section('links')
<link rel="canonical" href="https://loansuvidhaa.com/lumpsum" />
@endsection

@section('content')
<section class="lumpsum_main_bg pt-170">

    <div class="container">

        <div class="row pb-140 gx-0">

            <div class="col-lg-6 col-md-12 col-12">

                <div class="lumpsum_main_hd">

                    <h1>If You Have 'X' Amount to invest in Mutual Fund..<br>Loan Suvidha Team guide You best funds..for
                        Wealth
                        Creation.</h1>

                </div>

            </div>

            <div class="col-lg-5 col-md-12 col-12 main_col">



                <div class="title_2 loan_Assi_h2">

                    <h2>Top performing plans with High Returns</h2>

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
                            <input aria-label="Last name" class="form-control" placeholder="Investment amount"
                                type="text">
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





<section class="lumpsum_calc_sec">

    <div class="container">

        <div class="row">

            <div class="col-lg-12 col-md-12 col-12">

                <div class="lumsum_calc_main">

                    <div class="lumpsum_calculat_hd">

                        <h2>How can a Lump sum Calculator Help You?</h2>

                        <p>Investors in lump sum investments can utilize this calculator, supported by Loan Suvidha, to
                            estimate
                            their potential returns. Before delving into its benefits, it's essential to understand
                            various types of
                            returns associated with lump sum investments</p>

                    </div>

                    <ul class="lumpsum_calculat_list">

                        <li>Absolute Return</li>

                        <li>Total Return</li>

                        <li>Annualized Return</li>

                        <li>Point-to-Point Return</li>

                        <li>Trailing Return</li>

                        <li>Rolling Return</li>

                    </ul>

                    <div class="lumpsum_calculat_p">

                        <p>Understanding these return types is crucial for maximizing the benefits of your investments.
                            Now, let's
                            explore the advantages of using a lump sum return calculator:</p>

                    </div>

                    <ul class="lumpsum_calculat_list">

                        <li>Comprehensive Estimation: This calculator provides estimates for the entire investment
                            period, including
                            1-year, 3-year, and 5-year returns.</li>

                        <li>User-Friendly Interface: It's incredibly convenient and user-friendly, making it accessible
                            even to
                            those with limited financial expertise.</li>

                        <li>Reasonably Accurate Estimates: While no tool can predict market fluctuations with absolute
                            certainty,
                            the calculator offers reasonably accurate estimates, helping investors make informed
                            decisions despite
                            market risks, with the assistance of Loan Suvidha.</li>

                    </ul>

                </div>

            </div>

        </div>

    </div>

</section>





<section class="advantages_of_lumpsum_calculat_sec">

    <div class="container">

        <div class="row">

            <div class="col-lg-12 col-md-12 col-12">

                <div class="advantagess_loan_main">

                    <div class="advantagess_loan_suvidha">

                        <h2>Advantages of Using the Loan Suvidha Lump Sum Calculator</h2>

                        <p>The Loan Suvidha lump sum calculator offers numerous benefits, making it an invaluable
                            financial tool for
                            mutual fund investors</p>

                    </div>

                    <ul class="lumpsum_calculat_lists">

                        <li><strong>Accurate Estimation:</strong> While mutual fund returns are subject to market risks
                            and
                            fluctuations, the calculator provides the closest possible estimate, aiding in financial
                            planning.</li>

                        <li><strong>Financial Planning:</strong> By offering estimated returns, the calculator enables
                            investors to
                            plan their finances more effectively, helping them set realistic investment goals.</li>

                        <li><strong>Online Accessibility:</strong> As an online tool, the calculator can be accessed
                            from anywhere
                            and at any time, eliminating time and space constraints for users.</li>

                        <li><strong>Time-Saving:</strong> Calculating mutual fund returns manually can be time-consuming
                            and
                            tedious. The calculator saves time and effort by providing instant results, even for
                            multiple variations,
                            which could otherwise take hours to compute.</li>

                    </ul>

                </div>

            </div>

        </div>

    </div>

</section>

{{-- <section class="testimonial_sec">

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

                            <p class="card-text">“My experience with Loan Suvidha for managing a lump sum amount was
                                satisfactory.
                                Their team provided clear information and assistance throughout the process. I would
                                recommend Loan
                                Suvidha to others seeking guidance for lump sum investments”.</p>

                            <div class="d-flex align-items-center pt-2">

                                <img src="assets/img/lumsum-test-one.jpg" alt="bootstrap testimonial carousel slider 2">

                                <div>

                                    <div class="flex_icon_star">

                                        <h5 class="card-title fw-bold">Anjali Kumari </h5>

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

                            <p class="card-text">I invested Lumpsum Amount arround 6L in Mutual Fund with the help of

                                Loan Suvidha Service and I find very good returns in my wealth in just 6 months.

                                Thanks Loan Suvidha Team.Parbhani (Maharashtra)</p>

                            <div class="d-flex align-items-center pt-2">

                                <img src="assets/img/lumsum-test-two.jpg" alt="bootstrap testimonial carousel slider 2">

                                <div>



                                    <div class="flex_icon_star">

                                        <h5 class="card-title fw-bold">Mr. Mahesh</h5>

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

                            <p class="card-text">"Choosing Loan Suvidha for managing my lump sum amount was a good
                                decision. Their
                                knowledgeable staff provided comprehensive

                                advice and made the process straightforward. I would recommend Loan Suvidha to anyone
                                looking for
                                reliable assistance in handling lump sum investments" from: Aurangabad (Maharashtra)</p>

                            <div class="d-flex align-items-center pt-2">

                                <img src="assets/img/lumsum-test-three.jpg"
                                    alt="bootstrap testimonial carousel slider 2">

                                <div>



                                    <div class="flex_icon_star">

                                        <h5 class="card-title fw-bold">Mr. Anand Kshirsagar</h5>

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

                            <p class="card-text">"The Loan Suvidha has been a key partner in our success, and an
                                invaluable asset for
                                the growth and future of our company."</p>

                            <div class="d-flex align-items-center pt-2">

                                <img src="assets/img/customer2.jpg" alt="bootstrap testimonial carousel slider 2">

                                <div>

                                    <h5 class="card-title fw-bold">Vishal ahuja </h5>



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



</section> --}}



<section class="testimonial_Sec_slicky">
    <div class="container">
        <div class="title_testimonial">
            <h2>Testimonial</h2>
        </div>
        <div class="slick-slider mt-5">
            <div class="slick_home_testimonial">
                <div class="cntnrt_slicky">
                    <p class="card-text">“My experience with Loan Suvidha for managing a lump sum amount was
                        satisfactory.
                        Their team provided clear information and assistance throughout the process. I would
                        recommend Loan
                        Suvidha to others seeking guidance for lump sum investments”
                    </p>
                    <div class="mainlx_sl">
                        <div class="main_under_slicky">
                            <img src="{{asset('public/assets/img/lumsum-test-one.jpg')}}" alt="lumsum-test-one">
                            <div class="neetu_texture">
                                <h5 class="card-title fw-bold">Anjali Kumari</h5>
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
                    <p class="card-text">"I invested Lumpsum Amount arround 6L in Mutual Fund with the help of
                        Loan Suvidha Service and I find very good returns in my wealth in just 6 months.
                        Thanks Loan Suvidha Team.Parbhani (Maharashtra)"
                    </p>
                    <div class="mainlx_sl">
                        <div class="main_under_slicky">
                            <img src="{{asset('public/assets/img/lumsum-test-two.jpg')}}" alt="lumsum-test-two">
                            <div class="neetu_texture">
                                <h5 class="card-title fw-bold">Mr. Mahesh</h5>
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
                        decision. Their
                        knowledgeable staff provided comprehensive

                        advice and made the process straightforward. I would recommend Loan Suvidha to anyone
                        looking for
                        reliable assistance in handling lump sum investments" from: Aurangabad (Maharashtra)
                    </p>
                    <div class="mainlx_sl">
                        <div class="main_under_slicky">
                            <img src="{{asset('public/assets/img/lumsum-test-three.jpg')}}" alt="lumsum-test-three">
                            <div class="neetu_texture">
                                <h5 class="card-title fw-bold">Mr. Anand Kshirsagar</h5>
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
                                Can Loan Suvidha Help Understand Different Returns?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse " aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>Yes, Loan Suvidha guides investors on various returns like absolute, total, and
                                    annualized, ensuring
                                    comprehensive understanding.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Is the Lump Sum Calculator Accessible Online?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                               <p>Yes, Loan Suvidha's calculator is online, enabling users to plan finances conveniently
                                from anywhere.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                How to Start Lump Sum Investments with Loan Suvidha?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                               <p> Simply fill the enquiry form with your investment details, and our advisors will assist
                                you in making
                                informed decisions.</p>
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
                                How Does Loan Suvidha Support Lump Sum Investments?
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p>Loan Suvidha assists investors in selecting high-return plans and offers a
                                    user-friendly Lump Sum
                                    Calculator for accurate estimation.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                aria-controls="flush-collapseTwo">
                                What are the Benefits of Using Loan Suvidha's Lump Sum Calculator?
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p> It provides accurate estimates, simplifies financial planning, and offers online
                                    accessibility for
                                    convenience.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseThree" aria-expanded="false"
                                aria-controls="flush-collapseThree">
                                How Accurate are the Estimates from Loan Suvidha's Calculator?
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p>While subject to market fluctuations, the calculator provides reasonably accurate
                                    estimates for informed
                                    decision-making.</p>
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

        catchWatt = document.getElementById("lum_watts"),

        catchTooltipMaxSlide = catchWatt.offsetWidth - 15,

        catchTooltip = document.getElementById("showValue"),

        catchTextValue = document.getElementById("textValue"),





        catchVolt = document.getElementById("lum_volts"),

        catchTooltip2MaxSlide = catchVolt.offsetWidth - 7,

        catchTooltip2 = document.getElementById("showValue2"),

        currentVolt,



        catchTextValue2 = document.getElementById("textValue2"),

        catchAmps = document.getElementById("showAmps"),

        catchReturn = document.getElementById("showReturn"),

        catchInvested = document.getElementById("showInvested"),



        currentYear,

        catchYear = document.getElementById("lum_years"),

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

        if (v != '' && v <= 200000 && v >= 500) calculateAmps();

    }







    function setVoltValue() {



    }

    function setYearValue() {



    }





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





        const totalInvestment = parseFloat(document.getElementById('textValue').value);

        const interestRate = parseFloat(document.getElementById('textValue2').value) / 100;

        const years = parseInt(document.getElementById('textValue3').value);



        const data = [totalInvestment];

        let totalAmount = totalInvestment;



        for (let i = 1; i <= years; i++) {

            const yearInterest = totalAmount * interestRate;

            totalAmount += yearInterest;

            data.push(yearInterest);

        }



        catchAmps = document.getElementById("showAmps"),

            catchReturn = document.getElementById("showReturn"),

            catchInvested = document.getElementById("showInvested"),



            catchAmps.innerHTML = `₹${totalAmount.toFixed(2)}`;

        catchReturn.innerHTML = `₹${(totalAmount - totalInvestment).toFixed(2)}`;

        catchInvested.innerHTML = `₹${totalInvestment.toFixed(2)}`;





        if (Number.isNaN(futureValue) == false) {

            catchAmps.innerHTML = `₹${totalAmount.toFixed(2)}`;

            catchReturn.innerHTML = `₹${(totalAmount - totalInvestment).toFixed(2)}`;

            catchInvested.innerHTML = `₹${totalInvestment.toFixed(2)}`;

        } else {

            catchAmps.innerHTML = "";

        }



        generateChart(parseInt(futureValue), parseInt(invested), parseInt(returnedValue))





    }

    calculateAmps();







    window.addEventListener(

        "resize",

        function (event) {

            catchTooltipMaxSlide = catchWatt.offsetWidth - 20;

            catchTooltip2MaxSlide = catchVolt.offsetWidth - 20;

        },

        true

    );



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