function verifica(){
    $.ajax({
        url: "ajax/verifcan.php",
        dataType: "json",
        success: function(respuesta) {
            console.log(respuesta);
            if(respuesta.estadosubirnotas==1){
                location.href ="../notas/?codigoSeccion="+$("#codigoSeccion").val();
            }else{
                alert("el periodo de subir notas esta desactiado");
            }
        },
        error: function(error) {
            console.log(error);
        }
    });
}
