

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
    <link href="{{asset('css/punto_venta/style.css')}}" rel="stylesheet">

    <title>NUEVA compra</title>
  </head>
  <body>
​    <div id='content' class = "content" style='display:block'>

    <div class="card"></div>
        <div class="card-header">
            <strong>NUEVA COMPRA</strong>
        </div>
        <div class="card-title">DETALLES  DE NUEVA COMPRA</div>
        <div class="card-body card-block">

        <label for="text-input" class="form-control-label">Tipo de Documento</label>
        <form action="/compra/nueva/guardar" method="get">
            <div class="row form-group">
                <select name="tipo_doc" id="txtTipoDocumentoMC" class="form-control">
               
                    <option value='Factura'>Factura</option>
                    <option value='Factura Virtual'>Factura Virtual</option>
                    <option value='Boleta'>Boleta</option>
                
                </select>
            </div>
        
            <div class="row form-group">
                <label for="text-input" class="form-control-label">Fecha</label>
               <div class="input-group date" id="dtpFechaCompraMC" data-target-input="nearest">
                    <input class="form-control" type="date" name="f_compra" id='fecha_nuevo_producto'>
                </div>
            </div>
            <div class="row form-group">
            <label for="text-input" class="form-control-label">Guia Serie</label>
            <input type="text" class="form-control" id="txtGuiaSerieMC" name="guia_serie">

            <label for="text-input" class="form-control-label">Guia Número</label>
            <input type="text" class="form-control" id="txtGuiaNumeroMC" name="guia_numero">
            </div>
            <div class="row form-group">
                <label for="text-input" class="form-control-label">Factura Serie</label>
                <input type="text" class="form-control" id="txtFacturaSerieMC" name="factura_serie">
    
                <label for="text-input" class="form-control-label">Factura Número</label>
                <input type="text" class="form-control" id="txtFacturaNumeroMC" name="factura_numero">
            </div>
        
            <div class="row form-group">
                <label for="text-input" class="form-control-label">Sub. Total S/</label>
                <input type="text" class="form-control" id="txtSubtotalMC" readonly>
    
                <label for="text-input" class="form-control-label">IGV S/</label>
                <input type="text" class="form-control" id="txtIgvMC" readonly>
    
                <label for="text-input" class="form-control-label">TOTAL S/</label>
                <input type="text" class="form-control" id="txtTotalMC" readonly>
            </div>
              
            
        </div>
        <div class="card-title">COMPRAS REALIZADAS</div>
        <div class="card-body card-block">
            <!-- AJAX -->
            <table>
            @if(!empty($detalles_compra))
                <tr>
                    <th>Codigo</th>
                    <th>ICCID</th>
                    <th>IMEI</th>
                    <th>Producto</th>
                    <th>Costo</th>
                    <th>IGV</th>
                    <th>Consto+IGV</th>
                    <th>Acciones</th>
                </tr>
                
                    @foreach($detalles_compras as  $value)
                        <tr>
                            <td> {{$value->cod_producto}}</td>
                            <td> {{$value->iccid}}</td>
                            <td> {{$value->imei}}</td>
                            <td> {{$value->descripcion}}</td>
                            <td> {{$value->costo}}</td>
                            <td> {{$value->igv}}</td>
                            <td> {{$value->costo_con_igv}}</td>
                            <td> <a href="/compra/detalle/producto/{{$value->id}}">Borrar</a>/ <a href="/compra/detalles/editar_producto/{{$value->id}}">Editar</a></td>
                        </tr>

                    @endforeach
                @endif
            </table>
            <!-- FIN AJAX -->
            <div class="col form-group">
                <!-- <a href="/compra/listar_producto" class="btn btn-primary" >Agregar</a> -->
                <input type="submit" class="btn btn-primary" id="btnAgregarMC" value="Agregar">
        </form>
                <a href="/compra/guardar_suma_producto/" class="btn btn-primary" id="btnGrabarMC">Grabar</a>
                
            </div>

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
    <script src=" {{asset('js/punto_venta/scripts.js')}}"></script>
    <script src="{{asset('js/compra/nuevo.js')}}"></script>
</body>
</html>