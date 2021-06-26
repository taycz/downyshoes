 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">

     <!-- Main content -->
     <section class="content">
         <td>

             <button type="button" class="btn btn-block bg-gradient-primary btn-lg">Add Product</button>

         </td>
         <form method="post"
             action="{{(!empty($product)) ? url('admin/updateProduct/'.$product->id) : url('admin/AddProductHandle')}}" enctype="multipart/form-data" >
             @csrf
             <div class="card-body">
                 <div class="form-group">
                     <label for="exampleInputEmail1">Product Name</label>
                     <input type="text" class="form-control" value="{{(!empty($product) ? $product->name : '')}}" id=""
                         placeholder="Product Name" name="name">
                 </div>
                 <div class="form-group">
                     <label for="exampleInputPassword1">Price</label>
                     <input type="text" class="form-control" value="{{(!empty($product) ? $product->price : '')}}" id=""
                         placeholder="Price" name="price">
                 </div>
                 <div class="form-group">
                     <label for="exampleInputPassword1">Type</label>
                     <input type="text" class="form-control" value="{{(!empty($product) ? $product->type : '')}}" id=""
                         placeholder="Type" name="type">
                 </div>
                 <div class="form-group">
                     <label for="exampleInputPassword1">Size</label>
                     <!-- <input type="text" class="form-control" value="{{(!empty($product) ? $product->size : '')}}" id="" placeholder="Size" name="size" multiple="tokenSeparators"> -->
                     <select class="form-control" id="size" name="size[]" multiple="multiple">
                      @if(!empty($product)){
            
                          @foreach(explode(",", $product->size) as $sizes){
                        <option selected="selected">{{$sizes}}</option>)}}</option>
                        }
                        @endforeach
                      }
                    
                      @endif
                     </select>
                 </div>
                 <div class="form-group">
                     <label for="exampleInputPassword1">Color</label>
                     <!-- <input type="text" class="form-control" value="{{(!empty($product) ? $product->color : '')}}" id=""
                         placeholder="Color" name="color"> -->
                         <select class="form-control"  name="color[]" multiple="multiple">
                      @if(!empty($product)){
                        @foreach(explode(",", $product->color) as $colors){
                          <option selected="selected">{{$colors}}</option>
                        }
                        @endforeach
                      }
                    
                      @endif
                     </select>
                 </div>
                 <div class="form-group">
                     <label>Description</label>
                     <textarea class="form-control" rows="3" value=""
                         placeholder="Enter ..." name="description">{{(!empty($product) ? $product->description : '')}}</textarea>
                 </div>


                 <div class="form-group">
                     <label for="exampleInputFile">Images</label>
                     <div class="input-group">
                         <div class="custom-file">
                             <input type="file" class="custom-file-input"
                                 value="{{(!empty($product) ? $product->upload : '')}}" id="" name='upload[]' multiple>
                             <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                         </div>
                         <div class="input-group-append">
                             <span class="input-group-text">Upload</span>
                         </div>
                     </div>
                 </div>
                 <!-- status -->
                 <input type="hidden" name="status" value="On">
                 <!-- //status -->
                 <div class="form-check">
                     <input type="checkbox" class="form-check-input" id="exampleCheck1">
                     <label class="form-check-label" for="exampleCheck1">Check me out</label>
                 </div>
             </div>
             
             
             <!-- /.card-body -->

             <div class="card-footer">
                 <button type="submit" class="btn btn-primary">Submit</button>
             </div>
         </form>
     </section>
     <!-- /.content -->
 </div>
 <!-- /.content-wrapper -->
 <!-- tag input -->
 <!-- Basic Style for Tags Input -->
 <script type="text/javascript">
$("select").select2({
    tags: true,
    tokenSeparators: [',', ' ']
})
 </script>