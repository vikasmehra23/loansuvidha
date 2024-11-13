<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Loan Shuvidhaa, one stop solutiion for all services">
    <meta name="keywords" content="loan-assistance,business-loan,vehicle-loan, property-loan, home-loan, insurance and investment.">
    <meta name="author" content="Themesbox">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Loan Suvidhaa || Admin dashboard</title>
    <!-- Fevicon -->
    <link rel="shortcut icon" href="{{ asset('public/assets/admin/assets/images/favicon.ico') }}">
    <!-- Start css -->
    <!-- Switchery css -->
    <link href="{{ asset('public/assets/admin/assets/plugins/switchery/switchery.min.css') }}" rel="stylesheet">
    <!-- apex css -->
    <link href="{{ asset('public/assets/admin/assets/plugins/apexcharts/apexcharts.css') }}" rel="stylesheet">
    <!-- jvectormap css -->
    <link href="{{ asset('public/assets/admin/assets/plugins/jvectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet">
    <!-- Slick css -->
    <link href="{{ asset('public/assets/admin/assets/plugins/slick/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('public/assets/admin/assets/plugins/slick/slick-theme.css') }}" rel="stylesheet">
    <link href="{{ asset('public/assets/admin/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('public/assets/admin/assets/css/icons.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('public/assets/admin/assets/css/flag-icon.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('public/assets/admin/assets/css/style.css') }}" rel="stylesheet" type="text/css">
    
    @yield('stylesheets')
    
    
    <style>
        .footerbar {
    position: unset !important;
   
}
.nav_tab_dashboard .nav-pills .nav-link.active {
  color: #ffffff !important;
  background-color: #e66d13 !important;
  border: none !important;
}
.nav_tab_dashboard  .nav-pills .nav-link {
  color: #000000 !important;
  border: none !important;
  margin: 9px !important;
}
.nav-tabs .nav-link.active {
    color: #ffffff !important;
  background-color: #e66d13 !important;
  border: none !important;
}
.nav-tabs .nav-link {
    color: #263a5b;
    margin: 3px 7px;
}
.nav-tabs {
    border-bottom: unset !important;
}
 .table td {
    color: #000000 !important;
}
.form-control {
    color: #000000 !important;
   }

    </style>
    <!-- End css -->
</head>
<body class="vertical-layout"> 


    @include('layouts.admin.header')
    @include('layouts.admin.sidebar')

    @yield('content')

    @include('layouts.admin.footer')

 <!-- Start js -->        
    <script src="{{ asset('public/assets/admin/assets/js/jquery.min.js')}}"></script>
    <script src="{{ asset('public/assets/admin/assets/js/popper.min.js')}}"></script>
    <script src="{{ asset('public/assets/admin/assets/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('public/assets/admin/assets/js/modernizr.min.js')}}"></script>
    <script src="{{ asset('public/assets/admin/assets/js/detect.js')}}"></script>
    <script src="{{ asset('public/assets/admin/assets/js/jquery.slimscroll.js')}}"></script>
    <script src="{{ asset('public/assets/admin/assets/js/vertical-menu.js')}}"></script>
    <!-- CK Editor -->
    <script src="https://cdn.ckeditor.com/ckeditor5/41.3.1/classic/ckeditor.js"></script>
    

    <!-- Switchery js -->
    <script src="{{ asset('public/assets/admin/assets/plugins/switchery/switchery.min.js')}}"></script>
    
    <!-- Slick js -->
    <script src="{{ asset('public/assets/admin/assets/plugins/slick/slick.min.js')}}"></script>
   
    <!-- Core js -->
    <script src="{{ asset('public/assets/admin/assets/js/core.js')}}"></script>
    <!-- End js -->

        @yield('scripts')

        <!-- <script>
    ClassicEditor
        .create(document.querySelector('#editor_desc'), {
            ckfinder: {
                uploadUrl: '{{ route('ckeditor.upload').'?_token='.csrf_token() }}'
            },
            toolbar: [
                'heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote', 
                'imageUpload', '|', 'undo', 'redo'
            ],
            heading: {
                options: [
                    { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                    { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
                    { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' },
                    { model: 'heading3', view: 'h3', title: 'Heading 3', class: 'ck-heading_heading3' },
                    { model: 'heading4', view: 'h4', title: 'Heading 4', class: 'ck-heading_heading4' },
                    { model: 'heading5', view: 'h5', title: 'Heading 5', class: 'ck-heading_heading5' },
                    { model: 'heading6', view: 'h6', title: 'Heading 6', class: 'ck-heading_heading6' }
                ]
            },
            image: {
                toolbar: [ 'imageTextAlternative', 'imageStyle:full', 'imageStyle:side' ]
            },
            mediaEmbed: {
                previewsInData: true
            }
        })
        .catch(error => {
            console.error(error);
        });
</script> -->





</body>
</html>