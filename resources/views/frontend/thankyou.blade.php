@extends('layouts.app')

@section('content')
<!-- Header end-->

<section class="thankyou_pg_sec">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-12 col-md-12 col-12">
                <div class="thankyou_page_main">
                    <div class="thankyou_page_img">
                        <img src="{{asset('public/assets/img/thankyou_img__.jpg')}}" alt="thankyou_img_" class="img-fluid">
                    </div>
                </div>



            </div>
        </div>

        <div class="row text-center mt-4">
            <div class="col">
                <h4 class="payment-succes">Payment Succesfull!!</h4>
            </div>
        </div>

        <div class="row text-center ">

            <div class="col-lg-6 ">
                Amount Paid
            </div>
            <div class="col-lg-6">
                ₹{{ $input['amount'] / 100 }}
            </div>
        </div>


        <div class="row text-center ">

            <div class="col-lg-6 mt-2 ">
                TransactionId
            </div>
            <div class="col-lg-6">
                {{ $input['transactionId'] }}
            </div>
        </div>


        <div class="row text-center ">

            <div class="col-lg-6 mt-2 ">
                ReferenceId
            </div>
            <div class="col-lg-6">
                {{ $input['providerReferenceId'] }}
            </div>
        </div>

    </div>
</section>

<!-- footer -->
@endsection
