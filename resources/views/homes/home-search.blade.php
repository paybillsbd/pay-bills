@extends('layouts.payment')

@section('content')
<div class="row">
	
	@include('includes.hotel-query')
	
</div>
<br/>
<div class="row">
	<div class="col-3">
		@include('homes.hotel-result-sidebar')
	</div>
	<div class="col-9">
		<div class="card card-outline-info">		  
		  <div class="card-block">

		    <div class="row">
				<div class="col-4">
					<img src="/images/web/wear.png" style="width:100%" class="img-fluid">
				</div>
				<div class="col-5">
					<h4 class="card-subtitle mb-2 text-muted">AusterEcho</h4>
					<i class="fa fa-heart-o" aria-hidden="true"></i>
					<i class="fa fa-heart-o" aria-hidden="true"></i>
					<i class="fa fa-heart-o" aria-hidden="true"></i>
					<i class="fa fa-heart-o" aria-hidden="true"></i>
					<i class="fa fa-heart-o" aria-hidden="true"></i>

				    <a href="#" class="card-link"> 15 Reviews</a>
				    <br/>

				    <p>Awesome and best<br>
				       A fun place to stay for family with kids

				    <br>A New Good Friendly Hotel</p>

				    
				    <a href="#" class="card-link"> Breakfast</a>

				    <a href="#" class="card-link"> Pool</a>

				    <a href="#" class="card-link"> parking</a>
				</div>
				<div class="col-3">
					<h4 class="card-subtitle mb-2 text-muted">Paybills</h4>
					<h1 class="card-title">300 BDT</h1>
					<button class="btn btn-primary btn-block btn-lg">View Deal</button>
				</div>
			</div>

		  </div>
		</div>
		<br>
		<div class="card card-outline-info">		  
		  <div class="card-block">

		    <div class="row">
				<div class="col-4">
					<img src="/images/web/slide01.jpg" style="width:100%" class="img-fluid">
				</div>
				<div class="col-5">
					<h4 class="card-subtitle mb-2 text-muted">AusterEcho</h4>
					<i class="fa fa-heart-o" aria-hidden="true"></i>
					<i class="fa fa-heart-o" aria-hidden="true"></i>
					<i class="fa fa-heart-o" aria-hidden="true"></i>
					<i class="fa fa-heart-o" aria-hidden="true"></i>
					<i class="fa fa-heart-o" aria-hidden="true"></i>

				    <a href="#" class="card-link"> 15 Reviews</a>
				    <br/>

				    <p>Awesome and best<br>
				       A fun place to stay for family with kids

				    <br>A New Good Friendly Hotel</p>

				    
				    <a href="#" class="card-link"> Breakfast</a>

				    <a href="#" class="card-link"> Pool</a>

				    <a href="#" class="card-link"> parking</a>
				</div>
				<div class="col-3">
					<h4 class="card-subtitle mb-2 text-muted">Paybills</h4>
					<h1 class="card-title">300 BDT</h1>
					<button class="btn btn-primary btn-block btn-lg">View Deal</button>
				</div>
			</div>

		  </div>
		</div>
	</div>
</div>
<!-- /.row -->
@stop