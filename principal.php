<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles/principal.css"> <!-- Llamo a mi hoja de estilos-->

    <title>login</title>

    <!-- Tipografias -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=Libre+Baskerville:ital@1&family=Mulish:ital,wght@0,200..1000;1,200..1000&family=Oswald&family=Roboto+Slab:wght@400;700&family=Roboto:wght@300&display=swap" rel="stylesheet">

    

        
                                <!-- BOOSTSTRAP -->

                                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
                    
</head> 
<body>
<nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand logo-sigeflex-principal"style="color:black;" href="#">
    <img src="./imgs/logo-sigeflex.png" alt="Logo" width="80" height="40" class="">
      
      <?php
      session_start();
      // Ya no uso "$_POST" sino, que voy a usar session,
      # ya que tengo que usar las variables de la sesion.
      $nombre=$_SESSION['nom'];
      $apellido=$_SESSION['ap'];

     echo" Bienvenid@ ".$nombre." " .$apellido;



      ?>
      
    </a>
  </div>
</nav>
     


<body>