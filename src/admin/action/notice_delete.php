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

$notice_seq = intval(mysqli_real_escape_string($conn, $_POST['seq']));

$sql  = "UPDATE dst_notice SET deleted_at = now() WHERE seq = " . $notice_seq;
$result = mysqli_query($conn, $sql) or exit(mysqli_error($conn));

$result_array['message'] = '공지사항이 삭제되었습니다.';
$result_array['result'] = 1;

echo json_encode($result_array, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);

mysqli_close($conn);
flush();