<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;
use App\Models\Payment;
use App\Models\Setting;
use Illuminate\Support\Facades\Redirect;
use Mail;

class HomeController extends Controller
{

    public function dashboard(Request $request){
        return view('admin/dashboard');
    }

    public function refundPolicy(Request $request){
        $metaTitle = Setting::where('type', 'title_refund_policy')->First();
        $metaDesc = Setting::where('type', 'description_refund_policy')->First();
        return view('frontend/refund_policy',compact('metaTitle','metaDesc'));
    }

    public function city_get($id){

        $cities = City::where('state_id',$id)->orderBy('city','ASC')->get();
        return response()->json($cities);
        
    }

    public function assistance_type(Request $request){
        return view('frontend.form.assistance_type_form');

    }

    public function payment_list(Request $request){
        
        $sort_search = null;
        $payments = Payment::where('payment_status', 'Payment Received')->orderBy('created_at', 'desc');
        
        if ($request->search != null){
            $payments = $payments->where('title', 'like', '%'.$request->search.'%');
            $sort_search = $request->search;
        }

        $payments = $payments->paginate(15);

        return view('admin.pages.payment.index', compact('payments','sort_search'));

    }
    
    public function leads(Request $request)
    {
        $users = Payment::where('payment_status', 'Payment Pending')->orderBy('id', 'desc')->get();
        
        return view('admin.pages.leads', compact('users'));
    }

    
    


    public function phonePe(Request $request)
    {
        

        $data["email"] = 'balpreet.digirush@gmail.com';
        $data["title"] = "New Enquiry";
        $data["name"] = '$request->name';
        $data["email_person"] = '$request->email';
        $data["phone"] = '$request->phone';
        $data["course"] = '$request->course';
        $data["massage"] = '$request->massage';
  
        // Mail::to($email)->send(new EmailDemo($mailData));
        $mail = Mail::send('mail.thank_you_to_user', ['data'=> $data], function ($message) use ($data){
            $message->to($data["email"]);
            $message->subject($data["title"]);
        });
        dd($mail);

        $jayParsedAry = [
            "merchantId" => "PGTESTPAYUAT67", 
            "merchantTransactionId" => "MT".rand(111111,999999), 
            "merchantUserId" => 'MUID'.time(), 
            "amount" => 1000, 
            "redirectUrl" => route('phonepe.payment.callback'),
            "redirectMode" => "POST", 
            "callbackUrl" => route('phonepe.payment.callback'), 
            "mobileNumber" => '9999999999', 
            "paymentInstrument" => [
                  "type" => "PAY_PAGE" 
            ]
        ];

        $encode = json_encode($jayParsedAry);
        $encoded = base64_encode($encode);
        $key = 'f1c0b919-63b6-42c8-84a1-29e52989f4e1'; // KEY
        $key_index = 1; // KEY_INDEX
        $string = $encoded . "/pg/v1/pay".$key;
        $sha256 = hash("sha256", $string);
        $final_x_header = $sha256 . '###'.$key_index;
      
        // $url = "https://api.phonepe.com/apis/hermes/pg/v1/pay"; //<PRODUCTION URL>

        $url = "https://api-preprod.phonepe.com/apis/pg-sandbox/pg/v1/pay"; // <TESTING URL>

        $headers = array(
            "Content-Type: application/json",
            "accept: application/json",
            "X-VERIFY: " . $final_x_header,
        );

        $data = json_encode(['request' => $encoded]);

        $curl = curl_init($url);

        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

        $resp = curl_exec($curl);

        curl_close($curl);

        $response = json_decode($resp);
        // dd($response);
        return redirect()->to($response->data->instrumentResponse->redirectInfo->url);


    }


    public function phonePeCallback(Request $request)
    {
        $input = $request->all();
        dd($input);

        $saltKey = 'f1c0b919-63b6-42c8-84a1-29e52989f4e1';
        $saltIndex = 1;

        $finalXHeader = hash('sha256', '/pg/v1/status/' . $input['merchantId'] . '/' . $input['transactionId'] . $saltKey) . '###' . $saltIndex;

        // $response = Curl::to('https://api-preprod.phonepe.com/apis/merchant-simulator/pg/v1/status/'.$input['merchantId'].'/'.$input['transactionId'])
        //         ->withHeader('Content-Type:application/json')
        //         ->withHeader('accept:application/json')
        //         ->withHeader('X-VERIFY:'.$finalXHeader)
        //         ->withHeader('X-MERCHANT-ID:'.$input['transactionId'])
        //         ->get();

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://api-preprod.phonepe.com/apis/merchant-simulator/pg/v1/status/' . $input['merchantId'] . '/' . $input['transactionId'],
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => false,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json',
                'accept: application/json',
                'X-VERIFY: ' . $finalXHeader,
                'X-MERCHANT-ID: ' . $input['transactionId']
            ),
        )
        );

        $response = curl_exec($curl);

        curl_close($curl);

        dd(json_decode($response));
        // flash(translate('Your order has been placed successfully. Please submit payment information from purchase history'))->success();
        // return redirect()->route('order_confirmed');
    }



    public function contact_form(Request $request){
        
        $data = $request->all();
        $order_id = 100;
       

        $jayParsedAry = [
            "merchantId" => "M22ZHBHEHBY88", 
            "merchantTransactionId" => "MT".rand(111111,999999), 
            "merchantUserId" => 'MUID'.time(), 
            "amount" => $order_id, 
            "redirectUrl" => route('phonepe.payment.callback'), 
            "redirectMode" => "REDIRECT", 
            "callbackUrl" => route('phonepe.payment.callback'), 
            "mobileNumber" => $request['phone'], 
            "paymentInstrument" => [
                  "type" => "PAY_PAGE" 
            ]
        ];

        $encode = json_encode($jayParsedAry);
        $encoded = base64_encode($encode);
        $key = '5969ac5e-50a0-4141-8a37-e00da01e3ca8'; // KEY
        $key_index = 1; // KEY_INDEX
        $string = $encoded . "/pg/v1/pay".$key;
        $sha256 = hash("sha256", $string);
        $final_x_header = $sha256 . '###'.$key_index;
        

        $url = "https://api.phonepe.com/apis/hermes/pg/v1/pay"; //<PRODUCTION URL>
        // $url = "https://api-preprod.phonepe.com/apis/pg-sandbox/pg/v1/pay"; // <TESTING URL>

        $headers = array(
            "Content-Type: application/json",
            "accept: application/json",
            "X-VERIFY: " . $final_x_header,
        );

        $data = json_encode(['request' => $encoded]);

        $curl = curl_init($url);

        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

                
        $response = curl_exec($curl);
        $err = curl_error($curl);
        
        curl_close($curl);
        
        if ($err) {
            echo "cURL Error #:" . $err;
        } 
        else{
            $res = json_decode($response);
           
        // Store information into database
        
        $payment =  new Payment;
        $payment->name = $request['name'];
        $payment->mobile = $request['mobile'];
        $payment->email = $request['email'];
        $payment->assistance_type = $request['assistance_type'];
        $payment->state = $request['state'];
        $payment->city = $request['city'];
        $payment->transaction_id = $order_id;
        $payment->amount = 1;
        $payment->payment_status = 'PAYMENT_PENDING';
        $payment->response_msg = $response;
        $payment->providerReferenceId ='';
        $payment->merchantOrderId = $res->data->merchantId;
        // $payment->checksum = '';
        $payment->save();
        
        // Payment::create($data);
        
        // end database insert
        
        if(isset($res->code) && ($res->code=='PAYMENT_INITIATED')){
        
            $payUrl=$res->data->instrumentResponse->redirectInfo->url;
            return redirect()->away($payUrl);
        }else{
                dd('ERROR : ' . $res);
            }
        }
        
        // return redirect()->to($response->data->instrumentResponse->redirectInfo->url);

    }


    public function leads_test(){

        $users = Payment::select('payments.*', 'cities.city as city_name', 'states.name as state_name', 'assistance.name as assistance_name')
                ->join('cities', 'payments.city', '=', 'cities.id')
                ->join('states', 'cities.state_id', '=', 'states.id')
                ->join('assistance', 'payments.assistance_type', '=', 'assistance.assistance_type')->where('payment_status','PAYMENT_PENDING')
                ->orderBy('created_at', 'asc')->get();
       
        // dd($users);
        return view('admin.pages.leads', compact('users'));
    }


    public function home(){

        $metaTitle = Setting::where('type', 'title_Home')->First();
        $metaDesc = Setting::where('type', 'description_Home')->First();
        $metaKey = Setting::where('type', 'keyword_Home')->First();
       
        return view('home', compact('metaTitle','metaDesc','metaKey'));
    }
    public function about(){

        $metaTitle = Setting::where('type', 'title_About_Us')->First();
        $metaDesc = Setting::where('type', 'description_About_Us')->First();
        $metaKey = Setting::where('type', 'keyword_About_Us')->First();
       
        return view('frontend.about', compact('metaTitle','metaDesc','metaKey'));
    }

    public function becomepartner(){

        $metaTitle = Setting::where('type', 'title_BE_A_PARTNER')->First();
        $metaDesc = Setting::where('type', 'description_BE_A_PARTNER')->First();
        $metaKey = Setting::where('type', 'keyword_BE_A_PARTNER')->First();
        
        return view('frontend.become_partner', compact('metaTitle','metaDesc','metaKey'));
    }

    public function loanassistance(){

        $metaTitle = Setting::where('type', 'title_Loan_Assistance')->First();
        $metaDesc = Setting::where('type', 'description_Loan_Assistance')->First();
        $metaKey = Setting::where('type', 'keyword_Loan_Assistance')->First();
       
        return view('frontend.loan.loan_assistance', compact('metaTitle','metaDesc','metaKey'));
    }
    public function personalloan(){

        $metaTitle = Setting::where('type', 'title_Personal_Loan')->First();
        $metaDesc = Setting::where('type', 'description_Personal_Loan')->First();
        $metaKey = Setting::where('type', 'keyword_Personal_Loan')->First();
       
        return view('frontend.loan.personal_loan', compact('metaTitle','metaDesc','metaKey'));
    }
    public function businessloan(){

        $metaTitle = Setting::where('type', 'title_Business_Loan')->First();
        $metaDesc = Setting::where('type', 'description_Business_Loan')->First();
        $metaKey = Setting::where('type', 'keyword_Business_Loan')->First();
        
        return view('frontend.loan.business_loan', compact('metaTitle','metaDesc','metaKey'));
    }
    public function homeloan(){

        $metaTitle = Setting::where('type', 'title_Home_Loan')->First();
        $metaDesc = Setting::where('type', 'description_Home_Loan')->First();
        $metaKey = Setting::where('type', 'keyword_Home_Loan')->First();
        
        return view('frontend.loan.home_loan', compact('metaTitle','metaDesc','metaKey'));
    }
    public function property(){

        $metaTitle = Setting::where('type', 'title_Property_Loan')->First();
        $metaDesc = Setting::where('type', 'description_Property_Loan')->First();
        $metaKey = Setting::where('type', 'keyword_Property_Loan')->First();
        
        return view('frontend.loan.property', compact('metaTitle','metaDesc','metaKey'));
    }
    public function vehicleloan(){

        $metaTitle = Setting::where('type', 'title_Vehicle_Loan')->First();
        $metaDesc = Setting::where('type', 'description_Vehicle_Loan')->First();
        $metaKey = Setting::where('type', 'keyword_Vehicle_Loan')->First();
        
        return view('frontend.loan.vehicle_loan', compact('metaTitle','metaDesc','metaKey'));
    }

    public function lifeinsurance(){

        $metaTitle = Setting::where('type', 'title_Life_Insurance')->First();
        $metaDesc = Setting::where('type', 'description_Life_Insurance')->First();
        $metaKey = Setting::where('type', 'keyword_Life_Insurance')->First();
        
        return view('frontend.life-insurance', compact('metaTitle','metaDesc','metaKey'));
    }
    public function healthinsurance(){

        $metaTitle = Setting::where('type', 'title_Health_Insurance')->First();
        $metaDesc = Setting::where('type', 'description_Health_Insurance')->First();
        $metaKey = Setting::where('type', 'keyword_Health_Insurance')->First();
        
        return view('frontend.health_insurance', compact('metaTitle','metaDesc','metaKey'));
    }
    public function generalinsurance(){

        $metaTitle = Setting::where('type', 'title_General_Insurance')->First();
        $metaDesc = Setting::where('type', 'description_General_Insurance')->First();
        $metaKey = Setting::where('type', 'keyword_General_Insurance')->First();
        
        return view('frontend.general_insurance', compact('metaTitle','metaDesc','metaKey'));
    }
    public function sip(){

        $metaTitle = Setting::where('type', 'title_SIP')->First();
        $metaDesc = Setting::where('type', 'description_SIP')->First();
        $metaKey = Setting::where('type', 'keyword_SIP')->First();
       
        return view('frontend.sip', compact('metaTitle','metaDesc','metaKey'));
    }
    public function swp(){

        $metaTitle = Setting::where('type', 'title_SWP')->First();
        $metaDesc = Setting::where('type', 'description_SWP')->First();
        $metaKey = Setting::where('type', 'keyword_SWP')->First();
        
        return view('frontend.swp', compact('metaTitle','metaDesc','metaKey'));
    }
    public function elss(){

        $metaTitle = Setting::where('type', 'title_ELSS')->First();
        $metaDesc = Setting::where('type', 'description_ELSS')->First();
        $metaKey = Setting::where('type', 'keyword_ELSS')->First();
        
        return view('frontend.elss', compact('metaTitle','metaDesc','metaKey'));
    }
    public function lumpsum(){

        $metaTitle = Setting::where('type', 'title_Lumpsum_Amount')->First();
        $metaDesc = Setting::where('type', 'description_Lumpsum_Amount')->First();
        $metaKey = Setting::where('type', 'keyword_Lumpsum_Amount')->First();
        
        return view('frontend.lumpsum', compact('metaTitle','metaDesc','metaKey'));
    }
    public function property_sale(){
        
        $metaTitle = Setting::where('type', 'title_Property_Sale/Purchase')->First();
        $metaDesc = Setting::where('type', 'description_Property_Sale/Purchase')->First();
        $metaKey = Setting::where('type', 'keyword_Property_Sale/Purchase')->First();
        
        return view('frontend.property_sale', compact('metaTitle','metaDesc','metaKey'));
    }

    public function policy_terms(){

        return redirect('/termcondition');
    }
    public function policy_loan(){

        return redirect('/privacypolicy');
    }
    public function education_loan(){

        return redirect('/');
    }
    public function loan_against_property(){

        return redirect()->route('property_loan');
    }
    public function services_loan(){

        return redirect()->route('personal.loan');
    }
    public function car_loan(){

        return redirect()->route('vehicle.loan');
    }
    public function business_loan(){

        return redirect()->route('business.loan');
    }
    public function property_sale_purchase(){

        return redirect()->route('property.sale');
    }
    public function general_insurance_service(){

        return redirect()->route('general.insurance');
    }
    public function privacypolicy(){
        $metaTitle = Setting::where('type', 'title_privacy_policy')->First();
        $metaDesc = Setting::where('type', 'description_privacy_policy')->First();
        return view('frontend/privacy_policy',compact('metaTitle','metaDesc'));
    }
    public function termcondition(){
        $metaTitle = Setting::where('type', 'title_terms_condition')->First();
        $metaDesc = Setting::where('type', 'description_terms_condition')->First();
        return view('frontend/term_condition',compact('metaTitle','metaDesc'));
    }
    




}