<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Razorpay\Api\Api;
use Illuminate\Support\Facades\Redirect;
use Ixudra\Curl\Facades\Curl;
use App\Models\Payment;
use App\Models\State;
use App\Models\City;
use Mail;



class PaymentController extends Controller
{
    public function index()
    {
        $key = env('RAZORPAY_KEY');
        \Log::info($key);
        return view('payment.razorpay');
    }


    public function phonePe(Request $request)
    {
        
        $form_data = $request->all();
        $merchantUserId = 'MUID'.time();
        $transactionId = "MT" . rand(111111, 999999);
        $amount = $request->pay_amount;
        $mobile = $request->phone;

        $city = City::with('state')->find($request->city);
        $cityName = $city->city;
        $stateName = $city->state;
        

        $data = [
            "merchantId" => 'M22ZHBHEHBY88', // <THIS IS TESTING MERCHANT ID>
            "merchantTransactionId" => $merchantUserId,
            "merchantUserId" => $transactionId,
            "amount" => $amount*100,
            "redirectUrl" => route('response'),
            "redirectMode" => "POST", // GET, POST DEFINE REDIRECT RESPONSE METHOD,
            "callbackUrl" => route('response'),
            "mobileNumber" => $mobile,
            "paymentInstrument" => [
                "type" => "PAY_PAGE"
            ]
        ];
        

        $apiKey = '5969ac5e-50a0-4141-8a37-e00da01e3ca8';
        $encode = base64_encode(json_encode($data));

        // $saltKey = '5969ac5e-50a0-4141-8a37-e00da01e3ca8';
        // $saltIndex = 1;

        // $string = $encode.'/pg/v1/pay'.$saltKey;
        // $sha256 = hash('sha256',$string);

        // $finalXHeader = $sha256.'###'.$saltIndex;

        $url = "https://api.phonepe.com/apis/hermes/pg/v1/pay";

        $encode = json_encode($data);
        $payloadMain = base64_encode($encode);
        $salt_index = 1; //key index 1
        $payload = $payloadMain . "/pg/v1/pay" . $apiKey;
        $sha256 = hash("sha256", $payload);
        $final_x_header = $sha256 . '###' . $salt_index;
        $request_val = json_encode(array('request' => $payloadMain));

        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => "https://api.phonepe.com/apis/hermes/pg/v1/pay",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => $request_val,
            CURLOPT_HTTPHEADER => [
                "Content-Type: application/json",
                "X-VERIFY: " . $final_x_header,
                "accept: application/json"
            ],
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        $rData = json_decode($response);
        
        // return redirect()->to($rData->data->instrumentResponse->redirectInfo->url);

        if ($rData->code == 'BAD_REQUEST') {
            
            return redirect()->back()->with('error',$rData->message);
        } else {

            // dd($form_data);
            
            $data_mail["title"] = "New Enquiry";
            $data_mail["name"]  = $form_data['name'];
            $data_mail["email"] = $form_data['email'];
            $data_mail["phone"] = $form_data['phone'];
            $data_mail["state"] = $stateName->name;
            $data_mail["city"]  = $cityName;
            // dd($data_mail);
            $mail = Mail::send('mail.new_enquiry', ['data'=> $data_mail], function ($message) use ($data_mail){
                $message->to('contact@loansuvidhaa.com');
                $message->cc('riyamagiciansingh@gmail.com');
                $message->subject($data_mail["title"]);
            });


            $res = json_decode($response);
            

            $payment =  new Payment;
            $payment->name = $form_data['name'];
            $payment->mobile = $form_data['phone'];
            $payment->email = $form_data['email'];
            $payment->assistance_type = $form_data['assistance_type'];
            $payment->state = $form_data['state'];
            $payment->city = $form_data['city'];
            $payment->transaction_id = $merchantUserId;
            $payment->amount = $amount;
            $payment->payment_status = 'Payment Pending';
            $payment->response_msg = $response;
            $payment->providerReferenceId ='';
            $payment->merchantOrderId = $res->data->merchantId;
            $payment->save();

            

            if (isset($res->code) && ($res->code == 'PAYMENT_INITIATED')) {

                $payUrl = $res->data->instrumentResponse->redirectInfo->url;
                return redirect()->away($payUrl);
            } else {

                return redirect()->back()->with('error',$res);
                //HANDLE YOUR ERROR MESSAGE HERE
                dd('ERROR : ' . $res);
            }
        }
    }




    public function response(Request $request) 
    {
        $input = $request->all();
    
        $saltKey = '5969ac5e-50a0-4141-8a37-e00da01e3ca8';
        $saltIndex = 1;
    
        if ($request->input('code') == 'PAYMENT_SUCCESS') {
    
            $last_pay = Payment::where('transaction_id', $request->transactionId)->first();
    
            $data["title"] = "Welcome, Loan Suvidhaa";
            $data["name"] = $last_pay['name'];
            $data["email"] = $last_pay['email'];
            $data["phone"] = $last_pay['phone'];
    
            $mail = Mail::send('mail.thank_you_to_user', ['data'=> $data], function ($message) use ($data){
                $message->to($data["email"]);
                $message->subject($data["title"]);
            });
    
            $transactionId = $request->transactionId;
            $merchantId = $request->merchantId;
            $providerReferenceId = $request->providerReferenceId;
            $merchantOrderId = $request->merchantOrderId;
            $status = $request->input('code');
    
            $data = [
                'providerReferenceId' => $providerReferenceId,
                'payment_status' => 'Payment Received',
            ];
            if ($merchantOrderId != '') {
                $data['merchantOrderId'] = $merchantOrderId;
            }
    
            Payment::where('transaction_id', $transactionId)->update($data);
    
            return view('frontend/thankyou', compact('providerReferenceId', 'transactionId', 'input'));
    
        } else {
    
            return redirect()->route('payment.failed')
                ->with('error', 'Payment processing error: ' . $request->input('code'));
        }
    }
    



    /**
     * Write code on Method
     *
     * @return response()
     */
    public function store(Request $request)
    {
        $input = $request->all();

        $api = new Api(env('RAZORPAY_KEY'), env('RAZORPAY_SECRET'));

        $payment = $api->payment->fetch($input['razorpay_payment_id']);

        if (count($input) && !empty($input['razorpay_payment_id'])) {
            try {
                $response = $api->payment->fetch($input['razorpay_payment_id'])->capture(array('amount' => $payment['amount']));

            } catch (Exception $e) {
                return $e->getMessage();
                Session::put('error', $e->getMessage());
                return redirect()->back();
            }
        }

        \Session::put('success', 'Payment successful');
        return redirect()->back();
    }

    // PhonePe Integration


    public function paymentFailed(Request $request)
    {
         return view('frontend.form.payment_failed');

    }
    
}