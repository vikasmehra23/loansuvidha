@extends('layouts.app')

@if(!empty($metaTitle->value))
@section("title", $metaTitle->value)
@else
@section("title", "Personal Loan")
@endif

@if(!empty($metaDesc->value))
@section("description", $metaDesc->value)
@else
@section("description", "Personal Loan description")
@endif

@if(!empty($metaKey->value))
@section("keywords", $metaKey->value)
@else
@section("keywords", "Personal Loan key")
@endif
@section('links')
<link rel="canonical" href="https://loansuvidhaa.com/personal-loan" />
@endsection

@section('content')
<section class="Online-Personal-Loan">
    <div class="container">
        <div class="row align-items-center gx-0">
            <div class="col-lg-7">
                <div class="online-personal-loan-contant get">
                    <h5>Get Instant</h5>
                    <h1><span> Personal Loan</span></h1>
                    <p class="quick_soluu">Quick Solution for Personal Loan To Fulfill Your All Financial Needs</p>

                    <div class="row">

                        <div class="col-lg-3 col-md-3 col-6 onlineloneicons text-center">
                            <i class="fa-solid fa-percent fonticon"></i>

                            <p class="mt-3">Competitive Interest<br> Rates</p>
                        </div>
                        <div class="col-lg-3 col-md-3 col-6 onlineloneicons text-center">
                            <i class="fa-solid fa-calendar-days fonticon"></i>

                            <p class="mt-3">Personal Loans Up To 10 Lac</p>
                        </div>
                        <div class="col-lg-3 col-md-3 col-6 onlineloneicons text-center">
                            <i class="fa-solid fa-coins fonticon"></i>

                            <p class="mt-3">Tenure 3-36 <br>Months</p>
                        </div>
                        <div class="col-lg-3 col-md-3 col-6 onlineloneicons text-center">
                            <i class="fa-solid fa-file fonticon"></i>

                            <p class="mt-3">Collateral Free Loans</p>
                        </div>
                    </div>

                    <div class="online-personal-loan-btn-1">

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
                                                <h3>Get Personal Loan</h3>
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
                                                        placeholder="Personal Loan" type="text">
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

            <div class="col-lg-5 col-md-12 col-12 main_col mt-md-3">

                <div class="title_2 loan_Assi_h2">
                    <h2>Get Personal Loan</h2>
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
                        <!-- <input aria-label="Phone" name="phone" class="form-control" max-length="10" placeholder="Phone No"
                                type="text" required> -->
                        <input type="tel" class="form-control" name="phone" maxlength="10" placeholder="Mobile No."
                            aria-label="Last name" required="">
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <label></label>
                            <select class="form-control" name="assistance_type" aria-label="Default select example"
                                required>
                                <option selected value="1">Personal Loan</option>
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
                            {{-- <a href="" class="submit">Submit</a> --}}
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

<section class="instant_personal">
    <div class="container">
        <div class="online-personal-loan-2-tittle instant_s  instant_main_oer">
            <h3><span>Instant Personal Loan</span></h3>
            <p>Instant personal loans are unsecured financing options that provide quick access to funds without requiring collateral. In contrast to conventional bank loans, which may involve lengthy processing times of days or even weeks, instant personal loans offer swift approval and disbursement, often within hours. Whether you're looking for a <a href="{{ route('personal.loan') }}">personal loan for self-employed</a> individuals, <a href="{{ route('personal.loan') }}">personal loans for students</a>, and at Loan Suvidhaa, also available <a href="{{ route('personal.loan') }}">personal loan for low CIBIL</a> score holders.</p>
        </div>
        <div class="row instant_personal_box">
            <div class="col-lg-6 col-md-6 col-12 py-3">
                <div class="personal_text">
                    <div class="sec-title personal_t">
                        <h2>Features of Personal Loans</h2>
                        <p><b>Speedy Approval:</b> Instant personal loans offer rapid approval processes, allowing you to receive funds swiftly, sometimes within minutes of application submission. This is particularly beneficial for securing a <a href="{{ route('personal.loan') }}">1 lakh personal loan</a> or a <a href="{{ route('personal.loan') }}">5 lakh personal loan</a> and above.
                            sometimes within minutes of application submission.</p>
                        <p><b>No Collateral Required:</b> Since these loans are unsecured, you don't need to pledge any assets as collateral, simplifying the application process.  </p>
                        <p><b>Flexible Repayment Options:</b>  Borrowers can choose from various repayment tenures, ranging from a few months to several years, depending on their financial situation and preferences.</p>
                        <p><b>Multipurpose Usage:</b> You can utilise instant personal loans for a wide range of purposes, including medical expenses, home renovations, debt consolidation, education costs, or even a dream vacation. <a href="{{ route('personal.loan') }}">Personal loans for students</a> can also be used for educational needs.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12 py-3">
                <div class="personal_text">
                    <div class="sec-title personal_t">
                        <h2>Why Should You Take a Personal Loan?</h2>
                        <p><b>Debt Consolidation:</b> If you have multiple high-interest debts, such as credit card balances or medical bills, consolidating them with a personal loan can streamline your payments into one manageable monthly instalment, often at a lower interest Rate. Consider options like a <a href="{{ route('personal.loan') }}">Bajaj personal loan</a> or a <a href="{{ route('personal.loan') }}">Muthoot Finance personal loan</a> for this purpose.
                        </p>
                        <p><b>Emergency Expenses:</b> Personal loans can provide a lifeline during unexpected financial crises, such as medical emergencies or car repairs, offering quick access to funds without the need for collateral. This includes personal loans for low CIBIL scores.
                        </p>
                        <p><b>Credit Building:</b> Responsible repayment of a personal loan can help build or improve your credit score, demonstrating your ability to manage debt responsibly and enhancing your eligibility for future credit opportunities with better terms and rates.
                        </p>

                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<section class="Online-Personal-Loans-Funding">
    <div class="container">
        <div class="Online-Personal-Loans-Funding-heading">
            <h2>Convenient Personal Loans For <span>All Your Needs </span></h2>
        </div>
        <div class="online-personal-loans-funding-text">
            <p class="online-lone-paragraph mt-4">You may have your reasons for choosing a personal loan. As you know, it's a convenient way to get extra funds when you require them quickly. Loans obtained from <a href="https://loansuvidhaa.com/">Loan Suvidhaa</a> (Loan Suvidha) are more affordable than credit cards.</p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-6 text-center img-icon-1 mt-5">

                <img class="img-fluid img-1" src="public/assets/img/Untitled design (31).png" alt="">

                <p class="mt-4"><a href="">Debt Consolidation Loan</a></p>



            </div>
            <div class="col-lg-4 col-md-4 col-6 text-center img-icon-1 mt-5">
                <img class="img-fluid img-1" src="public/assets/img/Untitled design (29).png" alt="">

                <p class="mt-4"><a href="">Marriage Loan</a></p>
            </div>
            <div class="col-lg-4 col-md-4 col-6 text-center img-icon-1 mt-5">
                <img class="img-fluid img-1" src="public/assets/img/Untitled design (28).png" alt="">

                <p class="mt-4"><a href="">Home Renovation Loan</a></p>
            </div>



            <div class="col-lg-4 col-md-4 col-6 text-center img-icon-1 mt-5">

                <img class="img-fluid img-1" src="public/assets/img/Untitled design (33).png" alt="">

                <p class="mt-4"><a href="">For Credit Card Payment</a></p>



            </div>
            <div class="col-lg-4 col-md-4 col-6 text-center img-icon-1 mt-5">
                <img class="img-fluid img-1" src="public/assets/img/Untitled design (32).png" alt="">

                <p class="mt-4"><a href="">Medical</a></p>
            </div>
            <div class="col-lg-4 col-md-4 col-6 text-center img-icon-1 mt-5">
                <img class="img-fluid img-1" src="public/assets/img/fist-icon-1.png" alt="">

                <p class="mt-4"><a href="">Travel Loan</a></p>
            </div>



            <div class="col-lg-4 col-md-4 col-6 text-center img-icon-1 mt-5">

                <img class="img-fluid img-1" src="public/assets/img/Untitled design (34).png" alt="">

                <p class="mt-4"><a href="">Business Loan</a></p>



            </div>
            <div class="col-lg-4 col-md-4 col-6 text-center img-icon-1 mt-5">
                <img class="img-fluid img-1" src="public/assets/img/Untitled design (27).png" alt="">

                <p class="mt-4"><a href="">Education Loan</a></p>
            </div>
            <div class="col-lg-4 col-md-4 col-6 text-center img-icon-1 mt-5">
                <img class="img-fluid img-1" src="public/assets/img/Untitled design (30).png" alt="">

                <p class="mt-4"><a href="">Instant Loan</a></p>
            </div>

        </div>

        <div class="row text-center mt-5 btn_main_div">
            <div class="col">
                <button type="button" class="btn btn-primary" onclick="home_pay_form_fun()">
                    Apply For Personal Loan Now
                </button>
            </div>

        </div>
    </div>

</section>

<section class="Online-Application-Process background-img">
    <div class="container">
        <div class="Online-Application-Process-heading">
            <h2>Easy Application Form</h2>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-8">
                <div class="online-Application-process-list">
                    <ul>
                        <li>Our way of applying for a personal loan is really simple. With Loan Suvidhaa, you just
                            need to do two things:</li>
                        <ul class="fa_slode_checking">
                            <li>
                                <h2>Step 1</h2>
                                <span> Fill out an easy online form.</span>
                            </li>
                            <li>
                                <h2>Step 2</h2><span>Email your ID documents and bank
                                    statement.</span>
                            </li>

                            <li>
                                <h2>Step 3</h2><span>Get instant money in to your bank account.</span>
                            </li>
                        </ul>
                        <li>We don't ask for lots of info, and you don't need to send us loads of papers or go
                            through a bunch of checks. If you require help, our customer service team is here for
                            you on chat or phone.
                        </li>
                        <li>Once you've applied, you're done worrying. We handle everything else. Our process is
                            much easier than dealing with banks or NBFCs. If your loan is approved, the money goes
                            straight into your account.</li>
                        <li>Isn’t this simple and stress-free? Focus on what you need, and we'll handle the money
                            part.</li>
                    </ul>

                    <div class="row mt-5 btn_main_div">
                        <div class="col">
                            <button type="button" class="btn btn-primary" onclick="home_pay_form_fun()">
                                Apply For Personal Loan Now
                            </button>
                        </div>



                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="online-Application-img text-center">
                    <img src="public/assets/img/drwing.png" alt="">
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
                    <p class="card-text">I am very thankful of Loan Suvidha who solve my problem of credit card
                        dept due to Personal Loan its possible to make my heavy credit card amount. Personal
                        Loan from Loan Suvidha is a very simple & easy process.
                    </p>
                    <div class="mainlx_sl">
                        <div class="main_under_slicky">
                            <img src="public/assets/img/sandeep_k.jpg" alt="">
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
                    <p class="card-text">Mujhe personal use ke liye paiso ki jarurat thi mujhe Loan Suvidha ki
                        madat se Instant Loan mila. jo ek chota amount tha magar mera important kaam pura hua.
                        Thanks Loan Suvidha
                    </p>
                    <div class="mainlx_sl">
                        <div class="main_under_slicky">
                            <img src="public/assets/img/rupees_t.jpg" alt="">
                            <div class="neetu_texture">
                                <h5 class="card-title fw-bold">Sonu Shinde</h5>
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
                    <p class="card-text">My experience with Loan Suvidha was positive. It provided clear
                        information and navigation, making it easy to explore their services. I would recommend
                        Loan Suvidha to others seeking financial solutions.
                    </p>
                    <div class="mainlx_sl">
                        <div class="main_under_slicky">
                            <img src="public/assets/img/lucku_chand_img.png" alt="">
                            <div class="neetu_texture">
                                <h5 class="card-title fw-bold">Lucky Chand </h5>
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
                                What are the convenient personal loan options available through Loan Suvidha?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse " aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                               <p>Loan Suvidha offers a range of convenient personal loan options tailored to meet diverse
                                needs, including debt consolidation loans, marriage loans, home renovation loans, travel
                                loans, and more.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                How simple is the application process for a personal loan with Loan Suvidha?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                               <p>Applying for a personal loan with Loan Suvidha is straightforward and hassle-free. You
                                only need to fill out an easy online form, upload your ID documents and bank statement,
                                and receive instant money in your bank account. Our customer service team is available
                                to assist you throughout the process.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                What is the loan calculator, and how can it help me estimate my loan details?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                               <p>The loan calculator provided by Loan Suvidha allows you to estimate loan details such as
                                total amount, EMI, and interest payable based on your desired loan amount, interest
                                rate, and loan duration. This tool helps you make informed decisions about your
                                borrowing needs.</p>
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
                                What is an instant personal loan, and how does it differ from traditional bank loans?
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p>An instant personal loan is an unsecured financing option that provides quick access
                                    to funds without requiring collateral. Unlike traditional bank loans, which may
                                    involve lengthy processing times, instant personal loans offer rapid approval and
                                    disbursement, often within hours.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                aria-controls="flush-collapseTwo">
                                What are the features of instant personal loans offered by Loan Suvidha?
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p>Instant personal loans from Loan Suvidha feature speedy approval processes, require no
                                    collateral, offer flexible repayment options, and can be used for various purposes,
                                    making them a convenient financial solution for individuals with diverse needs.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseThree" aria-expanded="false"
                                aria-controls="flush-collapseThree">
                                Why should I consider taking a personal loan?
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p>Personal loans serve various purposes, including debt consolidation, covering emergency
                                    expenses, and building credit. They offer lower interest rates compared to credit cards
                                    and provide quick access to funds without the need for collateral.</p>
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