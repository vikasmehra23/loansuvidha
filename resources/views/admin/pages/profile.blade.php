@extends('layouts.admin.app')
@section('content')


<!-- Start Breadcrumbbar -->
<div class="breadcrumbbar">
    <div class="row align-items-center">
        <div class="col-md-8 col-lg-8">
            <h4 class="page-title">Profile</h4>
            <div class="breadcrumb-list">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Profile</li>
                </ol>
            </div>
        </div>
        <div class="col-md-4 col-lg-4">
            {{-- <div class="widgetbar">
                <button class="btn btn-primary-rgba"><i class="feather icon-plus mr-2"></i>Actions</button>
            </div> --}}
        </div>
    </div>
</div>
<!-- End Breadcrumbbar -->


<!-- Start Contentbar -->
<div class="contentbar">
    <!-- Start row -->
    <div class="row">
        <!-- Start col -->
        <div class="col-lg-12">

            <div class="card">
                <header class=" card-header noborder">
                    <h4 class="card-title">My Profile</h4>
                </header>
                <div class="col text-right">
                </div>

                            <div class="card m-b-30">
                                <div class="card-header">                                
                                    <h5 class="card-title mb-0">Edit Profile Information</h5>
                                </div>
                                <div class="container">

                                    @if(session()->has('success'))
                                        <div class="alert alert-success">
                                            {{ session()->get('success') }}
                                        </div>
                                    @endif
                                </div>
                                <div class="card-body">
                                    <form action="{{ route('profile.update') }}" method="POST" >
                                        @csrf
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="username">Full Name</label>
                                                <input type="text" class="form-control" value="{{ auth()->user()->name }}" name="username" required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="useremail">Email</label>
                                                <input type="email" class="form-control" value="{{ auth()->user()->email }}" name="useremail"  required>
                                            </div>
                                        </div>
                                        {{-- <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="userimage">Add Image</label>
                                                <input class="form-control" type="file" name="" required>
                                            </div>
                                        </div> --}}
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="userpassword">Password</label>
                                                <input type="password" class="form-control"  name="password" required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="userconfirmedpassword">Confirm Password</label>
                                                <input type="password" name="password_confirmation" class="form-control" required>
                                            </div>
                                        </div>
                                       
                                        <button type="submit" class="btn btn-primary-rgba font-16"><i class="feather icon-save mr-2"></i>Update</button>
                                    </form>
                                </div>
                            </div>

            </div>




             </div>
        <!-- End col -->
    </div>
    <!-- End row -->
</div>
<!-- End Contentbar -->

@endsection