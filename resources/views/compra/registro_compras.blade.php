<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
​
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
​
    <!-- Custom styles for this template-->
    <link href="{{asset('css/fonts.css')}}" rel="stylesheet">
    <link href="{{asset('css/normalize.css')}}" rel="stylesheet">
    <link href="{{asset('css/punto_venta/styles.css')}}" rel="stylesheet">

    <!-- Page icon -->
    <link rel="shortcut icon" type="image/png" href="{{asset('images/icono.png')}}" />

    <title>Registro de compras</title>
  </head>
  <body>
​<div id='content_ListaPreguntas' class = "content" style='display:block'>

    <div class="card"></div>
        <div class="card-header">
            <strong>REGISTRO DE COMPRAS</strong>
        </div>
        <div class="card-title">PARÁMETROS DE FECHA</div>
        <div class="card-body card-block"> 
            <form>
                <div class="col form-group">
                    <label for="text-input" class="form-control-label">Por fechas</label>
                    <div class="row form-group">
                       <label for="text-input" class="form-control-label">Desde</label>
                       <div class="input-group date" id="dtpFechaDesde" data-target-input="nearest">
                            <input type="date" name="compra_desde" id="compra_desde">
                            
                        </div>
                        <label for="text-input" class="form-control-label">Hasta</label>
                        <div class="input-group date" id="dtpFechaHasta" data-target-input="nearest">
                            <input type="date" name="compra_hasta" id="compra_hasta">
                           
                            
                        </div>
                    </div>
                </div>
            </form>        
        </div>
        <div class="card-title">RESULTADOS</div>
          <!-- (AJAX) -->
          <div id='tabla'></div>
        <div class="card-title">TOTALES</div>
        <div class="card-body card-block"> 
            <form class="form-inline" role="form">
            <div class="form-group" id="gr_subtotal">
              <label for="text-input" class="form-control-label">Sub. Total</label>
                <div id='subtotal_'>
                  <!-- <input type="text" id="txtSubtotal" name="number-input" class="form-control"> -->
                </div>
              </div>
            <div class="form-group" id="gr_igv">
              <label for="text-input" class="form-control-label">IGV</label>
              <div id='igv_'>
                  <!-- <input type="text" id="txtIgv" name="number-input" class="form-control"> -->
                </div>
            </div>
            <div class="form-group" id="gr_total">
              <label for="text-input" class="form-control-label">Total</label>
                <div id='total_'>
                  <!-- <input type="text" id="txtIgv" name="number-input" class="form-control"> -->
                </div>
              
            </div>
          </form>
        </form>
        <div class="row form-group" id="filaBotones">
          <button type="button" class="btn btn-primary" id="btnNuevo">Nuevo</button>
          <button type="button" class="btn btn-primary" id="btnModificar">Modificar</button>
        </div>

        </div>
       
    </div> 
      

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{asset('js/jquery.min.js')}}" ></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/js/tempusdominus-bootstrap-4.min.js"></script>
    <script class="include" type="text/javascript" src="{{asset('js/jquery.dcjqaccordion.2.7.js')}}"></script>
    <script src="{{asset('js/jquery.scrollTo.min.js')}}"></script>
    <script src="{{asset('js/jquery.nicescroll.js')}}" type="text/javascript"></script>
    <script src=" {{asset('js/punto_venta/scripts.js')}}"></script>

    <script src="{{asset('js/compra.js')}}"></script>
</body>
</body>
</html>