<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="Gildardo Tello, Jorge Correa, Alejandro Alvez, Jose Palacio" />
    <title>Playita San Marcos</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link
        href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <?php include("php/conexion.php"); ?>

</head>

<body>

    <section class="page-section cta">
        <div class="container">
            <div class="row">
                <div class="col-sm-5">
                    <h1>Inicio de Sesión</h1>
                    <hr>
                    <form id="form2" name="form2" method="post" action="altaProductosEs.php">
                        <table>
                            <tr>
                                <td><label for="txt_Usuario">Usuario </label></td>
                                <td><input type="text" name="txt_Usuario" id="txt_Usuario"
                                        onkeyup="javascript:this.value=this.value.toLowerCase();" /></td>
                            </tr>
                            <tr>
                                <td><label for="pas_Pass">Password </label></td>
                                <td><input type="password" name="pas_Pass" id="pas_Pass" required/> </td>
                            </tr>
                        </table>
                        <p><input type="submit" name="btn_Entrar" id="btn_Entrar" value="Entrar" required/></p>
                        <p>&nbsp;</p>
                    </form>
                </div>
            </div>

        </div>
    </section>

    <footer class="footer text-faded text-center py-5">
        <div class="container">
            <p class="m-0 small">Copyright &copy; Your Website 2022</p>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>