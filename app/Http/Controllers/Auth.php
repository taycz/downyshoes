<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AuthModel;
use Illuminate\Support\Facades\DB;

class Auth extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function signup()
    {
        //
        return view('admin-page.sign-up.layout',['auth' => '']);

    }
    public function signupHandle(Request $request){
      $username=$request->username;
      $email=$request->email;
      $password=md5($request->password);
      $role=$request->role;
     
     
        //   check email
        $checkEmail=DB::table('users')->where('email',$email)->get('email');
       
      if(empty($checkEmail)){
        dd('email da ton tai');
      }
      else{
        $auth=new AuthModel();
        $auth->username = $username ;
        $auth->email = $email ;
        $auth->password = $password ;
        $auth->role = $role ;
        $auth->save();
        return redirect('/login');

      }
          
          
   
    }
// login=>>>>>>>
   public function login(){
     return view('admin-page.login.layout');
   }
   public function loginHandle(Request $request){
     $email=$request->email;
     $password=md5($request->password);
     $checkEmail=DB::table('users')->where('email',$email)->first();
      !empty($checkEmail) ? $Email=$checkEmail->email : $Email='Emai khong ton tai' ;
    
     !empty($checkEmail) ? $Password=$checkEmail->password : $Password='Password khong ton tai' ;
    // check login
     if($email==$Email && $password==$Password){
       $request->session()->put('email', $email);
      //  session(['email' => $email]);
      return view('admin-page.layout.layout',['username'=>$checkEmail]);
     }
    else{
        dd($Email,$Password);
    }
   }
   public function logout(Request $request){
   
    $sessionEmail = session('email');
    // dd($sessionEmail);
    $request->session()->forget('email');
    // dd($sessionEmail);
    return redirect('login');
    
   }
}