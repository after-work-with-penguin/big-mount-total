
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8">
    <title>Securimage Example</title>
</head>

<body>

link: <a href="https://www.phpcaptcha.org/">SecurImage</a>
<br><hr><br>
<form id="captcha-form" method="post" action="captcha_submit.php">
    id: <input type="text" id="userId" name="userId" /><br>
    name: <input type="text" id="userName" name="userName" /><br>
    <br>
    <?php
      require_once './lib/securimage/securimage.php';
      $options = array();
      $options['input_name'] = 'ct_captcha';
      $options['disable_flash_fallback'] = false;
      echo Securimage::getCaptchaHtml($options);
    ?>
    <br>
    <input type="submit" value="전송" />
</form>

</body>
</html>