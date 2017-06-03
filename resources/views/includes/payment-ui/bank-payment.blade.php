@extends('layouts.payment')

@section('content')
<div class="row">
	
	<div class="col-md-4">
		<div class="card card-outline-info">
		  <div class="card-header">
		    <h5><i class="fa fa-dollar" aria-hidden="true"></i> Amount</h5>
		  </div>
		  <div class="card-block info-content" >
			<h3>Customer Name <span class="text-right">Tuhin</span></h3>
			<h5>Marchent <span class="text-right">AArong</span></h5>
			<h5>Transaction ID<span class="text-right"> 201190</span></h5>
			<h5>Total <span class="text-right bdt">230 BDT</span></h5> 
			<a href="#" class="card-link">
		  	 Cancel Order
		    </a>
		  </div>
		  
		  <div class="card-footer text-muted">
		    {{ config('app.name', 'Laravel') }}
		  </div>
		</div>
		<br/>	
	</div>
	



	<div class="col-md-8">
		<div class="card card-outline-info">
		  <div class="card-header">
		    <h5>Select your checkout plan</h5>
		  </div>
		  <div class="card-block">
			<h4>Debit/Credit Cards</h4><hr/>
			<a class="" href="#"><img src="/images/qcash.png" class="img-fluid pay-logo bank"/></a>
			<a href="#"><img src="/images/master-card.png" class="img-fluid pay-logo bank"/></a>
			<a href="#"><img src="/images/visa.png" class="img-fluid pay-logo bank"/></a>
			<a href="#"><img src="/images/dbbl.png" class="img-fluid pay-logo bank"/></a>
			<a href="#"><img src="/images/american.png" class="img-fluid pay-logo bank"/></a>
			<a href="#"><img src="/images/fastcash.png" class="img-fluid pay-logo bank"/></a>
			
			<h4>Mobile Banking</h4><hr/>
			<a href="#"><img src="/images/bkash.jpg" class="img-fluid pay-logo bank"/></a>
			<a href="#"><img src="/images/rocket.jpg" class="img-fluid pay-logo bank"/></a>
			<a href="#"><img src="/images/ific.jpg" class="img-fluid pay-logo bank"/></a>
			<a href="#"><img src="/images/islami.jpg" class="img-fluid pay-logo bank"/></a>

			<a href="#"><img src="/images/mycash.jpg" class="img-fluid pay-logo bank"/></a>

			<a href="#"><img src="/images/abdirect.jpg" class="img-fluid pay-logo bank"/></a>
			
			<h4>Internet Banking</h4><hr/>
			<a href="#"><img src="/images/city.png" class="img-fluid pay-logo bank"/></a>
			<a href="#"><img src="/images/islamibank.png" class="img-fluid pay-logo bank"/></a>
			<a href="#"><img src="/images/mtb.jpg" class="img-fluid pay-logo bank"/></a>
			<a href="#"><img src="/images/bankasia.jpg" class="img-fluid pay-logo bank"/></a>
			
		  </div>
		  <div class="card-footer text-muted">
		    {{ config('app.name', 'Laravel') }}
		  </div>
		</div>
	</div>
	
</div>
<!-- /.row -->
@stop