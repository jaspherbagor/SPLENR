@extends('layouts.admin.main')

@section('content')
<div class="container px-4 mt-5">
    <h2 class="fw-bolder text-center mb-5">SUBSCRIBE TO A PLAN</h2>
    <div class="row">
        @if(Session::has('message'))
            <div class="alert alert-warning">{{ Session::get('message') }}</div>
        @endif
        <div class="col-lg-4 col-md-4 col-sm-6 d-flex align-items-center justify-content-center">
            <div class="card mb-5 weekly-subscription" style="width: 22rem;">
                <div class="card-body">
                    <h5 class="card-title fw-semibold">Weekly Plan</h5>
                    <h1 class="fw-bolder">₱500.00</h1>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">An item</li>
                    <li class="list-group-item">A second item</li>
                    <li class="list-group-item">A third item</li>
                </ul>
                <div class="card-body text-center">
                    <a href="{{ route('pay.weekly') }}" class="card-link">
                        <button class="btn btn-success btn-outline-dark">Select Plan</button>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 d-flex align-items-center justify-content-center">
            <div class="card mb-5 monthly-subscription" style="width: 22rem;">
                <div class="card-body">
                    <h5 class="card-title fw-semibold">Monthly Plan</h5>
                    <h1 class="fw-bolder">₱1,500.00</h1>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">An item</li>
                    <li class="list-group-item">A second item</li>
                    <li class="list-group-item">A third item</li>
                </ul>
                <div class="card-body text-center">
                    <a href="{{ route('pay.monthly') }}" class="card-link">
                        <button class="btn btn-success btn-outline-dark">Select Plan</button>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-4 d-flex align-items-center justify-content-center">
            <div class="card mb-5 yearly-subscription" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title fw-semibold">Yearly Plan</h5>
                    <h1 class="fw-bolder">₱10,000.00</h1>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">An item</li>
                    <li class="list-group-item">A second item</li>
                    <li class="list-group-item">A third item</li>
                </ul>
                <div class="card-body text-center">
                    <a href="{{ route('pay.yearly') }}" class="card-link">
                        <button class="btn btn-success btn-outline-dark">Select Plan</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection