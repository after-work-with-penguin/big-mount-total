
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="Content-type" content="text/html;charset=UTF-8">
  <title>Securimage Example Form</title>
  <link rel="stylesheet" href="./lib/securimage/securimage.css" media="screen">
  <style type="text/css">
  div.error { display: block; color: #f00; font-weight: bold; font-size: 1.2em; }
  span.error { display: block; color: #f00; font-style: italic; }
  .success { color: #00f; font-weight: bold; font-size: 1.2em; }
  form label { display: block; font-weight: bold; }
  fieldset { width: 90%; }
  legend { font-size: 24px; }
  .note { font-size: 18px; }
  </style>
</head>
<body>

<fieldset>
<legend>Example Form</legend>
<form method="post" action="captcha_submit.php" id="captcha-form">
  <input type="hidden" name="do" value="contact">
  <p>
    <label for="ct_name">Name*:</label>
    <input type="text" id="ct_name" name="ct_name" size="35" value="">
  </p>

  <div>
    <?php
      require_once './lib/securimage/securimage.php';
      $options = array();
      $options['input_name'] = 'ct_captcha'; // change name of input element for form post
      $options['disable_flash_fallback'] = false; // allow flash fallback
      echo Securimage::getCaptchaHtml($options);
    ?>
  </div>

  <p>
    <br>
    <input type="submit" value="전송">
  </p>

</form>
</fieldset>

</body>
</html>