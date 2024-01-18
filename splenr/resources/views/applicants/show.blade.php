@extends('layouts.admin.main')

@section('content')
    <div class="container-fluid mt-3 px-4">
        <div class="px-2">
            <div class="mt-3 mb-2">
                <p class="fw-semibold fs-2 text-center text-uppercase pb-3">{{ $listing->title }}</p>
                @if (Session::has('success'))
                    <div class="alert alert-success">{{ Session::get('success') }}</div>
                @endif
            </div>
            @if (count($listing->users) > 0)
                @foreach ($listing->users as $user)
                    <div class="card mt-3 py-2 my-0 {{ $user->pivot->application_status === 'shortlisted' ?
                    'bg-success' : '' }}">
                        <div class="row g-0">

                            <div class="col-md-3 d-flex align-items-center justify-content-md-start
                            justify-content-sm-center justify-content-center px-2">
                                @if ($user->profile_pic)
                                    <img src="{{ Storage::url($user->profile_pic) }}" alt="Profile Picture"
                                        class="rounded-circle profile-image" height="100">
                                @else
                                    <img src="https://placehold.co/400" alt="Profile Picture"
                                        class="rounded-circle profile-image" height="100">
                                @endif
                            </div>
                            <div class="col-md-4 d-flex align-items-center justify-content-md-end
                            justify-content-sm-center justify-content-center px-2">
                                <div class="container">
                                    <p class="card-text py-0 my-1">
                                        Name:
                                        <span class="fw-bolder">
                                            {{ $user->name }}
                                        </span>
                                    </p>
                                    <p class="card-text py-0 my-1">
                                        Email:
                                        <span class="fw-bolder">
                                            {{ $user->email }}
                                        </span>
                                    </p>
                                    <p class="card-text py-0 my-1">
                                        Applied on:
                                        <span class="fw-bolder">
                                            {{ $user->pivot->created_at }}
                                        </span>
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-5 d-flex align-items-center justify-content-md-start
                            justify-content-sm-center justify-content-center px-2">
                                <form action="{{ route('applicants.shortlist', [$listing->id, $user->id]) }}"
                                    method="post">@csrf
                                    <a href="{{ Storage::url($user->resume) }}"
                                        class="btn btn-warning btn-outline-dark fw-semibold my-2 me-2" target="_blank">
                                        Download Resume
                                    </a>
                                    <button type="submit"
                                    class="{{ $user->pivot->application_status === 'shortlisted' ? 'btn btn-secondary btn-outline-dark' : 'btn btn-dark' }} fw-semibold">
                                        {{ $user->pivot->application_status === 'shortlisted' ? 'Shortlisted' : 'Shortlist' }}
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <p class="text-center">No applicants for this position.</p>
            @endif

        </div>
    </div>
@endsection
