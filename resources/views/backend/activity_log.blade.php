@extends('backend.master')
@section('contant')
<div class="container mt-4">
    <h5 class="mb-3  ">Activity Logs</h5>
    <table id="activityLogTable" class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>User</th>
                <th>Action</th>
                <th>Description</th>
                <th>Log Name</th>
                <th>Date</th>
                <th>Actions</th> <!-- New Column for Delete -->
            </tr>
        </thead>
    </table>
</div>
@endsection

@push('script')
<script>
$(document).ready(function() {
    var table = $('#activityLogTable').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('activity.logs.data') }}",
        columns: [
            { data: 'id', name: 'id' },
            { data: 'user', name: 'user' },
            { data: 'action', name: 'action' },
            { data: 'description', name: 'description' },
            { data: 'log_name', name: 'log_name' },
            { data: 'created_at', name: 'created_at' },
            { data: 'action_buttons', name: 'action_buttons', orderable: false, searchable: false } // Delete Button Column
        ],
        order: [[0, 'desc']]  // Default ordering by ID (desc)
    });

    // Delete activity log
    $(document).on('click', '.delete-btn', function() {
        var activityId = $(this).data('id');

        if (confirm('Are you sure you want to delete this activity log?')) {
            $.ajax({
                url: '/activity-logs/delete/' + activityId,
                method: 'DELETE',
                success: function(response) {
                    table.ajax.reload(); // Reload DataTable after delete
                    alert(response.success); // Display success message
                }
            });
        }
    });
});
</script>
@endpush

