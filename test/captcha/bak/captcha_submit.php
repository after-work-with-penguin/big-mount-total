<?php
header('Content-Type: text/html; charset=UTF-8');

error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER['REQUEST_METHOD'] == 'POST' && @$_POST['do'] == 'contact') {
    var_dump($_POST); // 디버깅 목적으로 찍어보라.

    $captcha = @$_POST['ct_captcha'];
    require_once dirname(__FILE__) . '/lib/securimage/securimage.php';
    $securimage = new Securimage();

    if ($securimage->check($captcha) == false) {
        $captcha_error = '잘못된 보안코드가 입력되었습니다.';
        echo '<br/><br/>'.$captcha_error.'<br/>';
    } else {
      echo '<br/><br/>캡차 제대로 입력했어요<br/>';
    }

} // POST
?>