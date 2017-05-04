<div class="col-md-8 offset-md-2">
	<div class="card text-center">
	  <div class="card-header">
	    <h5>Travel Booking</h5>
	  </div>
	  <div class="card-block">
		<!-- Nav tabs -->
        <ul class="nav nav-pills nav-justified" role="tablist" id="myTabs">
          <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#air" role="tab">Flight</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#bus" role="tab">Bus</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#train" role="tab">Train</a>
          </li>
        </ul>

        <br>
        <!-- Tab panes -->
		
        <div class="tab-content">
          <!-- login tab -->
          <div class="tab-pane active" id="air" role="tabpanel">
            @include('includes.payment-ui.air-tab')           
          </div>
          <!-- end login tab -->


          <!-- sign up tab -->
          <div class="tab-pane" id="bus" role="tabpanel">
            @include('includes.payment-ui.bus-tab')
          </div>

          <!-- end sign up tab -->

          <!-- password reset tab -->
          <div class="tab-pane" id="train" role="tabpanel">
            @include('includes.payment-ui.train-tab')
          </div>
          <!-- end password reset tab -->
        </div>
        <!-- end nav tabs -->
	  </div>
	  <div class="card-footer text-muted">
	    {{ config('app.name', 'Laravel') }}
	  </div>
	</div>
</div>




 <div class="row">
    <div class="col-md-12">
      
    </div>
</div>