<?php require_once('./fragment/header.php'); ?>

<!-- contents -->
<div class="content-w-main" id="content-main"><!-- 페이지 속성 분기 "content-w-aaa" -->
    <div class="contentVisual-w"> <!-- 비주얼 영역 -->

        <?php require_once('./fragment/left.php'); ?>

        <!-- 우측 content-->
        <div class="contSection-right">
            <div class="contentVisual-img-w">
                <img src="./imgs/cont02-0101-top.png" alt="" class="contentVisual-img">
                <h3 class="sectionTitle">
                    <strong class="sectionTitle-bg">장비임대 사업부</strong>
                    <span class="sectionTitle-eng">Rental</span>
                </h3>
                
                <?php require_once('./fragment/right.php'); ?>

            </div>
            <!-- 콘텐츠 내용-->
            <div class="contentArticle-w">
                <h4 class="contentTitle">건설장비 보유현황 <span>(CRANE 14대, 카고 2대, 추레라 2대, 지게차 5대, COMP 대형 2대=25대)</span></h4>
                <div class="tableImage-w">
                    <div class="tableImage-cont">
                        <img src="./imgs/rental-table01.png" alt="" class="tableImage-img">
                    </div>
                    <div class="tableImage-cont">
                        <img src="./imgs/rental-table02.png" alt="" class="tableImage-img">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once('./fragment/footer.php'); ?>

<?php require_once('./fragment/tail.php'); ?>