<?php

session_start();

// 로그인 체크
$isLogin = false;
if (isset($_SESSION['is_login']) && !empty($_SESSION['is_login']) && $_SESSION['is_login'] == 1) {
    $isLogin = true;
}
if(!$isLogin) {
    $result_array['message'] = '잘못된 접근 입니다.';
    $result_array['result'] = -403;

    echo json_encode($result_array, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
    exit;
}

include('../common.php');
include('../db_conn.php');

header('Content-Type: text/html; charset=UTF-8');

$notice_seq = $_GET['seq'];
if (isEmpty($notice_seq) || !is_numeric($notice_seq)) {
    viewAlert('잘못된 접근 입니다.');
    mysqli_close($conn);
    flush();
    //historyBack();
    echo ('<meta http-equiv="refresh" content="0 url=./0302-notice.php" />');
}

$sql  = "SELECT seq, level, title, view_count, created_at, updated_at, contents FROM dst_notice WHERE seq = " . $notice_seq;
$result = mysqli_query($conn, $sql) or exit(mysqli_error($conn));
$notice_count = $result->num_rows;
$notice_info = $result->fetch_array();
$result->free();

$result_array = array();
$result_array['seq'] = $notice_seq;
if ($notice_count > 0) {
    $result_array['notice_info'] = $notice_info;
} else {
    $result_array['notice_info'] = array();
}


mysqli_close($conn);
flush();

echo json_encode($result_array, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);