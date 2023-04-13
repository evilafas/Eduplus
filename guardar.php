<?php 
include('db/db.php');

if (isset($_POST['guardar'])) {
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $rol = $_POST['rol'];
    $email = $_POST['email'];
    try{
          
    $consulta = "INSERT INTO usuarios(username, password, rol, email, nombres, apellidos) VALUES ('$username','$password','$rol','$email', '$nombres', '$apellidos')";

    $result = mysqli_query($conn, $consulta);
    if(!$result) {
      die("Query Failed.");
    }
    $_SESSION['message'] = 'Task Saved Successfully';
    $_SESSION['message_type'] = 'success';
    header('Location: principal.php');

    }catch(Exception $error){
      header('Location: principal.php?error=true');
      exit(); 
      
  }
  
    


  }


?>