<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/css/index.css">
    <link rel="stylesheet" href="/public/css/board.css">
    <!-- FONTAWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>

<body>
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/public/components/header.php"; ?>

    <div id="container">
        <div class="side-nav-bar">
            <ul>
                <li>Other Board Link</li>
                <li>Other Board Link</li>
                <li>Other Board Link</li>
                <li>Other Board Link</li>
                <li>Other Board Link</li>
            </ul>
        </div>
        <div class="board-container">
            <div class="board-header">
                <h2>Board Header</h2>
                <span>Lorem ipsum dolor sit amet consectetur adipisicing elit.</span>
            </div>
            <!-- <div class="board-search"><i class="fas fa-search"></i></div> -->
            <div class="board-list">
                <?php
                include $_SERVER['DOCUMENT_ROOT'] . '/class/load_board.php';
                $board = new Load_Board("TMP_BOARD");
                echo "<table>
                        <col style='width:60%'>
                        <col >
                        <col >
                        <thead>
                            <tr>
                                <th>SUBJECT</th>
                                <th>WRITER</th>
                                <th class='board-column-date'>DATE</th>
                            </tr>
                        </thead><tbody>";
                $board->load_list('TMP_BOARD');
                echo "</tbody></table>";
                ?>
            </div>
            <div class="board-write-button">
                <a href="/write.php">Write</a>
            </div>
        </div>
    </div>
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/public/components/footer.php"; ?>
</body>

</html>