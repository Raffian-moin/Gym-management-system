@extends('admin.layouts.master')

@section('title', 'Branch List')

@section('branch-menu', 'active')
@section('collapse-show', 'show')
@section('branch-list', 'active')

@section('page-title', 'Create Department')
  
@section('breadcumb')
   <ol class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page"> <a href="{{ route('departments.index') }}">Branch</a> </li>
        <li class="breadcrumb-item active" aria-current="page">Create Department</li>
    </ol> 
@endsection

@section('button')
   <div class="btn-group">
       <a href="{{ route('departments.index') }}" class="btn btn-primary active">
           <i class="fas fa-list"></i>
           List
       </a>
   </div>
@endsection

@section('page_header', 'Create Department')

{{-- @include('admin.layouts.error')
@include('admin.layouts.success') --}}

@section('content')
    {!! Form::open(['route' => 'departments.store', 'method' => 'POST']) !!}
    {!! Form::token() !!}
        @include('admin.department.form')
    {!! Form::close() !!}
@endsection