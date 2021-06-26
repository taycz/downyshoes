 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <div class="content-header">
         <div class="container-fluid">
             <div class="row mb-2">
                 <div class="col-sm-12">
                     <h1 class="m-0">Customer Manager</h1>
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
                         <th colspan="8">
                             <a href="/admin/customer">
                                 <button type="button" class="btn btn-block btn-success col-md-1">Add New</button>
                             </a>
                         </th>
                     </tr>
                     <tr>


                         <th>id</th>
                         <th>Customer Name</th>
                         <th>Phone Number</th>
                         <th>Email</th>
                         <th>Address</th>
                         <th>Created At</th>
                         <th>Action</th>

                     </tr>
                 </thead>
                 <tbody id="showListCustomer">
                     @foreach ($customer as $customers)
                     <tr>
                         <td>{{$customers->id}}</td>

                         <td>{{$customers->name}}</td>
                         <td>{{$customers->phonenumber}}</td>
                         <td>{{$customers->email}}</td>
                         <td>{{$customers->address}}</td>

                         <td>{{$customers->created_at}}</td>
                         </td>
                         <td>
                             <a href="{{url('admin/customer/'.$customers->id)}}"><button type="button"
                                     class="btn btn-info btn-flat">
                                     <i class="far fa-edit"></i>
                                 </button></a>
                             <a href="{{url('admin/delete/'.$customers->id)}}">
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
         <div class="col-sm-12 col-md-7">
             <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
                 <ul class="pagination">
                 {{$customer->links()}}
                 </ul>
             </div>
         </div>

     </section>
     <!-- /.content -->
 </div>
 <!-- /.content-wrapper -->
 