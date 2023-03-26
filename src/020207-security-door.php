<?php require_once('./fragment/header.php'); ?>

<!-- contents -->
<div class="content-w-main" id="content-main"><!-- 페이지 속성 분기 "content-w-aaa" -->
    <div class="contentVisual-w"> <!-- 비주얼 영역 -->

        <?php require_once('./fragment/left.php'); ?>

        <!-- 우측 content-->
        <div class="contSection-right">
            <div class="contentVisual-img-w">
                <img src="./imgs/cont02-0201-top.png" alt="" class="contentVisual-img">
                <h3 class="sectionTitle">
                    <strong class="sectionTitle-bg">컨테이너사업</strong>
                    <span class="sectionTitle-eng">Container</span>
                </h3>
                
                <?php require_once('./fragment/right.php'); ?>

            </div>
            <!-- 콘텐츠 내용-->
            <div class="contentArticle-w">
                <h4 class="contentTitle">출입문 겸용 경비실 부스</h4>
                <div class="imgList-w">
                    <ul class="imgList-inner">
                        <li class="imgList-cont5"><img src="./imgs/containerImg0701.png" alt=""></li>
                        <li class="imgList-cont5"><img src="./imgs/containerImg0702.png" alt=""></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once('./fragment/footer.php'); ?>

<?php require_once('./fragment/tail.php'); ?>