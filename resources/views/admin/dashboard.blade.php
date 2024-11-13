@extends('layouts.admin.app')
@section('content')


        
      
            <!-- Start Breadcrumbbar -->                    
            <div class="breadcrumbbar">
                <div class="row align-items-center">
                    <div class="col-md-8 col-lg-8">
                        <h4 class="page-title">Admin Dashboard</h4>
                        <div class="breadcrumb-list">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
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
                    <div class="col-lg-12 col-xl-4">
                        <!-- Start row -->
                        <div class="row">
                            <!-- Start col -->
                            <div class="col-lg-12">
                                <div class="card m-b-30">
                                    <div class="card-header">                                
                                        <div class="row align-items-center">
                                            <div class="col-9">
                                                <h5 class="card-title mb-0">Sales by Category</h5>
                                            </div>
                                            <div class="col-3">
                                                <div class="dropdown">
                                                    <button class="btn btn-link l-h-20 p-0 font-18 float-right" type="button" id="widgetCategory" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-more-horizontal-"></i></button>
                                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="widgetCategory">
                                                        <a class="dropdown-item font-13" href="#">Refresh</a>
                                                        <a class="dropdown-item font-13" href="#">Export</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                         <div id="apex-pie-chart" class="my-4"></div>
                                    </div>
                                    
                                </div>
                            </div>
                            <!-- End col -->
                            
                        </div>
                        <!-- End row -->                        
                    </div>
                    <!-- End col --> 
                    <!-- Start col -->
                    <div class="col-lg-12 col-xl-8">
                        <!-- Start row -->
                        <div class="row">
                            <!-- Start col -->
                            <div class="col-lg-12">
                                <div class="card m-b-30">
                                    <div class="card-header">                                
                                        <div class="row align-items-center">
                                            <div class="col-9">
                                                <h5 class="card-title mb-0">Quick Summary</h5>
                                            </div>
                                            <div class="col-3">
                                                <div class="dropdown">
                                                    <button class="btn btn-link l-h-20 p-0 font-18 float-right" type="button" id="widgetSummary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-more-horizontal-"></i></button>
                                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="widgetSummary">
                                                        <a class="dropdown-item font-13" href="#">Refresh</a>
                                                        <a class="dropdown-item font-13" href="#">Export</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body py-0">
                                        <div class="row align-items-center">
                                            <div class="col-lg-3">
                                                <div class="revenue-box border-bottom mb-2">
                                                    <h4>$1598</h4>
                                                    <p>Total Earning <a href="#">Withdraw</a></p>
                                                </div>
                                                <div class="revenue-box">
                                                    <h4>$1285</h4>
                                                    <p>To be Paid <a href="#">Pay</a></p>
                                                </div>
                                            </div>
                                            <div class="col-lg-9">
                                                <div id="apex-stacked-bar-chart"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End col -->
                            
                        </div>
                        <!-- End row -->
                    </div>
                    <!-- End col --> 
                </div>
                <!-- End row -->
                
            </div>
            <!-- End Contentbar -->
            
   

   @endsection

@section('scripts')

<!-- Apex js -->
    <script src="{{ asset('assets/admin/assets/plugins/apexcharts/apexcharts.min.js')}}"></script>
    <script src="{{ asset('assets/admin/assets/plugins/apexcharts/irregular-data-series.js')}}"></script>
    <!-- Vector Maps js -->
    <script src="{{ asset('assets/admin/assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
    <script src="{{ asset('assets/admin/assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
     <!-- Dashboard js -->
    <script src="{{ asset('assets/admin/assets/js/custom/custom-dashboard-ecommerce.js')}}"></script>
    
@endsection

