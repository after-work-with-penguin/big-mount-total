<?php

session_start();

// 로그인 체크
$isLogin = false;
if (isset($_SESSION['is_login']) && !empty($_SESSION['is_login']) && $_SESSION['is_login'] == 1) {
    $isLogin = true;
}

if($isLogin) {
    $result_array['message'] = '잘못된 접근 입니다.';
    $result_array['result'] = -403;

    echo json_encode($result_array, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
    exit;
}

include('../admin/common.php');
include('../admin/db_conn.php');

header('Content-Type: text/html; charset=UTF-8');

$captcha = @$_POST['captcha'];
// require_once dirname(__FILE__) . '/securimage/securimage.php';
require_once '../vendor/securimage/securimage.php';
$securimage = new Securimage();

if (!$securimage->check($captcha)) {
    $result_array['message'] = '자동 등록 방지 문구가 잘못되었습니다.';
    $result_array['result'] = -500;

    echo json_encode($result_array, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);

    mysqli_close($conn);
    flush();
    exit;
}

$seq = intval(mysqli_real_escape_string($conn, $_POST['seq']));
$name = mysqli_real_escape_string($conn, $_POST['name']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$phone = mysqli_real_escape_string($conn, $_POST['phone']);
$password = mysqli_real_escape_string($conn, $_POST['password']);
$title = mysqli_real_escape_string($conn, $_POST['title']);
$contants = mysqli_real_escape_string($conn, $_POST['contants']);

$phone_pattern = '/^\d{2,3}-\d{3,4}-\d{4}$/'; // 전화번호 체크 정규식
if(!preg_match($phone_pattern, $phone)) {
    $result_array['message'] = '전화번호가 올바르지 않습니다.';
    $result_array['result'] = -500;

    echo json_encode($result_array, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);

    mysqli_close($conn);
    flush();
    exit;
}

$email_pattern = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/'; 
if(!preg_match($email_pattern, $email)) {
    $result_array['message'] = '이메일 주소가 올바르지 않습니다.';
    $result_array['result'] = -500;

    echo json_encode($result_array, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);

    mysqli_close($conn);
    flush();

    echo '이메일 주소가 올바릅니다.';
}

$sql = '';
$message = '';
$result_id = $seq;

// update
if($seq > 0) {
    $sql  = "UPDATE dst_contact SET ";
    $sql .= "name = '" . $name . "', ";
    $sql .= "email = '" . $email . "', ";
    $sql .= "phone = '" . $phone . "', ";
    $sql .= "password = '" . base64_decode($password) . "', ";
    $sql .= "title = '" . $title . "', ";
    $sql .= "question = '" . $contants . "', ";
    $sql .= "updated_at = now() ";
    $sql .= "WHERE seq = " . $seq;

    $result = mysqli_query($conn, $sql) or exit(mysqli_error($conn));

    $message = '견적 문의가 수정되었습니다.';
}
// insert
else {
    $sql  = " INSERT INTO dst_contact ( name, email, phone, password, hide, title, question ) VALUES ( ";
    $sql .= "'" . $name . "', ";
    $sql .= "'" . $email . "', ";
    $sql .= "'" . $phone . "', ";
    $sql .= "'" . base64_decode($password) . "', ";
    $sql .= "'" . 'Y' . "', ";
    $sql .= "'" . $title . "', ";
    $sql .= "'" . $contants . "') ";

    $result = mysqli_query($conn, $sql) or exit(mysqli_error($conn));
    $result_id = $conn->insert_id;

    $message = '견적 문의가 등록되었습니다.';
} 


$result_array['message'] = $message;
$result_array['result'] = 1;
$result_array['result_id'] = $result_id;

echo json_encode($result_array, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);

mysqli_close($conn);
flush();

?>
