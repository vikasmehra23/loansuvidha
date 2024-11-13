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
                    <li class="breadcrumb-item active" aria-current="page">Edit Blogs</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumbbar -->

<!-- Start Contentbar -->
<div class="row">
<div class="col-lg-8 mx-auto mt-5">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0 h6">Blog Update</h5>
                    @if(session()->has('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success') }}
                        </div>
                    @endif
            </div>
            <div class="card-body">
                <form id="add_form" class="form-horizontal" action="{{ route('blog.update',['id' => $blog->id]) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">
                            Blog Title
                            <span class="text-danger">*</span>
                        </label>
                        <div class="col-md-9">
                            <input type="text"  id="title" name="title" value="{{ $blog->title }}" class="form-control" required>
                            <small id="lengthMessage" style="color: red; display: none;">Title must be between 60 and 160 characters.</small>

                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">
                            Blog Slug
                            <span class="text-danger">*</span>
                        </label>
                        <div class="col-md-9">
                            <input type="text"  placeholder="Slug" name="slug" id="slug" value="{{ $blog->slug }}" class="form-control" required>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="signinSrEmail">
                            Banner
                            <small>(1300x650)</small>
                        </label>
                        <div class="col-md-9">
                            <div class="input-group" data-toggle="aizuploader" data-type="image">
                                <div class="input-group-prepend">
                                    <div class="input-group-text bg-soft-secondary font-weight-medium">
                                        <input type="file" name="banner" value="{{ $blog->banner }}" class="selected-files"> 
                                    </div>
                                </div>
                                <!-- <div class="form-control file-amount">Choose File</div> -->
                                
                            </div>
                            <div class="file-preview box sm">
                               
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">
                            Short Description
                            <span class="text-danger">*</span>
                        </label>
                        <div class="col-md-9">
                            <textarea name="short_description" rows="5"  class="form-control" required="">{{ $blog->short_description }}</textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 col-from-label">
                            Description
                        </label>
                        <div class="col-md-9">
                         <textarea class="form-control" id="blog_description"  name="description">{{ $blog->description }}</textarea> 
                            {{-- <textarea class="form-control" name="description"></textarea> --}}
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">Meta Title</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="meta_title" value="{{ $blog->meta_title }}" placeholder="Meta Title">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="signinSrEmail">
                            Meta Image
                            <small>(200x200)+</small>
                        </label>
                        <div class="col-md-9">
                            <div class="input-group" data-toggle="aizuploader" data-type="image">
                                <div class="input-group-prepend">
                                    <div class="input-group-text bg-soft-secondary font-weight-medium">
                                        <input type="file" name="meta_image" class="selected-files">
                                    </div>
                                </div>
                                <!-- <div class="form-control file-amount">Choose File</div>
                                <input type="hidden" name="meta_img" class="selected-files"> -->
                            </div>
                            <div class="file-preview box sm">
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">Meta Description</label>
                        <div class="col-md-9">
                            <textarea name="meta_description" id="meta_description" rows="5" class="form-control">{{ $blog->meta_description }}</textarea>
                            <div id="meta_char_count">0/160 characters</div>
                            <div id="meta_error_message" style="color: red; display: none;"></div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">
                            Meta Keywords
                        </label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="meta_keywords" name="meta_keywords" value="{{ $blog->meta_keywords }}" placeholder="Meta Keywords">
                        </div>
                    </div>

                    <div class="form-group mb-0 text-right">
                        <button type="submit" id="submit_button" class="btn btn-primary">
                            Save
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End Contentbar -->
@endsection


@section('scripts')

<script>


    document.getElementById('title').addEventListener('input', function() {
        const input = this.value.length;
        const message = document.getElementById('lengthMessage');
        
        if (input < 50 || input > 160) {
            message.style.display = 'block';
        } else {
            message.style.display = 'none';
        }
    });


    // Update character count for Meta Description
    document.getElementById('meta_description').addEventListener('input', function() {
        const input = this.value.length;
        const minLength = 150; // Minimum length
        const maxLength = 160; // Maximum length
        const charCountDisplay = document.getElementById('meta_char_count');
        const errorMessage = document.getElementById('meta_error_message');
        const submitButton = document.getElementById('submit_button');

        charCountDisplay.textContent = `${input}/${maxLength} characters`;

        if (input < minLength) {
            errorMessage.style.display = 'block';
            errorMessage.textContent = `Meta description must be at least ${minLength} characters.`;
            submitButton.disabled = true; // Disable the submit button
        } else if (input > maxLength) {
            errorMessage.style.display = 'block';
            errorMessage.textContent = `Meta description must not exceed ${maxLength} characters.`;
            submitButton.disabled = true; // Disable the submit button
        } else {
            errorMessage.style.display = 'none';
            submitButton.disabled = false; // Enable the submit button
        }
    });

    ClassicEditor
    .create(document.querySelector('#blog_description'), {
        ckfinder: {
            uploadUrl: '{{ route('ckeditor.upload').'?_token='.csrf_token() }}'
        },
        toolbar: [
            'heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote', 
            'imageUpload', '|', 'undo', 'redo', 'listStart'
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
        },
        list: {
            properties: {
                styles: true,
                startIndex: true
            }
        }
    })
    .catch(error => {
        console.error(error);
    });
</script>

@endsection