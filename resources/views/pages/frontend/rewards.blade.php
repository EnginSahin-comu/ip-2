@extends('layouts.frontend')

@section('content')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <div class="container py-5">
        <h2 class="text-center mb-4">Rewards</h2>
        <div class="row justify-content-center">
            @foreach ($rewards as $reward)
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm">
                        <img src="{{ $reward->image_url }}" class="card-img-top" alt="{{ $reward->name }}">
                        <div class="card-body">
                            <h5 class="card-title text-center font-weight-bold">{{ $reward->name }}</h5>
                            <p class="card-text text-muted text-center">{{ $reward->description }}</p>
                            <p class="text-center font-weight-bold text-primary">Points Required: {{ $reward->points_required }}</p>
                            <div class="text-center">
                                <a href="#" class="btn btn-primary btn-sm">Redeem Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
