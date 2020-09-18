<header>
    <nav>
        <div class="left">
            <a href="/">TEST</a>
        </div>
        <div class="right">
            <a href="/">Home</a>
            <a href="#">About</a>
            <a href="/board.php">Board</a>
            <a href="#">Contact</a>
            <a href="#">Admin</a>
        </div>
        <div id="nav-button">
            <i class="fa fa-bars fa-2x" onclick="show_hide_bar()"></i>
        </div>
    </nav>
</header>
<div id="hide-bar">
    <div id="void"></div>
    <div id="hide-bar-content">
        <ul>
            <li><h2>TEST</h2></li>
            <li><a href="/">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="/board.php">Board</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">Admin</a></li>
        </ul>
    </div>
</div>
<script>
    function show_hide_bar(){ 

        var voidSection = document.querySelector('#void');
        var hideBar = document.querySelector('#hide-bar-content');

        var navButton = document.querySelector('#nav-button');

        voidSection.style.display='block';
        hideBar.style.display='block';

        voidSection.addEventListener('click', function(e){
            voidSection.style.display='none';
            hideBar.style.display='none';
        });
    }
</script>