<?php

if($_POST){

    $email_from = "hola@norislotis.com";
    $email_to = "norislotis@hotmail.com";
    $email_subject = "Contacto desde norislotis.com";
    $cursos  = 'Ninguno';
    $terapias  = 'Ninguna';
    $nombre = "";
    $email = "";
    $mensaje = "";
    $cuerpo ="";
    
    ini_set("sendmail_from", $email_from);

    if(isset($_POST['nombre'])){
        $nombre = filter_var($_POST['nombre'], FILTER_SANITIZE_STRING);
    }
    
    if(isset($_POST['mensaje'])) {
        $mensaje = htmlspecialchars($_POST['mensaje']);
    }
    
    if(isset($_POST['cursos']) && is_array($_POST['cursos']) && count($_POST['cursos']) > 0){
        $cursos = implode(', ', $_POST['cursos']);
    }
    
    if(isset($_POST['terapias']) && is_array($_POST['terapias']) && count($_POST['terapias']) > 0){
        $terapias = implode(', ', $_POST['terapias']);
    }    
    
    if(isset($_POST['email'])) {
        $email = str_replace(array("\r", "\n", "%0a", "%0d"), '', $_POST['email']);
        $email = filter_var($email, FILTER_VALIDATE_EMAIL);
    }
    $cuerpo .= "<p>" . 'Nombre: ' . $nombre . "</p>";
    $cuerpo .= "<p>" . 'Email: ' . $email . "</p>";
    $cuerpo .= "<p>" . 'Mensaje escrito: ' . $mensaje . "</p>";
    $cuerpo .= "<p>" . 'Cursos seleccionados: ' . $cursos . "</p>";
    $cuerpo .= "<p>" . 'Terapias seleccionadas: ' . $terapias . "</p>";

    $headers = 'MIME-Version: 1.0' . "\n"
    .'Content-type: text/html; charset=utf-8' . "\n"
    .'From: ' . $email_from . "\n";

    

    if(mail($email_to,$email_subject,$cuerpo,$headers)){
        echo "<p>¡Gracias por contactarme, " . $nombre ."!</p>";
        echo "<p>En breve me comunicaré con vos mediante la vía de contacto que hayas especificado.</p>";
        echo '<p><br></p>';
        echo '<p>Volver al <a href="index.html">INICIO</a> .</p>';
    } else{
        echo '<p>UPS... Hubo un error en el evío del formulario.</p>';
        echo '<p>¿Preferís enviarme un email?</p>';
        echo '<p>La dirección es <a href="mailto:norislotis@hotmail.com">norislotis@hotmail.com</a> .</p>';
        echo '<p><br></p>';
        echo '<p>Volver al <a href="index.html">INICIO</a> .</p>';

    }
}
else{
    echo '<p>Mmmm... Algo falló.</p>';
    echo '<p>¿Preferís enviarme un email?</p>';
    echo '<p>La dirección es <a href="mailto:norislotis@hotmail.com">norislotis@hotmail.com</a> .</p>';
    echo '<p><br></p>';
    echo '<p>Volver al <a href="index.html">INICIO</a> .</p>';

}

?>