<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="./ckeditor/ckeditor.js"></script>
    <title>Document</title>
</head>
<body>
    <!-- <div id="toolbar-container"></div> -->
    <textarea id="editor" name="editor"></textarea>
</body>
<script>
    CKEDITOR.replace('editor',{
        filebrowserUploadUrl: "file.php",
        extraPlugins: 'easyimage',
        removePlugins: 'image',
    });
</script>
</html>