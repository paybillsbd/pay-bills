@extends('layouts.payment')

@section('content')
<div class="row">
	
	@include('includes.hotel-query')
	
</div>
<br/>
<div class="row">
	<div class="col-md-3">
		@include('homes.hotel-result-sidebar')
	</div>
	<div class="col-md-9">
		@include('homes.query-result-card')
		<br>
		@include('homes.query-result-card')
	</div>
</div>
<!-- /.row -->
@stop