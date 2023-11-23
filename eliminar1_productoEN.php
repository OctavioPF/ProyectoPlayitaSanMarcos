<!DOCTYPE html>
<html>

<head>
  <title>eliminar Usuario</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="description" content="Sistemas computacionales">
	<meta name="keywords" content="MySql, conexión, Wamp">
	<meta name="author" content="Gildardo Tello, Jorge Correa, Alejandro Alvez, Jose Palacio">

  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="css/menu.css">

  <?php include("php/conexion.php"); ?>
</head>

<body>
  <div id="container">
    <div id="header">
      <h1>Remove product</h1>
    </div>
    <div class="container" id="content">
      <div class="page-section cta" id="section">
        <div class="row">
        <div class="col-lg-12">
        <h1>Delete Database Record</h1>
        <hr>
        <?php
        echo 'esta es la variable recibida = ' . $_GET['id'];
        //invocar la funcion select y la tabla
        $result = select_id("menu", "idProducto", $_GET['id']);
        // Realizamos un bucle que muestre el resultado
        if (mysqli_num_rows($result) > 0) {
          while ($row = mysqli_fetch_object($result)) {
        ?>
            <h3>Deletion data</h3>
            <p>id: <?php echo $row->idProducto; ?></p>
            <p>Nombre: <?php echo $row->nomProducto; ?></p>
            <p>Categoria: <?php echo $row->categoria; ?></p>
            <p>Precio: <?php echo $row->precio; ?></p>
            <p>Descripcion: <?php echo $row->descripcion; ?></p>
            <p>Estado: <?php echo $row->status; ?></p>

        <?php

          }
          $result = delete("menu", "idProducto", $_GET['id']);
        } else {
          echo "El registro no existe";
        }
        ?>
        </table>

        <meta http-equiv="refresh" content="3;URL=altaProductosEN.php">
        </div>
        </div>
      </div>
    </div>
    <!-- footer ******************** -->
  </div>
</body>
<script src="js/Validacion.js"></script>

</html>