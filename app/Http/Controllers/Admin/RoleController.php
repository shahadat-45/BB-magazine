<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
    public function allPermission(){
        $permissions = Permission::all();
        return view('backend.permission.index',compact('permissions'));
}
    public function addPermission(){
        return view('backend.permission.create');
    }

    public function storePermission(Request $request){
        Permission::create([
            'name'=> $request->name,
            'group_name'=> $request->group_name,
        ]);
        $notification = array(
            'message' => 'Permission Added  Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('all.permission')->with($notification);
    }
    public function editPermission($id){
        $permission = Permission::find($id);
        return view('backend.permission.edit',compact('permission'));
    }

    public function updatePermission(Request $request){

        $permission_id = $request->id;
        Permission::find($permission_id)->update([
            'name'=> $request->name,
            'group_name'=> $request->group_name,
        ]);
        $notification = array(
            'message' => 'Permission Updated  Successfully',
            'alert-type' => 'info'
        );
        return redirect()->route('all.permission')->with($notification);

    }

    public function deletePermission($id){
        Permission::find($id)->delete();
        $notification = array(
            'message' => 'Permission Deleted  Successfully',
            'alert-type' => 'warning'
        );
        return redirect()->route('all.permission')->with($notification);
    }

    // public function importPermission(){
    //     return view('backend.permission.import_permission');
    // }

    // public function exportPermission()
    // {
    //     $dateTime = now()->setTimezone('Asia/Dhaka')->format('Y-m-d_h-i-s_A'); // 12-hour format with AM/PM
    //     return Excel::download(new PermissionExport, "role_permission_$dateTime.xlsx");
    // }

    // public function storeImportPermission(Request $request){

    //     Excel::import(new PermissionImport, $request->file('input_file'));
    //     $notification = array(
    //         'message' => 'Permission Import  Successfully',
    //         'alert-type' => 'success'
    //     );
    //     return redirect()->route('all.permission')->with($notification);
    // }
    //role all method
    public function allRoles(){
        $roles = Role::all();
        return view('backend.role.all_roles',compact('roles'));
    }

    public function addRole(){
        return view('backend.role.create');
    }

    public function storeRole(Request $request){
        Role::create([
            'name'=> $request->name,
        ]);
        $notification = array(
            'message' => 'Role Added  Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('all.role')->with($notification);
    }
    public function editRole($id){
        $role = Role::find($id);
        return view('backend.role.edit',compact('role'));
    }

    public function updateRole(Request $request){

        $role_id = $request->id;
        Role::find($role_id)->update([
            'name'=> $request->name,
        ]);
        $notification = array(
            'message' => 'Role Updated  Successfully',
            'alert-type' => 'info'
        );
        return redirect()->route('all.role')->with($notification);

    }

    public function deleteRole($id){
        Role::find($id)->delete();
        $notification = array(
            'message' => 'Role Deleted  Successfully',
            'alert-type' => 'warning'
        );
        return redirect()->route('all.role')->with($notification);
    }
// // permission setup on role all method

    public function addRoleHavePermission(){
        $roles = Role::all();
        // $permissions = Permission::all();
        $permission_groups = User::getpermissionGroups();
        return view('backend.rolehavepermission.create',compact('roles','permission_groups'/* ,'permissions' */));
    }

    public function storeRolePermission(Request $request){
        $data = array();
        $permissions = $request->permission;
        foreach($permissions as $key =>$item){
            $data['role_id'] = $request->role_id;
            $data['permission_id'] = $item;
            DB::table('role_has_permissions')->insert($data);
        }//end foreach
        $notification = array(
            'message' => 'Role Have Permission Setup  Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('assign.permission.of.role')->with($notification);
    }

    public function assignPermissionOfRole(){
        $roles = Role::all();
        return view('backend.rolehavepermission.all_assigned_permission',compact('roles'));
    }

    public function editAssignedPermission($id){
        $role = Role::find($id);
        $permissions = Permission::all();
        $permission_groups = User::getpermissionGroups();
        return view('backend.rolehavepermission.edit_assigned_permission',compact('role','permission_groups','permissions'));
    }

    public function updateAssignedPermission(Request $request ,$id){
        $role = Role::find($id);
        $permissions = $request->permission;
        if(!empty($permissions)){
            $role->syncPermissions($permissions);
        }
        $notification = array(
            'message' => 'Permission Assign of Role Edit Successfully',
            'alert-type' => 'info'
        );
        return redirect()->route('assign.permission.of.role')->with($notification);
    }

    public function deleteAssignedPermission($id){
        $role = Role::find($id);
        if(!is_null($role)){
            $role->delete();
        }
        $notification = array(
            'message' => 'Permission Assign of Role Deleted Successfully',
            'alert-type' => 'warning'
        );
        return redirect()->back()->with($notification);
    }
}
