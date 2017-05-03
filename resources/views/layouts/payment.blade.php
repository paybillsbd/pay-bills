<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.9.2/themes/base/jquery-ui.min.css">
    <!-- <link rel="stylesheet" href="css/glyphicons.css"> -->
    <script src="https://use.fontawesome.com/9d0d2eaea9.js"></script>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="/css/custom.css">

    <style>

    </style>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    @include('includes.payment-ui.navbar')

    <div class="container">
        @yield('content')
    </div>

    <script src="/js/jquery.js"></script>
    <script
  src="https://code.jquery.com/ui/1.9.2/jquery-ui.min.js"
  integrity="sha256-eEa1kEtgK9ZL6h60VXwDsJ2rxYCwfxi40VZ9E0XwoEA="
  crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

    <script src="recharge-login.html" type="text/x-jquery-tmpl"></script>

    <script>
        $( document ).ready(function() {
            var firstFormSubmit = $('#recharge-submit-first');
            var step = 0;
            var stepItem = $('.step-progress .step-slider .step-slider-item');

            firstFormSubmit.click(function(e){
                e.preventDefault();
                $(stepItem[step]).addClass('active');
                console.log('first form submitted');
                $("#recharge-first").empty();
                $('#recharge-first').load( "/recharge-login", function() {
                  console.log("Load was performed.");

                  $('#signInTab').click(function(e){
                    e.preventDefault();
                    $('#myTabs a:first').tab('show');
                  });

                  $('#signUpTab').click(function(e){
                    e.preventDefault();
                    $('#myTabs a:first').tab('show');
                  });
                  
                });
            });

            $('#loginButton').click(function(e){
              step++;
              $(stepItem[step]).addClass('active');
            })

        });
    </script>
    <script>
      $( function() {
        $( "#startDate" ).datepicker();
        $( "#endDate" ).datepicker();

        var options = [
          "ActionScript",
          "AppleScript",
          "Asp",
          "BASIC",
          "C",
          "C++",
          "Clojure",
          "COBOL",
          "ColdFusion",
          "Erlang",
          "Fortran",
          "Groovy",
          "Haskell",
          "Java",
          "JavaScript",
          "Lisp",
          "Perl",
          "PHP",
          "Python",
          "Ruby",
          "Scala",
          "Perl",
          "PHP",
          "Python",
          "Ruby",
          "Scala",
          "Perl",
          "PHP",
          "Python",
          "Ruby",
          "Scala",
          "Perl",
          "PHP",
          "Python",
          "Ruby",
          "Scala",
          "Scheme"
        ];
        $( "#search-options" ).autocomplete({
          source: options
        });

      } );
    </script>
<!-- 
    <script type="text/javascript">
      $(function() {
        var step = 0;
        var stepItem = $('.step-progress .step-slider .step-slider-item');
        // console.log(stepItem);

        // Step Next
        $('.step-content .step-content-foot button[name="next"]').on('click', function() {
          var instance = $(this);
          // console.log(instance);
          if (stepItem.length - 1 < step) {
            return;
          }
          if (step == (stepItem.length - 2)) {
            instance.addClass('out');
            instance.siblings('button[name="finish"]').removeClass('out');
          }
          $(stepItem[step]).addClass('active');
          $('.step-content-body').addClass('out');
          $('#' + stepItem[step + 1].dataset.id).removeClass('out');
          step++;
        });

        // Step Last
        $('.step-content .step-content-foot button[name="finish"]').on('click', function() {
          if (step == stepItem.length) {
            return;
          }
          $(stepItem[stepItem.length - 1]).addClass('active');
          $('.step-content-body').addClass('out');
          $('#stepLast').removeClass('out');
        });

        // Step Previous
        $('.step-content .step-content-foot button[name="prev"]').on('click', function() {
          var instance = $(this);
          $(stepItem[step]).removeClass('active');
          if (step == (stepItem.length - 1)) {
            instance.siblings('button[name="next"]').removeClass('out');
            instance.siblings('button[name="finish"]').addClass('out');
          }
          $('.step-content-body').addClass('out');
          $('#' + stepItem[step].dataset.id).removeClass('out');
          if (step <= 0) {
            return;
          }
          step--;
        });
      });

    </script> -->

</body>

</html>



