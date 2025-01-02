@extends('layouts.frontend')

@section('content')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <div class="container mt-5">
        <h1 class="text-center mb-4">Showcase</h1>
        <div class="row">
            @foreach ($showcases as $showcase)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ $showcase->image_url }}" class="card-img-top" alt="{{ $showcase->title }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $showcase->title }}</h5>
                            <p class="card-text">{{ $showcase->description }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
