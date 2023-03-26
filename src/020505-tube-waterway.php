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
                <h4 class="contentTitle">수로형 튜브식 소독기 소개</h4>
                <div class="textNimgList-w">
                    <div class="textNimgList-inner">
                        <div class="textNimgList-cont">
                            <div class="detailList-title-w">
                                <strong class="detailList-title">소독기 구조</strong>
                            </div>
                            <div class="detailList-image-w"><img src="./imgs/environmental0205-0501.png" alt=""></div>
                            <div class="textNimgText-w">
                                <ul class="textNimgText-inner">
                                    <li>수로형 소독기는 처리장의 구조가 수로형인 경우에 해당됨. </li>
                                    <li>유량계가 설치된 상태에서 유량계 후단에 설치하는 방식이며, 신규하수처리장의 경우 설계시 소독기를 유량계 전단에 배치하고 유량계를 소독기 후단에 배치하면 더욱 효율적임. </li>
                                    <li>주로 소형 마을하수도에 적합한 소독기 임.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="textNimgList-inner">
                        <div class="textNimgList-cont">
                            <div class="detailList-title-w">
                                <strong class="detailList-title">소독기 사진</strong>
                            </div>
                            <div class="detailList-image-w"><img src="./imgs/environmental0205-0502.png" alt=""></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once('./fragment/footer.php'); ?>

<?php require_once('./fragment/tail.php'); ?>