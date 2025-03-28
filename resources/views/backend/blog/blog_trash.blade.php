@extends('backend.master')
@section('contant')
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Deleted Blogs</h5>
                @if (session('deleted'))
                    <div class="alert alert-success">{{ session('deleted') }}</div>
                @endif
                <table class="table table-bordered" id="blogsTable">
                    <thead>
                        <tr>
                            <th>Sl</th>
                            <th>Blog Title</th>
                            <th>Featured Image</th>
                            <th>Thumnail Image</th>
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
    <link href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css" rel="stylesheet">
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#blogsTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('blogs.trashed.data') }}",
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
                        data: 'featured_image',
                        name: 'featured_image',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'thumnail_image',
                        name: 'thumnail_image',
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
