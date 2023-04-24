<?php require_once('./fragment/header.php'); ?>

<!-- contents -->
<div class="content-w-directions" id="content-main"><!-- 페이지 속성 분기 "content-w-aaa" -->
    <div class="contentVisual-w"> <!-- 비주얼 영역 -->

        <?php require_once('./fragment/left.php'); ?>

        <!-- 우측 content-->
        <div class="contSection-right">
            <div class="contentVisual-img-w">
                <img src="./imgs/cont01-04-top.png" alt="" class="contentVisual-img">
                <h3 class="sectionTitle">
                    <strong class="sectionTitle-bg">오시는 길</strong>
                    <span class="sectionTitle-eng">Directions</span>
                </h3>
                
                <!-- right 메뉴 제거 -->

            </div>
            <!-- 콘텐츠 내용-->
            <div class="contentArticle-w">
                <div class="map-w">
                    <div id="daumRoughmapContainer1679580463850" class="root_daum_roughmap root_daum_roughmap_landing"></div>
                    <script charset="UTF-8" class="daum_roughmap_loader_script" src="https://ssl.daumcdn.net/dmaps/map_js_init/roughmapLoader.js"></script>
                    <script charset="UTF-8">
                        new daum.roughmap.Lander({
                            "timestamp" : "1679580463850",
                            "key" : "2e7c7",
                            "mapWidth" : "640",
                            "mapHeight" : "360"
                        }).render();
                    </script>
                </div>
                <div class="directionsList-w">
                    <ul class="directionsList-inner">
                        <li class="directionsList-cont">서울에서 올때 송악IC로 진입</li>
                        <li class="directionsList-cont">광주, 여수에서 올때 해미 또는 서산 IC로 진입</li>
                        <li class="directionsList-cont">
                            충남 서산시 대산읍 독곶리 대산산업단지 (본사: 대산읍 평신1로 531-44)
                            <div class="directionsList-tel">
                                <span class="directionsList-num"><strong>TEL</strong>: 041-663-7332</span>
                                <span class="directionsList-num"><strong>FAX</strong>: 041-663-7331</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once('./fragment/footer.php'); ?>

<?php require_once('./fragment/tail.php'); ?>