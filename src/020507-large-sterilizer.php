<?php require_once('./fragment/header.php'); ?>

<!-- contents -->
<div class="content-w-main" id="content-main"><!-- 페이지 속성 분기 "content-w-aaa" -->
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
                
                <?php require_once('./fragment/right.php'); ?>

            </div>
            <!-- 콘텐츠 내용-->
            <div class="contentArticle-w">
                <h4 class="contentTitle">대형 소독기 설치사진</h4>
                <div class="imgList-w">
                    <ul class="imgList-inner">
                        <li class="imgList-cont5"><img src="./imgs/bigclean01.png" alt=""></li>
                        <li class="imgList-cont5"><img src="./imgs/bigclean02.png" alt=""></li>
                        <li class="imgList-cont33"><img src="./imgs/bigclean03.png" alt=""></li>
                        <li class="imgList-cont33"><img src="./imgs/bigclean04.png" alt=""></li>
                        <li class="imgList-cont33"><img src="./imgs/bigclean05.png" alt=""></li>
                        <li class="imgList-cont5"><img src="./imgs/bigclean06.png" alt=""></li>
                        <li class="imgList-cont5"><img src="./imgs/bigclean07.png" alt=""></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once('./fragment/footer.php'); ?>

<?php require_once('./fragment/tail.php'); ?>