@extends('backend.master')
@push('css')
    <link href="{{ asset('frontend/summernote/summernote-bs5.css') }}" rel="stylesheet">
    <style>
        .note-editable{
            min-height: 200px;
        }
        /* Image preview styling */
        #image-preview-container .img-thumbnail {
            object-fit: cover;
            width: 100%;
            height: 150px;
        }

        #image-preview-container .position-relative {
            transition: all 0.3s ease;
        }

        #image-preview-container .position-relative:hover {
            transform: scale(1.05);
        }

        .remove-image-btn {
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .position-relative:hover .remove-image-btn {
            opacity: 1;
        }
    </style>
@endpush
@section('contant')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">Create New Magazine</h5>

            <!-- Success Message -->
            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <div class="card">
                <div class="card-body">
                    <form action="{{ route('magazines.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <!-- Blog Title -->
                        <div class="mb-3">
                            <label for="title" class="form-label">Magazine Title</label>
                            <input type="text" name="title" class="form-control @error('title') is-invalid @enderror"
                                id="title" placeholder="Enter a title" value="{{ old('title') }}">
                            @error('title')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Blog Short Description -->
                        <div class="mb-3">
                            <label for="short_description" class="form-label">Short Description</label>
                            <input type="text" name="short_description" value="{{ old('short_description') }}" 
                                class="form-control @error('short_description') is-invalid @enderror" id="short_description"
                                placeholder="Enter a short description" >
                            @error('short_description')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div class="row">
                            <div class="col-md-4">
                                <!-- Blog Category -->
                                <div class="mb-3">
                                    <label for="category" class="form-label">Division </label>
                                    <select class="form-control select2-show-search" data-placeholder="Select One"
                                        name="division_id" data-validation="required">
                                        <option selected disabled label="Choose one"></option>
                                        @foreach ($divisions as $item)
                                            @if (old('division_id'))
                                                <option value="{{ $item->id }}" class="{{ old('division_id') == $item->id ? '' : 'd-none' }}" {{ old('division_id') == $item->id ? 'selected' : '' }}>{{ ucwords($item->division_name) }}</option>
                                            @endif
                                            <option value="{{ $item->id }}" class="{{ old('division_id') == $item->id ? 'd-none' : '' }}">{{ ucwords($item->division_name) }}</option>
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
                                        <option selected disabled label="Choose one"></option>
                                        @if (old('division_id'))
                                            @foreach (App\Models\ShipDistrict::where('division_id', old('division_id'))->orderBy('district_name', 'ASC')->get() as $district)
                                                <option value="{{ $district->id }}" {{ old('district_id') == $district->id ? 'selected' : '' }}>{{ $district->district_name }}</option>
                                            @endforeach
                                        @endif
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
                                    <select class="form-control select2-show-search" data-placeholder="Select One" name="state_id" data-validation="required">
                                        <option disabled selected label="Choose one"></option>
                                        @if (old('district_id'))
                                            @foreach (App\Models\ShipState::where('district_id', old('district_id'))->orderBy('state_name', 'ASC')->get() as $state)
                                                <option value="{{ $state->id }}" {{ old('state_id') == $state->id ? 'selected' : '' }}>{{ $state->state_name }}</option>
                                            @endforeach
                                        @endif
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
                                        placeholder="Select publish date" value="{{ old('date') }}">
                                </div>
                            </div>
                        </div>

                        <!-- Image Upload Section -->
                        <div class="mb-3">
                            <label for="images" class="form-label">Upload Images</label>
                            <input type="file" class="form-control" id="images" name="images[]" multiple accept="image/*">
                        </div>

                        <!-- Preview Area -->
                        <div class="row mb-3" id="image-preview-container">
                            <!-- Preview images will appear here -->
                        </div>

                        <!-- Blog Content -->
                        <div class="mb-3 bootstrap-scope">
                            <label for="content" class="form-label">Magazine Content</label>
                            <textarea class="form-control @error('content') is-invalid @enderror" id="summernote" rows="12" name="content"
                                placeholder="Enter full content with styles">{{ old('content') }}</textarea>
                            @error('content')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Thumbnail Image -->
                        <div class="row">
                          <div class="col-md-6">

                            <div class="mb-2">
                                <label for="thumnail_image" class="form-label me-2">Thumbnail Image</label>
                                <small>Required image size (285 X 400)</small>
                                <input type="file" name="thumnail_image"
                                    class="form-control @error('thumnail_image') is-invalid @enderror" id="thumnail_image"
                                    onchange="document.getElementById('blah2').src = window.URL.createObjectURL(this.files[0])" accept=".png, .jpeg, .jpg, .gif, .webp">
                                @error('thumnail_image')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                                <img class="mt-2 rounded" height="80px" src="" id="blah2">
                            </div>
                          </div>                    
                        </div>
                        <div class="mb-2">
                          <label class="form-check form-switch">
                            <input name="status" class="form-check-input" value="1" type="checkbox" id="toggleButton">
                            <span class="form-check-label" for="toggleButton">Status</span>
                          </label>
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
                            '<option value="" selected disabled>Choose one</option>');
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
                            '<option value="" disabled selected>Choose one</option>');
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
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const imageInput = document.getElementById('images');
        const previewContainer = document.getElementById('image-preview-container');
        
        imageInput.addEventListener('change', function() {
            previewContainer.innerHTML = '';
            
            if (this.files) {
                Array.from(this.files).forEach(file => {
                    if (file.type.match('image.*')) {
                        const reader = new FileReader();
                        
                        reader.onload = function(e) {
                            const colDiv = document.createElement('div');
                            colDiv.className = 'col-md-3 mb-2';
                            
                            const imgContainer = document.createElement('div');
                            imgContainer.className = 'position-relative';
                            
                            const img = document.createElement('img');
                            img.src = e.target.result;
                            img.className = 'img-thumbnail';
                            img.style.maxHeight = '150px';
                            
                            const removeBtn = document.createElement('button');
                            removeBtn.type = 'button';
                            removeBtn.className = 'btn btn-danger btn-sm position-absolute top-0 end-0';
                            removeBtn.innerHTML = '&times;';
                            removeBtn.onclick = function() {
                                colDiv.remove();
                                // Remove the file from the input
                                const dataTransfer = new DataTransfer();
                                Array.from(imageInput.files).forEach(f => {
                                    if (f !== file) dataTransfer.items.add(f);
                                });
                                imageInput.files = dataTransfer.files;
                            };
                            
                            imgContainer.appendChild(img);
                            imgContainer.appendChild(removeBtn);
                            colDiv.appendChild(imgContainer);
                            previewContainer.appendChild(colDiv);
                        }
                        
                        reader.readAsDataURL(file);
                    }
                });
            }
        });
    });
</script>

@endpush
