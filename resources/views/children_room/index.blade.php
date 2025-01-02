@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <h1 class="mb-4 text-center">Children Room Products</h1>
        <div class="row">
            @forelse($childrenRooms as $room)
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <img src="{{ $room->image }}" class="card-img-top" alt="{{ $room->name }}">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">{{ $room->name }}</h5>
                            <p class="card-text">{{ Str::limit($room->description, 100, '...') }}</p>
                            <p class="card-text"><strong>${{ number_format($room->price, 2) }}</strong></p>
                            <p class="card-text">Stock: {{ $room->stock }}</p>
                            <div class="mt-auto">
                                <a href="#" class="btn btn-primary btn-block">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <p class="text-center">No products available in the Children Room category.</p>
                </div>
            @endforelse
        </div>
    </div>
@endsection
