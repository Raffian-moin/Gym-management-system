@extends('admin.layouts.master')

@section('title', 'Branch List')

@section('branch-menu', 'active')
@section('collapse-show', 'show')
@section('branch-list', 'active')

@section('page-title', 'View Branch')
  
@section('breadcumb')
   <ol class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page"> <a href="{{ route('branches.index') }}">Branch</a> </li>
        <li class="breadcrumb-item active" aria-current="page">View Branch</li>
    </ol> 
@endsection

@section('button')
   <div class="btn-group">
       <a href="{{ route('branches.index') }}" class="btn btn-primary active">
           <i class="fas fa-list"></i>
           List
       </a>
   </div>
@endsection

@section('page_header', 'View Branch')

@section('content')
    @include('admin.branch.view-items')
@endsection