@extends('layouts.app')

@if(!empty($blog->title))
    @section('title', $blog->title )
@else
    @section('title', !empty($metaTitle->value) ? $metaTitle->value : (isset($blog[0]) ? $blog[0]->title : 'Blog Details'))
@endif

@if(!empty($blog->meta_description))
    @section('description', $blog->meta_description)
@else
    @section('description', $metaDescriptionValue )
@endif

@if(!empty($blog->meta_keywords))
    @section('keywords', $blog->meta_keywords)
@else
    @section('keywords', ' Blog Details keywords' )
@endif
@if(!empty($blog->banner))
    @section('image', asset('public/uploads/uploads/' . $blog->banner))
@endif

@section('style')
<style>
    .blogs_hd_contents h2 {
    font-size: 24px;
}
</style>
@endsection

@section('content')


<section class="blogs_bg_sec_">
    <div class="container">
        <div class="row text-center justify-content-center">
            <div class="col-lg-12 col-md-12 col-12">
                <div class="blogs_banner_bg">
                <h1>{{ $blog->title }}</h1>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="blogs_content_sec">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-md-12 col-12">
                <div class="blogs_main_hd">
                    <div class="blogs_hd_img_">
                        <img style="max-width: 100%; height: 100%;" src="{{ asset('public/uploads/uploads') }}/{{$blog->banner}}" alt="">
                       
                    </div>
                    <div class="blogs_hd_contents">  
                            <p>{!! $blog->description !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



@endsection