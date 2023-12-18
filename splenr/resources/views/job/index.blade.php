@extends('layouts.admin.main')
@section('content')
<div class="container-fluid mt-5 px-4">
    <div class="row justify-content-center">
        <h2 class="fw-bolder">All Jobs</h2>
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
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Title</th>
                            <th>Created on</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach($jobs as $job)
                        <tr>
                            <td>{{ $job->title }}</td>
                            <td>{{ $job->created_at->format('Y-m-d') }}</td>
                            <td>Edit</td>
                            <td>Delete</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>
@endsection