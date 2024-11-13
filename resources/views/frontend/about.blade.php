@extends('layouts.app')

@if(!empty($metaTitle->value))
@section("title", $metaTitle->value)
@else
@section("title", "About Us")
@endif

@if(!empty($metaDesc->value))
@section("description", $metaDesc->value)
@else
@section("description", "About Us description")
@endif

@if(!empty($metaKey->value))
@section("keywords", $metaKey->value)
@else
@section("keywords", "About Us keyword")
@endif
@section('links')
<link rel="canonical" href="https://loansuvidhaa.com/about" />
@endsection


@section('content')
                <div id="myModal" class="modal">
                    <div class="modal-content">

                        <span class="close">&times;</span>

                        <div class="container">
                            <div class="row align-items-center">

                                <div class="col-md-12">
                                    <div class="img_popup">
                                        <img src="{{ asset('public/assets/img/aboutpage_popup_.jpg') }}" alt="" class="img-fluid ">
                                    </div>
                                </div>

                                <div class="">

                                    <div class="main_popup_cntnt">
                                        <div class="popup_btn">
                                        </div>


                                        <div class="popup_btn">
                                            <a href="javascript:void(0)" onclick="home_pay_form_fun()">Register Now</a>
                                        </div>

                                    </div>

                                </div>



                            </div>
                        </div>
                    </div>

                </div>




                <!-- Banner start -->

                <section class="banner-area-2 main_about_main pt-170" style="background-image: linear-gradient(0deg, rgb(107 107 107 / 59%), rgb(78 76 77 / 37%)), url({{ asset('public/assets/img/loan-banner-two.jpg') }});">

                    <div class="container">
                        <div class="row align-items-center pb-140">
                            <div class="col-12">
                                <div class="banner-content py-5">
                                    <div class="section-title">
                                        <h1 class="wow fadeInUp mb-0" data-wow-delay='0.2s'>Empowering Financial Solutions</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </section>

                <!-- Banner end -->
                <!------------- About Section Html Start ------------>

                <section class="about-section mb-0">

                    <div class="container">
                        <div class="row clearfix text-align-center">

                            <!--Content Column-->
                            <div class="content-column col-md-6 col-sm-12 col-xs-12">

                                <div class="inner-colum">
                                    <div class="sec-title">
                                        <div class="title">About Us</div>
                                        <h2>Your Trusted Financial Partner</h2>
                                    </div>

                                    <div class="text">Loan Suvidha, Established on February 22, 2016, oversees two other

                                        companies. Acquired in 1995,

                                        Loan Suvidha later founded Gemini Capital Services Pvt Ltd. Specializing in financial

                                        planning, wealth consulting,




                                        and legal advice, we strive to offer top-notch services to customers. As a B2C

                                        (business-to-customer) company, our

                                        primary goal is to provide tailored advice and solutions to meet your needs effectively.

                                        Ms. Riya Singh, the owner,

                                        was recently honored with

                                        an award by BIZNATION TV at the Global Empire Event. Committed to assisting individuals

                                        nationwide in obtaining loans

                                        efficiently, Today Join Loan Suvidha to experience the difference!</div>

                                </div>
                            </div>



                            <!--Image Column-->

                            <div class="image-column col-md-6 col-sm-12 col-xs-12">
                                <div class="inner-column" data-wow-delay="0ms" data-wow-duration="1500ms">

                                    <div class="image">
                                        <img src="{{ asset('public/assets/img/about1.webp')}}" alt="about-1">
                                        <div class="overlay-box">
                                            <div class="year-box"><span class="number">8+</span>Years <br>Working<br>
                                                Experience 
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>



                        </div>
                    </div>

                </section>

                <section class="certificates_main_bg">

                    <div class="container">

                        <div class="row text-center ">
                            <div class="col-lg-12 col-md-12 col-12">

                                <div class="certificates_main_title">
                                    <h2>Certificates</h2>
                                </div>

                            </div>
                        </div>

                        <div class="row justify-content-center text-center ">
                            <div class="col-lg-3 col-md-3 col-12 py-2">

                                <div class="certificates_main_img">
                                    <div class="certificates_main_part">
                                        <img src="{{ asset('public/assets/img/certificates_img1.png') }}" alt="certificates-1" class="img-fluid ">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-3 col-12 py-2">

                                <div class="certificates_main_img">
                                    <div class="certificates_main_part">
                                        <img src="{{ asset('public/assets/img/certificates_img2.png') }}" alt="certificates-2" class="img-fluid ">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-3 col-12 py-2">

                                <div class="certificates_main_img">
                                    <div class="certificates_main_part">
                                        <img src="{{ asset('public/assets/img/certificates_img3.png') }}" alt="certificates-3" class="img-fluid ">
                                    </div>
                                </div>

                            </div>

                            <div class="col-lg-3 col-md-3 col-12 py-2">

                                <div class="certificates_main_img">
                                    <div class="certificates_main_part">
                                        <img src="{{ asset('public/assets/img/certificate_7.png') }}" alt="certificates-4" class="img-fluid  cetetet">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </section>

                <section class="about-section main_About_two_bot">

                    <div class="container">
                        <div class="col-lg-12 col-md-12 col-12">
                            <div class="certificates_main_titles">
                                <h2>Our Achievements</h2>
                            </div>
                        </div>

                        <div class="row clearfix text-align-center align-items-center">


                            <!--Content Column-->
                            <div class="col-md-6">
                            
                                <div class="multiple-itemssss owl-theme">
                                    <div class="item">
                                        <div class="become_partner_img">

                                            <video width="500px" controls="">
                                                <source src="{{ asset('public/assets/video/loan3.mp4') }}" type="video/mp4">
                                            </video>

                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="ourl_blog mt-2 mb-2">
                                            <div class="coverage_about">
                                                <img src="{{asset('public/assets/img/collages_Loan_Suvidha.jpg') }}" alt="" class="img-fluid ">
                                            </div>

                                        </div>
                                    </div>



                                </div>
                            </div>
                            <div class="content-column col-md-6 col-sm-12 col-xs-12">

                                <div class="inner-colum">
                                    <div class="sec-title">
                                        <h2>Accelerating Financial Dreams with Loan Suvidha</h2>

                                    </div>

                                    <div class="text">Riya Singh, the visionary behind Loan Suvidha, was honored at GEE -
                                        Greatest Entrepreneurs & Educators, highlighting our commitment to easing loan accessibility
                                        across India.
                                        From our Gurugram office to nationwide Partners, we all empower your financial
                                        aspirations. Visit us to start your journey toward financial freedom.
                                    </div>

                                </div>
                            </div>


                        </div>
                    </div>

                </section>

                <!------------- About Section Html Start ------------>



<!-- Statistics start -->

<section class="statistics-area pb-50 bg_disables">

    <div class="container">



        <div class="row gy-lg-0 gy-4 ">
            <div class="col-lg-7">

                <div class="statistics-widget-2 wow fadeInUp">

                    <div class="row gx-0">
                        <div class="col-lg-6 col-md-6 col-12">

                            <div class="statistics-slider h-100">
                                <div class="widget-content  widget-1">

                                    <h2 class="stat-counter">1000</h2>
                                    <p>locations we are working in.</p>
                                </div>

                                <div class="widget-content  widget-1">

                                    <h2 class="stat-counter">300</h2>

                                    <p>Employees and agents have collaboration with us.</p>

                                </div>

                                <div class="widget-content  widget-1">

                                    <h2 class="stat-counter">150</h2>
                                    <p>Nationalized banks and NBFCs associated with us.</p>

                                </div>
                            </div>

                        </div>

                        <div class="col-lg-6 col-md-6 col-12">
                            <img class="img-fluid" src="{{asset('public/assets/img/banking-saving-money-management-account-concept.jpg')}}" alt="img">
                        </div>



                    </div>

                </div>

            </div>

            <div class="col-lg-5 col-md-12 col-12">

                <div class="statistics-widget-2  wow fadeInUp" data-wow-delay="0.2s">

                    <div class="widget-content widget-2">

                        <h2 class="stat-counters">5000+</h2>

                        <p>Channel Partners are associated with us.</p>

                    </div>

                </div>

            </div>

        </div>

        <div class="row pt-30 pb-30 gy-4 gy-lg-0">

            <div class="col-lg-7">

                <div class="row gy-4 gy-lg-0">

                    <div class="col-lg-4 col-md-6">

                        <div class="statistics-widget-2 wow fadeInRight" data-wow-delay="0.1s">

                            <div class="widget-content widget-3">

                                <h2 class="stat-counters">4000+</h2>

                                <p class="years_ee">Loans Disbursed Successfully.</p>

                            </div>

                        </div>

                    </div>



                    <div class="col-lg-4 col-md-6 col-12">

                        <div class="statistics-widget-2 wow fadeInRight" data-wow-delay="0.5s">

                            <div class="widget-content widget-5">

                                <h2 class="">125+</h2>

                                <p>Channel Partners are associated with us.</p>

                            </div>

                        </div>

                    </div>

                    <div class="col-lg-4 col-md-12">

                        <div class="statistics-widget-2 wow fadeInRight" data-wow-delay="0.3s">

                            <div class="widget-content widget-4">

                                <h2 class="years_e">8+Years</h2>

                                <p>Working experience</p>

                            </div>

                        </div>

                    </div>



                </div>

            </div>

            <div class="col-lg-5 ">

                <div class="statistics-widget-2 wow fadeInRight" data-wow-delay="0.7s">

                    <div class="widget-content widget-6" style="background-image: url({{asset('public/assets/img/2210.i201.055.F.m004.c9.bank\ loan\ credit\ mortgage\ isometric.jpg')}})">

                        <h2>Exceptional work experience with our channel partners.</h2>

                        <p></p>

                    </div>

                </div>

            </div>

        </div>

        <div class="row gy-4 gy-md-0">

            <div class="col-md-5">

                <div class="statistics-widget-2 wow fadeInLeft" data-wow-delay="0.1s">

                    <div class="widget-content widget-7" style="background-image: url({{asset('public/assets/img/closeup-coins-jar-table-with-pesos-lights.jpg')}});">


                        <h2>Addressing your financial needs with our solutions.</h2>

                    </div>

                </div>

            </div>

            <div class="col-md-7">

                <div class="statistics-widget-2 wow fadeInLeft" data-wow-delay="0.3s">

                    <div class="row gx-0">

                        <div class="col-lg-6 col-md-6 col-12">

                            <img class="img-fluid" src="{{asset('public/assets/img/front-view-finance-business-elements-assortment.jpg')}}" alt="img">



                        </div>

                        <div class="col-lg-6 col-md-6 col-12">

                            <div class="widget-content widget-8" style="background-image: url({{asset('public/assets/img/front-view-house-investments-elements-arrangement.jpg')}});">


                                <p class="consult_tancy">Collaborating in consultancy for legal and financial goals</p>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- Statistics end -->


<section class="last-section" style="background: #e66d12;">

    <div class="container">



        <div class="row mt-5 align-items-center">

            <div class="col-lg-6 mt-5 mb-5">

                <h3 class="text-white">In Need of A Loan? Your Comprehensive Guide To Financial Assistance</h3>

                <div class="need_btn">

                    <button type="button" class="btn btn-primary main_need" data-bs-toggle="modal" data-bs-target="#exampleModal">

                        Apply Now

                    </button>





                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

                        <div class="modal-dialog">

                            <div class="modal-content">

                                <div class="modal-header">



                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                                </div>

                                <div class="modal-body">

                                    <div class="col-lg-12 col-md-12 col-12 mt-md-3">



                                        <div class="title_2 loan_Assi_h2">

                                            <h3>Get Loan</h3>

                                            <p>Fill The Enquiry Form Now</p>

                                        </div>

                                        <form action="{{ route('phonePe') }}" method="POST">
                                            @csrf
                                            <div class="row">

                                                <div class="col-md-12">

                                                    <label></label>

                                                    <input aria-label="Full name" class="form-control" placeholder="Full Name" name="name" type="text" required>

                                                </div>

                                            </div>

                                            <div class="col-md-12">

                                                <label></label>

                                                <input aria-label="Email" name="email" class="form-control" placeholder="Email" type="email" required>

                                            </div>

                                            <div class="col-md-12">

                                                <label></label>

                                                <input type="tel" class="form-control" name="phone" maxlength="10" placeholder="Mobile No." aria-label="Last name" required="">

                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">

                                                    @php
                                                    $states = App\Models\State::orderBy('name', 'ASC')->get();
                                                    @endphp
                                                    <select class="form-select" name="state" aria-label="Default select example" required>
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
                                                    <select class="form-select" name="city" aria-label="Default select example" required>
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

                                                    <input type="hidden" name="assistance_type" value="1">
                                                    <input type="hidden" name="pay_amount" class="pay_amount" value="99">
                                                    <button type="submit" class="submit">Pay Now<span class="span_rupee" id="price_dynamic">₹99</span></button>
                                                </div>

                                            </div>
                                        </form>



                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>



            <div class="col-lg-6 mt-5 mb-5">

                <div class="need_a_loanimg text-center">

                    <img src="{{asset('public/assets/img/Screenshot_4.png')}} " alt="" class="img-fluid">

                </div>

            </div>

        </div>





    </div>

</section>



<!------------------- about_business html End ------------->

@include('modals.pay_form')
@endsection

@section('scripts')
<script>
    function home_pay_form_fun() {
        $('#pay_modal_form').modal('show');
    }
    $(document).ready(function() {

        $('.pay_model_val').on('click', function() {
            $('select[name="city"]').empty();
        });

        $('select[name="state"]').on('change', function() {
            var state_id = $(this).val();
            if (state_id) {
                $.ajax({
                    url: "{{ url('/city/') }}/" + state_id
                    , type: "GET"
                    , dataType: "json"
                    , success: function(data) {
                        $('select[name="city"]').empty();
                        $.each(data, function(key, value) {
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

