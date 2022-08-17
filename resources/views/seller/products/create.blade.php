@extends('seller.layouts.app')
@section('content')

<form method="POST" action="{{ route('product.store') }}" enctype="multipart/form-data">
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
              <input type="text" class="form-control" name="name" id="name" placeholder="Cabbage" />
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="description">Description</label>
            <div class="col-sm-10">
              <input
                type="text" class="form-control" name="description" id="description" placeholder="A green vegetable"/>
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="price">Price</label>
            <div class="col-sm-10">
              <div class="input-group">
                <span class="input-group-text">RM</span>
                <input name="price" id="price" type="text" class="form-control" placeholder="Amount" aria-label="Amount (to the nearest dollar)"/>
                <span class="input-group-text">.00</span>
              </div>
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="category_id">Category</label>
            <div class="col-sm-10">
              <select id="category" class="form-select" name="category_id">
                <option>Choose product category</option>
              @foreach ($category as $categories)
              <option value="{{ $categories->id }}">{{ $categories->name }}</option>
              @endforeach
              </select> 
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="stock">Stock</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="stock" name="stock" placeholder="Product Stock" />
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="image">Image</label>
            <div class="col-sm-10">
              <input class="form-control" type="file" id="image" name="image"/>
            </div>
          </div>
          <div class="row justify-content-end">
            <div class="col-sm-10">
              <button type="submit" class="btn btn-primary" value="Save">Save</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</form>
@endsection