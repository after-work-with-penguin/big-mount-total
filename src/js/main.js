$(document).ready(function() {
    // mainVisualSlick();
    $('#content-wrap').removeClass('content-wrap');
    $('#content-inner').removeClass('content-inner');
});


function mainVisualSlick(){
    $('#content-image-slide').slick({
        dots: true,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 3400,
        draggable:true,
        speed: 400,
        fade: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows:false
    });
}