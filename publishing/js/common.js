

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

// 태블릿 전체메뉴
function menuOpen(){
    $('.gnb-w .menu-trigger').on('click',function(){
        //$('.gnbList-cont').removeClass('gnb1depthCurrent');
         $(this).parents('.gnbList-w').toggleClass('menuOpen');
         $(this).toggleClass('active');
    });
    
}


