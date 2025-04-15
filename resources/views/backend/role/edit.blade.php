@extends('backend.master')
@section('contant')

<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="{{ route('dashboard') }}">bb magazine</a>
        <span class="breadcrumb-item active">Role Edit</span>
    </nav>

    <div class="sl-pagebody">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card border-0 shadow-sm rounded-4">
                    <div class="card-header bg-white border-bottom d-flex justify-content-between align-items-center">
                        <h4 class="mb-0 text-warning fw-bold">
                            <i class="ti ti-user-edit me-2"></i> Edit Role
                        </h4>
                        <a href="{{ route('all.role') }}" class="btn btn-outline-warning btn-sm">
                            <i class="ti ti-arrow-left"></i> Back to Roles
                        </a>
                    </div>

                    <div class="card-body p-4">
                        <form action="{{ route('update.role') }}" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{ $role->id }}">
                            <div class="mb-3">
                                <label for="name" class="form-label fw-semibold">Role Name <span class="text-danger">*</span></label>
                                <input type="text" name="name" class="form-control" value="{{ $role->name }}" placeholder="Enter role name">
                                @error('name')
                                    <small class="text-danger d-block mt-1">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="text-end">
                                <button type="submit" class="btn btn-golden px-4">
                                    <i class="ti ti-check me-1"></i> Update Role
                                </button>
                            </div>
                        </form>
                    </div> <!-- card-body -->
                </div> <!-- card -->
            </div> <!-- col -->
        </div> <!-- row -->
    </div> <!-- sl-pagebody -->
</div> <!-- sl-mainpanel -->

@endsection
