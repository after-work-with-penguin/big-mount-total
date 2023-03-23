<?php require_once('./fragment/header.php'); ?>

<!-- contents -->
<div class="content-w-main" id="content-main"><!-- 페이지 속성 분기 "content-w-aaa" -->
    <div class="contentVisual-w"> <!-- 비주얼 영역 -->

        <?php require_once('./fragment/left.php'); ?>

        <!-- 우측 content-->
        <div class="contSection-right">
            <div class="contentVisual-img-w">
                <img src="./imgs/cont01-01-top.png" alt="" class="contentVisual-img">
                <h3 class="sectionTitle">
                    <strong class="sectionTitle-bg">CEO 인사말</strong>
                    <span class="sectionTitle-eng">Greeting</span>
                </h3>
                
                <?php require_once('./fragment/right.php'); ?>

            </div>
            <!-- 콘텐츠 내용-->
            <div class="contentArticle-w">
                <div class="ceoInfo-w">
                    <div class="ceoPhoto-w">
                        <img src="./imgs/ceoPhoto.png" alt="대산토탈 대표이사 최태환">
                    </div>
                    <p class="ceoText">
                        <strong class="txtBlue">대산토탈</strong>은 고객여러분의 지원에 힘입어 플랜트 건설에 필요한 종합적인 서비스를 제공하는 파트너 기업으로 성장하였습니다. 고객 여러분께 진심어린 감사의 말씀을 드립니다. 2001년 크레인, 컨테이너 분야에 임대사업을 시작으로 설립된 저희 회사는 건설장비, 컨테이너, 도장 · 쇼트, 가설재, 환경산업 분야에 이르기까지 종합적인 파트너 기업으로서의 면모를 갖추게 되었습니다. 지속적인 교육과 인재의 고용을 통하여 안전사고 예방 및 사고 재발 방지를 위한 시스템을 갖추고, 신뢰할 수 있는 경험과 높은 품질의 서비스를 바탕으로 믿고 협력할 수 있는 기업, 함께 하고싶은 기업으로 거듭 성장할 수 있도록 전 임직원과 함께 최선을 다하겠습니다. 높은 관심과 지원에 감사드리며 늘 최선을 다하는 기업이 되겠습니다.<br/>
                        감사합니다. <br/>
                        대산토탈 대표이사
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once('./fragment/footer.php'); ?>

<?php require_once('./fragment/tail.php'); ?>