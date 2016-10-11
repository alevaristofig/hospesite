$(document).ready(function(){
    
    //Máscara para Cep
    $("#cep").mask("99.999-999");
    
    $.ajax({
            method: 'post',
            url: '../paginas/requisicoes_ajax.php',
            data: 'uf=be',
            success: function(result)
            {                          
                var obj = jQuery.parseJSON(result);
                                          
                for(var aux in obj)
                {
                    $("#estado").append(new Option(obj[aux].nome, obj[aux].id));              
                }
            }
        });
        
        //preenche o select cidade de acordo com o estado
        $('#estado').change(function(){
            if($(this).val() == 0)
            {
                var option = '<option value="0">Escolha uma Cidade!</option>';
                $("#cidade").html(option);
                $("#cidade").attr('disabled','disabled');
            }
            else
            {
                $.ajax({
                    method:'post',
                    url: '../paginas/requisicoes_ajax.php',
                    data: 'uf='+$(this).val(),
                    success:function(resp)
                    {
                        var obj = jQuery.parseJSON(resp);
                        var option = '<option value="0">Escolha uma Cidade!</option>';
                        $("#cidade").html(option);

                        for(var aux in obj)
                        {
                            $("#cidade").append(new Option(obj[aux].nome, obj[aux].id));              
                        }

                        $("#cidade").removeAttr('disabled');
                    }
                });
            }
            
        });
});
