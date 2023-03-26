<?php require_once('./fragment/header.php'); ?>

<!-- contents -->
<div class="content-w-main" id="content-main"><!-- 페이지 속성 분기 "content-w-aaa" -->
    <div class="contentVisual-w"> <!-- 비주얼 영역 -->

        <?php require_once('./fragment/left.php'); ?>

        <!-- 우측 content-->
        <div class="contSection-right">
            <div class="contentVisual-img-w">
                <img src="./imgs/cont02-0301-top.png" alt="" class="contentVisual-img">
                <h3 class="sectionTitle">
                    <strong class="sectionTitle-bg">도장사업부 현황 </strong>
                    <span class="sectionTitle-eng">Shoot & Paint</span>
                </h3>
                
                <?php require_once('./fragment/right.php'); ?>

            </div>
            <!-- 콘텐츠 내용-->
            <div class="contentArticle-w">
                <h4 class="contentTitle">설비현황</h4>
                <div class="imgList-w">
                    <ul class="imgList-inner">
                        <li class="imgList-cont6"><img src="./imgs/paintList01.png" alt=""></li>
                        <li class="imgList-cont"><img src="./imgs/paintList02.png" alt=""></li>
                        <li class="imgList-cont6"><img src="./imgs/paintList03.png" alt=""></li>
                        <li class="imgList-cont"><img src="./imgs/paintList04.png" alt=""></li>
                        <li class="imgList-cont"><img src="./imgs/paintList05.png" alt=""></li>
                        <li class="imgList-cont6"><img src="./imgs/paintList06.png" alt=""></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once('./fragment/footer.php'); ?>

<?php require_once('./fragment/tail.php'); ?>