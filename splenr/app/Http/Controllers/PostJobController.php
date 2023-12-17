<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class PostJobController extends Controller
{
    public function create()
    {
        return view('job.create');   
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|min:5',
            'feature_image' => 'required|mimes:png,jpeg,jpg,webp|max:5120',
            'description' => 'required|min:10',
            'roles' => 'required|min:10',
            'job_type' => 'required',
            'address' => 'required',
            'date' => 'required'
        ]);
        $imagePath = $request->file('feature_image')->store('images', 'public');
        $post = new Listing;
        $post->feature_image = $imagePath;
        $post->user_id = auth()->user()->id;
        $post->title = $request->title;
        $post->description = $request->description;
        $post->job_type = $request->job_type;
        $post->address = $request->address;
        $post->application_close_date = $request->date;
        $post->salary = $request->salary;
        $post->slug = Str ::slug($request->title).'.'. Str::uuid();
    }
}
