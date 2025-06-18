@extends('layouts.app')

@section('card')
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">

            <h1>Hello, world!</h1>
            <button class="btn btn-danger">Click me</button>
            <p>{{ $variable }}</p>
            <p>{{ $variable2 }}</p>
            <p>{{ $variable3 }}</p>
            <p>{{ $variable4 }}</p>

            </p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
@endsection
