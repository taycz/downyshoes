<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\UsersModel;
class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users=DB::table('users')->get();
     
        return view('admin-page.layout.content.users.layout',['users'=>$users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        
        $role=UsersModel::findOrFail($id);
        
        return view('admin-page.layout.content.users.role.layout',['role'=>$role]);  
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $getRole=$request->role;
        $users=UsersModel::findOrFail($id);
         $users->username=$request->username;
        
    //   save data Mamager
        if(!empty($getRole) && $users->role == "Manager"){
            $users->role=$getRole;
           
            $users->save();
        }
      
//    demote data handle
       elseif(!empty($getRole) && $getRole == "Manager"){
           $currentManager=UsersModel::where("role",$getRole)->first();
           $currentManager->role = "Admin";
           $currentManager->save();
       }
      
       $users->role=$getRole;
        $users->save();
      
      
        return redirect('admin/users');
       
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $users=UsersModel::findOrFail($id);
        $users->delete();
        return redirect('admin/users');
    }
    // search Handel
    public function searchView(Request  $request){
        $data=$request->search;
        $users=UsersModel::where('username',$data)
        ->orWhere('username','like','%'.$data.'%')->get();
      
        echo $users;
        
    }
    // role hadle by ajax
    public function roleHandle(Request $request,$id){
       $role=$request->role;
       if(!empty($role) && $role == 'Manager'){
           $user=UsersModel::where('role', $role)->first();
           
           echo 123;
       

       }
        // return view('admin-page.layout.content.users.role.layout');
    }
}
