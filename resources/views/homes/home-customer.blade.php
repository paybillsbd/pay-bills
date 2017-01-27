@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">        

        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @include('forms.inputs.select-box-searchable', [ 'route' => App\PaymentService::getApiServices('v1') ])

                    Load services here ....

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('header-styles')

<link href="/vendor/dist/select2-4.0.3/css/select2.min.css" rel="stylesheet">
<link href="/vendor/dist/select2-4.0.3/css/select2-bootstrap.css" rel="stylesheet">

@endsection

@section('footer-scripts')

<script src="/vendor/dist/select2-4.0.3/js/select2.full.min.js"></script>
<script type="text/javascript">

    $(".search-services").select2({
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
            processResults: function (data, page) {
              return {
                results: data
              };
            }
        }
    })

</script>

@endsection
