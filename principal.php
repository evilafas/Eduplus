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
</head>
<body>
  <header>
    <h3>EDUPLUS</h3>
    <button id="cerrarSesion">Cerrar Sesion</button>
  </header>

  <div class="menu">
      <div class="usuarios">
        <img src="https://luciamonterorodriguez.com/wp-content/uploads/2021/03/computer-1331579_640.png" alt="usuarios">
        USUARIOS
      </div>

      <div class="docentes">
        <img src="https://cdn-icons-png.flaticon.com/512/2643/2643395.png" alt="docentes">
        DOCENTES
      </div>
  </div>

  <div class="tabla">
  <table id="myTable">
    <thead>
      <tr>
        <th>Nombre</th>
        <th>Edad</th>
        <th>Email</th>
        <th>Ciudad</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Juan</td>
        <td>25</td>
        <td>juan@gmail.com</td>
        <td>Madrid</td>
      </tr>
      <tr>
        <td>Pablo</td>
        <td>32</td>
        <td>pablo@hotmail.com</td>
        <td>Barcelona</td>
      </tr>
      <tr>
        <td>María</td>
        <td>28</td>
        <td>maria@yahoo.com</td>
        <td>Sevilla</td>
      </tr>
      <tr>
        <td>Lucía</td>
        <td>21</td>
        <td>lucia@gmail.com</td>
        <td>Valencia</td>
      </tr>
      <tr>
        <td>Antonio</td>
        <td>39</td>
        <td>antonio@gmail.com</td>
        <td>Barcelona</td>
      </tr>
    </tbody>
  </table>
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
</html>