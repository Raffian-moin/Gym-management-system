<div class="card mb-3">
    <div class="card-body">
@include('admin.layouts.error')
@include('admin.layouts.success')

<p class="text-info mb-20">
    all fields marked with an asterisk (<strong class="text-danger">*</strong>) are required
</p>
<div class="row">
    <div class="col-sm-6 form-group">
        <label class="font-weight-bold control-label" for="name">Name</label>
        <sup class="text-danger font-weight-bold">*</sup>
        {!! Form::text('name', null, ['class'=>'form-control form-control-sm']) !!}
    </div>
    <div class="col-sm-6 form-group">
        <label class="font-weight-bold control-label" for="name">Mobile Number</label>
        <sup class="text-danger font-weight-bold">*</sup>

        @php
            echo Form::text('mobile_number', null, formClass('mobile_number', $errors));
            echo inputFieldError($errors, 'mobile_number');
        @endphp

    </div>
    <div class="col-sm-6 form-group">
        <label class="font-weight-bold control-label" for="name">Email</label>
        @php
            echo Form::text('email', null, formClass('email', $errors));
            echo inputFieldError($errors, 'email');
        @endphp
    </div>
    <div class="col-sm-6 form-group">
        <label class="font-weight-bold" for="name">Address</label>
        <sup class="text-danger font-weight-bold">*</sup>
        {!! Form::textarea('address', null, ['class'=>'form-control form-control-sm', 'rows' => 2 ]) !!}
    </div>
</div>

<div class="text-right">
    <button class="btn btn-primary active">
        <i class="fas fa-save mr-1"></i>
        Save
    </button>
</div>

</div>
</div>