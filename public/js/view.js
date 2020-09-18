
window.addEventListener('resize', when_resize);
window.onload = function(){
    when_resize();
}

function when_resize(){
    var images = document.querySelectorAll('#content img');
    var contentBox = document.querySelector('#content');

if(images){
    for(var i = 0; i < images.length; i++) {
        var imageWidth = images[i].style.width.split('px')[0];
        if (contentBox.offsetWidth < imageWidth){
            images[i].style.width = "100%";
            images[i].style.height = "auto";
        }
        else{
            images[i].style.width = imageWidth;
        }
    }
    
}
}