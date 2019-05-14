$(document).ready(function() {

    $(document).on('blur', '#cp_arrendador', function(e){
        var cp = $(this).val();
        var url  = "https://api-codigos-postales.herokuapp.com/v2/codigo_postal/"+cp
        console.log(url);
        $.ajax({
            type: 'GET',
            url: url,
            success: function(datos) {
                console.log(datos);
                var colonias = datos.colonias;
                var municipio = datos.municipio;
                var estado = datos.estado;
                var colo = "";
                $.each( colonias, function( index, value ){
                    colo += "<option value='"+this+"'>"+this+"</option>";
                });
                $("#col_arrendr").html(colo);
                $("#mun_arrendr").val(municipio);
                $("#edo_arrendr").val(estado);
            }
        });
    });

    // $(document).on('blur', '#cp_job', function(e){
    //     var cp = $(this).val();
    //     var url  = "https://api-codigos-postales.herokuapp.com/v2/codigo_postal/"+cp
    //     $.ajax({
    //         type: 'GET',
    //         url: url,
    //         success: function(datos) {
                
    //             var colonias = datos.colonias;
    //             var municipio = datos.municipio;
    //             var estado = datos.estado;
    //             var colo = "";
    //             $.each( colonias, function( index, value ){
    //                 colo += "<option value='"+this+"'>"+this+"</option>";
    //             });
    //             $("#col_job").html(colo);
    //             $("#mun_job").val(municipio);
    //         }
    //     });
    // });

    $('#administra_inmuebleSi').click(function(){
        var value = $(this).html();
        console.log(value);
        $('#administra_inmueble').val(value);
        $('#administra_inmuebleNo').css('color',"#3B3C3E");
        $('#administra_inmuebleNo').css('background',"#EDEDED");
        $(this).css('background',"#3B3C3E");
        $(this).css('color','#EDEDED');
    });
    
    $('#administra_inmuebleNo').click(function(){
        var value = $(this).html();
        console.log(value);
        $('#administra_inmueble').val(value);
        $('#administra_inmuebleSi').css('color',"#3B3C3E");
        $('#administra_inmuebleSi').css('background',"#EDEDED");
        $(this).css('background',"#3B3C3E");
        $(this).css('color','#EDEDED');
    });

///////SEGUNDOOOOO
    $('#administrador_inmuebleSi').click(function(){
        var value = $(this).html();
        $('#administrador_inmueble').val(value);
        $('#administrador_inmuebleNo').css('color',"#3B3C3E");
        $('#administrador_inmuebleNo').css('background',"#EDEDED");
        $(this).css('background',"#3B3C3E");
        $(this).css('color','#EDEDED');
    });
    
    $('#administrador_inmuebleNo').click(function(){
        var value = $(this).html();
        $('#administrador_inmueble').val(value);
        $('#administrador_inmuebleSi').css('color',"#3B3C3E");
        $('#administrador_inmuebleSi').css('background',"#EDEDED");
        $(this).css('background',"#3B3C3E");
        $(this).css('color','#EDEDED');
    });

    //////////////////CUOTA INCLUIDA RENTA

    ///////SEGUNDOOOOO
    $('#cuota_incluida_rentaSi').click(function(){
        var value = $(this).html();
        $('#cuota_incluida_renta').val(value);
        $('#cuota_incluida_rentaNo').css('color',"#3B3C3E");
        $('#cuota_incluida_rentaNo').css('background',"#EDEDED");
        $(this).css('background',"#3B3C3E");
        $(this).css('color','#EDEDED');
    });
    
    $('#cuota_incluida_rentaNo').click(function(){
        var value = $(this).html();
        $('#cuota_incluida_renta').val(value);
        $('#cuota_incluida_rentaSi').css('color',"#3B3C3E");
        $('#cuota_incluida_rentaSi').css('background',"#EDEDED");
        $(this).css('background',"#3B3C3E");
        $(this).css('color','#EDEDED');
    });


    $("#arrendador").submit(function(e){
        e.preventDefault();
        
        var $inputs = $('#arrendador :input');
        
        var values = {};
        $('#spinner').show();
        $inputs.each(function() {
            values[this.name] = $(this).val();
        });

        $.ajax({
            type: 'POST',
            data:values,
            url: '../public/php/arrendador.php',
            success: function(datos) {
                if(datos == "registrado"){
                    $('#spinner').hide();
                    $('#saveCorrect').show();
                    $("#arrendador")[0].reset();
                }
            }
        });

        


    });


});