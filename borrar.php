<?php 
    include("db/db.php");

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "DELETE FROM usuarios WHERE id = $id";
        $result = mysqli_query($conn,$query);
        
        if(!$result){
            die("Error!");
        }

        header("location: principal.php");
    }

?>