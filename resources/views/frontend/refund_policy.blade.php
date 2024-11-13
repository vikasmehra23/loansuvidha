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

@section('content')
<section class="privacy_Codition_bannner " style="background-image: linear-gradient(rgb(46 46 46 / 4%), rgb(0 0 0 / 31%)), url({{asset('public/assets/img/refunds_bg_.jpg')}});">
   <div class="container">
      <div class="privacy_condition_under">
         <div class="txt_privacy_main">
            <h1>Refund Policy</h1>
         </div>
      </div>
   </div>
</section>
<section class="privacy_main_div ">
   <div class="container">
      <div class="row">
         <div class="under_txt_">
            <h2>Refund Policy</h2>
           

          <p>We strongly advise all members of Loan Suvidha – whether Lenders or Borrowers – to thoroughly acquaint themselves with our cancellation and refund policy before engaging with any of our services. It's imperative to understand that we do not accept payments from overseas via wire transfer or any other method to our bank account.</p>
          <p>In the event that services need to be canceled, whether due to unavoidable circumstances or otherwise, we kindly request that you notify us in writing through our dedicated cancellation portal at https://www.loansuvidhaa.com/Cancellation. It's essential to initiate cancellation requests within 24 hours of agreeing to our terms. Please note that cancellation charges will be applicable from the date we receive your written notification, as stipulated in the Loan Agreement.</p>
            <p>Refunds, if deemed applicable under our refund policy, will be processed within a timeframe of 2-4 weeks in accordance with standard Indian banking procedures. It's crucial to understand that our refund policy is subject to change, and any alterations will be implemented only after undergoing a thorough legal review. Prior notification of policy amendments will be prominently displayed on our website, and a legally-compliant notification period will be observed before the enforcement of any changes. If you opt not to accept the revised policy, we kindly urge you to abstain from utilizing our services and notify us accordingly. Continued utilization of our services following the effective date of the updated policy will signify your acceptance of its terms.</p>
            <p>Please be advised that Loan Suvidha reserves the right to exercise discretion in refusing or canceling any order. Additionally, we may necessitate additional verification or information prior to processing any instructions or registering you as a lender or borrower on our platform. It's essential for both borrowers and lenders to recognize that negative third-party verification reports may have an adverse impact on the funding process. Moreover, the absence of sufficient information or verifiable details may lead to rejection at any stage of the process.</p>
            <p>This elaborated version maintains clarity and professionalism while providing comprehensive details regarding cancellation, refunds, and policy updates.</p>

         </div>
      </div>
   </div>
</section>
@endsection