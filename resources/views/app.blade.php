<!DOCTYPE html>
<html lang="sk">
<head>
	<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pramene Zdravia</title>	

	<link rel="stylesheet" href="css/app.css">
	<link rel="stylesheet" href="{{ elixir('css/pramen.css') }}">
<!--	
	<link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
-->
</head>
<body>
  <!-- NAVBAR
  ================================================== -->
  <div class="navbar-wrapper">
    <div class="container">

      <nav class="navbar navbar-inverse navbar-static-top">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Pramene zdravia</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Pramene zdravia</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse text-center">
            <ul class="nav navbar-nav">
              <li><a href="home"><i class="fa fa-home"></i>&nbsp;Home</a></li>
              <li><a href="uvod"><i class="fa fa-slack"></i>&nbsp;Úvod</a></li>
              <li><a href="o-nas"><i class="fa fa-group"></i>&nbsp;O nás</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-heartbeat"></i>&nbsp;Čím sa zaoberáme<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="dornova-metoda"><i class="fa fa-heart-o"></i>&nbsp;Dornova metóda</a></li>
                  <li><a href="bankovanie"><i class="fa fa-heart-o"></i>&nbsp;Bankovanie</a></li>
                  <li><a href="sm-system"><i class="fa fa-heart-o"></i>&nbsp;SM-Systém</a></li>
                  <li><a href="reflexologia"><i class="fa fa-heart-o"></i>&nbsp;Reflexológia</a></li>
                  <li><a href="bud-fit"><i class="fa fa-heartbeat"></i>&nbsp;Buď fit</a></li>
                </ul>
              </li>
              <li><a href="referencie"><i class="fa fa-comments"></i>&nbsp;Referencie</a></li>
              <li><a href="cennik"><i class="fa fa-shopping-cart"></i>&nbsp;Cenník</a></li>
              <li><a href="kontakty" alt="Kontakty"><i class="fa fa-envelope"></i>&nbsp;Kontakty</a></li>
            </ul>
          </div>
        </div>
      </nav>

    </div>
  </div>

  <!-- Carousel
  ================================================== -->
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img class="first-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="First slide">
        <div class="container">
          <div class="carousel-caption">
            <h1>Example headline.</h1>
            <p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
            <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
          </div>
        </div>
      </div>
      <div class="item">
        <img class="second-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Second slide">
        <div class="container">
          <div class="carousel-caption">
            <h1>Another example headline.</h1>
            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
          </div>
        </div>
      </div>
      <div class="item">
        <img class="third-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Third slide">
        <div class="container">
          <div class="carousel-caption">
            <h1>One more for good measure.</h1>
            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
          </div>
        </div>
      </div>
    </div>
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div><!-- /.carousel -->


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->
  <div class="container marketing">
    @include('partials.flash')

    <div class="starter-template">
      @yield('content')
    </div>

  </div><!-- /.container -->

  <!-- Site footer -->
  <footer class="footer">
    <div class="container text-center">
      @yield('footer')
      <p>&copy; Gusepe.Werdy 2015</p>
    </div>  
  </footer>
	
  <script src="/js/vendor.js"></script>
  <script src="{{ elixir('js/pramen.js') }}"></script>
<!--  
  <script src="bower_components/jquery/dist/jquery.min.js"></script>
  <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script> 
-->  
  @yield('jscript')
</body>
</html>