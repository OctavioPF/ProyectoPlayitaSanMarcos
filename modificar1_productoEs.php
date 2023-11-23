<!DOCTYPE html>
<html>

<head>
  <title>Modificar</title>
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
      <h1>Ingrese los datoa a modificar</h1>
    </div>
    <div class="page-section" id="content">
      <div class="page-section cta" id="section">
        <div class="row">
        <div class="col-lg-12">
          <h1>Modificar</h1>
          <hr>
          <?php
        echo 'esta es la variable recibida = ' . $_GET['id'];
        //invocar la funcion select y la tabla
        $result = select_id("menu", "idProducto", $_GET['id']);
        // Realizamos un bucle que muestre el resultado
        if (mysqli_num_rows($result) > 0) {
          while ($row = mysqli_fetch_object($result)) {
        ?>
          <h2>Modifique los datos y guarde en la base de datos</h2>
          <form id="form1" name="form1" method="post" action="actualizar_productoEs.php" onsubmit="return validarForm1(this);">
            

            <h2>Modificar un Producto</h2>

            <p><label for="txt_Nombre"><b>Nombre del producto </b></label><br>
              <input type="text" name="txt_id" id="txt_id" onkeyup="javascript:this.value=this.value.toUpperCase();"
                value="<?php echo $row->idProducto; ?>" hidden />
              <input type="text" name="txt_Nombre" id="txt_Nombre"
                onkeyup="javascript:this.value=this.value.toUpperCase();" value="<?php echo $row->nomProducto; ?>" required>
            </p>
            <p>

            <p>
            <p><label for="lst_Categoria"><b>categoria del producto</b></label></p>
            <td><select name="lst_Categoria" id="lst_Categoria">
                <option>
                  <?php echo $row->categoria; ?>
                </option>
                <option>Plato fuerte</option>
                <option>Bebida</option>
                <option>Entradas</option>
              </select>
            </td>
            </p>

            <p><label for="txt_Descripcion"><b>Descripcion</b> </label><br>
              <input type="text" name="txt_Descripcion" id="txt_Descripcion"
                onkeyup="javascript:this.value=this.value.toUpperCase();" value="<?php echo $row->descripcion; ?>">
            </p>

            <p><label for="txt_Precio"><b>Precio</b></label><br>
              <input type="number" name="txt_Precio" id="txt_Precio"
                onkeyup="javascript:this.value=this.value.toUpperCase();" value="<?php echo $row->precio; ?>">
            </p>

            <p>
            <p><label for="lst_Estado"><b>Estado del producto</b></label></p>
            <td><select name="lst_Estado" id="lst_Estado">
                <option>
                  <?php echo $row->status; ?>
                </option>
                <option>Disponible</option>
                <option>No disponible</option>
              </select>
            </td>
            </p>

            <p><input type="submit" name="btn_guardar" id="btn_guardar" value="Actualizar"></p>

          </form>



          <tr>
            <td>
              <?php echo $row->idProducto; ?>
            </td>
            <td></td>
            <td>
              <?php echo $row->nomProducto; ?>
            </td>
            <td>
              <?php echo $row->categoria; ?>
            </td>
            <td>
              <?php echo $row->precio; ?>
            </td>
            <td>
              <?php echo $row->descripcion; ?>
            </td>
            <td>
              <?php echo $row->status; ?>
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
        </div>

      </div>
    </div>
    <!-- footer ******************** -->
  </div>
</body>
<script src="js/btn.js"></script>

</html>