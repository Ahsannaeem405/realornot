<?php

namespace App\Http\Controllers;

use App\Models\Express;
use Illuminate\Http\Request;
use Omnipay\Omnipay;
use Session;

use App\Models\Payment;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{

    public $gateway;

    public function __construct()
    {
        $this->gateway = Omnipay::create('PayPal_Rest');
        $this->gateway->setClientId(env('PAYPAL_CLIENT_ID'));
        $this->gateway->setSecret(env('PAYPAL_CLIENT_SECRET'));
        $this->gateway->setTestMode(true); //set it to 'false' when go live
    }

    public function index()
    {
        return view('payment');
    }

    public function charge(Request $request)
    {
        $value = session('points');
        // dd($value);
        // if($request->input('submit'))
        // {
            try {
                $response = $this->gateway->purchase(array(
                    'amount' => $value,
                    'currency' => env('PAYPAL_CURRENCY'),
                    'returnUrl' => url('paymentsuccess'),
                    'cancelUrl' => url('paymenterror'),
                ))->send();


                $request->session()->forget('points');
                if ($response->isRedirect()) {
                    $response->redirect(); // this will automatically forward the customer
                } else {
                    // not successful
                    return $response->getMessage();
                }
            } catch(Exception $e) {
                return $e->getMessage();
            }
        // }
    }

    public function payment_success(Request $request)
    {
        // Once the transaction has been approved, we need to complete it.
        if ($request->input('paymentId') && $request->input('PayerID'))
        {
            $transaction = $this->gateway->completePurchase(array(
                'payer_id'             => $request->input('PayerID'),
                'transactionReference' => $request->input('paymentId'),
            ));
            $response = $transaction->send();

            if ($response->isSuccessful())
            {
                // The customer has successfully paid.
                $arr_body = $response->getData();

                // Insert transaction data into the database
                $isPaymentExist = Payment::where('payment_id', $arr_body['id'])->first();

                if(!$isPaymentExist)
                {
                    $payment = new Payment;
                    $payment->payment_id = $arr_body['id'];
                    $payment->payer_id = $arr_body['payer']['payer_info']['payer_id'];
                    $payment->payer_email = $arr_body['payer']['payer_info']['email'];
                    $payment->amount = $arr_body['transactions'][0]['amount']['total'];
                    $payment->currency = env('PAYPAL_CURRENCY');
                    $payment->payment_status = $arr_body['state'];
                    $payment->save();
                }
                // return view('express')->with('success','Payment is successful.');



                return "Payment is successful. Your transaction id is: ". $arr_body['id'];
            } else {



              $data =   Session::get('data');

              // $exprss =Express::find($data);
              Express::destroy(array('id',$data));

              return $response->getMessage();

            }
        } else {

            $data =   Session::get('data');
            // $exprss =Express::find($data);
            Express::destroy(array('id',$data));

            return $response->getMessage();
            return 'Transaction is declined';
        }
    }

    public function payment_error()
    {
        return 'User is canceled the payment.';
    }

}
