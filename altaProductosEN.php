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
    <div class="form-check"><a class="" href="index.html"><input type="button" value="Volver"></a></div>

        <div class="container">

        <div class="section-heading-upper">
            <h1>INSERT A NEW RECORD, MODIFY OR DELETE SOME DISH</h1><BR></BR>
        </div>
            <div class="row">

                <div class="col-sm-9">
                    <?php
                $result = select("menu");
                ?>
                    <table class="table-primary " border=1>
                        <thead>
                            <td><b>Id</b></td>
                            <td><b>Nombre</b></td>
                            <td><b>Categoria</b></td>
                            <td><b>Precio</b></td>
                            <td><b>Descripcion</b></td>
                            <td><b>Estado</b></td>

                        </thead>
                        <?php
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_object($result)) {
                                ?>
                                <tr>
                                <td><?php echo $row->idProducto ?></td>
                                <td><?php echo $row->nomProducto ?></td>
                                <td><?php echo $row->categoria ?></td>
                                <td><?php echo $row->precio ?></td>
                                <td><?php echo $row->descripcion?></td>
                                <td><?php echo $row->status?></td>
                                <td>
                  <a href="modificar1_productoEN.php?id=<?php echo $row->idProducto; ?>" class="button">Modificar </a>
                  <a href="eliminar1_productoEN.php?id=<?php echo $row->idProducto; ?>" onclick="return confirmation()" class="buttonDelete">Eliminar </a>

                </td>
                                </tr>
                                <?php
                            }
                        } else {
                            echo "no hay ningun registro";
                        }
                        ?>
                    </table>
                </div>
                <div class="col-sm-3">
                    <form id="form1" name="form1" method="post" action="altaProductos2EN.php"
                        onsubmit="return validarForm(this);">

                        <h2>Add a Product</h2>

                        <p><label for="txt_Nombre"><b> Product name</b></label><br>
                            <input type="text" name="txt_Nombre" id="txt_Nombre"
                                onkeyup="javascript:this.value=this.value.toUpperCase();">
                        </p>
                        <p>

                        <p>
                        <p><label for="lst_Categoria"><b>product category</b></label></p>
                        <td><select name="lst_Categoria" id="lst_Categoria">
                                <option>Select...</option>
                                <option>Main course</option>
                                <option>Beverage</option>
                                <option>First Time</option>
                            </select>
                        </td>
                        </p>

                        <p><label for="txt_Descripcion"><b>Description</b> </label><br>
                            <input type="text" name="txt_Descripcion" id="txt_Descripcion"
                                onkeyup="javascript:this.value=this.value.toUpperCase();">
                        </p>

                        <p><label for="txt_Precio"><b>Price</b></label><br>
                            <input type="number" name="txt_Precio" id="txt_Precio"
                                onkeyup="javascript:this.value=this.value.toUpperCase();">
                        </p>

                        <p>
                        <p><label for="lst_Estado"><b>Product status</b></label></p>
                        <td><select name="lst_Estado" id="lst_Estado">
                                <option>Select...</option>
                                <option>Available</option>
                                <option>Not available</option>
                            </select>
                        </td>
                        </p>

                        <p><button name="btn_guardar" id="btn_guardar" class="button"
                                ><b>Save</b></button></p>

                    </form>

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