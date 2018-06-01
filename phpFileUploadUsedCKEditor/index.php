<?php
/**
 * Created by PhpStorm.
 * User: dhkang
 * Date: 2018. 6. 1.
 * Time: PM 3:22
 */
?>

<!doctype html>
<html lang="kr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CKEditor file upload</title>
    <script src="https://cdn.ckeditor.com/4.9.2/full/ckeditor.js"></script>
</head>
<body>

<form>
    <textarea id="content"></textarea>
    <script>
        CKEDITOR.replace('content',{
            filebrowserUploadUrl:'upload.php'
        });
    </script>
</form>
</body>
</html>
