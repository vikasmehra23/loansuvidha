@extends('layouts.admin.app')
@section('content')


<!-- Start Breadcrumbbar -->
<div class="breadcrumbbar">
    <div class="row align-items-center">
        <div class="col-md-8 col-lg-8">
            <h4 class="page-title">Blog-Category Update</h4>
            <div class="breadcrumb-list">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('blog.category') }}">Blog-Category</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Blog-Category Edit</li>
                </ol>
            </div>
        </div>
        <div class="col-md-4 col-lg-4">
            <div class="widgetbar">
                <button class="btn btn-primary-rgba"><i class="feather icon-plus mr-2"></i>Actions</button>
            </div>
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


            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <div class="catgory-info">
                                <h5 class="mb-0 h6">Blog Category Information</h5>
                            </div>

                            {{-- <div class="button_blog">
                            <a href="https://srishtiadmissionpoint.com/admin/blog/create"
                                class="btn btn-circle btn-primary p-2 rounded">
                                <span>Add New Blog</span>
                            </a>
                        </div> --}}
                        </div>
                        <div class="card-body">
                            <form id="add_form" class="form-horizontal" action="{{ route('blog-category.update', $cateogry->id) }}" method="POST">
                                @csrf
                                {{-- @method('PATCH') --}}

                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Name</label>
                                    <div class="col-md-9">
                                        <input type="text" placeholder="Name" id="category_name" name="category_name" value="{{ $cateogry->category_name }}" class="form-control" required>
                                    </div>
                                </div>

                                <div class="form-group mb-0 text-right">
                                    <button type="submit" class="btn btn-primary">
                                        Save
                                    </button>
                                </div>
                            </form>
                        </div>
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
