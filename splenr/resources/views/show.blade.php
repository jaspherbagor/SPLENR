@extends('layouts.app')

@section('content')
<div class="container py-5 px-4">
    <div class="row mt-5 justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <img src="{{ Storage::url($listing->feature_image) }}" alt="" class="card-img-top">
                <div class="card-body">
                    <a href="{{ route('company', [$listing->profile->id]) }}">
                        <img src="{{ Storage::url($listing->profile->profile_pic) }}" width="60" height="60" alt="company profile image" class="rounded-circle">
                    </a>
                    <b>{{ $listing->profile->name }}</b>
                    <h2 class="card-title fw-bold">{{ $listing->title }}</h2>
                    @if(Session::has('success'))
                    <div class="alert alert-success">{{ Session::get('success') }}</div>
                    @endif
                    <span class="badge bg-primary">{{ $listing->job_type }}</span>
                    <p class="mt-3">Salary: <span class="fw-bold">₱{{ number_format($listing->salary,2) }}</span></p>
                    <p>Address: <span class="fw-bold">{{ $listing->address }}</span></p>
                    <h4 class="mt-4">Description</h4>
                    <p class="card-text">{!! $listing->description !!}</p>
                    <h4>Roles and Responsibilities</h4>
                    {!! $listing->roles !!}
                    <p class="card-text mt-4">Application Closing Date: <span class="fw-bold">{{ $listing->application_close_date }}</span></p>
                    @if(Auth::check())
                        @if(auth()->user()->resume)
                        <form action="{{ route('application.submit', [$listing->id]) }}" method="post">@csrf
                            <button type="submit" class="btn btn-primary mt-3">Apply Now</button>
                        </form>
                        @else
                        <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                            Apply
                        </button>
                        @endif
                    @else 
                        <p class="fw-bold">Please login to apply! <span class="text-primary"><a href="{{ route('login') }}">Login.</a></span></p>

                    @endif
                    {{-- Modal --}}
                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <form action="{{ route('application.submit', [$listing->id]) }}" method="post">@csrf
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Upload Resume</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                    <input type="file" id="uploadResumeFile">
                                    </div>
                                    <div class="modal-footer">
                                    <button type="submit" disabled class="btn btn-primary" id="btnApply">Apply</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    // Get a reference to the file input element
    const uploadResume = document.querySelector('#uploadResumeFile');

    // Create a FilePond instance
    const pond = FilePond.create(uploadResume);

    pond.setOptions({
    server: {
        url: '/resume/upload',
        process: {
            method: 'POST',
            withCredentials: false,
            headers: {'X-CSRF-TOKEN': '{{ csrf_token() }}'},
            ondata: (formData) => {
                formData.append('file', pond.getFiles()[0].file, pond.getFiles()[0].file.name)

                return formData
            },
            onload: (response) =>{
                document.getElementById('btnApply').removeAttribute('disabled')
            },
            onerror: (response) => {
                console.log('Error while uploading...', response)
            }
        },
    },
});
</script>
@endsection