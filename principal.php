<?php include('db/db.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EDUPLUS</title>
  <link rel="stylesheet" href="principal.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.11.3/datatables.min.css"/>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
  <header>
    <h3>EDUPLUS</h3>
    <button id="cerrarSesion">Cerrar Sesion</button>
  </header>

  <div class="menu">
      <div class="usuarios">
        <img src="https://luciamonterorodriguez.com/wp-content/uploads/2021/03/computer-1331579_640.png" alt="usuarios" id="usuarios">
        USUARIOS
      </div>

      <div class="docentes">
        <img src="https://cdn-icons-png.flaticon.com/512/2643/2643395.png" alt="docentes" id="docentes">
        DOCENTES
      </div>
  </div>

  <div class="tabla">
  <table class="myTable" id="myTable">
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
            <td><a href="borrar.php?id=<?php echo $row['id']?>">Eliminar</a>
                <a href="editar.php?id=<?php echo $row['id']?>">Editar</a>
          </td>
          </tr>
          <?php } ?>

  </tbody>
</table>
  </div>

  <img src="https://cdn1.iconfinder.com/data/icons/instagram-ui-glyph/48/Sed-16-512.png" alt="agregar" class="agregar">
  
  <div class="modal">
    <h1 class="cerrarModal">X</h1>
    <h3>AGREGAR USUARIO</h3>
    <form action="guardar.php" method="POST">
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombres" id="nombre">
    <label for="apellido">Apellido:</label>
    <input type="text" name="apellidos" id="apellido">
    <label for="username">Username:</label>
    <input type="text" name="username" id="username">
    <label for="password">Password:</label>
    <input type="password" name="password" id="password">
    <label for="rol">Rol:</label>
    <select name="rol" id="rol">
      <option value=""></option>
      <option value="Admin">Admin</option>
      <option value="Docente">Docente</option>
    </select>
    <label for="email">Email:</label>
    <input type="email" name="email" id="email">
    <input type="submit" value="Enviar" name="guardar">
    </form>
  </div>



  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.11.3/datatables.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('#myTable').DataTable({
        "paging": true,      // Activar paginación
        "searching": true,   // Activar búsqueda
        "ordering": true,    // Activar ordenamiento
        "lengthMenu": [5, 10, 25, 50],  // Selección de cantidad de filas a mostrar
        "language": {        // Configuración del lenguaje
          "lengthMenu": "Mostrar _MENU_ registros por página",
          "zeroRecords": "No se encontraron resultados",
          "info": "Mostrando página _PAGE_ de _PAGES_",
          "infoEmpty": "No hay registros disponibles",
          "infoFiltered": "(filtrado de _MAX_ registros totales)",
          "search": "Buscar:",
          "paginate": {
            "first": "Primero",
            "last": "Último",
            "next": "Siguiente",
            "previous": "Anterior"
          }
        }
      });
    });
  </script>
</body>
<script src="Js/principal.js"></script>
</html>