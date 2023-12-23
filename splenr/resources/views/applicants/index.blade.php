{{-- 
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
</div> --}}


@extends('layouts.admin.main')
@section('content')
<div class="container-fluid mt-5 px-4">
    <div class="row justify-content-center px-1">
        <div class="card mb-4 px-0">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Your Jobs
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Created on</th>
                            <th>Total Applicants</th>
                            <th>View Job</th>
                            <th>View Applicants</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($listings as $listing)
                        <tr>
                            <td>{{ $listing->title }}</td>
                            <td>{{ $listing->created_at->format('Y-m-d') }}</td>
                            <td>{{ $listing->users_count }}</td>
                            <td>View</td>
                            <td>View</td>
                        </tr>
                        
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>
@endsection