<?php

namespace App\Http\Controllers;

use App\Http\Middleware\isEmployer;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
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
        dd('ok');
    }
}
