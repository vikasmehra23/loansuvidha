@extends('layouts.app')

@if (!empty($metaTitle->value))
    @section("title", $metaTitle->value)
@else
    @section("title", "Loan Suvidhaa | Property sale")
@endif

@if (!empty($metaDesc->value))
    @section("description", $metaDesc->value)
@else
    @section("description", "Property sale desc")
@endif

@if (!empty($metaKey->value))
    @section("keywords", $metaKey->value)
@else
    @section("keywords", "Loan-Suvidhaa, Property-sale")
@endif
@section('links')
<link rel="canonical" href="https://loansuvidhaa.com/property-sale" />
@endsection

@section('content')
    <section class="loan-form-page loan_form_page_bg">
        <div class="container">
            <div class="row justify-content-between gx-0">
                <div class="col-md-6">
                    <div class="loan-page-heading">
                        <h1>Your Guide To <span>Buying And Selling</span> Property .</h1>
                    </div>
                    <div class="loan-page-text">
                        <p>Explore the ins and outs of property transactions with Loan Suvidha by your side. From buying to
                            selling, we've got you covered every step of the way.</p>
                    </div>

                    <!-- <div class="loan-page-btn">
                                    <button>Find Out More</button>
                                </div> -->
                </div>

                <div class="col-lg-5 col-md-12 col-12 main_col">

                    <div class="title_2 loan_Assi_h2">
                        <h2>Get Property Loan</h2>
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
                                    <option selected value="4">Property</option>
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


    <section class="Property-sale-and-purchase">
        <div class="container">

            <div class="property-sale-and-purchase-tittle">
                <h2>Property Sale / Purchase</h2>
            </div>
            <div class="row row-cols-lg-4 row-cols-md-3 row-cols-1">

                <div class="col-lg-4 col-md-6 col-12">
                    <div class="purchase-card">
                        <div class="purchase-img">
                            <img class="prop-img" src="{{asset('public/assets/img/buy.jpg')}}" alt="">
                        </div>
                        <div class="property-status">
                            <span>Buy Properties</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="purchase-card">
                        <div class="purchase-img">
                            <img class="prop-img" src="{{asset('public/assets/img/Rural-Properties..png')}}" alt="">
                        </div>
                        <div class="property-status">
                            <span>Rural and Urban Properties.</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="purchase-card">
                        <div class="purchase-img">
                            <img class="prop-img" src="{{asset('public/assets/img/plot-sale.jpeg')}}" alt="">
                        </div>
                        <div class="property-status">
                            <span>Plots Sale / Purchase.</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="purchase-card">
                        <div class="purchase-img">
                            <img class="prop-img" src="{{asset('public/assets/img/buy-4.avif')}}" alt="">
                        </div>
                        <div class="property-status">
                            <span>Commercial Properties.</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12">
                    <div class="purchase-card">
                        <div class="purchase-img">
                            <img class="prop-img" src="{{asset('public/assets/img/sale-1.webp')}}" alt="">
                        </div>
                        <div class="property-status">
                            <span>Sale Properties.</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12">
                    <div class="purchase-card">
                        <div class="purchase-img">
                            <img class="prop-img" src="{{asset('public/assets/img/rent.avif')}}" alt="">
                        </div>
                        <div class="property-status">
                            <span>Rent Properties.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="purchase-sale-purchase-cities">
        <div class="container">
            <div class="purchase-sale-purchase-cities-tittle">
                <h2>Property Sale / Purchase Cities</h2>
            </div>
            <div class="row row-cols-lg-4 row-cols-md-3 row-cols-1">
                <div class=" col py-3">
                    <div class="property-city-name">
                        <span>Property in Delhi</span>
                    </div>
                </div>
                <div class=" col py-3">
                    <div class="property-city-name">
                        <span>Property in Gurgoan.</span>
                    </div>
                </div>
                <div class=" col py-3">
                    <div class="property-city-name">
                        <span>Property in haryana.</span>
                    </div>
                </div>
                <div class=" col py-3">
                    <div class="property-city-name">
                        <span>Property in Faridabad.</span>
                    </div>
                </div>
                <div class=" col py-3">
                    <div class="property-city-name">
                        <span>Property in Farrukhnagar.</span>
                    </div>
                </div>
                <div class=" col py-3">
                    <div class="property-city-name">
                        <span>Property in Noida.</span>
                    </div>
                </div>
                <div class=" col py-3">
                    <div class="property-city-name">
                        <span>Property in Uttar Pradesh.</span>
                    </div>
                </div>
                <div class=" col py-3">
                    <div class="property-city-name">
                        <span>Property in Mumbai.</span>
                    </div>
                </div>
                <div class=" col py-3">
                    <div class="property-city-name">
                        <span>Property in Pune.</span>
                    </div>
                </div>

                <div class=" col py-3">
                    <div class="property-city-name">
                        <span>Property in Ghaziabad.</span>
                    </div>
                </div>

                <div class=" col py-3">
                    <div class="property-city-name">
                        <span>Property in Nagpur.</span>
                    </div>
                </div>

                <div class=" col py-3">
                    <div class="property-city-name">
                        <span>Property in Aurangabad</span>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="get_the_sol_sec   properly_ghghh">
        <div class="container">
            <div class="row text-center pb-2">
                <div class="become_partner_hdddd">
                    <h2>Why You Should Buy A Property From Loan Suvidha?</h2>
                </div>
            </div>
            <div class="row border_partner">
                <div class="col-lg-6 col-md-12 col-12">
                    <!-- <div class="become_partner_img">
                           <video width="500px" height="500px" controls="">
                               <source src="{{asset('public/assets/video/loan-video.mp4')}}" type="video/mp4">
                           </video>
                           
                           </div> -->
                    <section class=" partner_blog_video">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-md-12  feedback_na">
                                    <div class="row align-items-center ">
                                        <div class="multiple-itemmm owl-theme">
                                            <div class="item">
                                                <div class="ourl_blog mt-2 mb-2">
                                                    <div class="coverage_imggg">
                                                        <img src="{{asset('public/assets/img/potential_1.jpg')}}" alt=""
                                                            class="img-fluid ">
                                                        <h2 class="jaypee_txt">Jaypee Greens Project </h2>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="item">
                                                <div class="ourl_blog mt-2 mb-2">
                                                    <div class="coverage_imggg">
                                                        <img src="{{asset('public/assets/img/potential_2.avif')}}" alt=""
                                                            class="img-fluid ">
                                                        <h2 class="jaypee_txt">AVS Orchard Project </h2>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="item">
                                                <div class="ourl_blog mt-2 mb-2">
                                                    <div class="coverage_imggg">
                                                        <img src="{{asset('public/assets/img/potential_3.avif')}}" alt=""
                                                            class="img-fluid ">
                                                        <h2 class="jaypee_txt">Perfect Apartments Project </h2>
                                                    </div>


                                                </div>
                                            </div>


                                            <div class="item">
                                                <div class="ourl_blog mt-2 mb-2">
                                                    <div class="coverage_imggg">
                                                        <img src="{{asset('public/assets/img/potential_4.jpg')}}" alt=""
                                                            class="img-fluid ">
                                                        <h2 class="jaypee_txt">Paramount Project </h2>
                                                    </div>


                                                </div>
                                            </div>

                                            <div class="item">
                                                <div class="ourl_blog mt-2 mb-2">
                                                    <div class="coverage_imggg">
                                                        <img src="{{asset('public/assets/img/potential_5.avif')}}" alt=""
                                                            class="img-fluid ">
                                                        <h2 class="jaypee_txt">VKG Central Park Apartment, Project </h2>
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
                        <div class="become_partner_txt py-4">
                            <h6 class="perre">
                                <strong>Protecting your investment is our priority. We ensure transparency,
                                    legality, and authenticity in all property transactions. Trust us for a
                                    secure property buying experience.</strong>
                            </h6>
                            <ol type="1">
                                <li class="py-2"><strong>Verify Ownership:</strong> Ensure the seller legally owns the
                                    property by checking land records and title deeds.
                                </li>
                                <li class="py-2"><strong>Research:</strong> Conduct thorough background checks on the
                                    seller and property history.
                                </li>
                                <li class="py-2"><strong>Use Legal Assistance:</strong> Hire a reputable lawyer to review
                                    contracts and transaction details.
                                </li>
                                <li class="py-2"><strong>Visit the Property: </strong> Insist on visiting the property in
                                    person to confirm its existence and condition.
                                </li>
                                <li class="py-2"><strong>Secure Payments: </strong> Avoid cash transactions and use
                                    secure payment methods like bank transfers.
                                </li>
                            </ol>
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
                                    How can I get started with buying or selling property through Loan Suvidha?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse " aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p> Simply fill out the enquiry form with your details and property preferences, and our
                                        team will guide you through the process.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Can Loan Suvidha help me find the latest property projects?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Yes, Loan Suvidha provides information on the latest property projects, including
                                        apartments, villas, and more, to help you make informed decisions.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    What are the benefits of choosing Loan Suvidha for property transactions?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p> Loan Suvidha offers expertise, guidance, and a wide range of property options,
                                        ensuring
                                        a hassle-free experience and helping you find the perfect property investment.</p>
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
                                    How can Loan Suvidha assist in property transactions?
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>Loan Suvidha offers comprehensive support from buying to selling properties, ensuring
                                        a seamless process at every stage.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                    aria-controls="flush-collapseTwo">
                                    What types of properties can I buy or sell with Loan Suvidha?
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>You can buy or sell rural and urban properties, plots, commercial properties, as well
                                        as
                                        rent or sell properties through Loan Suvidha's services.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseThree" aria-expanded="false"
                                    aria-controls="flush-collapseThree">
                                    Which cities does Loan Suvidha cover for property transactions?
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>Loan Suvidha facilitates property transactions in cities like Delhi, Gurgaon,
                                        Faridabad,
                                        Noida, Mumbai, Pune, Ghaziabad, Nagpur, Aurangabad, and more.</p>
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
    <script>
        $(document).ready(function() {

            $('select[name="state"]').on('change', function() {
                var state_id = $(this).val();
                if (state_id) {
                    $.ajax({
                        url: "{{ url('/city/') }}/" + state_id,
                        type: "GET",
                        dataType: "json",
                        success: function(data) {
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
