<?php

namespace App\Http\Controllers;

use App\Model\User;
use App\Models\Listing;
use Illuminate\Http\Request;

class JoblistingController extends Controller
{
    public function index(Request $request)
    {
        $salary = $request->query('sort');
        $date = $request->query('date');
        $jobType = $request->query('job_type');

        $listings = Listing::query();

        if($salary === 'salary_high_to_low') {
            $listings->orderBy('salary', 'desc');
        } else if($salary === 'salary_low_to_high') {
            $listings->orderBy('salary', 'asc');
        }

        if($date === 'latest') {
            $listings->orderBy('created_at', 'desc');
        } else if($date === 'oldest') {
            $listings->orderBy('created_at', 'asc');
        }

        if($jobType === 'Fulltime') {
            $listings->orderBy('job_type', 'Fulltime');
        } else if($jobType === 'Parttime') {
            $listings->orderBy('job_type', 'Parttime');
        } else if($jobType === 'Casual') {
            $listings->orderBy('job_type', 'Casual');
        } else if($jobType === 'Contract') {
            $listings->orderBy('job_type', 'Contract');
        }

        $jobs =  $listings->with('profile')->get();
        return view('jobs', compact('jobs'));
    }

    public function show(Listing $listing)
    {
        return view('show', compact('listing'));
    }
}
