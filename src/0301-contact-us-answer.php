<?php require_once('./fragment/header.php'); ?>

<?php
if(!$isLogin) {
    echo '<script> alert("관리자만 문의글을 작성할 수 있습니다."); </script>';
    echo '<meta http-equiv="refresh" content="0 url=./0301-contact-us.php" />';
    exit;
}
?>

<?php
include('./admin/db_conn.php');
include('./admin/common.php');

$seq = 0;
if ($_SERVER['QUERY_STRING'] != '') {
    $seq = $_GET['seq'];
}

$seq = intval(mysqli_real_escape_string($conn, $seq));
if (isEmpty($seq) || $seq == 0) {
    viewAlert('잘못된 접근 입니다.');
    echo ('<meta http-equiv="refresh" content="0 url=./0301-contact-us.php" />');
    mysqli_close($conn);
    flush();
    exit;
}

$sql  = "SELECT seq, name, email, phone, status, title, answer_id, ";
$sql .= "created_at, updated_at, answerd_at, question, answer FROM dst_contact WHERE seq = " . $seq;
$result = mysqli_query($conn, $sql) or exit(mysqli_error($conn));
$contact_count = $result->num_rows;
$contact_info = $result->fetch_array();
$result->free();

if($contact_count == 0) {
    viewAlert('존재하지 않는 견적 문의 입니다.');
    echo ('<meta http-equiv="refresh" content="0 url=./0301-contact-us.php" />');
    mysqli_close($conn);
    flush();
    exit;
}

$submitButtonText = '답글 달기';
if($contact_info['status'] == 'A') {
    $submitButtonText = '수정 하기';
}
?>

<!-- contents -->
<div class="content-w-contactEnd" id="content-main"><!-- 페이지 속성 분기 "content-w-aaa" -->
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
                
                <?php require_once('./fragment/right.php'); ?>

            </div>
            <!-- 콘텐츠 내용-->
            <div class="contentArticle-w">
                <h5 class="contactTitle">견적문의</h5>
                <div class="boardDetail-w">
                    <div class="boardDetail-writer">
                        <strong class="writerName"><?php echo RemoveXSS($contact_info['name']); ?></strong>
                        <span class="writerDate"><?php echo $contact_info['created_at']; ?></span>
                    </div>
                    <div class="boardDetail-inner">
                        <span class="boardDetail-value">Q.</span> 
                        <div class="boardDetail-cont">
                            <strong class="boardDetail-title"><?php echo RemoveXSS($contact_info['title']); ?></strong>
                            <p class="boardDetail-text"><?php echo RemoveXSS($contact_info['question']); ?></p>
                        </div>
                    </div>
                    <div class="boardDetail-comment-w">
                        <div class="boardDetail-inner">
                            <span class="boardDetail-value">A.</span>
                            <div class="boardDetail-text"> <!-- boardDetail-cont -->
                                <div class="contactForm-cell"> <!-- boardDetail-text -->
                                    <textarea id="contact-answer" class="textArea"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="moduleBtn-w">
                        <button type="button" class="roundBtn" onclick="moveContactList()">목록 보기</button>
                        <button type="button" class="bdlineBtn" onclick="saveAnswerContact()"><?php echo $submitButtonText; ?></button>
                    </div>                    
                    <input type="hidden" id="contact-seq" value="<?php echo $seq; ?>" />
                    <input type="hidden" id="contact-status" value="<?php echo $contact_info['status']; ?>" />
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once('./fragment/footer.php'); ?>

<script>
function saveAnswerContact() {
    const $tempForm = $('<form></form>');
    $tempForm.attr('method', 'post');
    $tempForm.attr('action', './admin/action/contactus_answer.php');

    $tempForm.append($('<input />', { type: 'hidden', name: 'seq', value: $('#contact-seq').val() }));
    $tempForm.append($('<input />', { type: 'hidden', name: 'status', value: $('#contact-status').val() }));
    $tempForm.append($('<input />', { type: 'hidden', name: 'answer', value: $('#contact-answer').val() }));    
    
    $tempForm.appendTo('body');

    $tempForm.submit();
}
</script>

<?php require_once('./fragment/tail.php'); ?>