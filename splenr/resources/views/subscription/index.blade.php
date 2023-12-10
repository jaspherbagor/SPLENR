@extends('layouts.app')

@section('content')

    <div class="container px-4 py-5">
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-2" style="width: 18rem;">
                    <div class="card-body">
                      <h5 class="card-title fw-semibold">Weekly - ₱500.00</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item">An item</li>
                      <li class="list-group-item">A second item</li>
                      <li class="list-group-item">A third item</li>
                    </ul>
                    <div class="card-body text-center">
                        <a href="{{ route('pay.weekly') }}" class="card-link">
                            <button class="btn btn-success">Pay</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-2" style="width: 18rem;">
                    <div class="card-body">
                      <h5 class="card-title fw-semibold">Monthly - ₱1,500.00</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item">An item</li>
                      <li class="list-group-item">A second item</li>
                      <li class="list-group-item">A third item</li>
                    </ul>
                    <div class="card-body text-center">
                        <a href="{{ route('pay.monthly') }}" class="card-link">
                            <button class="btn btn-success">Pay</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-2" style="width: 18rem;">
                    <div class="card-body">
                      <h5 class="card-title fw-semibold">Yearly ~ ₱10,000.00</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item">An item</li>
                      <li class="list-group-item">A second item</li>
                      <li class="list-group-item">A third item</li>
                    </ul>
                    <div class="card-body text-center">
                        <a href="{{ route('pay.yearly') }}" class="card-link">
                            <button class="btn btn-success">Pay</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection