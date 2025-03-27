@extends('backend.master')
@section('contant')
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Add Gallary </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('gallery.store') }}" method="POST" id="gallaryForm" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label for="category_img" class="form-label">Gallary Image</label>
                        <input type="file" name="gallary_image" class="form-control" id="gallary_image" required>
                    </div>


                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="document.getElementById('gallaryForm').submit()">Save changes</button>
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
                <form action="{{ route('description', 3) }}" method="POST" id="heroForm"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" name="title" class="form-control mb-1" id="title"
                            value="{{ description(3)->title ?? '' }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea name="description" class="form-control mb-1" id="description" cols="30" rows="4">{{ description(3)->description ?? '' }}</textarea>
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
<!-- Modal end -->
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
 <!-- User Update Modal -->
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h5 class="card-title fw-semibold ">Gallery List</h5>
                    <div>
                        <button type="button" style="max-width: fit-content; text-wrap: nowrap;" class="btn btn-primary me-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Add Gallary
                        </button>
                        
                        <button type="button" style="max-width: fit-content; text-wrap: nowrap;" class="btn btn-primary"
                            data-bs-toggle="modal" data-bs-target="#sectionContentModel">
                            Gallery Section Content
                        </button>
                    </div>
                </div>
        
                <table id="galleryTable" class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Sl</th>
                            <th>Image</th>
                            <th>Created at</th>
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
<!-- DataTables JS -->
<script>
    $(document).ready(function() {
        let table = $('#galleryTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('gallery.list') }}",
            columns: [
                { data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false },
                { data: 'gallary_image', name: 'gallary_image', orderable: false, searchable: false },
                { data: 'created_at', name: 'created_at' },
                { data: 'action', name: 'action', orderable: false, searchable: false }
            ]
        });

        // Handle status toggle
        $(document).on('click', '.status-toggle', function() {
            let button = $(this);
            let id = button.data('id');
            let icon = button.find('i');

            $.ajax({
                url: "{{ route('gallery.toggleStatus') }}",
                method: "POST",
                data: {
                    _token: "{{ csrf_token() }}",
                    id: id
                },
                success: function(response) {
                    if (response.success) {
                        icon.toggleClass('ti-circle-check ti-circle-x');
                        button.toggleClass('btn-success btn-dark');
                    }
                }
            });
        });
    });
</script>
@endpush
