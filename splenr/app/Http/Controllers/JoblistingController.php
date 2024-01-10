<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Listing;
use App\Models\User as ModelsUser;
use Carbon\Carbon;
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
        } elseif($salary === 'salary_low_to_high') {
            $listings->orderByRaw('CAST(salary AS UNSIGNED) ASC');
        }

        if($date === 'latest') {
            $listings->orderBy('created_at', 'desc');
        } elseif($date === 'oldest') {
            $listings->orderBy('created_at', 'asc');
        }

        if($jobType === 'Fulltime') {
            $listings->where('job_type', 'Fulltime');
        } elseif($jobType === 'Parttime') {
            $listings->where('job_type', 'Parttime');
        } elseif($jobType === 'Casual') {
            $listings->where('job_type', 'Casual');
        } elseif($jobType === 'Contract') {
            $listings->where('job_type', 'Contract');
        }

        $jobs =  $listings->with('profile')->get();
        return view('jobs', compact('jobs'));
    }

    public function show(Listing $listing)
    {
        // Format the application_close_date using Carbon
        $formattedDate = Carbon::parse($listing->application_close_date)->format('F j, Y');

        // Add the formatted date to the $listing object or create a new key
        $listing->formattedDate = $formattedDate;

        return view('show', compact('listing'));
    }

    public function company($id)
    {
        $company = User::with('jobs')->where('id', $id)->where('user_type', 'employer')->first();

        return view('company', compact('company'));
    }

    public function homepage(Request $request)
    {
        $salary = $request->query('sort');
        $date = $request->query('date');
        $jobType = $request->query('job_type');

        $listings = Listing::query();

        if($salary === 'salary_high_to_low') {
            $listings->orderByRaw('CAST(salary AS UNSIGNED) DESC');
        } elseif($salary === 'salary_low_to_high') {
            $listings->orderByRaw('CAST(salary AS UNSIGNED) ASC');
        }

        if($date === 'latest') {
            $listings->orderBy('created_at', 'desc');
        } elseif($date === 'oldest') {
            $listings->orderBy('created_at', 'asc');
        }

        if($jobType === 'Fulltime') {
            $listings->where('job_type', 'Fulltime');
        } elseif($jobType === 'Parttime') {
            $listings->where('job_type', 'Parttime');
        } elseif($jobType === 'Casual') {
            $listings->where('job_type', 'Casual');
        } elseif($jobType === 'Contract') {
            $listings->where('job_type', 'Contract');
        }

        $jobs =  $listings->with('profile')->get();
        return view('home', compact('jobs'));
    }


}
