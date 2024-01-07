<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $listings = Listing::latest()->withCount('users')->where('user_id', auth()->user()->id)->get();
        return view('dashboard', compact('listings'));

    }

    public function verify()
    {
        return view('user.verify');
    }

    public function resend(Request $request)
    {
        $user = Auth::user();
        if($user->hasVerifiedEmail()) {
            return redirect()->route('home')->with('success', 'Your email was verified!');
        }

        $user->sendEmailVerificationNotification();

        return back()->with('success', 'Verification link sent successfully');
    }
}
