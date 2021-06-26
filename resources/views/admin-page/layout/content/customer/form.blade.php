  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
   
    <!-- Main content -->
    <section class="content">
      <td>
      
          <button type="button" class="btn btn-block bg-gradient-primary btn-lg">Add Customer</button>
       
      </td>

        <form action="{{!empty($customer) ? url('admin/updateCustomer/'.$customer->id) : url('admin/customerHandle')}}" method="post">
        @csrf
                <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control" name="name" id="" placeholder="Name" value="{{!empty($customer) ? $customer->name:''}}">
                  </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Telephone Number</label>
                    <input type="text" class="form-control" name="phonenumber" id="" placeholder="Telephone Number" value="{{!empty($customer) ? $customer->phonenumber:''}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" name="email" id="" placeholder="Enter email" value="{{!empty($customer) ? $customer->email:''}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Address</label>
                    <input type="text" class="form-control" name="address" id="" placeholder="Password" value="{{!empty($customer) ? $customer->address:''}}">
                  </div>
                
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