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
        $mail2->Username = 'erik@concepthaus.mx'; //se envia mail  a user desde este (solo se envia)
        $mail2->Password = 'programacion2016';//se envia mail  a user desde este (solo se envia)
        $mail2->Port = 587;
        //$mail2->setFrom('cesar@cesarbecker.mx','César Becker');
        //$mail2->addAddress('sergio@concepthaus.mx','Sergio Ramos');  
        //$mail2->addAddress('cesar@cesarbecker.mx','César Becker');
        $mail2->setFrom('erik@concepthaus.mx','Erik Rodriguez');  //se envia mail  a user desde este (solo se envia)
        $mail2->addAddress('testergena@gmail.com','Erik Rodriguez'); //aqui llega el mail para el administrador
        $mail2->isHTML(true);
        $mail2->CharSet = 'UTF-8';
        $mail2->Subject = 'Nueva sugerencia'; 
        $mail2->Body = $templateAdmin;
        $mail2->send();

        

        //Envia Mail Cliente
        $mail = new PHPMailer;
        //$mail->SMTPDebug = 3;
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = "tls";
        //$mail->Username = 'cesar@cesarbecker.mx';
        //$mail->Password = 'Constituyentemx2016';
        $mail->Username = 'erik@concepthaus.mx';//se envia mail  a user desde este (solo se envia)
        $mail->Password = 'programacion2016';//se envia mail  a user desde este (solo se envia)
        $mail->Port = 587;
        //$mail->setFrom('cesar@cesarbecker.mx','César Becker');  
        $mail->setFrom('erik@concepthaus.mx','Erik Rodriguez'); //se envia mail  a user desde este (solo se envia) 
        $mail->addAddress($email,$nombre);
        $mail->isHTML(true);
        $mail->CharSet = 'UTF-8';
        $mail->Subject = 'Gracias por tu apoyo'; 
        $mail->Body = $templateUser;
        $mail->send();

    
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

//$('form#f2 input, form#f2 select').attr('disabled','disabled'); thankYou();
$hash = sha1(rand(0,1000));




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
							echo "<div id='AjaxAct'><script>sweetAlert('Error', 'Ya hemos guardado tus datos', 'error'); </script></div>";
							
						}

				}

				else{
						//Error datos incompletos
					echo "<div id='AjaxAct'><script>sweetAlert('Error', 'Los datos están incompletos', 'error'); </script></div>";
				}


	