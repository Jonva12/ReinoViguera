<!DOCTYPE html>
<html lang="en">
<head>
  <title>IES Reino de Viguera</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link href="/css/style.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-sm bg-success">

  <!-- Links -->
  <ul class="navbar-nav">
  	<li class="nav-item">
      <a class="nav-link" href="{{route('inicio')}}">Inicio</a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Centro
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="{{route('somos')}}">Quienes Somos</a>
        <a class="dropdown-item" href="{{route('historia')}}">Historia</a>
        <a class="dropdown-item" href="{{route('contacto')}}">Contacto</a>
        <a class="dropdown-item" href="{{route('organigrama')}}">Organigrama</a>
      </div>
    </li>
   <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Oferta educativa
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="{{route('eso')}}">ESO</a>
        <a class="dropdown-item" href="{{route('bachillerato')}}">Bachillerato</a>
        <a class="dropdown-item" href="{{route('pemar')}}">Pemar</a>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{route('documentos')}}">Documentos Oficiales</a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Programacion Didactica
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Unidad Didactica</a>
        <a class="dropdown-item" href="#">Evaluacion y calificacion</a>
        <a class="dropdown-item" href="#">Evaluacion de la enseñanza</a>
      </div>
    </li>
  </ul>

</nav>
<div id="cabecera" class="jumbotron text-center">
  <h1 class="font-weight-bold display-1">QUIENES SOMOS</h1>
  <p class="font-weight-bold display-4">¡Bienvenidos a la web!</p> 
</div>
  
<div class="container">
  <div class="row">
    <div class="col-lm-10">
      <div>
        <img id="logo" class="img-fluid" src="/img/logo.png">
        <p>PEMAR presenta su propia configuración, modificando los métodos de enseñanza de la ESO y rompiendo la compartimentación de conocimientos que caracteriza a este periodo en busca de una educación más transversal. De este modo, las asignaturas quedan configuradas de la siguiente manera:
·         Ámbito sociolingüístico: integra Lengua castellana y Literatura y Geografía e Historia.
·         Ámbito de ciencias aplicadas: integra Matemáticas, Biología y Física y Química.
·         Ámbito de lenguas extranjeras: inglés.
·         Tecnología
·         Música
·         Educación Física
·         Religión o Valores éticos
·         Refuerzo de la competencia en comunicación lingüística
·         Tutoría
		</p>
      </div>
    </div>
</div>

</body>
</html>