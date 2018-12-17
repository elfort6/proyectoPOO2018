


var cargarf3main = function () {
    $.ajax({
        url: "ajax/f3.php",
        dataType: "json",
        success: function (respuesta) {
            console.log(respuesta);
            //console.log(respuesta["total"]);
            $(".f3main").html(
                ``
            );
            for (var i = 0; i < respuesta.length; i++) {
                $(".f3main").append(
                    `<tr>
                            <td>${respuesta[i].codigo}</td>
                            <td>${respuesta[i].asignatura}</td>
                            <td>${respuesta[i].seccion}</td>
                            <td>${respuesta[i].hi}</td>
                            <td>${respuesta[i].hf}</td>
                            <td>${respuesta[i].dias}</td>
                            <td>${respuesta[i].edificio}</td>
                            <td>${respuesta[i].aula }</td>
                            <td>${respuesta[i].uv }</td>
                            <td></td>
                            <td>${respuesta[i].periodo}</td>
                        </tr>
                    `
                );
            }
        },
        error: function (error) {
            console.error(error);
            console.log("No hay registros");
            $(".f3main").html(
                ``
            );
            //alert("No hay docentes disponibles para esta carrera.");
        }
    });
    
}

$(document).ready(function () {
    
    cargarf3main();
});