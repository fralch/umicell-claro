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
    <link href="{{asset('css/fonts.css')}}" rel="stylesheet">
    <link href="{{asset('css/normalize.css')}}" rel="stylesheet">
    <link href="{{asset('css/punto_venta/styles.css')}}" rel="stylesheet">
    

    <title>Lista de compras</title>
  </head>
  <body>
​<div id='content_ListaPreguntas' class = "content" style='display:block'>

    <div class="card"></div>
        <div class="card-header">
            <strong>LISTA DE PRODUCTOS</strong>
        </div>
        <div class="card-title">PARÁMETROS DE BÚSQUEDA</div>
        <div class="card-body card-block"> 
            <form class="form-inline">
                    <label for="text-input" class="form-control-label">Identificación</label>
                    <select class="form-control" id="cmbIdentificacionLP" name='tipo'>
                        @foreach ($productos_tipos as $tipo)
                            <option value='{{$tipo->tipo}}'> {{$tipo->tipo}} </option>
                        @endforeach
                    </select>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="rdbCodigoProductoLP" value="option1" checked>
                        <label class="form-check-label" for="rdbCodigoProductoLP">
                          Código Producto
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input"red type="radio" name="exampleRadios" id="rdbDescripcionLP" value="option2" style="color:red">
                        <label class="form-check-label" for="rdbDescripcionLP">
                          Descripción
                        </label>
                      </div> 
                      <input type="text" class="form-control" id="txtDescripcionLP">
                      <span id="Buscar_producto">Buscar</span>
            </form>  
        </div>
        <div class="card-title">LISTA DE RESULTADOS</div>
        <div class="card-body card-block">
            <form class="form-inline" action="/compra/guardar_lista_productos" method='get'>
            
                <div id='tabla'></div>            
                <div class="card-title" id="lblSubtitulo">DETALLE DE LA COMPRA</div>
                <div class="col form-group">
                    <label for="text-input" class="form-control-label">Costo S/</label>

                    <input type="text" class="form-control" id="txtCostoLP" name='costo' readOnly>
                    <label for="text-input" class="form-control-label">Cantidad</label>
                    <input type="text" class="form-control" id="txtCantidadLP" name='cantidad' readOnly>

                   
                </div>
           
                <div class="col form-group">
                    <input type="hidden" name="compra_id" value="{{session('compra_id')}}">
                    @php
                    session()->forget('compra_id');
                    @endphp

                    <label for="text-input" class="form-control-label">IMEI</label>
                    <input type="text" class="form-control" id="txtIMEILP" name='imei' readOnly>
                    <label for="text-input" class="form-control-label">ICCID</label>
                    <input type="text" class="form-control" id="txtICCIDLP" name='iccid' readOnly>
                    <label for="text-input" class="form-control-label">ICCID2</label>
                    <input type="text" class="form-control" id="txtICCID2LP" name='iccid2' readOnly>
                </div>
           
                <div class="col form-group">
                    <button type="submit" class="btn btn-primary" id="btnAgregarLP">Agregar</button>
                </div>
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
    <script src=" {{asset('js/compra/registro_compras.js')}}"></script>
    <script src=" {{asset('js/compra/lista_productos.js')}}"></script>
</body>
</html>