<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="public/js/lib/ckeditor/ckeditor.js"></script>
    <link rel="stylesheet" href="/public/css/index.css">
    <link rel="stylesheet" href="/public/css/write.css">
    <!-- FONTAWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <title>Write</title>
</head>
<body>
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/public/components/header.php"; ?>

    <div id="write-container">
        <form action="write_back.php" method="post">
            <h2>Temporary Board</h2>
            <input type="text" name="title" id="">
            <textarea id="editor" name="editor"></textarea>
            <input type="submit" value="write">
        </form>
    </div>
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/public/components/footer.php"; ?>
</body>
<script>
    CKEDITOR.replace('editor',{
        filebrowserUploadUrl: "file.php",
        height:600,
        width:"100%",
    });
</script>
</html>