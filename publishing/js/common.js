

//모바일:전체메뉴 열기
function allMenuOpen(){
    $('.mGnb-w .menu-trigger').on('click',function(){
       $(this).parents('.mGnb-w').toggleClass('allMenuOpen');      
       $(this).toggleClass('active');     
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
    $('.btnSubOpen01,.gnbList-link').on('click',function(){
        //$('.gnbList-cont').removeClass('gnb1depthCurrent');
         $(this).parents('.gnbList-cont').toggleClass('gnb1depthCurrent');
    });

    // // pc menu - 1 depth
    // $('.gnb-w .gnbList-cont').hover(function() {
    //     $(this).addClass('gnb1depthCurrent');
    // }, function() {
    //     $(this).removeClass('gnb1depthCurrent');
    // });
}

function allMenu2depth(){
    $('.btnSubOpen,.gnbSub-link').on('click',function(){
        //$('.gnbSub-cont').removeClass('gnb2depthCurrent');
        $(this).parents('.gnbSub-cont').toggleClass('gnb2depthCurrent');
      });

    // // pc menu - 2 depth
    // $('.gnb-w .gnbSub-w .gnbSub-link').hover(function() {
    //     $(this).parents('.gnbSub-cont').addClass('gnb2depthCurrent');
    // }, function() {
    //     $(this).parents('.gnbSub-cont').removeClass('gnb2depthCurrent');
    // });
}

// 태블릿 전체메뉴
function menuOpen(){
    $('.gnb-w .menu-trigger').on('click',function(){
        //$('.gnbList-cont').removeClass('gnb1depthCurrent');
         $(this).parents('.gnbList-w').toggleClass('menuOpen');
         $(this).toggleClass('active');
    });
    
}


