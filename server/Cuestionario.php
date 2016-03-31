<?php
require 'connectdb.php';
require 'phpmailer/PHPMailerAutoload.php';


    function enviaMail($nombre,$email,$hash){
        //Template User general
        $templateUser = file_get_contents('thankyouCuestion.html');
        $templateUser = str_replace('%name%', $nombre,$templateUser);
        $templateUser = str_replace('%email%', $email,$templateUser);
        $templateUser = str_replace('%hash%', $hash,$templateUser);

       
        //Template Admin
        $templateAdmin = file_get_contents('nuevaCuestion.html');
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
        //$mail2->Username = 'cesar@cesarbecker.mx';
        //$mail2->Password = 'Constituyentemx2016';
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






	
if (isset($_POST['uno']) && !empty($_POST['uno']) AND
				   isset($_POST['dos']) && !empty($_POST['dos']) AND
				   isset($_POST['tres']) && !empty($_POST['tres']) AND
				   isset($_POST['cuatro']) && !empty($_POST['cuatro']) AND
				   isset($_POST['cinco']) && !empty($_POST['cinco']) AND
				   isset($_POST['seis']) && !empty($_POST['seis']) AND
				   isset($_POST['siete']) && !empty($_POST['siete']) AND
				   isset($_POST['ocho']) && !empty($_POST['ocho']) AND
	               isset($_POST['diez'])   && !empty($_POST ['diez']))
{	

$correoo = mysqli_real_escape_string($db,$_POST['uno']);
$dos = mysqli_real_escape_string($db,$_POST['dos']);
$tres = mysqli_real_escape_string($db,$_POST['tres']);
$cuatro = mysqli_real_escape_string($db,$_POST['cuatro']);
$cinco = mysqli_real_escape_string($db,$_POST['cinco']);
$seis = mysqli_real_escape_string($db,$_POST['seis']);
$siete = mysqli_real_escape_string($db,$_POST['siete']);
$ocho = mysqli_real_escape_string($db,$_POST['ocho']);
$diez = mysqli_real_escape_string($db,$_POST['diez']);

//$('form#f2 input, form#f2 select').attr('disabled','disabled'); thankYou();
$hash = sha1(rand(0,1000));




		$sql1 = "INSERT INTO Cuestionario (`id`,`uno`,`dos`,`tres`,`cuatro`,`cinco`,`seis`,`siete`, `ocho`,`diez`,`status`,`hash`) 
			VALUES((SELECT `id` FROM Formulario WHERE `correo` = '$correoo'),'$correoo','$dos','$tres','$cuatro' ,'$cinco','$seis','$siete','$ocho','$diez','1','$hash');";

		$result = mysqli_query($db, $sql1);
					
						if($result){
							enviaMail($dos,$correoo,$hash);
	
							echo "<div id='AjaxAct'><script>document.getElementById('cuestion').reset(); </script> 
							
												<script>swal({   title: 'Datos guardados con éxito,te hemos enviado un correo con el link al temario.',   text: '¡Da click en el boton OK para ver el temario!',   type: 'success',   showCancelButton: true,   confirmButtonColor: '#a3db63',   confirmButtonText: 'OK',   closeOnConfirm: true}, function(){
													window.open('http://192.168.33.10/exitoInmobiliario/temario/respuesta2.php?correo=$correoo&hash=$hash','_blank' ); 
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


	