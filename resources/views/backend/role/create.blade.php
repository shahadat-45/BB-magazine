
@extends('backend.master')
@section('contant')

<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="{{route('dashboard')}}">bb magazine</a>
        <span class="breadcrumb-item active">Role Add</span>
    </nav>

    <div class="sl-pagebody">
        <div class="row row-sm">
            <div class="col-md-6 m-auto">
                <div class="card">
                    <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Role Add</h5>

                    </div>
                    <div class="card-body">
                        <form action="{{ route('store.role') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label class="form-control-label">Role Add: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="name" required>
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="text-right">
                                <button type="submit" class="btn btn-success">
                                     Save Change
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div><!-- col-md-6 -->
        </div>
    </div>
</div>
@endsection
