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
                    <li class="breadcrumb-item active" aria-current="page">Setting</li>
                </ol>
            </div>
        </div>
        <div class="col-md-4 col-lg-4">
            <div class=" text-right">
                {{-- <button class="btn btn-primary-rgba"><i class="feather icon-plus mr-2"></i>Actions</button> --}}
                {{-- <a href="#" class="btn btn-circle btn-primary p-2 mt-4 rounded">
                    <span>Add New Setting</span>
                </a> --}}
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumbbar -->
<div class="contentbar">
    
    <!-- Start row -->
    <div class="row">

        

        <!-- Start col -->
        <div class="col-lg-12">

            <div class="card">

                <div class="col text-right">

                    
                    {{-- <a href="{{route('blog.create')}}" class="btn btn-circle btn-primary p-2 mt-4 rounded">
                        <span>Add New Blog</span>
                    </a> --}}
                </div>
                 <div class="card-body px-6 pb-6">
                    <div class="overflow-x-auto -mx-6 dashcode-data-table">
                        <span class=" col-span-8  hidden"></span>
                        <span class="  col-span-4 hidden"></span>
                        <div class="inline-block min-w-full align-middle">
                            <div class="overflow-hidden ">
                            <div class="nav_tab_dashboard">
                                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                    <!--<li class="nav-item" role="presentation">-->
                                    <!--  <button class="nav-link active" id="pills-home-tab" data-toggle="pill" data-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Header</button>-->
                                    <!--</li>-->
                                    <!--<li class="nav-item" role="presentation">-->
                                    <!--  <button class="nav-link" id="pills-profile-tab" data-toggle="pill" data-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Footer</button>-->
                                    <!--</li>-->
                                    <li class="nav-item" role="presentation">
                                      <button class="nav-link active" id="pills-contact-tab" data-toggle="pill" data-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="true">Meta</button>
                                    </li>
                                  </ul>
                                  <div class="tab-content mt-5" id="pills-tabContent">
                                    <div class="tab-pane fade" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">#</div>
                                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">#</div>
                                    <div class="tab-pane fade show active" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">

                                        <div class="container">

                                            @if(session()->has('success'))
                                                <div class="alert alert-success">
                                                    {{ session()->get('success') }}
                                                </div>
                                            @endif
                                        </div>
                                        <div class="container">
                                            <form action="{{ route('settings_about') }}" method="post">
                                                @csrf
                                            
                                                        <div class="col-md-12 mt-2">
                                                            <div>
                                                                <label class="form-label" for="selectmeta">Select Meta Type :</label>
                                                                <select name="metaselect" class="form-select form-control" id="" required>
                                                                    <option value="" selected>Select your meta type</option>
                                                                    <option value="description_">Description</option>
                                                                    <option value="title_">Title</option>
                                                                    <option value="keyword_">Keyword</option>
                                                                </select>
                                                            </div>
                                                        </div>
                    
                    
                                                        <div class="col-md-12 mt-2">
                                                            <div>
                                                                <label class="form-label" for="type">Name :</label>
                                                                <input class="form-control" type="text" name="type" required>
                                                            </div>
                                                        </div>
                    
                                                        
                                                        <div class="col-md-12 mt-2">
                                                            <div>
                                                                <label class="form-label" for="value">Value To Display :</label>
                                                                <input class="form-control" type="text" name="value" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 mt-3">
                                                            <button class="btn btn-dark btn-sm mt-4" type="submit">Add Value</button>
                                                        </div>
                                            
                                            </form>
                                            <div class="container">
                                                <nav class="mt-5" >
                                                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                                      <button class="nav-link active" id="nav-home-tab" data-toggle="tab" data-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Meta Description</button>
                                                      <button class="nav-link" id="nav-profile-tab" data-toggle="tab" data-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Meta Title</button>
                                                      <button class="nav-link" id="nav-contact-tab" data-toggle="tab" data-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Meta Keyword</button>
                                                    </div>
                                                  </nav>
                                                  <div class="tab-content mt-5" id="nav-tabContent">
                                                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                                        <table class="table table-success table-hover table-bordered table-stripped text-center">
                                                            <thead>
                                                                <tr>
                                                                    <th>Sr.no</th>
                                                                    <th>Meta Name</th>
                                                                    <th>Meta Value</th>
                                                                    <th>Action</th>
                                                                </tr>
                                                            </thead>
                                                                @foreach($description as $desc)
                                                            <tbody>
                                                                <tr>
                                                                    <td>{{ $loop->iteration }}</td>
                                                                    <td>{{ $desc->type }}</td>
                                                                    <td>{{ $desc->value }}</td>
                                                                    
                                                                    <td><a href="{{route('update_about', ['id' => $desc->id])}}" class="btn btn-dark btn-sm">Edit</a>
                                                                    {{-- <a href="{{ route('update_about_delete', ['id' => $desc->id]) }}" class="btn btn-danger btn-sm">Delete</a></td> --}}
                                                                </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                                        <table class="table table-success table-bordered table-stripped text-center">
                                                            <thead>
                                                                <tr>
                                                                    <th>Sr.no</th>
                                                                    <th>Meta Name</th>
                                                                    <th>Meta Value</th>
                                                                    <th>Action</th>
                                                                </tr>
                                                            </thead>
                                                                @foreach($title as $titles)
                                                            <tbody>
                                                                <tr>
                                                                    <td>{{ $loop->iteration }}</td>
                                                                    <td>{{ $titles->type }}</td>
                                                                    <td>{{ $titles->value }}</td>
                                                                    <td><a href="{{route('update_about', ['id' => $titles->id])}}" class="btn btn-dark btn-sm">Edit</a>
                                                                    {{-- <a href="{{ route('update_about_delete', ['id' => $titles->id]) }}" class="btn btn-danger btn-sm">Delete</a></td> --}}
                                                                </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                                        <table class="table table-success table-bordered table-stripped text-center">
                                                            <thead>
                                                                <tr>
                                                                    <th>Meta Name</th>
                                                                    <th>Meta Value</th>
                                                                    <th>Action</th>
                                                                </tr>
                                                            </thead>
                                                                @foreach($keyword as $key)
                                                            <tbody>
                                                                <tr>
                                                                    <td>{{ $key->type }}</td>
                                                                    <td>{{ $key->value }}</td>
                                                                    <td><a href="{{route('update_about', ['id' => $key->id])}}" class="btn btn-dark btn-sm">Edit</a>
                                                                    {{-- <a href="{{ route('update_about_delete', ['id' => $key->id]) }}" class="btn btn-danger btn-sm">Delete</a></td> --}}
                                                                </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                  </div>
                                            </div>

                                        </div>
                                    </div>
                                  </div>
                            </div>
                                {{-- <div class="container">

                                    @if(session()->has('success'))
                                        <div class="alert alert-success">
                                            {{ session()->get('success') }}
                                        </div>
                                    @endif
                                </div> --}}
                                {{-- <div class="container">
                                    <form action="{{ route('settings_about') }}" method="post">
                                        @csrf
                                    
                                                <div class="col-md-12 mt-2">
                                                    <div>
                                                        <label class="form-label" for="selectmeta">Select Meta Type :</label>
                                                        <select name="metaselect" class="form-select" id="" required>
                                                            <option value="" selected>Select your meta type</option>
                                                            <option value="description_">Description</option>
                                                            <option value="title_">Title</option>
                                                            <option value="keyword_">Keyword</option>
                                                        </select>
                                                    </div>
                                                </div>
            
            
                                                <div class="col-md-12 mt-2">
                                                    <div>
                                                        <label class="form-label" for="type">Name :</label>
                                                        <input class="form-control" type="text" name="type" required>
                                                    </div>
                                                </div>
            
                                                
                                                <div class="col-md-12 mt-2">
                                                    <div>
                                                        <label class="form-label" for="value">Value To Display :</label>
                                                        <input class="form-control" type="text" name="value" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 mt-3">
                                                    <button class="btn btn-dark btn-sm mt-4" type="submit">Add Value</button>
                                                </div>
                                    
                                    </form>
                                </div>

                                <div class="container">
                                    <ul class="nav nav-tabs mt-4 mb-4 nav-justified" id="myTab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Description</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Keyword</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Title</button>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <table class="table table-success table-hover table-bordered table-striped text-center">
                                            <thead>
                                                <tr>
                                                    <th>Sr.no</th>
                                                    <th>Meta Name</th>
                                                    <th>Meta Value</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                                @foreach($description as $desc)
                                            <tbody>
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $desc->type }}</td>
                                                    <td>{{ $desc->value }}</td>
                                                    
                                                    <td><a href="{{route('update_about', ['id' => $desc->id])}}" class="btn btn-dark btn-sm">Edit</a>
                                                    <a href="{{ route('update_about_delete', ['id' => $desc->id]) }}" class="btn btn-danger btn-sm">Delete</a></td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        </div>
                                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                        <table class="table table-success table-bordered table-stripped text-center">
                                            <thead>
                                                <tr>
                                                    <th>Meta Name</th>
                                                    <th>Meta Value</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                                @foreach($keyword as $key)
                                            <tbody>
                                                <tr>
                                                    <td>{{ $key->type }}</td>
                                                    <td>{{ $key->value }}</td>
                                                    <td><a href="{{route('update_about', ['id' => $key->id])}}" class="btn btn-dark btn-sm">Edit</a>
                                                    <a href="{{ route('update_about_delete', ['id' => $key->id]) }}" class="btn btn-danger btn-sm">Delete</a></td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        </div>
                                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                        <table class="table table-success table-bordered table-striped text-center">
                                            <thead>
                                                <tr>
                                                    <th>Meta Name</th>
                                                    <th>Meta Value</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                                @foreach($title as $titles)
                                            <tbody>
                                                <tr>
                                                    <td>{{ $titles->type }}</td>
                                                    <td>{{ $titles->value }}</td>
                                                    <td><a href="{{route('update_about', ['id' => $titles->id])}}" class="btn btn-dark btn-sm">Edit</a>
                                                    <a href="{{ route('update_about_delete', ['id' => $titles->id]) }}" class="btn btn-danger btn-sm">Delete</a></td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        </div>
                                    </div>
                                </div>



                                
                            </div>
                        </div>
                    </div>
                </div> 
            </div> --}}


        </div>
        <!-- End col -->
    </div>
    <!-- End row -->
</div>
<!-- End Contentbar -->

@endsection