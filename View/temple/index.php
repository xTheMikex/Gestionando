<!--SESION-->
<?php
include("../../Controller/conexion.php");
session_start();
if (!isset($_SESSION['usuario'])){
  header("Location: ../Login/login.php");
}
$iduser =$_SESSION['usuario'];

$sql ="SELECT id_usuario, usuario FROM usuario WHERE usuario ='$iduser'";
$resultado =$conexion->query($sql);
$row = $resultado->fetch();
?>


<!DOCTYPE html>
<html lang="en">


<!-- index.html  21 Nov 2019 03:44:50 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Gestionando</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="assets/css/app.min.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="assets/css/custom.css">
  <link rel='shortcut icon' type='image/x-icon' href='../../img/xd-removebg-preview.png' />
</head>

<body>
<div class="loader"></div>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar sticky">
        <div class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg
									collapse-btn"> <i data-feather="align-justify"></i></a></li>
            <li><a href="#" class="nav-link nav-link-lg fullscreen-btn">
                <i data-feather="maximize"></i>
              </a></li>
            <li>
              
            </li>
          </ul>
        </div>
        <ul class="navbar-nav navbar-right">
        
          <li class="dropdown"><a href="#" data-toggle="dropdown"
              class="nav-link dropdown-toggle nav-link-lg nav-link-user"> <img alt="image" src="assets/img/user.png"
                class="user-img-radious-style"> <span class="d-sm-none d-lg-inline-block"></span></a>
            <div class="dropdown-menu dropdown-menu-right pullDown">
              <div class="dropdown-title">Bienvenido  <span class="op-5 user-email">  
                                            <?php
                                             echo ($row['usuario']);
                                            ?>
                                        </span></div>
              <a href="profile.html" class="dropdown-item has-icon"> <i class="far
										fa-user"></i> Perfil
              </a>
               
              <a href="../Login/cerrar.php" class="dropdown-item has-icon text-danger"> <i class="fas fa-sign-out-alt"></i>
                Cerrar
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.php"> <img alt="image" src="../../img/xd-removebg-preview (1).png" width="180" height="60"/> 
               
            </a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Menu</li>
            <li class="dropdown">
              <a href="index.php" class="nav-link"><i class="fas fa-home"> </i><span>Inicio</span></a>
            </li>
            <li class="dropdown">
              <a href="centro.php" class="nav-link"><i class="fas fa-hospital"></i><span>Centro</span></a>
            </li>
            <li class="dropdown">
              <a href="administradora.php" class="nav-link"><i class="fas fa-hotel"></i><span>Administradora</span></a>
            </li>
            <li class="dropdown">
              <a href="estado.php" class="nav-link"><i class="far fa-check-circle"></i><span>Estado</span></a>
            </li>
            <li class="dropdown">
              <a href="afiliacion.php" class="nav-link"><i class="fas fa-pen-alt"></i><span>Afiliacion</span></a>
            </li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i
                  data-feather="dollar-sign"></i><span>Pagos</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="pagos.php">Pagos</a></li>
                <li><a class="nav-link" href="pcumplidos.php">Pagos cumplidos</a></li>
                <li><a class="nav-link" href="pncumplidos.php">Pagos No cumplidos</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="cotizante.php" class="nav-link"><i class="fas fa-user-circle"></i><span>Cotizante</span></a>
              <li class="dropdown">
              <a href="usuario.php" class="nav-link"><i class="fas fa-user-friends"></i><span>Usuario</span></a>
            </li>
            
            </li>
           
            
          </ul>
        </aside>
      </div>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="row ">
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="card">
                <div class="card-statistic-4">
                  <div class="align-items-center justify-content-between">
                    <div class="row ">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                        <div class="card-content">
                          <h5 class="font-15">Servicios</h5>
                          <p class="mb-0"><span class="col-green">100%</span> Seguros</p>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                        <div class="banner-img">
                          <img src="../../img/esfero.jpg" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="card">
                <div class="card-statistic-4">
                  <div class="align-items-center justify-content-between">
                    <div class="row ">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                        <div class="card-content">
                          <h5 class="font-15">Salud </h5>
                          <p class="mb-0"><span class="col-orange">100%</span>Seguridad</p>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                        <div class="banner-img">
                          <img src="../../img/audifono.jpg" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="card">
                <div class="card-statistic-4">
                  <div class="align-items-center justify-content-between">
                    <div class="row ">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                        <div class="card-content">
                          <h5 class="font-15">Responsabilidad</h5>
                          <p class="mb-0"><span class="col-green">100%</span>
                          Totalidad</p>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                        <div class="banner-img">
                          <img src="../../img/asesor.jpeg" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="card">
                <div class="card-statistic-4">
                  <div class="align-items-center justify-content-between">
                    <div class="row ">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                        <div class="card-content">
                          <h5 class="font-15">Obtener </h5>
                          <p class="mb-0"><span class="col-green">100%</span> Resultado</p>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                        <div class="banner-img">
                          <img src="../../img/vaso.jpg" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
              <!-- Support tickets -->
            
        </section>
        
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          
        </div>
        <div class="footer-right">
        </div>
      </footer>
    </div>
  </div>
  <!-- General JS Scripts -->
  <script src="assets/js/app.min.js"></script>
  <!-- JS Libraies -->
  <script src="assets/bundles/apexcharts/apexcharts.min.js"></script>
  <!-- Page Specific JS File -->
  <script src="assets/js/page/index.js"></script>
  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  <!-- Custom JS File -->
  <script src="assets/js/custom.js"></script>
</body>


<!-- index.html  21 Nov 2019 03:47:04 GMT -->
</html>