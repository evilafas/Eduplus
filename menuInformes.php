<?php include('db/db.php'); ?>
<?php
// Iniciar sesión
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EDUPLUS</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
    integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    integrity="sha512-LXdgBOZ1Q5CgGjgzE8x9M0I+9DOtJlQ5/5LTMZ1QaUDrIWsdoPjKdJ8tbXyFxxXzBOoLjEhzqfJNQOByFxFbLA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="shortcut icon" href="icon.png">
  <link rel="stylesheet" href="estilos\menuinformes.css">
</head>
<body>
<header>
  <h1 class="logo">EDUPLUS</h1>
  <div class="submenu">
  <div class="clases" id="clases">Clases</div>
  <div class="estudiantes" id="estudiantes">Estudiantes</div>
  <div class="recursos" id="recursos">Recursos</div>
  </div>
</header>

  <div class="contenido" id="contClases"></div>
  <div class="contenido" id="contEstudiantes"></div>
  <div class="contenido" id="contRecursos"></div>
  
</body>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"
  integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
<script src="Js/informes.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</html>