
@extends('backend.master')
@section('contant')
{{-- @section('permission') active show-sub @endsection
@section('add-permission') active @endsection --}}

<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="{{route('dashboard')}}">bb magazine</a>
        <span class="breadcrumb-item active">Import Permission</span>
    </nav>

    <div class="sl-pagebody">
        <div class="row row-sm">
            <div class="col-md-6 m-auto">
                <div class="card">
                    <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Import Permission</h5>

                    </div>
                    <div class="card-body">
                        <form action="{{ route('store.import.permission') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label class="form-control-label">Xlsx File Import: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="file" name="input_file" required>
                                @error('input_file')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="text-right">
                                <button type="submit" class="btn btn-success">
                                    <i class="fa fa-upload"></i> Upload
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
