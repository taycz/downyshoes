<?php

namespace App\Http\Middleware;

// use Illuminate\Support\Facades\DB;
use App\UsersModel;
use Closure;

class AuthAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {   
        $sessionEmail = session('email');
        !empty($sessionEmail) ? $sessionEmail :'null';
        $admin=UsersModel::where('email',$sessionEmail)->first();
         $role=$admin->role;
        //  dd($role);
        if($role == "Admin" || $role == "Manager" ){
         return $next($request);
        }
        else{
          
            return redirect('/pageComeBack');
       
        }
       
       
    }
}