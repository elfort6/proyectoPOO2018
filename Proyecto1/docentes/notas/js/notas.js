var numeroEstudiantes=0;

var parametro="codigoSeccion="+$("#codigoSeccion").val();


function cargarTabla(){
    $.ajax({
        url: "../secciones/ajax/listado.php",
        method:"POST",
        data: parametro,
        dataType: "json",
        success: function (respuesta) {
            console.log(respuesta);
            console.log(respuesta.length);
            numeroEstudiantes=respuesta.length;
            $("#lista-notas").html(``);
            for (let i = 0; i < respuesta.length; i++) {
                $("#lista-notas").append(
                    `<tr>
                        <td id="${i+1}">${i+1}</td>
                        <td id="cuenta-${i+1}">${respuesta[i]['cuenta']}</td>
                        <td id="nombre-${i+1}">${respuesta[i]['nombre']}</td>
                        <td id="nota-${i+1}">${respuesta[i]['nota']}</td>
                        <td class="col-nota"><input id="nota-nueva-${i+1}" class="form-control num-nota" type="number"></td>
                    </tr>`
                );
            }
        },
        error: function (error) {
            console.error(error);
        }
    });
}



$(document).ready(function(){
    $("#listado-est").attr("href", `../secciones/index.php?${parametro}`);
    $("#listado-notas").attr("href", `?${parametro}`);
    //console.log(parametro);

    //cargar la informacion de la seccion
    $.ajax({
        url: "../secciones/ajax/informacion-seccion.php",
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

    //cargar el listado de los estudiantes cuenta y nombre
    cargarTabla();
    
});

//configurar la funcionalidad del boton guardar cambios
$("#guardar-cambios").click(function(){
    
    var parametros=`codigoSeccion=${$("#codigoSeccion").val()}&`;

    for (let i = 1; i < numeroEstudiantes+1; i++) {
        //estableciendo nota
        var nota=0;
        if($("#nota-nueva-"+(i)).val()==""){
            nota=$("#nota-"+(i)).html();
        }else{
            nota=$("#nota-nueva-"+(i)).val();
        }

        //$("#cuenta-"+(i)).val()
        parametros+=`item[${i}][cuenta]=${$("#cuenta-"+i).html()}&item[${i}][nota]=${nota}`;

        if(i<numeroEstudiantes){
            parametros+="&";
        }

    }
    console.log(parametros);

    //mandar a cambiar notas
    $.ajax({
        url: "ajax/actualizar-notas.php",
        method:"POST",
        data: parametros,
        dataType: "json",
        success: function (respuesta) {
            console.log(respuesta);
        },
        error: function (error) {
            console.error(error);
        }
    });
    cargarTabla();

});