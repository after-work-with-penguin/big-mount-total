<?php require_once('./fragment/header.php'); ?>

<?php
include('./admin/db_conn.php');
include('./admin/common.php');
?>

<?php 
if(!$isLogin) {
    $check = mysqli_real_escape_string($conn, $_GET['check']);
    if(base64_decode($check) != 'pwchecked') {
        echo '<script> alert("잘못된 접근 입니다"); </script>';
        echo '<meta http-equiv="refresh" content="0 url=./0301-contact-us.php" />';
        exit;
    }
}

$seq = 0;
$is_access = false;
if ($_SERVER['QUERY_STRING'] != '') {
    $seq = intVal($_GET['seq']);
    if (!isEmpty($seq) && is_numeric($seq)) {
        $is_access = true;
    }
}

if (!$is_access) {
    viewAlert('잘못된 접근 입니다.');
    mysqli_close($conn);
    flush();
    //historyBack();
    echo ('<meta http-equiv="refresh" content="0 url=./0301-contact-us.php" />');
    exit;
}

$seq = intval(mysqli_real_escape_string($conn, $seq));

$sql  = "SELECT seq, name, email, phone, password, created_at, status, title, answer_id, ";
$sql .= "created_at, updated_at, deleted_at, answerd_at, question, answer FROM dst_contact WHERE seq = " . $seq;
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
                
                <!-- right 메뉴 제거 -->

            </div>
            <!-- 콘텐츠 내용-->
            <div class="contentArticle-w">
                <h5 class="contactTitle">견적문의</h5>
                <div class="boardDetail-w">
                    <div class="boardDetail-writer">
                        <span class="writerDate"><?php echo $contact_info['created_at']; ?></span>
                        <strong class="writerName"><?php echo RemoveXSS($contact_info['name']); ?></strong>
                        <div class="userProfile-w">
                            <sapn class="userProfile-text"><?php echo RemoveXSS($contact_info['email']); ?></sapn>
                            <span class="userProfile-text"><?php echo RemoveXSS($contact_info['phone']); ?></sapn>
                        </div>
                    </div>
                    <div class="boardDetail-inner">
                        <span class="boardDetail-value">Q.</span> 
                        <div class="boardDetail-cont">
                            <strong class="boardDetail-title"><?php echo RemoveXSS($contact_info['title']); ?></strong>
                            <p class="boardDetail-text"><?php echo RemoveXSS($contact_info['question']); ?></p>
                        </div>
                    </div>
<?php if($contact_info['status'] == 'A') { ?>
                    <div class="boardDetail-comment-w">
                        <div class="boardDetail-writer">
                            <span class="writerDate"><?php echo $contact_info['answerd_at']; ?></span>
                        </div>
                        <div class="boardDetail-inner">
                            <span class="boardDetail-value">A.</span>
                            <div class="boardDetail-cont">
                                <p class="boardDetail-text">
                                    <?php echo RemoveXSS($contact_info['answer']); ?>
                                </p>
                            </div>
                        </div>
                    </div>
<?php } ?>
                    <div class="moduleBtn-w">
                        <button type="button" class="roundBtn" onclick="moveContactList()">목록 보기</button>
<?php 
if($isLogin) { 
    $answerButtonText = '답글 달기';
    if($contact_info['status'] == 'A') {
        $answerButtonText = '수정 하기';
    }
?>
                        <button type="button" class="bdlineBtn" onclick="answerContact()"><?php echo $answerButtonText; ?></button>
<?php } else { ?> 
                        <button type="button" class="bdlineBtn" onclick="editContact()">수정 하기</button>
<?php } ?>


                    </div>                    
                    <input type="hidden" id="contact-seq" value="<?php echo $seq; ?>" />
                    <input type="hidden" id="contact-status" value="<?php echo $contact_info['status']; ?>" />
                    <input type="hidden" id="contact-cp" value="<?php echo base64_encode($contact_info['password']); ?>" />
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once('./fragment/footer.php'); ?>

<script src="./js/contactus.view.js"></script>

<?php require_once('./fragment/tail.php'); ?>