<div class="card mb-3">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-6 form-group">
                <label class="font-weight-bold control-label" for="name">Name</label>
                <p>{{ $branch->name }}</p>
            </div>
            <div class="col-sm-6 form-group">
                <label class="font-weight-bold control-label" for="name">Mobile Number</label>
                <p>{{ $branch->mobile_number }}</p>
            </div>
            <div class="col-sm-6 form-group">
                <label class="font-weight-bold control-label" for="name">Email</label>
                <p>{{ $branch->email }}</p>
            </div>
            <div class="col-sm-6 form-group">
                <label class="font-weight-bold" for="name">Address</label>
                <p>{{ $branch->address }}</p>
            </div>
        </div>
    </div>
</div>