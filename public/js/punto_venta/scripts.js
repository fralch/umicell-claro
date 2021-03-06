
/*---LEFT BAR ACCORDION----*/
$(function() {
    $('#nav-accordion').dcAccordion({
      eventType: 'click',
      autoClose: true,
      saveState: true,
      disableLink: true,
      speed: 'slow',
      showCount: false,
      autoExpand: true,
      //        cookie: 'dcjq-accordion-1',
      classExpand: 'dcjq-current-parent'
    });
  });
  
  var Script = function() {
  
  
    //    sidebar dropdown menu auto scrolling
  
    jQuery('#sidebar .sub-menu > a').click(function() {
      var o = ($(this).offset());
      diff = 250 - o.top;
      if (diff > 0)
        $("#sidebar").scrollTo("-=" + Math.abs(diff), 500);
      else
        $("#sidebar").scrollTo("+=" + Math.abs(diff), 500);
    });
  
  
  
    //    sidebar toggle
  
    $(function() {
      function responsiveView() {
        var wSize = $(window).width();
        if (wSize <= 768) {
          $('#container').addClass('sidebar-close');
          $('#sidebar > ul').hide();
        }
  
        if (wSize > 768) {
          $('#container').removeClass('sidebar-close');
          $('#sidebar > ul').show();
        }
      }
      $(window).on('load', responsiveView);
      $(window).on('resize', responsiveView);
    });
  
    $('.fa-bars').click(function() {
      if ($('#sidebar > ul').is(":visible") === true) {
        $('#main-content').css({
          'margin-left': '0px'
        });
        $('#sidebar').css({
          'margin-left': '-210px'
        });
        $('#sidebar > ul').hide();
        $("#container").addClass("sidebar-closed");
      } else {
        $('#main-content').css({
          'margin-left': '210px'
        });
        $('#sidebar > ul').show();
        $('#sidebar').css({
          'margin-left': '0'
        });
        $("#container").removeClass("sidebar-closed");
      }
    });
  
    // custom scrollbar
    $("#sidebar").niceScroll({
      styler: "fb",
      cursorcolor: "#4ECDC4",
      cursorwidth: '3',
      cursorborderradius: '10px',
      background: '#404040',
      spacebarenabled: false,
      cursorborder: ''
    });
  
    //  $("html").niceScroll({styler:"fb",cursorcolor:"#4ECDC4", cursorwidth: '6', cursorborderradius: '10px', background: '#404040', spacebarenabled:false,  cursorborder: '', zindex: '1000'});
  
    // widget tools
  
    jQuery('.panel .tools .fa-chevron-down').click(function() {
      var el = jQuery(this).parents(".panel").children(".panel-body");
      if (jQuery(this).hasClass("fa-chevron-down")) {
        jQuery(this).removeClass("fa-chevron-down").addClass("fa-chevron-up");
        el.slideUp(200);
      } else {
        jQuery(this).removeClass("fa-chevron-up").addClass("fa-chevron-down");
        el.slideDown(200);
      }
    });
  
    jQuery('.panel .tools .fa-times').click(function() {
      jQuery(this).parents(".panel").parent().remove();
    });
  
  
    //    tool tips
  
    $('.tooltips').tooltip();
  
    //    popovers
  
    $('.popovers').popover();
  
  
  
    // custom bar chart
  
    if ($(".custom-bar-chart")) {
      $(".bar").each(function() {
        var i = $(this).find(".value").html();
        $(this).find(".value").html("");
        $(this).find(".value").animate({
          height: i
        }, 2000)
      })
    }
  
  }();
  
  jQuery(document).ready(function( $ ) {
  
    // Go to top
    $('.go-top').on('click', function(e) {
      e.preventDefault();
      $('html, body').animate({scrollTop : 0},500);
    });
  });

  function ajustarIframe(){

    var result = screen.height - ((16/100) * screen.height);
    console.log(result)
    document.getElementById('seccionContenido').style.height=result+'px';

};
  
  /*Navegar entre paginas*/

  function navegar(subMenuId){

    if (subMenuId == "menu_principal"){

      ajustarIframe();
      document.getElementById("contenedor_principal").style.display = 'contents';
      document.getElementById("contenedor_registro_compras").style.display = 'none';
      document.getElementById("contenedor_prductos").style.display = 'none';

      if (screen.width < 900) 
        document.getElementById("nav-accordion").style.display = 'none'
      return;
    }

    if (subMenuId == "submenu_registro_compras"){

      ajustarIframe();
      document.getElementById("contenedor_principal").style.display = 'none';
      document.getElementById("contenedor_prductos").style.display = 'none';
      document.getElementById("contenedor_registro_compras").style.display = 'contents';

      if (screen.width < 900) 
        document.getElementById("nav-accordion").style.display = 'none'
      return;
    }

    if (subMenuId == "submenu_producto"){

      ajustarIframe();
      document.getElementById("contenedor_principal").style.display = 'none';
      document.getElementById("contenedor_registro_compras").style.display = 'none';
      document.getElementById("contenedor_prductos").style.display = 'contents';

      if (screen.width < 900) 
        document.getElementById("nav-accordion").style.display = 'none'
      return;
    }


  }
  /* _________________________________________EDITAR PRODUCTO _______________________________________________________*/
    



$("#txtCostoIgvEP").keyup(function(event){

  var costoigv = $("#txtCostoIgvEP").val();
  // var igv = costo * (18/100);
  // var costo_igv = parseFloat(costo) + parseFloat(igv);
  // console.log(igv); console.log(costo); console.log(costo_igv);
  var costo = costoigv * (100/118);
  var igv = costo * (18/100);



  document.frmEditarProducto.igv.value=igv.toFixed(2);
  document.frmEditarProducto.costo.value=costo.toFixed(2);

});
