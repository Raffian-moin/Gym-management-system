@extends('admin.layouts.master')

@section('title', 'Branch List')

@section('branch-menu', 'active')
@section('collapse-show', 'show')
@section('branch-list', 'active')

@section('page-title', 'Create Branch')
  
@section('breadcumb')
   <ol class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page"> <a href="{{ route('branches.index') }}">Branch</a> </li>
        <li class="breadcrumb-item active" aria-current="page">Create Branch</li>
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

{{-- @include('admin.layouts.error')
@include('admin.layouts.success') --}}

@section('content')
    {!! Form::open(['route' => 'branches.store', 'method' => 'POST']) !!}
    {!! Form::token() !!}
        @include('admin.branch.form')
    {!! Form::close() !!}
@endsection