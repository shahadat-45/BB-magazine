
@extends('backend.master')
@section('contant')

<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="{{route('dashboard')}}">bb magazine</a>
        <span class="breadcrumb-item active">Assigned Permission of Role</span>
    </nav>

    <div class="sl-pagebody">
        <div class="row row-sm">
            <div class="col-md-10 m-auto">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <span>Assigned Permission List of All Role</span>
                        <div>
                            <a href="{{ route('add.role.have.permission') }}" class="btn btn-golden px-4">
                                <i class="fa fa-plus"></i> Assign Permission
                            </a>

                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-wrapper">
                            <table id="datatable1" class="table display responsive nowrap">
                                <thead>
                                    <tr>
                                        <th class="wd-30p">Sl</th>
                                        <th class="wd-25p">Role Name</th>
                                        <th class="wd-25p">Permission </th>
                                        <th class="wd-20p">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($roles as $key=> $item)
                                    <tr>
                                        <td>{{ $key+1}}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>
                                            @foreach ($item->permissions as $permission)
                                               <span class="badge bg-danger">{{$permission->name}}</span>

                                            @endforeach
                                        </td>

                                        <td>
                                            <div class="d-flex gap-2">
                                                <a href="{{ url('edit/assigned/permission/'.$item->id) }}" class="btn btn-sm btn-primary" title="Edit Data">
                                                    <i class="ti ti-edit"></i>
                                                </a>
                                                <a href="{{ url('delete/assigned/permission/'.$item->id) }}" class="btn btn-sm btn-danger" id="delete" title="Delete Data">
                                                    <i class="ti ti-trash"></i>
                                                </a>
                                            </div>
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
