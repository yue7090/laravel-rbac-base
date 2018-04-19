<?php

namespace Modules\Backend\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Modules\Backend\Entities\Role;
use Toastr;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $role = Role::paginate(10);
        return view('backend::role.index', compact(
            'role'
        ));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        $permission = DB::table('permissions')->get()->toJson();
        $data = [];
        $permissionArray = json_decode($permission, true);
        $permissionTree = getTree($permissionArray, 'id', 'parent');

        return view('backend::role.create', compact(
            'permissionTree'
        ));
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $role = new Role;
        $role->name = $request->name;
        $role->display_name = $request->display_name;
		if ($role->save()) {
			//自动更新角色权限关系
			if ($request->permission) {
                $role->permission()->sync($request->permission);
            }
            Toastr::success('添加成功');
            return redirect('backend/role');
		}else{
            Toastr::success('添加失败');
            return redirect('backend/role');
        }
    }

    /**
     * Show the specified resource.
     * @return Response
     */
    public function show()
    {
        return view('backend::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit($id)
    {
        $permission = DB::table('permissions')->get()->toJson();
        $data = [];
        $permissionArray = json_decode($permission, true);
        $permissionTree = getTree($permissionArray, 'id', 'parent');

        $role = Role::with('permission')->find($id)->toArray();

        return view('backend::role.edit', compact(
            'permissionTree',
            'role',
            'id'
        ));
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(Request $request, $id)
    {  
       date_default_timezone_set('Asia/Shanghai');
       $role = Role::find($id);
       $role->name = $request->name;
       $role->display_name = $request->display_name;
       $role->updated_at = date("Y-m-d H:i:s");
       if( $role->save() )
       {
            $role->permission()->sync($request->permission);
            Toastr::success('更新成功');
            return redirect('backend/role');
       }else{
            Toastr::success('添加失败');
            return redirect('backend/role');
       }
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy($id)
    {
        $result = Role::destroy($id);
        // Toastr::success('已删除');
        $data = array();
        $data['status'] = $result ? 0:1;
        echo json_encode($data);
        die;
    }
}
