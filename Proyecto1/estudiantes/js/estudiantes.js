var cargarf3 = function () {
    $.ajax({
        url: "ajax/f3.php",
        dataType: "json",
        success: function (respuesta) {
            console.log(respuesta);
            //console.log(respuesta["total"]);
            $(".f3").html(
                ``
            );
            for (var i = 0; i < respuesta.length; i++) {
                $(".f3").append(
                    `<tr>
                            <td>${respuesta[i].codigo}</td>
                            <td>${respuesta[i].asignatura}</td>
                            <td>${respuesta[i].seccion}</td>
                            <td>${respuesta[i].hi}</td>
                            <td>${respuesta[i].hf}</td>
                            <td>${respuesta[i].dias}</td>
                            <td>${respuesta[i].edificio}</td>
                            <td>${respuesta[i].aula }</td>
                            <td><button type="button" class="btn" style="padding: 1px; background:none;">Cancelar</button></td>
                        </tr>
                    `
                );
            }
        },
        error: function (error) {
            console.error(error);
            console.log("No hay registros");
            $(".f3").html(
                ``
            );
            //alert("No hay docentes disponibles para esta carrera.");
        }
    });
    
}


$(document).ready(function () {
    cargarf3();
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

    $("#boton-matricular").click(function(){
        
        var parametro="seccion="+$("#sel3").val();

        $.ajax({
            url: "ajax/matricular.php",
            method:"POST",
            data: parametro,
            dataType: "text",
            success: function(respuesta) {
                console.log(respuesta);
                cargarf3();
            },
            error: function(error) {
                console.error("no funcionó");
            }
        });

    });

});