
<?php

require 'connectdb.php';







	
if (isset($_POST['uno']) && !empty($_POST['uno']) AND
				   isset($_POST['dos']) && !empty($_POST['dos']) AND
				   isset($_POST['tres']) && !empty($_POST['tres']) AND
				   isset($_POST['cuatro']) && !empty($_POST['cuatro']) AND
				   isset($_POST['cinco']) && !empty($_POST['cinco']) AND
				   isset($_POST['seis']) && !empty($_POST['seis']) AND
				   isset($_POST['siete']) && !empty($_POST['siete']) AND
				   isset($_POST['ocho']) && !empty($_POST['ocho']) AND
	               isset($_POST['nueve']) && !empty($_POST['nueve'])) 
{	

$correoo = mysqli_real_escape_string($db,$_POST['uno']);
$dos = mysqli_real_escape_string($db,$_POST['dos']);
$tres = mysqli_real_escape_string($db,$_POST['tres']);
$cuatro = mysqli_real_escape_string($db,$_POST['cuatro']);
$cinco = mysqli_real_escape_string($db,$_POST['cinco']);
$seis = mysqli_real_escape_string($db,$_POST['seis']);
$siete = mysqli_real_escape_string($db,$_POST['siete']);
$ocho = mysqli_real_escape_string($db,$_POST['ocho']);
$nueve = mysqli_real_escape_string($db,$_POST['nueve']);







		$sql1 = "INSERT INTO Cuestionario (`id`,`uno`,`dos`,`tres`,`cuatro`,`cinco`,`seis`,`siete`, `ocho`, `nueve`) 
			VALUES((SELECT `id` FROM Formulario WHERE `correo` = '$correoo'),'$correoo','$dos','$tres','$cuatro' ,'$cinco','$seis','$siete','$ocho','$nueve');";

		$result = mysqli_query($db, $sql1);
					
						if($result){
	
							echo "<div id='AjaxAct'><script>sweetAlert('¡Gracias!', 'Hemos recibido correctamente tus datos', 'success'); $('form#cuestion input, form#cuestion select').attr('disabled','disabled'); thankYou(); </script></div>";
						}else{
							//Error datos duplicados
							echo "<div id='AjaxAct'><script>sweetAlert('Error', 'Ya hemos guardado tus datos', 'error'); </script></div>";
							
						}

				}

				else{
						//Error datos incompletos
					echo "<div id='AjaxAct'><script>sweetAlert('Error', 'Los datos están incompletos', 'error'); </script></div>";
				}


	