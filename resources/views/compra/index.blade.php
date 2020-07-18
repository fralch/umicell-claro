<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compra</title>
    <script src="{{asset('js/jquery.js')}}"></script>
    
</head>
<body>
        <h1>Registo de Compras</h1>

        Desde: <input type="date" name="compra_desde" id="compra_desde">
        Hasta : <input type="date" name="compra_hasta" id="compra_hasta">
        
        <div id='tabla'></div>
        <div id='sumatoria'></div>
    <script src="{{asset('js/compra.js')}}"></script>
</body>
</html>