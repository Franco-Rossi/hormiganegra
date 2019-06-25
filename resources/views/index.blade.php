<html lang="en">

  <head>
    {{-- Meta tags --}}
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    {{-- Styles --}}
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="css/mdb.min.css" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">

    <title>Cerveza Hormiga Negra</title>
  </head>

  <body data-spy="scroll" data-target=".navbar" data-offset="10">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
  <a href="#" class="navbar-left"><img src="img/logos.png"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse  justify-content-end" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="#home">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="#about">¿Quienes somos?</a>
      <a class="nav-item nav-link" href="#beers">Nuestras cervezas</a>
      <a class="nav-item nav-link" href="#location">Sucursales</a>
      <a class="nav-item nav-link" href="#contact">Contactanos</a>
    </div>
  </div>
</nav>


	<div id="home" align="center" class="embed-responsive embed-responsive-16by9 videoContainer"> {{-- Banner video --}}
		<div class="overlay"></div>
	    <video autoplay loop muted class="embed-responsive-item">
	        <source src="video/bg.mp4" type="video/mp4">
	    </video>
	</div> {{-- End banner video --}}


<div id="about" class="container-fluid text-center pt-5 pb-5">
  <div class="row align-items-center">
    <div class="col-sm-12">
    	<br><br>
  <h2>Quienes somos<br>-</h2>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime ipsa non dolore necessitatibus quod incidunt iusto est eaque quia placeat eveniet tempora minus perspiciatis, similique nisi at earum commodi, nam corporis, et ducimus ab vel. Nisi, beatae, quam? Eveniet, inventore. Cumque, vitae quibusdam sequi id porro iste labore accusantium quam quia voluptas fugit quos, est rerum dicta officia vel nam architecto natus unde. Facere labore ipsam libero repudiandae tenetur atque consectetur, velit ad explicabo commodi totam, veritatis magnam, ullam nemo aliquam, optio a molestias dignissimos neque! Explicabo id quo, voluptatum nihil magni cupiditate, fugiat voluptates, illum rem deleniti culpa nisi?</p>
</div>
<div class="col-sm-12">
      <img class="img-fluid" src="img/logocircle.png"></img>
    </div>
  </div>
</div>

<div id="beers" class="container-fluid text-center bg-grey pt-5 pb-5">
	<br><br>
  <h2>Nuestras cervezas<br>-</h2>
  <br>
  <div class="row slideanim">
    <div class="col-sm-4">
   <img class="logo img-fluid" src="img/rubia.png"></img>
      <h4>American IPA</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
    <div class="col-sm-4">
     <img class="logo img-fluid" src="img/rubia.png"></img>
      <h4>Brown Ale</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
    <div class="col-sm-4">
    <img class="logo img-fluid" src="img/rubia.png"></img>
      <h4>Blonde Ale</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
    </div>
    <br><br>
  <div class="row">
    <div class="col-sm-4">
    <img class="logo img-fluid" src="img/rubia.png"></img>
      <h4>Scottish</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
    <div class="col-sm-4">
      <img class="logo img-fluid" src="img/rubia.png"></img>
      <h4>Summer Ale</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
    <div class="col-sm-4">
      <img class="logo img-fluid" src="img/rubia.png"></img>
      <h4>Honey</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
</div>
    <br><br>
  <div class="row">
    <div class="col-sm-12">
    <img class="logo img-fluid" src="img/rubia.png"></img>
      <h4>Irish Stout</h4>
      <p>Lorem ipsum dolor sit amet..</p>
      <br><br><br>
    </div>
    </div>
  </div>
</div>

<div id="location" class="container-fluid text-center pt-5 pb-5">
  <h2>Sucursales<br>-</h2>
  <h4>Podes encontrarnos en las siguientes sucursales</h4>
  <div class="row text-center">
    <div class="col-md-4">
      <div class="thumbnail view overlay zoom mb-5">
        <img src="img/lanus.jpg" class="img-fluid rounded d-block" alt="Paris">
        <a href="#" class="mask flex-center rgba-black-strong">
        <h2 class="text-white">Lanus</h2>
    	</a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail view overlay zoom mb-5">
        <img src="img/caballito.jpg" class="img-fluid rounded mx-auto d-block" alt="Paris">
        <a href="#" class="mask flex-center rgba-black-strong">
        <h2 class="text-white">Caballito</h2>
    	</a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail view overlay zoom mb-5">
        <img src="img/martinez.jpg" class="img-fluid rounded mx-auto d-block" alt="Paris">
        <a href="#" class="mask flex-center rgba-black-strong">
        	<h2 class="text-white">Martinez</h2>
    	</a>
      </div>
    </div>
    <div class="row text-center justify-content-center">
    <div class="col-md-4">
      <div class="thumbnail view overlay zoom mb-5">
        <img src="img/nuñez.jpg" class="img-fluid rounded mx-auto d-block" alt="Paris">
        <a href="#" class="mask flex-center rgba-black-strong">
        <h2 class="text-white">Nuñez</h2>
    	</a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail view overlay zoom mb-5">
        <img src="img/sanmiguel.jpg" class="img-fluid rounded mx-auto d-block" alt="Paris">
        <a href="#" class="mask flex-center rgba-black-strong">
        <h2 class="text-white">San Miguel</h2>
    	</a>
      </div>
    </div>
    </div>
</div>

<div id="contact" class="container-fluid bg-grey pt-5 pb-5">
	<br>
  <h2 class="text-center">CONTACTANOS<br>-</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>¿Tenes alguna duda o consulta?<br>¿Queres formar parte de nuestro staff?<br>¿Te interesa adquirir una franquicia?<br><br>Dejanos tu comentario y nuestros especialistas<br>se van a encargar de contactarte.</p>
    </div>
    <div class="col-sm-7">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Nombre" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comentario" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit">Enviar</button>
        </div>
      </div>
    </div>
  </div>
</div>





    {{-- Scripts --}}
    <script src="{{ asset('js/jquery-3.3.1.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="js/mdb.js"></script>
   {{-- Fin scripts --}}

  </body>

  <footer class="page-footer font-small">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3 text-white">Cerveceria Hormiga Negra© 2019 - Todos los derechos reservados - Pagina Web creada por Franco Rossi
  </div>
  <!-- Copyright -->

</footer>
</html>
