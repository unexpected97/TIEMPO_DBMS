@extends('layouts.app')
 
@section('body')
    <h1 class="mb-0">Add Product</h1>
    <hr />
    <form action="{{ route('product.store') }}" method="POST">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="name" class="form-control" placeholder="Name">
            </div>
            <div class="col">
                <input type="text" name="price" class="form-control" placeholder="Price">
            </div>
            <div class="col">
                <input type="text" name="quantity" class="form-control" placeholder="Quantity">
            </div>
            <div class="col">
                <input type="text" name="product_code" class="form-control" placeholder="Product Code">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <textarea class="form-control" name="description" placeholder="Description"></textarea>
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection