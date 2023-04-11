<?php 
    require("db/db.php");
    session_start();
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];


    

    // Validar los datos de inicio de sesión
    $query = "SELECT * FROM usuarios WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        // Iniciar sesión y redirigir al usuario a la página de inicio
        $_SESSION['username'] = $username;
        header('Location: principal.php');
    } else {
        
        header('Location: indexlg.php');
    }
}

?>