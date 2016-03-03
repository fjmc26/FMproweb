<!DOCTYPE html>
<html lang="es">
	<head>
      <link href="css/bootstrap.min.css" rel="stylesheet" />
      <link href="css/bootstrap-theme.min.css" rel="stylesheet" />
      <link href="css/estilos.css" rel="stylesheet" />
      <link href="css/fonts.css" rel="stylesheet" />
		<link href="images/fm-logo4.png" rel="icon" type="image/png" />
		<meta charset="utf-8" />
		<meta content="T.S.U. Francisco J. Monteverde C." name="author" />
		<meta content="FM Diseño y Programación Web" name="description" />
		<meta content="Diseño, Programación, Web" name="keywords" />
		<meta content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" name="viewport" />
		<title>.::FM | Diseño y Programación Web::.</title>
	</head>
	<body data-spy="scroll" data-target="#navegacion">
      
      <!--BARRA SOCIAL-->

      <div class="social">
         <ul>
            <li><a href="http://www." target="_blank" class="icon-facebook"></a></li>
            <li><a href="http://www." target="_blank" class="icon-twitter"></a></li>
            <li><a href="http://www." target="_blank" class="icon-google"></a></li>
            <li><a href="http://www." target="_blank" class="icon-pinterest"></a></li>
            <li><a href="http://www." target="_blank" class="icon-mail"></a></li>
         </ul>
      </div>
      <!--MENU DE NAVEGACION-->

		<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
			<div class="container-fluid">
				<div class="navbar-header">
					<button class="navbar-toggle collapsed" data-target="#navegacion" data-toggle="collapse" type="button">
						<span class="sr-only">Menú Principal</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#" id="titulo-menu">FM</a>
				</div>
            <div class="collapse navbar-collapse" id="navegacion">
               <ul class="nav navbar-nav" role="tablist">
                  <!--FJMC26-->

						<li>
                     <a href="#fjmc-26" id="verde">FJMC-26</a>
						</li>
                  <!--PRODUCTOS Y SERVICIOS-->

						<li>
							<a href="#pro-ser" id="amarrillo">Productos y Servicios</a>
	            	</li>
                  <!--PORTAFOLIO-->

	            	<li class="dropdown">
	              		<a class="dropdown-toggle" data-toggle="dropdown" href="#" id="rojo" role="button">Portafolio <span class="caret"></span></a>
	              		<ul class="dropdown-menu" role="menu">
                        <li><a href="#">Imagenes</a></li>
	                	   <li class="divider"></li>
                        <li><a href="#">Paginas Web</a></li>
	              		</ul>
	            	</li>
                <!--CONTACTOS-->

	            	<li>
	              		<a href="#contactos" id="contacto">Contactos</a>
	            	</li>
	          	</ul>
	          	<form action="" class="navbar-form navbar-right" role="search"><!--FORMULARIO DE BUSQUEDA-->
                  <div class="form-group">
                     <input class="form-control" placeholder="Buscar" type="text" />
                  </div>
                  <button type="submit" class="btn btn-info">
                     <span class="glyphicon glyphicon-search"></span>
                  </button>
               </form>
	        	</div>
	      </div>
    	</nav>
      <!--CAROUSEL DE IMAGENES-->

    	<div class="carousel slide" data-ride="carousel" id="carousel-1">
      	<ol class="carousel-indicators">
         	<li class="active" data-target="#carousel-1" data-slide-to="0" id="indicador"></li>
          	<li data-target="#carousel-1" data-slide-to="1" id="indicador"></li>
          	<li data-target="#carousel-1" data-slide-to="2" id="indicador"></li>
        	</ol>
        	<div class="carousel-inner" role="listbox">
         	<div class="item active">
            	<img class="img-responsive" src="images/Portada.png" alt="First slide [1140x500]"/>
          	</div>
          	<div class="item">
            	<img class="img-responsive" src="images/Iniciales.png" alt="Second slide [1140x500]"/>
               <div class="carousel-caption hidden-xs hidden-sm">
               	<h3 class="mensaje-imagen">Siéntete orgulloso de ser quien eres. Lucha por quien deberías ser.</h3>
               </div>
          	</div>
          	<div class="item">
           		<img class="img-responsive" src="images/fmproweb.png" alt="Third slide [1140x500]"/>
               <div class="carousel-caption hidden-xs hidden-sm">
               	<h3 class="mensaje-imagen">Si corres lo que te piden serás bueno, si corres el doble serás el mejor.</h3>
               </div>
          	</div>
        	</div>
        	<a class="left carousel-control" data-slide="prev" href="#carousel-1" role="button">
         	<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          	<span class="sr-only">Anterior</span>
        	</a>
        	<a class="right carousel-control" data-slide="next" href="#carousel-1" role="button">
          	<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          	<span class="sr-only">Siguiente</span>
        	</a>
   	</div>
    <!--CUERPO DE LA PAGINA-->

      <div class="container-fluid">
         <hr class="linea-divisoria"></hr>
         <!--FJMC-26-->

         <div class="row">
            <div class="seccion" id="fjmc-26">
               <div class="text-center">
                  <h1 class="titulo">Constancia e Inspiración</h1>
                  <p class="valores">
                     Son los valores a seguir en esta carrera que ya hace muchos años la estoy ejerciendo
                     con todo la ¡pasion y entrega! A pesar de todo lo bueno y no tan bueno...
                     No me canso de sentirme orgulloso de ser <i>informatico.</i>
                  </p>
                  <br /><br /><br />
                  <h2 class="sub-titulo">Enseñanzas de aquí y allá</h2>
               </div>
               
               <div class="progreso col-xs-12 col-sm-9 col-md-9">
                  <br />
                  <div class="barras">
                     <!--HTML5 80%-->

                     <div class="progress">
                        <div class="estatud progress-bar progress-bar-success progress-bar-striped" role="progressbar" style="width:80%;">
                           HTML5
                        </div>
                        <span class="sr-only">Html5</span>
                     </div>
                     <!--CSS3 75%-->

                     <div class="progress">
                        <div class="estatud progress-bar progress-bar-success" role="progressbar" style="width:75%;">
                           CSS3
                        </div>
                        <span class="sr-only">Css3</span>
                     </div>
                     <!--MAQUETACION CSS3 Y HTML5 68%-->

                     <div class="progress">
                        <div class="estatud progress-bar progress-bar-warning progress-bar-striped" role="progressbar" style="width:68%;">
                           Maquetacion CSS3 y HTML5
                        </div>
                        <span class="sr-only">Maquetacion CSS3 y HTML5</span>
                     </div>
                     <!--DISEÑO WEB 78%-->

                     <div class="progress">
                        <div class="estatud progress-bar progress-bar-warning" role="progressbar" style="width:78%;">
                           Diseño Web
                        </div>
                        <span class="sr-only">Diseño Web</span>
                     </div>
                     <!--PROGRAMACION JAVASCRIPT 30%-->

                     <div class="progress">
                        <div class="estatud progress-bar progress-bar-danger progress-bar-striped" role="progressbar" style="width:30%;">
                           Programación Javascript
                        </div>
                        <span class="sr-only">Programación Javascript</span>
                     </div>
                     <!--PROGRAMACION PHP 70%-->

                     <div class="progress">
                        <div class="estatud progress-bar progress-bar-danger" role="progressbar" style="width:70%;">
                           Programación PHP
                        </div>
                        <span class="sr-only">Programación PHP</span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <hr class="linea-divisoria"></hr>
         <!--PRODUCTOS Y SERVICIOS-->

      	<div class="row">
      		<div class="seccion" id="pro-ser">
               <div class="col-xs-12 col-sm-4 col-md-4">
                  <br />
                  <!--QUE HACEMOS-->

                  <div class="thumbnail">
                     <img class="" src="images/top-grid-pic1.png" />
                     <div class="caption">
                        <div class="text-center">
                           <h2 class="item">¿Qué hacemos?</h2>
                           <p class="sangria">Nos dedicamos a la construcción de portales web donde industrias, empresas y negocios personales puedan poner a la vista sus productos en el maravilloso mundo del ciberespacio.</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xs-12 col-sm-4 col-md-4">
                  <img class="img-responsive center-block" src="images/fm-logo4.png" width="306" height="396" alt="FM" />
               </div>
               <div class="col-xs-12 col-sm-4 col-md-4">
                  <br />
                  <!--QUE HERRAMIENTAS UTILIZAMOS-->

                  <div class="thumbnail">
                     <img class="" src="images/programacion.png" />
                     <div class="caption">
                        <div class="text-center">
                           <h2 class="item">¿Qué utilizamos?</h2>
                           <p class="sangria2">Aplicando las diferentes técnicas, podemos ofrecerle al usuario el más actualizado sitio de internet apoyándonos en programas que están marcando la última tendencia en codificación y a proyectos se refiere.</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
      	</div>
         <hr class="linea-divisoria"></hr>
         <!--CONTACTO-->

			<div class="row" id="contactos">
            <div class="contenedor-formulario">
                  <div class="wrap">
                     <form action="" class="formulario" name="formulario_registro" method="post">
                        <div class="input-grupo">
                           <input id="nombre" name="nombre" type="text" />
                           <label class="label" for="nombre">Nombre:</label>
                        </div>
                        <div class="input-grupo">
                           <input id="correo" name="correo" type="text" />
                           <label class="label" for="correo">Email:</label>
                        </div>
                        <div class="input-grupo">
                           <textarea class="" id="message" name="message" placeholder="Escriba su mensaje aqui" rows="3"></textarea>
                        </div>
                        <button class="btn btn-primary center-block" type="submit">Enviar</button>
                        <br />
                     </form>
                  </div>
               </div>
         </div>
      </div>
      <footer class="pie">
         <div class="container">
            <h6 class="nombre text-center">FM | Diseño y Programación Web</h6>
            <h6 class="text-center">Derechos Reservados &copy; 2016</h6>
         </div>
      </footer>

		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>
      <script src="js/desplazamiento.js"></script>
	</body>
</html>
