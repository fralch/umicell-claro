$(document).ready(function(){
    $("#txtDescripcionLP").keyup(function(event){
       // console.log("funciono?");
       
        var x =$("#txtDescripcionLP").val() ;
        // console.log(x);

        $.ajax({
            url : '/compra/listar_producto/busqueda',
            data : { nombre : x  },
            type : 'GET',
            dataType : 'json',
            success : function(response) {
                // console.log(response);
                let x=1;
                $("#tabla").html("<table id='t_producto' ><tr><th>Codigo Producto</th><th>Descripcion</th><th>Tipo</th></tr>");
                $.each(response, function(i, val) {
                    $("#t_producto tbody ").append("<tr>");
                    $("#t_producto tbody ").append("<td>"+'<input type="checkbox"  name="'+x+'" value="'+val.cod_producto+'">'+val.cod_producto+"</td>");
                    $("#t_producto tbody ").append("<td>"+val.descripcion+"</td>");
                    $("#t_producto tbody ").append("<td>"+val.tipo+"</td>");
                    $("#t_producto tbody ").append("</tr></table>");
                    x=x++;
                });
               //console.log(response);

            },
            error : function(xhr, status) {
               // console.log('Disculpe, existió un problema key ');
            },
            complete : function(xhr, status) {
                // alert('Petición realizada');
            }
        })
    });
});