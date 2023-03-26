<?php require_once('./fragment/header.php'); ?>

<!-- contents -->
<div class="content-w-main" id="content-main"><!-- 페이지 속성 분기 "content-w-aaa" -->
    <div class="contentVisual-w"> <!-- 비주얼 영역 -->

        <?php require_once('./fragment/left.php'); ?>

        <!-- 우측 content-->
        <div class="contSection-right">
            <div class="contentVisual-img-w" id="content-image-slide">
                <div class="contentVisual-img-inner">
                    <img src="./imgs/cont01-02-top.png" alt="" class="contentVisual-img">
                </div>
                <div class="contentVisual-img-inner">
                    <img src="./imgs/cont01-02-top.png" alt="" class="contentVisual-img">
                </div>
                <div class="contentVisual-img-inner">
                    <img src="./imgs/cont01-02-top.png" alt="" class="contentVisual-img">
                </div>
            </div>
            <!-- 콘텐츠 내용-->
            <div class="contentArticle-w">
                <p class="mainInfo-w">
                    <strong class="txtBlue">(주)대산토탈</strong>은 20여년간 축적된 노하우로 <span class="txtGreen">건설장비, 컨테이너, 도장, 가설재, 특수 자외선 소독기제작 등 임대·판매· 설치</span>를 저렴한 가격 과 최고의 품질, 다양한 제품으로 고객만족과 행복을 위하여 최선의 서비스를 다하고 있습니다.
                </p>
            </div>
        </div>
    </div>
    <div class="serviceList-w">
        <div class="serviceList-inner">
            <div class="serviceList">
               <div class="serviceList-cont">
                    <a href="./020101-construction.php" class="serviceList-link">
                        <img src="./imgs/mainService01.png" alt="" class="serviceList-img">
                        <strong class="serviceList-text">건설장비 임대</strong>
                    </a>
                </div>
                <div class="serviceList-cont">
                    <a href="./020201-container-business.php" class="serviceList-link">
                        <img src="./imgs/mainService02.png" alt="" class="serviceList-img">
                        <strong class="serviceList-text">컨테이너 임대/판매</strong>
                    </a>    
                </div>
                <div class="serviceList-cont">
                    <a href="./020301-painting.php" class="serviceList-link">
                        <img src="./imgs/mainService03.png" alt="" class="serviceList-img">
                        <strong class="serviceList-text">쇼트 & 페인트</strong>
                    </a>
                </div>
                <div class="serviceList-cont">
                    <a href="./020401-material.php" class="serviceList-link">
                        <img src="./imgs/mainService04.png" alt="" class="serviceList-img">
                        <strong class="serviceList-text">가설재 임대</strong>
                    </a>    
                </div>
                <div class="serviceList-cont">
                    <a href="./020501-environment.php" class="serviceList-link">
                        <img src="./imgs/mainService05.png" alt="" class="serviceList-img">
                        <strong class="serviceList-text">자외선살균소독기<br/>제작/설치</strong>
                    </a>    
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once('./fragment/footer.php'); ?>

<script type="text/javascript" src="./js/main.js"></script>

<?php require_once('./fragment/tail.php'); ?>