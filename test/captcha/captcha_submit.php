<?php
header('Content-Type: text/html; charset=UTF-8');

if($_SERVER['REQUEST_METHOD'] != 'POST') {
    echo '잘못된 요청 입니다.';
    exit;
}

echo '<h3>받은 데이터</h3>';
echo '<br><hr><br>';
var_dump($_POST);
echo '<br><hr><br>';

echo 'id: ' . $_POST['userId'];
echo '<br>';
echo 'name: ' . $_POST['userName'];
echo '<br><hr><br>';

echo 'captcha checking....<br><br>';
$captcha = @$_POST['ct_captcha'];
require_once dirname(__FILE__) . '/lib/securimage/securimage.php';
$securimage = new Securimage();

if ($securimage->check($captcha)) {
    echo '캡차 성공!!';
} else {
    echo '잘못된 캡차 문자열 입력됨...';
}

?>
