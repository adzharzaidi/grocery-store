@extends('seller.layouts.app')
@section('content')

<form method="POST" action="{{ route('product.update', $product) }}">
  @csrf
<div class="col-xxl">
    <div class="card mb-4">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="mb-0">Add Product</h5>
      </div>
      <div class="card-body">
        <form>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="name">Name</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="name" id="name" value="{{ $product->name }}" />
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="description">Description</label>
            <div class="col-sm-10">
              <input
                type="text" class="form-control" name="description" id="description" value="{{ $product->description }}"/>
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="price">Price</label>
            <div class="col-sm-10">
              <div class="input-group">
                <span class="input-group-text">RM</span>
                <input name="price" id="price" type="text" class="form-control" value="{{ $product->price }}" aria-label="Amount (to the nearest dollar)"/>
                <span class="input-group-text">.00</span>
              </div>
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="category">Category</label>
            <div class="col-sm-10">
              <select id="category" class="form-select" name="category" value="{{ $product->category }}">
                
                <option value="Vegetable">Vegetable</option>
                <option value="Fruit">Fruit</option>
                <option value="Meat">Meat</option>
              </select>
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="stock">Stock</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="stock" name="stock" value="{{ $product->stock }}" />
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="formFile">Image</label>
            <div class="col-sm-10">
              <input class="form-control" type="file" id="formFile" />
            </div>
          </div>
          <div class="row justify-content-end">
            <div class="col-sm-10">
              <button type="submit" class="btn btn-primary" value="Save">Update</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</form>
@endsection