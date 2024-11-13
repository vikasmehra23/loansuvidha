@extends('layouts.admin.app')
@section('content')


<!-- Start Breadcrumbbar -->
<div class="breadcrumbbar">
    <div class="row align-items-center">
        <div class="col-md-8 col-lg-8">
            <h4 class="page-title">Payments</h4>
            <div class="breadcrumb-list">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Payments</li>
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
                    <h4 class="card-title">Payments</h4>
                </header>
                <div class="col text-right">
                    {{-- <a href="{{route('blog.create')}}" class="btn btn-circle btn-primary p-2 rounded">
                    <span>Add New Payments</span>
                    </a> --}}
                </div>

                <table class="table table-bordered table-hover" id="payment_list">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Mobile</th>
                            <th scope="col">Email</th>
                            <th scope="col">Assistance Type </th>
                            <th scope="col">Amount</th>
                            <th scope="col">Status</th>
                            <th scope="col">Date</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @php
                        $i = 1;
                        @endphp

                        @foreach ($payments as $payment)
                        @php
                            $assistance_name = App\Models\Assistance::where('id',$payment->assistance_type)->first();
                        @endphp


                        <tr>
                            <th scope="row">{{ $i++ }}</th>
                            <td>{{ $payment->name }}</td>
                            <td>{{ $payment->mobile }}</td>
                            <td>{{ $payment->email }}</td>
                            <td>{{ $assistance_name->name }}</td>
                            <td>{{ $payment->payment_status }}</td>
                            <td>₹{{ $payment->amount }}</td>
                            <td>{{ date('d-m-Y', strtotime($payment->created_at)) }}</td>
                            <td>  <a href="javascript:void(0)"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                    {{-- <span class="mx-3"><i class="fa fa-edit"></i> </span> --}}
                            </td>


                        </tr>
                        @endforeach
                            
                    </tbody>

                </table>
                <div class="payment-pagination">
                    {{ $payments->appends(request()->input())->links() }}
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
    $('#payment_list').dataTable();
});

</script>
@endsection