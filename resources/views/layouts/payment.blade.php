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

    <!-- Navigation -->
    <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="#">Paybills</a>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">ABOUT</a>
          </li>
         
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>

    <br>
    
    <div class="container">

        <div class="row">
            <!-- search context -->
            <div class="col-md-8 offset-md-2">
                
                <div class="recharge">
                    <div class="card text-center">
                      <div class="card-header">
                        <h5>Recharge Your Mobile</h5>
                      </div>
                      <div class="card-block">
                       <div class="row step-progress">
                        <div class="step-slider">
                          <div data-id="step1" class="step-slider-item"></div>
                          <div data-id="step2" class="step-slider-item"></div>
                          <div data-id="step3" class="step-slider-item"></div>
                        </div>
                        <div class="step-content">
                          <!-- <div id="step1" class="step-content-body">Step 1</div>
                          <div id="step2" class="step-content-body out">Step 2</div>
                          <div id="step3" class="step-content-body out">Step 3</div>
                          <div id="step4" class="step-content-body out">Step 4</div>
                          <div id="stepLast" class="step-content-body out">Completed</div> -->
                          <!-- <div class="step-content-foot">
                            <button type="button" class="active" name="prev">Prev</button>
                            <button type="button" class="active" name="next">Next</button>
                            <button type="button" class="active out" name="finish">Finish</button>
                          </div> -->
                        </div>
                      </div>
                      <div id="recharge-first">
                        <form>
                            <div class="row text-left">
                                <div class="col-md-6">
                                <label class="custom-control custom-radio">
                                  <input id="radio1" name="radio" type="radio" class="custom-control-input">
                                  <span class="custom-control-indicator"></span>
                                  <span class="custom-control-description">Prepaid</span>
                                </label>
                                </div>
                                <div class="col-md-6">
                                    
                                    <label class="custom-control custom-radio">
                                      <input id="radio2" name="radio" type="radio" class="custom-control-input">
                                      <span class="custom-control-indicator"></span>
                                      <span class="custom-control-description">Postpaid</span>
                                    </label>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                            
                              <div class="col-md-6">
                                <input required type="text"
                                pattern="^(?:\+?88)?01[15-9]\d{8}$" class="form-control" id="formGroupExampleInput2" placeholder="Enter a Valid Mobile Number">
                              </div>
                              <div class="col-md-6">
                                  <input required type="number" class="form-control" id="formGroupExampleInput2" placeholder="Recharge Amount">
                              </div>
                            </div>
                            <br>
                            <div class="form-group">
                                <button type="submit" id="recharge-submit-first" class="btn btn-primary btn-block">Proceed To Recharge</button>
                            </div>
                        </form> 

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

    </div>

    <script src="/js/jquery.js"></script>
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



