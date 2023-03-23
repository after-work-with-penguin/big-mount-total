$(document).ready(function() {
    mainVisualSlick();
});


function mainVisualSlick(){
    $('#content-image-slide').slick({
        dots: true,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 3500,
        draggable:true,
        speed: 200,
        fade: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows:false
    });
}