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

@section('content')
<div class="container-fluid" id="container-wrapper">
    <div class="row">
        <div class="col-lg-12 mb-4">
            <!-- Simple Tables -->
            <div class="card">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                 <a href="{{ route('branches.create')}}" class="btn btn-info btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fas fa-info-circle"></i>
                    </span>
                    <span class="text">Split Button Info</span>
                  </a>
            </div>
            <div class="table-responsive">
                <table class="table align-items-center table-flush">
                <thead class="thead-light">
                    <tr>
                    <th>Order ID</th>
                    <th>Customer</th>
                    <th>Item</th>
                    <th>Status</th>
                    <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <td><a href="#">RA0449</a></td>
                    <td>Udin Wayang</td>
                    <td>Nasi Padang</td>
                    <td><span class="badge badge-success">Delivered</span></td>
                    <td><a href="#" class="btn btn-sm btn-primary">Detail</a></td>
                    </tr>
                    <tr>
                    <td><a href="#">RA5324</a></td>
                    <td>Jaenab Bajigur</td>
                    <td>Gundam 90' Edition</td>
                    <td><span class="badge badge-warning">Shipping</span></td>
                    <td><a href="#" class="btn btn-sm btn-primary">Detail</a></td>
                    </tr>
                    <tr>
                    <td><a href="#">RA8568</a></td>
                    <td>Rivat Mahesa</td>
                    <td>Oblong T-Shirt</td>
                    <td><span class="badge badge-danger">Pending</span></td>
                    <td><a href="#" class="btn btn-sm btn-primary">Detail</a></td>
                    </tr>
                    <tr>
                    <td><a href="#">RA1453</a></td>
                    <td>Indri Junanda</td>
                    <td>Hat Rounded</td>
                    <td><span class="badge badge-info">Processing</span></td>
                    <td><a href="#" class="btn btn-sm btn-primary">Detail</a></td>
                    </tr>
                    <tr>
                    <td><a href="#">RA1998</a></td>
                    <td>Udin Cilok</td>
                    <td>Baby Powder</td>
                    <td><span class="badge badge-success">Delivered</span></td>
                    <td><a href="#" class="btn btn-sm btn-primary">Detail</a></td>
                    </tr>
                </tbody>
                </table>
            </div>
            <div class="card-footer"></div>
            </div>
        </div>
    </div>
</div>
@endsection