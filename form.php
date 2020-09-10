<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <title>Norislotis Club | SerFelizEsCienciaYArte</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <link rel="stylesheet" href="css/styles.css">
</head>

<body class="d-flex flex-column justify-content-between min-vh-100">

  <header class="fixed-top d-flex flex-column">
    <nav
      class="navbar navbar-expand-md navbar-light d-flex flex-row-reverse flex-md-row justify-content-between px-5 py-0 shadow-none">
      <a href="index.html" class="navbar-brand d-none d-md-inline"> <img src="img/logo.png" alt="Norislotis Logo"></a>
      <a href="index.html" class="navbar-brand d-inline d-md-none"> <img src="img/isologo.png"
          alt="Norislotis Logo"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar"
        aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars text-info"></i>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbar">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.html">Inicio </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="cursos.html">Cursos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="terapias.html">Terapias</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="historias.html">Historias</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="sobremi.html">Sobre mí</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="contacto.html">Contacto <span class="sr-only">(actual)</span></a>
          </li>
      </div>
    </nav>
    <div class="progress mt-auto">
      <div class="progress-bar" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
    </div>

  </header>

  <main id="form" class="d-flex flex-column align-items-center justify-content-around flex-grow-1">
    <h1 class="d-none d-md-block text-primario"><img height="150px" src="img/logo.png" alt="Norislotis Logo"></h1>
    <h2 class="d-none d-md-block text-terciario font-italic font-weight-light">"SerFelizEsCienciaYArte"</h2>
    <section class="row justify-content-center">



 

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
        echo "<p>¡Gracias por contactarme, " . $nombre ."! </p>";
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
            </section>
        </main>

        <footer class="footer container text-center align-items-center">
        <div class="row justify-content-between align-items-center py-2">
            <div id="navbar-social" class="col-12 col-lg-4 d-flex justify-content-around">
            <a target="_blank" rel="nofollow noopener noreferrer" href="https://www.facebook.com/NorisLotisHathaYoga/"><i class="fab fa-facebook-square text-primary"></i></a>
            <a target="_blank" rel="nofollow noopener noreferrer" href="https://www.instagram.com/norislotis/"><i class="fab fa-instagram-square text-info"></i></a>
            <a target="_blank" rel="nofollow noopener noreferrer" href="https://wa.me/+5491162550039?text=Hola,%20Nora.%20Necesito%20info%20sobre%20algunos%20de%20tus%20servicios.%20Mi%20nombre%20es%20"><i class="fab fa-whatsapp-square text-success"></i></a>
            <a target="_blank" rel="nofollow noopener noreferrer" href="https://www.twitter.com/norislotis/"><i class="fab fa-twitter-square text-primary"></i></a>
            </div>
            <span class="mt-2 mt-md-0 col-5 col-lg-4">Norislotis Club<br class="d-inline d-sm-none"><span
                class="d-none d-md-inline"> | Copyright</span> &copy; 2020 </span>
            <span class="my-2 my-md-0 col-5 col-lg-4 font-weight-light">Hecho <span class="d-none d-md-inline">con <i
                class="fas fa-heart text-danger"></i> </span>por <a target="_blank" rel="nofollow noopener noreferrer"
                href="http://dreamcatcher.com.ar">Dreamcatcher</a> </span>
        </div>
        </footer>

      <script src="js/fontawesome.min.js"></script>
      <script src="js/jquery-3.5.1.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/main.js"></script>
    </body>

</html>