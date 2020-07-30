$(document).ready(function(){

    var fecha = new Date(); //Fecha actual
    var mes = fecha.getMonth()+1; //obteniendo mes
    var mesa = fecha.getMonth()+0; //obteniendo mes
    var dia = fecha.getDate(); //obteniendo dia
    var ano = fecha.getFullYear(); //obteniendo año

    if(dia<10)
        dia='0'+dia; //agrega cero si el menor de 10
    if(mes<10)
        mes='0'+mes;
    if(mesa<10)
        mesa='0'+mesa;
    

    
    document.getElementById('dtpDesdeRC').value=ano+"-"+mesa+"-"+dia;
    document.getElementById('dtpHastaRC').value=ano+"-"+mes+"-"+dia;
    var desde = new Date($('#dtpDesdeRC').val());
    desde = desde.toISOString();        

    var hasta = $('#dtpHastaRC').val();
    var hasta = new Date($('#dtpHastaRC').val());
    hasta.setDate(hasta.getDate() + 1);
    hasta = hasta.toISOString();


    $.ajax({
        url : '/compra/fecha/',
        data : { antes : desde, despues : hasta  },
        type : 'GET',
        // dataType : 'json',
        success : function(response) {
            // console.log(response);
            let subtotal=0;
            let igv=0;
            let total=0;
            $("#tabla").html("<table class='table table-striped table-bordered' id='tabla_compras' ><tr><th>FECHA DE COMPRA</th><th>TIPO</th><th>FACTURA SERIE</th><th>FACTURA NÚMERO</th><th>SUBTOTAL</th><th>IGV</th><th>TOTAL</th><th>EDITAR</th></tr>");
            $.each(response, function(i, val) {
                $("#tabla_compras tbody ").append("<tr>");
                $("#tabla_compras tbody ").append("<td>"+val.f_compra+"</td>");
                $("#tabla_compras tbody ").append("<td>"+val.tipo_doc+"</td>");
                $("#tabla_compras tbody ").append("<td>"+val.factura_serie+"</td>");
                $("#tabla_compras tbody ").append("<td>"+val.factura_numero+"</td>");
                $("#tabla_compras tbody ").append("<td>"+val.subtotal+"</td>");
                $("#tabla_compras tbody ").append("<td>"+val.igv+"</td>");
                $("#tabla_compras tbody ").append("<td>"+val.total+"</td>");
                $("#tabla_compras tbody ").append("<td><a href='/compra/detalle/"+val.id+"'>"+"Editar"+"</a></td>");
                $("#tabla_compras tbody ").append("</tr></table>");
                
                subtotal=parseFloat(subtotal)+parseFloat(val.subtotal);
                igv=parseFloat(igv)+parseFloat(val.igv);
                total=parseFloat(total)+parseFloat(val.total); 

                $("#subtotal_").html('<input type="text" id="txtSubtotal" name="number-input" class="form-control" value="'+parseFloat(subtotal).toFixed(2)+'" readonly>');
                $("#igv_").html('<input type="text" id="txtSubtotal" name="number-input" class="form-control" value="'+parseFloat(igv).toFixed(2)+'" readonly>');
                $("#total_").html('<input type="text" id="txtSubtotal" name="number-input" class="form-control" value="'+parseFloat(total).toFixed(2)+'" readonly>');
            });
            console.log(subtotal);
            console.log(igv);
            console.log(total);
            // $("#sumatoria").html("SubTotal: "+parseFloat(subtotal).toFixed(2)+' '+"IGV: "+parseFloat(igv).toFixed(2)+" "+"Total: "+parseFloat(total).toFixed(2));
        
        },
        error : function(xhr, status) {
            console.log('problema buscando'+desde + hasta);
        },
        complete : function(xhr, status) {
            // alert('Petición realizada');
        }
    })

    
    $("#dtpDesdeRC").change(function(event){
        console.log("funciono");
        // var nom =$("#compra_desde").val() ;
            
       
        var desde = new Date($('#dtpDesdeRC').val());
        desde = desde.toISOString();        

        var hasta = $('#dtpHastaRC').val();
        var hasta = new Date($('#dtpHastaRC').val());
        hasta.setDate(hasta.getDate() + 1);
        hasta = hasta.toISOString();


        $.ajax({
            url : '/compra/fecha/',
            data : { antes : desde, despues : hasta  },
            type : 'GET',
            // dataType : 'json',
            success : function(response) {
                // console.log(response);
                let subtotal=0;
                let igv=0;
                let total=0;
                $("#tabla").html("<table  class='table table-striped table-bordered' id='tabla_compras' ><tr><th>FECHA DE COMPRA</th><th>TIPO</th><th>FACTURA SERIE</th><th>FACTURA NÚMERO</th><th>SUBTOTAL</th><th>IGV</th><th>TOTAL</th><th>EDITAR</th></tr>");
                $.each(response, function(i, val) {
                    $("#tabla_compras tbody ").append("<tr>");
                    $("#tabla_compras tbody ").append("<td>"+val.f_compra+"</td>");
                    $("#tabla_compras tbody ").append("<td>"+val.tipo_doc+"</td>");
                    $("#tabla_compras tbody ").append("<td>"+val.factura_serie+"</td>");
                    $("#tabla_compras tbody ").append("<td>"+val.factura_numero+"</td>");
                    $("#tabla_compras tbody ").append("<td>"+val.subtotal+"</td>");
                    $("#tabla_compras tbody ").append("<td>"+val.igv+"</td>");
                    $("#tabla_compras tbody ").append("<td>"+val.total+"</td>");
                    $("#tabla_compras tbody ").append("<td><a href='/api/tardanzas/delete/"+val.id+"'>"+"Editar"+"</a></td>");
                    $("#tabla_compras tbody ").append("</tr></table>");
                    
                    subtotal=parseFloat(subtotal)+parseFloat(val.subtotal);
                    igv=parseFloat(igv)+parseFloat(val.igv);
                    total=parseFloat(total)+parseFloat(val.total); 

                    $("#subtotal_").html('<input type="text" id="txtSubtotal" name="number-input" class="form-control" value="'+parseFloat(subtotal).toFixed(2)+'" readonly>');
                    $("#igv_").html('<input type="text" id="txtSubtotal" name="number-input" class="form-control" value="'+parseFloat(igv).toFixed(2)+'" readonly>');
                    $("#total_").html('<input type="text" id="txtSubtotal" name="number-input" class="form-control" value="'+parseFloat(total).toFixed(2)+'" readonly>');
                });
                console.log(subtotal);
                console.log(igv);
                console.log(total);
                // $("#sumatoria").html("SubTotal: "+parseFloat(subtotal).toFixed(2)+' '+"IGV: "+parseFloat(igv).toFixed(2)+" "+"Total: "+parseFloat(total).toFixed(2));
               
            },
            error : function(xhr, status) {
                console.log('problema buscando'+desde + hasta);
            },
            complete : function(xhr, status) {
                // alert('Petición realizada');
            }
        })
    })
});

$(document).ready(function(){
    
    $("#dtpHastaRC").change(function(event){
       // console.log("funciono");
        // var nom =$("#compra_desde").val() ;
        
       
        var desde = new Date($('#dtpDesdeRC').val());
        desde = desde.toISOString();        

        var hasta = $('#dtpHastaRC').val();
        var hasta = new Date($('#dtpHastaRC').val());
        hasta.setDate(hasta.getDate() + 1);
        hasta = hasta.toISOString();

        

        $.ajax({
            url : '/compra/fecha/',
            data : { antes : desde, despues : hasta  },
            type : 'GET',
            // dataType : 'json',
            success : function(response) {
                // console.log(response);
                let subtotal=0;
                let igv=0;
                let total=0;
                $("#tabla").html("<table class='table table-striped table-bordered' id='tabla_compras' ><tr><th>FECHA DE COMPRA</th><th>TIPO</th><th>FACTURA SERIE</th><th>FACTURA NÚMERO</th><th>SUBTOTAL</th><th>IGV</th><th>TOTAL</th><th>EDITAR</th></tr>");
                $.each(response, function(i, val) {
                    $("#tabla_compras tbody ").append("<tr>");
                    $("#tabla_compras tbody ").append("<td>"+val.f_compra+"</td>");
                    $("#tabla_compras tbody ").append("<td>"+val.tipo_doc+"</td>");
                    $("#tabla_compras tbody ").append("<td>"+val.factura_serie+"</td>");
                    $("#tabla_compras tbody ").append("<td>"+val.factura_numero+"</td>");
                    $("#tabla_compras tbody ").append("<td>"+val.subtotal+"</td>");
                    $("#tabla_compras tbody ").append("<td>"+val.igv+"</td>");
                    $("#tabla_compras tbody ").append("<td>"+val.total+"</td>");
                    $("#tabla_compras tbody ").append("<td><a href='/api/tardanzas/delete/"+val.id+"'>"+"Editar"+"</a></td>");
                    $("#tabla_compras tbody ").append("</tr></table>");
                    
                    subtotal=parseFloat(subtotal)+parseFloat(val.subtotal);
                    igv=parseFloat(igv)+parseFloat(val.igv);
                    total=parseFloat(total)+parseFloat(val.total); 
                    $("#subtotal_").html('<input type="text" id="txtSubtotal" name="number-input" class="form-control" value="'+parseFloat(subtotal).toFixed(2)+'" readonly>');
                    $("#igv_").html('<input type="text" id="txtSubtotal" name="number-input" class="form-control" value="'+parseFloat(igv).toFixed(2)+'" readonly>');
                    $("#total_").html('<input type="text" id="txtSubtotal" name="number-input" class="form-control" value="'+parseFloat(total).toFixed(2)+'" readonly>');
                    
                });
                console.log(subtotal);
                console.log(igv);
                console.log(total);
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

