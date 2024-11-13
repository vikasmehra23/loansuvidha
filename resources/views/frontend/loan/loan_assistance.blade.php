@extends('layouts.app')
@if(!empty($metaTitle->value))
@section("title", $metaTitle->value)
@else
@section("title", "Loan Assistant")
@endif
@if(!empty($metaDesc->value))
@section("description", $metaDesc->value)
@else
@section("description", "Loan Assistant description")
@endif
@if(!empty($metaKey->value))
@section("keywords", $metaKey->value)
@else
@section("keywords", "Loan Assistant key")
@endif
@section('links')
<link rel="canonical" href="https://loansuvidhaa.com/loan-assistance" />
@endsection

@section('content')
<div id="myModal" class="modal">
   <div class="modal-content">
      <span class="close">&times;</span>
      <div class="container">
         <div class="row align-items-center">
            <div class="col-md-12">
               <div class="img_popup">
                  <img src="{{ asset('public/assets/img/popup_lan_all_page.jpg') }}" alt="" class="img-fluid ">
               </div>
            </div>
            <div class="">
               <div class="main_popup_cntnt">
                  <div class="popup_btn">
                     <!-- <a href="tel:+91-9873370717">Call Now</a> -->
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
<section class="health_insur_sec loan_Assistant_banner_f">
   <div class="container">
      <div class="row justify-content-between gx-0">
         <div class="col-lg-6 col-md-12 col-12">
            <div class="health_insur_main">
               <div class="health_insur_hd">
                  <h1>Loan Assistance (Loan Assist)</h1>
                  <p>
                     In the maze of financial uncertainties, Loan Suvidha emerges as a guiding light,
                     offering comprehensive <a href="https://loansuvidhaa.com/loan-assistance" class="loan_main">loan assistance</a> or <a href="https://loansuvidhaa.com/loan-assistance" class="loan_main">loan assist</a> services tailored to meet diverse needs.
                     With a commitment to ease and convenience, Loan Suvidha stands as a reliable
                     partner for individuals and businesses seeking financial support .
                  </p>
               </div>
               <div class="row align-items-center pb-3">
                  <div class="col-lg-8 col-md-8 col-12">
                     <div class="health_insur_icontxt">
                        <ul>
                           <li>
                              <div class="health_insur_icon">
                                 <!-- <i class="fa-solid fa-location-dot">
                                    </i> -->
                                 <img src="{{ asset('public/assets/img/i2.png') }}" alt="">
                              </div>
                              <div class="health_insur_txt">
                                 <h6>
                                    Tailored Solutions
                                 </h6>
                              </div>
                           </li>
                           <li>
                              <div class="health_insur_icon">
                                 <!-- <i class="fa-solid fa-user"></i> -->
                                 <img src="{{ asset('public/assets/img/i3.png') }}" alt="">
                              </div>
                              <div class="health_insur_txt">
                                 <h6>Streamlined Application Process</h6>
                              </div>
                           </li>
                           <li>
                              <div class="health_insur_icon">
                                 <!-- <i class="fa-solid fa-clock">
                                    </i> -->
                                 <img src="{{ asset('public/assets/img/i1.png') }}" alt="">
                              </div>
                              <div class="health_insur_txt">
                                 <h6>Quick Disbursement</h6>
                              </div>
                           </li>
                           <li>
                              <div class="health_insur_icon">
                                 <img src="{{ asset('public/assets/img/i4.png') }}" alt="">
                              </div>
                              <div class="health_insur_txt">
                                 <h6>Competitive Interest Rates</h6>
                              </div>
                           </li>
                           <li>
                              <div class="health_insur_icon">
                                 <img src="{{ asset('public/assets/img/i5.png') }}" alt="">
                              </div>
                              <div class="health_insur_txt">
                                 <h6>Transparent Policies</h6>
                              </div>
                           </li>
                           <li>
                              <div class="health_insur_icon">
                                 <img src="{{ asset('public/assets/img/i6.png') }}" alt="">
                              </div>
                              <div class="health_insur_txt">
                                 <h6>Dedicated Customer Support</h6>
                              </div>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-5 col-md-12 col-12 main_col mt-md-3">
            <div class="title_2 loan_Assi_h2">
               <h2>Get Loan Assistance</h2>
               <p>Fill The Enquiry Form Now</p>
            </div>
            <form action="{{ route('phonePe') }}" method="POST">
               @csrf
               <div class="row">
                  <div class="col-md-12">
                     <label></label>
                     <input aria-label="First name" name="name" class="form-control" placeholder="Full Name" type="text"
                        required>
                  </div>
               </div>
               <div class="col-md-12">
                  <label></label>
                  <input aria-label="Email" name="email" class="form-control" placeholder="Email" type="email" required>
               </div>
               <div class="col-md-12">
                  <label></label>
                  <input type="tel" name="phone" class="form-control" maxlength="10" placeholder="Phone No"
                     type="number" required>
               </div>
               <div class="row">
                  <div class="col-md-12">
                     <label></label>
                     <select class="form-control" name="assistance_type" aria-label="Default select example" required>
                        <option selected value="1">Loan Assistance</option>
                     </select>
                     {{-- <input aria-label="Assistance type" name="assistance_type" value="1" class="form-control"
                        placeholder="Loan Assistance" type="text" required> --}}
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
                     {{-- <a href="" class="submit">Pay Now <span class="span_rupee">₹99</span></a> --}}
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
               <h2>What Is Loan Assistance?</h2>
               <p>
                  Loan assistance  or <a href="https://loansuvidhaa.com/loan-assistance">(Loan Assist)</a> generally refers to the support and guidance provided to individuals or
                  businesses seeking financial help. It encompasses a range of services aimed at simplifying the
                  loan (borrowing) process and helping borrowers navigate through various loan options available
                  in the market. <a href="https://loansuvidhaa.com/loan-assistance">(Loan Assist)</a>
                  Loan assistance may include personalized advice on choosing the right type of loan, assistance
                  with completing loan applications,
                  evaluating eligibility criteria, and understanding the terms and conditions associated with
                  borrowing.
               </p>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="topr_buy_insurance">
   <div class="container">
      <div class="topr_buy_insurance_hd main_text_a">
         <h2>Top Reasons To Choose Loan Assistance<br></h2>
      </div>
      <div class="row">
         <div class="col-lg-6 col-md-12 col-12">
            <div class="topr_buy_insurance_img text-center ">
               <img src="{{ asset('public/assets/img/reason_web.webp') }}" alt class="img-fluid ">
            </div>
         </div>
         <div class="col-lg-6 col-md-12 col-12">
            <div class="topr_buy_insurance_hd">
               <!-- <h2>Top Reasons To Choose Loan Assistance<br>(With Loan Suvidha)</h2> -->
               <p>Financial challenges are increasing rapidly, making unexpected expenses burdensome. If facing
                  any financial emergency or unplanned expenditure, you are taking a risk of depleting your
                  savings.
                  Securing financial assistance through a loan can offer a lifeline during such situations.
                  Explore the top reasons to consider loan assistance below.
               </p>
            </div>
            <div class="health_insur_plan  dots_icon_main_s">
               <ul>
                  <li>
                     <p>Immediate Financial Support</p>
                     <!-- <b>Beat Financial Challenges - </b>Loan assistance provides
                        support in managing unexpected expenses, ensuring you can cover
                        various financial needs and emergencies. -->
                  </li>
                  <li>
                     <p>Preservation of Savings</p>
                     <!-- <b>Expert Guidance -</b>It
                        Benefit from expert advice and guidance throughout the loan
                        application process, ensuring informed decisions and successful outcomes. -->
                  </li>
               </ul>
               <ul>
                  <li>
                     <p>Quick Application Process</p>
                  </li>
                  <li>
                     <p>Building Credit History</p>
                  </li>
               </ul>
               <ul>
                  <li>
                     <p>Instant Loan <br>Approval</p>
                  </li>
                  <li>
                     <p>Convenience and Accessibility</p>
                  </li>
               </ul>
               </ul>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="benefits_buying_insur">
   <div class="container">
      <div class="row">
         <div class="col-lg-12 col-md-12 col-12">
            <div class="benefits_buying_insur_main">
               <h2>
                  Benefits Of Buying Loans Online
               </h2>
               <p>
                  Purchasing a loan online offers numerous advantages. Here's a look at them
               </p>
            </div>
            <div class="benefits_buying_insur_online">
               <ul>
                  <li>
                     <b>Easy Comparison - </b>Comparing loan options from various lenders online allows for
                     informed
                     decision-making without the need for branch visits or agent appointments.
                  </li>
                  <li>
                     <b>More Convenient – </b>It is more
                     convenient to buy the policy online as you
                     do not have to visit the branch of the
                     insurance company or take an appointment to
                     meet an insurance agent.
                  </li>
                  <li>
                     <b>Convenience - </b>Online loan applications eliminate the need to visit physical
                     branches or schedule meetings with agents, streamlining the process for borrowers.
                  </li>
                  <li>
                     <b> Online Discounts - </b>Enjoy discounts on loan premiums when applying online, as lenders
                     save on operational costs, translating to lower premiums.
                  </li>
                  <li>
                     <b> Lower Costs - </b>Online loans typically come with lower processing fees and interest
                     rates compared to traditional loan options.
                  </li>
                  <li>
                     <b> Minimal Paperwork - </b>Applying for a loan online involves minimal to zero paperwork,
                     reducing administrative hassles for borrowers.
                  </li>
                  <li>
                     <b> Digital Payment Options - </b> Secure digital payment methods make premium payments and
                     loan transactions safe and convenient for borrowers..
                  </li>
                  <li>
                     <b>Time-Saving – </b>Online loan applications are processed quickly, with policies issued
                     within minutes of approval, saving borrowers valuable time.
                  </li>
               </ul>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="helth pt-0">
   <div class="container">
      <div class="helth_benifits_heading">
         <h3>Benefits of Utilising Loan Assistance <a href="https://loansuvidhaa.com/loan-assistance">(Loan Assist)</a> Services</h3>
         <p>Exploring loan assistance services online presents various advantages. Here are some key points to
            consider
         </p>
      </div>
      <div class="row align-items-center ">
         <div class="col-lg-3 col-md-6 col-12">
            <div class="helth_benifits">
               <div class="helth_icon">
                  <img src="{{ asset('public/assets/img/clock (1).png') }}" alt>
               </div>
               <div class="work_box_cnt">
                  <h3>Immediate Access to Funds</h3>
                  <p> Loan assistance provides quick access to funds, enabling borrowers to address urgent
                     financial needs or seize time-sensitive opportunities.
                  </p>
                  <!-- <a href="#">Read More</a> -->
               </div>
            </div>
         </div>
         <div class="col-lg-3 col-md-6 col-12">
            <div class="helth_benifits">
               <div class="helth_icon">
                  <img src="{{ asset('public/assets/img/funding.png') }}" alt>
               </div>
               <div class="work_box_cnt">
                  <h3>Flexible Repayment Options</h3>
                  <p>Many loan products offer flexible repayment terms, allowing borrowers to choose a repayment
                     schedule that aligns with their financial capabilities and objectives.
                  </p>
                  <!-- <a href="#">Read More</a> -->
               </div>
            </div>
         </div>
         <div class="col-lg-3 col-md-6 col-12">
            <div class="helth_benifits">
               <div class="helth_icon">
                  <img src="{{ asset('public/assets/img/health-insurance (3).png') }}" alt>
               </div>
               <div class="work_box_cnt">
                  <h3>Ability to Finance Large Expenses</h3>
                  <p> Loans make it feasible to fund significant expenses such as home renovations, business
                     expansions, or major purchases without depleting existing resources.
                  </p>
                  <!-- <a href="#">Read More</a> -->
               </div>
            </div>
         </div>
         <div class="col-lg-3 col-md-6 col-12">
            <div class="helth_benifits">
               <div class="helth_icon">
                  <img src="{{ asset('public/assets/img/calendar.png') }}" alt>
               </div>
               <div class="work_box_cnt">
                  <h3>Preservation of Savings</h3>
                  <p>By opting for a loan, individuals and businesses can preserve their savings and maintain
                     liquidity for other purposes or emergencies.
                  </p>
                  <!-- <a href="#">Read More</a> -->
               </div>
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
               <p class="card-text">Loan Suvidha provided efficient loan assistance services. Their
                  expertise and streamlined process made it easy for me to get the support I needed
                  without any complications.
               </p>
               <div class="mainlx_sl">
                  <div class="main_under_slicky">
                     <img src="public/assets/img/type_girl.png" alt="">
                     <div class="neetu_texture">
                        <h5 class="card-title fw-bold">Neelam Kumari </h5>
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
               <p class="card-text">With Loan Suvidha, obtaining loan assistance was a straightforward
                  experience. Their team's professionalism and prompt service ensured a smooth process
                  from start to finish.
               </p>
               <div class="mainlx_sl">
                  <div class="main_under_slicky">
                     <img src="public/assets/img/loan_img_ass.png" alt="">
                     <div class="neetu_texture">
                        <h5 class="card-title fw-bold">Nitin Ahuja </h5>
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
               <p class="card-text">I had a positive experience with Loan Suvidha for loan assistance.
                  Their knowledgeable staff and efficient approach made the entire process hassle-free and
                  effective.
               </p>
               <div class="mainlx_sl">
                  <div class="main_under_slicky">
                     <img src="public/assets/img/main_cccc.png" alt="">
                     <div class="neetu_texture">
                        <h5 class="card-title fw-bold">Naresh Kumar</h5>
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
                        What are the benefits of utilizing loan assistance services, especially through Loan
                        Suvidha?
                     </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse " aria-labelledby="headingOne"
                     data-bs-parent="#accordionExample">
                     <div class="accordion-body">
                        <p>Loan assistance services provide immediate access to funds, flexible repayment options,
                           the ability to finance large expenses, and preservation of savings, ensuring borrowers
                           receive comprehensive support tailored to their financial needs.</p>
                     </div>
                  </div>
               </div>
               <div class="accordion-item">
                  <h2 class="accordion-header" id="headingTwo">
                     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        How can I calculate my loan details and apply for a loan through Loan Suvidha?
                     </button>
                  </h2>
                  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                     data-bs-parent="#accordionExample">
                     <div class="accordion-body">
                        <p>Loan Suvidha offers a loan calculator tool for estimating loan details like total
                           amount, EMI, and interest payable. After calculating, borrowers can apply online through
                           Loan Suvidha's streamlined application process.</p>
                     </div>
                  </div>
               </div>
               <div class="accordion-item">
                  <h2 class="accordion-header" id="headingThree">
                     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        What do customers say about Loan Suvidha's services?
                     </button>
                  </h2>
                  <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                     data-bs-parent="#accordionExample">
                     <div class="accordion-body">
                        <p> Customers like Neetu Bhist and Vishal Ahuja have praised Loan Suvidha for its continuous
                           support, invaluable assistance, and instrumental role in their financial success and
                           business growth.</p>
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
                        data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        What is loan assistance, and how does it help individuals and businesses?
                     </button>
                  </h2>
                  <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                     data-bs-parent="#accordionFlushExample">
                     <div class="accordion-body">Loan assistance encompasses a range of services aimed at simplifying
                        the loan
                        process and helping borrowers navigate various loan options. It includes
                        personalized advice, application support, eligibility evaluation, and understanding
                        loan terms and conditions.</div>
                  </div>
               </div>
               <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingTwo">
                     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                        Why should I choose loan assistance, particularly with Loan Suvidha?
                     </button>
                  </h2>
                  <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
                     data-bs-parent="#accordionFlushExample">
                     <div class="accordion-body"> Loan assistance provides immediate financial support, preserves
                        savings, offers a quick
                        application process, helps build credit history, and ensures instant loan approval, all
                        while providing convenience and accessibility tailored to your needs.</div>
                  </div>
               </div>
               <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingThree">
                     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                        What are the benefits of buying loans online?
                     </button>
                  </h2>
                  <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree"
                     data-bs-parent="#accordionFlushExample">
                     <div class="accordion-body">
                        <p>Purchasing loans online offers advantages such as easy comparison, convenience, online
                           discounts, lower costs, minimal paperwork, digital payment options, and time-saving
                           processing, providing a hassle-free experience for borrowers.</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>

      </div>
   </div>
</section>
@include('modals.pay_form')
<!-- footer -->
@endsection
@section('scripts')
<script>
   function home_pay_form_fun() {
      $('#pay_modal_form').modal('show');
   }
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