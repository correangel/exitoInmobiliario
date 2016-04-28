<?php
require 'connectdb.php';
require 'phpmailer/PHPMailerAutoload.php';


    function enviaMail($nombre,$email,$hash){
        //Template User Cuestionario
        $templateUser = file_get_contents('MailUserCuestion.html');
        $templateUser = str_replace('%name%', $nombre,$templateUser);
        $templateUser = str_replace('%email%', $email,$templateUser);
        $templateUser = str_replace('%hash%', $hash,$templateUser);

       
        //Template Admin
        $templateAdmin = file_get_contents('MailAdminCuestion.html');
        $templateAdmin = str_replace('%name%', $nombre,$templateAdmin);
        $templateAdmin = str_replace('%email%', $email,$templateAdmin);
        $templateAdmin = str_replace('%hash%', $hash,$templateAdmin);

       

        //Envia Mail Admin
        $mail2 = new PHPMailer;
        //$mail2->SMTPDebug = 3;
        $mail2->isSMTP();
        $mail2->Host = 'smtp.gmail.com';
        $mail2->SMTPAuth = true;
        $mail2->SMTPSecure = "tls";
        //$mail2->Username = 'erik@concepthaus.mx'; //Mail para pruebas
        //$mail2->Password = '';
        $mail2->Username = 'franquiciasquality@gmail.com'; //se envia mail  a user desde este (solo se envia)
        $mail2->Password = 'franquicias135';//se envia mail  a user desde este (solo se envia)
        $mail2->Port = 587;
        $mail2->setFrom('franquiciasquality@gmail.com','Exito Inmobiliario');  //se envia mail  a user desde este (solo se envia)
        //$mail2->setFrom('erik@concepthaus.mx','Erik Rodriguez'); //Pruebas se envía de este
        $mail2->addAddress('franquiciasquality@gmail.com','Exito Inmobiliario'); //aqui llega el mail para el administrador
        //$mail2->addAddress('erik@concepthaus.mx','Erik Rodriguez');// Aquí llega el correo en pruebas.
        $mail2->isHTML(true);
        $mail2->CharSet = 'UTF-8';
        $mail2->Subject = 'Nuevo cliente'; 
        $mail2->Body = $templateAdmin;
        $mail2->send();

        

        //Envia Mail Cliente
        $mail2 = new PHPMailer;
        //$mail->SMTPDebug = 3;
        $mail2->isSMTP();
        $mail2->Host = 'smtp.gmail.com';
        $mail2->SMTPAuth = true;
        $mail2->SMTPSecure = "tls";
        //$mail2->Username = 'erik@concepthaus.mx'; //Mail para pruebas
        //$mail2->Password = '';
        $mail->Username = 'franquiciasquality@gmail.com';//se envia mail  a user desde este (solo se envia)
        $mail->Password = 'franquicias135';//se envia mail  a user desde este (solo se envia)
        $mail2->Port = 587;
        $mail->setFrom('franquiciasquality@gmail.com','Exito Inmobiliario'); //se envia mail  a user desde este (solo se envia) 
        //$mail2->setFrom('erik@concepthaus.mx','Erik Rodriguez'); //Pruebas se envía de este
        $mail2->addAddress($email,$nombre);
        //$mail2->addAddress('erik@concepthaus.mx','Erik Rodriguez');// Aquí llega el correo en pruebas.
        $mail2->isHTML(true);
        $mail2->CharSet = 'UTF-8';
        $mail2->Subject = 'Gracias por tu apoyo'; 
        $mail2->Body = $templateUser;
        $mail2->send();

    
        }






	
if (isset($_POST['mail']) && !empty($_POST['mail']) AND
				   isset($_POST['nom']) && !empty($_POST['nom']) AND
				   isset($_POST['ciudaduser']) && !empty($_POST['ciudaduser']) AND
				   isset($_POST['tel']) && !empty($_POST['tel']) AND
				   isset($_POST['conocimientoInmobil']) && !empty($_POST['conocimientoInmobil']) AND
				   isset($_POST['PrincipalRazon']) && !empty($_POST['PrincipalRazon']) AND
				   isset($_POST['ObjIngresos']) && !empty($_POST['ObjIngresos']) AND
				   isset($_POST['MayorObstaculo']) && !empty($_POST['MayorObstaculo']) AND
	               isset($_POST['OpcionRespuesta'])   && !empty($_POST ['OpcionRespuesta']))
{	

$correoo = mysqli_real_escape_string($db,$_POST['mail']);
$dos = mysqli_real_escape_string($db,$_POST['nom']);
$tres = mysqli_real_escape_string($db,$_POST['ciudaduser']);
$cuatro = mysqli_real_escape_string($db,$_POST['tel']);
$cinco = mysqli_real_escape_string($db,$_POST['conocimientoInmobil']);
$seis = mysqli_real_escape_string($db,$_POST['PrincipalRazon']);
$siete = mysqli_real_escape_string($db,$_POST['ObjIngresos']);
$ocho = mysqli_real_escape_string($db,$_POST['MayorObstaculo']);
$diez = mysqli_real_escape_string($db,$_POST['OpcionRespuesta']);
$hash = sha1(rand(0,1000)); //En la base de datos esta como varchar y 40 caracteres.




		$sql1 = "INSERT INTO Cuestionario (`id`,`mail`,`nom`,`ciudaduser`,`tel`,`conocimientoInmobil`,`PrincipalRazon`,`ObjIngresos`, `MayorObstaculo`,`OpcionRespuesta`,`status`,`hash`) 
			VALUES((SELECT `id` FROM Formulario WHERE `correo` = '$correoo'),'$correoo','$dos','$tres','$cuatro' ,'$cinco','$seis','$siete','$ocho','$diez','1','$hash');";

		$result = mysqli_query($db, $sql1);
					
						if($result){
							enviaMail($dos,$correoo,$hash);
							echo "<div id='AjaxAct'><script>document.getElementById('cuestion').reset(); </script> 
							
												<script>swal({   title: 'Datos guardados con éxito,te hemos enviado un correo con el link al temario.',   text: '¡Da click en el boton OK para ver el temario!',   type: 'success',   showCancelButton: true,   confirmButtonColor: '#a3db63',   confirmButtonText: 'OK',   closeOnConfirm: true}, function(){
													window.open('/exitoinm/temario/respuesta2.php?correo=$correoo&hash=$hash','_blank' ); 
												}); </script></div>";
						}else{
							//Error datos duplicados
							echo "<div id='AjaxAct'>
                                            <script>sweetAlert({title:'Error',text:'Ya hemos guardado tus datos',confirmButtonColor:'#F06060' ,type:'error'}); </script></div>";
							
						}

				}

				else{
						//Error datos incompletos
					echo "<div id='AjaxAct'>
                                            <script>sweetAlert({title:'Error',text:'Los datos estan incompletos',confirmButtonColor:'#F06060' ,type:'error'}); </script></div>";
				}


	