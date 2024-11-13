@extends('layouts.admin.app')
@section('content')


<!-- Start Breadcrumbbar -->
<div class="breadcrumbbar">
    <div class="row align-items-center">
        <div class="col-md-8 col-lg-8">
            <h4 class="page-title">Blog Category</h4>
            <div class="breadcrumb-list">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="#">Blog</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Blog Category</li>
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


            <div class="card">
                <header class=" card-header noborder">
                    <h4 class="card-title">Blog Category</h4>
                </header>

                <div class="row">
                    <div class=" col-lg-7 ">
                        <div class="card">
                            <div class="card-header row gutters-5">
                                <div class="col text-center text-md-left">
                                    <h5 class="mb-md-0 h6">All Blog</h5>
                                </div>
                                <div class="col-md-4">
                                    <form class="" id="sort_on_behalves" action="" method="GET">
                                        <div class="input-group input-group-sm">
                                            <input type="text" class="form-control" id="search" name="search" placeholder="Type name &amp; Enter">
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="card-body">
                                <table class="table mb-0 footable footable-1 breakpoint-xl" style="">
                                    <thead>
                                        <tr class="footable-header">
                                            <th width="5%" class="footable-first-visible">#</th>
                                            <th style="display: table-cell;">Name</th>
                                            <th class="text-right footable-last-visible" style="display: table-cell;">Options</th>
                                        </tr>
                                    </thead>
                                    <tbody>


                                        @foreach($categories as $key => $category)
                                        <tr>
                                            <td>{{ ($key+1) + ($categories->currentPage() - 1)*$categories->perPage() }}</td>
                                            <td>{{ $category->category_name }}</td>
                                            <td class="text-right footable-last-visible" style="display: table-cell;">
                                                <a class="btn btn-info" href="{{route('blog-category.edit', $category->id)}}">
                                                    <i class="las la-edit">Edit</i>
                                                </a>
                                                <a href="javascript:void(0)" class="btn btn-danger confirm-delete" data-href="{{route('blog-category.destroy', $category->id)}}">
                                                    <i class="las la-trash">Delete</i>
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach


                                    </tbody>
                                </table>
                                <div class="blog-pagination">
                                    {{ $categories->links() }}
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0 h6">Add New Blog Category</h5>
                            </div>
                            <div class="card-body">
                                <form action="{{route('blog-category.store')}}" method="POST">
                                    @csrf
                                    <div class="form-group mb-3">
                                        <label for="name">Name</label>
                                        <input type="text" id="category_name" name="category_name" placeholder="Name" class="form-control" required="">
                                    </div>
                                    <div class="form-group mb-3 text-right">
                                        <button type="submit" class="btn btn-primary">Save</button>
                                    </div>
                                </form>
                            </div>
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
