<?php require_once('./fragment/header.php'); ?>

<?php
if(!$isLogin) {
    echo ("<script>alert('관리자만 등록할 수 있습니다.');</script>");
    echo ('<meta http-equiv="refresh" content="0 url=./0302-notice.php" />');
    exit;
}
?>

<?php
include('./admin/db_conn.php');
include('./admin/common.php');

$notice_seq = 0;
if ($_SERVER['QUERY_STRING'] != '') {
    $notice_seq = $_GET['seq'];
}

$notice_seq = intval(mysqli_real_escape_string($conn, $notice_seq));

?>

<!-- contents -->
<div class="content-w-notice" id="content-main"><!-- 페이지 속성 분기 "content-w-aaa" -->
    <div class="contentVisual-w"> <!-- 비주얼 영역 -->

        <?php require_once('./fragment/left.php'); ?>

        <!-- 우측 content-->
        <div class="contSection-right">
            <div class="contentVisual-img-w">
                <img src="./imgs/cont04-01-top.png" alt="" class="contentVisual-img">
                <h3 class="sectionTitle">
                    <strong class="sectionTitle-bg">공지사항</strong>
                    <span class="sectionTitle-eng">Notice</span>
                </h3>
                
                <?php require_once('./fragment/right.php'); ?>

            </div>
            <!-- 콘텐츠 내용-->
            <div class="contentArticle-w">
                <h5 class="contactTitle">공지사항</h5>
                <div class="contactForm-w">
                    <input type="hidden" id="notice_seq" name="notice_seq" value="<?php echo $notice_seq; ?>">
                    
                    <!-- 제목 -->
                    <div class="contactForm-row wideType">
                        <div class="contactForm-cell">
                            <label for="formTitle">제목</label>
                            <input type="text" id="formTitle"/>
                        </div>
                    </div>
                    <!-- 내용 -->
                    <div class="contactForm-row">
                        <div class="contactForm-cell">
                            <label for="formText">내용</label>
                            <div id="formText" class="textArea"></div>
                        </div>
                    </div>
                    <div class="moduleBtn-w">
                        <button type="button" class="roundBtn" id="submitBtn" onclick="doSubmit(event)">등록하기</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once('./fragment/footer.php'); ?>

<!-- include libraries(bootstrap) -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<!-- include summernote css/js-->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/lang/summernote-ko-KR.js"></script>

<script src="./js/notice.write.js"></script>

<?php require_once('./fragment/tail.php'); ?>