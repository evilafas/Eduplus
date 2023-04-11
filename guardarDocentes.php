<?php 
include('db/db.php');

if (isset($_POST['guardar'])) {
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $identificacion = $_POST['identificacion'];
    $fecha_nacimiento = $_POST['fecha_nacimiento'];
    $cargaAcademica = $_POST['cargaAcademica'];
    try{
          
    $consulta = "INSERT INTO docentes(nombres, apellidos, identificacion, fecha_nacimiento, cargaAcademica) VALUES ('$nombres','$apellidos','$fecha_nacimiento','$cargaAcademica')";

    $result = mysqli_query($conn, $consulta);
    if(!$result) {
      die("Query Failed.");
    }
    $_SESSION['message'] = 'Task Saved Successfully';
    $_SESSION['message_type'] = 'success';
    header('Location: menuInformes.php');

    }catch(Exception $error){
      header('Location: menuInformes.php?error=true');
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