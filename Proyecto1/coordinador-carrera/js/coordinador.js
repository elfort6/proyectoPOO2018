$(document).ready(function () {
    //una vez se selecciona una carrera se buscan los docentes asignados en dicha carrera

    $.ajax({
        url: "ajax/docentes.php",
        dataType: "json",
        success: function (respuesta) {
            console.log(respuesta);
            //console.log(respuesta["total"]);
            $(".seleccion-docente").html(
                `<option value=""></option>`
            );
            for (var i = 0; i < respuesta["total"]; i++) {
                $(".seleccion-docente").append(
                    `<option value="${respuesta[i].n_empleado}">${respuesta[i].nombre}</option>`
                );
            }
        },
        error: function (error) {
            console.error(error);
            console.log("No hay registros");
            $(".seleccion-docente").html(
                `<option value=""></option>`
            );
            alert("No hay docentes disponibles para esta carrera.");
        }
    });

    $.ajax({
        url: "ajax/asignaturas.php",
        dataType: "json",
        success: function (respuesta) {
            console.log(respuesta);
            //console.log(respuesta["total"]);
            $(".seleccion-asignatura").html(
                `<option value=""></option>`
            );
            for (var i = 0; i < respuesta["total"]; i++) {
                $(".seleccion-asignatura").append(
                    `<option value="${respuesta[i].nombre}">${respuesta[i].nombre}</option>`
                );
            }
        },
        error: function (error) {
            console.error(error);
            console.log("No hay registros");
            $(".seleccion-asignatura").html(
                `<option value=""></option>`
            );
            alert("No hay docentes disponibles para esta carrera.");
        }
    });

});