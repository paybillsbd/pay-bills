@extends('layouts.payment')

@section('content')
<div class="row">
	
	<div class="col-5">
		<div class="card card-outline-info">
		  <div class="card-header">
		    <h5>Amount</h5>
		  </div>
		  <div class="card-block">
			<h3>Customer Name: Tuhin</h3>
			<h5>Marchent: AArong</h5>
			<h5>Transaction ID: 201190</h5>
			<h5>Total: 230 BDT</h5> 
			<a href="#" class="card-link">
		  	 Cancel Order
		    </a>
		  </div>
		  
		  <div class="card-footer text-muted">
		    {{ config('app.name', 'Laravel') }}
		  </div>
		</div>	
	</div>
	



	<div class="col-7">
		<div class="card card-outline-info text-center">
		  <div class="card-header">
		    <h5>Select your checkout plan</h5>
		  </div>
		  <div class="card-block">
			
		  </div>
		  <div class="card-footer text-muted">
		    {{ config('app.name', 'Laravel') }}
		  </div>
		</div>
	</div>
	
</div>
<!-- /.row -->
@stop