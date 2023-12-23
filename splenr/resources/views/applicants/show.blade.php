@extends('layouts.admin.main')

@section('content')

<div class="container mt-3 justify-content-center px-4">
    <div class="row justify-content-center">
        <div class="col-md-10 my-4">
            <h2 class="fw-bolder">{{ $listing->title }}</h2>
        </div>
        @foreach($listing->users as $user)
            Name: {{ $user->name }}
            Email: {{ $user->email }}
            <a href="#">Download Resume</a>
        @endforeach
    </div>
</div>

@endsection