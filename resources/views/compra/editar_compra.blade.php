<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Editar Producto
    <form action="/compra/detalles/editar_producto_guardar" method="get">
        @foreach ( $editar_producto as $valor )
            <input type="hidden" name="id" value='{{$valor->id}}'>
            Codigo <input type="text" value='{{$valor->cod_producto}}'><br>
            Producto <input type="text" value='{{$valor->descripcion}}'><br>
            Costo <input type="text" name="costo" id="" value='{{$valor->costo}}'><br>
            IGV <input type="text" name='igv' value='{{$valor->igv}}'><br>
            Costo + IGV <input type="text" name="costo_con_igv" id="" value='{{$valor->costo_con_igv}}'><br>
            <input type="submit" value="Guardar">
        @endforeach
    </form>

</body>
</html>