$(document).ready(function() {

    $(document).on('blur', '#cp_fiador', function(e){
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
                $("#col_fiador").html(colo);
                $("#mun_fiador").val(municipio);
            }
        });
    });

    $(document).on('blur', '#cp_fiadorM', function(e){
        var cp = $(this).val();
        var url  = "https://api-codigos-postales.herokuapp.com/v2/codigo_postal/"+cp
        $.ajax({
            type: 'GET',
            url: url,
            success: function(datos) {
                var colonias = datos.colonias;
                var municipio = datos.municipio;
                var estado = datos.estado;
                var colo = "";
                $.each( colonias, function( index, value ){
                    colo += "<option value='"+this+"'>"+this+"</option>";
                });
                $("#col_fiadorM").html(colo);
                $("#mun_fiadorM").val(municipio);
            }
        });
    });


    $(document).on('blur', '#cp_representante', function(e){
        var cp = $(this).val();
        var url  = "https://api-codigos-postales.herokuapp.com/v2/codigo_postal/"+cp
        $.ajax({
            type: 'GET',
            url: url,
            success: function(datos) {
                
                var colonias = datos.colonias;
                var municipio = datos.municipio;
                var estado = datos.estado;
                var colo = "";
                $.each( colonias, function( index, value ){
                    colo += "<option value='"+this+"'>"+this+"</option>";
                });
                $("#col_representante").html(colo);
                $("#mun_representante").val(municipio);
            }
        });
    });

    $(document).on('blur', '#cp_garantia', function(e){
        var cp = $(this).val();
        var url  = "https://api-codigos-postales.herokuapp.com/v2/codigo_postal/"+cp
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
                $("#col_garantia").html(colo);
                $("#mun_garantia").val(municipio);
            }
        });
    });

    $('#afianzadoSi').click(function(){
        var value = $(this).html();
        console.log(value);
        $('#afianzado').val(value);
        $('#afianzadoNo').css('color',"#3B3C3E");
        $('#afianzadoNo').css('background',"#EDEDED");
        $(this).css('background',"#3B3C3E");
        $(this).css('color','#EDEDED');
    });
    
    $('#afianzadoNo').click(function(){
        var value = $(this).html();
        console.log(value);
        $('#afianzado').val(value);
        $('#afianzadoSi').css('color',"#3B3C3E");
        $('#afianzadoSi').css('background',"#EDEDED");
        $(this).css('background',"#3B3C3E");
        $(this).css('color','#EDEDED');
    });

    
    $('#spinner').hide();
    $("#fiador").submit(function(e){
        e.preventDefault();
        
        var $inputs = $('#fiador :input');
        
        var values = {};
        $('#spinner').show();
        $inputs.each(function() {
            values[this.name] = $(this).val();
        });
        $("#fiador")[0].reset();
        $.ajax({
            type: 'POST',
            data:values,
            url: '../public/php/fiador.php',
            success: function(datos) {
                if(datos == "registrado"){
                    $('#spinner').hide();
                    $('#saveCorrect').show();
                    $("#fiador")[0].reset();
                }
            }
        });

        


    });


});