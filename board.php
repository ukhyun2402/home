<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/css/index.css">
    <link rel="stylesheet" href="/public/css/board.css">
    <!-- FONTAWESOME -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/public/components/header.php"; ?>
    <div class="board-container">
        <div class="board-header">
            <h2>Board Header</h2>
            <span>Lorem ipsum dolor sit amet consectetur adipisicing elit.</span>
        </div>
        <hr>
        <div class="board-serach"><i class="fas fa-search"></i></div>
        <div class="board-list">

        </div>
        <div class="board-write-button"><a href="/write.php">Write</a></div>
    </div>
</body>

</html>