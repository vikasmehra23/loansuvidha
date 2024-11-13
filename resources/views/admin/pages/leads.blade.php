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
                    <li class="breadcrumb-item active" aria-current="page">Leads</li>
                </ol>
            </div>
        </div>
        <div class="col-md-4 col-lg-4">
           
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
                    <h4 class="card-title">Total Leads</h4>
                </header>
                <div class="col text-right">
                    {{-- <a href="{{route('blog.create')}}" class="btn btn-circle btn-primary p-2 rounded">
                    <span>Add New Payments</span>
                    </a> --}}
                </div>

                <table class="table table-striped table-bordered" id="leads_list">
                    <thead class="">
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Mobile</th>
                            <th>Email</th>
                            <th>State</th>
                            <th>City</th>
                            <th>Assistance Type</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>

                       
                    @foreach ($users as $user)
                    @php
                        $assistance_name = App\Models\Assistance::where('id',$user->assistance_type)->first();
                    @endphp
                    
                        <tr>
                            <th>{{ $loop->iteration }}</th>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->mobile }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->state_info->name}}</td>
                            <td>{{ $user->city_info->city }}</td>
                            <td>{{ $assistance_name->name }}</td>
                            <td>{{ date('d-m-Y', strtotime($user->created_at)) }}</td>
                        </tr>
                        
                    @endforeach
                            
                    </tbody>

                </table>
                <div class="payment-pagination">
                    
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
<link href="https://cdn.datatables.net/2.0.8/css/dataTables.bootstrap4.css" rel="stylesheet" type="text/css">
@endsection


@section('scripts')

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/2.0.8/js/dataTables.bootstrap4.js"></script>
<script>
$(document).ready(function() {
    $('#leads_list').dataTable();
});

</script>
@endsection

