@extends('backend.master')
@section('contant')
<div class="card">
    <div class="card-body">
      <h5 class="card-title fw-semibold mb-4">Hero Section Update Form</h5>
      @if (session('success'))                  
        <div class="alert alert-success">{{ session('success') }}</div>          
      @endif
      <div class="card">
        <div class="card-body">
          <form action="{{ route('hero.section.update') }}" method="POST" enctype="multipart/form-data">
              @csrf
            <div class="mb-3">
              <label for="title" class="form-label">Title</label>
              <input type="text" name="title" value="{{ $data->title }}" class="form-control" id="title" placeholder="Enter website title">
            </div>            
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" rows="3" name="description" placeholder="Enter a Description">{{ $data->description }}</textarea>
              </div>
            <div class="row">
              <div class="col">
                  <div class="mb-3">
                    <label for="free_quote" class="form-label">Get Started Button</label>
                    <input type="text" name="free_quote" value="{{ $data->free_quote }}" class="form-control" id="free_quote">
                  </div>
              </div>
              <div class="col">
                  <div class="mb-3">
                    <label for="contact_us" class="form-label">Contact Us Link</label>
                    <input type="text" name="contact_us" value="{{ $data->contact_us }}" class="form-control" id="contact_us">
                  </div>
              </div>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Banner Image</label>
                <input type="file" name="image" class="form-control" id="image">
                <img class="mt-2 rounded" height="60px" src="{{ asset($data->image) }}" alt="">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
</div>
@endsection