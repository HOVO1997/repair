<?php

namespace App\Http\Controllers;

use App\Plan;
use App\User;
use Illuminate\Http\Request;
use Cartalyst\Stripe\Stripe;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class PaymentController extends Controller
{

    public function store(Request $request){

        $plan_type = session()->get('plan_type');
        $plan_price = session()->get('plan_price');

        $mail = Auth::user()->email;
        $id = Auth::user()->id;

        $stripe = Stripe::make(env('sk_test_51H7F0TLIzvDELGLjl5dcMKGVizR1EWAPun9to8tC8QmRLhgnW27NTJ5IpawT9knVmvKF4EnHgkvUyt1PwtWmEcXa00a9PXIyEw'), '2020-03-02');
         $stripe->charges()->create([
            'amount'   => $plan_price,
            'currency' => 'USD',
            'source' => $request->stripeToken,
            'receipt_email' => $mail,
        ]);

        $plan = Plan::where('name',$plan_type)->first();
        $time = $plan->expire_time;

        $user_prod['plan_id'] = $plan->id;
        $user_prod['expire_date'] = Carbon::now()->addDay($time);
        User::where('id', $id)->update($user_prod);

        session()->forget("plan_type");
        session()->forget("plan_price");

        return redirect('home');
    }

    public function plan(Request $request){

        $plan = $request->input('plan_type');
        $plan_price = $request->input('plan_price');

        session()->put('plan_type',$plan);
        session()->put('plan_price',$plan_price);

        return view('stripe');

    }
}
