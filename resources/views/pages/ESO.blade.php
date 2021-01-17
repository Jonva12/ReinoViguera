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
  <h1 class="font-weight-bold display-1">IES Reino de Viguera</h1>
  <p class="font-weight-bold display-4">¡Bienvenidos a la web!</p> 
</div>
  
<div class="container">
  <div class="row">
    <div class="col-lm-10">
      <div>
        <img id="logo" class="img-fluid" src="/img/logo.png">
        <p>ESO
			En la actualidad la Educación Secundaria Obligatoria se estructura en dos etapas: un primer ciclo que abarca de los 13-15 años, desde primero hasta tercero; y un segundo ciclo correspondiente a los 16 años y cuarto de la E.S.O de carácter terminal y propedéutico. Este último se divide en Enseñanzas académicas, que en teoría están enfocadas hacia el Bachillerato, y Enseñanzas aplicadas, dirigidas hacia Formación Profesional, permitiendo al alumno elegir entre ambas. En la anterior legislación en tercero y cuarto se desarrollaban los Programas de diversificación curricular, sin embargo, estos han sido sustituidos por Programas de mejora del aprendizaje y el rendimiento -PEMAR- para segundo y tercero. Una vez superados los dos cursos de PMAR los alumnos se integrarán en cuarto de la ESO. A su vez, al final de la etapa se realiza una prueba de evaluación sobre el aprendizaje adquirido en los cuatro cursos, aunque este no imposibilita egresar.
			En lo relativo a las asignaturas -a nivel estatal- para primero, segundo, tercer y cuarto curso de la ESO estas se dividen en:
			·         Troncales: prescritas por la administración central y que deben ser cursadas por todo el alumnado del país. A su vez, estas se desgranan en:
			o   Materias generales
			o   Materias de opción en tercero y cuarto
			·         Específicas: estándares de aprendizaje establecidos por la administración central, pero contenidos y criterios prescritos por las comunidades autónomas. Dentro de las específicas encontramos:
			o   Obligatorias para el alumnado
			o   De opción
			·         De libre configuración autonómica
			Atendiendo a la ubicación del I.E.S. en la Comunidad de La Rioja, este aspecto se concreta aún más para dar a la siguiente configuración de asignaturas por curso con las respectivas horas correspondientes.
		</p>
      </div>
    </div>
</div>

</body>
</html>