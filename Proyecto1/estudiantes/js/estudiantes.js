$(document).ready(function () {
    
    
    $.ajax({
        url: "ajax/areas.php",
        dataType: "json",
        success: function (respuesta) {
            console.log(respuesta);
            //console.log(respuesta["total"]);
            $(".area").html(
                `<option value=""></option>`
            );
            for (var i = 0; i < respuesta["total"]; i++) {
                $(".area").append(
                    `<option value="${respuesta[i].clave}">${respuesta[i].nombre}</option>`
                );
            }
        },
        error: function (error) {
            console.error(error);
            console.log("No hay registros");
            $(".area").html(
                `<option value=""></option>`
            );
            alert("No hay docentes disponibles para esta carrera.");
        }
    });
    
    $("#sel1").change(function() {
        if ($("#sel1").val() == "") {
            $("#sel2").html(
                `<option value=""></option>`
            );
            alert("seleccione una opcion");
        } else {
            var parametro=`area=${$("#sel1").val()}`;
            console.log(parametro);
            $.ajax({
                url: "ajax/asignaturas.php",
                method:"POST",
                data: parametro,
                dataType: "json",
                success: function(respuesta) {
                    console.log(respuesta);
                    //console.log(respuesta["total"]);
                    $("#sel2").html(
                        `<option value=""></option>`
                    );
                    for (var i = 0; i < respuesta["total"]; i++) {
                        $("#sel2").append(
                            `<option value="${respuesta[i].codigo}">${respuesta[i].nombre}</option>`
                        );
                    }
                },
                error: function(error) {
                    console.log("No hay registros");
                    $("#sel2").html(
                        `<option value=""></option>`
                    );
                    alert("err.");
                }
            });
        }
    });

    $("#sel2").change(function() {
        if ($("#sel2").val() == "") {
            $("#sel3").html(
                `<option value=""></option>`
            );
            alert("seleccione una opcion");
        } else {
            var parametro=`clase=${$("#sel2").val()}`;
            console.log(parametro);
            $.ajax({
                url: "ajax/seccion.php",
                method:"POST",
                data: parametro,
                dataType: "json",
                success: function(respuesta) {
                    console.log(respuesta);
                    //console.log(respuesta["total"]);
                    $("#sel3").html(
                        `<option value=""></option>`
                    );
                    for (var i = 0; i < respuesta["total"]; i++) {
                        $("#sel3").append(
                            `<option value="${respuesta[i].codigo}">${respuesta[i].nombre}</option>`
                        );
                    }
                },
                error: function(error) {
                    console.log("No hay registros");
                    $("#sel3").html(
                        `<option value=""></option>`
                    );
                    alert("err.");
                }
            });
        }
    });

});