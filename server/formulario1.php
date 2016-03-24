<?php
require 'connectdb.php';
require_once 'mandrill-api-php/src/Mandrill.php'; 

function enviaMandrill($name,$email,$hash)
{


$email= "testergena@gmail.com";
$company = "Host propio"; 
$name ="genaro";

try {
    
    $mandrill = new Mandrill('yZffh4bShKZqa5ujZPo05A');
    $template_name = 'linkmail.html';
    $template_content = array(
        array(
            'name' => 'company',
            'content' => $company
        ),
        array(
            'name' => 'firstname',
            'content' => $name
        )
    );
    $message = array(
        'html' => '<p>Example HTML content</p>',
        'text' => 'Example text content',
        'subject' => 'test email subject',
        'from_email' => 'erik@concepthaus.mx',
        'from_name' => 'Erik Rodriguez',
        'to' => array(
            array(
                'email' => $email,
                'name' => 'Genaro',
                'type' => 'to'
            )
        ),
        'headers' => array('Reply-To' => 'message.reply@example.com'),
        'important' => false,
        'track_opens' => null,
        'track_clicks' => null,
        'auto_text' => null,
        'auto_html' => null,
        'inline_css' => null,
        'url_strip_qs' => null,
        'preserve_recipients' => null,
        'view_content_link' => null,
        'bcc_address' => 'message.bcc_address@example.com',
        'tracking_domain' => null,
        'signing_domain' => null,
        'return_path_domain' => null,
        'merge' => true,
        'merge_language' => 'mailchimp',
        'global_merge_vars' => array(
            array(
                'name' => 'merge1',
                'content' => 'merge1 content'
            )
        ),
        'merge_vars' => array(
            array(
                'rcpt' => 'recipient.email@example.com',
                'vars' => array(
                    array(
                        'name' => 'merge2',
                        'content' => 'merge2 content'
                    )
                )
            )
        ),
        'tags' => array('password-resets'),
        'subaccount' => 'customer-123',
        'google_analytics_domains' => array('example.com'),
        'google_analytics_campaign' => 'message.from_email@example.com',
        'metadata' => array('website' => 'www.example.com'),
        'recipient_metadata' => array(
            array(
                'rcpt' => 'recipient.email@example.com',
                'values' => array('user_id' => 123456)
            )
        ),
        'attachments' => array(
            array(
                'type' => 'text/plain',
                'name' => 'myfile.txt',
                'content' => 'ZXhhbXBsZSBmaWxl'
            )
        ),
        'images' => array(
            array(
                'type' => 'image/png',
                'name' => 'IMAGECID',
                'content' => 'ZXhhbXBsZSBmaWxl'
            )
        )
    );
    $async = false;
    $ip_pool = 'Main Pool';
    $send_at = 'example send_at';
    $result = $mandrill->messages->sendTemplate($template_name, $template_content, $message, $async, $ip_pool);
    print_r($result);
    /*
    Array
    (
        [0] => Array
            (
                [email] => recipient.email@example.com
                [status] => sent
                [reject_reason] => hard-bounce
                [_id] => abc123abc123abc123abc123abc123
            )
    
    )
    */
} catch(Mandrill_Error $e) {
    // Mandrill errors are thrown as exceptions
    echo 'A mandrill error occurred: ' . get_class($e) . ' - ' . $e->getMessage();
    // A mandrill error occurred: Mandrill_Unknown_Subaccount - No subaccount exists with the id 'customer-123'
    throw $e;
}

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
							//enviaMail($correoo,$nomm);
							echo "<div id='AjaxAct'><script>document.getElementById('f1').reset(); </script> 
							<script>document.getElementById('f2').reset(); </script> 
												<script>swal({   title: 'Datos Guardados con exito',   text: 'Da click en el boton OK para ver el video!',   type: 'success',   showCancelButton: true,   confirmButtonColor: '#a3db63',   confirmButtonText: 'OK',   closeOnConfirm: false},function(){
													window.open('http://192.168.33.10/exitoInmobiliario/cuestionarioExito/respuesta.php?correo=$correoo&hash=$hash&nombre=$nomm','_blank' ); 
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
