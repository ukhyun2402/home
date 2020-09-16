<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/css/index.css">
    <link rel="stylesheet" href="/public/css/board.css">
    <!-- FONTAWESOME -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
    <!-- CKEDITOR5 -->
    <script src="https://cdn.ckeditor.com/ckeditor5/22.0.0/classic/ckeditor.js"></script>
    <!-- <script src="https://cdn.ckeditor.com/ckeditor5/22.0.0/balloon-block/ckeditor.js"></script> -->

    <title>Document</title>
</head>

<body>
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/public/components/header.php"; ?>
    <div id="editor">
        <p>This is some sample content</p>
    </div>
</body>
<script>
    ClassicEditor.create(document.querySelector("#editor"));
    // BalloonEditor
    // BalloonEditor.create(document.querySelector("#editor"))
</script>
</html>