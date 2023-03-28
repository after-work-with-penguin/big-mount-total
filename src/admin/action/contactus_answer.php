<?php

session_start();

// 로그인 체크
$isLogin = false;
if (isset($_SESSION['is_login']) && !empty($_SESSION['is_login']) && $_SESSION['is_login'] == 1) {
    $isLogin = true;
}

if(!$isLogin) {
    viewAlert('관리자만 접속 가능합니다.');
    echo ('<meta http-equiv="refresh" content="0 url=../../0301-contact-us.php" />');
    exit;
}

include('../common.php');
include('../db_conn.php');

header('Content-Type: text/html; charset=UTF-8');

$seq = intval(mysqli_real_escape_string($conn, $_POST['seq']));
if (isEmpty($seq) || !is_numeric($seq)) {
    viewAlert('잘못된 접근 입니다.');
    mysqli_close($conn);
    flush();
    //historyBack();
    echo ('<meta http-equiv="refresh" content="0 url=../../0301-contact-us.php" />');
    exit;
}

$name = mysqli_real_escape_string($conn, $_POST['name']);
$status = mysqli_real_escape_string($conn, $_POST['status']);
$answer = mysqli_real_escape_string($conn, $_POST['answer']);
$login_info['user_id'];


$sql = '';
$message = '';
$result_id = $seq;

$sql  = "UPDATE dst_contact SET ";
$sql .= "status = 'A', ";
$sql .= "answer_id = '" . $login_info['user_id'] . "', ";
$sql .= "answer = '" . $answer . "', ";
$sql .= "answerd_at = now() ";
$sql .= "WHERE seq = " . $seq;

$result = mysqli_query($conn, $sql) or exit(mysqli_error($conn));

$message = '견적 문의 답글이 등록되었습니다.';
if($status == 'A') {
    $message = '견적 문의 답글이 수정되었습니다.';
}


viewAlert($message);
echo ('<meta http-equiv="refresh" content="0 url=../../0301-contact-us-view.php?seq=' . $seq . '"/>');

mysqli_close($conn);
flush();

?>
