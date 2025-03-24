@extends('backend.master')
@section('contant')
<div class="card">
    <div class="card-body">
      <h5 class="card-title fw-semibold mb-4">About Us Section</h5>
      @if (session('success'))                  
        <div class="alert alert-success">{{ session('success') }}</div>          
      @endif
      <div class="card">
        <div class="card-body">
          <form action="{{ route('about.us.update') }}" method="POST" enctype="multipart/form-data">
              @csrf
            <div class="mb-3">
              <label for="title" class="form-label">Title</label>
              <input type="text" name="title" value="{{ $data->title }}" class="form-control" id="title" placeholder="Enter website title">
            </div>            
            <div class="mb-3">
                <label for="summernote" class="form-label">Description</label>
                <textarea class="form-control" id="summernote" rows="3" name="description" placeholder="Enter a Description">{!! $data->description !!}</textarea>
              </div>
            {{-- <div class="mb-3">
                <label for="service" class="form-label">Services</label>
                <input type="text" name="service" value="{{ $data->service }}" class="form-control" id="service">
            </div> --}}
            <div class="mb-3">
                <label for="link" class="form-label">Video Link</label>
                <input type="text" name="link" value="{{ $data->link }}" class="form-control" id="link">
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Banner Image</label>
                <input type="file" name="image" class="form-control" id="image">
                <img class="mt-2 rounded" height="60px" src="{{ asset($data->image) }}" alt="">
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
{{-- <div class="card">
    <div class="card-body">
      <h5 class="card-title fw-semibold mb-4">Our Vision</h5>
      @if (session('vision'))                  
        <div class="alert alert-success">{{ session('vision') }}</div>          
      @endif
      <div class="card">
        <div class="card-body">
          <form action="{{ route('ourVision.update') }}" method="POST" enctype="multipart/form-data">
              @csrf
            <div class="mb-3">
              <label for="title" class="form-label">Title</label>
              <input type="text" name="title" value="{{ $vision->title }}" class="form-control" id="title" placeholder="Enter website title">
            </div>            
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" rows="3" name="description" placeholder="Enter a Description">{{ $vision->description }}</textarea>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="file" name="image" class="form-control" id="image">
                <img class="mt-2 rounded" height="60px" src="{{ asset($vision->image) }}" alt="">
            </div>
            <button type="submit" class="btn btn-info">Update</button>
          </form>
        </div>
      </div>
    </div>
</div> --}}
{{-- <div class="card">
    <div class="card-body">
      <h5 class="card-title fw-semibold mb-4">Our Mission</h5>
      @if (session('mission'))                  
        <div class="alert alert-success">{{ session('mission') }}</div>          
      @endif
      <div class="card">
        <div class="card-body">
          <form action="{{ route('ourMission.update') }}" method="POST" enctype="multipart/form-data">
              @csrf
            <div class="mb-3">
              <label for="title" class="form-label">Title</label>
              <input type="text" name="title" value="{{ $mission->title }}" class="form-control" id="title" placeholder="Enter website title">
            </div>            
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" rows="3" name="description" placeholder="Enter a Description">{{ $mission->description }}</textarea>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="file" name="image" class="form-control" id="image">
                <img class="mt-2 rounded" height="60px" src="{{ asset($mission->image) }}" alt="">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
          </form>
        </div>
      </div>
    </div>
</div> --}}
@endsection
@push('script')
  <script>
    $(document).ready(function() {
        $('#summernote').summernote();
    });    
  </script>
@endpush