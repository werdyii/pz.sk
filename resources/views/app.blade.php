<!DOCTYPE html>
<html lang="sk">
<head>
	<meta charset="utf-8">
	<title>Pramene Zdravia</title>	

	<link rel="stylesheet" href="css/app.css">
	<link rel="stylesheet" href="{{ elixir('css/pramen.css') }}">
<!--	
	<link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
-->
</head>
<body>
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="home">Pramene zdravia</a>
      </div>
      <div id="navbar" class="collapse navbar-collapse navbar-right">
        <ul class="nav navbar-nav">
            <li><a href="home"><i class="fa fa-home"></i></a></li>
            <li><a href="uvod"><i class="fa fa-slack"></i>&nbsp;Úvod</a></li>
            <li><a href="o-nas"><i class="fa fa-group"></i>&nbsp;O nás</a></li>
            <li><a href="dornova-metoda"><i class="fa fa-heart-o"></i>&nbsp;Dornova metóda</a></li>
            <li><a href="bankovanie"><i class="fa fa-heart-o"></i>&nbsp;Bankovanie</a></li>
            <li><a href="sm-system"><i class="fa fa-heart-o"></i>&nbsp;SM-Systém</a></li>
            <li><a href="reflexologia"><i class="fa fa-heart-o"></i>&nbsp;Reflexológia</a></li>
            <li><a href="bud-fit"><i class="fa fa-heartbeat"></i>&nbsp;Buď fit</a></li>
            <li><a href="referencie"><i class="fa fa-comments"></i>&nbsp;Referencie</a></li>
            <li><a href="cennik"><i class="fa fa-shopping-cart"></i>&nbsp;Cenník</a></li>
            <li><a href="kontakty" alt="Kontakty"><i class="fa fa-envelope"></i></a></li>
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </nav>

  <div class="container">
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