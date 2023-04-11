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
  <link rel="stylesheet" href="estilos/menuInformes.css">
</head>

<body>
  <div class="contenedor">
    <div class="barrasup">
      <?php
      // Recuperar el valor de la variable de sesión 'username'
      $username = $_SESSION['username'];

      // Mostrar el nombre de usuario en la página
      echo '<h2 class="text">Bienvenido, ' . $username . '!</h2>';
      ?>
      <div class="clases" id="clases">Clases</div>
      <div class="estudiantes" id="estudiantes">Estudiantes</div>
      <div class="recursos" id="recursos">Recursos</div>
      <a href="indexlg.php" class="logout"><i class="fa-solid fa-right-from-bracket"></i>Cerrar Sesion</a>

    </div>

    <!-- Div Clases -->
    <div class="divClases" id="divClases">

<div id="modal" class="modal">
    <div class="modal-contenido">
      <span class="cerrar">&times;</span>
      <form>
        <label for="titulo">Título de la Clase:</label><br>
        <input type="text" id="titulo" name="titulo"><br>

        <label for="descripcion">Descripción:</label><br>
        <textarea id="descripcion" name="descripcion" rows="4" cols="50"></textarea><br>

        <label for="actividades">Actividades de Aprendizaje:</label><br>
        <textarea id="actividades" name="actividades" rows="4" cols="50"></textarea><br>

        <label for="evaluacion">Evaluación:</label><br>
        <textarea id="evaluacion" name="evaluacion" rows="4" cols="50"></textarea><br>

        <label for="cierre">Cierre:</label><br>
        <textarea id="cierre" name="cierre" rows="4" cols="50"></textarea><br><br>

        <input type="submit" class="btn btn-primary btn-lg btn-block" value="Enviar">
      </form>
    </div>
  </div>
  <div id="contenedor-tarjetas"></div>

      <button id="btnClases">+</button>
    </div>

    <!-- Div Recursos -->

    <div class="divRecursos" id="divRecursos">



      <button id="btnRecursos">AGREGAR</button>
    </div>

    <!-- Div Estudiante -->

    <div class="divEstudiantes" id="divEstudiantes">



      <button id="divEstudiantes">AGREGAR</button>
    </div>
  </div>
</body>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"
  integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
<script src="Js/informes.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</html>