@extends('layouts.app')


@section("title", "Assistance Type")
@section("description", "Assistance Type Form")

@section('links')
<meta name="robots" content="noindex" />
@endsection

@section('content')

        <!-- BreadCrumb start -->
        <section class="breadcrumb-area">
            <div class="breadcrumb-widget-3 pt-200">

            </div>
        </section>
        <!-- BreadCrumb end -->

        <!-- Get In Touch start -->
        <section class="pt-50 pb-50 get-touch-area bg_white">
            <div class="container">
                <div class="row gy-4 gy-lg-0 justify-content-between">

                    <div class="col-lg-6 mx-auto">
                        <div class="contact-form-widget">
                            <form action="{{ route('phonePe') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="fill_fromimp">
                                        <h5>Fill Up Informations</h5>
                                    </div>
                                    <div class="col-md-6">

                                        <label for="f-name">Full Name</label>
                                        <input type="text" id="f-name" name="name" class="form-control" placeholder="What's your name?" required>
                                    </div>
                                    <div class="col-md-6 mt-20 mt-md-0">
                                        <label for="email-address">Email</label>
                                        <input type="email" id='email-address' name="email" class="form-control" placeholder="yourname@example.com" required>
                                    </div>
                                    <div class="col-md-12 mt-20">
                                        <label for="form-sub">Phone</label>
                                        <input type="tel" id="f-name" name="phone" class="form-control" placeholder="What's your phone?" maxlength="10" required>
                                    </div>
                                    <div class="col-md-12 mt-20">

                                        <select class="form-select" name="assistance_type" aria-label="Default select example" required>
                                            <option selected value="">Loan Assistance Type</option>
                                            <option value="1">Loan </option>
                                            <option value="2">Insurance</option>
                                            <option value="3">Mutual Fund</option>
                                            <option value="4">Buy and sell Property </option>
                                            <option value="5">Improve Your Cibil </option>
                                            <option value="6">Become A Partner</option>
                                            <option value="7">Legal Consultancy</option>
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
                                        <button type="submit" class="theme-btn theme-btn-lg w-100">Pay Now <span class="span_rupee" id="price_dynamic">₹99</span></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

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