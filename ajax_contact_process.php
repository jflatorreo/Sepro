<?php

$name = $_POST['name'];  //$data will contain the_id
$phone = $_POST['phone'];
$email = $_POST['email'];
$comments = $_POST['comments'];
	
$radicado = 'R' . substr(md5($_POST['comments']. time()), 0, 9);

$to=$_POST['email'];
$subject = "Recepción de comentario y/o solicitud";

$message = "Respetado(a) ".($_POST['name'])."
	<br><br>El grupo de investigación SEPRO de tiene el gusto de recibir sus comentarios y/o solicitudes.
	<br><br>Sus solicitud fué recibida con número de radicado <b>".$radicado."</b>. Uno de nuestros miembros le contactará pronto.<br><br><br><br>Cordialmente,<br><br>
        <b>Universidad Nacional de Colombia</b>
        <br>Carrera 45 No 26-85 - Edificio Antonio Nariño · Oficina 115
        <br>PBX: 316 50 00 Ext. 16642";
	
// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: Sepro Logística<sepro_fibog@unal.edu.co>' . "\r\n";      
	
        
 	    $cc="jflatorreo@unal.edu.co";
	    $mensaje = "<br><br>Radicado: <b>".$radicado."</b><br><br>Nombre: ".($_POST['name'])."<br><br>Mensaje:".$_POST['comments']."<br><br>Teléfono: ".$_POST['phone']."<br><br>Correo: ".$_POST['email'];
	           
        if(mail($cc,$subject,$mensaje,$headers)){
	    if (!mail($to,$subject,$message,$headers)) {
                echo "Ha ocurrido un error al enviar el correo de confirmación, pero sus datos han sido recibidos con número de radicado ".$radicado;
            }else echo "Sus datos han sido recibidos con número de radicación <b>".$radicado."</b>. Pronto recibirá un correo electrónico con la confirmación.";
        }else {echo "Ha ocurrido un error, reintente porfavor";}
        		

?>