<?php require_once('./fragment/header.php'); ?>

<!-- contents -->
<div class="content-w-paint01" id="content-main"><!-- 페이지 속성 분기 "content-w-aaa" -->
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
                
                <!-- right 메뉴 제거 -->

            </div>
            <!-- 콘텐츠 내용-->
            <div class="contentArticle-w">
                <h4 class="contentTitle">도장사업부 현황</h4>
                <div class="paintList-w">
                    <img src="./imgs/paint00.png" alt="도장사업부현황 이미지">
                    <!--
                    <ul class="paintList-inner">
                        <li class="paintList-cont"><img src="./imgs/paint01.png" alt="최신 자동쇼트 시설 보유"></li>
                        <li class="paintList-cont"><img src="./imgs/paint02.png" alt="여유있는 실내 ROOM (대형 4실)"></li>
                        <li class="paintList-cont"><img src="./imgs/paint03.png" alt="각실마다 최신 집진시설 운용"></li>
                        <li class="paintList-cont"><img src="./imgs/paint04.png" alt="넓은 야적장 보유"></li>
                    </ul>
                    -->
                </div>
                <div class="dbdottDetail-w">
                    <strong class="dbdottDetail-title">도장 시설 현황</strong>
                    <div class="dbdottDetail-inner">
                        <ul class="dbdottDetail-list">
                            <li class="dbdottDetail-cont">PAINTING ROOM : 4실 보유(W15M X W15M 2실, W14M X W14M 2실보유) </li>
                            <li class="dbdottDetail-cont">자동쇼트장 : </li>
                            <li class="dbdottDetail-cont">수동쇼트장 : W14M X W14M </li>
                            <li class="dbdottDetail-cont">자재야적장 : 파이프 2,000,000D/I 이상 보관 적재 가능 야드 보유 </li>
                            <li class="dbdottDetail-cont">집진설비: 각 설비별, ROOM별 집진설비 운용</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once('./fragment/footer.php'); ?>

<?php require_once('./fragment/tail.php'); ?>