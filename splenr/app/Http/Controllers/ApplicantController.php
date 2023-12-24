<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApplicantController extends Controller
{
    public function index()
    {
        $listings = Listing::latest()->withCount('users')->where('user_id', auth()->user()->id)->get();
        return view('applicants.index', compact('listings'));
    }

    public function show(Listing $listing)
    {
        $listing =  Listing::with('users')->where('slug', $listing->slug)->first();

        // return $listing;

        return view('applicants.show', compact('listing'));
    }

    public function shortlist($listingId, $userId)
    {
        $listing = Listing::find($listingId);
        if($listing) {
            $listing->users()->updateExistingPivot($userId, ['shortlisted' => true]);

            return back()->with('success', 'Applicant is shortlisted successfully!');
        }

        return back();
    }
}