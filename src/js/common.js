$(document).ready(function() {
    initMenu_pc();
    initMenu_mobile();

    
    $('#gnb-logo').on('click', function() {
        location.href = './index.php';
    });
    
    /* 리사이즈 */
    // $(window).resize(function () {  });
});

function initMenu_pc() {
    // pcMenu_top();
    // pcMenu_right();

    // $('.rightMenuSub-w').hide();

    pcMenuOpen();
    pcMenu1depth();
    pcMenu2depth();
}

function pcMenu_top() {
    $('.pc-menu-lv2').hide();
    $('.pc-menu-lv1').on('click', function() {
        $('.pc-menu-lv1').removeClass('gnb1depthCurrent');

        var _$this = $(this);
        _$this.addClass('gnb1depthCurrent');
        var $lv2 = _$this.find('.pc-menu-lv2');
        console.log('pc-menu-top / lv2: ', $lv2);
        console.log('pc-menu-top / lv2 - display: ', $lv2.css('display'));
        if($lv2.css('display') == 'none') {
            $('.pc-menu-lv2').hide();
            $lv2.show();
        }else{
            $lv2.hide();
            $('.pc-menu-lv1').removeClass('gnb1depthCurrent');
        }
    });
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

// PC 전체메뉴
function pcMenuOpen() {
    $('.gnb-w .menu-trigger').on('click',function() {
        //$('.gnbList-cont').removeClass('gnb1depthCurrent');
        $(this).parents('.gnbList-w').toggleClass('menuOpen');
        $(this).toggleClass('active');
    });
}

// PC 메뉴 - 1depth
function pcMenu1depth() {
    // $('.gnb-w .gnbList-link').on('click',function() {
    //     $(this).parents('.gnbList-cont').toggleClass('gnb1depthCurrent');
    // });

    $('.gnb-w .pc-menu-lv1').hover(function() {
        $(this).addClass('gnb1depthCurrent');
    }, function() {
        $(this).removeClass('gnb1depthCurrent');
    });
}

// PC 메뉴 - 2depth
function pcMenu2depth() {
    // $('.gnb-w .gnbSub-link').on('click',function() {
    //     $(this).parents('.gnbSub-cont').toggleClass('gnb2depthCurrent');
    // });

    $('.gnb-w .pc-menu-lv2 .gnbSub-link-w').hover(function() {
        $(this).parents('.gnbSub-cont').addClass('gnb2depthCurrent');
    }, function() {
        $(this).parents('.gnbSub-cont').removeClass('gnb2depthCurrent');
    });
}


function initMenu_mobile() {
    allMenuOpen(); //전체메뉴열기
    allMenuClose(); //전체메뉴 닫기
    allMenu1depth();//서브1댑스열기
    allMenu2depth(); //서브2댑스
}

// 태블릿:전체메뉴 열기
function allMenuOpen() {
    $('.mGnb-w .menu-trigger').on('click',function() {
        $(this).parents('.mGnb-w').toggleClass('allMenuOpen');
        $(this).toggleClass('active');
    });
}

// // 모바일:전체메뉴 열기
// function mobileMenuOpen() {
//     $('.mGnb-open').on('click',function() {
//         $(this).parents('.mGnb-w').toggleClass('allMenuOpen');
//         $(this).toggleClass('active');
//     });
// }

//모바일:전체메뉴 닫기
function allMenuClose() {
    $('.btnCloseX').on('click', function() {
        $(this).parents('.mGnb-w').removeClass('allMenuOpen');
    });
}

//모바일:전체메뉴-서브열기
function allMenu1depth() {
    $('.mGnb-w .btnSubOpen01,.mGnb-w .gnbList-link').on('click',function() {
        //$('.gnbList-cont').removeClass('gnb1depthCurrent');
        $(this).parents('.gnbList-cont').toggleClass('gnb1depthCurrent');
    });
}

function allMenu2depth() {
    $('.mGnb-w .btnSubOpen,.mGnb-w .gnbSub-link').on('click',function() {
        //$('.gnbSub-cont').removeClass('gnb2depthCurrent');
        $(this).parents('.gnbSub-cont').toggleClass('gnb2depthCurrent');
    });
}

function readURL(input, previewElId) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#' + previewElId).attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]); // convert to base64 string
    }
}

function getParameter(name) {
    var rtnval = '';
    var nowAddress = unescape(location.href);
    var parameters = (nowAddress.slice(nowAddress.indexOf('?') + 1, nowAddress.length)).split('&');

    for (var i = 0; i < parameters.length; i++) {
        var varName = parameters[i].split('=')[0];
        if (varName.toUpperCase() == name.toUpperCase()) {
            rtnval = parameters[i].split('=')[1];
            break;
        }
    }

    return rtnval;
}

function isEmpty(param) {
    // 일반적인 비어있는지 검사
    if (!param || param == null || param == undefined || param == '' || param.length == 0) {
        return true;
    }
    // Object 인데 비어 있을 수 있으므로 ( param = {}; )
    else {
        // object 형 이라면
        if (String(typeof param).toLowerCase() === 'object') {
            // key 를 추출하여 key length 검사
            if (Object.keys(param).length === 0) {
                return true;
            } else {
                return false;
            }
        }
    }
};

function isNumeric(num, opt) {
    // 좌우 trim(공백제거)을 해준다.
    num = String(num).replace(/^\s+|\s+$/g, "");

    if (typeof opt == "undefined" || opt == "1") {
        // 모든 10진수 (부호 선택, 자릿수구분기호 선택, 소수점 선택)
        var regex = /^[+\-]?(([1-9][0-9]{0,2}(,[0-9]{3})*)|[0-9]+){1}(\.[0-9]+)?$/g;
    } else if (opt == "2") {
        // 부호 미사용, 자릿수구분기호 선택, 소수점 선택
        var regex = /^(([1-9][0-9]{0,2}(,[0-9]{3})*)|[0-9]+){1}(\.[0-9]+)?$/g;
    } else if (opt == "3") {
        // 부호 미사용, 자릿수구분기호 미사용, 소수점 선택
        var regex = /^[0-9]+(\.[0-9]+)?$/g;
    } else {
        // only 숫자만(부호 미사용, 자릿수구분기호 미사용, 소수점 미사용)
        var regex = /^[0-9]$/g;
    }

    if (regex.test(num)) {
        num = num.replace(/,/g, "");
        return isNaN(num) ? false : true;
    } else {
        return false;
    }
}

function openMap() {
    window.open('http://kko.to/ZBEShTVcBs', '', '_blank');    
}