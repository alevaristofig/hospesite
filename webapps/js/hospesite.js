$(document).ready(function(){
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
});
