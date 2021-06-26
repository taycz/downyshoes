<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1 class="m-0">Category Schedule Manager</h1>
          </div><!-- /.col -->

        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <td>
        <a href="indexHTML.html">
          <button type="button" class="btn btn-block bg-gradient-primary btn-lg">Add Category Schedule</button>
        </a>
      </td>
      <form>
        <div class="card-body">
          <div class="form-group">
            <label for="exampleInputEmail1">Hotline</label>
            <input type="text" class="form-control" id="hotlinecategory" placeholder="Enter Hotline">

          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Province</label>
            <input type="text" class="form-control" id="provincecategory" placeholder="Enter Province">

          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Status</label>
            <select class="custom-select rounded-0" id="">
              <option>Active</option>
              <option>Inactive</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Odering</label>
            <input type="text" class="form-control" id="odercategory" placeholder="0">

          </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
          <button id="subformcategory1" type="button" class="btn btn-primary">Submit</button>
          <button type="button" class="btn btn-danger swalDefaultError">
            Launch Error Toast
          </button>
        </div>
      </form>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->