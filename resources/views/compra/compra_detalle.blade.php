@php
    $compra_id='';    
@endphp

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
    <link href="/css/fonts.css" rel="stylesheet">
    <link href="/css/normalize.css" rel="stylesheet">
    <link href="/css/punto_venta/styles.css" rel="stylesheet">

    <title>Modificar compra</title>
  </head>
  <body>
​<div id='content_ListaPreguntas' class = "content" style='display:block'>

    <div class="card"></div>
        <div class="card-header">
            <strong>MODIFICAR COMPRA</strong>
        </div>
        <div class="card-title">DETALLES DE COMPRA</div>
        <div class="card-body card-block">

        @foreach ($compras as $item)
            @php
                $compra_id=$item->id;
            @endphp
            <div class="row form-group">
            <label for="text-input" class="form-control-label col-md-1">Tipo de Documento</label>
                <input type="text" class="form-control" id="txtTipoDocumentoMC" value='{{$item->tipo_doc}}' readOnly>
            </div>
            <div class="row form-group">
                <label for="text-input" class="form-control-label col-md-1">Fecha</label>
               <div class="input-group date" id="dtpFechaCompraMC" data-target-input="nearest">
                    <input class="form-control" type="date" name="compra_desde" value='{{$item->f_compra}}' readOnly>
                </div>
            </div>
            <div class="row form-group">
            <label for="text-input" class="form-control-label col-md-1">Guia Serie</label>
            <input type="text" class="form-control" id="txtGuiaSerieMC" value='{{$item->guia_serie}}' readOnly>

            <label for="text-input" class="form-control-label col-md-1">Guia Número</label>
            <input type="text" class="form-control" id="txtGuiaNumeroMC" value='{{$item->guia_numero}}' readOnly>
            </div>
            <div class="row form-group">
                <label for="text-input" class="form-control-label col-md-1">Factura Serie</label>
                <input type="text" class="form-control" id="txtFacturaSerieMC" value='{{$item->factura_serie}}'readOnly>
    
                <label for="text-input" class="form-control-label col-md-1">Factura Número</label>
                <input type="text" class="form-control" id="txtFacturaNumeroMC" value='{{$item->factura_numero}}'readOnly>
            </div>
        
            <div class="form-inline">
                <label for="text-input" class="form-control-label">Sub. Total S/</label>
                <input type="text" class="form-control" id="txtSubtotalMC" value='{{$item->subtotal}}'readOnly>
    
                <label for="text-input" class="form-control-label">IGV S/</label>
                <input type="text" class="form-control" id="txtIgvMC" value='{{$item->igv}}'readOnly>
    
                <label for="text-input" class="form-control-label">TOTAL S/</label>
                <input type="text" class="form-control" id="txtTotalMC" value='{{$item->total}}'readOnly>
            </div>
            <br>
            @endforeach   
            
        </div>
        <div class="card-title">COMPRAS REALIZADAS</div>
        <div class="card-body card-block">
            <!-- AJAX -->
            <div class="form-group" id="tabla">
                <table class='table table-striped table-bordered table-responsive' id='tbl_Compras'>
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
                </table>
            </div>
            <!-- FIN AJAX -->
            <div class="col form-group">
                {{-- <button type="button" class="btn btn-primary" id="btnAgregarMC">Agregar</button> --}}
                <!-- <button type="button" class="btn btn-primary" id="btnGrabarMC">Grabar</button> -->
                <a href="/compra/listar_producto" class="btn btn-primary" id="btnAgregarMC">Agregar</a>
                <a href="/compra/guardar_suma_producto/{{$compra_id}}" class="btn btn-primary" id="btnGrabarMC">Grabar</a>
            </div>

        </div>   
    </div> 
      

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="/js/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script class="include" type="text/javascript" src="/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="/js/jquery.scrollTo.min.js"></script>
    <script src="/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="/js/punto_venta/scripts.js"></script>
</body>
</html>