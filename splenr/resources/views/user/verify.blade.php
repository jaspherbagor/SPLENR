@extends('layouts.app')

@section('content')
<div class="container px-4 py-5">
    <div class="row justify-content-center">
        <div class="card">
            <div class="card-header">Verify Account</div>
            <div class="card-body">
                <p>Your account is not verified. Please verify your account first. 
                    <a href="{{ route('resend.email') }}">Resend verification email.</a>
                </p>
            </div>
        </div>
    </div>
</div>
@endsection