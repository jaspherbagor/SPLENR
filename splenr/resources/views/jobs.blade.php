@extends('layouts.app')

@section('content')

<div class="container-fluid px-4 py-5">
    <div class="container mt-5">
        <div class="d-flex justify-content-between">
            <h4>Recommended Jobs</h4>
            <button class="btn btn-dark">View</button>
        </div>
        <div class="row mt-2 g-1">
            <div class="col-md-3">
                <div class="card p-2">
                    <div class="text-end">
                        <small>Fulltime</small>
                    </div>
                    <div class="text-center mt-2 p-3">
                        <img src="https://placehold.co/400" alt="" width="60" class="rounded-circle">
                        <span class="d-block fw-bold">Electrical Technician</span>
                        <hr>
                        <span>MERALCO</span>
                        <div class="d-flex flex-row align-items-center justify-content-center">
                            <small class="ms-1">Kawit, Cavite</small>
                        </div>
                        <div class="d-flex justify-content-between mt-3">
                            <span>₱18,000</span>
                            <button class="btn btn-sm btn-outline-dark">Apply</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection