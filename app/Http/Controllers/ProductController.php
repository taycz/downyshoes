<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\ProductModel;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $product=DB::table('product')->get();
        $product=ProductModel::paginate(5);
     
        return view('admin-page.layout.content.addProduct.showListLayout',['product'=>$product]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin-page.layout.content.addProduct.layout');
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
        $name = $request->name;
        $price = $request->price;
        $type = $request->type;
        $size = $request->size;
        $color = $request->color;
        $description = $request->description;
        $status = $request->status;
       // path image 
        $pathArr=$this->imageHandle($request);
        //   add product->>
        $product = new ProductModel();
        $product->name = $name;
        $product->price = $price;
        $product->type = $type;
        $product->size = $this->arrHandleToString($size);
        $product->color = $this->arrHandleToString($color);
        $product->description = $description;
        $product->upload =$this->arrHandleToString($pathArr);
        $product->status = $status;
        $product->save();

       return redirect('admin/productList');
    }
    // handle request arr Product
    public function arrHandleToString($arr){
        $result =implode(",", $arr);
       return $result;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateStatus(Request $request, $id)
    {
        //
        $product=ProductModel::find($id);
       
        $product->status=$request->status;
       
        $product->save();
      
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
       
        $product=ProductModel::find($id);
        // dd(explode(',',$product->color));
        return view('admin-page.layout.content.addProduct.layout',['product'=>$product]);
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
        // path image
        $pathArr=$this->imageHandle($request);
        // 
        $product=ProductModel::find($id);
        $product->name=$request->name;
        $product->price=$request->price;
        $product->type=$request->type;
        $product->size=$this->arrHandleToString($request->size);
        $product->color=$this->arrHandleToString($request->color);
        $product->description=$request->description;
        $product->upload=$this->arrHandleToString($pathArr);
        $product->status=$request->status;
        $product->save();
      
        return redirect('admin/productList');
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
        $product=ProductModel::find($id);
        $product->delete();
        return redirect('admin/productList');
    }
    // search handle 
    public function search(Request $request){
        $data=$request->search;
       $search=ProductModel::where('name',$data)
       ->orWhere('name', 'like', '%' . $data . '%')->get();
       return $search;   
    }
    public function imageHandle(Request $request){
             // save file img
       
    if($request->hasFile('upload')){
        
        $imageUpload= $request->file('upload');
        // dd($imageUpload);
        $pathArr=array();

        // dd($image);
        foreach($imageUpload as $image){
            $imageName =  $image->getClientOriginalName();
            $path =$image->move('images/product',$imageName);
            array_push($pathArr, $path);
          
        }
        }
        else{
           dd('chua co file');
        }
        return $pathArr;
    }
}