<?php require_once('./fragment/header.php'); ?>


<?php
include('./admin/db_conn.php');
include('./admin/common.php');
?>

<?php
// 게시굴 수
$item_row_count = 10;
// 하단 페이지 block 수 (1, 2, 3, 4, ...  이런거)
$page_block_count = 10;

$sql = "SELECT COUNT(*) FROM dst_notice WHERE deleted_at IS NULL";

$result = mysqli_query($conn, $sql) or exit(mysqli_error($conn));
$total_count = mysqli_fetch_array($result);
$total_count = intval($total_count[0]);
$result->free();

// 현재 페이지
$page = isset($_GET['page']) ? trim($_GET['page']) : 1;

$paging_info = getPagingInfo($page, $total_count, $item_row_count, $page_block_count);
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
                
                <!-- right 메뉴 제거 -->

            </div>
            <!-- 콘텐츠 내용-->
            <div class="contentArticle-w">
                <h5 class="contactTitle">공지사항</h5>
                <div class="boardList-w">

<?php if($isLogin) { ?>
                    <div class="moduleBtn-w">
                        <button type="button" class="roundBtn" onclick="noticeWrite()">글쓰기</button>
                    </div>
<?php } ?>
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
<?php
$sql  = "
SELECT notice_page.* FROM ( 
    SELECT @rownum:=@rownum-1 as num, notice.seq, notice.level, notice.title, notice.view_count, notice.created_at 
    FROM dst_notice notice, (SELECT @rownum:=(select count(*) from dst_notice WHERE deleted_at IS NULL)+1) rownum_temp 
    WHERE notice.deleted_at IS NULL ORDER BY notice.seq desc 
) notice_page LIMIT " . $paging_info['page_db'] . ", $item_row_count
";
$result = mysqli_query($conn, $sql) or exit(mysqli_error($conn));
$notice_length = $result->num_rows;

if ($notice_length > 0) {
    while ($row = $result->fetch_array()) {
        echo '<tr onclick=getNoticeInfo(' . RemoveXSS($row['seq']) . ')>';
        echo '    <td><span>' . RemoveXSS($row['num']) . '</span></td>';
        echo '    <td><span>' . RemoveXSS($row['title']) . '</span></td>';
        echo '    <td><span>' . $row['created_at'] . '</span></td>';
        echo '</tr>';
    }
} else {
    echo '<tr><td colspan="3"><span>등록된 공지사항이 없습니다.</span></td></tr>';
}

?>
                            </tbody>
                        </table>
                    </div>
                    <!-- 페이징버튼 -->
                    <div class="boardBtnList-w">
<?php
if ($paging_info['page_prev'] > 0) {
    echo '<button type="button" onclick="movePage(' . $paging_info['page_prev'] . ')" class="arrowBtn-prev"><img src="./imgs/pagingArrow.png" alt="이전버튼"></button>';
}
?>
                        <div class="boardBtnList-inner">
                            <ul class="boardBtnList">
<?php
for ($i = $paging_info['page_start']; $i <= $paging_info['page_end']; $i++) {
    if ($i == $page) {
        echo '<li class="boardBtnList-cont pagingCurrent"><a href="#none" class="boardBtnList-num">' . $i . '</a></li>';
    } else {
        echo '<li class="boardBtnList-cont"><a href="0302-notice.php?page=' . $i . '" class="boardBtnList-num">' . $i . '</a></li>';
    }
}
?>
                            </ul>
                        </div>
<?php
if ($paging_info['page_next'] < $paging_info['page_total']) {
    echo '<button type="button" onclick="movePage(' . $paging_info['page_next'] . ')" class="arrowBtn-next"><img src="./imgs/pagingArrow.png" alt="다음버튼"></button>';
}
?>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>

<?php require_once('./fragment/footer.php'); ?>
<script> 
    function getNoticeInfo(id) { location.href = './0302-notice-view.php?seq=' + id; }
    function movePage(page) { location.href = './0302-notice.php?page=' + page; } 
</script>

<?php if($isLogin) { ?>
<script> function noticeWrite() { location.href = './0302-notice-write.php'; } </script>
<?php } ?>

<?php require_once('./fragment/tail.php'); ?>