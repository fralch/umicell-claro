$(document).ready(function(){

    // $("#txtDescripcionLP").keyup(function(event){
    $( "#Buscar_producto" ).click(function() {    
  
       // console.log("funciono?");
       
        var x =$("#txtDescripcionLP").val() ;
        // console.log(x);
        $("#tabla").html("<table class='table table-striped table-bordered table-responsive' id='t_producto' ><tr><th>Codigo Producto</th><th>Descripcion</th><th>Tipo</th></tr>");
        $.ajax({
            url : '/compra/listar_producto/busqueda',
            data : { nombre : x  },
            type : 'GET',
            dataType : 'json',
            success : function(response) {
                // console.log(response);
                let x=1;
                $("#tabla").html("<table class='table table-striped table-bordered table-responsive' id='t_producto' ><tr><th>Id Producto</th><th>Descripcion</th><th>Tipo</th></tr>");
                $.each(response, function(i, val) {
                    $("#t_producto tbody ").append("<tr>");
                    $("#t_producto tbody ").append("<td>"+'<input type="checkbox"  name="id_productos" value="'+val.id+'">'+val.cod_producto+"</td>");
                    $("#t_producto tbody ").append("<td>"+val.descripcion+"</td>");
                    $("#t_producto tbody ").append("<td>"+val.tipo+"</td>");
                    $("#t_producto tbody ").append("</tr></table>");
                    x=x++;
                });
               console.log(response);

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


$(document).ready(function(){
   
   $("#cmbIdentificacionLP").change(function(event){
        let tipo =  $("#cmbIdentificacionLP").val() ;
       console.log(tipo);
       
        if (tipo=='ICCID') {
            $("#txtCantidadLP").removeAttr("disabled");
            $("#txtICCIDLP").removeAttr("disabled");
            $("#txtICCID2LP").removeAttr("disabled");
            $("#txtIMEILP").prop('disabled', true);
        }
   })
});