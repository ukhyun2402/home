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
    <!-- FONTAWESOME -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">

    <title>Home</title>
</head>

<body>
    <!-- float button related user -->
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/public/components/floating_user.php"; ?>
    <!-- nav bar -->
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/public/components/header.php"; ?>
    <!-- SlideImage -->
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/public/components/main_slide.php"; ?>
    <!-- Cards -->
    <div class="card-container">
        <h1 class="t-center w30">Cards</h1>
        <div class="t-center w60">
            <strong>cards</strong> Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias id repellat perferendis eveniet quis quam labore tempora alias explicabo aperiam? Ab excepturi cumque mollitia eum ex reiciendis cum. Eos, sapiente.</div>
        <div class="cards">
            <?php include $_SERVER['DOCUMENT_ROOT'] . "/class/card.php";
            $content = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse facere, suscipit id consequatur minima doloribus voluptatem laborum repellendus molestiae error fuga sit ex, explicabo assumenda dolor, iusto vero facilis soluta.";
            $card1 = new Card("PHP", $content, "php.png");
            $card2 = new Card("Python", $content, "python.png");
            $card3 = new Card("VueJS", $content, "vue.png");
            $card4 = new Card("PHP", $content, "php.png");
            $card5 = new Card("Python", $content, "python.png");
            $card6 = new Card("VueJS", $content, "vue.png");
            $card7 = new Card("PHP", $content, "php.png");
            $card8 = new Card("Python", $content, "python.png");
            $card9 = new Card("VueJS", $content, "vue.png");

            $card1->getHTML();
            $card2->getHTML();
            $card3->getHTML();
            $card4->getHTML();
            $card5->getHTML();
            $card6->getHTML();
            $card7->getHTML();
            $card8->getHTML();
            $card9->getHTML();
            ?>
        </div>
    </div>
    <script src="/public/js/card.js"></script>
    <!-- Load Card -->
    <script>
    var cards = document.getElementsByClassName('card');
    window.addEventListener("scroll",function(e){
        // console.log(cards);
        var win = window, doc = document, docElem = doc.documentElement, body = doc.getElementsByTagName('body')[0],
        y = win.innerHeight|| docElem.clientHeight|| body.clientHeight;
        for(var i =0; i< cards.length; i++){
            // console.log(cards[i].style.opacity);
            if ( y > cards[i].getBoundingClientRect().y+100 && cards[i].style.opacity != "1"){
                // console.log(cards[i].getBoundingClientRect().y,y);
                cards[i].style.opacity = "1";
                cards[i].style.top = "0px";
                console.log(i+"card load");
            }
        }
    });
    </script>
    <!-- Board -->

    <!-- footer -->
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/public/components/footer.php"; ?>
</body>

</html>