<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JoblistingController extends Controller
{
    public function index()
    {
        return view('jobs');
    }
}
