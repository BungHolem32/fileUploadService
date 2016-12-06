<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 05/12/16
 * Time: 20:05
 */

require 'fileUploadService.php';

if (isset($_REQUEST['submit'])) {
    echo(123);
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/Services/FileUploadService/assets/css/style.css">

</head>
<body>
<div class="container">
    <!-- /.container -->
    <form id="form" action="" method="post" enctype="multipart/form-data" accept-charset="utf-8" novalidate>
        <div class="form-row">
            <label for="file_upload-1">File 1 Upload</label>
            <input id="file_upload-1" type="file" multiple name="file-upload[1]">
        </div>
        <div class="form-row">
            <label for="file_upload-2">File 1 Upload</label>
            <input id="file_upload-2" type="file" multiple name="file-upload[2]">
        </div>
        <div class="form-row submit">
            <input type="submit" value="submit!">
        </div>
    </form>
</div>

<script src="assets/libs/bower/jquery/dist/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.5/js/bootstrap.min.js"></script>
<script src="assets/libs/bower/blueimp-file-upload/js/vendor/jquery.ui.widget.js"></script>
<script src="assets/libs/bower/blueimp-file-upload/js/jquery.iframe-transport.js"></script>
<script src="assets/libs/bower/blueimp-file-upload/js/jquery.fileupload.js"></script>
<script src="assets/libs/bower/blueimp-file-upload/js/jquery.fileupload-ui.js"></script>
<script src="assets/libs/bower/blueimp-file-upload/js/jquery.fileupload-process.js"></script>
<script src="assets/libs/bower/blueimp-file-upload/js/jquery.fileupload-validate.js"></script>
<script src="assets/js/script.js"></script>
</body>
</html>
