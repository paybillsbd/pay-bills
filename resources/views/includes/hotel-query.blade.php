<div class="col">
	<div class="card text-center">
	  <div class="card-header">
	    <h5>Hotel Booking</h5>
	  </div>
	  <div class="card-block">
		
			

		<form>
		  <div class="row text-left">
		      <div class="col-6">
		      	<div class="form-group">
		      		<input type="text" placeholder="Enter destination or hotel name" name="hotel-search" id="search-options" class="form-control">		      	
		      	</div>
		      </div>
		      <div class="col">                                    
		      	<div class="form-group">
		      		<input placeholder="mm/dd/yyyy" class="form-control" type="text" id="startDate" name="">
		
		      	</div>
		      </div>
		      <div class="col">                                    
		      	<div class="form-group">
		      		<input placeholder="mm/dd/yyyy" class="form-control" type="text" id="endDate" name="">
		
		      	</div>
		      </div>
		  </div>

		  <div class="row text-left">
		  	<div class="col">                                    
		      	<div class="form-group">
		      		<select class="custom-select form-control">
					  <option selected>Room</option>
					  <option value="1">One</option>
					  <option value="2">Two</option>
					  <option value="3">Three</option>
					</select>
		
		      	</div>
		      </div>
		      <div class="col">                                    
		      	<div class="form-group">
		      		<select class="custom-select form-control">
					  <option selected>Adults</option>
					  <option value="1">One</option>
					  <option value="2">Two</option>
					  <option value="3">Three</option>
					</select>
		
		      	</div>
		      </div>
		      <div class="col">                                    
		      	<div class="form-group">
		      		<select class="custom-select form-control">
					  <option selected>Children</option>
					  <option value="1">One</option>
					  <option value="2">Two</option>
					  <option value="3">Three</option>
					</select>
		
		      	</div>
		      </div>
		      <div class="col">                                    
		      	<div class="form-group">
		      		<button class="btn btn-primary btn-block">Find Hotel</button>
		
		      	</div>
		      </div>
		  </div>
		</form> 
	  </div>
	  <div class="card-footer text-muted">
	    {{ config('app.name', 'Laravel') }}
	  </div>
	</div>
</div>