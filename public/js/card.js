function card_hover(element){
    var title;
    var content;
    for(var i = 0; i < element.childNodes.length; i++){
        var listOfElement =  element.childNodes;
        if(listOfElement[i].className == "card-title"){
            title = listOfElement[i];
        }
        if(listOfElement[i].className == "card-content"){
            content = listOfElement[i];
        }
    }
    if(title != null){
        title.style.padding="10px";
    }
    console.log(content);
    if(content != null){
        content.style.opacity="1";
    }
}

function card_mouse_out(element){
    var title;
    var content;
    for(var i = 0; i < element.childNodes.length; i++){
        var listOfElement =  element.childNodes;
        if(listOfElement[i].className == "card-title"){
            title = listOfElement[i];
        }
        if(listOfElement[i].className == "card-content"){
            content = listOfElement[i];
        }
    }
    if(title != null){
        title.style.padding="30px";
    }
    if(content != null){
        content.style.opacity="0";
    }
}