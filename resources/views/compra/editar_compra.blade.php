<!doctype html>
<html lang="es">
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
    <link href="{{asset('css/fonts.css')}}" rel="stylesheet">
    <link href="{{asset('css/normalize.css')}}" rel="stylesheet">
    <link href="{{asset('css/punto_venta/styles.css')}}" rel="stylesheet">
    

    <title>Lista de compras</title>
  </head>
<body>
    <!-- Editar Producto
    <form action="/compra/detalles/editar_producto_guardar" method="get">
        @foreach ( $editar_producto as $valor )
            <input type="hidden" name="id" value='{{$valor->id}}'>
            Codigo <input type="text" value='{{$valor->cod_producto}}'><br>
            <input type="hidden" name="compra_id" value='{{$valor->compra_id}}'>
            Producto <input type="text" value='{{$valor->descripcion}}'><br>
            Costo <input type="text" name="costo" id="" value='{{$valor->costo}}'><br>
            IGV <input type="text" name='igv' value='{{$valor->igv}}'><br>
            Costo + IGV <input type="text" name="costo_con_igv" id="" value='{{$valor->costo_con_igv}}'><br>
            <input type="submit" value="Guardar">
        @endforeach
    </form> -->

    <div id='content' class = "content" style='display:block'>

        <div class="card"></div>
            <div class="card-header">
                <strong>EDITAR COMPRA</strong>
            </div>
            <div class="card-title">DATOS DE LA COMPRA</div>
            <div class="card-body card-block"> 
                <form action="/compra/detalles/editar_producto_guardar" method="get" name="frmEditarProducto">
                    @foreach ( $editar_producto as $valor )
                    <div class="row form-group">
                        <input type="hidden" name="id" value='{{$valor->id}}'>
                            <label for="text-input" class="form-control-label col-md-1">Código</label>
                                <input type="text" class="form-control" id="txtCodigoEP" value='{{$valor->cod_producto}}' readonly>
                                <input type="hidden" name="compra_id" value='{{$valor->compra_id}}'>
                    </div>
                    <div class="row form-group">
                        <label for="text-input" class="form-control-label col-md-1">Producto</label>
                            <input type="text" class="form-control" id="txtProductoEP" value='{{$valor->descripcion}}' readonly>
                    </div>
                    <div class="row form-group"> 
                        <label for="text-input" class="form-control-label">Costo</label>
                            <input type="text" class="form-control" id="txtCostoEP" name="costo" value='{{$valor->costo}}'>
                        <label for="text-input" class="form-control-label">IGV</label>
                            <input type="text" class="form-control" id="txtIgvEP" name='igv' value='{{$valor->igv}}' readonly>
                    </div>
                    <div class="row form-group">     
                        <label for="text-input" class="form-control-label">Costo + IGV</label>
                            <input type="text" class="form-control" id="txtCostoIgvEP" name="costo_con_igv" value='{{$valor->costo_con_igv}}' readonly>
                    </div>
                        <div class="col form-group">
                            <button type="submit" class="btn btn-primary" id="btnGuardarEP">Guardar</button>
                        </div>
                    @endforeach
                </form>  
            </div>
    </div> 

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{asset('js/jquery.min.js')}}" ></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script class="include" type="text/javascript" src="{{asset('js/jquery.dcjqaccordion.2.7.js')}}"></script>
    <script src="{{asset('js/jquery.scrollTo.min.js')}}"></script>
    <script src="{{asset('js/jquery.nicescroll.js')}}" type="text/javascript"></script>
    <script src=" {{asset('js/compra/scripts.js')}}"></script>
    <script src=" {{asset('js/punto_venta/scripts.js')}}"></script>
</body>
</html>