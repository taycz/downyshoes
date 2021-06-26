<div class="register-box">
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="#" class="h1"><b>Admin</b>Downy</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">{{!empty($role) ? '' : 'Register a new membership' }}</p>

      <form action="{{!empty($role) ? url('admin/roleUpdate/'.$role->id) : url('/signupHandle')}}" method="post">
      @csrf
        <div class="input-group mb-3" id="userName" >
          <input type="text" id="username" class="form-control" value="{{!empty($role) ? $role->username : ''}}" name="username" placeholder="Full name">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3" style="visibility:{{!empty($role) ? 'hidden' : 'visible'}}">
          <input type="email" class="form-control" value="{{!empty($role) ? $role->email : ''}}"   name="email" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
       <!-- role -->
       <div class="form-group" id="selectRole" data-select2-id="29" id="currentValue"
        style="display:{{!empty($role) ? 'block' : 'none'}}">
            
                  <select class="form-control select2 select2-hidden-accessible" param-id="{{!empty($role) ? $role->id : ''}}" name="role" id='roleHandle' 
                    {{!empty($role) && $role->role == "Manager" ? 'hidden' : ''}}
                  style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                  <option selected="selected" data-select2-id="3"  value="{{ !empty($role) ? $role->role : 'Personnel'}}">{{ !empty($role) ? $role->role : 'Personnel'}}</option>
                    <option data-select2-id="37"  value="{{!empty($role) ? 'Admin' : 'Personnel'}}" >Admin</option>
                    <option data-select2-id="38"  value="{{!empty($role) ? 'Manager' : 'Personnel'}}" >Manager</option>
                    <option data-select2-id="39"  value="{{!empty($role) ? 'Personnel' : 'Personnel'}}">Personnel</option>
                    
                  </select>
                </div>
      <!-- //role -->
        <div class="input-group mb-3" style="visibility:{{!empty($role) ? 'hidden' : 'visible'}}">
          <input type="password" class="form-control" value="{{!empty($role) ? md5($role->password) : ''}}"  name="password" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <!-- <div class="input-group mb-3">
          <input type="password" class="form-control" name="RePassword" placeholder="Retype password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div> -->
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="agreeTerms" name="terms" value="agree">
              <label for="agreeTerms">
               I agree to the <a href="#">terms</a>
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block" id="submit">{{!empty($role) ? 'Update' : 'Register' }} </button>
          </div>
          <!-- /.col -->
        </div>
      </form>

     
      <a href="login" class="text-center" style="display:{{!empty($role) ? 'none' : 'block'}}">I already have a membership</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
