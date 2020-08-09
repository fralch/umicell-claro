

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
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
​
    <!-- Custom styles for this template-->
    <link href="{{asset('css/fonts.css')}}" rel="stylesheet">
    <link href="{{asset('css/normalize.css')}}" rel="stylesheet">
    <link href="{{asset('css/punto_venta/styles.css')}}" rel="stylesheet">

    <title>NUEVA PRODUCTO</title>
  </head>
  <body>
​    <div id='content' class = "content" style='display:block'>

    <div class="card"></div>
        <div class="card-header">
            <strong>NUEVO PRODUCTO </strong>
        </div>
        <div class="card-title">DETALLES  DEL NUEVO PRODUCTO </div>
        <div class="card-body card-block">

        <label for="text-input" class="form-control-label">Tipo de Producto</label>
        <form action="/productos/nuevo/guardar" method="get">
            <div class="row form-group">
                <select name="tipo" id="txtTipoDocumentoMC" class="form-control">
               
                    <option value='IMEI'>IMEI</option>
                    <option value='MODEM'>MODEM</option>
                    <option value='TIF'>TIF</option>
                    <option value='ICCID'>ICCID</option>
                    <option value='REGALO'>REGALO</option>
                    <option value='LNB'>LNB</option>
                    <option value='DECO'>DECO</option>
                    <option value='RECA'>RECA</option>
                    <option value='CLARO TV'>CLARO TV</option>
                    <option value='HFC'>HFC</option>
                </select>
            </div>
        
            <div class="row form-group">
                <label for="text-input" class="form-control-label">Fecha</label>
               <div class="input-group date" id="dtpFechaCompraMC" data-target-input="nearest">
                    <input class="form-control" type="date" name="fecha" id='fecha_nuevo_producto'>
                </div>
            </div>
            <div class="row form-group">
            <label for="text-input" class="form-control-label">Codigo del Producto</label>
            <input type="text" class="form-control" id="txtGuiaSerieMC" name="cod_producto">
            
            <label for="text-input" class="form-control-label">Descripcion</label>
            <input type="text"  class="form-control" id="txtGuiaNumeroMC" name="descripcion" >
            </div>
            <div class="col form-group">
                <!-- <a href="/compra/listar_producto" class="btn btn-primary" >Agregar</a> -->
                <input type="submit" class="btn btn-primary"  value="Guardar">
        </form>
                
                
            </div>

        </div>   
    </div> 

    <script>

        if (screen.width < 900) {
        var elemento = document.getElementById("tblComprasNuevas");
        elemento.className += " table-responsive";
        };

    </script>
      

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   
    <script src=" {{asset('js/punto_venta/scripts.js')}}"></script>
    <script src="{{asset('js/compra/nuevo.js')}}"></script>
</body>
</html>