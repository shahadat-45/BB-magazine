
@extends('backend.master')
@section('contant')

<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="{{ route('dashboard') }}">bb magazine</a>
        <span class="breadcrumb-item active">Role and Permission</span>
    </nav>

    <div class="sl-pagebody">
        <div class="row g-3">
            <div class="col-md-10 mx-auto">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <span>Permission List</span>
                        <div class="d-flex gap-2">
                            <a href="{{ route('add.permission') }}" class="btn btn-golden px-4">
                                <i class="fa fa-plus"></i> Add Permission
                            </a>
                            {{-- <a href="{{ route('import.permission') }}" class="btn btn-sm btn-info text-white">
                                <i class="fa fa-upload"></i> Import Xlsx
                            </a>
                            <a href="{{ route('export.permission') }}" class="btn btn-sm btn-dark">
                                <i class="fa fa-download"></i> Export Xlsx
                            </a> --}}
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="datatable1" class="table table-bordered table-hover">
                                <thead class="table-light">
                                    <tr>
                                        <th scope="col">Sl</th>
                                        <th scope="col">Permission Name</th>
                                        <th scope="col">Group Name</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($permissions as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->group_name }}</td>
                                        <td>
                                            <a href="{{ url('edit/permission/'.$item->id) }}" class="btn btn-sm btn-primary" title="Edit Data">
                                                <i class="ti ti-edit"></i>
                                            </a>
                                            <a href="{{ url('delete/permission/'.$item->id) }}" class="btn btn-sm btn-danger" id="delete" title="Delete Data">
                                                <i class="ti ti-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div><!-- table-responsive -->
                    </div>
                </div><!-- card -->
            </div>
        </div>
    </div>
</div>
@endsection
