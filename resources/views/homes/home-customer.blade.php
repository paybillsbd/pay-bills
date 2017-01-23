@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">        

        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @include('forms.inputs.select-box-searchable', [ 'route' => '/services' ])

                    Load services here ....

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('header-styles')

<link href="/vendor/dist/select2-4.0.3/css/select2.min.css" rel="stylesheet">

@endsection

@section('footer-scripts')

<script src="/vendor/dist/select2-4.0.3/js/select2.min.js"></script>

<script type="text/javascript">

    $(".search-services").select2({
        ajax: {
            delay: 250,
            allowClear: true,
            dataType: 'json',
            data: function(params) {
                return {
                    term: params.term
                }
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
