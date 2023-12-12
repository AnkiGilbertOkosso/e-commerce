<!-- resources/views/products/edit.blade.php -->

@extends('layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Product</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('products.update', $product->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="name">Product Name:</label>
                            <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $product->name) }}" required>
                        </div>

                        <div class="form-group">
                            <label for="description">Product Description:</label>
                            <textarea name="description" id="description" class="form-control" rows="4" required>{{ old('description', $product->description) }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="price">Product Price:</label>
                            <input type="number" name="price" id="price" class="form-control" step="0.01" value="{{ old('price', $product->price) }}" required>
                        </div>

                        <div class="form-group">
                            <label for="image">Product Image:</label>
                            <input type="file" name="image" id="image" class="form-control-file">
                        </div>

                        @if($product->image)
                            <img src="{{ $product->image }}" alt="{{ $product->name }}" class="img-fluid mb-2">
                        @endif

                        <button type="submit" class="btn btn-primary">Update Product</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
