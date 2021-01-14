// * BG Slider
var slides = document.getElementsByClassName("slide");
var slide_index = 0;
//? displaySlides(slide_index);
setInterval(function () {
    next(1);
}, 3500);
setInterval(next(1), 1000);
next(slide_index);
function next(n) {
    slide_index += n;
    if (slide_index > slides.length - 1) {
        slide_index = 0;
    }
    if (slide_index < 0) {
        slide_index = slides.length - 1;
    }
    for (var i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slides[slide_index].style.display = "block";
}

function letsOrder() {
    location.href = "home.html";
}
