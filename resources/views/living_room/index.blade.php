@extends('layouts.frontend')

@section('content')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <div class="container mt-5">
        <h1 class="text-center mb-4">Living Room Products</h1>

        <!-- Yeni Ürün Ekleme Butonu -->
        <div class="text-end mb-3">
            <a href="{{ route('living_room.create') }}" class="btn btn-primary"><i class="bi bi-plus-circle"></i> Add New Product</a>
        </div>

        <!-- Kart Görünümü Başlangıcı -->
        <div class="row mb-4">
            @foreach ($livingRoomItems as $item)
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <img src="{{ $item->image }}" alt="{{ $item->name }}" class="card-img-top" style="height: 250px; object-fit: cover;">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">{{ $item->name }}</h5>
                            <p class="card-text">{{ Str::limit($item->description, 50) }}</p>
                            <div class="d-flex justify-content-between align-items-center mt-auto">
                                <span class="badge bg-success">${{ $item->price }}</span>
                                <a href="{{ route('living_room.show', $item->id) }}" class="btn btn-primary btn-sm">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <!-- Kart Görünümü Sonu -->

        <!-- Tablo Görünümü Başlangıcı -->
        <h2 class="text-center mb-4">Product Table</h2>
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
            <tr>
                <th>Name</th>
                <th>Image</th>
                <th>Description</th>
                <th>Price</th>
                <th>Stock</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($livingRoomItems as $item)
                <tr>
                    <td>{{ $item->name }}</td>
                    <td><img src="{{ $item->image }}" alt="{{ $item->name }}" width="50"></td>
                    <td>{{ Str::limit($item->description, 30) }}</td>
                    <td>${{ $item->price }}</td>
                    <td>{{ $item->stock }}</td>
                    <td>
                        <a href="{{ route('living_room.show', $item->id) }}" class="btn btn-info btn-sm"><i class="bi bi-eye"></i> View</a>
                        <a href="{{ route('living_room.edit', $item->id) }}" class="btn btn-warning btn-sm"><i class="bi bi-pencil-square"></i> Edit</a>
                        <form action="{{ route('living_room.destroy', $item->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this product?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i> Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>
@endsection
