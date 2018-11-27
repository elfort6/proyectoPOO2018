$(function () {
    $("input[name='file']").on("change", function () {
        var formData = new FormData($("#uploadimage")[0]);
        var ruta = "ajax/imagen-ajax.php";
        $.ajax({
            url: ruta,
            type: "POST",
            data: formData,
            contentType: false,
            processData: false,
            success: function (datos) {
                $("#respuesta").html(datos);
            }
        });
    });
});