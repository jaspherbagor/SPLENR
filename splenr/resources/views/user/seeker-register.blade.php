@extends('layouts.app')

@section('content')

<div class="container px-4 py-5">
    <div class="row">
        <div class="col-md-6">
            <h1>Looking for a Job?</h1>
            <h3>Please create an account</h3>
            <img src="{{ asset('image/register.png') }}" class="w-25">
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Register</div>
                <form action="{{ route('store.seeker') }}" method="post">@csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Full Name</label>
                            <input type="text" name="name" class="form-control">
                            @if($errors->has('name'))
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control">
                            @if($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control">
                            @if($errors->has('password'))
                            <span class="text-danger">{{ $errors->first('password') }}</span>
                            @endif
                        </div>
                        <br>
                        <div class="form-group">
                            <button class="btn btn-primary" type="submit">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection