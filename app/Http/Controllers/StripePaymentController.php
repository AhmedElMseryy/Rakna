<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Charge;
use Illuminate\Support\Facades\Session;

class StripePaymentController extends Controller
{
    public function stripe()
    {
        return view('theme.visa');
    }

    // public function stripePost(Request $request)
    // {
    //     Stripe::setApiKey(env('STRIPE_SECRET'));
    //     Charge::create([
    //         'amount' => 100 * 100,
    //         'currency' => "usd",
    //         'source' => $request->stripeToken,
    //         'description' => 'Test payment from muhammed essa'
    //     ]);

    //     Session::flash('success', 'Payment has been successfully');
    //     return back();
    // }

    public function stripePost(Request $request)
    {
        $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));

        try {
            // Create a PaymentMethod
            $paymentMethod = $stripe->paymentMethods->create([
                'type' => 'card',
                'card' => [
                    'number'    => $request->card_number,
                    'exp_month' => $request->exp_month,
                    'exp_year'  => $request->exp_year,
                    'cvc'       => $request->cvc,
                ],
            ]);

            // Create a PaymentIntent
            $paymentIntent = $stripe->paymentIntents->create([
                'amount' => 1000, // amount in cents
                'currency' => 'usd',
                'payment_method' => $paymentMethod->id,
                'confirmation_method' => 'manual',
                'confirm' => true,
            ]);
            return to_route('theme.thank');
        } catch (\Stripe\Exception\ApiErrorException $e) {
            // Handle error
            return to_route('theme.thank');
        }
    }
}
