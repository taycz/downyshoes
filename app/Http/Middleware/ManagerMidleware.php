<?php

namespace App\Http\Middleware;

use Closure;
use App\UsersModel;
class ManagerMidleware
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
        if($role == "Manager" ){
            return $next($request);
        }
        else{
          
           return redirect('/pageComeBack');
        }
       
    }
}
