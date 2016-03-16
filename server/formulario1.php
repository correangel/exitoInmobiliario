<?php
require 'connectdb.php';
/*require 'phpmailer/PHPMailerAutoload.php';
require 'phpmailer/class.pop3.php';
*/
/*
	function enviaMail($email,$nombre,$tel){
		//Template User general
		$templateUser = file_get_contents('thankyoufirmas.html');
		//Template Admin
		$templateAdmin = file_get_contents('NuevaFirma.html');
		$templateAdmin = str_replace('%nombre%', $nombre,$templateAdmin);
		$templateAdmin = str_replace('%email%', $email,$templateAdmin);
		$templateAdmin = str_replace('%tel%', $tel,$templateAdmin);




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
		//$mail2->addAddress('firmas@cesarbecker.mx','Firmas');
		$mail2->setFrom('erik@concepthaus.mx','Erik Rodriguez');  //se envia mail  a user desde este (solo se envia)
		$mail2->addAddress('testergena@gmail.com','Erik Rodriguez'); //aqui llega el mail para el administrador
		$mail2->isHTML(true);
		$mail2->CharSet = 'UTF-8';
		$mail2->Subject = 'Nuevo voluntario';
		$mail2->Body = $templateAdmin; //template que llega al admin
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
		$mail->AddAttachment('../formato.pdf');
		$mail->isHTML(true);
		$mail->CharSet = 'UTF-8';
		$mail->Subject = 'Gracias por tu apoyo'; 
		$mail->Body = $templateUser; //template que llega al usuario
        $mail->send();

	

	    }
	    */


function  checkmailfirmas($correoo){
if(preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i",$correoo))
{
return true;
}
else{
return false;
}
}





if(isset($_POST['nombre']) && !empty($_POST['nombre']) AND
  isset($_POST['correo']) && !empty($_POST['correo'])) 
{	

$nomm = mysqli_real_escape_string($db,$_POST['nombre']);
$correoo = mysqli_real_escape_string($db,$_POST['correo']);
$longnom = strlen ($nomm);


if(checkmailfirmas($correoo)){
    if(!is_numeric($nomm))
    {
    	if($longnom > 3)
{




				$sql="INSERT INTO Formulario1(`id`, `nombre`,`correo`) VALUES
				('','$nomm','$correoo')";
			    $saveDB = mysqli_query($db, $sql);
				if($saveDB){
							//enviaMail($correoo,$nomm);
							echo "<div id='AjaxAct'><script>document.getElementById('f1').reset(); </script> 
												<script>swal({   title: 'Datos Guardados con exito',   text: 'Da click en el boton OK para ver el video!',   type: 'success',   showCancelButton: true,   confirmButtonColor: '#a3db63',   confirmButtonText: 'OK',   closeOnConfirm: false},function(){
													window.open('http://192.168.33.10/exitoInmobiliario/formulario3.html','_blank' ); 
												}); </script></div>";
			                }

			    else{

						echo "<div id='AjaxAct'>
											<script>sweetAlert({title:'Error',text:'Ocurrio un error en la base de datos',confirmButtonColor:'#F06060' ,type:'error'}); </script></div>"; 
						echo   mysqli_error($db);
				    }

}else
{
echo "<div id='AjaxAct'>
											<script>sweetAlert({title:'Error',text:'Tu nombre debe contener 4 letras como minimo',confirmButtonColor:'#F06060' ,type:'error'}); </script></div>"; 
}

}
else {
	echo "<div id='AjaxAct'>
											<script>sweetAlert({title:'Error',text:'El campo nombre debe ser texto ',confirmButtonColor:'#F06060' ,type:'error'}); </script></div>"; 
}

	

	}

else{

	    echo "<div id='AjaxAct'> 
							 	<script>sweetAlert({title:'Error',text:'Este e-mail ya está en nuestra base de datos o es incorrecto',confirmButtonColor:'#F06060',type:'error'}); </script></div>";
	 }
}
		
else{
	echo "<div id='AjaxAct'>
	<script>sweetAlert({title:'Error',text:'Datos incompletos',confirmButtonColor:'#F06060',type:'error'});</script></div>";
}


		

		?>
