<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Bootstrap File Upload</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/fileinput.min.css">


    <script src="js/jquery-3.3.1.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/fileinput.min.js"></script>
    <script src="js/bootstrap.js"></script>
</head>

<body>

    <div class="container">
        <h2>Suba su Imagen de perfil</h2>
        <!-- Button to Open the Modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
            Abrir modal
        </button>

        <!-- The Modal -->
        <div class="modal" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Suba su imagen de perfil</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <input id="archivos" name="imagenes[]" type="file" class="file-loading" accept="image/*">
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                    </div>

                </div>
            </div>
        </div>

    </div>

</body>
<?php
    $directory = "imagenes_/";
    $images = glob($directory . "*.*");
?>

<script>
    $("#archivos").fileinput({
        uploadUrl: "upload.php",
        uploadAsync: false,
        minFileCount: 1,
        maxFileCount: 1,
        showUpload: false,
        showRemove: false,
        maxFileSize:1024,
        allowedFileTypes:['image'],
        allowedFileExtensions:['jpg'],
        initialPreview: [
            <?php foreach ($images as $image) {
    ?>
            "<img src='<?php echo $image; ?>' height='120px' class='file-preview-image'>",
            <?php
} ?>
        ],
        initialPreviewConfig: [
            <?php foreach ($images as $image) {
        $infoImagenes=explode("/", $image); ?>
            {
                caption: "<?php echo $infoImagenes[1]; ?>",
                height: "120px",
                url: "borrar.php",
                key: "<?php echo $infoImagenes[1]; ?>"
            },
            <?php
    } ?>
        ]
    }).on("filebatchselected", function(event, files) {

        $("#archivos").fileinput("upload");

    });
</script>

</html>