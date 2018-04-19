<?php

namespace Modules\Backend\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Modules\Backend\Entities\Permission;
use Illuminate\Support\Facades\Input;
use Toastr;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $menu = DB::table('permissions')->get()->toJson();
        $data = [];
        $menuArray = json_decode($menu, true);
        $menuTree = getTree($menuArray, 'id', 'parent');
        $menuTreeList = mergeTree($menuArray, 'parent', 0, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;');
        return view('backend::permission.index', compact(
            'menuTreeList',
            'menuTree'
        ));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('backend::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $permission = new Permission();
        $permission->router = $request->name;
        $permission->display_name = $request->display_name;
        $permission->parent = $request->parent;
        if($permission->save())
        {
            Toastr::success('添加成功');
            return redirect('backend/permission/');
        }else{
            Toastr::success('添加失败');
            return redirect('backend/permission/');
        }
    }

    /**
     * Show the specified resource.
     * @return Response
     */
    public function show()
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit()
    {
        return view('backend::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $permission = Permission::find((int)$id);
        $permission->router = $request->value;
        $permission->display_name = $request->display_name;
        if($permission->save()){
            Toastr::success('修改成功');
            return redirect('backend/permission/');
        }else{
            Toastr::success('修改失败');
            return redirect('backend/permission/');
        }
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy(Request $request, $id)
    {
        $result = DB::table('permissions')->where('id', '=', $id)->delete();
        $data = array();
        $data['status'] = $result ? 0:1;
        echo json_encode($data);
        die;
    }

    /**
     * 排序
     */
    public function order()
    {
        $jsonData = Input::get('jsonData');
        $parent = 0;

        for ($i=0; $i < count($jsonData); $i++) {
            $this->apply_order($jsonData[$i], $i+1, $parent);
        }
    }

    /**
     * 处理排序
     */
    public function apply_order($item, $num, $parent)
    {
        $permission = Permission::find($item['id']);
        $permission->parent = $parent;
        $permission->save();
        if(isset($item['children']))
        {
            for ($i=0; $i < count($item['children']); $i++) {
                $this->apply_order($item['children'][$i], $i+1, $item['id']);
            }
        }
    }
}
