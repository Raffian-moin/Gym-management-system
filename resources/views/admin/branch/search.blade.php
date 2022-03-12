@extends('admin.layouts.search')

@section('search-content')
    <div class="row">
        <div class="col-sm-4 form-group">
            <label class="font-weight-bold control-label" for="name">Name</label>
            {!! Form::text('name', null, ['class'=>'form-control form-control-sm']) !!}
        </div>
        <div class="col-sm-4 form-group">
            <label class="font-weight-bold control-label" for="name">Mobile Number</label>
            @php
                echo Form::text('mobile_number', null, formClass('mobile_number', $errors));
            @endphp
        </div>
    </div>
@endsection