<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class JoblistingController extends Controller
{
    public function index(Request $request)
    {
        $salary = $request->query('sort');
        $date = $request->query('date');
        $jobType = $request->query('job_type');

        $listing = Listing::query();
        if($salary === 'salary_high_to_low') {
            Listing::orderBy('salary', 'descending')
        }

        //$jobs =  Listing::with('profile')->get();
        return view('jobs', compact('jobs'));
    }

    public function show(Listing $listing)
    {
        return view('show', compact('listing'));
    }
}
