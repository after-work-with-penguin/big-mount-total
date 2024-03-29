<?php

session_start();

include('../db_conn.php');
include('../common.php');

header('Content-Type: text/html; charset=UTF-8');

$result_array = array();
$isSuccess = true;

$login_id = mysqli_real_escape_string($conn, $_POST['login_id']);
$login_pw = base64_decode(mysqli_real_escape_string($conn, $_POST['login_pw']));

$sql  = "SELECT ";
$sql .= "seq, user_id, name, member_type, password ";
$sql .= "FROM dst_members ";
$sql .= "WHERE user_id = '" . $login_id . "'";

$result = mysqli_query($conn, $sql) or exit(mysqli_error($conn));
$user_count = mysqli_num_rows($result);

if ($user_count == 0) {
    $result_array['message'] = '아이디 또는 비밀번호가 잘못되었습니다';
    $result_array['result'] = 0;
    $result_array['code'] = '1001';
    $isSuccess = false;
}

$row = mysqli_fetch_array($result);
//$hashed_password = password_encrypt($login_pw);
$dbPassword = $row['password'];
if (password_matches($login_pw, $dbPassword) == 0) {
    $result_array['message'] = '아이디 또는 비밀번호가 잘못되었습니다.';
    $result_array['result'] = 0;
    $result_array['code'] = '1002';
    $isSuccess = false;
}

if($isSuccess) {
    $sessionSavedUserInfo = [
    'seq' => $row['seq'], 
    'user_id' => $row['user_id'],
    'name' => $row['name'],
    'member_type' => $row['member_type']
    ];

    $_SESSION['login_user_info'] = serialize($sessionSavedUserInfo);
    $_SESSION['is_login'] = 1;

    $result_array['message'] = '로그인 성공';
    $result_array['result'] = 1;
    $result_array['code'] = '0';
}

$result->free();
mysqli_close($conn);
flush();

// echo ('<meta http-equiv="refresh" content="0 url=../index.php" />');
echo json_encode($result_array, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);

?>