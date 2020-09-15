<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel='stylesheet' href="/public/css/index.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <title>Home</title>
</head>

<body>
    <!-- nav bar -->
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/public/components/header.php"; ?>
    <!-- SlideImage -->
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/public/components/main_slide.php"; ?>
    <!-- Cards -->
    <div class="card-container">
        <h1 style="text-align: center;">Cards</h1>
        <div class="cards">
            <?php include $_SERVER['DOCUMENT_ROOT'] . "/class/card.php";
            $content = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse facere, suscipit id consequatur minima doloribus voluptatem laborum repellendus molestiae error fuga sit ex, explicabo assumenda dolor, iusto vero facilis soluta.";
            $card1 = new Card("TITLE1", $content, "php.png");
            $card2 = new Card("TITLE2", $content, "python.png");
            $card3 = new Card("TITLE3", $content, "vue.png");

            $card1->getHTML();
            $card2->getHTML();
            $card3->getHTML();
            ?>
        </div>
    </div>
    <script src="/public/js/card.js"></script>

    <!--  -->
    <!-- Board -->
</body>

</html>