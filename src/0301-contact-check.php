<?php require_once('./fragment/header.php'); ?>

<?php 
if($isLogin) {
    echo '<script> alert("관리자는 문의글을 작성할 수 없습니다."); </script>';
    echo '<meta http-equiv="refresh" content="0 url=./0301-contact-us.php" />';
    exit;
}
?>

<!-- contents -->
<div class="content-w-contactPw" id="content-main"><!-- 페이지 속성 분기 "content-w-aaa" -->
    <div class="contentVisual-w"> <!-- 비주얼 영역 -->

        <?php require_once('./fragment/left.php'); ?>

        <!-- 우측 content-->
        <div class="contSection-right">
            <div class="contentVisual-img-w">
                <img src="./imgs/cont03-01-top.png" alt="" class="contentVisual-img">
                <h3 class="sectionTitle">
                    <strong class="sectionTitle-bg">견적문의</strong>
                    <span class="sectionTitle-eng">Contact Us</span>
                </h3>
                
                <!-- right 메뉴 제거 -->

            </div>
            <!-- 콘텐츠 내용-->
            <div class="contentArticle-w">
                <h5 class="contactTitle">견적문의</h5>
                <input type="hidden" id="contact-seq" value="<?php echo $_GET['seq']; ?>">
                <div class="passwordCheck-w">
                    <div class="passwordCheck-inner">
                        <label for="passwordCheck" class="passwordCheck-label">이 글은 비밀글입니다. <br/>비밀번호를 입력하여 주세요.</label>
                        <input type="password" name="passwordCheck" class="passwordCheck-ip" id="contact-check-password">
                    </div>
                    <div class="moduleBtn-w">
                        <div class="moduleBtn-inner">
                            <button type="button" class="bdlineBtn" onclick="moveContactList()">목록</button>
                        </div>  
                        <div class="moduleBtn-inner">
                            <button type="button" class="roundBtn" onclick="checkContact()">확인</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once('./fragment/footer.php'); ?>

<script src="./js/contactus.check.js"></script>

<?php require_once('./fragment/tail.php'); ?>