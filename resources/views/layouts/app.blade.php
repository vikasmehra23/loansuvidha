<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- <meta name="viewport" content="width=device-width,initial-scale=1.0"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>@if(View::hasSection("title"))@yield("title")@else Loan Suvidhaa | @endif</title>
    <meta name="description" content="@if(View::hasSection('description'))@yield('description')@else Desc app blade @endif">
    <meta name="keywords" content="@if(View::hasSection('keywords'))@yield('keywords')@else Keyword app blade @endif">
    <meta property="og:description" content="@if(View::hasSection('description'))@yield('description')@else Digi Rush Solutions @endif" />
    <meta property="og:title" content="@if(View::hasSection('title'))@yield('title')@else Digi Rush Solutions | A complete web solutions @endif" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:site_name" content="Loan Suvidha" />
    <meta property="og:locale" content="en" />
    <meta property="og:image" content="@if(View::hasSection('image'))@yield('image')@else {{ asset('https://loansuvidhaa.com/assets/img/logo/top_design_logo1.webp') }} @endif" loading="lazy"/>
    <meta property="og:image:alt" content="Loan Suvidha Image" />

@php
    $request_type = Request::getScheme();
@endphp
@if($request_type == 'https')
    <link rel="canonical" href="{{ url()->current() }}" /> 
@endif

    <!-- Google tag (gtag.js) -->
    <script  src="https://www.googletagmanager.com/gtag/js?id=G-LS3C444BPX" defer></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'G-LS3C444BPX');
    </script>
    <meta name="google-site-verification" content="o4k5_6KMIfa5IxtvqkUj3vhnF095KYpauxyB-DdtFY4" />

    <link rel="shortcut icon" href="./img/loan_short_logo.png" type="image/x-icon">

    <!-- CSS here -->

    <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/css/bootstrap.min.css') }}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/css/elegant-icons.min.css') }}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/css/all.min.css') }}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/css/animate.css') }}" media="all" />
    
    
   
    <!-- <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/css/animate.css') }}" media="all" /> -->
    <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/css/jquery.fancybox.min.css') }}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/css/flatpickr.min.css') }}" media="all" />
    <!-- <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/css/default.css') }}" media="all" /> -->


    <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/css/style.css') }}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/css/stylesheet.css') }}" media="all" />
    <link rel="shortcut icon" href="{{ asset('public/assets/img/fav_icon_1.png') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    @yield('links')
    @yield('style')

</head>


<style>
    i.fa-regular.fa-envelope.mt-2 {
        padding-top: 2px;
    }
</style>

<body>

    @include('layouts.header')

    <main>
        @yield('content')
    </main>

    @include('layouts.footer')
    <!-- JS here -->
    {{-- <script  src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}
    <script  type="text/javascript" src="{{ asset('public/assets/js/jquery-3.6.0.min.js')}}"></script>
    <script  defer  type="text/javascript" src="{{ asset('public/assets/js/preloader.js')}}"></script>
    <script  defer  type="text/javascript" src="{{ asset('public/assets/js/bootstrap.bundle.min.js')}}"></script>
    <script  defer  type="text/javascript" src="{{ asset('public/assets/js/jquery.smoothscroll.min.js')}}"></script>
    <script  defer  type="text/javascript" src="{{ asset('public/assets/js/jquery.waypoints.min.js')}}"></script>
    <script  defer  type="text/javascript" src="{{ asset('public/assets/js/jquery.counterup.min.js')}}"></script>
    <script  defer  type="text/javascript" src="{{ asset('public/assets/js/jquery.nice-select.min.js')}}"></script>
    <script  type="text/javascript" src="{{ asset('public/assets/js/slick.min.js')}}"></script>
    <script  defer  type="text/javascript" src="{{ asset('public/assets/js/jquery.fancybox.min.js')}}"></script>
    <script  defer   type="text/javascript" src="{{ asset('public/assets/js/nouislider.min.js')}}"></script>
    <script  defer  type="text/javascript" src="{{ asset('public/assets/js/wNumb.js')}}"></script>
    <script  defer  type="text/javascript" src="{{ asset('public/assets/js/flatpickr.min.js')}}"></script>
    <script  defer  type="text/javascript" src="{{ asset('public/assets/js/wow.min.js')}}"></script>
    {{-- <script  async src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script> --}}
    <script  defer  type="text/javascript" src="{{ asset('public/assets/js/custom.js')}}"></script>
                                    
    <!-- <script type="text/javascript" src="{{ asset('public/assets/js/popup.js')}}"></script> -->

    <script src="https://cdn.jsdelivr.net/npm/lazyload@2.0.0-rc.2/lazyload.js"></script>

    <!-- Nav active link -->


    @yield('scripts')


    <script>

        $(document).ready(function () {

            

            var url = window.location.pathname;

            $('nav ul li a').each(function () {

                var href = $(this).attr('href');
                if (url.endsWith(href)) {
                    $(".navbar").find(".active").removeClass("active");
                    $(this).addClass("active");
                }

            });
        });



        $('#multiple-items').slick({

            infinite: true
            , slidesToShow: 3
            , slidesToScroll: 3
            , prevArrow: '<button type="button" class="slick-prev"><i class="arrow_left"></i></button>'
            , nextArrow: '<button type="button" class="slick-next"><i class="arrow_right"></i></button>'
            , centerMode: false

            , slidesToShow: 3
            , autoplay: true
            , arrows: true
            , infinite: false
            , infinite: true
            , autoplaySpeed: 2000
            , slidesToScroll: 3

            , responsive: [{

                breakpoint: 1200 ,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                }
                ,
            }

                , {

                breakpoint: 768

                , settings: {

                    slidesToShow: 1,
                    slidesToScroll: 1,
                },
            }
                ,]

            ,
        });


        $('.slide_banner').slick({

            infinite: true
            , slidesToShow: 3
            , slidesToScroll: 3
            , prevArrow: '<button type="button" class="slick-prev"><i class="arrow_left"></i></button>'
            , nextArrow: '<button type="button" class="slick-next"><i class="arrow_right"></i></button>'
            , centerMode: false
            , slidesToShow: 1
            , autoplay: true
            , infinite: true
            , autoplaySpeed: 4000
            , slidesToScroll: 1

            , responsive: [{

                breakpoint: 1200
                , settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
                ,
            }

                , {

                breakpoint: 768
                , settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
                ,
            }

                ,]

            ,
        });



        $('#main_slide').slick({

            dots: true
            , autoplay: true
            , infinite: true
            , speed: 2000
            , slidesToShow: 1
            , adaptiveHeight: true

        });


        $('.multiple-items').slick({

            dots: true

            , autoplay: true
            , infinite: true
            , speed: 1000
            , slidesToShow: 4
            , slidesToScroll: 4
            , responsive: [{

                breakpoint: 1024

                , settings: {

                    slidesToShow: 3
                    , slidesToScroll: 3
                    , infinite: true
                    , dots: true
                }
            }

                , {

                breakpoint: 600
                , settings: {
                    slidesToShow: 2
                    , slidesToScroll: 2
                }

            }

                , {

                breakpoint: 480
                , settings: {
                    slidesToShow: 1
                    , slidesToScroll: 1
                }

            }
                // settings: "unslick"
            ]

        });



        $('.multiple-itemss').slick({

            dots: true
            , autoplay: true
            , infinite: true
            , speed: 1000
            , slidesToShow: 2
            , slidesToScroll: 2
            , responsive: [{

                breakpoint: 1024
                , settings: {
                    slidesToShow: 3
                    , slidesToScroll: 3
                    , infinite: true
                    , dots: true
                }

            }

                , {
                breakpoint: 600
                , settings: {
                    slidesToShow: 2
                    , slidesToScroll: 2
                }

            }

                , {
                breakpoint: 480
                , settings: {
                    slidesToShow: 1
                    , slidesToScroll: 1
                }
            }
            ]

        });



        $('.multiple-itemssss').slick({

            dots: true
            , autoplay: true
            , infinite: true
            , speed: 1000
            , slidesToShow: 1
            , slidesToScroll: 1
            , responsive: [{
                breakpoint: 1024
                , settings: {
                    slidesToShow: 1
                    , slidesToScroll: 1
                    , infinite: true
                    , dots: true
                }
            }

                , {

                breakpoint: 600
                , settings: {
                    slidesToShow: 1
                    , slidesToScroll: 1
                }
            }

                , {
                breakpoint: 480
                , settings: {
                    slidesToShow: 1
                    , slidesToScroll: 1
                }
            }
            ]

        });



        $('.multiple-itemmm').slick({

            dots: true
            , autoplay: true
            , infinite: true
            , speed: 1000
            , slidesToShow: 1
            , slidesToScroll: 1
            , responsive: [{

                breakpoint: 1024

                , settings: {
                    slidesToShow: 1
                    , slidesToScroll: 1
                    , infinite: true
                    , dots: true
                }

            }

                , {

                breakpoint: 600
                , settings: {
                    slidesToShow: 1
                    , slidesToScroll: 1
                }

            }

                , {
                breakpoint: 480
                , settings: {
                    slidesToShow: 1
                    , slidesToScroll: 1
                }
            }

            ]

        });



        $(".slick-slider").slick({
            slidesToShow: 2,
            infinite: true,
            slidesToScroll: 2,
            autoplay: true,
            prevArrow: '<button type="button" class="slick-custom-arrow slick-prev"> < </button>',
            nextArrow: '<button type="button" class="slick-custom-arrow slick-next"> > </button>',
            autoplaySpeed: 3000,

            responsive: [
    {
      breakpoint: 1200,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
      },
    },
    {
      breakpoint: 767,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      },
    },

  ],

                 });

    </script>



</body>
</html>