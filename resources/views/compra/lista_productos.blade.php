<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Page icon -->
    <link rel="shortcut icon" type="image/png" href="/images/icono.png" />
​
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
​
    <!-- Custom styles for this template-->
    <link href="css/fonts.css" rel="stylesheet">
    <link href="css/normalize.css" rel="stylesheet">
    <link href="css/punto_venta/styles.css" rel="stylesheet">

    <title>Lista de compras</title>
  </head>
  <body>
​<div id='content_ListaPreguntas' class = "content" style='display:block'>

    <div class="card"></div>
        <div class="card-header">
            <strong>LISTA DE COMPRAS</strong>
        </div>
        <div class="card-title">PARÁMETROS DE BÚSQUEDA</div>
        <div class="card-body card-block"> 
            <form class="form-inline">
                <div class="form-group">
                    <label for="text-input" class="form-control-label">Identificación</label>
                    <select class="form-control" id="cmbIdentificacion">
                        <option></option>
                    </select>
                </div>
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="rdbCodigoProducto" value="option1" checked>
                        <label class="form-check-label" for="rdbCodigoProducto">
                          Código Producto
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="rdbDescripcion" value="option2">
                        <label class="form-check-label" for="rdbDescripcion">
                          Descripción
                        </label>
                      </div> 
                      <input type="text" class="form-control" id="txtDescripcion">
                </div>
            </form>  
        </div>
        <div class="card-title">LISTA DE RESULTADOS</div>
        <div class="card-body card-block">
            AJAX
        </div>
        <div class="card-title">DETALLES DE LA COMPRA</div>
        <div class="card-body card-block">
            <form>
                <div class="col form-group">
                    <label for="text-input" class="form-control-label">Costo S/</label>
                    <input type="text" class="form-control" id="txtCosto">
                </div>
                <div class="col form-group">
                    <label for="text-input" class="form-control-label">Cantidad</label>
                    <input type="text" class="form-control" id="txtCantidad">
                </div>
                <div class="col form-group">
                    <label for="text-input" class="form-control-label">IMEI</label>
                    <input type="text" class="form-control" id="txtIMEI">
                </div>
                <div class="col form-group">
                    <label for="text-input" class="form-control-label">ICCID</label>
                    <input type="text" class="form-control" id="txtICCID">
                </div>
                <div class="col form-group">
                    <label for="text-input" class="form-control-label">ICCID2</label>
                    <input type="text" class="form-control" id="txtICCID2">
                </div>
                <div class="col form-group">
                    <button type="button" class="btn btn-primary" id="btnNuevo">Agregar</button>
                </div>
            </form>
        </div>

       
    </div> 
      

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/js/tempusdominus-bootstrap-4.min.js"></script>
    <script class="include" type="text/javascript" src="../../js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="js/punto_venta/scripts.js"></script>
</body>
</html>