<?php
require 'connectdb.php';

require 'phpmailer/PHPMailerAutoload.php';


    function enviaMail($nombre,$email,$hash){

        //Template User Formulario
        $templateUser = file_get_contents('MailUserForm.html');
        $templateUser = str_replace('%name%', $nombre,$templateUser);
        $templateUser = str_replace('%email%', $email,$templateUser);
        $templateUser = str_replace('%hash%', $hash,$templateUser);

       
        //Template Admin
        $templateAdmin = file_get_contents('MailAdminForm.html');
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
        $mail2->Username = 'franquiciasquality@gmail.com'; //se envia mail  a user desde este (solo se envia)
        $mail2->Password = 'franquicias135';//se envia mail  a user desde este (solo se envia)
        $mail2->Port = 587;
        //$mail2->setFrom('cesar@cesarbecker.mx','César Becker');
        //$mail2->addAddress('sergio@concepthaus.mx','Sergio Ramos');  
        //$mail2->addAddress('cesar@cesarbecker.mx','César Becker');
        $mail2->setFrom('franquiciasquality@gmail.com','Franquicias');  //se envia mail  a user desde este (solo se envia)
        $mail2->addAddress('franquiciasquality@gmail.com','Franquicias'); //aqui llega el mail para el administrador
        $mail2->isHTML(true);
        $mail2->CharSet = 'UTF-8';
        $mail2->Subject = 'Nuevo cliente'; 
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
        $mail->Username = 'franquiciasquality@gmail.com';//se envia mail  a user desde este (solo se envia)
        $mail->Password = 'franquicias135';//se envia mail  a user desde este (solo se envia)
        $mail->Port = 587;
        //$mail->setFrom('cesar@cesarbecker.mx','César Becker');  
        $mail->setFrom('franquiciasquality@gmail.com','Franquicias'); //se envia mail  a user desde este (solo se envia) 
        $mail->addAddress($email,$nombre);
        $mail->isHTML(true);
        $mail->CharSet = 'UTF-8';
        $mail->Subject = 'Gracias por tu apoyo'; 
        $mail->Body = $templateUser;
        $mail->send();

    
        }
       


function  checkmailf1($correoo){
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
$hash = sha1(rand(0,1000));
$longnom = strlen ($nomm);
$query = "SELECT `correo` FROM Formulario WHERE `correo` = '$correoo';";	
$result = mysqli_query($db, $query); 



if(checkmailf1($correoo)){
     

if(mysqli_num_rows($result) == 0){

    if(!is_numeric($nomm))
    {
    	if($longnom > 3)
{
	




				$sql="INSERT INTO Formulario(`id`, `nombre`,`correo`,`hash`,`status`) VALUES
				('','$nomm','$correoo','$hash','0')";
			    $saveDB = mysqli_query($db, $sql);
				if($saveDB){

                    enviaMail($nomm,$correoo,$hash);
							//enviaMail($correoo,$nomm);
							echo "<div id='AjaxAct'><script>document.getElementById('f1').reset(); </script> 
							<script>document.getElementById('f2').reset(); </script> 
												<script>swal({   title: 'Datos guardados con éxito, te hemos enviado un correo con el link al cuestionario y video.',   text: '¡Da click en el boton OK para ver el video!',   type: 'success',   showCancelButton: true,   confirmButtonColor: '#a3db63',   confirmButtonText: 'OK',   closeOnConfirm: true},function(){
													window.open('/exitoInmobiliario/cuestionario/respuesta.php?correo=$correoo&hash=$hash&nombre=$nomm','_blank' ); 
												}); </script></div>"; //En este script de swal incrustamos otro de jquery para direccionar a otra pagina.
                                               

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
							 	<script>sweetAlert({title:'Error',text:'Este e-mail ya existe en nuestra base de datos',confirmButtonColor:'#F06060',type:'error'}); </script></div>";
							 	echo   mysqli_error($db);

	 }

	

	}

else{

	    echo "<div id='AjaxAct'> 
							 	<script>sweetAlert({title:'Error',text:'Este e-mail es incorrecto',confirmButtonColor:'#F06060',type:'error'}); </script></div>";
	 }
}

		
else{
	echo "<div id='AjaxAct'>
	<script>sweetAlert({title:'Error',text:'Datos incompletos',confirmButtonColor:'#F06060',type:'error'});</script></div>";
}


		

		?>
