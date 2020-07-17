$(document).ready(function(){
    
    $("#compra_desde").change(function(event){
        console.log("funciono");
        // var nom =$("#compra_desde").val() ;
        
       
        var desde = new Date($('#compra_desde').val());
        desde = desde.toISOString();        

        var hasta = $('#compra_hasta').val();
        var hasta = new Date($('#compra_hasta').val());
        hasta.setDate(hasta.getDate() + 1);
        hasta = hasta.toISOString();


        $.ajax({
            url : '/compra/fechas/',
            data : { antes : desde, despues : hasta  },
            type : 'GET',
            // dataType : 'json',
            success : function(response) {
                console.log(response);
                
                $("#tabla").html("<table id='tabla_tardanzas' ><tr><th>Fecha de Compra</th><th>Tipo</th><th>Factura Serie</th><th>Factura Numero</th><th>SubTotal</th><th>IGV</th><th>Total</th><th>Editar</th></tr>");
                $.each(response, function(i, val) {
                    $("#tabla_tardanzas tbody ").append("<tr>");
                    $("#tabla_tardanzas tbody ").append("<td>"+val.f_compra+"</td>");
                    $("#tabla_tardanzas tbody ").append("<td>"+val.tipo_doc+"</td>")
                    $("#tabla_tardanzas tbody ").append("<td>"+val.factura_serie+"</td>");
                    $("#tabla_tardanzas tbody ").append("<td>"+val.factura_numero+"</td>");
                    $("#tabla_tardanzas tbody ").append("<td>"+val.subtotal+"</td>");
                    $("#tabla_tardanzas tbody ").append("<td>"+val.igv+"</td>");
                    $("#tabla_tardanzas tbody ").append("<td>"+val.total+"</td>");
                    $("#tabla_tardanzas tbody ").append("<td><a href='/api/tardanzas/delete/"+val.registro+"'>"+"Editar"+"</a></td>")
                    $("#tabla_tardanzas tbody ").append("</tr></table>");
             
                    
                });
            },
            error : function(xhr, status) {
                console.log('problema buscando');
            },
            complete : function(xhr, status) {
                // alert('Petición realizada');
            }
        })
    })
});

$(document).ready(function(){
    
    $("#compra_hasta").change(function(event){
        console.log("funciono");
        // var nom =$("#compra_desde").val() ;
        
       
        var desde = new Date($('#compra_desde').val());
        desde = desde.toISOString();        

        var hasta = $('#compra_hasta').val();
        var hasta = new Date($('#compra_hasta').val());
        hasta.setDate(hasta.getDate() + 1);
        hasta = hasta.toISOString();


        $.ajax({
            url : '/compra/fechas/',
            data : { antes : desde, despues : hasta  },
            type : 'GET',
            // dataType : 'json',
            success : function(response) {
                console.log(response);
                
                $("#tabla").html("<table id='tabla_tardanzas' ><tr><th>Fecha de Compra</th><th>Tipo</th><th>F. Serie</th><th>F. Numero</th><th>SubTotal</th><th>IGV</th><th>Total</th><th>Editar</th></tr>");
                $.each(response, function(i, val) {
                    $("#tabla_tardanzas tbody ").append("<tr>");
                    $("#tabla_tardanzas tbody ").append("<td>"+val.f_compra+"</td>");
                    $("#tabla_tardanzas tbody ").append("<td>"+val.tipo_doc+"</td>")
                    $("#tabla_tardanzas tbody ").append("<td>"+val.factura_serie+"</td>");
                    $("#tabla_tardanzas tbody ").append("<td>"+val.factura_numero+"</td>");
                    $("#tabla_tardanzas tbody ").append("<td>"+val.subtotal+"</td>");
                    $("#tabla_tardanzas tbody ").append("<td>"+val.igv+"</td>");
                    $("#tabla_tardanzas tbody ").append("<td>"+val.total+"</td>");
                    $("#tabla_tardanzas tbody ").append("<td><a href='/api/tardanzas/delete/"+val.registro+"'>"+"Editar"+"</a></td>")
                    $("#tabla_tardanzas tbody ").append("</tr></table>");
             
                    
                });
            },
            error : function(xhr, status) {
                console.log('problema buscando');
            },
            complete : function(xhr, status) {
                // alert('Petición realizada');
            }
        })
    })
});