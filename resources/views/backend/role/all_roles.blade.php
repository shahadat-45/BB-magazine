@extends('backend.master')
@section('contant')

<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="{{route('dashboard')}}">bb magazine</a>
        <span class="breadcrumb-item active">All Roles</span>
    </nav>

    <div class="sl-pagebody">
        <div class="row row-sm">
            <div class="col-md-10 m-auto">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <span>Roles List</span>
                        <div>
                            <a href="{{ route('add.role') }}" class="btn btn-golden px-4">
                                <i class="fa fa-plus"></i> Add Role
                            </a>
                            {{-- <a href="{{ route('import.permission') }}" class="btn btn-sm btn-info">
                                <i class="fa fa-upload"></i> Import Xlsx
                            </a>
                            <a href="{{ route('export.permission') }}" class="btn btn-dark btn-sm">
                              <i class="fa fa-download"></i> Export Xlsx
                          </a> --}}
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-wrapper">
                            <table id="datatable1" class="table display responsive nowrap">
                                <thead>
                                    <tr>
                                        <th class="wd-30p">Sl</th>
                                        <th class="wd-25p">Role Name</th>
                                        {{-- <th class="wd-25p">Group Name</th> --}}
                                        <th class="wd-20p">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($roles as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->name }}</td>
                                        {{-- <td>{{ $item->group_name }}</td> --}}
                                        <td>
                                            <a href="{{ url('edit/role/'.$item->id) }}" class="btn btn-sm btn-primary" title="Edit Data">
                                                <i class="ti ti-edit"></i>
                                            </a>
                                            <a href="{{ url('delete/role/'.$item->id) }}" class="btn btn-sm btn-danger" id="delete" title="Delete Data">
                                                <i class="ti ti-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div><!-- table-wrapper -->
                    </div>
                </div><!-- card -->
            </div>
        </div>
    </div>
</div>
@endsection
