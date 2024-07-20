<?php

namespace App\Http\Controllers\payment;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Payment;
use App\Models\User;


class PaystackController extends Controller
{
    public function callback(Request $request)
    {
        //dd($request->all());
        $reference = $request->reference;
        $secret_key = env('PAYSTACK_SECRET_KEY');
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.paystack.co/transaction/verify/".$reference,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "Authorization: Bearer $secret_key",
                "Cache-Control: no-cache",
            ),
        ));
        $response = curl_exec($curl);
        curl_close($curl);
        $response = json_decode($response);
        //dd($response);
        $meta_data = $response->data->metadata->custom_fields;
        if($response->data->status == 'success')
        {
            $obj = new Payment;
            $obj->transaction_id = $reference;
            $obj->payment_for = "Online Medical Fee";
            $obj->amount = $response->data->amount / 100;
            $obj->currency = $response->data->currency;
            $obj->status = "Success";
            $obj->payment_method = "Paystack";
            $obj->user_id = Auth::user()->id;
            $obj->save();

            //Update user table
            $user = Auth::user();
            $user->Payment_Status = "PAID";
            $user->save();

            return redirect('/ecounter')->with('message', 'Great! Payment Successful! You can now view your medical records.');
        } else {
            return redirect()->back()->with('error', 'Payment failed. Please try again.');
        }
    }
}
