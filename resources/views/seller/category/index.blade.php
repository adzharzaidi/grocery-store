@extends('seller.layouts.app')
@section('content')

    <div class="card">
        <h5 class="card-header">Category List</h5>
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
                <th>Name</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @foreach ($category as $categories)
            <tr>
                <td>{{ $categories->name }}</td>
                <td>
                    <div class="row gy-3">
                        <div class="col-md-2">
                            <div class="">
                                <button type="button" class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="right" title="Edit" onclick="window.location.href='{{ route('category.edit',$categories) }}'">
                                    <span class="tf-icons bx bx-edit-alt me-1"></span>
                            </button>
                            <button type="button" class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="right" title="Delete" onclick="if(confirm('Are you sure you want to delete?')){ window.location.href='{{ route('category.destroy',$categories) }}' }">
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