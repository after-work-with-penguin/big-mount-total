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

$sql = "SELECT COUNT(*) FROM dst_contact WHERE deleted_at IS NULL";

$result = mysqli_query($conn, $sql) or exit(mysqli_error($conn));
$total_count = mysqli_fetch_array($result);
$total_count = intval($total_count[0]);
$result->free();

// 현재 페이지
$page = isset($_GET['page']) ? trim($_GET['page']) : 1;

$paging_info = getPagingInfo($page, $total_count, $item_row_count, $page_block_count);
?>

<!-- contents -->
<div class="content-w-contact" id="content-main"><!-- 페이지 속성 분기 "content-w-aaa" -->
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
                <!-- 게시판 리스트 -->
                <div class="boardList-w">
                    <div class="boardList-inner">
                        <table>
                            <colgroup>
                                <col scope="col" width="10%">
                                <col scope="col" width="36%">
                                <col scope="col" width="17%">
                                <col scope="col" width="17%">
                                <col scope="col" width="20%">
                            </colgroup>
                            <thead>
                                <tr>
                                    <th>번호</th>
                                    <th>제목</th>
                                    <th>상태</th>
                                    <th>신청자</th>
                                    <th>신청일</th>
                                </tr>
                            </thead>
<?php
$sql  = "
SELECT page.* FROM ( 
    SELECT @rownum:=@rownum-1 as num, contact.seq, contact.title, contact.created_at, contact.name, contact.status
    FROM dst_contact contact, (SELECT @rownum:=(select count(*) from dst_contact WHERE deleted_at IS NULL)+1) rownum_temp 
    WHERE contact.deleted_at IS NULL ORDER BY contact.seq desc 
) page LIMIT " . $paging_info['page_db'] . ", $item_row_count
";
$result = mysqli_query($conn, $sql) or exit(mysqli_error($conn));
$contact_length = $result->num_rows;

if ($contact_length > 0) {
    while ($row = $result->fetch_array()) {
        $statusText = '미확인';
        if($row['status'] == 'A') {
            $statusText = '답변완료';
        }

        // $title =  mb_substr(RemoveXSS($row['title']), '0', -3) . "...";
        $title = RemoveXSS($row['title']);

        echo '<tr onclick=getContactInfo(' . RemoveXSS($row['seq']) . ')>';
        echo '    <td><span>' . RemoveXSS($row['num']) . '</span></td>';
        echo '    <td><span>' . $title . '</span></td>';
        echo '    <td><span>' . $statusText . '</span></td>';
        echo '    <td><span>' . maskingMiddle(RemoveXSS($row['name'])) . '</span></td>';
        echo '    <td><span>' . $row['created_at'] . '</span></td>';
        echo '</tr>';
    }
} else {
    echo '<tr><td colspan="5"><span>등록된 문의가 없습니다.</span></td></tr>';
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
        echo '<li class="boardBtnList-cont"><a href="0301-contact-us.php?page=' . $i . '" class="boardBtnList-num">' . $i . '</a></li>';
    }
}
?>
                            </ul>
                        </div>
<?php
if ($paging_info['page_next'] <= $paging_info['page_total']) {
    echo '<button type="button" onclick="movePage(' . $paging_info['page_next'] . ')" class="arrowBtn-next"><img src="./imgs/pagingArrow.png" alt="다음버튼"></button>';
}
?>
                    </div>
<?php if(!$isLogin) { ?>
                    <div class="moduleBtn-w">
                        <button type="button" class="roundBtn" onclick="writeContactUs()">문의 하기</button>
                    </div>
<?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once('./fragment/footer.php'); ?>

<script> 
    function movePage(page) { location.href = './0301-contact-us.php?page=' + page; }  
    function getContactInfo(seq) { location.href = './0301-contact-check.php?seq=' + seq; }
</script>

<?php if(!$isLogin) { ?>
<script> function writeContactUs() { location.href = './0301-contact-us-write.php'; } </script>
<?php } ?>

<?php require_once('./fragment/tail.php'); ?>