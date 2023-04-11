<?php
include("db/db.php");
$username = '';
$pass = '';
$rol = '';
$email = '';
$nombres = '';
$apellidos = '';

if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM usuarios WHERE id=$id";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $title = $row['id'];
    $description = $row['username'];
  }
}

if (isset($_POST['update'])) {
  $id = $_GET['id'];
  $title= $_POST['title'];
  $description = $_POST['description'];

  $query = "UPDATE usuarios SET id='$id',username='$username',password='$pass',rol='$rol',email='$email',nombres='$nombres',apellidos='$apellidos' WHERE id=$id";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Task Updated Successfully';
  $_SESSION['message_type'] = 'warning';
  header('Location: index.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar registro</title>
    <link rel="shortcut icon" href="icon.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<style>
    .container{
        padding-top: 10vh;  
        width: 40vw; 
    
    }
</style>
<div class="container">
    <h1>Formulario de registro</h1>
    <form action="edit.php?id=<?php echo $_GET['id']; ?>" method="POST">
      <div class="mb-3">
        <label for="id" class="form-label">ID</label>
        <input type="text" class="form-control" id="id" name="id">
      </div>
      <div class="mb-3">
        <label for="username" class="form-label">Nombre de usuario</label>
        <input type="text" class="form-control" id="username" name="username">
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Contraseña</label>
        <input type="password" class="form-control" id="password" name="password">
      </div>
      <div class="mb-3">
        <label for="rol" class="form-label">Rol</label>
        <select class="form-select" id="rol" name="rol">
          <option selected disabled>Selecciona una opción</option>
          <option value="admin">Admin</option>
          <option value="docente">Docente</option>
        </select>
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Correo electrónico</label>
        <input type="email" class="form-control" id="email" name="email">
      </div>
      <button type="submit" class="btn btn-primary">Registrar</button>
    </form>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>