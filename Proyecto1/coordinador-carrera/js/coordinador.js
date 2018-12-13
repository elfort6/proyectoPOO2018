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

});

// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
    'use strict';
    window.addEventListener('load', function() {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');

        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                    console.log("tamos mal :c");
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
                form.classList.add('was-validated');
            }, false);
        });
    }, false);
})();

$("#seccionnueva").submit(function() {
    return false;
});