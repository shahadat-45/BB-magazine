@extends('backend.master')
@section('contant')
<div class="row">
  <div class="mb-4 d-flex justify-content-end gap-2 align-items-center">
      <!-- Button trigger modal -->
      @if (session('content'))
        <div class="alert alert-success mb-0" style="width: -webkit-fill-available;">{{ session('content') }}</div>
      @endif
      <button type="button" style="max-width: fit-content;text-wrap: nowrap;" class="btn btn-golden" data-bs-toggle="modal" data-bs-target="#exampleModal">
          Newsletter Section Content
      </button>
  </div>
</div>
<div class="row">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-body">
            <table id="newsletterTable" class="table table-bordered">
                <thead>
                    <tr>
                        <th>Sl</th>
                        <th>Emails</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>
      </div>
    </div>            
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Update Content</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">             
          <form action="{{ route('description' , 4) }}" method="POST" id="heroForm" enctype="multipart/form-data">
              @csrf
              <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" class="form-control mb-1" id="title" value="{{ description(4)->title ?? '' }}" required>
              </div>
              <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea name="description" class="form-control mb-1" id="description" cols="30" rows="4">{{ description(4)->description ?? '' }}</textarea>
              </div>
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="document.getElementById('heroForm').submit()">Save changes</button> 
      </div>
    </div>
  </div>
</div>
@endsection
@push('script')
<script>
  $(document).ready(function() {
      $('#newsletterTable').DataTable({
          processing: true,
          serverSide: true,
          ajax: "{{ route('newsletter') }}",
          columns: [
              { data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false },
              { data: 'email', name: 'email' },
              { data: 'action', name: 'action', orderable: false, searchable: false }
          ]
      });
  });
</script>
@endpush