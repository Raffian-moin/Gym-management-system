@extends('admin.layouts.master')

@section('title', 'Branch List')

@section('branch-menu', 'active')
@section('collapse-show', 'show')
@section('branch-list', 'active')

@section('page-title', 'Branch List')
  
@section('breadcumb')
   <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="./">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Branch</li>
    </ol> 
@endsection

@section('button')
   <div class="btn-group">
       <a href="{{ route('branches.create') }}" class="btn btn-primary active">
           <i class="fas fa-plus-circle"></i>
           Add
       </a>
   </div>
@endsection

@if (!$branches->isEmpty())
    @section('search')
        @include('admin.branch.search')
    @endsection
@endif

@section('content')

@include('admin.layouts.success')
@include('admin.layouts.error')

@if (!$branches->isEmpty())
    <table class="table table-bordered table-striped align-items-center table-flush">
        <thead class="bg-secondary bg-gradient text-white">
            <tr>
            <th>SL</th>
            <th>Name</th>
            <th>Mobile Number</th>
            <th>Address</th>
            <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($branches as $branch)
            <tr>
                <td>{{ $loop->index + 1 }}</td>
                <td>{{ $branch->name }}</td>
                <td>{{ $branch->mobile_number }}</td>
                <td>{{ $branch->address }}</td>
                <td>
                    <div class="btn-group">
                        <button type="button" class="btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Actions
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{ route('branches.edit',$branch) }}">Edit</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('branches.show',$branch) }}">View</a>
                            <div class="dropdown-divider"></div>
                                {{-- <button>Delete User</button> --}}
                                <a class="dropdown-item" onclick="alert('Do you want to delete this item ?')" href="{{ route('branch.delete',$branch) }}">Delete</a>
                        </div>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@else
    <div class="alert alert-warning alert-dismissible" role="alert">
        No Data Found to Display
    </div>
@endif
@endsection