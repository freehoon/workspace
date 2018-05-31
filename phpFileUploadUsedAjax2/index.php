<?php
/**
 * Created by PhpStorm.
 * User: dhkang
 * Date: 2018. 5. 30.
 * Time: PM 2:54
 */
?>

<!doctype html>
<html lang="kr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>php file upload used ajax</title>
    <style>
        .fd{
            width:100%;
            height:100px;
            border : 1px solid blue;
        }
    </style>
    <script src="//code.jquery.com/jquery.min.js"></script>
</head>
<body>
    <h1>PHP file upload used ajax</h1>

    <div class="fd"></div>

    <script>
        $(".fd").on("dragenter dragover", function(event){
            event.preventDefault();
        });

        $(".fd").on("drop", function (event) {
            event.preventDefault();

            var files = event.originalEvent.dataTransfer.files;
            var file = files[0];
            var formData = new FormData();

            formData.append("file", file);

            $.ajax({
                url:'/uploadfile.php',
                data:formData,
                dataType:'text',
                processData:false,
                contentType:false,
                type:'POST',
                success:function(data){
                    alert(data);
                }
            });
        });
    </script>

</body>
</html>
