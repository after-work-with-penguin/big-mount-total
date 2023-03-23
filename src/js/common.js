$(document).ready(function() {
    initMenu_pc();
    initMenu_mobile();

    /* 리사이즈 */
    // $(window).resize(function () {  });
});

function initMenu_pc() {
    pcMenu_top();
    pcMenu_right();

    $('.rightMenuSub-w').hide();
}

function pcMenu_top() {
    $('.pc-menu-lv2').hide();
    $('.pc-menu-lv1').on('click', function() {
        var $lv2 = $(this).find('.pc-menu-lv2');
        if($lv2.css('display') == 'none') {
            $('.pc-menu-lv2').hide();
            $lv2.show();
        }else{
            $lv2.hide();
        }
    });
    // $('.pc-menu-lv1').on('mouseout', function() {
    //     $('.pc-menu-lv2').hide();
    // });
}

function pcMenu_right() {
    $('.pc-right-menu-lv2').hide();
    $('.pc-right-menu-lv1').on('click', function() {
        var $lv2 = $(this).find('.pc-right-menu-lv2');
        if($lv2.css('display') == 'none') {
            $('.pc-right-menu-lv2').hide();
            $lv2.show();
        }else{
            $lv2.hide();
        }
    });
}


function initMenu_mobile() {
    allMenuOpen(); //전체메뉴열기
    allMenuClose(); //전체메뉴 닫기
    allMenu1depth();//서브1댑스열기
    allMenu2depth(); //서브2댑스
}

//모바일:전체메뉴 열기
function allMenuOpen() {
    $('.mGnb-open').on('click', function() {
        $(this).parents('.mGnb-w').addClass('allMenuOpen');
    });
}

//모바일:전체메뉴 닫기
function allMenuClose() {
    $('.btnCloseX').on('click', function() {
        $(this).parents('.mGnb-w').removeClass('allMenuOpen');
    });
}

//모바일:전체메뉴-서브열기
function allMenu1depth() {
    $('.btnSubOpen01').on('click', function() {
        //$('.gnbList-cont').removeClass('gnb1depthCurrent');
        $(this).parents('.gnbList-cont').toggleClass('gnb1depthCurrent');
    });
}

function allMenu2depth() {
    $('.btnSubOpen').on('click', function() {
        //$('.gnbSub-cont').removeClass('gnb2depthCurrent');
        $(this).parents('.gnbSub-cont').toggleClass('gnb2depthCurrent');
    });
}


