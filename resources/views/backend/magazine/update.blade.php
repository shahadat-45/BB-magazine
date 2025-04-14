@extends('backend.master')
@push('css')
    <link href="{{ asset('frontend/summernote/summernote-bs5.css') }}" rel="stylesheet">
    <style>
        .note-editable{
            min-height: 200px;
        }
    </style>
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
            <form action="{{ route('magazine.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                @csrf

                <!-- Blog Title -->
                <div class="mb-3">
                    <label for="title" class="form-label">Magazine Title</label>
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
                            <select class="form-control select2-show-search" data-placeholder="Select One" name="district_id" data-validation="required" id="district">                                
                                @foreach (App\Models\ShipDistrict::where('division_id', $item->division_id)->orderBy('district_name', 'ASC')->get() as $district)
                                    <option value="{{ $district->id }}" {{ $item->district_id == $district->id ? 'selected' : '' }}>{{ $district->district_name }}</option>
                                @endforeach
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
                        <!-- Publish Date -->
                        <div class="mb-3">
                            <label for="date" class="form-label">Publish Date</label>
                            <input type="date" name="date" class="form-control" id="date"
                                value="{{ old('date', $item->date) }}">
                        </div>
                    </div>
                </div>
                
                <!-- New Image Upload Section -->
                <div class="mb-3">
                    <label for="images" class="form-label">Add More Images</label>
                    <input type="file" class="form-control" id="images" name="images[]" multiple accept="image/*">
                </div>
                
                <!-- Existing Images Section -->
                <div class="mb-3">
                    <label class="form-label">Magazine Images</label>
                    <div class="row" id="existing-images-container">
                        @foreach($item->images as $image)
                        <div class="col-md-3 mb-3 existing-image" data-image-id="{{ $image->id }}">
                            <div class="position-relative">
                                <img src="{{ asset($image->path) }}" class="img-thumbnail" style="height: 150px; width: 100%; object-fit: cover;">
                                <button type="button" class="btn btn-danger btn-sm position-absolute top-0 end-0 remove-existing-image">
                                    &times;
                                </button>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                
                <!-- New Images Preview Area -->
                <div class="row mb-3" id="image-preview-container">
                    <!-- New preview images will appear here -->
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
                                onchange="document.getElementById('blah2').src = window.URL.createObjectURL(this.files[0])" accept=".png, .jpeg, .jpg, .gif, .webp">
                            @error('thumnail_image')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <img class="mt-2 rounded" height="80px" src="{{ asset($item->thumnail_image) }}" id="blah2">
                        </div>
                    </div>
                </div>
                <!-- Status Toggle -->
                <div class="mb-2">
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
                        $('select[name="district_id"]').append('<option value="" selected disabled>Choose one</option>');

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
<script>
    $(document).ready(function() {
        // Initialize Toastr
        toastr.options = {
            "closeButton": true,
            "progressBar": true,
            "positionClass": "toast-top-right",
            "preventDuplicates": false,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000"
        };
    
        // Handle new image preview
        $('#images').on('change', function() {
            $('#image-preview-container').empty();
            
            if (this.files) {
                $.each(this.files, function(i, file) {
                    if (file.type.match('image.*')) {
                        const reader = new FileReader();
                        
                        reader.onload = function(e) {
                            const colDiv = $('<div>').addClass('col-md-3 mb-3');
                            const imgContainer = $('<div>').addClass('position-relative');
                            const img = $('<img>').attr('src', e.target.result)
                                .addClass('img-thumbnail')
                                .css({
                                    'height': '150px',
                                    'width': '100%',
                                    'object-fit': 'cover'
                                });
                            
                            const removeBtn = $('<button>')
                                .attr('type', 'button')
                                .addClass('btn btn-danger btn-sm position-absolute top-0 end-0 remove-new-image')
                                .html('&times;')
                                .on('click', function() {
                                    colDiv.remove();
                                    // Remove the file from input
                                    const dataTransfer = new DataTransfer();
                                    $.each($('#images')[0].files, function(j, f) {
                                        if (f !== file) dataTransfer.items.add(f);
                                    });
                                    $('#images')[0].files = dataTransfer.files;
                                });
                            
                            imgContainer.append(img, removeBtn);
                            colDiv.append(imgContainer);
                            $('#image-preview-container').append(colDiv);
                        }
                        
                        reader.readAsDataURL(file);
                    }
                });
            }
        });
    
        // Handle deletion of existing images with AJAX
        $('#existing-images-container').on('click', '.remove-existing-image', function() {
            const imageDiv = $(this).closest('.existing-image');
            const imageId = imageDiv.data('image-id');
            const baseDeleteRoute = '{{ route("magazine.images.delete", "") }}';
            
            // Show confirmation dialog
            if (confirm('Are you sure you want to delete this image?')) {
                $.ajax({
                    url: `${baseDeleteRoute}/${imageId}`,
                    type: 'get',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(data) {
                        if (data.success) {
                            imageDiv.remove();
                            toastr.success('Image deleted successfully');
                        } else {
                            toastr.error('Failed to delete image');
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error('Error:', error);
                        toastr.error('An error occurred while deleting the image');
                    }
                });
            }
        });
    });
</script>
@endpush
