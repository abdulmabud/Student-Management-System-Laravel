@extends('masteradmin')

@section('title')
Dashboard- Admin Panel
@endsection

@section('content')
<div id="content-wrapper">

    <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Overview</li>
        </ol>

        <!-- Icon Cards-->
        <div class="row">
            <div class="col-xl-3 col-sm-6 mb-3">
                <div class="card text-white bg-primary o-hidden h-100">
                    <div class="card-body">
                        <div class="text-center">
                            <h3>{{ $totalStudent }}</h3> Total Student
                        </div>
                    </div>
                  <a class="card-footer text-white clearfix small z-1" href="{{ route('admin.students') }}">
                        <span class="float-left">View Details</span>
                        <span class="float-right">
                            <i class="fas fa-angle-right"></i>
                        </span>
                    </a>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
                <div class="card text-white bg-warning o-hidden h-100">
                    <div class="card-body">
                        <div class="text-center">
                            <h3>{{ $totalTeacher }}</h3> Total Teacher
                        </div>
                    </div>
                    <a class="card-footer text-white clearfix small z-1" href="{{ route('admin.teachers') }}">
                        <span class="float-left">View Details</span>
                        <span class="float-right">
                            <i class="fas fa-angle-right"></i>
                        </span>
                    </a>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
                <div class="card text-white bg-success o-hidden h-100">
                    <div class="card-body">
                        <div class="text-center">
                            <h3>{{ $totalClass }}</h3> Total Class
                        </div>
                    </div>
                    <a class="card-footer text-white clearfix small z-1" href="{{ route('admin.class') }}">
                        <span class="float-left">View Details</span>
                        <span class="float-right">
                            <i class="fas fa-angle-right"></i>
                        </span>
                    </a>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
                <div class="card text-white bg-danger o-hidden h-100">
                    <div class="card-body">
                        <div class="text-center">
                            <h3>{{ $totalBook }}</h3> Total Book
                        </div>
                    </div>
                    <a class="card-footer text-white clearfix small z-1" href="{{ route('admin.library') }}">
                        <span class="float-left">View Details</span>
                        <span class="float-right">
                            <i class="fas fa-angle-right"></i>
                        </span>
                    </a>
                </div>
            </div>
        </div>





        <!-- /.content-wrapper -->
        @endsection
