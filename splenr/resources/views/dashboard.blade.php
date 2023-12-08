@extends('layouts.app')

@section('content')

<div class="container px-4 py-5">
    <div class="row justify-content-center">
        {{ auth()->user()->name }}
        {{ auth()->user()->email }}
    </div>
</div>

@endsection