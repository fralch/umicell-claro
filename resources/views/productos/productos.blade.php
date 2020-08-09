<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
​
    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
​
    <!-- Custom styles for this template-->
    <link href="{{asset('css/fonts.css')}}" rel="stylesheet">
    <link href="{{asset('css/normalize.css')}}" rel="stylesheet">
    <link href="{{asset('css/punto_venta/styles.css')}}" rel="stylesheet">

    <!-- Page icon -->
    <link rel="shortcut icon" type="image/png" href="{{asset('images/icono.png')}}" />

    <title>Productos
    </title>
  </head>
  <body>
​<div id='content_ListaPreguntas' class = "content" style='display:block'>

    <div class="card"></div>
        <div class="card-header">
            <strong>PRODUCTOS</strong>
        </div>
        <div class="card-title">PARÁMETROS DE BÚSQUEDA</div>
        <div class="card-body card-block"> 
           <label>Buscar: </label><input type="text"  class="form-control" id="dtpDesdeRC">
           
           <label class="btn btn-primary" id='Buscar_producto'>Buscar</label>
        </div>
        <div class="card-title">RESULTADOS</div> 
          <div class="card-body card-block"> 
                <div id='tabla' style="text-align:center"></div>
          </div>
        <div class="card-title">.</div>
        <div class="card-body card-block"> 
         
        <div class="row form-group" id="filaBotones">
          <!-- <button type="button" class="btn btn-primary" id="btnNuevo">Nuevo</button> -->
          <a href="/productos/nuevo" type="button" class="btn btn-primary" id="btnNuevo">Nueva compra</a>
        </div>

        </div>
       
    </div> 
      

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{asset('js/jquery.min.js')}}" ></script>
    <script src=" {{asset('js/producto/producto.js')}}"></script>

    
</body>
</body>
</html>