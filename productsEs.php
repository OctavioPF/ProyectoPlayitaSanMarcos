<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-" />
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
    <header>
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
            <div class="container">
                <h1 class="">
                    <img src="assets/img/logoPlayita.png" class="img-fluid" alt="playita" width="50px">
                    <a style="font-size: 30px;" class="navbar-link" href="index.html">Playita San Marcos</a>
                </h1>
                <a class="navbar-brand text-uppercase fw-bold d-lg-none" href="index.html">Inicio</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation"><span
                        class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="indexEs.html">Home</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="aboutEs.html">About</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="productsEs.php">Products</a>
                        </li>
                    </ul>
                </div>
                <a href="loginEs.php"><img src="assets/img/user2.png" width="50" alt="InicioSesion"></img></a>
                <a href="productsEN.html"><button value="EN"></button></img></a>
            </div>
        </nav><br>
    </header>

    <section class="page-section cta">

        <div class="container">
            <div class="row">
                <div class="section-title text-center">
                    <h1>MENU</h1>
                </div>
                <div class="col-sm-7">
                    <div class="cta-inner bg-faded rounded ">
                        <?php
                        $result = select("menu");
                        ?>
                        <table class="table " border=1>
                            <thead>
                                <!-- <td>Id</td> -->
                                <td><b>Nombre</b></td>
                                <td><b>Categoria</b></td>
                                <td><b>Descripcion</b></td>
                                <td><b>Precio</b></td>

                            </thead>
                            <?php
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_object($result)) {
                                    echo "<tr>";
                                    //echo "<td>$row->idProducto</td>";
                                    echo "<td>$row->nomProducto</td>";
                                    echo "<td>$row->categoria</td>";
                                    echo "<td>$row->descripcion</td>";
                                    echo "<td>$$row->precio</td>";

                                    echo "</tr>";
                                }
                            } else {
                                echo "no hay ningun registro";
                            }
                            ?>
                        </table>
                    </div>
                </div>

                <div class="col-sm-5">
                <div id="news-slider" class="carousel slide " data-bs-ride="carousel">
                            <div class="carousel-indicators">
                              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                              <div class="carousel-item active">
                                <img src="assets/img/products-001.jpg" class="d-block w-100 rounded-3" alt="...">
                              </div>
                              <div class="carousel-item">
                                <img src="assets/img/products-009.jpg" class="d-block w-100 rounded-3" alt="...">
                              </div>
                              <div class="carousel-item">
                                <img src="assets/img/products-003.jpg" class="d-block w-100 rounded-3" alt="...">
                              </div>
                              <div class="carousel-item">
                                <img src="assets/img/products-004.jpg" class="d-block w-100 rounded-3" alt="...">
                              </div>
                              <div class="carousel-item">
                                <img src="assets/img/products-005.jpg" class="d-block w-100 rounded-3" alt="...">
                              </div>
                              
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Anterior</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Siguiente</span>
                            </button>
                          </div>
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