@extends('layouts.app')


@section('content')

<!-- BreadCrumb start -->
        <section class="breadcrumb-area">
            <div class="breadcrumb-widget-3 pt-200">

            </div>
        </section>
        <!-- BreadCrumb end -->


        <!-- Get In Touch start -->
        <section class="pt-50 pb-50 get-touch-area bg_white">
            <div class="container">
                <div class="row gy-4 gy-lg-0 justify-content-between">
                    
                    <div class="col-lg-6 mx-auto">
                        <div class="alert alert-danger">
                            <h4>{{ session('error') }}</h4>
                            <p>Something went wrong with your payment. Please try again later.</p>
                        </div>

                        
                    </div>

                </div>
            </div>
        </section>

@endsection