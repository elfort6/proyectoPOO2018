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

    //tambien se buscan las asignaturas
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
                    `<option value="${respuesta[i].clase}">${respuesta[i].nombre}</option>`
                );
            }
        },
        error: function (error) {
            console.error(error);
            console.log("No hay registros");
            $(".seleccion-asignatura").html(
                `<option value=""></option>`
            );
            alert("No hay asignaturas disponibles para esta carrera.");
        }
    });

    //cargar las secciones creadas por el coordinador
    cargarTabla();

});

// Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
    'use strict';
    window.addEventListener('load', function () {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');

        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function (form) {
            form.addEventListener('submit', function (event) {
                if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                    console.log("tamos mal :c");
                    form.classList.add('was-validated');
                } else {
                    console.log("tamos bien");
                    var parametros = $("#seccionnueva").serialize();
                    console.log(parametros);
                    $.ajax({
                        url: "ajax/crearseccion.php?opcion=1",
                        method: "POST",
                        dataType: "json",
                        data: parametros,
                        success: function (respuesta) {
                            console.log(respuesta);
                        },
                        error: function (error) {
                            console.log(error);
                        }
                    });
                }
                cargarTabla();
                limpiar();

            }, false);
        });
    }, false);
})();

$("#seccionnueva").submit(function () {
    return false;
});

function limpiar() {
    $("#seccion").val("");
    $("#asignatura").val("");
    $("#docente").val("");
    $("#cupos").val("");
    $("#dias").val("");
    $("#periodo").val("");
    $("#anio").val("");
    $("#hi").val("");
    $("#hf").val("");
    $("#eficicio").val("");
    $("#aula").val("");

    $("#crear-seccion").html("Crear Seccion");

    //$("#seccionnueva").removeClass('was-validated');

}

function cargarTabla() {
    $.ajax({
        url: "ajax/crearseccion.php?opcion=2",
        dataType: "json",
        success: function (respuesta) {
            console.log(respuesta);
            $("#secciones-creadas").html(``);

            for (var i = 0; i < respuesta.length; i++) {
                $("#secciones-creadas").append(
                    /* `seccion`, `asignatura`, `docente`, `cupos`, `dias`, `periodo`, `hora_inicial`,
                     `hora_final`, `edificio`, `aula`, `anio`, `codigosec` */
                    `<tr>
                        <td>${respuesta[i].seccion}</td>
                        <td>${respuesta[i].nombreasignatura} </td>
                        <td>${respuesta[i].nombredocente}</td>
                        <td>${respuesta[i].cupos}</td>
                        <td>${respuesta[i].dias}</td>
                        <td>${respuesta[i].periodo}</td>
                        <td>${respuesta[i].anio}</td>
                        <td>${respuesta[i].hora_inicial}</td>
                        <td>${respuesta[i].hora_final}</td>
                        <td>${respuesta[i].edificio}</td>
                        <td>${respuesta[i].aula}</td>
                        <td>
                            <button type="button" class="btn" style="padding: 1px; background:none;"
                            onclick='llenarFormulario(
                                "${respuesta[i].seccion}",
                                "${respuesta[i].asignatura}",
                                "${respuesta[i].docente}",
                                "${respuesta[i].cupos}",
                                "${respuesta[i].dias}",
                                "${respuesta[i].periodo}",
                                "${respuesta[i].anio}",
                                "${respuesta[i].hora_inicial}",
                                "${respuesta[i].hora_final}",
                                "${respuesta[i].edificio}",
                                "${respuesta[i].aula}"
                            )'>
                                Editar
                            </button>
                        </td>
                    </tr>`
                );
            }

        },
        error: function (error) {
            $("#secciones-creadas").html(``);
        }
    });
}

function llenarFormulario(seccion,nombreasignatura,nombredocente,cupos,dias,periodo,anio,hora_inicial,hora_final,edificio,aula
) {

    $("#seccion").val(seccion);
    $("#asignatura").val(nombreasignatura);
    $("#docente").val(nombredocente);
    $("#cupos").val(cupos);
    $("#dias").val(dias);
    $("#periodo").val(periodo);
    $("#anio").val(anio);


    $("#hi").val(hora_inicial);
    $("#hf").val(hora_final);

    $("#eficicio").val(edificio);
    $("#aula").val(aula);

    $("#crear-seccion").html("Actualizar Seccion");

}