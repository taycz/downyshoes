<?php

namespace App\Http\Middleware;

use App\UsersModel;
use Closure;

class PersonnelMidlewere
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
        $admin=UsersModel::where('email',$sessionEmail)->first();
        !empty($admin) ? $role=$admin->role :  redirect('login');
        $role=$admin->role;
      
        if(!empty($role)){
           
            return $next($request);
        }
      
    }
    
}
