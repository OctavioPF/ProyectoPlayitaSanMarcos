<!DOCTYPE html>
<html lang="es-MX">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
    <title>Registro de productos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/menu.css">
    <?php include("php/conexion.php"); ?>
</head>
<!--Avenir Next Rounded  sans-serif;-->

<body style="font-family: sans-serif;">
    <div class="page-section cta">
        <div class="container">
            <div class="row">
                <div class="col-sm-5">

                    <?php
                    $nombre = $_POST['txt_Nombre'];
                    $categoria = $_POST['lst_Categoria'];
                    $descripcion = $_POST['txt_Descripcion'];
                    $precio = $_POST['txt_Precio'];
                    $estado = $_POST['lst_Estado'];
                    //realizar la inserción de datos en la tabla con la siguiente sentencia SQL
                    //insert into t_usuario values( "NULL" , "" , "" , "" ,   , "" )
                    //considere que la insercion de la primary Key es nula ya que es autoincrmentable
                    echo "<h3>$nombre</h3>
                              <h3>$categoria</h3>
                              <h3>$descripcion</h3>
                              <h3>$precio</h3>
                              <h3>$estado</h3>";

                        //realizar la inserción de datos en la tabla con la siguiente sentencia SQL
                        //insert into t_usuario values( "NULL" , "" , "" , "" ,   , "" )
                        //considere que la insercion de la primary Key es nula ya que es autoincrmentable
                        $cons = insert( 
                              'menu',
                              "NULL, '$nombre', '$categoria', $precio, '$descripcion' ,'$estado' ");
                        if ($cons) {
                        ?>
                              <p>The User WAS SUCCESSFULLY ADDED to the database.</p>
                        <?php
                        } else {
                        ?>
                              <p>The user could not be inserted into the database.</p>
                        <?php
                        }
                        ?>
                        <meta http-equiv="refresh" content="3;URL=altaProductos2EN.php">
                </div>
            </div>
        </div>

    </div>


    <script src="js/btn.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
</body>

</html>