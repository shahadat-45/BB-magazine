@extends('backend.master')
@section('contant')

<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="{{ route('dashboard') }}">bb magazine</a>
        <span class="breadcrumb-item active">Edit Permission</span>
    </nav>

    <div class="sl-pagebody">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card border-0 shadow-sm rounded-4">
                    <div class="card-header bg-white border-bottom d-flex justify-content-between align-items-center">
                        <h4 class="mb-0 text-warning fw-bold">
                            <i class="ti ti-edit me-2"></i> Edit Permission
                        </h4>
                        <a href="{{ route('all.permission') }}" class="btn btn-outline-warning btn-sm">
                            <i class="ti ti-arrow-left"></i> Back to Permissions
                        </a>
                    </div>

                    <div class="card-body p-4">
                        <form action="{{ route('update.permission') }}" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{ $permission->id }}">

                            <div class="row g-4">
                                <!-- Group Name -->
                                <div class="col-md-6">
                                    <label for="group_name" class="form-label fw-semibold">Group Name</label>
                                    <select class="form-select" name="group_name">
                                        <option value="">Select Menu</option>
                                        <option value="Dashboard" {{ $permission->group_name == 'Dashboard' ? 'selected' : '' }}>Dashboard</option>
                                        <option value="Newsletter" {{ $permission->group_name == 'Newsletter' ? 'selected' : '' }}>Newsletter</option>
                                        <option value="ManageUser" {{ $permission->group_name == 'ManageUser' ? 'selected' : '' }}>ManageUser</option>
                                        <option value="ManageGallery" {{ $permission->group_name == 'ManageGallery' ? 'selected' : '' }}>ManageGallery</option>
                                        <option value="SiteSetting" {{ $permission->group_name == 'SiteSetting' ? 'selected' : '' }}>SiteSetting</option>
                                        <option value="Blog" {{ $permission->group_name == 'Blog' ? 'selected' : '' }}>Blog</option>
                                        <option value="Permission" {{ $permission->group_name == 'Permission' ? 'selected' : '' }}>Permission</option>
                                        <option value="ActivityLog" {{ $permission->group_name == 'ActivityLog' ? 'selected' : '' }}>ActivityLog</option>
                                        <option value="Trash" {{ $permission->group_name == 'Trash' ? 'selected' : '' }}>Trash</option>
                                    </select>
                                </div>

                                <!-- Permission Name -->
                                <div class="col-md-6">
                                    <label for="name" class="form-label fw-semibold">Permission Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="name" value="{{ $permission->name }}" placeholder="Enter permission name">
                                    @error('name')
                                        <small class="text-danger d-block mt-1">{{ $message }}</small>
                                    @enderror
                                </div>

                                <!-- Submit Button -->
                                <div class="col-12 text-end">
                                    <button type="submit" class="btn btn-golden px-4">
                                        <i class="ti ti-refresh me-1"></i> Update Permission
                                    </button>
                                </div>
                            </div> <!-- row -->
                        </form>
                    </div> <!-- card-body -->
                </div> <!-- card -->
            </div> <!-- col -->
        </div> <!-- row -->
    </div> <!-- sl-pagebody -->
</div> <!-- sl-mainpanel -->

@endsection
