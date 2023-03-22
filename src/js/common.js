$(document).ready(function() {
    allMenuOpen(); //전체메뉴열기
    allMenuClose(); //전체메뉴 닫기
    allMenu1depth();//서브1댑스열기
    allMenu2depth(); //서브2댑스
    mainVisualSlick();//메인비주얼슬라이드

    /* 리사이즈 */
    // $(window).resize(function () {  });
});

//모바일:전체메뉴 열기
function allMenuOpen(){
    $('.mGnb-open').on('click',function(){
       $(this).parents('.mGnb-w').addClass('allMenuOpen');
     });
}
//모바일:전체메뉴 닫기
function allMenuClose(){
   $('.btnCloseX').on('click',function(){
    $(this).parents('.mGnb-w').removeClass('allMenuOpen');
  });
}

//모바일:전체메뉴-서브열기
function allMenu1depth(){
    $('.btnSubOpen01').on('click',function(){
        //$('.gnbList-cont').removeClass('gnb1depthCurrent');
         $(this).parents('.gnbList-cont').toggleClass('gnb1depthCurrent');
    });
}
function allMenu2depth(){
    $('.btnSubOpen').on('click',function(){
        //$('.gnbSub-cont').removeClass('gnb2depthCurrent');
        $(this).parents('.gnbSub-cont').toggleClass('gnb2depthCurrent');
      });
}

function mainVisualSlick(){
    $('.contentVisual-img-w').slick({
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


