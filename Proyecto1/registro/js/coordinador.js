var claves=[];

$(document).ready(function() {
    $("#op3").attr("class", "nav-link active");

    //llenar las opciones de las carreras con la base de datos
    $.ajax({
        url: "php/carreras.php",
        dataType: "json",
        success: function(respuesta) {
            console.log(respuesta);
            console.log(respuesta["total"]);
            for (var i = 0; i < respuesta.total; i++) {
                $("#seleccion-carrera").append(
                    `<option value="${respuesta[i].carrera}">${respuesta[i].nombre}</option>`
                );
            }
        },
        error: function(error) {
            console.log(error);
        }
    });
    
    //una vez se selecciona una carrera se buscan los docentes asignados en dicha carrera
    $("#seleccion-carrera").change(function() {
        if ($("#seleccion-carrera").val() == "") {
            $("#seleccion-docente").html(
                `<option value=""></option>`
            );
            alert("seleccione una opcion");
        } else {
            var parametro=`carrera=${$("#seleccion-carrera").val()}`;
            console.log(parametro);
            $.ajax({
                url: "php/docentes.php",
                method:"POST",
                data: parametro,
                dataType: "json",
                success: function(respuesta) {
                    console.log(respuesta);
                    //console.log(respuesta["total"]);
                    $("#seleccion-docente").html(
                        `<option value=""></option>`
                    );
                    var claves=[];
                    for (var i = 0; i < respuesta["total"]; i++) {
                        $("#seleccion-docente").append(
                            `<option value="${respuesta[i].nombre}">${respuesta[i].nombre}</option>`
                        );
                        claves[`"${respuesta[i].nombre}"`]=respuesta[i].clave;
                    }
                    console.log(claves);
                },
                error: function(error) {
                    console.log("No hay registros");
                    $("#seleccion-docente").html(
                        `<option value=""></option>`
                    );
                    alert("No hay docentes disponibles para esta carrera.");
                }
            });
        }
    });
});



(function () {
    'use strict';
    window.addEventListener('load', function () {
        var forms = document.getElementsByClassName('needs-validation');

        var validation = Array.prototype.filter.call(forms, function (form) {
            form.addEventListener('submit', function (event) {
                if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                    console.log("tamos mal :c");
                } else {
                    console.log("tamos bien");
                    var parametros = $("#formulario-coordinador").serialize();
                    parametros+=`"&clave="${clave[$("#seleccion-docente").val()]}`
                    console.log(parametros);
                }
                form.classList.add('was-validated');
            }, false);
        });
    }, false);
})();

$("#formulario-coordinador").submit(function () {
    return false;
});