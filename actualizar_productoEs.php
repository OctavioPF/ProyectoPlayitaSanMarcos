<!DOCTYPE html>
<html>

<head>
      <title>Actualizar usuarios</title>
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
      <div class="container" id="container">
            <div id="header">
                  <h1>Actualizar usuarios</h1>
            </div>
            <div class="page-section cta" id="content">
                  <div class="row" id="section">
                        <div class="col-lg-12">
                        <h1>Muestra la inserción de datos</h1>
                        <?php
                        //obtener las variables
                        $idProducto = $_POST['txt_id'];
                        $nomProducto = $_POST['txt_Nombre'];
                        $categoria = $_POST['lst_Categoria'];
                        $precio = $_POST['txt_Precio'];
                        $descripcion = $_POST['txt_Descripcion'];
                        $status = $_POST['lst_Estado'];
                        ?>
                        <h2>Datos recibidos</h2>
                        <p>Usted ingreso los siguientes datos:</p>
                        <?php
                        //mostrar los datos recibidos
                        echo "<h3>$nomProducto</h3>
        <h3>$categoria</h3>
        <h3>$precio</h3>
        <h3>$descripcion</h3>
        <h3>$status+</h3>";

                        //realizar la inserción de datos en la tabla con la siguiente sentencia SQL
                        //insert into t_usuario values( "NULL" , "" , "" , "" ,   , "" )
                        //considere que la insercion de la primary Key es nula ya que es autoincrmentable

                        $campos = "idProducto = '$idProducto'";
                        $campos .= ", nomProducto = '$nomProducto'";
                        $campos .= ", categoria = '$categoria'";
                        $campos .= ", precio = $precio";
                        $campos .= ", descripcion = '$descripcion'";
                        $campos .= ", status = '$status'";

                        echo $campos;
                        $where = "idProducto = $idProducto";

                        $cons = update('menu', $campos, $where);

                        if ($cons) {
                        ?>
                              <h2>La noticia SE AÑADIO CORRECTAMENTE a la base de datos.</h2>

                        <?php
                        } else {
                        ?>
                              <h2>La noticia no pudo ser insertada en la base de datos.</h2>
                        <?php
                        }
                        ?>

                        <meta http-equiv="refresh" content="3;URL=altaProductosEs.php">
                        </div>

                  </div>
            </div>
            <!-- footer ******************** -->
      </div>
</body>

</html>