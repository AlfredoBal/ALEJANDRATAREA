
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
   <script src="https://kit.fontawesome.com/c0ad48aecf.js" crossorigin="anonymous"></script>
</head>
<body>
    <h1 class="text-center p-3"> REGISTRO DE DATOS</h1>
    <div class="container-fluid row">
    <form  class="col4 p-3" method="POST">
        <h3 class="text-secondary">INGRESE LOS DATOS A REGISTRAR</h3>
        <?php
        include "db.php";
        include "registro_persona.php";
       
        ?> 
<div class="col-8 p-4">
<table class="table">
    <thead class="bg-info">
     <tr>
      <th scope="col">ID</th>
      <th scope="col">NOMBRES</th>
      <th scope="col">APELLIDOS</th>
      <th scope="col">CIUDAD</th>
      <th scope="col">CARRERA</th>
      <th scope="col">NIVEL</th>
      <th scope="col"></th>

    </tr>
  </thead>
  <tbody>
    <?php
    include "db.php";
    $sql=$conexion->query(" select * from registro ");
    while($datos=$sql->fetch_object()){ ?>
     <tr>      
      <td><?=$datos->id?></td>
      <td><?=$datos->nombres ?></td>
      <td><?=$datos->apellidos ?></td>
      <td><?=$datos->ciudad ?></td>
      <td><?=$datos->carrera ?></td>
      <td><?=$datos->nivel ?></td>
      <td>
        <a href="" class=btn btn-small btn-warning><i class="fa-solid fa-pen-to-square"></i></a>
        <a href="" class=btn btn-small btn-danger><i class="fa-solid fa-trash-arrow-up"></i></a>
        
      </td>
    </tr>
    <?php } 
    ?>
       
   
     </tbody>
</table>
</div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>
</html>