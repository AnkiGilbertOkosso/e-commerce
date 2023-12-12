<!-- resources/views/products/create.blade.php -->

@extends('layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Product</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="name">Product Name:</label>
                            <input type="text" name="name" id="name" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="description">Product Description:</label>
                            <textarea name="description" id="description" class="form-control" rows="4" required></textarea>
                        </div>

                        <div class="form-group">
                            <label for="price">Product Price:</label>
                            <input type="number" name="price" id="price" class="form-control" step="0.01" required>
                        </div>

                        <div class="form-group">
                            <label for="image">Product Image:</label>
                            <input type="file" name="image" id="image" class="form-control-file">
                        </div>

                        <button type="submit" class="btn btn-primary">Create Product</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection