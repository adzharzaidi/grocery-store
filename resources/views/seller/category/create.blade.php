@extends('seller.layouts.app')
@section('content')

<form method="POST" action="{{ route('category.store') }}">
  @csrf
<div class="col-xxl">
    <div class="card mb-4">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="mb-0">Add Category</h5>
      </div>
      <div class="card-body">
        <form>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="name">Name</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="name" id="name" placeholder="Vegetable" />
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