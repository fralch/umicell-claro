
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @foreach ($compras as $item)
        <h1>Detalles Compra</h1>
        tipo de documento <input type="text" value='{{$item->tipo_doc}}'>
        fecha   <input type="date" name="" id="" value="{{$item->f_compra}}">
        <br>
        Guia Serie: <input type="text" name="" id="" value='{{$item->guia_serie}}'>
        Guia Numero <input type="text" name="" id="" value='{{$item->guia_numero}}'>
        Factura Serie: <input type="text" name="" id="" value='{{$item->factura_serie}}'>
        Factura Numero <input type="text" name="" id="" value='{{$item->factura_numero}}'>
    @endforeach  

    <table>
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
                <td> <a href="/compra/detalle/producto/{{$value->id}}">Borrar</a>/ <a href="#">Editar</a></td>
            </tr>

        @endforeach
    </table>
</body>
</html>