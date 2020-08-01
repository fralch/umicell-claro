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
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
​
    <!-- Custom styles for this template-->
    <link href="{{asset('css/fonts.css')}}" rel="stylesheet">
    <link href="{{asset('css/normalize.css')}}" rel="stylesheet">
    <link href="{{asset('css/punto_venta/styles.css')}}" rel="stylesheet">
    

    <title>Lista de compras</title>
  </head>
  <body>
​<div id='content' class = "content" style='display:block'>

    <div class="card"></div>
        <div class="card-header">
            <strong>LISTA DE PRODUCTOS</strong>
        </div>
        <div class="card-title">PARÁMETROS DE BÚSQUEDA</div>
        <div class="card-body card-block"> 
                <form>
                <div class="row form-group">
                    <label for="text-input" class="form-control-label">Identificación</label>
                    <select class="form-control" id="cmbIdentificacionLP" name='tipo'>
                        @foreach ($productos_tipos as $tipo)
                            <option value='{{$tipo->tipo}}'> {{$tipo->tipo}} </option>
                        @endforeach
                    </select>
                </div>
                <div class="row form-group">
                    <label for="text-input" class="form-control-label">Descripción</label>
                     <input type="text" class="form-control" id="txtDescripcionLP">
                </div>
                      <div class="row form-group">
                        <p class="btn btm-primary" id="Buscar_producto">Buscar</p>
                      </div>
            </form>  
        </div>
        <div class="card-title">LISTA DE RESULTADOS</div>
        <div class="card-body card-block">
            <form class="form-inline" action="/compra/guardar_lista_productos" method='get'>
            
                <div class="form-group" id='tabla'></div>            
                <div class="card-title" id="lblSubtitulo">DETALLE DE LA COMPRA</div>
                <div class="row form-group">
                    <label for="text-input" class="form-control-label">Costo S/</label>
                    <input type="text" class="form-control" id="txtCostoLP" name='costo'>
                    <label hidden for="text-input" class="form-control-label">Cantidad</label>
                    <input hidden type="text" class="form-control" id="txtCantidadLP" name='cantidad' readonly>

                </div>
           
                <div class="row form-group">
                    <input type="hidden" name="compra_id" value="{{session('compra_id')}}">

                    @php
                    session()->forget('compra_id');
                    @endphp

                    <label for="text-input" class="form-control-label">IMEI</label>
                    <input type="text" class="form-control" id="txtIMEILP" name='imei' maxlength="10" readonly>
                    <label for="text-input" class="form-control-label">ICCID</label>
                    <input type="text" class="form-control" id="txtICCIDLP" name='iccid' readonly>
                    <label for="text-input" class="form-control-label">ICCID2</label>
                    <input type="text" class="form-control" id="txtICCID2LP" name='iccid2' readonly>

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
    <script src=" {{asset('js/compra/scripts.js')}}"></script>
</body>
</html>