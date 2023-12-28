<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Listing;
use App\Models\User as ModelsUser;
use Illuminate\Foundation\Auth\User as AuthUser;
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
            $listings->orderByRaw('CAST(salary AS UNSIGNED) DESC');
        } else if($salary === 'salary_low_to_high') {
            $listings->orderByRaw('CAST(salary AS UNSIGNED) ASC');
        }

        if($date === 'latest') {
            $listings->orderBy('created_at', 'desc');
        } else if($date === 'oldest') {
            $listings->orderBy('created_at', 'asc');
        }

        if($jobType === 'Fulltime') {
            $listings->where('job_type', 'Fulltime');
        } else if($jobType === 'Parttime') {
            $listings->where('job_type', 'Parttime');
        } else if($jobType === 'Casual') {
            $listings->where('job_type', 'Casual');
        } else if($jobType === 'Contract') {
            $listings->where('job_type', 'Contract');
        }

        $jobs =  $listings->with('profile')->get();
        return view('jobs', compact('jobs'));
    }

    public function show(Listing $listing)
    {
        return view('show', compact('listing'));
    }

    public function company($id)
    {
        $company = User::where('id', $id)->where('user_type', 'employer')->first();

        return view('company', compact('company'));
    }
}
