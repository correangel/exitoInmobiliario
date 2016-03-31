<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Temario Exito Inmobiliario</title>
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/quality.css" rel="stylesheet">
    <link href="css/temario.css" rel="stylesheet">
    <!--Sweet Alert -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">



    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  
<?php 
require '../server/connectdb.php';

if(isset($_GET['correo']) && !empty($_GET['correo']) AND isset($_GET['hash']) && !empty($_GET['hash'])){ 
                         $hash = $_GET['hash'];
                         $correoo = $_GET['correo'];
                         $sql = "SELECT `uno`, `hash` FROM Cuestionario  WHERE `uno` = '$correoo' AND `hash`='$hash';";
                         $result = mysqli_query($db, $sql); 

                            if(mysqli_num_rows($result) == 1)
                            {

?>

  <body>
	<nav class="navbar navbar-default">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <a class="navbar-brand" href="#">
	        <img src="img/logo.svg">
	      </a>
	    </div>
	  </div>
	</nav>
	<h1>Temario del curso</h1>
	<section>
    	<div class="container">
    		<div class="row">
    			<div class="col-sm-12">
					<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
					  <div class="panel panel-default">
					    <div class="panel-heading" role="tab" id="headingOne">
					      <h4 class="panel-title">
					        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
					          Día 1
					        </a>
					      </h4>
					    </div>
					    <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
					      <div class="panel-body">
					        <table class="table">
							    <thead>
							      <tr>
							        <th>Horario</th>
							        <th>Tema</th>
							        <th>Expositor</th>
							      </tr>
							    </thead>
							    <tbody>
							      <tr>
							        <td>9:00 - 9:30</td>
							        <td>Registro</td>
							        <td></td>
							      </tr>
							      <tr>
							        <td>9:30 - 10:00</td>
							        <td>Introducción al Corretaje</td>
							        <td>Carlos Nava</td>
							      </tr>
							      <tr>
							        <td>10:01 - 11:30</td>
							        <td>Módulo 1: Proceso de Venta de un inmueble</td>
							        <td>Carlos Nava</td>
							      </tr>
							      <tr>
							        <td>11:31 - 13:00</td>
							        <td>Modulo 2: Mercado de Compradores</td>
							        <td>Carlos Nava</td>
							      </tr>
							      <tr>
							        <td>13:00 - 14:00</td>
							        <td>Tips para Exclusivar</td>
							        <td>Carlos Nava</td>
							      </tr>
							      <tr>
							        <td>14:00 -15:00</td>
							        <td>COMIDA</td>
							        <td></td>
							      </tr>
							      <tr>
							        <td>15:01 - 16:00</td>
							        <td>Esquema Legal y Fiscal del Proceso de Venta</td>
							        <td>Por confirmar</td>
							      </tr>
							      <tr>
							        <td>16:01 - 17:00</td>
							        <td>Perfilamiento de un comprador y créditos hipotecarios</td>
							        <td>Arturo Hernández</td>
							      </tr>
							      <tr>
							        <td>17:01 - 18:30</td>
							        <td>Valor comercial de un inmueble</td>
							        <td>Salvador Vázquez</td>
							      </tr>
							    </tbody>
							  </table>
					      </div>
					    </div>
					  </div>
					  <div class="panel panel-default">
					    <div class="panel-heading" role="tab" id="headingTwo">
					      <h4 class="panel-title">
					        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
					          Día 2
					        </a>
					      </h4>
					    </div>
					    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
					      <div class="panel-body">
					        <table class="table">
							    <thead>
							      <tr>
							        <th>Horario</th>
							        <th>Tema</th>
							        <th>Expositor</th>
							      </tr>
							    </thead>
							    <tbody>
							      <tr>
							        <td>10:00 - 11:30</td>
							        <td>Módulo 3: Arrendamiento</td>
							        <td>Rafael Guizar</td>
							      </tr>
							      <tr>
							        <td>11:30 - 13:00</td>
							        <td>Cómo arrancar y hacer crecer tu negocio inmobiliario (apalancamiento)</td>
							        <td>Carlos Nava</td>
							      </tr>
							      <tr>
							        <td>13:00 - 14:30</td>
							        <td>Visión y misión (video corporativo)</td>
							        <td>Ricardo Guizar</td>
							      </tr>
							    </tbody>
							  </table>
					      </div>
					    </div>
					  </div>
					</div>
    			</div>
    			<button type="submit" class="btn btn-default greenButton">Pagar ahora</button>
    		</div>
    	</div>
    </section>

     <?php }  } else{ ?>

     <body id="page-top" class="index errorPg">

                                    
                                    <div class="container floatBg">
                                            <div class="intro-text">
                                            	<div class="row">
                                                	<div class="col-xs-12">
                                                    
                                                        <h2>LO SENTIMOS, <b>NO TIENES ACCESO A ESTA PAGINA</b></h2>
                                                        <p class="textResponse">Inténtalo de nuevo, o regresa a la <a href="/exitoInmobiliario/">página principal</a></p>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    
  <?php } ?>

    <footer>
    	<div class="container-fluid">
            <div class="row">
                <div class="col-xs-6 text-right">
                  <strong class="transformar"><a href="#">Aviso de privacidad</a></strong>
                </div>
                <div class="col-xs-6 text-left">
                <span>Powered by </span><a target="#blank" href="http://concepthaus.mx/">CONCEPT HAUS</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>