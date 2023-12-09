@extends('layouts.app')

@section('content')

<div class="container px-4 py-5">
    Hello, {{ auth()->user()->name }}
    @if(Auth::check() && auth()->user()->user_type == 'employer')
    <p>Your trial will expire on {{ auth()->user()->user_trial }}</p>
    @endif
    <div class="row justify-content-center">
        <div class="col-md-3">
            <div class="card-counter primary">
                <p class="text-center mt-3 lead">User Profile</p>
                <button class="btn btn-primary float-end">View</button>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card-counter danger">
                <p class="text-center mt-3 lead">Post Job</p>
                <button class="btn btn-primary float-end">View</button>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card-counter success">
                <p class="text-center mt-3 lead">All Jobs</p>
                <button class="btn btn-primary float-end">View</button>
            </div>
       </div>

        <div class="col-md-3">
            <div class="card-counter info">
                <p class="text-center mt-3 lead">Item 4</p>
                <button class="btn btn-primary float-end">View</button>
            </div>
        </div>

    </div>

</div>

@endsection

<style>
    .card-counter {
        box-shadow: 2px 2px 10px #dadada;
        margin:5px;
        padding:20px 10px;
        background-color: #fff;
        height:130px;
        border-radius: 5px;
        transition: .3s linear all;
    }

    .card-counter.primary {
        background-color: #007bff;
        color:#fff
    }

    .card-counter.danger {
        background-color:#ef5350;
        color:#fff
    }

    .card-counter.success {
        background-color: #66bb6a;
        color:#fff
    }    

    ..card-counter.info {
        background-color: #26c6da;
        color:#fff
    }
</style>