@extends('layouts.admin.main')

@section('content')

<div class="container mt-3 justify-content-center px-4">
    <div class="row justify-content-center">
        <div class="col-md-8 my-5">
            <h2 class="fw-bolder mb-5">Post a Job</h2>
            <form action="#" method="POST">@csrf
                <div class="form-group mb-4">
                    <label for="feature_image">Feature Image</label>
                    <input type="file" name="feature_image" id="feature_image" class="form-control">
                </div>
                <div class="form-group mb-4">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" class="form-control">
                </div>
                <div class="form-group mb-4">
                    <label for="description">Description</label>
                    <textarea type="text" name="description" id="description" class="form-control"></textarea>
                </div>
                <div class="form-group mb-4">
                    <label for="description">Roles and Responsibility</label>
                    <textarea type="text" name="roles" id="description" class="form-control"></textarea>
                </div>
                <div class="form-group mb-4">
                    <label for="job_type" class="mb-2">Job Types</label>
                    <div class="form-check mb-2">
                        <input class="form-check-input" type="radio" name="job_type" id="Fulltime" value="Fulltime">
                        <label for="Fulltime" class="form-check-label">Fulltime</label>
                    </div>
                    <div class="form-check mb-2">
                        <input class="form-check-input" type="radio" name="job_type" id="Parttime" value="Fulltime">
                        <label for="Parttime" class="form-check-label">Parttime</label>
                    </div>
                    <div class="form-check mb-2">
                        <input class="form-check-input" type="radio" name="job_type" id="Casual" value="Casual">
                        <label for="Casual" class="form-check-label">Casual</label>
                    </div>
                    <div class="form-check mb-2">
                        <input class="form-check-input" type="radio" name="job_type" id="Contract" value="Contract">
                        <label for="Contract" class="form-check-label">Contract</label>
                    </div>
    
                </div>
                <div class="form-group mb-4">
                    <label for="address">Address</label>
                    <input type="text" name="address" id="address" class="form-control">
                </div>
                <div class="form-group mb-4">
                    <label for="title">Application Closing Date</label>
                    <input type="text" name="date" id="datepicker" class="form-control">
                </div>

                <button type="submit" class="btn btn-success">Post a Job</button>
                
            </form>
        </div>
    </div>
</div>

@endsection