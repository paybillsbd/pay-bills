@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">        

        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @include('forms.inputs.select-box-searchable', [ 'route' => PayBills\Supports\ServiceManager::getApiServices('v1'), 'context' => 'search-services' ])

                    Load services here ....

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('header-styles')

<link href="/vendor/dist/select2-4.0.3/css/select2.css" rel="stylesheet">
<link href="/vendor/dist/select2-4.0.3/css/select2-bootstrap.css" rel="stylesheet">

@endsection

@section('footer-scripts')

<script src="/vendor/dist/select2-4.0.3/js/select2.full.js"></script>
<script type="text/javascript">

$(".search-services").select2({
    placeholder: 'I want to pay for ...',
    theme: "bootstrap",
    ajax: {
        delay: 250,
        allowClear: true,
        dataType: 'json',
        data: function (params) {
          var query = {
            search: params.term,
            page: params.page
          }

          // Query paramters will be ?search=[term]&page=[page]
          return query;
        },
        headers: {
            "Accept": "application/json"
        },
        processResults: function (data, params) {
            // parse the results into the format expected by Select2
            // since we are using custom formatting functions we do not need to
            // alter the remote JSON data, except to indicate that infinite
            // scrolling can be used
            params.page = params.page || 1;

            return {
              results: data.items,
              pagination: {
                more: (params.page * 10) < data.total_count

              }
            };
        },
    }

});

</script>

@endsection
