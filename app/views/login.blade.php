<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.png">

    <title>SSG Elections System - Administrator</title>

    <!-- Bootstrap core CSS -->
    {{ HTML::style('packages/dist/css/bootstrap.css') }}
    {{ HTML::style('assets/css/backend.css') }}
  </head>
  <body class="home">
  @include('partials.alerts')
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
       {{Form::open(array('url' => '/login')) }}
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h2 class="modal-title">BISU SSG Election 2014</h2>
        </div>
        <div class="modal-body">
          <br><br><br><br><br>
            <div class="well col-md-10 col-md-offset-1 col-sm-12 col-xs-12" id="login" style="padding-bottom:20px"><br>
                <div class="input-group col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-credit-card"></i></span>
                    <input type="text" name="code" class="form-control" placeholder="ID Number" >
                </div><br>
                <div class="input-group col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                    <input type="password" name="password" class="form-control" placeholder="Password" >
                </div>
                <br><br>
            </div>
            <br><br>
        </div>
        <div class="modal-footer">
          <button type="reset" class="btn btn-danger">Reset</button>
          <button type="submit" class="btn btn-success">L O G I N </button>
        </div>
         {{ Form::close() }}
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
    <div class="container">
        <div class="row">
            <div class="pull-right" style="margin: 0px 90px 0 0">
               <img src="/assets/img/bisulogo.png" alt="bisulogo">
            </div>
        </div>
        <div class="row">
            <div class="jumbotron" style="margin:-90px 0 0 0">
            <br>
            <h1 id="text1"><strong>BISU SSG Election 2014<strong></h1>
            <p class="lead">The State University in Bohol</p>
            </div>
        </div>
        <br>
        <div class="row"> 
            <div class="well col-md-4 col-md-offset-4">
                    <a href="#myModal" role="button" class="btn btn-lg btn-block btn-primary" data-toggle="modal">Log In</a>
            </div>
        </div>
       
            <div class="row">
             <div id="carousel-example-generic" class="carousel slide">
                  <!-- Indicators -->
                  <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                  </ol>
                
                  <!-- Wrapper for slides -->
                  <div id="Carousel" class="carousel slide">
                        <ol class="carousel-indicators">
                            <li data-target="Carousel" data-slide-to="0" class="active"></li>
                            <li data-target="Carousel" data-slide-to="1"></li>
                            <li data-target="Carousel" data-slide-to="2"></li>
                        </ol>
                
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="/assets/img/vision.png">
                            </div>
                            <div class="item">
                                <img src="/assets/img/mission.png">
                            </div>
                            <div class="item">
                                <img src="/assets/img/logos1.png">
                            </div>
                        </div>
                
                        <a class="left carousel-control" href="#Carousel" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                        </a>
                        <a class="right carousel-control" href="#Carousel" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                        </a>
                    </div>    
                    </div>
        </div>
    
	<script>
    	$(function() {
            $(".merged input").on("focus blur", function() {
                $(this).prev().toggleClass("focusedInput")
            });
        });
	</script>
	

  
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    {{ HTML::script('assets/js/jquery.js') }}
    {{ HTML::script('packages/dist/js/bootstrap.min.js') }}
  </body>
  </html>