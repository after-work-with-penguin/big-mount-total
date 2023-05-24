<?php require_once('./fragment/header.php'); ?>


<?php
include('./admin/db_conn.php');
include('./admin/common.php');
?>

<?php

$notice_seq = 0;
$is_access = false;
if ($_SERVER['QUERY_STRING'] != '') {
    $notice_seq = $_GET['seq'];
    if (!isEmpty($notice_seq) && is_numeric($notice_seq)) {
        $is_access = true;
    }
}

if (!$is_access) {
    viewAlert('잘못된 접근 입니다.');
    mysqli_close($conn);
    flush();
    //historyBack();
    echo ('<meta http-equiv="refresh" content="0 url=./0302-notice.php" />');
    exit;
}

$notice_seq = intval(mysqli_real_escape_string($conn, $notice_seq));

$sql  = "SELECT seq, level, title, view_count, created_at, updated_at, contents FROM dst_notice WHERE seq = " . $notice_seq;
$result = mysqli_query($conn, $sql) or exit(mysqli_error($conn));
$notice_count = $result->num_rows;
$notice_info = $result->fetch_array();
$result->free();

$result_array = array();
if ($notice_count <= 0) {
    echo "<script> alert('존재하지 않는 페이지 입니다.'); location.href = './0302-notice.php' </script>";
    exit;
}

?>

<!-- contents -->
<div class="content-w-noticeEnd" id="content-main"><!-- 페이지 속성 분기 "content-w-aaa" -->
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
                
                <!-- right 메뉴 제거 -->

            </div>
            <!-- 콘텐츠 내용-->
            <div class="contentArticle-w">
                <h5 class="contactTitle">공지사항</h5>
                <div class="boardDetail-writer">
                    <span class="writerDate"><?php echo $notice_info['created_at']; ?></span>
                </div>
                <div class="boardDetail-inner">
                    <div class="boardDetail-cont">
                        <strong class="boardDetail-title"><?php echo RemoveXSS($notice_info['title']); ?></strong>
                    </div>
                </div>
                <div class="boardDetail-comment-w">
                    <div class="boardDetail-inner">
                        <div class="boardDetail-cont">
                            <p class="boardDetail-text">
                                <?php echo RemoveXSS($notice_info['contents']); ?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="moduleBtn-w">
                    <button type="button" class="roundBtn" onclick="moveNoticeList()">목록 보기</button>
<?php if($isLogin) { ?>
                    <div class="moduleBtn-inner">
                        <button type="button" class="bdlineBtn" onclick="editNotice(<?php echo $notice_seq ?>);">수정하기</button>
                        <button type="button" class="bdlineBtn" onclick="deleteNotice(<?php echo $notice_seq ?>);">삭제하기</button>
                    </div>
<?php } ?>               
                </div>
            </div>
        </div>
        </div>
    </div>
</div>

<?php
mysqli_close($conn);
flush();
?>

<?php require_once('./fragment/footer.php'); ?>

<script> function moveNoticeList() { location.href = './0302-notice.php'; } </script>

<?php if($isLogin) { ?>
<script>
function editNotice(notice_seq) {
    location.href = './0302-notice-write.php?seq=' + notice_seq;
}

function deleteNotice(seq) {
    const notice_seq = parseInt(seq, 10);
    if (notice_seq == 0) {
        alert('잘못된 접근 입니다.');
        location.href = './0302-notice.php';
        return false;
    }

    if(confirm('공지사항글을 정말로 삭제하시겠습니까?')) {
        $.ajax({
            type: 'post',
            url: './admin/action/notice_delete.php',
            data: { seq: notice_seq },
            dataType: 'json',
            success: function (result) {
                console.log('[deleteNotice] result:: ', result);
                alert(result.message);
                location.href = './0302-notice.php';
            },
            error: function (xhr, status, error) {
                console.error('[deleteNotice] ajax error:: ', error);
            },

        });
    }
}
</script>

<?php } ?>

<?php require_once('./fragment/tail.php'); ?>