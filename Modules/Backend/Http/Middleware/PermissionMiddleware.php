<?php

namespace Modules\Backend\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Modules\Backend\Entities\User;
use Modules\Backend\Entities\Role;
use Route,URL,Auth;
use Toastr;

class PermissionMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

    public function handle(Request $request, Closure $next)
    {
        if(!Auth::guard()->user())
        {
            Toastr::error('请登陆');
            return redirect('/backend/login');
        }

        if(Route::currentRouteName() == NULL)
        {
            return $next($request);
        }
        if(Auth::guard()->user()->is_super){
            return $next($request);
        }
        //权限操作
        
        if(!self::checkPermission())
        {
            if($request->ajax() && ($request->getMethod() != 'GET')) {
                return response()->json([
                    'status' => 1,
                    'code' => 403,
                    'msg' => '您没有权限执行此操作'
                ]);
            }

            Toastr::error('没有权限操作');
            $previousUrl = URL::previous();
            return redirect($previousUrl);
        }
        return $next($request);
    }

    private static function checkPermission()
    {
        $currentRoute = Route::currentRouteName();
        
        return in_array($currentRoute, self::permissionList());
    }

    private static function permissionList()
    {
        $permissionList = [];
        $userName = Auth::guard()->user()->name;

        $users = User::find(1)->with('role')->where('name', '=' ,$userName)->get()->toArray();

        $permissions = [];
        foreach( $users[0]['role'] as $role )
        {
            $role = Role::with('permission')->where('name', '=', $role['name'])->get()->toArray();
            foreach($role as $r)
            {
                foreach($r['permission'] as $p)
                {
                    array_push($permissions, $p['router']);
                }
            }
        }
        return $permissionList = array_unique($permissions);
    }
}
