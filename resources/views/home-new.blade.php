@extends('layouts.app')
@if (!empty($metaTitle->value))
    @section("title", $metaTitle->value)
@else
    @section("title", "Loan Suvidhaa")
@endif
@if (!empty($metaDesc->value))
    @section("description", $metaDesc->value)
@else
    @section("description", "Loan Suvidhaa")
@endif
@if (!empty($metaKey->value))
    @section("keywords", $metaKey->value)
@else
    @section("keywords", "Loan Suvidhaa")
@endif

@section('style')
    <style>
        .slick-slider .element {
            height: 100%;
            width: 100px;
            background-color: #000;
            color: #fff;
            border-radius: 5px;
            display: inline-block;
            margin: 0px 10px;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            font-size: 20px;
        }

        .slick-slider .slick-disabled {
            opacity: 0;
            pointer-events: none;
        }

        /*----start whatsap---*/

        section.whatsap_Sec #whatsapp {
            position: fixed;
            bottom: 80px;
            right: 20px;
            z-index: 999;
        }

        section.whatsap_Sec svg {
            width: 80px;
            display: inline-block;
            vertical-align: middle;
            filter: drop-shadow(0 1px 4px rgba(0, 0, 0, .4));
        }

        section.whatsap_Sec circle {
            fill: #25d366;
        }

        section.whatsap_Sec path {
            fill: #fff;
        }

        section.whatsap_Sec #whatsapp a {
            padding: 20px 0;
        }


        section.whatsap_Sec #whatsapp a::before {
            content: 'Help For Loan Suvidha';
            display: inline-block;
            vertical-align: middle;
            padding: 5px 10px;
            margin-right: 10px;
            color: rgba(0, 0, 0, .8);
            background: white;
            border: 1px solid #ccc;
            border-radius: 20px;
            filter: drop-shadow(0 1px 4px rgba(0, 0, 0, .4));
            transition: .3s ease;
            opacity: 0;
        }

        section.whatsap_Sec #whatsapp:hover a::before {
            opacity: 1;
        }

        /*----end whatsap----*/
    </style>
@endsection
@section('content')
<div id="home-page">
    <home-component></home-component>
</div>
 @include('frontend.popup.homepopup')
    <div class="modal fade" id="home_pay_form" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="col-lg-12 col-md-12 col-12 mt-md-3">
                        <div class="title_2 loan_Assi_h2">
                            <h3>Get Personal Loan</h3>
                            <p>Fill The Enquiry Form Now</p>
                        </div>
                        <form action="{{ route('phonePe') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <input aria-label="Full name" name="name" class="form-control"
                                        placeholder="Full Name" type="text" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <input aria-label="Email" name="email" class="form-control" placeholder="Email"
                                        type="email" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <input aria-label="Phone" name="phone" class="form-control" placeholder="Phone No"
                                        type="number" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <select class="form-select" name="assistance_type"
                                        aria-label="Default select example" required>
                                        <option value="1">Loan Assistance</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    @php
                                        $states = App\Models\State::orderBy('name', 'ASC')->get();
                                    @endphp
                                    <select class="form-select" name="state" aria-label="Default select example"
                                        required>
                                        <option selected value="">State</option>
                                        @foreach ($states as $state)
                                            <option class="form-control" value="{{ $state->id }}">
                                                {{ $state->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <select class="form-select" name="city" aria-label="Default select example"
                                        required>
                                        <option selected value="">City</option>
                                    </select>
                                </div>
                            </div>
                            <div class="btn_div_buttons">
                                <div class="btn_form_submit">
                                    <input type="hidden" name="pay_amount" class="pay_amount" value="99">
                                    <button type="submit" class="submit">Pay<span class="span_rupee"
                                            id="price_dynamic">₹99</span></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        function home_pay_form_fun() {
            $('#home_pay_form').modal('show');
        }
        $(document).ready(function() {

             setTimeout(function () {
                $('#bannerModal').modal('show');
             }, 7000);
            

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

            $('select[name="assistance_type"]').on('change', function() {

                var assistance_type = $(this).val();
                $('#price_dynamic').empty();
                $('.pay_amount').val('');

                if (assistance_type == '6') {
                    $('#price_dynamic').append('₹590');
                    $('.pay_amount').val('590');
                } else if (assistance_type == '5') {
                    $('#price_dynamic').append('₹499');
                    $('.pay_amount').val('499');
                } else {
                    $('#price_dynamic').append('₹99');
                    $('.pay_amount').val('99');
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

            responsive: [{
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

