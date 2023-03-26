<?php require_once('./fragment/header.php'); ?>

<!-- contents -->
<div class="content-w-notice" id="content-main"><!-- 페이지 속성 분기 "content-w-aaa" -->
    <div class="contentVisual-w"> <!-- 비주얼 영역 -->

        <?php require_once('./fragment/left.php'); ?>

        <!-- 우측 content-->
        <div class="contSection-right">
            <div class="contentVisual-img-w">
                <img src="./imgs/cont03-01-top.png" alt="" class="contentVisual-img">
                <h3 class="sectionTitle">
                    <strong class="sectionTitle-bg">공지사항</strong>
                    <span class="sectionTitle-eng">Notice</span>
                </h3>
                
                <?php require_once('./fragment/right.php'); ?>

            </div>
            <!-- 콘텐츠 내용-->
            <div class="contentArticle-w">
                <h5 class="contactTitle">공지사항</h5>
                <div class="boardList-w">
                    <div class="boardList-inner">
                        <table>
                            <colgroup>
                                <col scope="col" width="15%">
                                <col scope="col" width="60%">
                                <col scope="col" width="25%">
                            </colgroup>
                            <thead>
                                <tr>
                                    <th>번호</th>
                                    <th>제목</th>
                                    <th>등록일</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><span>12</span></td>
                                    <td><span>주요가이드|가이드안내</span></td>
                                    <td><span>2023.3.25</span></td>
                                </tr>
                                <tr>
                                    <td><span>11</span></td>
                                    <td><span>견적 문의 안내</span></td>
                                    <td><span>2023.3.25</span></td>
                                </tr>
                                <tr>
                                    <td><span>10</span></td>
                                    <td><span>자료실</span></td>
                                    <td><span>2023.3.25</span></td>
                                </tr>
                                <tr>
                                    <td><span>9</span></td>
                                    <td><span>대산토탈 자료실</span></td>
                                    <td><span>2023.3.25</span></td>
                                </tr>
                                <tr>
                                    <td><span>8</span></td>
                                    <td><span>주요가이드|가이드안내</span></td>
                                    <td><span>2023.3.25</span></td>
                                </tr>
                                <tr>
                                    <td><span>7</span></td>
                                    <td><span>주요가이드|가이드안내</span></td>
                                    <td><span>2023.3.25</span></td>
                                </tr>
                                <tr>
                                    <td><span>6</span></td>
                                    <td><span>주요가이드|가이드안내</span></td>
                                    <td><span>2023.3.25</span></td>
                                </tr><tr>
                                    <td><span>5</span></td>
                                    <td><span>주요가이드|가이드안내</span></td>
                                    <td><span>2023.3.25</span></td>
                                </tr>
                                <tr>
                                    <td><span>4</span></td>
                                    <td><span>주요가이드|가이드안내</span></td>
                                    <td><span>2023.3.25</span></td>
                                </tr>
                                <tr>
                                    <td><span>3</span></td>
                                    <td><span>주요가이드|가이드안내</span></td>
                                    <td><span>2023.3.25</span></td>
                                </tr>
                                <tr>
                                    <td><span>2</span></td>
                                    <td><span>주요가이드|가이드안내</span></td>
                                    <td><span>2023.3.25</span></td>
                                </tr>
                                <tr>
                                    <td><span>1</span></td>
                                    <td><span>주요가이드|가이드안내</span></td>
                                    <td><span>2023.3.25</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- 페이징버튼 -->
                    <div class="boardBtnList-w">
                        <button type="button" class="arrowBtn-prev"><img src="./imgs/pagingArrow.png" alt="이전버튼"></button>
                        <div class="boardBtnList-inner">
                            <ul class="boardBtnList">
                                <li class="boardBtnList-cont pagingCurrent"><!-- 페이징 활성화 -->
                                    <a href="#none" class="boardBtnList-num">1</a>
                                </li>
                                <li class="boardBtnList-cont">
                                    <a href="#none" class="boardBtnList-num">2</a>
                                </li>
                                <li class="boardBtnList-cont">
                                    <a href="#none" class="boardBtnList-num">3</a>
                                </li>
                                <li class="boardBtnList-cont">
                                    <a href="#none" class="boardBtnList-num">4</a>
                                </li>
                                <li class="boardBtnList-cont">
                                    <a href="#none" class="boardBtnList-num">5</a>
                                </li>
                                <li class="boardBtnList-cont">
                                    <a href="#none" class="boardBtnList-num">6</a>
                                </li>
                                <li class="boardBtnList-cont">
                                    <a href="#none" class="boardBtnList-num">7</a>
                                </li>
                                <li class="boardBtnList-cont">
                                    <a href="#none" class="boardBtnList-num">8</a>
                                </li>
                                <li class="boardBtnList-cont">
                                    <a href="#none" class="boardBtnList-num">9</a>
                                </li>
                                <li class="boardBtnList-cont">
                                    <a href="#none" class="boardBtnList-num">10</a>
                                </li>
                            </ul>
                        </div>
                        <button type="button" class="arrowBtn-next"><img src="./imgs/pagingArrow.png" alt="다음버튼"></button>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>

<?php require_once('./fragment/footer.php'); ?>

<?php require_once('./fragment/tail.php'); ?>