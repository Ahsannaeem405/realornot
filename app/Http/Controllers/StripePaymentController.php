<?php

namespace App\Http\Controllers;

use App\Models\Express;
use Illuminate\Http\Request;
use App\Models\withdraw;
use App\Models\User;
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
    public function admin_stripe($id)
    {
        $amount=withdraw::where('id',$id)->value('amount');
        $user_id=withdraw::where('id',$id)->value('user_id');
        $user=User::find($user_id);

        return view('stripe2' ,compact('amount','user','id'));
    }


    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripePost(Request $request)
    {
        // dd($request->pointexp);



        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        $charge =  Stripe\Charge::create ([
                "amount" => $request->pointexp * 100,
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
    public function stripePost2(Request $request)
    {



        Stripe\Stripe::setApiKey($request->secret_key);
        $charge =  Stripe\Charge::create ([
                "amount" => $request->amount * 100,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "Test payment from itsolutionstuff.com."
        ]);


            $wid=withdraw::find($request->id);
            $wid->Status="Complete";
            $wid->update();

        if($charge->status != 'succeeded')
        {
            $data =   Session::get('data');
            // $exprss =Express::find($data);
            Express::destroy(array('id',$data));
            return redirect('admin/withdraw');

        }
        else
        {
            Session::flash('success', 'Payment successful!');
            return redirect('admin/withdraw');
        }



    }
}
