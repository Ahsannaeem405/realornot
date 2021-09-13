<?php

namespace App\Http\Controllers;

use App\Models\Express;
use Illuminate\Http\Request;
use Session;
use Stripe;

class StripePaymentController extends Controller
{
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripe()
    {
        return view('stripe');
    }

    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripePost(Request $request)
    {



        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
      $charge =  Stripe\Charge::create ([
                "amount" => 100 * 100,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "Test payment from itsolutionstuff.com."
        ]);

        if($charge->status != 'succeeded')
        {
            $data =   Session::get('data');
            // $exprss =Express::find($data);
            Express::destroy(array('id',$data));

        }
        else
        {
            Session::flash('success', 'Payment successful!');
            return back();
        }



    }
}
