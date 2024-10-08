<?php
include("send.php");
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SOCIO</title>
  <link href="../images/logo.png" rel="icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
 
  <link rel="stylesheet" type="text/css" href="../css/socio.css">
  <link rel="stylesheet" type="text/css" href="../css/menu.css">
  <link rel="stylesheet" type="text/css" href="../css/chat.css">

  <!-------------------------------------------------------------------------------ALERTIFY-------------------------------------------------------------------------------------->
  <link rel="stylesheet" type="text/css" href="../recursos/alertify/css/alertify.min.css">
  <link rel="stylesheet" type="text/css" href="../recursos/alertify/css/themes/default.css">

</head>
<body>
  <nav class="navbar navbar-expand-md d-flex fixed-top bg-body-tertiary">
  <div class="container-fluid container-xl">
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation"><!--boton para cerrar menu movil-->
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
      <button type="button" class="close-button" data-bs-dismiss="offcanvas" aria-label="Close">
      <img src="../images/close.png"  alt="Cerrar" width="30" height="30">
      </button>
      </div>
      <div class="offcanvas-body justify-content-center"> <!-- Añadido justify-content-center aquí -->
        <ul class="navbar-nav nav-underline justify-content-center flex-grow-1 pe-3"> <!-- Cambiado justify-content-end a justify-content-center -->
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="../index.html">INICIO</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="us.html">NOSOTROS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="services.html">SERVICIOS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="portafolio.html">PROYECTOS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="precio.html">PRECIOS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.html">CONTACTO</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="socio.php">ASÓCIATE</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  </nav>

  <br>
  <br>
  <br>
  <h1 class="titulo">ASÓCIATE</h1>
  <p class="des" style="color: purple; text-align: center; font-style: italic;">"Si eres profesional del desarrollo de software/videojuegos, diseño o arte digital."</p>
  <h6 class="subtitulo">¿Quieres ser parte de nuestra cooperativa?</h6>
  <br>
  <div class="formulario">
 <form class="forms" id="contact-form" method="POST" autocomplete="off">
  <div class="input-group">

    <div class="input-container">
      <input type="text" name="name" id="name" placeholder="Nombre">
      <i class="fa-solid fa-user" ></i>
  </div>

  <div class="input-container">
      <input type="email" name="email" id="email" placeholder="Correo">
      <i class="fa-solid fa-envelope" ></i>
  </div>


<div class="input-container">
      <input type="tel" name="phone"  id="phone" placeholder="Teléfono">
      <i class="fa-solid fa-phone" ></i>
  </div>

<div class="input-container">
<a class="text-center" href="#">Terminos y condiciones</a>
</div>

<div class="buttons">
<input type="submit" class="btns" name="send" value="Enviar">
</div>
</div>
</form>
</div>
  <br>
  
   <!----------------------------------------------------------------------------CHAT------------------------------------------------------------------------------------->
 <div id="chat-icon" class="chat-icon">💬</div>
    <div class="chat-container" id="chat-container">
        <button id="close-chat-btn"></button><!--cerrar el chat-->
        <div class="chat-window" id="chat-window"></div>
        <form id="chat-form">
            <input type="text" id="message-input" placeholder="Escribe tu mensaje..." autocomplete="off">
            <button class="chat" type="submit">Enviar</button>
        </form>
    </div>


 <!----------------------------------------------------------------------------SCRIPTS------------------------------------------------------------------------------------->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../js/script.js"></script>
  <script src="../js/glitch.js"></script>
  <script src="../js/chat.js"></script>
</body>
</html>