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
                <h4 class="contentTitle">부속장비 현황 <span>(LIFTING DEVICE, SPECIAL WIRE ROPE, SHACKLE, MAN BASKET 등)</span></h4>
                <div class="rentalList-w">
                    <ul class="rentalList-inner">
                        <li class="rentalList-cont"><img src="./imgs/rentalList01.png" alt=""></li>
                        <li class="rentalList-cont"><img src="./imgs/rentalList02.png" alt=""></li>
                        <li class="rentalList-cont"><img src="./imgs/rentalList03.png" alt=""></li>
                        <li class="rentalList-cont"><img src="./imgs/rentalList04.png" alt=""></li>
                        <li class="rentalList-cont"><img src="./imgs/rentalList05.png" alt=""></li>
                        <li class="rentalList-cont"><img src="./imgs/rentalList06.png" alt=""></li>
                        <li class="rentalList-cont"><img src="./imgs/rentalList07.png" alt=""></li>
                        <li class="rentalList-cont"><img src="./imgs/rentalList08.png" alt=""></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once('./fragment/footer.php'); ?>

<?php require_once('./fragment/tail.php'); ?>