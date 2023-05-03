<?php 
require_once('./fragment/header.php'); 
$PAGE_TYPE = 'environment';
?>

<!-- contents -->
<div class="content-w-envi01" id="content-main"><!-- 페이지 속성 분기 "content-w-aaa" -->
    <div class="contentVisual-w"> <!-- 비주얼 영역 -->

        <?php require_once('./fragment/left.php'); ?>

        <!-- 우측 content-->
        <div class="contSection-right">
            <div class="contentVisual-img-w">
                <img src="./imgs/cont02-0501-top.png" alt="" class="contentVisual-img">
                <h3 class="sectionTitle">
                    <strong class="sectionTitle-bg">환경 사업부 </strong>
                    <span class="sectionTitle-eng">Environmental</span>
                </h3>
                
                <!-- right 메뉴 제거 -->

            </div>
            <!-- 콘텐츠 내용-->
            <div class="contentArticle-w">
                <h4 class="contentTitle">환경 사업부</h4>
                <div class="imgList-w">
                    <ul class="imgList-inner">
                        <li class="imgList-cont33"><img src="./imgs/environmental01.png" alt="관로형 튜브식(소형)"></li>
                        <li class="imgList-cont33"><img src="./imgs/environmental02.png" alt="관로형 튜브식(소형)"></li>
                        <li class="imgList-cont33"><img src="./imgs/environmental03.png" alt="수로형 튜브식(소형)"></li>
                        <li class="imgList-cont33"><img src="./imgs/environmental04.png" alt="수로형 튜브식(소형)"></li>
                        <li class="imgList-cont33"><img src="./imgs/environmental05.png" alt="수로형 튜브식(대형)"></li>
                        <li class="imgList-cont33"><img src="./imgs/environmental06.png" alt="수로형 튜브식(대형)"></li>
                    </ul>
                </div>
                <div class="dbdottDetail-w">
                    <strong class="dbdottDetail-title">환경관련 사업현황</strong>
                    <div class="dbdottDetail-inner">
                        <ul class="dbdottDetail-list">
                            <li class="dbdottDetail-cont">관로형 튜브식 자외선 살균 소독기 제작.설치</li>
                            <li class="dbdottDetail-cont">수로형 튜브식 자외선 살균소독기 제작.설치</li>
                            <li class="dbdottDetail-cont">수로형 랙타입 튜브식 자외선 살균소독기 제작.설치</li>
                            <li class="dbdottDetail-cont">드럼스크린 OVERHAUL.</li>
                            <li class="dbdottDetail-cont">정수 및 하수처리장 설비 수선</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once('./fragment/footer.php'); ?>

<?php require_once('./fragment/tail.php'); ?>