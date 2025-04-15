@extends('backend.master')
@section('contant')


<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<style>
    .form-control-label{
        text-transform: capitalize;
    }
</style>
<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="{{route('dashboard')}}">bb magazine</a>
        <span class="breadcrumb-item active">Dashboard</span>
    </nav>

    <div class="sl-pagebody">
        <div class="row row-sm">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">Role Permission Setup</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('role.permission.store') }}" method="POST">
                            @csrf
                            <div class="row">
                                <!-- Role Selection -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="role">Role Name</label>
                                        <select class="form-control" name="role_id" required>
                                            <option value="">Select Role</option>
                                            @foreach ($roles as $item)
                                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>


                            </div>
                            <!-- Select All Permissions -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="flexCheckMain"> All Permissions:</label>
                                    <input type="checkbox" id="flexCheckMain">
                                </div>
                            </div>

                            <hr>

                            <!-- Permissions List -->
                            @foreach ($permission_groups as $group)
                               <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-control-label">{{$group->group_name}}</label>
                                        <input type="checkbox" id="group_name">
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    @php
                                        $permissions = App\Models\User::getPermissionByGroupName($group->group_name)
                                    @endphp
                                    @foreach ($permissions as $item)
                                       <div class="form-group">
                                        <label class="form-control-label"> {{$item->name}}</label>
                                        <input type="checkbox" name= "permission[]" value="{{$item->id}}" id="checkDefault{{$item->id}}">
                                    </div>
                                    @endforeach

                                </div>
                            </div>
                            {{-- end row --}}
                            @endforeach


                            <!-- Submit Button -->
                            <div class="form-layout-footer mt-3">
                                <button type="submit" class="btn btn-golden px-4">Create</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
$('#flexCheckMain').click(function(){
 if($(this).is(':checked')){
    $('input[type = checkbox]').prop('checked',true)
}else{
     $('input[type = checkbox]').prop('checked',false)

 }
});
</script>

@endsection
