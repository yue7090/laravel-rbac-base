<?php

namespace Modules\Backend\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Modules\Backend\Entities\User;
use Hash;
use Toastr;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $user = User::with('role')->paginate(10);
        return view('backend::user.index', ['user' => $user]);
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        $roles = DB::select('SELECT `id`,`name` FROM `roles`');
        return view('backend::user.create', ['roles' => $roles]);
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {

        $user = new User;
        $user->name = $request->name;
        $user->truename = $request->truename;
        $user->email = $request->email;
        
        $repassword = $request->repassword;
        if($request->password != $repassword)
        {
            Toastr::error('确认密码错误');
            return redirect('backend/user');
        }
        $user->password = $request->password;
        $user->is_super = 0;
        $user->password = Hash::make($request->password);
        if($user->save())
        {
            if ($request->role) {
                $user->role()->sync($request->role);
            }
            Toastr::success('添加成功');
            return redirect('/backend/user');
        }else{
            Toastr::error('添加失败');
            return redirect('/backend/user');
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
        $user = User::with('role')->find($id);
        $roles = DB::select('SELECT `id`,`name` FROM `roles`');

        return view('backend::user.edit', compact(
            'user',
            'roles',
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
        $user = User::find($id);
        $user->name = $request->name;
        $user->truename = $request->truename;
        $user->email = $request->email;
        if(!empty($request->password) && !empty($request->repassword)){
            if($request->password != $request->repassword)
            {
                Toastr::error('二次密码不一致');
                return Redirect::back();
            }
            $user->password = Hash::make($request->password);
        }
        
        date_default_timezone_set('Asia/Shanghai');
        $user->updated_at = date("Y-m-d H:i:s");

        if($user->save())
        {
            $user->role()->sync($request->role);
            Toastr::success('更新成功');
            return redirect('/backend/user');
        }else{
            Toastr::error('更新失败');
            return redirect('/backend/user');
        }
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy($id)
    {
        $data = array();
        $user = User::find($id);
        if($user->is_super){
            $data['status'] = 1;
            echo json_encode($data);
            die;
        }
        $result = User::destroy($id);
        // Toastr::success('已删除');
        
        $data['status'] = $result ? 0:1;
        echo json_encode($data);
        die;
    }
}
