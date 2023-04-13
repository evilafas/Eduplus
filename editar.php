<?php
include("db/db.php");
$user = '';
$pass = '';
$roluser = '';
$emailuser = '';
$nombre = '';
$apellido = '';

if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM usuarios WHERE id=$id";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $user = $row['username'];
    $pass = $row['password'];
    $roluser = $row['rol'];
    $emailuser = $row['email'];
    $nombre = $row['nombres'];
    $apellido = $row['apellidos'];
    
    
  }
}

if (isset($_POST['edit'])) {
  $id = $_GET['id'];
  $nombres = $_POST['nombres'];
  $apellidos = $_POST['apellidos'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $rol = $_POST['rol'];
  $email = $_POST['email'];
  
        
  $consulta = "UPDATE usuarios SET username ='$username', password ='$password',  rol ='$rol', email ='$email', nombres ='$nombres', apellidos ='$apellidos' WHERE id=$id";

  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Task Updated Successfully';
  $_SESSION['message_type'] = 'warning';
  header('Location: menuInformes.php');

  
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
  body{
    background-image: url("https://img3.wallspic.com/crops/4/9/0/2/7/172094/172094-ios-azure-pendiente-patron-magenta-1366x768.jpg");
    
  }

  .container form{
  display: flex;
  flex-direction: column;
  width: 400px;
  gap: 10px;
  font-weight: bold;
  margin: 0 auto;
}

.container form input{
  border-radius: 10px;
  background-color: transparent;
  border: 1px solid black;
  font-weight: 700;
}
.container form select{
  border-radius: 10px;
  background-color: transparent;
  border: 1px solid black;
}

input[type="submit"] {
  margin-top: 40px;
  font-weight: 700;
  font-size: 20px;
  height: 30px;

}

input[type="submit"]:hover {
  background-color: #aaa;
  opacity: 0.5;
  border: 2px solid black;
  cursor: pointer;
}

</style>
<div class="container">
<form action="edit.php?id=<?php echo $_GET['id']; ?>" method="POST">    
<h1>Editar Registro #<?php echo $_GET['id']; ?> </h1>
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombres" id="nombre" placeholder="<?php echo $nombre; ?>">
    <label for="apellido">Apellido:</label>
    <input type="text" name="apellidos" id="apellido" placeholder="<?php echo $apellido; ?>">
    <label for="username">Username:</label>
    <input type="text" name="username" id="username" placeholder="<?php echo $user; ?>">
    <label for="password">Password:</label>
    <input type="password" name="password" id="password" placeholder="<?php echo $pass; ?>">
    <label for="rol">Rol:</label>
    <select name="rol" id="rol">
      <option value=""></option>
      <option value="Admin">Admin</option>
      <option value="Docente">Docente</option>
    </select>
    <label for="email">Email:</label>
    <input type="email" name="email" id="email" placeholder="<?php echo $emailuser; ?>">
    <input type="submit" value="Enviar" name="edit">
    </form>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>