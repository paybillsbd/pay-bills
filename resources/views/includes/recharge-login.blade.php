 <div class="row">
    <div class="col-md-12">
      <!-- Nav tabs -->
        <ul class="nav nav-pills nav-justified" role="tablist" id="myTabs">
          <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#login" role="tab">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#signin" role="tab">Sign Up</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#reset-password" role="tab">Reset Password</a>
          </li>
        </ul>

        <br>
        <!-- Tab panes -->
        <div class="tab-content">
          <!-- login tab -->
          <div class="tab-pane active" id="login" role="tabpanel">
            <form>
              <div class="form-group">
              <input type="email" class="form-control" id="formGroupExampleInput2" placeholder="Enter Your Email">
            </div>
            <div class="form-group">
              <input type="password" class="form-control" id="formGroupExampleInput2" placeholder="Enter Password">
            </div>
            <div class="form-group text-left">
              <label class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-description">Remember Me</span>
              </label>
            </div>
            <div class="form-group">
              <button id="loginButton" class="btn btn-primary btn-block">Login</button>
            </div>
            <div class="row">
            
              <div class="col-md-6">
                <button class="btn btn-info btn-block"><i class="fa fa-facebook" aria-hidden="true"></i> Facebook</button>
              </div>
              <div class="col-md-6">
                  <button class="btn btn-danger btn-block"><i class="fa fa-google-plus" aria-hidden="true"></i> Google</button>
              </div>
            </div>  
            </form>
            
          </div>
          <!-- end login tab -->


          <!-- sign up tab -->
          <div class="tab-pane" id="signin" role="tabpanel">
            <form>
            <div class="form-group">
              <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Enter Your Name">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Enter Your Email">
            </div>
            <div class="form-group">
              <input type="password" class="form-control" id="formGroupExampleInput2" placeholder="Enter Password">
            </div>
            <div class="form-group">
              <input type="password" class="form-control" id="formGroupExampleInput2" placeholder="Confirm Password">
            </div>
            <div class="form-group">
              <input type="text"
                pattern="^(?:\+?88)?01[15-9]\d{8}$" class="form-control" id="formGroupExampleInput2" placeholder="Enter a Valid Mobile Number">
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary btn-block">Register</button>
            </div>
            <a href="">Forget Password?</a> <br>
            <span>Have an account? <a id="signInTab" href="#login">signIn</a></span>
            <form>
          </div>

          <!-- end sign up tab -->

          <!-- password reset tab -->
          <div class="tab-pane" id="reset-password" role="tabpanel">
          <form>
            <div class="form-group">
              <input type="email" class="form-control" id="formGroupExampleInput2" placeholder="Enter Your Email">
            </div>
            
            <div class="form-group">
              <button type="button" class="btn btn-primary btn-block">Submit</button>
            </div>

            <span>Have an Account?<a id="signUpTab" href="#signin">SignIn</a></span>
            </form> 
          </div>
          <!-- end password reset tab -->
        </div>
        <!-- end nav tabs -->
    </div>
</div>