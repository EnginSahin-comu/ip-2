@extends('layouts.frontend')

@section('content')
    <div class="container mt-5">
        <h1 class="text-center mb-4">Add New Decoration</h1>

        <form action="{{ route('decorations.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Decoration Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Image URL</label>
                <input type="text" class="form-control" id="image" name="image" required>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" step="0.01" class="form-control" id="price" name="price" required>
            </div>

            <div class="mb-3">
                <label for="stock" class="form-label">Stock</label>
                <input type="number" class="form-control" id="stock" name="stock" required>
            </div>

            <button type="submit" class="btn btn-primary">Add Decoration</button>
        </form>
    </div>
@endsection
