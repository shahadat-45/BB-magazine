@extends('backend.master')
@push('css')
    <link href="{{ asset('frontend/summernote/summernote-bs5.css') }}" rel="stylesheet">
@endpush
@section('contant')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">Create New Blog</h5>

            <!-- Success Message -->
            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <div class="card">
                <div class="card-body">
                    <form action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <!-- Blog Title -->
                        <div class="mb-3">
                            <label for="title" class="form-label">Blog Title</label>
                            <input type="text" name="title" class="form-control @error('title') is-invalid @enderror"
                                id="title" placeholder="Enter a title" value="{{ old('title') }}">
                            @error('title')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Blog Short Description -->
                        <div class="mb-3">
                            <label for="short_description" class="form-label">Short Description</label>
                            <input type="text" name="short_description"
                                class="form-control @error('short_description') is-invalid @enderror" id="short_description"
                                placeholder="Enter a short description" >
                            @error('short_description')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="row">
                            <div class="col">
                                <!-- Blog Category -->
                                <div class="mb-3">
                                    <label for="category" class="form-label">Blog Category</label>
                                    <select class="form-control select2-show-search" data-placeholder="Select One"
                                        name="category_id" data-validation="required">
                                        <option label="Choose one"></option>
                                        @foreach ($categories as $item)
                                            <option value="{{ $item->id }}">
                                                {{ ucwords($item->name) }}</option>
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
                                        value="{{ old('tags') }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <!-- Blog Category -->
                                <div class="mb-3">
                                    <label for="category" class="form-label">Division </label>
                                    <select class="form-control select2-show-search" data-placeholder="Select One"
                                        name="division_id" data-validation="required">
                                        <option label="Choose one"></option>
                                        @foreach ($divisions as $item)
                                            <option value="{{ $item->id }}">
                                                {{ ucwords($item->division_name) }}</option>
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
                                        <option label="Choose one"></option>
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
                                        <option label="Choose one"></option>
                                    </select>
                                    @error('state_id')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                        </div>
                      
                        <div class="row">
                            <div class="col">
                                <!-- Author Name -->
                                <div class="mb-3">
                                    <label for="author" class="form-label">News 
                                      Type
                                    </label>
                                    <select class="form-control select2-show-search" data-placeholder="Select One"
                                        name="type" data-validation="required" id="type">
                                        <option  value="news">Daily News</option>
                                        <option value="magazine">Monthly Magazine</option>
                                       
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <!-- Publish Date -->
                                <div class="mb-3">
                                    <label for="date" class="form-label">Publish Date</label>
                                    <input type="date" name="date" class="form-control" id="date"
                                        placeholder="Select publish date" value="{{ old('date') }}">
                                </div>
                            </div>
                        </div>

                        <!-- Blog Content -->
                        <div class="mb-3 bootstrap-scope">
                            <label for="content" class="form-label">Blog Content</label>
                            <textarea class="form-control @error('content') is-invalid @enderror" id="summernote" rows="12" name="content"
                                placeholder="Enter full content with styles">{{ old('content') }}</textarea>
                            @error('content')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Thumbnail Image -->
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
                                <img class="mt-2 rounded" height="80px" src="" id="blah2">
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
                                <img class="mt-2 rounded" height="80px" src="" id="blah">
                            </div>
                          </div>
                          <div class="container mb-2">
                            <label class="form-check form-switch">
                              <input name="status" class="form-check-input" value="1" type="checkbox" id="toggleButton">
                              <span class="form-check-label" for="toggleButton">Status</span>
                            </label>
                          </div>
                        </div>

                        <button type="submit" class="btn btn-success">Create</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('script')
    <script>
        $(document).ready(function() {
            $('#summernote').summernote();
        });
    </script>

<script src="{{ asset('assets/lib/jquery-2.2.4.min.js')}}"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $('select[name="division_id"]').on('change', function() {
            var division_id = $(this).val();
            if (division_id) {
                $.ajax({
                    url: "{{ url('/district-get/ajax') }}/" + division_id,
                    type: "GET",
                    dataType: "json",
                    success: function(data) {
                        $('select[name="state_id"]').empty();
                        $('select[name="district_id"]').empty();

                        //append option choose one in district and state
                        $('select[name="district_id"]').append(
                            /* '<option value="" selected disabled>Choose one</option>' */);
                        $('select[name="state_id"]').append(
                            '<option value="" selected disabled>Choose one</option>');

                        $.each(data, function(key, value) {
                            $('select[name="district_id"]').append(
                                '<option value="' + value.id + '">' + value
                                .district_name + '</option>');

                        });

                    },

                });
            } else {
                alert('danger');
            }

        });

        $('select[name="district_id"]').on('change', function() {
            var district_id = $(this).val();
            if (district_id) {
                $.ajax({
                    url: "{{ url('/state-get/ajax') }}/" + district_id,
                    type: "GET",
                    dataType: "json",
                    success: function(data) {
                        $('select[name="state_id"]').empty();

                        //append option choose one in state
                        $('select[name="state_id"]').append(
                            /* '<option value="" disabled selected>Choose one</option>' */);
                        $.each(data, function(key, value) {
                            $('select[name="state_id"]').append('<option value="' +
                                value.id + '">' + value.state_name + '</option>'
                                );
                        });

                    },

                });
            } else {
                alert('danger');
            }

        });

    });

</script>

@endpush
