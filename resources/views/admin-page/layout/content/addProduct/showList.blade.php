 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <div class="content-header">
         <div class="container-fluid">
             <div class="row mb-2">
                 <div class="col-sm-12">
                     <h1 class="m-0">Schedule Info Manager</h1>
                 </div><!-- /.col -->

             </div><!-- /.row -->
         </div><!-- /.container-fluid -->
     </div>
     <!-- /.content-header -->

     <!-- Main content -->
     <section class="content">
         <div class="card-body">
             <table class="table table-bordered">
                 <thead>
                     <tr>
                         <th colspan="10">
                             <a href="/admin/product">
                                 <button type="button" class="btn btn-block btn-success col-md-1">Add New</button>
                             </a>
                         </th>
                     </tr>
                     <tr>
                         <th>id</th>
                         <th>Product Name</th>
                         <th>Price</th>
                         <th>Type</th>
                         <th>Size</th>
                         <th>Color</th>
                         
                         <th>images</th>
                         <th>Status</th>
                         <th>Action</th>

                     </tr>
                 </thead>
                 <tbody id="showListProduct">
                     @foreach($product as $products)

                     <tr>
                         <td>{{$products->id}}</td>
                         <td>{{$products->name}}</td>
                         <td>{{$products->price}}</td>
                         <td>{{$products->type}}</td>
                         <td>
                             {{$products->size}}
                         </td>
                         <td>
                             {{$products->color}}
                         </td>

                         <td>
                             <img style="object-fit: cover;width:150px;height:auto;" class="img-thumbnail"
                                 src="/{{explode(',',$products->upload)[0]}}" alt="">

                         </td>
                         <td>
                             <div class="form-group" data-select2-id="29">
                                 <form>
                                     @csrf
                                     <select class="form-control select2 " name="status" style="width: 100%;"
                                         data-select2-id="9" tabindex="-1" aria-hidden="true"
                                         param-id="{{$products->id}}">
                                         <option selected="selected" class="status" data-select2-id="11">
                                             {{$products->status}}</option>
                                         <option data-select2-id="37" class="status">
                                             @if(!empty($products) && $products->status=="On")
                                             Off
                                             @else
                                             On
                                             @endif
                                         </option>


                                     </select>
                                 </form>
                             </div>
                         </td>
                         <td>
                             <a href="{{url('admin/editProduct/'.$products->id)}}">
                                 <button type="button" class="btn btn-info btn-flat">
                                     <i class="far fa-edit"></i>
                                 </button>
                                 <a href="{{url('admin/deleteProduct/'.$products->id)}}">

                                     <button type="button" class="btn btn-info btn-flat btn-danger">
                                         <i class="fas fa-trash-alt"></i>
                                     </button>
                                 </a>

                         </td>
                     </tr>
                     @endforeach
                 </tbody>
             </table>

         </div>
         <!-- pageination -->
         <div class="col-sm-12 col-md-7">
             <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
                 <ul class="pagination">
                     {{ $product->links() }}
                 </ul>
             </div>
         </div>
     </section>
     <!-- /.content -->
 </div>
 <!-- /.content-wrapper -->
 <!-- ajax handle status -->
 <script>
$(document).ready(function() {

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('select').on('change', function() {
        var value = $(this).val();
        var id = $(this).attr('param-id');

        $.ajax({
            url: '{{ url('/admin/updateStatus/') }}' + "/" + id,
            method: 'POST',
            data: {
                'status': value
            },
            success: function(data) {
                console.log(data);
            },
            error: function(data) {
                console.log('err')
            }
        });
    });
});
 </script>