<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/css/index.css">
    <link rel="stylesheet" href="/public/css/view.css">

     <!-- FONTAWESOME -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Document</title>
</head>
<body>
    <?php
        // header
        include $_SERVER['DOCUMENT_ROOT'] . "/public/components/header.php";

        // content
        include $_SERVER['DOCUMENT_ROOT'] . "/class/load_board.php";
        $board = new Load_Board("TMP_BOARD");
        $writeId = $_GET['id'];
        $board->load_data($writeId);

        // header
        include $_SERVER['DOCUMENT_ROOT'] . "/public/components/footer.php";
    ?>
    <script src="/public/js/view.js"></script>
</body>
</html>