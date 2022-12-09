@extends('layouts.app')

@section('content')
<div class="container">

<div class="row">
    <div class="col-xl-3 col-md-6">
        <div class="card border-success mb-3 shadow">
            <div class="card-body">New Booking<i class="fas fa-plus float-right"></i></div>
            <div class="card-footer bg-success d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="#">View Details</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card border-primary mb-3 shadow">
            <div class="card-body">Search Booking <i class="fas fa-search float-right"></i></div>
            <div class="card-footer bg-primary d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="#">View
                    Details</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card border-success mb-3 shadow">
            <div class="card-body">List Booking <i class="fas fa-list float-right"></i></div>
            <div class="card-footer bg-success d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="#">View Details</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card  mb-3 border-primary shadow">
            <div class="card-body">Report <i class="fas fa-file-alt float-right"></i></div>
            <div class="card-footer d-flex align-items-center justify-content-between bg-primary">
                <a class="small text-white stretched-link" href="#">View
                    Details</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection
