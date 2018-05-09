var images = [
        'wp-content/themes/katkraw_theme/img/slider/1.jpg',
        'wp-content/themes/katkraw_theme/img/slider/2.jpg',
        'wp-content/themes/katkraw_theme/img/slider/3.jpg'
    ],
    num = 0;
    imgDuration = 7000;

function slideShow() {
    document.getElementById('slider').className += "fadeOut";
    setTimeout(function() {
        document.getElementById('slider').src = images[num];
        document.getElementById('slider').className = "";
    },1000);
    num++;
    if (num == images.length) { num = 0; }
    setTimeout(slideShow, imgDuration);
}
slideShow();