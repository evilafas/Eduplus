<?php include('db/db.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EDU PLUS</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
    integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    integrity="sha512-LXdgBOZ1Q5CgGjgzE8x9M0I+9DOtJlQ5/5LTMZ1QaUDrIWsdoPjKdJ8tbXyFxxXzBOoLjEhzqfJNQOByFxFbLA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="shortcut icon" href="icon.png">
  <link rel="stylesheet" href="estilos/informes.css">
</head>

<body>

  <nav class="navbar navbar-light bg-light ">
  <a class="navbar-brand" href="#">
    <img src="img/edu.png" width="50" height="50" class="d-inline-block align-top" alt="">
    ADMINISTRACION
  </a>
</nav>
  <div class="barralat">

    <div class="dashBoard">
      <a href="principal.php">
        <i class="fa-solid fa-house"></i></i> Usuarios</h6>
      </a>
    </div>
    <div class="notas_academicas">
      <a href="informes.php">
        <h6><i class="fa-solid fa-clipboard"></i> Informes</h6>
      </a>
    </div>

    <div class="plan">
      <a href="">
        <h6><i class="fa-solid fa-paper-plane"></i> Plan de Formación</h6>
      </a>
    </div>
    <a href="indexlg.php" class="logout">Cerrar Sesión</a>
  </div>


  <div class="container">


    <div class="card-group">
      <div class="card">
        <img class="card-img-top" src="../Eduplus/img/docente.webp" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Listado de docentes</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
            content. This content is a little bit longer.</p>
          <a href="menuInformes.php" class="btn btn-primary">Ver listado...</a>
        </div>
      </div>
      <div class="card">
        <img class="card-img-top" src="" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Listado de administrativos</h5>
          <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
          <a href="adminList.php" class="btn btn-primary">Ver listado...</a>
        </div>
      </div>
      <div class="card">
        <img class="card-img-top" src="" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Notas académicas</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
            content. This card has even longer content than the first to show that equal height action.</p>
          <a href="#" class="btn btn-primary">Ver listado...</a>
        </div>
      </div>
    </div>
  </div>


  <?php
  if (isset($_GET['error']) && $_GET['error'] == 'true') {
    echo '<script> alert("Error!")</script>';
  }
  ?>

  <script>


  </script>


</body>
<script src="index.js"></script>
<script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E="
  crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</html>