<?php 
include('db/db.php');

if (isset($_POST['guardar'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $rol = $_POST['rol'];
    $email = $_POST['email'];
    try{
          
    $consulta = "INSERT INTO usuarios(username, password, rol, email, nombres, apellidos) VALUES ('$username','$password','$rol','$email', '$firstname', '$lastname')";

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

  if (isset($_POST['btnEstudiante'])) {
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $id = $_POST['id'];
    $tel = $_POST['tel'];
    $acudiente = $_POST['acudiente'];
    $telAcudiente = $_POST['telAcudiente'];
    
    $consulta = "INSERT INTO estudiantes(nombres, apellidos, identificacion, telefono, acudiente, telAcudiente) 
    VALUES ('$nombres','$apellidos','$id','$tel','$acudiente','$telAcudiente')";

    $result = mysqli_query($conn, $consulta);
    if(!$result) {
        die("Query Failed.");
      }
    
      $_SESSION['message'] = 'Task Saved Successfully';
      $_SESSION['message_type'] = 'success';
      header('Location: docentes.php');
    
    }
?>