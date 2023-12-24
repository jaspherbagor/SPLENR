<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class JoblistingController extends Controller
{
    public function index()
    {
        $jobs =  Listing::with('profile')->get();
        return view('jobs', compact('jobs'));
    }
}
