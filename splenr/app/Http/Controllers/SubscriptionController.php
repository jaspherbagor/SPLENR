<?php

namespace App\Http\Controllers;

use App\Http\Middleware\doNotAllowUserToMakePayment;
use App\Http\Middleware\isEmployer;
use App\Mail\PurchaseMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\URL;
use Stripe\Checkout\Session;
use Stripe\Stripe;

class SubscriptionController extends Controller
{
    const WEEKLY_PRICE = 500;
    const MONTHLY_PRICE = 1500;
    const YEARLY_PRICE = 10000;
    const CURRENCY = 'php';

    public function __construct()
    {
        $this->middleware(['auth', isEmployer::class, doNotAllowUserToMakePayment::class]);
    }

    public function subscribe()
    {
        return view('subscription.index');
    }

    public function initiatePayment(Request $request)
    {
        $stripe = new \Stripe\StripeClient(config('services.stripe.secret'));
        $plans = [
            'weekly' => [
                'name' => 'weekly',
                'description' => 'weekly payment',
                'price' => self::WEEKLY_PRICE,
                'currency' => self::CURRENCY,
                'quantity' => 1,
            ],
            'monthly' => [
                'name' => 'monthly',
                'description' => 'monthly payment',
                'price' => self::MONTHLY_PRICE,
                'currency' => self::CURRENCY,
                'quantity' => 1,
            ],
            'yearly' => [
                'name' => 'yearly',
                'description' => 'yearly payment',
                'price' => self::YEARLY_PRICE,
                'currency' => self::CURRENCY,
                'quantity' => 1,
            ],
        ];

        try {
            $selectPlan = null;
            if($request->is('pay/weekly')) {
                $selectPlan = $plans['weekly'];
                $billingEnds = now()->addWeek()->startOfDay()->toDateString();
            }else if($request->is('pay/monthly')) {
                $selectPlan = $plans['monthly'];
                $billingEnds = now()->addMonth()->startOfDay()->toDateString();   
            }else if($request->is('pay/yearly')) {
                $selectPlan = $plans['yearly'];
                $billingEnds = now()->addYear()->startOfDay()->toDateString();   
            }

            if($selectPlan) {
                $successURl = URL::signedRoute('payment.success',[
                    'plan' => $selectPlan['name'],
                    'billing_ends' => $billingEnds
                ]);

                $session = $stripe->checkout->sessions->create([
                    'line_items' => [
                        [
                            'price_data' => [
                                'currency' => $selectPlan['currency'],
                                'product_data' => ['name'=>$selectPlan['description']],
                                'unit_amount' => $selectPlan['price']*100,
                            ],
                            'quantity' => $selectPlan['quantity'],
                        ],
                    ],
                    'mode' => 'payment',
                    'success_url' => $successURl.'?session_id={CHECKOUT_SESSION_ID}',
                    'cancel_url' => route('payment.cancel'),
                ]);

                // dd('$session');
                if(isset($session->id) && $session->id !== '') {
                    return redirect($session->url);
                } else {
                    return redirect()->route('payment.cancel');
                }
            }

        } catch(\Exception $e) {
            return response()->json($e);
        }

        
    }

    public function paymentSuccess(Request $request) 
    {
    $plan = $request->plan;
    $billingEnds = $request->billing_ends;
        User::where('id', auth()->user()->id)->update([
            'plan' => $plan,
            'billing_ends' => $billingEnds,
            'status' => 'paid'
        ]);

        try {
            Mail::to(auth()->user())->queue(new PurchaseMail($plan,$billingEnds));

        }catch (\Exception $e) {
            return response()->json($e);
        }


    return redirect()->route('dashboard')->with('success','Payment was processed successfully!');
    }

    public function cancel()
    {
    return redirect()->route('dashboard')->with('error','Payment was unsuccessful!');
    }
    
}