$(document).ready(function(){
    //obteniendo las secciones
    var parametro="codigoSeccion="+$("#codigoSeccion").val();
    $("#listado-est").attr("href", `?${parametro}`);
    $("#listado-notas").attr("href", `../notas/index.php?${parametro}`);

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


    //Obteniendo el listado de estudiantes
    $.ajax({
        url: "ajax/listado.php",
        method:"POST",
        data: parametro,
        dataType: "json",
        success: function (respuesta) {
            console.log(respuesta);
            console.log(respuesta.length);
            for (let i = 0; i < respuesta.length; i++) {
                $("#lista-estudiantes").append(
                    `<tr>
                        <td>${i+1}</td>
                        <td id="cuenta-${i+1}">${respuesta[i]['cuenta']}</td>
                        <td id="nombre-${i+1}">${respuesta[i]['nombre']}</td>
                        <td id="email-${i+1}">${respuesta[i]['email']}</td>
                        <td id="correo-institucional-${i+1}">${respuesta[i]['correo_institucional']}</td>
                    </tr>`
                );

                $("#p1").append(
                    `${respuesta[i]['email']};`
                );
                $("#p2").append(
                    `${respuesta[i]['correo_institucional']};`
                );
            }
        },
        error: function (error) {
            console.error(error);
        }
    });

});

function copiarAlPortapapeles(id_elemento) {
    var aux = document.createElement("input");
    aux.setAttribute("value", document.getElementById(id_elemento).innerHTML);
    document.body.appendChild(aux);
    aux.select();
    document.execCommand("copy");
    document.body.removeChild(aux);
  }

  function descargarexcel() {
      console.log("descarga excel");
    
  }

  function descargarpdf() {
    console.log("descarga pdf");
  
}