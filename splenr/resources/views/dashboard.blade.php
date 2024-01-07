@extends('layouts.admin.main')

@section('content')

<div class="container-fluid px-4 py-5">
    <div class="container-fluid">

        @if(Session::has('success'))
            <div class="alert alert-success">{{ Session::get('success') }}</div>
        @endif

        @if(Session::has('error'))
        <div class="alert alert-danger">{{ Session::get('error') }}</div>
        @endif

        <div class="container-fluid">
            <h2 class="fw-bolder">Dashboard</h2>
            <p class="pt-2 mb-0">
                Hello, <span class="fw-semibold">{{ auth()->user()->name }}</span>!
                @if(!auth()->user()->billing_ends)
                    @if(Auth::check() && auth()->user()->user_type == 'employer')
                    <span>Your trial {{ now()->format('Y-m-d') > auth()->user()->user_trial ? 'was expired': 'will expire'  }} on {{ auth()->user()->user_trial}}</span>
                    @endif
                @endif
            </p>
            @if(Auth::check() && auth()->user()->user_type == 'employer')
                <p>Your membership {{ now()->format('Y-m-d') > auth()->user()->billing_ends ? 'was expired': 'will expire'  }} on <span class="fw-semibold">{{ auth()->user()->billing_ends}}</span></p>
            @endif
            <div class="row">
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-primary text-white mb-4">
                        <div class="card-body">Total Jobs (<span class="fw-bold">{{ \App\Models\Listing::where('user_id', auth()->id())->count() }}</span>)</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">

                            <a class="small text-white stretched-link" href="{{ route('job.index') }}">View</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-warning text-white mb-4">
                        <div class="card-body">Profile</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="{{ route('user.profile') }}">View</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-success text-white mb-4">
                        <div class="card-body">Plan (<span class="fw-bold">{{ App\Models\User::where('id', auth()->id())->first()->plan }}</span>)</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="{{ route('subscribe') }}">View</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-xl-3 col-md-6">
                    <div class="card bg-danger text-white mb-4">
                        <div class="card-body">Danger Card</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="#">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div> --}}
            </div>
            <div class="row">
                <div class="col-xl-6">
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-chart-area me-1"></i>
                            Area Chart Example
                        </div>
                        <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-chart-bar me-1"></i>
                            Bar Chart Example
                        </div>
                        <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                    </div>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Job Applicants
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
                                <td><a href="{{ route('job.show', [$listing->slug]) }}" class="text-secondary">View</a></td>
                                <td><a href="{{ route('applicants.show', $listing->slug) }}" class="text-success">View</a></td>
                            </tr>
                            
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


    

    </div>
    

</div>

@endsection