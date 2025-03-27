@extends('backend.master')
@push('css')
<link href="{{ asset('frontend/summernote/summernote-bs5.css') }}" rel="stylesheet">
@endpush
@section('contant')
<div class="card">
    <div class="card-header">            
        <h5 class="card-title fw-semibold mb-4">Update Blog</h5>
        <!-- Success Message -->
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        </div>
        <div class="card-body">
            <form action="{{ route('blog.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                @csrf

                <!-- Blog Title -->
                <div class="mb-3">
                    <label for="title" class="form-label">Blog Title</label>
                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror"
                        id="title" placeholder="Enter a title" value="{{ $item->title }}">
                    @error('title')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Blog Short Description -->
                <div class="mb-3">
                    <label for="short_description" class="form-label">Short Description</label>
                    <input type="text" name="short_description" value="{{ $item->short_description }}"
                        class="form-control @error('short_description') is-invalid @enderror" id="short_description"
                        placeholder="Enter a short description">
                    @error('short_description')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="row">
                    <div class="col">
                        <!-- Blog Category -->
                        <div class="mb-3">
                            <label for="category" class="form-label">Blog Category</label>
                            <select class="form-control select2-show-search" name="category_id" data-validation="required">
                                <option disabled selected>Choose one</option>
                                @foreach ($categories as $cat)
                                    <option value="{{ $cat->id }}" {{ $cat->id == $item->category_id ? 'selected' : '' }}>
                                        {{ ucwords($cat->name) }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col">
                        <!-- Blog Tags -->
                        <div class="mb-3">
                            <label for="tag" class="form-label">Tags</label>
                            <input type="text" name="tags" class="form-control" id="tag"
                                placeholder="example: lifestyle,colorful,trending,another"
                                value="{{ old('tags', $item->tags) }}">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <!-- Division -->
                        <div class="mb-3">
                            <label for="division_id" class="form-label">Division</label>
                            <select class="form-control select2-show-search" name="division_id" data-validation="required">
                                <option label="Choose one"></option>
                                @foreach ($divisions as $division)
                                    <option value="{{ $division->id }}" {{ $division->id == $item->division_id ? 'selected' : '' }}>
                                        {{ ucwords($division->division_name) }}
                                    </option>
                                @endforeach
                            </select>
                            @error('division_id')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>



                        <div class="col-md-4">
                            <!-- Blog Category -->
                            <div class="mb-3">
                                <label for="category" class="form-label">District</label>
                                <select class="form-control select2-show-search" data-placeholder="Select One"
                                    name="district_id" data-validation="required" id="district">
                                    <option value="{{ $item->district_id }}">
                                        {{ ucwords($item->district->district_name) }}
                                    </option>
                                </select>
                                @error('district_id')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <!-- Blog Category -->
                            <div class="mb-3">
                                <label for="category" class="form-label">State</label>
                                <select class="form-control select2-show-search" data-placeholder="Select One"
                                    name="state_id" data-validation="required">
                                    <option value="{{ $item->state_id }}">
                                        {{ ucwords($item->state->state_name) }}
                                    </option>
                                </select>
                                @error('state_id')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>



                </div>

                <div class="row">
                    <div class="col">
                        <!-- News Type -->
                        <div class="mb-3">
                            <label for="type" class="form-label">News Type</label>
                            <select class="form-control select2-show-search" name="type" data-validation="required" id="type">
                                <option value="news" {{ $item->type == 'news' ? 'selected' : '' }}>Daily News</option>
                                <option value="magazine" {{ $item->type == 'magazine' ? 'selected' : '' }}>Monthly Magazine</option>
                            </select>
                        </div>
                    </div>

                    <div class="col">
                        <!-- Publish Date -->
                        <div class="mb-3">
                            <label for="date" class="form-label">Publish Date</label>
                            <input type="date" name="date" class="form-control" id="date"
                                value="{{ old('date', $item->date) }}">
                        </div>
                    </div>
                </div>

                <!-- Blog Content -->
                <div class="mb-3 bootstrap-scope">
                    <label for="content" class="form-label">Blog Content</label>
                    <textarea class="form-control @error('content') is-invalid @enderror" id="summernote" rows="12" name="content"
                        placeholder="Enter full content with styles">{{ old('content', $item->content) }}</textarea>
                    @error('content')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Images -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="thumnail_image" class="form-label">Thumbnail Image</label>
                            <input type="file" name="thumnail_image"
                                class="form-control @error('thumnail_image') is-invalid @enderror" id="thumnail_image"
                                onchange="document.getElementById('blah2').src = window.URL.createObjectURL(this.files[0])">
                            @error('thumnail_image')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <img class="mt-2 rounded" height="80px" src="{{ asset($item->thumnail_image) }}" id="blah2">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="featured_image" class="form-label">Featured Image</label>
                            <input type="file" name="featured_image"
                                class="form-control @error('featured_image') is-invalid @enderror" id="featured_image"
                                onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                            @error('featured_image')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <img class="mt-2 rounded" height="80px" src="{{ asset($item->featured_image) }}" id="blah">
                        </div>
                    </div>
                </div>

                <!-- Status Toggle -->
                <div class="container mb-2">
                    <label class="form-check form-switch">
                        <input name="status" class="form-check-input" value="1" type="checkbox" id="toggleButton"
                            {{ $item->status == 1 ? 'checked' : '' }}>
                        <span class="form-check-label" for="toggleButton">Status</span>
                    </label>
                </div>

                <button type="submit" class="btn btn-success">Update</button>
            </form>
        </div>
    </div>
@endsection
@push('script')
<script src="{{ asset('frontend/summernote/summernote-bs5.js') }}"></script>
<script>
    $(document).ready(function () {
        $('#summernote').summernote();
    });
</script>
<script src="{{ asset('assets/lib/jquery-2.2.4.min.js') }}"></script>

<script>
    $(document).ready(function () {
        $('select[name="division_id"]').on('change', function () {
            var division_id = $(this).val();
            if (division_id) {
                $.ajax({
                    url: "{{ url('/district-get/ajax') }}/" + division_id,
                    type: "GET",
                    dataType: "json",
                    success: function (data) {
                        $('select[name="state_id"]').empty();
                        $('select[name="district_id"]').empty();
                        $('select[name="state_id"]').append('<option value="" selected disabled>Choose one</option>');

                        $.each(data, function (key, value) {
                            $('select[name="district_id"]').append('<option value="' + value.id + '">' + value.district_name + '</option>');
                        });
                    }
                });
            }
        });

        $('select[name="district_id"]').on('change', function () {
            var district_id = $(this).val();
            if (district_id) {
                $.ajax({
                    url: "{{ url('/state-get/ajax') }}/" + district_id,
                    type: "GET",
                    dataType: "json",
                    success: function (data) {
                        $('select[name="state_id"]').empty();
                        $.each(data, function (key, value) {
                            $('select[name="state_id"]').append('<option value="' + value.id + '">' + value.state_name + '</option>');
                        });
                    }
                });
            }
        });
    });
</script>
@endpush
