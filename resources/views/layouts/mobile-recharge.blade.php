@extends('layouts.payment')

@section('content')
<div class="row">
    <!-- search context -->
    <div class="col-md-8 offset-md-2">
        
        <div class="recharge">
            <div class="card text-center">
              <div class="card-header">
                <h5>Recharge Your Mobile</h5>
              </div>
              <div class="card-block">
               @include('includes.payment-ui.step-progress')
              <div id="recharge-first">
                @include('includes.payment-ui.recharge-form')

              </div>

              </div>
              <div class="card-footer text-muted">
                {{ config('app.name', 'Laravel') }}
              </div>
            </div>
        </div>
    </div>
    <!-- end search context -->

</div>
<!-- /.row -->
@stop