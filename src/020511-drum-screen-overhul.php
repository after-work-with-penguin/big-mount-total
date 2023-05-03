<?php 
require_once('./fragment/header.php'); 
$PAGE_TYPE = 'environment';
?>

<!-- contents -->
<div class="content-w-envi11" id="content-main"><!-- 페이지 속성 분기 "content-w-aaa" -->
    <div class="contentVisual-w"> <!-- 비주얼 영역 -->

        <?php require_once('./fragment/left.php'); ?>

        <!-- 우측 content-->
        <div class="contSection-right">
            <div class="contentVisual-img-w">
                <img src="./imgs/cont02-0501-top2.png" alt="" class="contentVisual-img">
                <h3 class="sectionTitle">
                    <strong class="sectionTitle-bg">환경 사업부 </strong>
                    <span class="sectionTitle-eng">Environmental</span>
                </h3>
                
                <!-- right 메뉴 제거 -->

            </div>
            <!-- 콘텐츠 내용-->
            <div class="contentArticle-w">
                <h4 class="contentTitle">드럼스크린 OVERHAUL</h4>
                <div class="detailList-wrap">
                    <div class="detailList-w">
                        <div class="detailList-title-w">
                            <strong class="detailList-title">현상</strong>
                        </div>
                        <div class="dbdottDetail-inner">
                            <ul class="dbdottDetail-list">
                                <li class="dbdottDetail-cont">장기가동에 따른 ROLLER와 양측 BODY 마모로 잦은 현장 보수 발생</li>
                                <li class="dbdottDetail-cont">잦은 현장보수로 인한 불균일한 회전 발생</li>
                                <li class="dbdottDetail-cont">불균일한 회전 발생으로 인한 피니언과 기어 이상 현상 발생</li>
                                <li class="dbdottDetail-cont">잦은 용접으로 미세목 스크린 변형 발생</li>
                            </ul>
                        </div>
                    </div>
                    <div class="detailList-w">
                        <div class="detailList-title-w">
                            <strong class="detailList-title">수선방법</strong>
                        </div>
                        <div class="dbdottDetail-inner evniRepair">
                            <img src="./imgs/environmental11.png" alt="수선방법 순서">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once('./fragment/footer.php'); ?>

<?php require_once('./fragment/tail.php'); ?>