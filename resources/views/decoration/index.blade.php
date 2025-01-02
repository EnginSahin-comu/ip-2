@extends('layouts.frontend')

@section('content')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <div class="container mt-5">
        <h1 class="text-center mb-4">Decorations</h1>

        <div class="row">
            @foreach ($decorations as $decoration)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ $decoration->image }}" class="card-img-top" alt="{{ $decoration->name }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $decoration->name }}</h5>
                            <p class="card-text">{{ Str::limit($decoration->description, 50) }}</p>
                            <span class="badge bg-success">${{ $decoration->price }}</span>
                            <a href="{{ route('decorations.show', $decoration->id) }}" class="btn btn-primary mt-3">View Details</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
