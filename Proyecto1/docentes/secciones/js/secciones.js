$(document).ready(function(){
    //obteniendo las secciones
    var parametro="codigoSeccion="+$("#codigoSeccion").html();
    console.log(parametro);

    $.ajax({
        url: "ajax/informacion-seccion.php",
        method:"POST",
        data: parametro,
        dataType: "json",
        success: function (respuesta) {
            console.log(respuesta);
            $("#codigo").html(
                respuesta[0].asignatura
            );

            $("#informacionSeccion").html(
                `<h3 class="card-title pricing-card-title mx-5">${respuesta[0].nombre}</h3>
                <ul class="list-unstyled mt-3 mb-4 mx-5">
                    <li>Sección: ${respuesta[0].seccion}</li>
                    <li>Hora inicial: ${respuesta[0].hi}</li>
                    <li>Hora final: ${respuesta[0].hf}</li>
                    <li>Edificio: ${respuesta[0].edificio}</li>
                    <li>Aula:${respuesta[0].aula}</li>
                    <li>Días: ${respuesta[0].dias}</li>
                    <li>Cupos: ${respuesta[0].cupos}</li>
                </ul>`
            );
           
        },
        error: function (error) {
            console.error(error);
        }
    });
});