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
        <span class="breadcrumb-item active">Edit Role Permission Setup</span>
    </nav>

    <div class="sl-pagebody">
        <div class="row row-sm">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">Edit Role Permission Setup</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('update.assigned.permission',$role->id) }}" method="POST">
                            @csrf
                            <div class="row">
                                <!-- Role Selection -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="role">Role Name</label>

                                        <h4>{{$role->name}}</h4>
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
                                    @php
                                    $permissions = App\Models\User::getPermissionByGroupName($group->group_name)
                                @endphp
                                    <div class="form-group">
                                        <label class="form-control-label" for="flexCheckDefault">{{$group->group_name}}</label>
                                        <input type="checkbox" id="flexCheckDefault"{{App\Models\User::roleHasPermissions($role,$permissions) ? 'checked' : ''}}>
                                    </div>
                                </div>
                                <div class="col-md-9">

                                    @foreach ($permissions as $item)
                                       <div class="form-group">
                                        <label class="form-control-label" for="checkDefault{{$item->id}}"> {{$item->name}}</label>
                                        <input type="checkbox" name= "permission[]" value="{{$item->name}}" id="checkDefault{{$item->id}}"{{$role->hasPermissionTo($item->name) ? 'checked' : ''}}>
                                    </div>
                                    @endforeach

                                </div>
                            </div>
                            {{-- end row --}}
                            @endforeach


                            <!-- Submit Button -->
                            <div class="form-layout-footer mt-3">
                                <button type="submit" class="btn btn-golden px-4">Update</button>
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
