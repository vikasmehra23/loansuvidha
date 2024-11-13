@extends('layouts.app')

@if(!empty($metaTitle->value))
@section("title", $metaTitle->value)
@else
@section("title", "Health Insurance")
@endif

@if(!empty($metaDesc->value))
@section("description", $metaDesc->value)
@else
@section("description", "Health Insurance desc")
@endif

@if(!empty($metaKey->value))
@section("keywords", $metaKey->value)
@else
@section("keywords", "Health-Insurance, key")
@endif
@section('links')
<link rel="canonical" href="https://loansuvidhaa.com/health-insurance" />
@endsection

@section('content')
<section class="health_insur_sec" s>
    <div class="container">
        <div class="row justify-content-between gx-0 ">
            <div class="col-lg-6 col-md-12 col-12">
                <div class="health_insur_main">
                    <div class="health_insur_hd">
                        <h1>Get Best Health Insurance With Loan Suvidha (Loan Suvidhaa)</h1>
                        <p>Get <a href="{{url('health-insurance')}}">health insurance</a> choices provided by <a href="{{url('/')}}
                        ">Loan Suvidha</a> (Loan Suvidhaa), encompassing coverage for medical costs arising from illnesses or accidents. Our offerings include features like hospitalisation benefits, coverage for day care procedures, protection against critical illnesses, and more. Enjoy the ease of cashless hospital stays and complimentary medical examinations with our health insurance packages like <a href="{{url('health-insurance')}}">LIC health insurance</a> package, health insurance for critical illness, for family and parents, for senior citizens and more.

                        </p>
                    </div>
                    <div class="row align-items-center pb-3">
                        <div class="col-lg-12 col-md-12 col-12">
                            <div class="health_insur_icontxt">
                                <ul class="heal_main_h">
                                    <div class="health_Flx_C">
                                        <li>
                                            <div class="health_insur_icon  health_session_m">
                                                <i class="fa-solid fa-location-dot">
                                                </i>
                                            </div>
                                            <div class="health_insur_txt">
                                                <h6>
                                                    30 Minutes Claim
                                                    Support*
                                                </h6>
                                                <span>(In 120+
                                                    cities)</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="health_insur_icon health_session_m">
                                                <i class="fa-solid fa-user"></i>
                                            </div>
                                            <div class="health_insur_txt">
                                                <h6>Relationship
                                                    Manager</h6>
                                                <span>For every
                                                    customer</span>
                                            </div>
                                        </li>
                                    </div>

                                    <div class="health_Flx_C">
                                        <li>
                                            <div class="health_insur_icon health_session_m">
                                                <i class="fa-solid fa-clock">
                                                </i>
                                            </div>
                                            <div class="health_insur_txt">
                                                <h6>24*7 Claims
                                                    Assistance</h6>
                                                <span>
                                                    In 30 mins. guaranteed*
                                                </span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="health_insur_icon health_session_m">
                                                <i class="fa-solid fa-face-smile">
                                                </i>
                                            </div>
                                            <div class="health_insur_txt">
                                                <h6>Instant Policy
                                                    Issuance</h6>
                                                <span>No medical
                                                    tests*</span>
                                            </div>
                                        </li>
                                    </div>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-12 col-12 main_col mt-md-3">

                <div class="title_2 loan_Assi_h2">
                    <h2>Health Insurance</h2>
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
                                <option selected value="2">Health Insurance</option>
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

<section class="what_health_insur">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-12 col-md-12 col-12">
                <div class="wht_health_insur">
                    <h2>What is Health Insurance?</h2>
                    <p><a href="{{url('health-insurance')}}">Health insurance</a> is a contract between the insured and the insurer, providing financial coverage up to a specified limit. At <a href="https://loansuvidhaa.com">Loan Suvidha</a> (Loan Suvidhaa), we help you to find the right plan for your needs, no matter if you find <a href="{{url('health-insurance')}}">LIC health insurance</a> or <a href="{{url('life-insurance')}}">max life insurance</a> or health insurance or <a href="{{url('health-insurance')}}">SBI health insurance</a>,<a href="{{url('health-insurance')}}"> Star Health Insurance</a>, and all, offering medical coverage for emergencies and planned hospitalizations, along with tax benefits under Section 80D of the Income Tax Act, 1961.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="importent_term">
    <div class="container">
        <div class="title_main_ahead">
            <h2>Health Insurance buying checklist</h2>
        </div>
        <div class="row">

            <div class="col-md-3 mb-4">
                <div class="col-ab">
                    <div class="col-imgg">
                        <img class="health_check_svg img-fluid" src="{{asset('public/assets/img/health_checklist_img1.png')}}" alt="">
                    </div>
                    <div class="col-textt">
                        <h3>Reducing Wait Times</h3>
                        <p>Prioritize health insurance policies with minimal waiting periods. The shorter the wait, the
                            sooner you can access essential healthcare services.</p>
                    </div>

                </div>

            </div>
            <div class="col-md-3 mb-4">
                <div class="col-ab">
                    <div class="col-imgg">
                        <img class="health_check_svg img-fluid" src="{{asset('public/assets/img/health_checklist_img2.png')}}" alt="">
                    </div>
                    <div class="col-textt">
                        <h3>Eliminating Co-payment</h3>
                        <p>Select health insurance plans without co-payment clauses. Without co-payment, you won't be
                            burdened with additional out-of-pocket expenses.
                        </p>
                    </div>

                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="col-ab">
                    <div class="col-imgg">
                        <img class="health_check_svg img-fluid" src="{{asset('public/assets/img/health_checklist_img3.png')}}" alt="">
                    </div>
                    <div class="col-textt">
                        <h3>Embracing Preventive Care</h3>
                        <p>Opt for health insurance schemes offering complimentary annual preventive health check-ups.
                            Proactive healthcare can help detect potential issues early, ensuring better overall
                            well-being.
                        </p>
                    </div>

                </div>
            </div>
            <div class="col-md-3 mb-4 ">
                <div class="col-ab">
                    <div class="col-imgg">
                        <img class="health_check_svg img-fluid" src="{{asset('public/assets/img/health_checklist_img4.png')}}" alt="">
                    </div>
                    <div class="col-textt">
                        <h3>Extending Grace Periods</h3>
                        <p>Invest in health insurance policies offering generous grace periods. A longer grace period
                            provides added flexibility in managing premium payments during unforeseen circumstances.
                        </p>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 mb-4">
                <div class="col-ab">
                    <div class="col-imgg">
                        <img class="health_check_svg img-fluid" src="{{asset('public/assets/img/health_checklist_img5.png')}}" alt="">
                    </div>
                    <div class="col-textt">
                        <h3>Unlocking Restore Benefits</h3>
                        <p>Choose health insurance plans offering 100% restore benefits. With restore benefits, you can
                            regain your coverage limit after making a claim, ensuring continued protection.
                        </p>
                    </div>

                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="col-ab">
                    <div class="col-imgg">
                        <img class="health_check_svg img-fluid" src="{{asset('public/assets/img/health_checklist_img6.png')}}" alt="">
                    </div>
                    <div class="col-textt">
                        <h3>Maximizing No Claim Bonuses</h3>
                        <p>Prioritize health insurance plans with the highest No Claim Bonus/Cumulative Bonus rewards.
                            This incentivizes healthy habits and rewards you for maintaining good health.</p>
                    </div>

                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="col-ab">
                    <div class="col-imgg">
                        <img class="health_check_svg img-fluid" src="{{asset('public/assets/img/health_checklist_img7.png')}}" alt="">
                    </div>
                    <div class="col-textt">
                        <h3>Avoiding Sub-limits</h3>
                        <p>Opt for health insurance policies that don't impose sub-limits. Without sub-limits, you'll
                            have unrestricted access to necessary medical treatments without financial constraints.
                        </p>
                    </div>

                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="col-ab">
                    <div class="col-imgg">
                        <img class="health_check_svg img-fluid" src="{{asset('public/assets/img/health_checklist_img8.png')}}" alt="">
                    </div>
                    <div class="col-textt">
                        <h3>Expanding Hospital Networks</h3>
                        <p>Select a health insurance provider with an extensive network of hospitals across India. A
                            wide network ensures accessibility to quality healthcare services wherever you may be.</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<section class="new_buying_insur insur_a">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <div class="benefits_buying_insur_main">
                    <h2>
                        Advantages of Purchasing Health Insurance <br>Policies through Loan Suvidha
                    </h2>
                    <p>
                        Explore the advantages of acquiring a life insurance policy here

                    </p>
                </div>
                <div class="benefits_buying_insur_online">
                    <ul>
                        <li>
                            <b>Simplified Comparison – </b>Easily compare health insurance plans from different insurers
                            online, including options from Loan Suvidha, empowering you to make informed choices.


                        </li>
                        <li>
                            <b>Enhanced Convenience – </b>Enjoy the ease of purchasing your policy online without the
                            necessity of visiting a physical branch or scheduling appointments with agents.

                        </li>
                        <li>
                            <b>Online Discounts – </b> Avail discounts on premiums by purchasing policies online through
                            the Loan Suvidha platform.

                        </li>
                        <li>
                            <b>Affordable Premiums – </b>Experience a seamless process with minimal to no paperwork when
                            purchasing health insurance online through Loan Suvidha.

                        </li>
                        <li>
                            <b>Round-the-Clock Accessibility – </b>Purchase your health insurance policy online anytime,
                            even during holidays, with Loan Suvidha's 24x7 availability.

                        </li>
                        <li>
                            <b>Digital Payment Options – </b>Securely pay your premiums online using various digital
                            payment methods, eliminating the need for cash transactions.

                        </li>
                        <li>
                            <b>Time Efficiency – </b>Safely pay
                            your premiums online with various digital
                            payment methods, eliminating the need for
                            cash transactions.
                        </li>
                        <li>
                            <b>Time-Saving – </b>Save valuable time with instant policy issuance within minutes of
                            completing your purchase through Loan Suvidha's online platform.

                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="topr_buy_insurance">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-12">
                <div class="topr_buy_insurance_img text-center ">
                    <img src="{{asset('public/assets/img/Untitled design11.png')}}" alt class="img-fluid ">
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-12">
                <div class="topr_buy_insurance_hd">
                    <h2>Why Loan Suvidha is Your Ideal Choice for Health Insurance Solutions ?</h2>
                    <p>As the cost of medical care escalates due to inflation, covering healthcare expenses has become
                        increasingly challenging. Hospitalization for critical ailments or lifestyle-related conditions
                        can swiftly erode your financial reserves. Investing in a health insurance policy is the most
                        effective way to ensure access to quality medical treatment during emergencies. Here are
                        compelling reasons to opt for a health insurance plan from Loan Suvidha:
                    </p>
                </div>
                <div class="health_insur_plan">
                    <ul>
                        <li>
                            <b>Combatting Medical Inflation - </b> With Loan Suvidha's health insurance policy, you can
                            navigate through rising medical costs, including pre and post-hospitalization expenses, both
                            now and in the future.
                        </li>
                        <li>
                            <b>Access to Premium Healthcare -
                            </b>Loan Suvidha's health insurance grants you access to superior medical treatment and
                            care, empowering you to prioritize your recovery journey with confidence.

                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="helth">
    <div class="container">
        <div class=" new_benifist_a">
            <h3>Advantages Of Purchasing Health Insurance Plans
            </h3>
            <p>Exploring the benefits of buying a health insurance
                policy online offers numerous advantages. Take a closer
                look below:
            </p>
        </div>
        <div class="row align-items-center ">

            <div class="col-lg-3 col-md-12 col-12">
                <div class="helth_benifits new_benifist_a">
                    <div class="helth_icon">
                        <img src="{{asset('public/assets/img/clock4.png')}}" alt="clock-4">
                    </div>
                    <div class="work_box_cnt">
                        <h3>Waiting Period</h3>
                        <p>Opt for a health insurance plan with minimal waiting periods for swift coverage. Consider
                            Loan Suvidha for reduced waiting times.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-12 col-12">
                <div class="helth_benifits new_benifist_a">
                    <div class="helth_icon">
                        <img src="{{asset('public/assets/img/funding6.png')}}" alt="funding-6">
                    </div>
                    <div class="work_box_cnt">
                        <h3>Co-Payment</h3>
                        <p>Choose plans that eliminate co-payment requirements for added financial ease. Explore Loan
                            Suvidha's co-payment-free options for seamless coverage.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-12 col-12">
                <div class="helth_benifits new_benifist_a">
                    <div class="helth_icon">
                        <img src="{{asset('public/assets/img/health-insurance8.png')}}" alt="health-insurance-8">
                    </div>
                    <div class="work_box_cnt">
                        <h3>Preventive Health Check-Up</h3>
                        <p>Select plans that include complimentary annual health check-ups. Find this feature available
                            through Loan Suvidha's offerings.
                        </p>

                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-12 col-12">
                <div class="helth_benifits new_benifist_a">
                    <div class="helth_icon">
                        <img src="{{asset('public/assets/img/calendar2.png')}}" alt='calendar2'>
                    </div>
                    <div class="work_box_cnt">
                        <h3>Grace Period</h3>
                        <p>Prioritize policies offering extended grace periods for hassle-free renewals. Loan Suvidha
                            provides generous grace periods for policy renewals.
                        </p>

                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-12 col-12">
                <div class="helth_benifits new_benifist_a">
                    <div class="helth_icon">
                        <img src="{{asset('public/assets/img/data-recovery5.png')}}" alt='data-recovery5'>
                    </div>
                    <div class="work_box_cnt">
                        <h3>Restore Benefits</h3>
                        <p>Look for plans with comprehensive restore benefits to reinstate coverage when needed. Find
                            this feature included in Loan Suvidha's offerings.
                        </p>

                    </div>
                </div>

            </div>

            <div class="col-lg-3 col-md-12 col-12">
                <div class="helth_benifits new_benifist_a">
                    <div class="helth_icon">
                        <img src="{{asset('public/assets/img/claim3.png')}}" alt='claim3'>
                    </div>
                    <div class="work_box_cnt">
                        <h3>No Claim Bonus</h3>
                        <p>Opt for plans with lucrative No Claim Bonus benefits for enhanced coverage or discounts.
                            Consider Loan Suvidha for attractive No Claim Bonus benefits.
                        </p>

                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-12 col-12">
                <div class="helth_benifits new_benifist_a">
                    <div class="helth_icon">
                        <img src="{{asset('public/assets/img/warning13.png')}}"  alt='warning13'>
                    </div>
                    <div class="work_box_cnt">
                        <h3>Sub-Limits</h3>
                        <p>Choose plans without sub-limit restrictions for unrestricted coverage. Explore sub-limit-free
                            options available through Loan Suvidha.
                        </p>

                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-12 col-12">
                <div class="helth_benifits new_benifist_a">
                    <div class="helth_icon">
                        <img src="{{asset('public/assets/img/health-insurance8.png')}}" alt='health-insurance8'>
                    </div>
                    <div class="work_box_cnt">
                        <h3>Network Hospitals</h3>
                        <p>Select insurers with expansive networks of hospitals for convenient healthcare access. Choose
                            Loan Suvidha for coverage at numerous network hospitals, ensuring accessibility when needed.
                        </p>

                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="documents_requireds_health_sec">
    <div class="container">
        <div class="row align-items-center doc_requ gx-0">
            <div class="col-lg-6 col-md-12 col-12">
                <div class="doc_health_insurance">
                    <div class="documents_requireds">
                        <h4>Documents Required For Health Insurance</h4>
                        <p>Review the following compilation of KYC documents necessary for the purchase or renewal of
                            health insurance in India:
                        </p>
                    </div>
                    <ul class="documents_requireds_li">
                        <li>Aadhaar Card</li>
                        <li>Pan Card</li>
                        <li>Cancel cheque</li>
                        <li>Passport photo</li>
                        <li>Email id</li>
                        <li>Mobile number</li>
                        <li>Personal details form</li>
                        <li>Nominee Details</li>
                    </ul>
                </div>
            </div>

            <div class="col-md-6 pt-3">
                <div class="document_submission_img text-center">
                    <img src="{{asset('public/assets/img/doc_required_resi.png')}}" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>



<section class="multi_Sec health_slider_sl">

    <div class="container">
        <div id="multiple-items" class="multi_item" ;>
            <div class="item">
                <div class="health_slides">
                    <div class="under_mia">
                        <div class="img_health">
                            <img src="{{asset('public/assets/img/insurancee_for_family.jpg')}}" alt="">
                        </div>
                        <div class="content_he">
                            <h5>Health Insurance For Family</h5>
                            <p>With family health insurance, your entire household receives extensive coverage for a
                                unified premium. This innovative plan allocates a predefined sum insured equally among
                                family members, offering flexibility for multiple claims throughout the policy duration.

                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="health_slides">
                    <div class="under_mia">
                        <div class="img_health">
                            <img src="{{asset('public/assets/img/old_couple_.jpg')}}" alt="">
                        </div>
                        <div class="content_he">
                            <h5>Health Insurance For Senior Citizens</h5>
                            <p>Health insurance plans for senior citizens provide coverage for individuals aged 60 years
                                and above. These plans encompass hospitalization expenses, including in-patient care, as
                                well as pre and post-hospitalization expenses.
                                .</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="health_slides">
                    <div class="under_mia">
                        <div class="img_health">
                            <img src="{{asset('public/assets/img/medical_doctor.jpg')}}" alt="">
                        </div>
                        <div class="content_he">
                            <h5>Health Insurance For Critical Illness</h5>
                            <p>Critical illness health insurance plans deliver a lump sum payment when the insured is
                                diagnosed with severe conditions such as kidney failure, paralysis, cancer, or heart
                                attack. Typically offered as standalone policies or optional riders,</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="health_slides">
                    <div class="under_mia">
                        <div class="img_health">
                            <img src="{{asset('public/assets/img/big_family.jpg')}}" alt="">
                        </div>
                        <div class="content_he">
                            <h5>Health Insurance For Parents</h5>
                            <p>Healthcare coverage for aging parents includes specialized senior citizen health plans
                                crafted for individuals aged 60 years and beyond. These plans are indispensable for
                                elderly parents, given their heightened susceptibility to health challenges like heart
                                and kidney conditions.
                                .</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="benefits_buying_insur key_bene">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <div class="benefits_buying_insur_main">
                    <h2>
                        Key Benefits Of Health Insurance Plans In India
                    </h2>
                    <p>
                        Buying a health insurance policy online comes
                        with several benefits. Take a look at them
                        below
                    </p>
                </div>
                <div class="benefits_buying_insur_online">
                    <ul>
                        <li>
                            <b>Entry Age For Adults – </b>Typically
                            ranges from 18 to 65 years for health
                            insurance coverage.
                        </li>
                        <li>
                            <b>Entry Age For Dependent Children –
                            </b>Usually eligible from 90 days old to 25
                            years of age.
                        </li>
                        <li>
                            <b>Pre-Medical Screening – </b>Required for
                            applicants above a certain age, often 45 or
                            55 years.
                        </li>
                        <li>
                            <b>Pre-Existing Diseases Disclosure –
                            </b>Applicants must disclose any
                            pre-existing illnesses or medical
                            conditions.
                        </li>
                        <li>
                            <b>Waiting Period – </b>Coverage for
                            pre-existing conditions may have a waiting
                            period of 2-4 years.
                        </li>
                        <li>
                            <b>Lifestyle Habits Disclosure –
                            </b>Applicants should disclose smoking or
                            alcohol consumption habits.
                        </li>
                        <li>
                            <b>Coverage Limits – </b>Ensure the health
                            insurance plan's coverage aligns with your
                            medical needs.
                        </li>
                        <li>
                            <b>Policy Renewal Age – </b>Check the
                            maximum age for policy renewal to ensure
                            continuous coverage.
                        </li>
                    </ul>
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
                    <p class="card-text">“I have very good experience of Assure plan of Star Health Insurance
                        (Family floater plan) when I get medical emergency all the expenses freely cover without
                        any problem. Thanks Loan Suvidha team to suggest or guide me such best health insurance
                        policy.” <strong>From: </strong>Aurangabad (Maharashtra)
                    </p>
                    <div class="mainlx_sl">
                        <div class="main_under_slicky">
                            <img src="{{asset('public/assets/img/health_insur_testimonial_img1.jpg')}}" alt="">
                            <div class="neetu_texture">
                                <h5 class="card-title fw-bold">Mrs. Sujata Jadhav </h5>
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
                    <p class="card-text">"Loan Suvidha was instrumental in helping me navigate the complexities
                        of health insurance. Their team provided clear information and guidance, making the
                        process smooth and stress-free. I would recommend Loan Suvidha to others seeking health
                        insurance solutions For: Individual Health plan"
                    </p>
                    <div class="mainlx_sl">
                        <div class="main_under_slicky">
                            <img src="{{asset('public/assets/img/health_insur_testimonial.jpg')}}" alt="">
                            <div class="neetu_texture">
                                <h5 class="card-title fw-bold">Mr. Anand Gaikwad </h5>
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
                    <p class="card-text">"I had a positive experience with Loan Suvidha while exploring health
                        insurance options. Their team was responsive and professional, addressing all my
                        concerns promptly. I appreciate their assistance and would consider them for future
                        insurance needs."
                    </p>
                    <div class="mainlx_sl">
                        <div class="main_under_slicky">
                            <img src="{{asset('public/assets/img/health_insur_testimonial1.jpg')}}" alt="">
                            <div class="neetu_texture">
                                <h5 class="card-title fw-bold">Rekha Devi</h5>
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



<!-- ------===testimonial== end=== -->

<!-- ======faq_Sec== -->
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
                                How does health insurance combat rising medical costs and inflation?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse " aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>Health insurance from Loan Suvidha helps combat medical inflation by covering pre and
                                    post-hospitalization expenses, ensuring access to superior medical treatment and
                                    care,
                                    and providing financial protection against escalating healthcare costs.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                What are the key benefits of health insurance plans offered by Loan Suvidha?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>Loan Suvidha's health insurance plans offer reduced waiting periods, co-payment-free
                                    options, complimentary annual health check-ups, generous grace periods,
                                    comprehensive
                                    restore benefits, attractive No Claim Bonus benefits, and coverage at numerous
                                    network
                                    hospitals for convenient healthcare access.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                What documents are required for purchasing health insurance in India?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>KYC documents required for purchasing or renewing health insurance in India include
                                    Aadhaar Card, Driving License, Passport, Voter ID Card, Letter by the National
                                    Population Register, NREGA Job Card, or any other document notified by the central
                                    government in consultation with the IRDAI.</p>
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
                                What is health insurance, and why is it important?
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p>Health insurance is a contract between the insured and the insurer, providing
                                    financial coverage for medical expenses. It's crucial because it ensures access to
                                    quality healthcare during emergencies and planned hospitalizations, offering peace
                                    of mind and financial security.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                aria-controls="flush-collapseTwo">
                                What should I consider when buying health insurance from Loan Suvidha ?
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p> Consider factors like reducing wait times, eliminating co-payment clauses, embracing
                                    preventive care, extending grace periods, unlocking restore benefits, and maximizing
                                    no
                                    claim bonuses to ensure comprehensive coverage tailored to your needs.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseThree" aria-expanded="false"
                                aria-controls="flush-collapseThree">
                                What are the advantages of purchasing health insurance through Loan Suvidha?
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p>Loan Suvidha offers simplified comparison, enhanced convenience, online discounts,
                                    affordable premiums, round-the-clock accessibility, digital payment options, and
                                    time
                                    efficiency, making the process seamless and efficient for policyholders.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- ======faq_Sec== end====-->


<section id="marquee" class="health_insur_marque_">
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