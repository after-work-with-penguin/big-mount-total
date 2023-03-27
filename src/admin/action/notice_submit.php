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
$notice_title = mysqli_real_escape_string($conn, $_POST['title']);
$notice_contents = mysqli_real_escape_string($conn, $_POST['contents']);

$sql = '';
$message = '';
$result_id = $notice_seq;

// update
if($notice_seq > 0) {
    $sql  = "UPDATE dst_notice SET ";
    $sql .= "title = '" . $notice_title . "', ";
    $sql .= "contents = '" . $notice_contents . "', ";
    $sql .= "updated_at = now() ";
    $sql .= "WHERE seq = " . $notice_seq;

    $result = mysqli_query($conn, $sql) or exit(mysqli_error($conn));

    $message = '공지사항이 수정되었습니다.';
}
// insert
else {
    $sql  = "INSERT INTO dst_notice (title, contents) ";
    $sql .= "VALUES ( ";
    $sql .= "'" . $notice_title . "', ";
    $sql .= "'" . $notice_contents . "') ";

    $result = mysqli_query($conn, $sql) or exit(mysqli_error($conn));
    $result_id = $conn->insert_id;
    $message = '공지사항이 등록되었습니다.';
}

$result_array['message'] = $message;
$result_array['result'] = 1;
$result_array['result_id'] = $result_id;

echo json_encode($result_array, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);

mysqli_close($conn);
flush();

?>
