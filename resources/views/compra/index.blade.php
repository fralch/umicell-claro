<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compra</title>
    <script src="{{asset('js/jquery.js')}}"></script>
    
</head>
<body>
        <h1>Registo de Compras</h1>

        Desde: <input type="date" name="compra_desde" id="compra_desde">
        Hasta : <input type="date" name="compra_hasta" id="compra_hasta">
        
        <div id='tabla'></div>
        <div id='sumatoria'></div>
    <script src="{{asset('js/compra.js')}}"></script>
</body>
</html> -->

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Page icon -->
    <link rel="icon" href="{{asset('images/icono.png')}}" type="image/png"/>
​
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
​
    <!-- Custom styles for this template-->
    <link href="{{asset('css/fonts.css')}}" rel="stylesheet">
    <link href="{{asset('css/normalize.css')}}" rel="stylesheet">
    <link href="{{asset('css/punto_venta/styles.css')}}" rel="stylesheet">

    <title>Punto de venta</title>
  </head>
  <body>

​ <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right"></div>
      </div>
      <!--logo start-->
      <a href="/compra" class="logo"><b>UMI<span>CELL</span></b></a>
      <!--logo end-->

      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="/cerrar_sesion">Salir</a></li>
        </ul>
      </div>
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="profile.html"><img src="{{asset('images/punto_venta/userClaroWhite.svg')}}" class="img-circle" width="80"></a></p>
          <h5 class="centered">{{session('usuario')}}</h5>
          <li class="mt">
            <a class="active" href="#" onclick="navegar('menu_principal')">
              <i class="fa fa-dashboard"></i>
              <span>Principal</span>
              </a>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fas fa-shopping-cart"></i>
              <span>Compras</span>
              </a>
            <ul class="sub">
              <li><a href="#" onclick="navegar('submenu_registro_compras')">Registro de compras</a></li>
            </ul>
          </li>
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <section id="main-content">
        <section class="wrapper" id="seccionContenido">

              <div id='contenedor_principal' class = "content" style='display:contents'>

                  <div class="card"></div>
                    <div class="card-header">
                        <strong>PRINCIPAL</strong>
                    </div>
                    <!-- <div class="card-title">DATOS DE LA COMPRA</div> -->
                    <div class="card-body card-block"> 
                      <h1>BIENVENIDO AL SISTEMA DE UMICELL</h1>
                    </div>
                    
              </div>

                <div class="container" style="display:none" id="contenedor_registro_compras">
                  <iframe src="/registro_compras" width="100%" height="100%" allowfullscreen></iframe>
                </div>

        </section>
    </section>
    <!--main content end-->
    <!--footer start-->
    <!--footer end-->
  </section>





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{asset('js/jquery.min.js')}}" ></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script class="include" type="text/javascript" src="{{asset('js/jquery.dcjqaccordion.2.7.js')}}"></script>
    <script src="{{asset('js/jquery.scrollTo.min.js')}}"></script>
    <script src="{{asset('js/jquery.nicescroll.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/punto_venta/scripts.js')}}"></script>
    <script src="{{asset('js/compra/scripts.js')}}"></script>
</body>
</html>