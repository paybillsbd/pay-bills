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
            @include('includes.payment-ui.login-tab')
            
          </div>
          <!-- end login tab -->


          <!-- sign up tab -->
          <div class="tab-pane" id="signin" role="tabpanel">
            @include('includes.payment-ui.signin-tab')
          </div>

          <!-- end sign up tab -->

          <!-- password reset tab -->
          <div class="tab-pane" id="reset-password" role="tabpanel">
            @include('includes.payment-ui.password-reset-tab')
          </div>
          <!-- end password reset tab -->
        </div>
        <!-- end nav tabs -->
    </div>
</div>