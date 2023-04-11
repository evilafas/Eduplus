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
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
      <div class="recursos" id="recursos">Informes</div>

    </div>
    <div class="barralat">

    <div class="dashBoard">
      <a href="menuInformes.php"><h6><i class="fa-solid fa-house"></i></i> Listado de Docentes</h6></a>
      </div>
      <div class="notas_academicas">
       <a href="menuInformes.php"><h6><i class="fa-solid fa-clipboard"></i> Listado de Estudiantes</h6></a>
      </div>

      <div class="plan">
      <a href=""><h6><i class="fa-solid fa-paper-plane"></i>Informes de notas por asignaturas</h6></a>
      </div>
      <a href="indexlg.php" class="logout">Cerrar Sesion</a>
    </div>



    <div class="divClases" id="divClases">

    </div>

    <div class="divRecursos" id="divRecursos">
    <div class="contenedor">
        <table class="tabla" id="tabla">
            <thead>
                <tr>
                    <th>USERNAME</th>
                    <th>EMAIL</th>
                    <th>NOMBRES</th>
                    <th>APELLIDOS</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
    <?php
            $query = "SELECT * FROM usuarios WHERE rol='Admin'";
            $result_tasks = mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
          <tr>
            <td><?php echo $row['username']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['nombres']; ?></td>
            <td><?php echo $row['apellidos']; ?></td>
            <td><a href="borrarDocentes.php?id=<?php echo $row['id']?>"><i class="fa-solid fa-delete-left"></i></a>
                <a href="editarDocentes.php?id=<?php echo $row['id']?>"><i class="fa-solid fa-pen"></i></a>
          </td>
          </tr>
          <?php } ?>

  </tbody>
</table>
</div>
    <div class="divEstudiantes" id="divEstudiantes"></div>
    </div>
</body>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"
  integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
<script src="docentes.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
  integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" 
  integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" 
  integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</html>