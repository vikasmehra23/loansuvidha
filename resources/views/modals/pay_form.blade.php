<div class="modal fade" id="pay_modal_form" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-backdrop='static'>
                        <div class="modal-dialog">

                            <div class="modal-content">

                                <div class="modal-header">


                                    <button type="button" class="btn-close pay_model_val" data-bs-dismiss="modal"
                                        aria-label="Close"></button>

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

                                                    <input aria-label="Full name" class="form-control"
                                                        placeholder="Full Name" name="name" type="text" required>

                                                </div>

                                            </div>

                                            <div class="col-md-12">

                                                <label></label>

                                                <input aria-label="Email" name="email" class="form-control" placeholder="Email"
                                                    type="email" required>

                                            </div>

                                            <div class="col-md-12">

                                                <label></label>

                                                <input aria-label="Phone" name="phone" class="form-control" placeholder="Phone No"
                                                    type="tel" maxlength="10" required>

                                            </div>



                                            {{-- <div class="row">

                                                <div class="col-md-12">

                                                    <label></label>

                                                    <input aria-label="Investment" name="investment_amount" class="form-control"
                                                        placeholder="Investment Amount" type="text" required>

                                                </div>



                                            </div> --}}

                                            <div class="row">
                                                <div class="col-md-6">

                                                    @php
                                                    $states = App\Models\State::orderBy('name', 'ASC')->get();
                                                    @endphp
                                                    <select class="form-select" name="state"
                                                        aria-label="Default select example" required>
                                                        <option selected value="">State</option>
                                                        @foreach ($states as $state)
                                                        <option class="form-control" value="{{ $state->id }}">{{
                                                            $state->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="col-md-6">
                                                    @php
                                                    $citys = App\Models\City::orderBy('city', 'ASC')->get();
                                                    @endphp
                                                    <select class="form-select" name="city"
                                                        aria-label="Default select example" required>
                                                        <option selected value="">City</option>
                                                        @foreach ($citys as $city)
                                                        <option class="form-control" value="{{ $city->id }}">{{ $city->city
                                                            }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="btn_div_buttons">

                                                <div class="btn_form_submit">

                                                <input type="hidden" name="assistance_type" value="1">
                                                <input type="hidden" name="pay_amount" class="pay_amount" value="99">
                                                <button type="submit" class="submit">Pay Now<span class="span_rupee"
                                                    id="price_dynamic">₹99</span></button>
                                                </div>

                                            </div>
                                        </form>



                                    </div>

                                </div>

                            </div>

                        </div>
                    </div>
