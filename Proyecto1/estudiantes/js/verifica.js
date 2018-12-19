function verifica(){
    $.ajax({
        url: "ajax/verifcam.php",
        dataType: "json",
        success: function(respuesta) {
            console.log(respuesta);
            if(respuesta.estadomatricula==1){
                location.href ="matricula.php";
            }else{
                alert("el periodo de matricula esta desactivado");
            }
        },
        error: function(error) {
            console.log(error);
        }
    });
}
