<?php

require 'connectdb.php';
/*
require 'phpmailer/PHPMailerAutoload.php';
require 'phpmailer/class.pop3.php';
*/


/*

	function enviaMail($email,$nombre,$mensaje){
		//Template User general
		$templateUser = file_get_contents('thankyousugerencias.html');
		//Template Admin
		$templateAdmin = file_get_contents('NuevaSugerencia.html');
		$templateAdmin = str_replace('%nombre%', $nombre,$templateAdmin);
		$templateAdmin = str_replace('%email%', $email,$templateAdmin);
		$templateAdmin = str_replace('%mensaje%', $mensaje,$templateAdmin);




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
	   

*/

function  checkmailfirmas($corre){

if(preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i",$corre))
{
return true;
}
else{
return false;
}
}



if(isset($_POST['nomb']) && !empty($_POST['nomb']) AND
  isset($_POST['corr']) && !empty($_POST['corr'])) 
{	

$nombb = mysqli_real_escape_string($db,$_POST['nomb']);
$corre = mysqli_real_escape_string($db,$_POST['corr']);
$longno = strlen ($nombb);


if(checkmailfirmas($corre)){
    if(!is_numeric($nombb))
    {
    	if($longno > 3)
{



				$sql="INSERT INTO f2(`id`, `nombre`,`correo`) VALUES
				('','$nombb','$corre')";
			    $saveDB = mysqli_query($db, $sql);
				if($saveDB){
							//enviaMail($correoo,$nomm);
							echo "<div id='AjaxAct'><script>document.getElementById('f1').reset(); </script> 
												<script>sweetAlert({title:'¡Gracias!',text:'Datos guardados con éxito', confirmButtonColor:'#19A796' ,type:'success'}); </script></div>";
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
							 	<script>sweetAlert({title:'Error',text:'Error mail invalido',confirmButtonColor:'#F06060',type:'error'}); </script></div>";
	 }
}
		
else{
	echo "<div id='AjaxAct'>
	<script>sweetAlert({title:'Error',text:'Datos incompletos',confirmButtonColor:'#F06060',type:'error'});</script></div>";
}

		

		?>