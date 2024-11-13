@extends('layouts.app')


@if(!empty($metaTitle->value))
@section("title", $metaTitle->value)
@else
@section("title", "Become Partner")
@endif

@if(!empty($metaDesc->value))
@section("description", $metaDesc->value)
@else
@section("description", "Become Partner description")
@endif

@if(!empty($metaKey->value))
@section("keywords", $metaKey->value)
@else
@section("keywords", "Become-Partner, key")
@endif
@section('links')
<link rel="canonical" href="https://loansuvidhaa.com/become-partner" />
@endsection



@section('content')
<section class="become_partner_bg_img">
    <div class="container">
        <div class="row justify-content-between align-items-center gx-0">
            <div class="col-lg-6 col-md-12 col-12">
                <div class="become_partner_main_hd">
                    <h1>Be A Partner</h1>
                </div>
            </div>
            <div class="col-lg-5 col-md-12 col-12 main_col ">
                <div class="title_2">
                    <h2>Contact us</h2>
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
                    <div class="row">
                        <div class=" col-lg-12 col-md-12">
                            <select aria-label="Default select example" name="profession_type" class="form-select"
                                required>
                                <option selected value="">Select Profession</option>
                                <option value="Agriculture/Farmer">Agriculture/Farmer</option>
                                <option value="Builder">Builder</option>
                                <option value="Chartered accountant">Chartered accountant </option>
                                <option value="DSA/DST">DSA/DST</option>
                                <option value="Ex-banker">Ex-banker</option>
                                <option value="Financial Analyst">Financial Analyst</option>
                                <option value="Financial Consultant">Financial Consultant</option>
                                <option value="Freelancer">Freelancer</option>
                                <option value="Insurance Advisor">Insurance Advisor</option>
                                <option value="Loan Agent">Loan Agent</option>
                                <option value="Mutual Fund Agent">Mutual Fund Agent</option>
                                <option value="Real Estate Agent/Broker">Real Estate Agent/Broker</option>
                                <option value="Tax Consultant">Tax Consultant</option>
                                <option value="Others">Others</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label></label>
                        <input aria-label="Email" name="email" class="form-control" placeholder="Email" type="email"
                            required>
                    </div>
                    <div class="col-md-12">
                        <label></label>
                        <input aria-label="Phone" name="phone" class="form-control" placeholder="Phone No" type="tel" maxlength="10"
                            required>
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
                            <input type="hidden" name="assistance_type" value="1">
                            <input type="hidden" name="pay_amount" class="pay_amount" value="599">
                            <button type="submit" class="submit">Pay Now<span class="span_rupee"
                                    id="price_dynamic">₹599</span></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<section class="get_the_sol_sec">
    <div class="container">
        <div class="row text-center pb-2">
            <div class="become_partner_hd">
                <h2>Here Are The Way You Can Join Us</h2>
            </div>
        </div>
        <div class="row border_partner gx-0">
            <div class="col-lg-6 col-md-12 col-12">
                
                <section class=" partner_blog_video">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-md-12  feedback_na">
                                <div class="row align-items-center ">
                                    <div class="multiple-itemss owl-theme">
                                        <div class="item">
                                            <div class="ourl_blog mt-2 mb-2">
                                                <div class="coverage_img">
                                                    <video width="210px" height="205" controls>
                                                        <source src="{{ asset('public/assets/video/video_13.mp4') }}"
                                                            type="video/mp4">
                                                    </video>
                                                </div>
                                                <div class="ourl_blog_txt">
                                                    <h5>
                                                        Effortless Security: Loan Suvidha's Solutions
                                                    </h5>
                                                    <p>
                                                        Effortless property loans with transparent processes. Highly
                                                        recommended for reliable financial assistance.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="ourl_blog mt-2 mb-2">
                                                <div class="coverage_img">
                                                    <video width="210px" height="205" controls>
                                                        <source src="{{ asset('public/assets/video/video_15.mp4') }}"
                                                            type="video/mp4">
                                                    </video>
                                                </div>
                                                <div class="ourl_blog_txt">
                                                    <h5>
                                                        Dream Home Reality: Loan Suvidha's Guidance
                                                    </h5>
                                                    <p>
                                                        Loan Suvidha made owning my dream home a reality with
                                                        personalized guidance and competitive loan options.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="ourl_blog mt-2 mb-2">
                                                <div class="coverage_img">
                                                    <video width="210px" height="205" controls>
                                                        <source src="{{ asset('public/assets/video/video_18.mp4') }}"
                                                            type="video/mp4">
                                                    </video>
                                                </div>
                                                <div class="ourl_blog_txt">
                                                    <h5>
                                                        Dream Home Reality: Loan Suvidha's Guidance
                                                    </h5>
                                                    <p>
                                                        Loan Suvidha made owning my dream home a reality with
                                                        personalized guidance and competitive loan options.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-lg-6 col-md-12 col-12">
                <div class="become_partner_main">
                    <p>Loan Suvidha is a standout finance consultancy firm, rapidly growing and dedicated to
                        providing exceptional B2C services, including our innovative Direct Selling Agent program.
                    </p>
                    <div class="become_partner_txt py-4">
                        <h4>Here's Why Our Program Shines:</h4>
                        <ol type="1">
                            <li class="py-2">Rapid Growth: Loan Suvidha is on an upward ,presenting Direct Selling
                                Agent with a
                                unique opportunity to be part of a dynamic and expanding enterprise.
                            </li>
                            <li class="py-2">Excellence in Services: We are committed to delivering excellence in
                                B2C Services
                                ensuring that our Direct Selling agents have a robust plateform to offer top-notch
                                financial solutions to clients.
                            </li>
                            <li class="py-2">Empowerment: Our Direct Selling Agent plan is designed to empower
                                individuals,
                                allowing them to leverage our established brand, resources, and expertise to achieve
                                their financial goals.
                            </li>
                            <li class="py-2">Personalized Approach: We prioritize a personalized approach, offering
                                tailored
                                support and resources to our agents, recognizing that their success is integral to
                                ours.
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="become_our_part_sec">
    <div class="container">
        <div class="row text-center ">
            <div class="col-lg-12 col-md-12 col-12">
                <div class="hw_become_our_part">
                    <h2>How To Become Our Partner?</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-12 my-3">
                <div class="become_our_part_main">
                    <img src="{{ asset('public/assets/img/become_our_img1.png')}}" alt="become-partner-1" class="img-fluid ">
                    <div class="become_our_part_text">
                        <h5>Become Loan Suvidha</h5>
                        <p>Register on our website or partner dashboard and register.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12 my-3">
                <div class="become_our_part_main">
                    <img src="{{ asset('public/assets/img/become_our_img2.jpg')}}" alt="become-partner-2" class="img-fluid ">
                    <div class="become_our_part_text">
                        <h5>Get Your KYC Done</h5>
                        <p>Track application status, Get paid on disbursement, account opening or issuance of credit
                            card as per the payout cycle digitally.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12 my-3">
                <div class="become_our_part_main">
                    <img src="{{ asset('public/assets/img/become_our_img3.jpg')}}" alt="become-partner-3" class="img-fluid ">
                    <div class="become_our_part_text">
                        <h5>Under Stand Process And Get Training</h5>
                        <p>Check out trainig videos.DSA Hard book for Product know how the digital lead processing
                            verious Bank NBFCs.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12 my-3">
                <div class="become_our_part_main">
                    <img src="{{ asset('public/assets/img/become_our_img4.jpg')}}" alt="become-partner-4" class="img-fluid ">
                    <div class="become_our_part_text">
                        <h5>Share Leads And Start Earning</h5>
                        <p>Share product details with your customers using the partner mobile app or partner portal.
                            Help your customers in completing the applications. Track application status..
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="who_can_become_part">
    <div class="container">
        <div class="row text-center ">
            <div class="col-lg-12 col-md-12 col-12">
                <div class="become_our_part">
                    <h2>Who Can Become A Partner With Loan Suvidha?</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-12 my-3">
                <div class="become_our_part_main">
                    <img src="{{ asset('public/assets/img/Who Can Become1.jpeg')}}" alt="Who-Can-become-partner" class="img-fluid ">
                    <div class="become_our_part_text">
                        <h5>Self Employed</h5>
                        <p>Work smarter, not harder. Earn extra income by leveraging your network. You don't need
                            any additional capital to start earning with us.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12 my-3">
                <div class="become_our_part_main">
                    <img src="{{ asset('public/assets/img/Who Can Become2.jpeg')}}" alt="Who-Can-become-partner-2" class="img-fluid ">
                    <div class="become_our_part_text">
                        <h5>Loan Agents</h5>
                        <p>Make money while helping people. If you are a LIC or insurance agent, real estate broker,
                            network marketing person etc become our partner and start earning more.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12 my-3">
                <div class="become_our_part_main">
                    <img src="{{ asset('public/assets/img/Who Can Become3.jpeg')}}" alt="Who-Can-become-partner-3" class="img-fluid ">
                    <div class="become_our_part_text">
                        <h5>Ex Bankers</h5>
                        <p>Make use of your expenence.our partner and earn extra income by assisting others with
                            their financial needs. height action.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12 my-3">
                <div class="become_our_part_main">
                    <img src="{{ asset('public/assets/img/Who Can Become4.jpeg')}}" alt="Who-Can-become-partner-4" class="img-fluid ">
                    <div class="become_our_part_text">
                        <h5>Salaried People</h5>
                        <p>Work for yourself. Earn extra income by working in your spare time for us..</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-12 my-3">
                <div class="become_our_part_main">
                    <img src="{{ asset('public/assets/img/Who Can Become5.jpg')}}" alt="Who-Can-become-partner-5" class="img-fluid ">
                    <div class="become_our_part_text">
                        <h5>Tax Consultant</h5>
                        <p>Partnering with Loan Suvidha can provide access to a broader client base. Loan Suvidha's
                            existing clientele may require tax consulting services, allowing you to expand your
                            reach and attract new clients.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12 my-3">
                <div class="become_our_part_main">
                    <img src="{{ asset('public/assets/img/Who Can Become6.jpg')}}" alt="Who-Can-become-partner-6" class="img-fluid ">
                    <div class="become_our_part_text">
                        <h5>Agriculture/Farmer</h5>
                        <p>Partnering with Loan Suvidha can provide farmers with easier access to finance for
                            various agricultural needs such as purchasing equipment, seeds, fertilizers, and land.
                            Loan Suvidha may offer competitive interest rates and flexible repayment terms tailored
                            to the agricultural sector.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12 my-3">
                <div class="become_our_part_main">
                    <img src="{{ asset('public/assets/img/Who Can Become7.jpg')}}" alt="Who-Can-become-partner-7" class="img-fluid ">
                    <div class="become_our_part_text">
                        <h5>Chartered Accountant</h5>
                        <p>Loan Suvidha may refer its clients to you for accounting, tax, and financial advisory
                            services. This can generate a steady stream of referrals, allowing you to acquire new
                            clients and grow your practice.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12 my-3">
                <div class="become_our_part_main">
                    <img src="{{ asset('public/assets/img/Who Can Become8.jpg')}}" alt="Who-Can-become-partner-8" class="img-fluid ">
                    <div class="become_our_part_text">
                        <h5>DSA/DST</h5>
                        <p>Partnering with Loan Suvidha as a DSA or DST can provide you with additional revenue
                            streams through commissions or incentives earned on successful loan disbursals. This can
                            supplement your existing income and contribute to the growth of your business.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="become_partner_eligibility">
    <div class="container">
        <div class="row text-center ">
            <div class="col-lg-12 col-md-12 col-12">
                <div class="become_our_part_process">
                    <h2>What Are The Eligibility Criteria For The Loan Suvidha DSA Registration Process?</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-12 col-12 py-2">
                <div class="eligibilty_Criteria_part d-flex justify-content-between align-items-center ">
                    <div class="eligibilty_Criteria_part_txt">
                        <p>Must be a Resident Citizen of India.</p>
                    </div>
                    <div class="eligibilty_Criteria_part_img">
                        <img src="{{ asset('public/assets/img/becomepart1__.jpg')}}" alt="becomepart-1" class="img-fluid ">
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-12 py-2">
                <div class="eligibilty_Criteria_part d-flex justify-content-between align-items-center ">
                    <div class="eligibilty_Criteria_part_txt">
                        <p>You must be over 25 years of age.</p>
                    </div>
                    <div class="eligibilty_Criteria_part_img">
                        <img src="{{ asset('public/assets/img/becomepart2__.jpg')}}" alt="becomepart-2" class="img-fluid ">
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-12 py-2">
                <div class="eligibilty_Criteria_part d-flex justify-content-between align-items-center ">
                    <div class="eligibilty_Criteria_part_txt">
                        <p>There are no educational requirements to qualify as a Loan Suvidha Loan DSA Partner.</p>
                    </div>
                    <div class="eligibilty_Criteria_part_img">
                        <img src="{{ asset('public/assets/img/becomepart3__.jpg')}}" alt="becomepart-3" class="img-fluid ">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-12 col-12 py-2">
                <div class="eligibilty_Criteria_part d-flex justify-content-between align-items-center ">
                    <div class="eligibilty_Criteria_part_txt">
                        <p>Whether you are a working professional, or a business owner, you are welcome to register
                            as a Loan Suvidha Loan DSA Franchise.
                        </p>
                    </div>
                    <div class="eligibilty_Criteria_part_img">
                        <img src="{{ asset('public/assets/img/becomepart4__.jpg')}}" alt="becomepart-4" class="img-fluid ">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="loan_agent_partner">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-12 col-md-12 col-12">
                <div class="loan_agent_partner_hd">
                    <h2>About Loan Agent Partner</h2>
                </div>
                <div class="loan_agent_partner_txt">
                    <p>You're a Loan Agent who is knowledgeable about all types of loans offered by the financial
                        institutions you represent and can advise people on the best options. Get your Loan Suvidha
                        Loan Agent Partner Advantage now and advise people on how to finance their dreams.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <div class="helpclient_loan">
                    <h4>Help finance your clients' futures now</h4>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-12 py-2">
                <div class="loan_agent_partner_part">
                    <div class="loan_agent_partner_prt">
                        <p>Personal Loans.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-12 py-2">
                <div class="loan_agent_partner_part">
                    <div class="loan_agent_partner_prt">
                        <p>Home Loans.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-12 py-2">
                <div class="loan_agent_partner_part">
                    <div class="loan_agent_partner_prt">
                        <p>Business Loans.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-12 col-12 py-2">
                <div class="loan_agent_partner_part">
                    <div class="loan_agent_partner_prt">
                        <p>Vehicle Loans and More.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="loan_agent_partner">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-12 col-md-12 col-12">
                <div class="loan_agent_partner_hd">
                    <h2>Why to be a partner with Loan Suvidha</h2>
                </div>
                <div class="loan_agent_partner_txt">
                    <p>Loan Suvidha , a one-stop-shop for all types of Loans ,Property sale/purchase and Insurance
                        covers 2000+ cities in India to serve 500 million under-served borrowers. Loan Suvidha '10 +
                        years' financial products distribution legacy, 200+ partner banks and NBFCs, and yearly
                        business of Rs 25,000+ crores bear testimony to a successful journey in the world of
                        finance. Other than the above, the following are the reasons why you should go for Online
                        Loan DSA Registration to partner with Loan Suvidha as a Loan DSA Partner.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-12 col-12 py-2">
                <div class="loan_agent_partner_part">
                    <div class="loan_agent_partner_prt">
                        <p>Investment Free.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-12 py-2">
                <div class="loan_agent_partner_part">
                    <div class="loan_agent_partner_prt">
                        <p>Instant Pay-outs.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-12 py-2">
                <div class="loan_agent_partner_part">
                    <div class="loan_agent_partner_prt">
                        <p>High Potential Industry.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-12 col-12 py-2">
                <div class="loan_agent_partner_part">
                    <div class="loan_agent_partner_prt">
                        <p>Guaranteed Success.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-12 py-2">
                <div class="loan_agent_partner_part">
                    <div class="loan_agent_partner_prt">
                        <p>Channel Partner Recognition.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-12 py-2">
                <div class="loan_agent_partner_part">
                    <div class="loan_agent_partner_prt">
                        <p>Easy Process.</p>
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