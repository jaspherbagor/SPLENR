<?php

namespace App\Http\Controllers;

use App\Http\Requests\JobPostFormRequest;
use App\Models\Listing;
use App\Post\JobPost;

class PostJobController extends Controller
{
    protected $job;
    public function __construct(JobPost $job)
    {
        $this->job = $job;
    }

    public function create()
    {
        return view('job.create');   
    }

    public function store(JobPostFormRequest $request)
    {
        $this->job->store($request);
        return back();
    }
}
