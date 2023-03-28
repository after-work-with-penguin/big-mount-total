<?php

session_start();

// 로그인 체크
$isLogin = false;
if (isset($_SESSION['is_login']) && !empty($_SESSION['is_login']) && $_SESSION['is_login'] == 1) {
    $isLogin = true;
}

if($isLogin) {
    echo '<script> alert("잘못된 접근입니다."); history.back(); </script>';
    exit;
}

include('../admin/common.php');
include('../admin/db_conn.php');

header('Content-Type: text/html; charset=UTF-8');

$seq = intval(mysqli_real_escape_string($conn, $_POST['seq']));
$checkpw = mysqli_real_escape_string($conn, $_POST['checkpw']);

$sql  = "SELECT seq, password FROM dst_contact WHERE seq = " . $seq;
$result = mysqli_query($conn, $sql) or exit(mysqli_error($conn));
$contact_count = $result->num_rows;
$contact_info = $result->fetch_array();
$result->free();

mysqli_close($conn);
flush();

if ($contact_count == 0) {
    echo '<script> alert("등록된 문의가 없습니다.");</script>';
    echo '<meta http-equiv="refresh" content="0 url=../0301-contact-us.php" />';
    exit;
}

if($contact_info['password'] != base64_decode($checkpw)) {
    echo '<script> alert("비밀번호가 일치하지 않습니다."); </script>';
    echo '<meta http-equiv="refresh" content="0 url=../0301-contact-check.php?seq="' . $seq . ' />';
    exit;
}

$param = '?seq=' . $seq . '&check=' . base64_encode('pwchecked');
echo '<meta http-equiv="refresh" content="0 url=../0301-contact-us-view.php' . $param . '" />';

?>

