@extends('backend.master')
@section('contant')
    <div class="row">
        <div class="mb-4 d-flex justify-content-end gap-2 align-items-center">
            @if (session('content'))
                <div class="alert alert-success mb-0" style="width: -webkit-fill-available;">{{ session('content') }}</div>
            @endif
            <!-- Button trigger modal -->
            <button type="button" style="max-width: fit-content; text-wrap: nowrap;" class="btn btn-golden"
                data-bs-toggle="modal" data-bs-target="#exampleModal">
                Add Category
            </button>
            <button type="button" style="max-width: fit-content; text-wrap: nowrap;" class="btn btn-light-golden"
                data-bs-toggle="modal" data-bs-target="#categoryList">
                Category List
            </button>
            <button type="button" style="max-width: fit-content; text-wrap: nowrap;" class="btn btn-golden"
                data-bs-toggle="modal" data-bs-target="#sectionContentModel">
                Category Section
            </button>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add Blog Category</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('blog.category.store') }}" method="POST" id="categoryForm"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="category" class="form-label">Category</label>
                            <input type="text" name="name" class="form-control" id="category"
                                placeholder="Enter category name" required>
                        </div>
                        <div class="mb-3">
                            <label for="category_img" class="form-label">Image</label>
                            <input type="file" name="image" class="form-control" id="category_img" required>
                        </div>
                        <div class="d-flex gap-3">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status" id="flexRadioDefault1"
                                    value="0">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Inactive
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status" id="flexRadioDefault2" checked
                                    value="1">
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Active
                                </label>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary"
                        onclick="document.getElementById('categoryForm').submit()">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 2 -->
    <div class="modal fade" id="categoryList" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Category List</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Image</th>
                                <th scope="col">Category</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $i => $category)
                                <tr>
                                    <th><img src="{{ asset($category->image) }}" width="60px"></th>
                                    <td>{{ $category->name }}</td>
                                    <td>
                                        <form action="{{ route('category.status.update', $category->id) }}" method="POST"
                                            id="CategoryStatusForm{{ $category->id }}">
                                            @csrf
                                            <div class="form-check cursor-pointer">
                                                <input class="form-check-input category-status" type="radio"
                                                    name="status" value="{{ $category->status }}"
                                                    {{ $category->status == 1 ? 'checked' : '' }}
                                                    data-id="{{ $category->id }}">
                                            </div>
                                        </form>
                                    </td>
                                    <td class="">
                                        <a href="{{ route('delete.blog.category', $category->id) }}"><button
                                                class="btn btn-sm btn-danger ms-3"><i
                                                    class="ti ti-trash"></i></button></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 3-->
    <div class="modal fade" id="sectionContentModel" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Update Content</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('description', 1) }}" method="POST" id="heroForm"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" name="title" class="form-control mb-1" id="title"
                                value="{{ description(1)->title ?? '' }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea name="description" class="form-control mb-1" id="description" cols="30" rows="4">{{ description(1)->description ?? '' }}</textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary"
                        onclick="document.getElementById('heroForm').submit()">Save changes</button>
                </div>
            </div>
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
                                <th>Category</th>
                                <th>Author</th>
                                <th>Featured Image</th>
                                <th>Thumnail Image</th>
                                <th>Views</th>
                                <th>Type</th>
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
    <link href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css" rel="stylesheet">
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#blogsTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('blogs.data') }}",
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
                        data: 'category',
                        name: 'category.name'
                    },
                    {
                        data: 'author',
                        name: 'author'
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
                        data: 'read_count',
                        name: 'read_count'
                    },
                    {
                        data: 'type',
                        name: 'type'
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $(document).on('change', '.category-status', function() {
            let categoryId = $(this).data('id');
            $('#CategoryStatusForm' + categoryId).submit();
        });
    </script>
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
    @if (session('category_deleted'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Success!',
                text: '{{ session('category_deleted') }}',
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'OK'
            });
        </script>
    @endif

@endpush
