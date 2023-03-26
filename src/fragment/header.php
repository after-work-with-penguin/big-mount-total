<?php
require_once('head.php');
?>

<body >
    
<div class="commonGnb-w">
    <div class="gnb-w">
        <h1 class="gnb-logo" onclick="javascript: location.href='./index.php'">
            <a href="./index.php" class="gnb-logo-link"><img src="./imgs/logo.png" alt="대산토탈"></a>
        </h1>
        <!-- 1뎁스 메뉴 -->
        <div class="gnbList-w">
            <ul class="gnbList-inner">
                <li class="gnbList-cont pc-menu-lv1">
                    <a href="javascript: void(0);" class="gnbList-link">회사소개</a>
                    <!-- 2뎁스 메뉴 -->
                    <div class="gnbSub-w pc-menu-lv2" id="pc-menu-lv2-1">
                         <ul class="gnbSub-inner" id="pc-menu-lv2-1-ul">
                            <li class="gnbSub-cont"><!-- gnb2depthCurrent 메뉴 활성화 -->
                                <a href="./0101-ceo.php" class="gnbSub-link">CEO 인사말</a>
                            </li>
                            <li class="gnbSub-cont">
                                <a href="./0102-history.php" class="gnbSub-link">주요 연혁</a>
                            </li>
                            <li class="gnbSub-cont">
                                <a href="./0103-organization.php" class="gnbSub-link">조직도</a>
                            </li>
                            <li class="gnbSub-cont">
                                <a href="./0104-map.php" class="gnbSub-link">오시는 길</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="gnbList-cont pc-menu-lv1"> <!-- gnb1depthCurrent -->
                    <a href="javascript: void(0);" class="gnbList-link">사업부 및 제품소개</a>
                    <!-- 2뎁스 메뉴 -->
                    <div class="gnbSub-w pc-menu-lv2"  id="pc-menu-lv2-2">
                        <ul class="gnbSub-inner">
                            <li class="gnbSub-cont"><!-- 메뉴 활성화 gnb2depthCurrent -->
                                <a href="javascript: void(0);" class="gnbSub-link">장비임대 사업부</a>
                            </li>
                            <li class="gnbSub-cont">
                                <a href="javascript: void(0);" class="gnbSub-link">컨테이너 사업부</a>
                            </li>
                            <li class="gnbSub-cont">
                                <a href="javascript: void(0);" class="gnbSub-link">도장 사업부</a>
                            </li>
                            <li class="gnbSub-cont">
                                <a href="javascript: void(0);" class="gnbSub-link">가설재 임대사업부</a>
                            </li>
                            <li class="gnbSub-cont">
                                <a href="javascript: void(0);" class="gnbSub-link">환경 사업부</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="gnbList-cont">
                    <a href="javascript: void(0);" class="gnbList-link">견적문의</a>
                </li>
                <li class="gnbList-cont">
                    <a href="javascript: void(0);" class="gnbList-link">공지사항</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- 모바일 gnb -->
    <div class="mGnb-w"><!-- 전체메뉴 오픈클래스 : allMenuOpen -->
        <div class="mHeader-w">
            <h1 class="mheaderLogo">
                <a href="./index.php" class="mheaderLogo-link"><img src="./imgs/m/mheaderLogo.png" alt="대신토탈"></a>
            </h1>
            <button type="button" class="stepPrev">
                <span class="iconPrevArrow"><img src="./imgs/m/iconArrowPrev.png" alt="이전"></span>
            </button>
            <button type="button" class="mGnb-open" title="전체메뉴">
                <span class="iconHambug"><img src="./imgs/m/mHambug.png" alt="전체메뉴 열기" ></span>
            </button>
        </div>
        <div class="mGnb-allMenu">
            <h1 class="gnb-logo"><img src="./imgs/m/mLogo.png" alt="대산토탈"></h1>
            <!-- 1뎁스 메뉴 -->
            <div class="gnbList-w">
                <ul class="gnbList-inner">
                    <li class="gnbList-cont">
                        <div class="gnbList-1depth">
                            <a href="javascript: void(0)" class="gnbList-link">회사소개</a>
                            <a href="#none" class="btnSubOpen01"><span class="iconArrow"><i class="hide">열기/닫기</i></span></a>
                        </div>
                        <div class="gnbSub-w">
                            <ul class="gnbSub-inner">
                                <li class="gnbSub-cont"><!-- 메뉴 활성화  gnb2depthCurrent-->
                                    <a href="./0101-ceo.php" class="gnbSub-link">CEO인사말</a>
                                </li>
                                <li class="gnbSub-cont">
                                    <a href="./0102-history.php" class="gnbSub-link">주요연혁</a>
                                </li>
                                <li class="gnbSub-cont">
                                    <a href="./0103-organization.php" class="gnbSub-link">조직도</a>
                                </li>
                                <li class="gnbSub-cont">
                                    <a href="./0104-map.php" class="gnbSub-link">오시는 길</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="gnbList-cont gnb1depthCurrent">
                        <div class="gnbList-1depth">
                            <a href="#none" class="gnbList-link">사업부 및 제품소개</a>
                            <a href="#none" class="btnSubOpen01"><span class="iconArrow"><i class="hide">열기/닫기</i></span></a>
                        </div>
                        <!-- 2뎁스 메뉴 -->
                        <div class="gnbSub-w">
                            <ul class="gnbSub-inner">
                                <li class="gnbSub-cont gnb2depthCurrent"><!-- 메뉴 활성화 -->
                                    <div class="gnbSub-link-w">
                                        <a href="#none" class="gnbSub-link">장비임대 사업부</a>
                                        <a href="#none" class="btnSubOpen"><span class="iconArrow2"><i class="hide">열기/닫기</i></span></a>
                                    </div>
                                    <!-- 3댑스 메뉴 -->
                                    <div class="gnbSub3depth-w">
                                        <ul class="gnbSub3depth-list">
                                            <li class="gnbSub3depth-inner">
                                                <a href="#none" class="gnbSub3depth-cont">건설장비 보유현황</a>
                                            </li>
                                            <li class="gnbSub3depth-inner">
                                                <a href="#none" class="gnbSub3depth-cont">부속장비 현황</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="gnbSub-cont">
                                    <div class="gnbSub-link-w">
                                        <a href="#none" class="gnbSub-link">컨테이너 사업부</a>
                                        <a href="#none" class="btnSubOpen"><span class="iconArrow2"><i class="hide">열기/닫기</i></span></a>
                                    </div>
                                    <!-- 3댑스 메뉴 -->
                                    <div class="gnbSub3depth-w">
                                        <ul class="gnbSub3depth-list">
                                            <li class="gnbSub3depth-inner">
                                                <a href="#none" class="gnbSub3depth-cont">컨테이너 사업부 현황</a>
                                            </li>
                                            <li class="gnbSub3depth-inner">
                                                <a href="#none" class="gnbSub3depth-cont">컨테이너 운용대수 현황</a>
                                            </li>
                                            <li class="gnbSub3depth-inner">
                                                <a href="#none" class="gnbSub3depth-cont">일반 컨테이너</a>
                                            </li>
                                            <li class="gnbSub3depth-inner">
                                                <a href="#none" class="gnbSub3depth-cont">스틸하우스</a>
                                            </li>
                                            <li class="gnbSub3depth-inner">
                                                <a href="#none" class="gnbSub3depth-cont">휴게실 및 흡연부스</a>
                                            </li>
                                            <li class="gnbSub3depth-inner">
                                                <a href="#none" class="gnbSub3depth-cont">경비실 및 주차부스</a>
                                            </li>
                                            <li class="gnbSub3depth-inner">
                                                <a href="#none" class="gnbSub3depth-cont">출입문 겸용 경비실 부스</a>
                                            </li>
                                            <li class="gnbSub3depth-inner">
                                                <a href="#none" class="gnbSub3depth-cont">컨테이너형 리조트(스크린골프/노래방)</a>
                                            </li>
                                            <li class="gnbSub3depth-inner">
                                                <a href="#none" class="gnbSub3depth-cont">컨테이너형 수영장</a>
                                            </li>
                                            <li class="gnbSub3depth-inner">
                                                <a href="#none" class="gnbSub3depth-cont">투명 돔하우스(펜션,리조트,별장,카페에 추천)</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="gnbSub-cont">
                                    <div class="gnbSub-link-w">
                                        <a href="#none" class="gnbSub-link">도장 사업부</a>
                                        <a href="#none" class="btnSubOpen"><span class="iconArrow2"><i class="hide">열기/닫기</i></span></a>
                                    </div>
                                    <!-- 3댑스 메뉴 -->
                                    <div class="gnbSub3depth-w">
                                        <ul class="gnbSub3depth-list">
                                            <li class="gnbSub3depth-inner">
                                                <a href="#none" class="gnbSub3depth-cont">도장사업부 현황</a>
                                            </li>
                                            <li class="gnbSub3depth-inner">
                                                <a href="#none" class="gnbSub3depth-cont">설비 현황</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="gnbSub-cont">
                                    <div class="gnbSub-link-w">
                                        <a href="#none" class="gnbSub-link">가설재 임대사업부</a>
                                        <a href="#none" class="btnSubOpen"><span class="iconArrow2"><i class="hide">열기/닫기</i></span></a>
                                    </div>
                                    <!-- 3댑스 메뉴 -->
                                    <div class="gnbSub3depth-w">
                                        <ul class="gnbSub3depth-list">
                                            <li class="gnbSub3depth-inner">
                                                <a href="#none" class="gnbSub3depth-cont">가설재 운용 현황</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="gnbSub-cont">
                                    <div class="gnbSub-link-w">
                                        <a href="#none" class="gnbSub-link">환경 사업부</a>
                                        <a href="#none" class="btnSubOpen"><span class="iconArrow2"><i class="hide">열기/닫기</i></span></a>
                                    </div>
                                    <!-- 3댑스 메뉴 -->
                                    <div class="gnbSub3depth-w">
                                        <ul class="gnbSub3depth-list">
                                            <li class="gnbSub3depth-inner">
                                                <a href="#none" class="gnbSub3depth-cont">환경관련 사업현황</a>
                                            </li>
                                            <li class="gnbSub3depth-inner">
                                            <a href="#none" class="gnbSub3depth-cont">튜브식 소독기 소개</a>
                                            </li>
                                            <li class="gnbSub3depth-inner">
                                            <a href="#none" class="gnbSub3depth-cont">관로형 튜브식 소독기 소개(In Type)</a>
                                            </li>
                                            <li class="gnbSub3depth-inner">
                                                <a href="#none" class="gnbSub3depth-cont">관로형 튜브식 소독기 소개(Out Type)</a>
                                            </li>
                                            <li class="gnbSub3depth-inner">
                                                <a href="#none" class="gnbSub3depth-cont">수로형 튜브식 소독기 소개</a>
                                            </li>
                                            <li class="gnbSub3depth-inner">
                                                <a href="#none" class="gnbSub3depth-cont">수로형 Rack Type 소독기 소개</a>
                                            </li>
                                            <li class="gnbSub3depth-inner">
                                                <a href="#none" class="gnbSub3depth-cont">대형 소독기 설치사진</a>
                                            </li>
                                            <li class="gnbSub3depth-inner">
                                                <a href="#none" class="gnbSub3depth-cont">소형 소독기 설치사진</a>
                                            </li>
                                            <li class="gnbSub3depth-inner">
                                                <a href="#none" class="gnbSub3depth-cont">소독기 부품 소개(UV Lamp)</a>
                                            </li>
                                            <li class="gnbSub3depth-inner">
                                                <a href="#none" class="gnbSub3depth-cont">소독기 부품 소개(안정기 및 기타)</a>
                                            </li>
                                            <li class="gnbSub3depth-inner">
                                                <a href="#none" class="gnbSub3depth-cont">드럼스크린 Overhul</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="gnbList-cont">
                        <a href="./0301-contact-us.php" class="gnbList-link">견적문의</a>
                    </li>
                    <li class="gnbList-cont">
                        <a href="./0302-notice.php" class="gnbList-link">공지사항</a>
                    </li>
                </ul>
            </div>
            <button type="button" class="btnCloseX" title="닫기">
                <span class="iconCloseX"><i class="hide">닫기</i></span>
            </button>
        </div>
    </div>
</div>