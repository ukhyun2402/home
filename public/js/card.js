function card_hover(element) {
    var title;
    var content;
    for (var i = 0; i < element.childNodes.length; i++) {
        var listOfElement = element.childNodes;
        if (listOfElement[i].className == "card-title") {
            title = listOfElement[i];
        }
        if (listOfElement[i].className == "card-content") {
            content = listOfElement[i];
        }
    }
    if (title) {
        title.style.top = "10%";
    }
    if (content) {
        content.style.opacity = "1";
        content.style.bottom = "40%";
    }
}

function card_mouse_out(element) {
    var title;
    var content;
    for (var i = 0; i < element.childNodes.length; i++) {
        var listOfElement = element.childNodes;
        if (listOfElement[i].className == "card-title") {
            title = listOfElement[i];
        }
        if (listOfElement[i].className == "card-content") {
            content = listOfElement[i];
        }
    }
    if (title) {
        title.style.top = "30%";
    }
    if (content) {
        content.style.opacity = "0";
        content.style.bottom = "30%";
    }
}

function card_load(){
    var cards = document.getElementsByClassName('card');
    window.addEventListener('scroll',function(e){
        console.log(cards);
    })        
}