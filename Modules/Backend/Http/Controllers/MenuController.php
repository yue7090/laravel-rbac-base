<?php

namespace Modules\Backend\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Modules\Backend\Entities\Menu;
use Illuminate\Support\Facades\Input;
use Toastr;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $menu = DB::table('menus')->get()->toJson();
        $data = [];
        $menuArray = json_decode($menu, true);
        $menuTree = getTree($menuArray, 'id', 'parent');
        $menuTreeList = mergeTree($menuArray, 'parent', 0, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;');

        return view('backend::menu.index', compact(
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
        $menu = new Menu();
        $menu->name = $request->name;
        $menu->router = $request->router;
        $menu->icon = $request->icon;
        $menu->parent = $request->parent;
        if($menu->save())
        {
            Toastr::success('添加成功');
            return redirect('backend/menu/');
        }else{
            Toastr::success('添加失败');
            return redirect('backend/menu/');
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
        $menu = Menu::find((int)$id);
        $menu->router = $request->router;
        $menu->name = $request->name;
        $menu->icon = $request->icon;
        if($menu->save()){
            Toastr::success('修改成功');
            return redirect('backend/menu/');
        }else{
            Toastr::success('修改失败');
            return redirect('backend/menu/');
        }
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy($id)
    {
        $result = DB::table('menus')->where('id', '=', $id)->delete();
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
        $menu = Menu::find($item['id']);
        $menu->parent = $parent;
        $menu->save();
        if(isset($item['children']))
        {
            for ($i=0; $i < count($item['children']); $i++) {
                $this->apply_order($item['children'][$i], $i+1, $item['id']);
            }
        }
    }
}
