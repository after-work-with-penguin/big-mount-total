<?php require_once('./fragment/header.php'); ?>

<!-- contents -->
<div class="content-w-paint02" id="content-main"><!-- 페이지 속성 분기 "content-w-aaa" -->
    <div class="contentVisual-w"> <!-- 비주얼 영역 -->

        <?php require_once('./fragment/left.php'); ?>

        <!-- 우측 content-->
        <div class="contSection-right">
            <div class="contentVisual-img-w">
                <img src="./imgs/cont02-0401-top.png" alt="" class="contentVisual-img">
                <h3 class="sectionTitle">
                    <strong class="sectionTitle-bg">가설재 사업부</strong>
                    <span class="sectionTitle-eng">Meterial</span>
                </h3>
                
                <?php require_once('./fragment/right.php'); ?>

            </div>
            <!-- 콘텐츠 내용-->
            <div class="contentArticle-w">
                <h4 class="contentTitle">가설재 운용 현황</h4>
                <div class="tableImage-w">
                    <div class="tableImage-cont tableWideType">
                        <img src="./imgs/material-table01.png" alt="" class="tableImage-img">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once('./fragment/footer.php'); ?>

<?php require_once('./fragment/tail.php'); ?>