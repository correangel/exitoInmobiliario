<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Formulario 3</title>
</head>
            


            <?php 
                    require 'connectdb.php';
                    if(isset($_GET['correo']) && !empty($_GET['correo']) AND isset($_GET['hash']) && !empty($_GET['hash'])){ 
                         $hash = $_GET['hash'];
                         $correoo = $_GET['correo'];
                         $nomm = $_GET['nombre'];
                         $sql = "SELECT `correo`, `hash` FROM Formulario1 WHERE `correo` = '$correoo' AND `hash`='$hash';";
                         $result = mysqli_query($db, $sql); 

                            if(mysqli_num_rows($result) == 1)


                                {?>


<body id="page-top" class="mailResponse">
<!-- Navigation -->     

                                <div class="container whiteBg">
                                    <div class="intro-text">
                                        <div class="col-xs-12">
                                            <form id="f3" class="infoForm row">
                                                <h2><b><?php echo $nomm ?></b>, GRACIAS POR TU INTERÉS</h2>
                                                <p class="textResponse">Proporciónanos los siguientes datos para sugerirte una membresía a tu medida</p>
                                                <input name="f3" value="form2" type="text" hidden>
                                                <div class="col-sm-4">
                                                    <input type="text" name="uno" value ="<?php echo $correoo; ?>"  readonly class="form-control" placeholder="EMAIL">
                                                </div>
                                            
                                                <div class="col-sm-4">
                                                    <input name="dos" class="form-control" placeholder="CIUDAD">
                                                    
                                                </div>
                                                <div class="col-sm-2">
                                                    <input name="tres" class="form-control" placeholder="Numero Telefónico">
                                                        
                                                   
                                                </div>
                                                <div class="col-sm-2">
                                                    <input name="cuatro" class="form-control" placeholder="¿Tienes conocimiento del sector inmobiliario?">
                                                        
                                                   
                                                </div>
                                                <div class="col-sm-2">
                                                    <input name="cinco" class="form-control" placeholder="¿Cuál es la principal razón por la que estás interesado en el negocio inmobiliario?">
                                                        
                                                   
                                                </div>
                                               <div class="col-sm-2">
                                                    <input name="seis" class="form-control" placeholder="¿Cuál es tu objetivo de ingresos mensuales con la comercialización de inmuebles?">
                                                        
                                                   
                                                </div>
                                                <div class="col-sm-2">
                                                    <input name="siete" class="form-control" placeholder="¿Cuál crees que es el MAYOR obstáculo que ha impedido que aument​es​ rápidamente tus ingresos?">
                                                        
                                                   
                                                </div>
                                                <div class="col-sm-2">
                                                    <input name="ocho" class="form-control" placeholder="¿Cuál es la razón principal por la que estás interesado en incursionar en bienes raíces?">
                                                        
                                                   
                                                </div>
                                                 <div class="col-sm-2">
                                                    <input name="nueve" class="form-control" placeholder="Si alguien te aconsejara invertir $700 dólares en un sistema probado para triplicar tus ingresos por medio de los bienes raíces, tú:">
                                                        
                                                   
                                                </div>
                                                

                                                <div class="col-xs-12 text-center">
                                                    <button class="submQual" type="submit" value="ENVIAR">ENVIAR</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                           
                                    <?php }  } else{ ?>
                                    <body id="page-top" class="index errorPg">

                                    
                                    <div class="container floatBg">
                                            <div class="intro-text">
                                                <div class="col-xs-12">
                                                    <div class="row">
                                                        <h2>LO SENTIMOS, <b>NO TIENES ACCESO A ESTA PAGINA</b></h2>
                                                        <p class="textResponse">Inténtalo de nuevo, o regresa a la <a href="/exitoInmobiliario/">página principal</a></p>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php } ?>




            <div id="AjaxAct"></div>
            <footer class="f2foot">
                <div class="container-fluid">
                    <div class="row">
                        
                        <div class="col-xs-9 text-right">
                            <ul class="list-inline">
                                <li><a href="/#beneficios">BENEFICIOS</a></li>
                                <li><a href="/#funciona">CÓMO FUNCIONA</a></li>
                                <li><a href="/#testimonios">TESTIMONIOS</a></li>
                                <li><a href="/#contacto">CONTACTO</a></li>
                                <li><a href="/faq">FAQ</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>

            <!-- Portfolio Modals -->
            <!-- Use the modals below to showcase details about your portfolio projects! -->

            <!-- jQuery -->
            <script src="js/jquery.js"></script>
            <script type="text/javascript">
                 $(document).click(function (event) {
                  var clickover = $(event.target);
                  var $navbar = $(".navbar-collapse");               
                  var _opened = $navbar.hasClass("in");
                  if (_opened === true && !clickover.hasClass("navbar-toggle")) {      
                      $navbar.collapse('hide');
                  }
              });
             </script>

            <!-- Bootstrap Core JavaScript -->
            <script src="js/bootstrap.min.js"></script>

            <!-- Plugin JavaScript -->
            <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
            <script src="js/classie.js"></script>
            <script src="js/cbpAnimatedHeader.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>       
            <!-- Contact Form JavaScript -->
            <script src="js/jqBootstrapValidation.js"></script>
            <script src="js/contact_me.js"></script>

            <!-- Custom Theme JavaScript -->
            <script src="js/agency.js"></script>
            <!-- Formulario -->
            <script>
                 $(function(){
                    var form = $('form#f3');
                    form.submit(function(e){
                        e.preventDefault();
                        dataString = form.serialize();

                        $.ajax({
                            type:'POST',
                            url:'server/Formulario3.php',
                            data: dataString,
                            // beforeSend: function(){
                            //     swal({   title: "Procesando",   
                            //              text: "Estamos validando tus datos...", 
                            //              showConfirmButton: false });
                            // },
                            success:function(data){
                                $('#AjaxAct').replaceWith(data);
                            },
                            complete:function(){

                            }
                        });
                        return false;
                    })
                }) ;
     </script>

        </body>

        </html>


	

 