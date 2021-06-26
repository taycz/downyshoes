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
                         <th colspan="6">
                             <a href="/signup">
                                 <button type="button" class="btn btn-block btn-success col-md-1">Add New</button>
                             </a>
                         </th>
                     </tr>
                     <tr>
                         <th>id</th>
                         <th>User Name</th>
                         <th>Email</th>
                         <th>Role</th>
                         <th>Created At</th>
                         <th>Action</th>

                     </tr>
                 </thead>
                 <tbody  class="showListUsers">
                     @foreach ($users as $user)
                     <tr>
                         <td>{{$user->id}}</td>
                         <td>{{$user->username}}</td>
                         <td>{{$user->email}}</td>
                         <td>
                         <button type="button" class="btn btn-block {{!empty($user && $user->role =='Manager') ? 'btn-danger btn-xs' : 'bg-gradient-success btn-xs' }} " >
                             {{$user->role}}
                            </button>
                         </td>
                         <td>
                             {{$user->created_at}}
                         </td>
                         <td>
                            <a href="{{url('admin/roleAdmin/'.$user->id)}}">
                            <button type="button" class="btn btn-info btn-flat"
                           
                            >
                                 <i class="far fa-edit"></i>
                             </button>
                            </a>
                            <a href="
                             {{!empty($user && $user->role =='Manager') ? '#' : url('admin/roleAdminDestroy/'.$user->id)}}" >
                            <button type="button" class="btn btn-info btn-flat btn-danger"
                            {{!empty($user && $user->role =='Manager') ? 'disabled' : ''}}
                            >
                                 <i class="fas fa-trash-alt"></i>
                             </button>
                            </a>

                         </td>

                     </tr>
                     @endforeach


                 </tbody>
             </table>
         </div>
     </section>
     <!-- /.content -->
 </div>
 <!-- /.content-wrapper -->
 
 