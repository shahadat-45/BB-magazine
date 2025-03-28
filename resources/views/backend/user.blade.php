@extends('backend.master')
@section('contant')
<div class="row">
    <div class="mb-4 d-flex justify-content-end gap-2 align-items-center">
        @if (session('content'))
          <div class="alert alert-success mb-0" style="width: -webkit-fill-available;">{{ session('content') }}</div>
        @endif
        <!-- Button trigger modal -->
        <button type="button" style="max-width: fit-content; text-wrap: nowrap;" class="btn btn-golden" data-bs-toggle="modal" data-bs-target="#userRegistrationModal">
            Add User
        </button>
    </div>
</div>

  <!-- User Registration Modal -->
<div class="modal fade" id="userRegistrationModal" tabindex="-1" aria-labelledby="userRegistrationLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="userRegistrationLabel">User Registration</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="{{ route('user.registerByAdmin') }}" method="POST" id="userRegistrationForm" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
              <label for="name" class="form-label">Name</label>
              <input type="text" name="name" class="form-control" id="name" placeholder="Enter your name" required>
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email" required>
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" name="password" class="form-control" id="password" placeholder="Enter password" required>
            </div>
            <div class="mb-3">
              <label for="role" class="form-label">Role</label>
              <select name="role" class="form-control" id="role" required>
                <option value="admin">Admin</option>
                <option value="editor">Editor</option>
                <option value="user">User</option>
              </select>
            </div>
            <div class="mb-3">
              <label for="user_img" class="form-label">Profile Image</label>
              <input type="file" name="image" class="form-control" id="user_img" required>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" onclick="document.getElementById('userRegistrationForm').submit()">Register</button>
        </div>
      </div>
    </div>
  </div>  
<!-- User Update Modal -->
@foreach ($users as $user)
    <div class="modal fade" id="userUpdateModal{{ $user->id }}" tabindex="-1" aria-labelledby="userUpdateLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="userUpdateLabel">User Update</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('user.updateByAdmin' , $user->id) }}" method="POST" id="userUpdateForm{{ $user->id }}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="Enter your name" required value="{{ $user->name }}">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input disabled name="email" class="form-control" id="email" placeholder="Enter your email" required value="{{ $user->email }}">
                        </div>
                        <div class="mb-3">
                            <label for="role" class="form-label">Role</label>
                            <select name="role" class="form-control" id="role" required>
                                <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Admin</option>
                                <option value="editor" {{ $user->role == 'editor' ? 'selected' : '' }}>Editor</option>
                                <option value="user" {{ $user->role == 'user' ? 'selected' : '' }}>User</option>
                            </select>
                        </div>
                        <div>
                            <label for="user_img" class="form-label">Profile Image</label>
                            <input type="file" name="image" class="form-control" id="user_img" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                            <img class="mt-2" src="{{ asset($user->image) }}" width="50px" id="blah">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" onclick="document.getElementById('userUpdateForm{{ $user->id }}').submit()">Update</button>
                </div>
            </div>
        </div>
    </div>
@endforeach

@if ($errors->any())
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-body p-0">
            <div class="alert alert-danger mb-0">
                <ul class="ms-3">
                    @foreach ($errors->all() as $error)
                        <li style="list-style: disc;">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
@endif
@if (session('error'))
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-body p-0">
            <div class="alert alert-danger mb-0">
                <ul class="ms-3">
                    <li style="list-style: disc;">{{ session('error') }}</li>
                </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
@endif

<div class="row">
    <div class="col-sm-12">
        <div class="card">        
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">User List</h5>
                @if (session('deleted'))
                    <div class="alert alert-success">{{ session('deleted') }}</div>
                @endif
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Image</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Role</th>
                        <th scope="col">Joined At</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $i => $user)
                            <tr style="vertical-align: middle;">
                                <th>
                                    @if ($user->image)
                                        <img src="{{ asset($user->image) }}" width="50px" height="50px" style="border-radius: 50%; object-fit: cover">    
                                    @else
                                        <img src="{{ asset('assets/images/profile/default-profile-picture.webp') }}" width="50px" height="50px" style="border-radius: 50%; object-fit: cover">
                                    @endif
                                </th>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->role }}</td>
                                <td>{{ date('d M Y' , strtotime($user->created_at)) }}</td>
                                <td class="">
                                    <button class="btn btn-sm btn-success ms-1" data-bs-toggle="modal" data-bs-target="#userUpdateModal{{ $user->id }}"><i class="ti ti-edit-circle"></i></button>
                                    <a href="{{ route('delete.userByAdmin', $user->id) }}" title="Delete"><button class="btn btn-sm btn-danger ms-1"><i class="ti ti-trash"></i></button></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>                
                </table>
            </div>
        </div>
    </div>        
</div>
@endsection
@push('script')
<!-- Include SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@if (session('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Success!',
            text: '{{ session("success") }}',
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'OK'
        });
    </script>
@endif    
@endpush