<?php

namespace Modules\Backend\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Toastr;
use Auth;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        return view('backend::login.login');
    }

    /**
     * 执行登陆
     */
    public function doLogin(Request $request)
    {
        if (Auth::attempt(array('email'=>$request->email, 'password'=>$request->password))) {
            Toastr::success('欢迎登陆');
            return redirect('/backend');
        } else {
            Toastr::error('登陆失败');
            return redirect('/backend/login');
        }
    }

    /**
     * 退出登陆
     */
    public function loginOut()
    {
        Auth::logout();
        Toastr::success('已退出登陆');
        return  redirect('/backend/login');
    }
}
