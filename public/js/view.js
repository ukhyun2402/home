var images = document.querySelectorAll('#content img');
var contentBox = document.querySelector('#content');

if(images){
    for(var i = 0; i < images.length; i++) {
        var imageWidth = images[i].style.width.split('px')[0];
        if (contentBox.offsetWidth < imageWidth){
            images[i].style.width = "100%";
            images[i].style.height = "auto";
        }
    }
    
}
