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
                <h4 class="contentTitle">소독기 부품 UV LAMP 소개</h4>
                <div class="lampList-w">
                    <img src="./imgs/environmental0205-0901.png" alt="" class="lampTable-img">
                    <div class="lampList-inner">
                        <strong class="infoBgTitle">High Output (HO) Quartz Germicidal Lamps</strong>
                        <img src="./imgs/environmental0205-0902.png" alt="" class="lampTable-img">
                    </div>
                    <div class="lampList-inner">
                        <strong class="infoBgTitle">UVC Amalgam Germicidal Lamps (아말감 램프)</strong>
                        <img src="./imgs/environmental0205-0903.png" alt="" class="lampTable-img">
                    </div>
                    <div class="lampList-cont">
                        <img src="./imgs/environmental0205-0904.png" alt="" class="lampTable-img">
                        <div class="detailList-w">
                            <div class="detailList-title-w">
                                <strong class="detailList-title">주문형 고압 램프 특징</strong>
                            </div>
                            <div class="detailList-inner">
                                <ol>
                                    <li>1. 사용수명 : 16,000시간 이상 보증</li>
                                    <li>2. 흑화 현상이 없음</li>
                                    <li>3. 소켓이 필요 없음(소켓열화현상 제거)</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once('./fragment/footer.php'); ?>

<?php require_once('./fragment/tail.php'); ?>