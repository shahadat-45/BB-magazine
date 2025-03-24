@extends('backend.master')
@section('contant')
<div class="row">
  <div class="mb-4 d-flex justify-content-end gap-2 align-items-center">
      <!-- Button trigger modal -->
      @if (session('content'))
        <div class="alert alert-success mb-0" style="width: -webkit-fill-available;">{{ session('content') }}</div>
      @endif
      <button type="button" style="max-width: fit-content;text-wrap: nowrap;" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
          Contact Section Content
      </button>
  </div>
</div>
<div class="row">
    <div class="col-sm-6">
        <div class="card">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Sl</th>
                    <th scope="col">Emails</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($emails as $i => $email)
                        <tr>
                            <th scope="row">{{ $i + 1 }}</th>
                            <td>{{ $email->email }}</td>
                            <td class=""><a href="{{ route('delete.newsletter', $email->id) }}"><button class="btn btn-sm btn-danger ms-3"><i class="ti ti-trash"></i></button></a></td>
                        </tr>                        
                    @endforeach
                </tbody>                
            </table>
            <div class="ms-auto me-3">
                {{ $emails->links() }}
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="card">
            <div class="card-body">
              <h5 class="card-title fw-semibold mb-4">Newsletter Section</h5>
              @if (session('success'))                  
                <div class="alert alert-success">{{ session('success') }}</div>          
              @endif
              <div class="card">
                <div class="card-body">
                  <form action="{{ route('newsletter.update') }}" method="POST" enctype="multipart/form-data">
                      @csrf
                    <div class="mb-3">
                      <label for="title" class="form-label">Title</label>
                      <input type="text" name="title" value="{{ $data->title }}" class="form-control" id="title" placeholder="Enter website title">
                    </div>            
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" id="description" rows="3" name="description" placeholder="Enter a Description">{{ $data->description }}</textarea>
                    </div>
                    {{-- <div class="mb-3">
                        <label for="image" class="form-label">Banner Image</label>
                        <input type="file" name="image" class="form-control" id="image">
                        <img class="mt-2 rounded" height="60px" src="{{ asset($data->image) }}" alt="">
                    </div> --}}
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
                </div>
              </div>
            </div>
        </div>
    </div>        
</div>
<div class="row">
  <div class="col-sm-12">
    <div class="card">
      <div class="card-header"><h5>People who submited contact us form</h5></div>
      <div class="card-body">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Name</th>
                <th scope="col">Emails</th>
                <th scope="col">Subject</th>
                <th scope="col">Message</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($contacts as $i => $contact)
                    <tr>
                        <th>{{ $contact->name }}</th>
                        <td>{{ $contact->email }}</td>
                        <td>{{ $contact->subject }}</td>
                        <td>{{ $contact->message }}</td>
                        <td class=""><a href="{{ route('delete.newsletter', $contact->id) }}"><button class="btn btn-sm btn-danger ms-3"><i class="ti ti-trash"></i></button></a></td>
                    </tr>                        
                @endforeach
            </tbody>                
        </table>
      </div>
        <div class="ms-auto me-3">
            {{ $contacts->links() }}
        </div>
    </div>
  </div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Update Content</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">             
          <form action="{{ route('description' , 4) }}" method="POST" id="heroForm" enctype="multipart/form-data">
              @csrf
              <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" class="form-control mb-1" id="title" value="{{ description(4)->title ?? '' }}" required>
              </div>
              <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea name="description" class="form-control mb-1" id="description" cols="30" rows="4">{{ description(4)->description ?? '' }}</textarea>
              </div>
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="document.getElementById('heroForm').submit()">Save changes</button> 
      </div>
    </div>
  </div>
</div>
@endsection