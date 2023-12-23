@extends('layouts.admin.main')

@section('content')

<div class="container mt-3 justify-content-center px-4">
    <div class="row justify-content-center">

        @foreach($listings as $listing)        
            {{ $listing->title }}|{{ $listing->users_count }}<br><br>
            @foreach($listing->users()->get() as $applicant) 
                {{ $applicant->name }}<br>
                {{ $applicant->email }}<br>
            @endforeach
        @endforeach
    </div>
</div>

@endsection