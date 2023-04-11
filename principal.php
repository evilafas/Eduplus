<?php include('db/db.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EDU PLUS</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-LXdgBOZ1Q5CgGjgzE8x9M0I+9DOtJlQ5/5LTMZ1QaUDrIWsdoPjKdJ8tbXyFxxXzBOoLjEhzqfJNQOByFxFbLA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="shortcut icon" href="icon.png">
  <link rel="stylesheet" href="estilos/principal.css">
</head>
<body>
    <header>
      <h1>EDU PLUS</h1>
      <h2 class="text">INSTITUCIÓN EDUCATIVA SENA</h2>
      <button class="cerrarSesion">Cerrar Sesion</button>
    </header>

    <div class="barralat">

    <div class="dashBoard">
      <a href="principal.php"><h6><i class="fa-solid fa-house"></i></i>  Usuarios</h6></a>
      </div>
      <div class="notas_academicas">
       <a href="informes.php"><h6><i class="fa-solid fa-clipboard"></i>  Informes</h6></a>
      </div>

      <div class="plan">
      <a href=""><h6><i class="fa-solid fa-paper-plane"></i>  Plan de Formación</h6></a>
      </div>
      
    </div>
    
  <div class="contenedor">
  
  <table class="tabla" id="tabla">
  <thead>
    <tr>
      <th>ID USUARIO</th>
      <th>NOMBRES</th>
      <th>APELLIDOS</th>
      <th>USERNAME</th>
      <th>PASSWORD</th>
      <th>ROL</th>
      <th>EMAIL</th>
      <th>OPCIONES</th>
    </tr>
  </thead>
  <tbody>
  <?php
          $query = "SELECT * FROM usuarios";
          $result_tasks = mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
          <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['nombres']; ?></td>
            <td><?php echo $row['apellidos']; ?></td>
            <td><?php echo $row['username']; ?></td>
            <td><?php echo $row['password']; ?></td>
            <td><?php echo $row['rol']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><a href="borrar.php?id=<?php echo $row['id']?>"><i class="fa-solid fa-delete-left"></i></a>
                <a href="editar.php?id=<?php echo $row['id']?>"><i class="fa-solid fa-pen"></i></a>
          </td>
          </tr>
          <?php } ?>

  </tbody>
</table>

<button id="myBtn" class="abrir_modal">+</button>

<div id="myModal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <form action="guardar.php" method="POST">
      <h2>Formulario Usuarios</h2>
      <label for="descripcion">Username:</label>
      <input type="text" id="username" name="username">

      <label for="descripcion">Nombres:</label>
      <input type="text" id="firstname" name="firstname">
      <label for="descripcion">Apellidos:</label>
      <input type="text" id="lastname" name="lastname">
      
      <label for="grado">Password:</label>
      <input type="password" class="form-control" id="exampleInputPassword1"  name="password">
      
      <label for="descripcion">Rol:</label>
      <select class="form-select" name="rol">
      <option selected>Selecciona una opcion</option>
      <option value="Admin">Admin</option>
      <option value="Docente">Docente</option>
  
      </select>
      
      <label for="descripcion">Email:</label>
      <input type="email" id="email" name="email">
      
      <input type="submit" value="Enviar" name="guardar">
	</form>
  </div>
  
</div>
<?php
if(isset($_GET['error']) && $_GET['error'] == 'true') {
  echo '<script> alert("Error!")</script>';
}
?>

<script>
  // obtén el botón para abrir el modal
var btn = document.getElementById("myBtn");

// obtén el modal
var modal = document.getElementById("myModal");

// obtén el botón para cerrar el modal
var span = document.getElementsByClassName("close")[0];

// cuando el usuario haga clic en el botón, abre el modal
btn.onclick = function() {
  modal.style.display = "block";
}

// cuando el usuario haga clic en la X, cierra el modal
span.onclick = function() {
  modal.style.display = "none";
}

// cuando el usuario haga clic fuera del modal, ciérralo
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

</script>

      
</body>
<script src="index.js"></script>
<script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</html>