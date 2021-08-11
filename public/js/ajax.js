


$("#estado").change(function(event){
    $.get("pegarCidadesPorUf/"+event.target.value+"", function(res,estado){
        console.log(res);
    });
});
