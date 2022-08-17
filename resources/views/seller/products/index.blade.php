@extends('seller.layouts.app')
@section('content')

    <div class="card">
        <h5 class="card-header">Product List</h5>

            {{-- <div class="col-sm-10">
                <button class="btn btn-sm btn-primary float-right" style="margin-right:10px" onclick="window.location.href='{{ route('product.create') }}'"><i class="mdi mdi-plus-circle-outline"></i> Add Product</button>
            </div> --}}
  
         @if (Session::has('success'))
         <div class="card-body">
            <div class="alert alert-success" role="alert">
            {!! Session::get('success') !!}
            </div>
         </div>
        @endif
       
        <div class="table-responsive text-nowrap">
        <table class="table">
            <thead>
            <tr>
                <th>Image</th>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Category</th>
                <th>Stock</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @foreach ($product as $products)
            <tr>
                <td>
                    <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                        <li
                          data-bs-toggle="tooltip"
                          data-popup="tooltip-custom"
                          data-bs-placement="top"
                          class="avatar avatar-sm pull-up"
                    >
                          <img src="{{ asset('storage/public/images/'.$products->image) }}" class="rounded-circle" />
                        </li>
                    </ul>
                </td>
                <td>{{ $products->name }}</td>
                <td>{{ $products->description }}</td>
                <td>RM {{ $products->price }}</td>
                <td>{{ $products->category->name }}</td>
                <td>{{ $products->stock }}</td>
                <td>
                    <div class="row gy-3">
                        <div class="col-md-2">
                            <div class="">
                                <button type="button" class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="right" title="Edit" onclick="window.location.href='{{ route('product.edit',$products) }}'">
                                    <span class="tf-icons bx bx-edit-alt me-1"></span>
                            </button>
                            <button type="button" class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="right" title="Delete" onclick="if(confirm('Are you sure you want to delete?')){ window.location.href='{{ route('product.destroy',$products) }}' }">
                                <span class="tf-icons bx bx-trash me-1"></span>
                              </button>

                            </div>

                        </div>
                        
                    </div>
                </td>
            </tr>  
            @endforeach         
            </tbody>
        </table>
        </div>
    </div>
@endsection