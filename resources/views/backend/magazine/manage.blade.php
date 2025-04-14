@extends('backend.master')
@push('css')
    <style>
        .dataTables_wrapper .dataTables_length select {
            min-width: 55px;
        }
    </style>
@endpush
@section('contant')
    <div class="row">
        <div class="mb-4 d-flex justify-content-end gap-2 align-items-center">
            @if (session('content'))
                <div class="alert alert-success mb-0" style="width: -webkit-fill-available;">{{ session('content') }}</div>
            @endif
        </div>
    </div>
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

    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title fw-semibold mb-4">Blogs List</h5>
                    @if (session('deleted'))
                        <div class="alert alert-success">{{ session('deleted') }}</div>
                    @endif
                    <table class="table table-bordered" id="blogsTable">
                        <thead>
                            <tr>
                                <th>Sl</th>
                                <th>Blog Title</th>
                                <th>Author</th>
                                <th>Thumnail Image</th>
                                <th>Views</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('script')
    <!-- jQuery + DataTables JS (make sure jQuery is loaded) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#blogsTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('magazine.data') }}",
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'title',
                        name: 'title'
                    },
                    {
                        data: 'author',
                        name: 'author'
                    },
                    {
                        data: 'thumnail_image',
                        name: 'thumnail_image',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'read_count',
                        name: 'read_count'
                    },
                    {
                        data: 'status',
                        name: 'status',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    }
                ]

            });
        });
    </script>
    <!-- Include SweetAlert2 -->    
    @if (session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Success!',
                text: '{{ session('success') }}',
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'OK'
            });
        </script>
    @endif
@endpush
