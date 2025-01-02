@extends('layouts.frontend')

@section('content')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <div class="container py-5">
        <div class="text-center mb-4">
            <h1 class="fw-bold">Deliveries</h1>
            <p class="text-muted">Track your delivery status and details.</p>
        </div>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            @foreach ($deliveries as $delivery)
                <div class="col">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">
                                <i class="bi bi-truck text-primary"></i> Delivery #{{ $delivery->id }}
                            </h5>
                            <ul class="list-unstyled mt-3">
                                <li><strong>User:</strong> {{ $delivery->user->name ?? 'Unknown User' }}</li>
                                <li><strong>Address:</strong> {{ $delivery->address }}</li>
                                <li><strong>City:</strong> {{ $delivery->city }}</li>
                                <li><strong>Phone:</strong> {{ $delivery->phone }}</li>
                                <li>
                                    <strong>Status:</strong>
                                    <span class="badge
                                {{ $delivery->status == 'Pending' ? 'bg-warning text-dark' :
                                   ($delivery->status == 'Shipped' ? 'bg-info' :
                                   ($delivery->status == 'Delivered' ? 'bg-success' : 'bg-secondary')) }}">
                                {{ $delivery->status }}
                            </span>
                                </li>
                            </ul>
                        </div>
                        <div class="card-footer bg-light border-top-0 text-center">
                            <small class="text-muted">Created: {{ $delivery->created_at->format('d M Y, H:i') }}</small>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
