@extends('layouts.admin.app')
@section('content')

<!-- Start Breadcrumbbar -->
<div class="breadcrumbbar">
    <div class="row align-items-center">
        <div class="col-md-8 col-lg-8">
            <h4 class="page-title">Blogs</h4>
            <div class="breadcrumb-list">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/admin/dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Update Settings</li>
                </ol>
            </div>
        </div>
        <div class="col-md-4 col-lg-4">
            <div class=" text-right">
                {{-- <button class="btn btn-primary-rgba"><i class="feather icon-plus mr-2"></i>Actions</button> --}}
                <a href="{{ url('/settings') }}" class="btn btn-circle btn-primary p-2 mt-4 rounded">
                    <span>Add New Setting</span>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumbbar -->

<div class="contentbar">
    <!-- Start row -->
    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body px-6 pb-6">
                    <div class="container">

                        @if(session()->has('success'))
                            <div class="alert alert-success">
                                {{ session()->get('success') }}
                            </div>
                        @endif
                    </div>
                    <div class="container">
                        <form action="{{ route('update_about_post', ['id'=>$setting->id]) }}" method="post">
                            @csrf
                        

                                    <div class="col-md-12 mt-2">
                                        <div>
                                            <label class="form-label" for="type">Name :</label>
                                            <input class="form-control" value="{{ $setting->type }}" type="text" name="type" disabled  required>
                                        </div>
                                    </div>

                                    
                                    <div class="col-md-12 mt-2">
                                        <div>
                                            <label class="form-label" for="value">Value To Display :</label>
                                            <input class="form-control" value="{{ $setting->value }}" type="text" name="value" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mt-3">
                                        <button class="btn btn-dark btn-sm mt-4" type="submit">Update Value</button>
                                    </div>
                        
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection