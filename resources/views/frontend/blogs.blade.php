@extends('layouts.app')

@if(!empty($metaTitle->value))
    @section('title', $metaTitle->value)
@else
    @section('title', 'Blogs' )
@endif

@if(!empty($metaDesc->value))
    @section('description', $metaDesc->value)
@else
    @section('description', ' Blogs def desc' )
@endif

@if(!empty($metaKey->value))
    @section('keywords', $metaKey->value)
@else
    @section('keywords', ' Blogs def key ' )
@endif

@section('content')




<section class="loan_blogs_">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-12 col-md-12 col-12">
                <div class="heading_of_blogs">
                    <h1>Blogs</h1>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="blogs_main_sec">
    <div class="container">
        <div class="row">
            @foreach ($blogs as $blog)

            <div class="col-lg-4 col-md-6 col-12 py-3">
            <div class="blogs_main">
                    <div class="blogs_img_">
                        <img src="{{ asset('public/uploads/uploads') }}/{{$blog->banner}}" alt="">
                    </div>
                    <div class="blogs_contents">
                        <a href="{{ route('blogdetails',['slug' => $blog->slug]) }}">
                            <h6>{{ $blog->title }}</h6>
                            <p>{{ $blog->meta_description }}</p>
                            <div class="btn_blog">
                            <a href="{{ route('blogdetails',['slug' => $blog->slug]) }}" class="theme-btn">Explore More</a>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
       
    </div>
</section>




@endsection