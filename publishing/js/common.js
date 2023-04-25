

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
    $('.btnSubOpen01,.gnbList-link').on('click',function(){  // PC + 모바일
         $(this).parents('.gnbList-cont').toggleClass('gnb1depthCurrent');
    });

    // // 모바일
    // $('.mGnb-w .btnSubOpen01,.gnbList-link').on('click',function(){
    //   $(this).parents('.gnbList-cont').toggleClass('gnb1depthCurrent');
    // });

    // // pc hover
    // $('.gnb-w .gnbList-cont').hover(function() {
    //     $(this).addClass('gnb1depthCurrent');
    // }, function() {
    //     $(this).removeClass('gnb1depthCurrent');
    // });
}

function allMenu2depth(){
    $('.btnSubOpen,.gnbSub-link').on('click',function(){  // PC + 모바일
        $(this).parents('.gnbSub-cont').toggleClass('gnb2depthCurrent');
      });


    // // 모바일
    // $('.mGnb-w .btnSubOpen,.gnbSub-link').on('click',function(){
    //   $(this).parents('.gnbSub-cont').toggleClass('gnb2depthCurrent');
    // });

    // // pc hover
    // $('.gnb-w .gnbSub-w .gnbSub-link-w').hover(function() {
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


