@extends('layouts.frontend')

@section('content')
    <div class="container">
        <h1 class="text-center mb-4">Living Room Products</h1>

        <!-- Yeni Ürün Ekleme Formu -->
        <h2>Add New Product</h2>
        <form action="{{ route('living_room.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Product Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Product Image URL</label>
                <input type="text" class="form-control" id="image" name="image" required>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Price ($)</label>
                <input type="number" step="0.01" class="form-control" id="price" name="price" required>
            </div>

            <div class="mb-3">
                <label for="stock" class="form-label">Stock</label>
                <input type="number" class="form-control" id="stock" name="stock" required>
            </div>

            <div class="mb-3">
                <label for="category" class="form-label">Category</label>
                <select class="form-select" id="category" name="category_id" required>
                    <option value="" selected>Select Category</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Add Product</button>
        </form>

        <!-- Ürün Kartları ve Tablo Listeleme -->
        <h2 class="mt-5">Living Room Products List</h2>

        <div class="row mb-4">
            @foreach ($livingRoomItems as $item)
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="{{ $item->image }}" alt="{{ $item->name }}" class="card-img-top" style="height: 200px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->name }}</h5>
                            <p class="card-text">${{ $item->price }}</p>
                            <p class="card-text">{{ Str::limit($item->description, 50) }}</p>
                            <a href="{{ route('living_room.show', $item->id) }}" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Ürün Detayları Tablosu -->
        <h2>Product Details Table</h2>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Name</th>
                <th>Image</th>
                <th>Description</th>
                <th>Price</th>
                <th>Stock</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($livingRoomItems as $item)
                <tr>
                    <td>{{ $item->name }}</td>
                    <td><img src="{{ $item->image }}" alt="{{ $item->name }}" width="50"></td>
                    <td>{{ $item->description }}</td>
                    <td>${{ $item->price }}</td>
                    <td>{{ $item->stock }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
