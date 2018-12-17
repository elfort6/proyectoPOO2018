$(document).ready(function(){
    //terminando de llenar el perfil
    $.ajax({
        url: "ajax/informacion-docente.php",
        dataType: "json",
        success: function (respuesta) {
            //console.log(respuesta);
            //console.log(respuesta["total"]);
            $("#fecha-nacimiento").html(
                respuesta[0].fecha
            );
            $("#grado").html(
                respuesta[0].grado
            );
            $("#correo").html(
                respuesta[0].email
            );
            $("#contrato").html(
                respuesta[0].contrato
            );
        },
        error: function (error) {
            console.error(error);
        }
    });

    //obteniendo las secciones
    $.ajax({
        url: "ajax/informacion-secciones.php",
        dataType: "json",
        success: function (respuesta) {
            console.log(respuesta);
            for (var i = 0; i < respuesta.total; i++) {
                $("#secciones").html(
                    `<div class="card mb-4 shadow-sm">
                        <div class="card-header">
                            <h4 class="my-0 font-weight-normal">${respuesta[i].asignatura}</h4>
                        </div>
                        <div class="card-body">
                            <h3 class="card-title pricing-card-title">${respuesta[i].nombre}</h3>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li>Sección: ${respuesta[i].seccion}</li>
                                <li>Días: ${respuesta[i].dias}</li>
                                <li>Edificio: ${respuesta[i].edificio}</li>
                                <li>Aula: ${respuesta[i].aula}</li>
                                <li>Hora inicial: ${respuesta[i].hi}</li>
                                <li>Hora final: ${respuesta[i].hf}</li>
                            </ul>
                            <div class="modal-footer">
                                <form action="secciones/index.php" method="GET" style="width: 100%;">
                                    <input type="text" name="codigoSeccion" class="d-none" value="${respuesta[i].codigosec}"></input>
                                    <button type="submit" class="btn btn-lg btn-block btn-light text-dark">Ver Curso</button>
                                </form>
                            </div>
                        </div>
                    </div>`
                    +$("#secciones").html()
                );
            }
        },
        error: function (error) {
            //console.error(error);
        }
    });
});