<?php require_once('./fragment/header.php'); ?>

<!-- contents -->
<div class="content-w-main" id="content-main"><!-- 페이지 속성 분기 "content-w-aaa" -->
    <div class="contentVisual-w"> <!-- 비주얼 영역 -->

        <?php require_once('./fragment/left.php'); ?>

        <!-- 우측 content-->
        <div class="contSection-right">
            <div class="contentVisual-img-w">
                <img src="./imgs/cont01-03-top.png" alt="" class="contentVisual-img">
                <h3 class="sectionTitle">
                    <strong class="sectionTitle-bg">조직도</strong>
                    <span class="sectionTitle-eng">Organization Chart</span>
                </h3>
                
                <?php require_once('./fragment/right.php'); ?>

            </div>
            <!-- 콘텐츠 내용-->
            <div class="contentArticle-w">
                당사 각 사업부서 조직 및 업무를 안내해 드립니다. <br/>
                ㈜대산토탈은 인재와 기술에 투자로 지속적인 새로운 아이템을 개발하고 있으며,<br/>
                항상 고객과 사회로 부터 사랑받는 기업으로 성장하고 있습니다.
            </div>
            <!-- 조직도 리스트 -->
            <div class="orgChartList-w">
                <div class="orgChartList">
                    <strong class="orgChartList-valueCEO"><span class="orgChartList-label">대표이사</span></strong>
                    <ul class="orgChartList-inner">
                        <li class="orgChartList-cont">
                            <strong class="orgChartList-value"><span class="orgChartList-label">관리&회계팀</span></strong>
                        </li>
                        <li class="orgChartList-cont">
                            <strong class="orgChartList-value"><span class="orgChartList-label">연구팀</span></strong>
                            <div class="orgChartList-text">신제품 개발 및 신규사업개척</div>
                        </li>
                        <li class="orgChartList-cont">
                            <strong class="orgChartList-value"><span class="orgChartList-label">장비임대사업부</span></strong>
                            <div class="orgChartList-text">하이드로크레인, 카고크레인, 고소작업차, 지게차, 트레일러등 산업장비 임대</div>
                        </li>
                        <li class="orgChartList-cont">
                            <strong class="orgChartList-value"><span class="orgChartList-label">컨테이너 사업부</span></strong>
                            <div class="orgChartList-text">각종 사이즈 컨테이너 신품 및 중고 임대 및 판매, 초소 및 경비실, 휴게실, 이동식 주택, 화장실, 샤워실, 투명돔하우스, 이동식 스크린 골프장, 컨테이너형 수영장 등</div>
                        </li>
                        <li class="orgChartList-cont">
                            <strong class="orgChartList-value"><span class="orgChartList-label">가설재임대 사업부</span></strong>
                            <div class="orgChartList-text">비계파이프, 안전발판, 계단, 안전난간대 임대</div>
                        </li>
                        <li class="orgChartList-cont">
                            <strong class="orgChartList-value"><span class="orgChartList-label">쇼트및 도장 사업부</span></strong>
                            <div class="orgChartList-text">쇼트(표면처리), 철판/철재류 빔/파이프/피팅류등 각종 철재류 도장</div>
                        </li>
                        <li class="orgChartList-cont">
                            <strong class="orgChartList-value"><span class="orgChartList-label">환경설비 사업부</span></strong>
                            <div class="orgChartList-text">상.하수도 설비 제작 및 설치, 시운전(자외선 살균 소독기, 슬러지 수집기, 드럼스크린 Ovrhaul, 각종 펌프 설치등 상·하수도 설비 보수 등)</div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once('./fragment/footer.php'); ?>

<?php require_once('./fragment/tail.php'); ?>