@extends('layouts.app')

@if(!empty($metaTitle->value))
@section("title", $metaTitle->value)
@else
@section("title", "Loan Suvidhaa | Contact Us")
@endif

@if(!empty($metaDesc->value))
@section("description", $metaDesc->value)
@else
@section("description", "Contact Us description")
@endif

@if(!empty($metaKey->value))
@section("keywords", $metaKey->value)
@else
@section("keywords", "Contact-Us, Help")
@endif
@section('links')
<link rel="canonical" href="https://loansuvidhaa.com/contact" />
@endsection

@section('content')
<!-- BreadCrumb start -->
<section class="breadcrumb-area">
    <div class="breadcrumb-widget  breadcrumb-widget-3 pt-200 pb-200"
        style="background-image: url('{{ asset('public/assets/img/contact-us-.png')}}');">

        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content pt-100">
                        <h1 class="text-center">Contact Us</h1>
                        <p class="text-center">Loan Suvidha is one of the growing company in the field of
                            finance consultancy.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- BreadCrumb end -->

<!-- Get In Touch start -->
<section class="pt-50 pb-50 get-touch-area bg_white">
    <div class="container">
        <div class="row gy-4 gy-lg-0 justify-content-between">
            <div class="col-lg-5">
                <div class="section-title text-start contactus_fill_form">
                    <h2>Please Feel Free To Contact Us</h2>
                    <p>Interested in reaching out? We're eager to connect with you. Here's how you can get in
                        touch...</p>
                </div>
                <div class="row mt-55">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="get-touch-box">
                            <div class="icon">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <div class="contact_fr_hd">
                                <p>Call the Helpline</p>
                                <span>+91-9873370717</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="get-touch-box">
                            <div class="icon">
                                <i class="fa-solid fa-envelope"></i>
                            </div>
                            <div class="contact_fr_hd">
                                <p>Email Us</p>
                                <span>contact@loansuvidhaa.com</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="get-touch-box mt-30">
                            <div class="icon">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                            <div class="contact_fr_hd">
                                <p>Location</p>
                                <span>F222 Sushant Shopping Arcade, Sushant Lok-1 Gurugram, Haryana 122009</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="get-touch-box mt-30">
                            <div class="icon">
                                <i class="fa-solid fa-clock"></i>
                            </div>
                            <div class="contact_fr_hd">
                                <p>Work Hours</p>
                                <span>10:00 AM - 5:00 PM</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="contact-form-widget">
                    <form action="{{ route('phonePe') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="fill_fromimp">
                                <h5>Fill Up Informations</h5>
                            </div>
                            <div class="col-md-6">

                                <label for="f-name">Full Name</label>
                                <input type="text" id="f-name" name="name" class="form-control"
                                    placeholder="What's your name?" required>
                            </div>
                            <div class="col-md-6 mt-20 mt-md-0">
                                <label for="email-address">Email</label>
                                <input type="email" id='email-address' name="email" class="form-control"
                                    placeholder="yourname@example.com" required>
                            </div>
                            <div class="col-md-12 mt-20">
                                <label for="form-sub">Phone</label>
                                <input type="tel" id="f-name" name="phone" class="form-control"
                                    placeholder="What's your phone?" maxlength="10" required>
                            </div>
                            <div class="col-md-12 mt-20">

                                <select class="form-select" name="assistance_type" aria-label="Default select example"
                                    required>
                                    <option selected value="">Loan Assistance Type</option>
                                    <option value="1">Loan </option>
                                    <option value="2">Insurance</option>
                                    <option value="3">Mutual Fund</option>
                                    <option value="4">Buy and sell Property </option>
                                    <option value="5">Improve Your Cibil </option>
                                    <option value="6">Become A Partner</option>
                                </select>
                            </div>

                            <div class="col-md-6">

                                @php
                                    $states = App\Models\State::orderBy('name', 'ASC')->get();
                                @endphp
                                <select class="form-select" aria-label="Default select example" name="state" required>
                                    <option selected value="">State</option>
                                    @foreach ($states as $state)
                                    <option class="form-control" value="{{ $state->id }}">{{ $state->name }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-md-6">
                                @php
                                $citys = App\Models\City::get();
                                @endphp
                                <select class="form-select" aria-label="Default select example" name="city" required>
                                    <option selected value="">city</option>
                                    @foreach ($citys as $city)
                                    <option class="form-control" value="{{ $city->id }}">{{ $city->city }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                            
                            <div class="col-12 mt-35">
                                <input type="hidden" name="pay_amount" class="pay_amount" value="99">
                                <button type="submit" class="theme-btn theme-btn-lg w-100">Pay Now <span
                                        class="span_rupee" id="price_dynamic">₹99</span></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Get In Touch end -->

<!-- need more help start -->
<section class="pt-50 pb-50 bg_disable">
    <div class="container">
        <div class="row ">
            <div class="col-md-8 mx-auto">
                <div class="section-title need_helpm">
                    <h2 class="wow fadeInUp">Need More Help?</h2>
                    {{-- <p class="wow fadeInUp" data-wow-delay="0.3s">Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit, sed do eiusmod tempor.</p> --}}
                </div>
            </div>
        </div>
        <div class="row gy-lg-0 gy-4 cnt_main_col">
            <div class="col-lg-4">
                <div class="feature-card-widget-4 wow fadeInUp" data-wow-delay="0.1s">
                    <img src="{{ asset('public/assets/img/contact/help-icon-1.svg')}}" alt="icon">
                    <h5 class="mt-4 mb-10">Articles & Guides</h5>
                    <p>100+ articles to get the information you need when you need it.</p>
                    <a href="#" class="theme-btn theme-btn-outlined mt-30">Visit Knowledge Base</a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="feature-card-widget-4 wow fadeInUp" data-wow-delay="0.3s">
                    <img src="{{ asset('public/assets/img/contact/help-icon-2.svg')}}" alt="icon">
                    <h5 class="mt-4 mb-10">Technical Support</h5>
                    <p>If you ever need help, you can chat directly with our support team!</p>
                    <a href="#" class="theme-btn theme-btn-outlined mt-30">Chat With Support</a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="feature-card-widget-4 wow fadeInUp" data-wow-delay="0.5s">
                    <img src="{{ asset('public/assets/img/contact/help-icon-3.svg')}}" alt="icon">
                    <h5 class="mt-4 mb-10">Social Media Support</h5>
                    <p>Doing customer support on social media requires a dedicated strategy. </p>
                    <div class="social-button mt-35 mb-10">
                        <a href="https://www.facebook.com/profile.php?id=61551657432240&mibextid=LQQJ4d"><i
                                class="fab fa-facebook-f"></i></a>
                        <a href="https://x.com/loansuvidhaserv?s=21"><i class="fab fa-twitter"></i></a>
                        <a
                            href="https://www.linkedin.com/feed/update/urn:li:activity:7118487451509112832?updateEntityUrn=urn%3Ali%3Afs_feedUpdate%3A%28V2%2Curn%3Ali%3Aactivity%3A7118487451509112832%29"><i
                                class="fab fa-linkedin-in"></i></a>
                        <a href="https://youtube.com/@loansuvidha16?si=QOo9r4Ck7Ct2AdoG"><i
                                class="fa-brands fa-youtube"></i></a>
                        <a href="https://instagram.com/loansuvidhaservices?igshid=MzRlODBiNWFlZA=="><i
                                class="fa-brands fa-instagram"></i></a>
                        <a href="https://g.co/kgs/6jnWsBs"><i class="fa-brands fa-google"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- need more help end -->




<!-- footer -->
@endsection

@section('scripts')
<script>
    $(document).ready(function () {
        $('select[name="assistance_type"]').on('change', function () {

            var assistance_type = $(this).val();
            $('#price_dynamic').empty();
            $('.pay_amount').val('');

            if (assistance_type == '6') {
                $('#price_dynamic').append('₹599');
                $('.pay_amount').val('599');
            } else if (assistance_type == '5') {
                $('#price_dynamic').append('₹499');
                $('.pay_amount').val('499');
            } else {
                $('#price_dynamic').append('₹99');
                $('.pay_amount').val('99');
            }
        });

    });

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