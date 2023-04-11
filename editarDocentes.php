<?php
include("db/db.php");
$username = '';
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

  $query = "UPDATE docentes SET id='$id',nombres='$nombres',apellidos='$apellidos',identificacion='$identificacion',fecha_nacimiento='$fecha_nacimiento',fecha_nacimiento='$fecha_nacimiento' WHERE id=$id";
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
    <title>Editar lista docentes</title>
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
    <h1>Listado de Docentes</h1>
    <form action="editarDocentes.php?id=<?php echo $_GET['id']; ?>" method="POST">
      <div class="mb-3">
        <label for="id" class="form-label">Username</label>
        <input type="text" class="form-control" id="nombres" name="nombres">
      </div>
      <div class="mb-3">
        <label for="username" class="form-label">Email</label>
        <input type="text" class="form-control" id="apellidos" name="apellidos">
      </div>
      <div class="mb-3">
        <label for="nombres" class="form-label">Nombres</label>
        <input type="text" class="form-control" id="identificacion" name="identificacion">
      </div>
      <div class="mb-3">
        <label for="apellidos" class="form-label">Apellidos</label>
        <input type="text" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento">
      </div>
      <div class="mb-3">
        <label for="cargaAcademica" class="form-label">Carga Académica</label>
        <select class="form-select" id="cargaAcademica" name="cargaAcademica">
          <option selected disabled>Selecciona una opción</option>
          <option value="Ingles">Inglés</option>
          <option value="Matematicas">Matemáticas</option>
          <option value="LenguaCastellana">Lengua Castellana</option>
          <option value="cSociales">Ciencias Sociales</option>
          <option value="cNaturales">Ciencias Naturales</option>
          <option value="filosofia">Filosofía</option>
          <option value="geografia">Geografía</option>
          <option value="artistica">Artística</option>
          <option value="etica">Ética</option>
          <option value="religion">Religión</option>
          <option value="edfisica">Ed. Física</option>
        </select>
      </div>
      <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>