$(document).ready(function() {

    $(document).on('blur', '#cp1', function(e){
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
                $("#col1").html(colo);
                $("#mun1").val(municipio);
            }
        });
    });

    $(document).on('blur', '#cp_job', function(e){
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
                $("#col_job").html(colo);
                $("#mun_job").val(municipio);
            }
        });
    });

    $('#divFacSi').click(function(){
        var value = $(this).html();
        console.log(value);
        $('#reqFac').val(value);
        $('#divFacNo').css('color',"#3B3C3E");
        $('#divFacNo').css('background',"#EDEDED");
        $(this).css('background',"#3B3C3E");
        $(this).css('color','#EDEDED');
    });
    
    $('#divFacNo').click(function(){
        var value = $(this).html();
        console.log(value);
        $('#reqFac').val(value);
        $('#divFacSi').css('color',"#3B3C3E");
        $('#divFacSi').css('background',"#EDEDED");
        $(this).css('background',"#3B3C3E");
        $(this).css('color','#EDEDED');
    });

///////SEGUNDOOOOO
    $('#recCompSi').click(function(){
        var value = $(this).html();
        $('#reqComp').val(value);
        $('#recCompNo').css('color',"#3B3C3E");
        $('#recCompNo').css('background',"#EDEDED");
        $(this).css('background',"#3B3C3E");
        $(this).css('color','#EDEDED');
    });
    
    $('#recCompNo').click(function(){
        var value = $(this).html();
        $('#reqComp').val(value);
        $('#recCompSi').css('color',"#3B3C3E");
        $('#recCompSi').css('background',"#EDEDED");
        $(this).css('background',"#3B3C3E");
        $(this).css('color','#EDEDED');
    });

    $('#saveCorrect').hide();

    $('#close-modal').click(function(){
        $('#saveCorrect').fadeOut(300);
    });

    $("#arrendatario").submit(function(e){
        e.preventDefault();
        
        var $inputs = $('#arrendatario :input');
        
        var values = {};
        $('#spinner').show();
        $inputs.each(function() {
            values[this.name] = $(this).val();
        });

        $.ajax({
            type: 'POST',
            data:values,
            url: '../public/php/arrendatario.php',
            success: function(datos) {
                if(datos == "registrados"){
                    $('#spinner').hide();
                    $('#saveCorrect').show();
                    $("#arrendatario")[0].reset();
                }
            }
        });

        


    });


});