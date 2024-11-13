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
                    <li class="breadcrumb-item active" aria-current="page">Blogs</li>
                </ol>
            </div>
        </div>
        <div class="col-md-4 col-lg-4">
            <div class=" text-right">
                {{-- <button class="btn btn-primary-rgba"><i class="feather icon-plus mr-2"></i>Actions</button> --}}
                <a href="{{route('blog.create')}}" class="btn btn-circle btn-primary p-2 mt-4 rounded">
                    <span>Add New Blog</span>
                </a>
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
                                @if(session()->has('success'))
                                    <div class="alert alert-success">
                                        {{ session()->get('success') }}
                                    </div>
                                @endif
                    
                            <table class="table table-bordered">
                <thead>
                    <tr class="table-success">
                        <th class="text-center text-secondary p-3">
                            <h6>Sr No</h6>
                        </th>
                        <th class="text-center text-secondary">
                            <h6>Title</h6>
                        </th>
                        <th class="text-center text-center text-secondary" width="10%">
                            <h6>Options</h6>
                        </th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($blogs as $key => $blog)
                    <tr>
                        <td class="text-center p-4">
                            {{ ($key+1) + ($blogs->currentPage() - 1) * $blogs->perPage() }}
                        </td>
                        <td class="text-center p-4">
                            {{ $blog->title }}
                        </td>
                        
                       
                        
                        <td class="text-center p-4">

                            <a class="btn  btn-icon btn-circle btn-sm" href="{{ route('blog.edit',$blog->id)}}">
                                <i class="fa fa-pencil" style="font-size:15px"></i>
                            </a>

                            <form action="{{ route('blog.destroy', $blog->id) }}" method="POST" class="delete-form" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="button" class="text-danger border-0 bg-transparent" 
                                        data-bs-toggle="tooltip" data-bs-placement="bottom" 
                                        title="Delete" 
                                        onclick="if(confirm('Are you sure you want to delete this blog?')) { this.closest('form').submit(); }"><i class="fa fa-trash" style="font-size:15px"></i></button>
                            </form>


                            {{-- <a href="{{route('blog.destroy', $blog->id)}}">
                                <i class="fa fa-trash" style="font-size:15px"></i>
                            </a> --}}

                        </td>
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
        <!-- End col -->
    </div>
    <!-- End row -->
</div>
<!-- End Contentbar -->

@endsection


@section('stylesheets')
<link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">
@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>


<script>
    $(document).ready(function() {

            // Attach event delegation to handle clicks on delete buttons
            document.body.addEventListener('submit', function(event) {
                if (event.target.matches('.delete-form')) {
                    event.preventDefault(); // Prevent the form from submitting immediately

                    Swal.fire({
                        title: 'Are you sure?',
                        text: 'You will not be able to recover this record!',
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yes, delete it!',
                        cancelButtonText: 'Cancel'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            event.target.submit(); // Submit the form if confirmed
                        }
                    });
                }
            });
            

        });
</script>

<script>
    function confirmDelete(button) {
        // Show confirmation dialog
        const confirmation = confirm("Are you sure you want to delete this blog?");
        
        if (confirmation) {
            // If confirmed, submit the form
            button.closest('form').submit();
        }
    }
</script>

@endsection