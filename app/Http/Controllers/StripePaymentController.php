<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Stripe;
use DB;
use App\Payment;

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
        Stripe\Charge::create([
            "amount" => 1.39 * 100,
            "currency" => "usd",
            "source" => $request->stripeToken,
            "description" => "Paid"
        ]);

        $payment = new Payment;
        $payment->paid = "Paid";
        $payment->save();
         return back()->with('success','Payment Sucessfully');

        Session::flash('success', 'Payment successful!');

        return back();
    }

    public function show()
    {
        $de = DB::table('users')
            ->join('payments', 'payments.id', '=', 'users.id')
            ->select('paid', 'firstname', 'lastname', 'users.email')
            ->get();
        
        return view('allpayments')->with('de', $de);

    }
}