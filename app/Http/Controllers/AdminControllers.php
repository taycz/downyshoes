<?php

namespace App\Http\Controllers;
use App\CustomerModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminControllers extends Controller
{
    //customerHandle=>>>>>>>>>
    // public function customerView(){
    //     return view('admin-page.layout.content.customer.layout');
    // }
    public function customer(Request $request){
        // dd(!empty($request->id));
        if(!empty($request->id)){
            // dd(123123);
            $id=$request->id;
            $customer=DB::table('customer')->where('id',$id)->first();
           return view('admin-page.layout.content.customer.layout',['customer'=>$customer]);
        }
        else{
          
            return view('admin-page.layout.content.customer.layout');
        }
    }
    public function updateCustomer(Request $request){
        $id=$request->id;
        $updateCustomer=CustomerModel::where('id',$id)->first();
        $updateCustomer->name=$request->name;
        $updateCustomer->phonenumber=$request->phonenumber;
        $updateCustomer->email=$request->email;
        $updateCustomer->address=$request->address;
        $updateCustomer->save();
       return redirect('admin/customerList');
    }
    public function customerHandle(Request $request){
        $name=$request->name;
        $phonenumber=$request->phonenumber;
        $email=$request->email;
        $address=$request->address;
        $customer= new CustomerModel();
        // add customer
        $customer->name=$name;
        $customer->phonenumber=$phonenumber;
        $customer->email=$email;
        $customer->address=$address;
        $customer->save();    
        return redirect('admin/customerList');

    }
     // paination --->>>
    public function customerList(Request $request){
       
            // $current_page=$request->page; 
            // $limit=5;
            // $total_records=count(CustomerModel::all());
            // $page=ceil($total_records/$limit);
            // $offset=($current_page-1)*$limit;
           
            // $customer=DB::table('customer')
            //         ->offset($offset)
            //         ->limit($limit)
            //         ->get();
            // $customer=DB::table('customer')->paginate();
        
            $customer=CustomerModel::paginate(5);
            // dd($customer);
          
            return view('admin-page.layout.content.customer.listLayout',['customer'=>$customer]);
      
          
    }
    
    // delete customer
    public function deleteCustomer(Request $request){
        $id=$request->id;
       $deleteCustomer=CustomerModel::where('id',$id)->first();
       $deleteCustomer->delete();
       return redirect('admin/customerList');
    }
   
   
    // search handle
    public function search(Request $request){
        $data=$request->data;
        $result=CustomerModel::where('id',$data)
        ->orWhere('name', 'like', '%' . $data . '%')->get();
        return $result;
    }
  
    
    
}
