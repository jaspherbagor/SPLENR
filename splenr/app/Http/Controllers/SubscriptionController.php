<?php

namespace App\Http\Controllers;

use App\Http\Middleware\isEmployer;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    const WEEKLY_AMOUNT = 500;
    const MONTHLY_AMOUNT = 1500;
    const YEARLY_AMOUNT = 10000;
    const CURRENCY = 'PHP';

    public function __construct()
    {
        $this->middleware(['auth', isEmployer::class]);
    }

    public function subscribe()
    {
        return view('subscription.index');
    }

    public function initiatePayment(Request $request)
    {
        $plans = [
            'weekly' => [
                'name' => 'weekly',
                'description' => 'weekly payment',
                'amount' => self::WEEKLY_AMOUNT,
                'currency' => self::CURRENCY,
                'quantity' => 1
            ],
            'monthly' => [
                'name' => 'monthly',
                'description' => 'monthly payment',
                'amount' => self::MONTHLY_AMOUNT,
                'currency' => self::CURRENCY,
                'quantity' => 1
            ],
            'yearly' => [
                'name' => 'yearly',
                'description' => 'yearly payment',
                'amount' => self::YEARLY_AMOUNT,
                'currency' => self::CURRENCY,
                'quantity' => 1
            ],
        ];

        //initiate payment
        try {

        } catch (\Exception $e) {

        }
    }

    public function paymentSuccess(Request $request)
    {
        //update database
    }

    public function cancel()
    {
        //redirect
    }
}
