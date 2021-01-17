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
        <p>El IES Reino de Viguera es un centro de carácter público en el que se trabaja la etapa educativa previa a la universidad, desde una perspectiva abierta, amplia y productiva. Por ello buscamos fomentar un aprendizaje activo, crítico y diverso, que tenga en cuenta los innumerables cambios que se van produciendo en la sociedad. Así pues, teniendo en cuenta la heterogeneidad cultural en la que nos vemos inmersos nuestro Proyecto Educativo de Educación Secundaria y Bachillerato busca ofrecer una educación estrechamente ligada a las necesidades del momento.</p>

		<p>Por ello, una de las señas de identidad del centro es que focaliza gran parte de sus esfuerzos en promover y favorecer la atención a la diversidad, manteniendo así un estrecho vínculo con el Programa de cooperación territorial de Orientación y Refuerzo para el Avance y Apoyo en la Educación. Por un lado, otro rasgo característico del Proyecto Educativo del centro es que busca facilitar que los alumnos de Educación Secundaria y Bachillerato puedan alcanzar los objetivos generales y las competencias correspondientes a estas etapas educativas en la materia de Lengua Castellana e Inglés y, al mismo tiempo, puedan obtener la certificación académica en los niveles intermedio y avanzado. Ya que desde el centro somos conscientes de la importancia que los idiomas adquieren en esta sociedad global y cada vez más diversificadas.</p>

		<p>Por último, el IES Reino de Viguera ve más crucial que nunca promover y difundir valores, actitudes y comportamientos que propicien el diálogo, la no violencia y el acercamiento entre culturas. Por ello, una de las señas de identidad del centro es el promover el diálogo intercultural.
		</p>
      </div>
    </div>
</div>

</body>
</html>