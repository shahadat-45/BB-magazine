@extends('backend.master')
@push('css')

<link href="{{ asset('frontend/summernote/summernote-bs5.css') }}" rel="stylesheet">

@endpush
@section('contant')
<div class="card">
    <div class="card-body">
      <h5 class="card-title fw-semibold mb-4">Update Blog</h5>

      <!-- Success Message -->
      @if (session('success'))                  
        <div class="alert alert-success">{{ session('success') }}</div>          
      @endif

      <div class="card">
        <div class="card-body">
          <form action="{{ route('blog.update' , $item->id) }}" method="POST" enctype="multipart/form-data">
              @csrf

            <!-- Blog Title -->
            <div class="mb-3">
              <label for="title" class="form-label">Blog Title</label>
              <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="Enter a title" value="{{ $item->title }}">
              @error('title')
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>  

            <!-- Blog Short Description -->
            <div class="mb-3">
              <label for="short_desp" class="form-label">Short Description</label>
              <input type="text" name="short_desp" class="form-control @error('short_desp') is-invalid @enderror" id="short_desp" placeholder="Enter a short description" value="{{ $item->short_desp }}">
              @error('short_desp')
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div> 

            <div class="row">
                <div class="col">
                    <!-- Blog Category -->
                    <div class="mb-3">
                      <label for="category" class="form-label">Blog Category</label>
                      <select class="form-select" name="category" id="category" aria-label="Default select example">
                          <option disabled> No Category Found </option>          
                        @foreach ($categories as $category)
                            <option {{ $category->name == $item->category ? 'selected' : '' }} > {{ $category->name }}</option>
                        @endforeach
                      </select>
                    </div>
                </div>
                <div class="col">
                    <!-- Blog Tags -->
                    <div class="mb-3">
                      <label for="tag" class="form-label">Tags</label>
                      <input type="text" name="tags" class="form-control" id="tag" placeholder="example: lifestyle,colorful,trending,another" value="{{ $item->tags }}">
                    </div>
                </div>
            </div>          

            <div class="row">
                <div class="col">
                    <!-- Author Name -->
                    <div class="mb-3">
                        <label for="author" class="form-label">Author Name</label>
                        <input type="text" name="author" class="form-control" id="author" placeholder="Enter author name" value="{{ $item->author }}">
                    </div>
                </div>
                <div class="col">
                    <!-- Publish Date -->
                    <div class="mb-3">
                        <label for="date" class="form-label">Publish Date</label>
                        <input type="date" name="date" class="form-control" id="date" placeholder="Select publish date" value="{{ $item->date }}">
                    </div>
                </div>
            </div>            

            <!-- Blog Content -->
            <div class="mb-3 bootstrap-scope">
                <label for="content" class="form-label">Blog Content</label>
                <textarea class="form-control @error('content') is-invalid @enderror" id="summernote" rows="12" name="content" placeholder="Enter full content with styles">{!! $item->content !!}</textarea>
                @error('content')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Thumbnail Image -->
            <div class="mb-3">
                <label for="image" class="form-label">Thumbnail Image</label>
                <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" id="image" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                @error('image')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                <img class="mt-2 rounded" height="80px" src="{{ asset($item->image) }}" id="blah">
            </div>
            <button type="submit" class="btn btn-warning">Update</button>
          </form>
        </div>
      </div>
    </div>
</div>
@endsection

@push('script')
<script src="{{ asset('frontend/summernote/summernote-bs5.js') }}"></script>
<script>
    $(document).ready(function() {
        $('#summernote').summernote();
    });    
</script>
@endpush