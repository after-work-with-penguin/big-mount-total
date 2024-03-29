<?php
session_start();

header('Content-Type: text/html; charset=UTF-8');

if (isset($_SESSION['is_login']) && !empty($_SESSION['is_login']) && $_SESSION['is_login'] == 1) {
    echo '<meta http-equiv="refresh" content="0 url=./index.php" />';
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>관리자 로그인 | 대산토탈</title>

    <!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <style>
        /* BASIC */

        html {
            /* background-color: #56baed; */
        }

        body {
            font-family: "Poppins", sans-serif;
            height: 100vh;
        }

        a {
            color: #92badd;
            display: inline-block;
            text-decoration: none;
            font-weight: 400;
        }

        h2 {
            text-align: center;
            font-size: 16px;
            font-weight: 600;
            text-transform: uppercase;
            display: inline-block;
            margin: 40px 8px 10px 8px;
            color: #cccccc;
        }

        /* STRUCTURE */

        .wrapper {
            display: flex;
            align-items: center;
            flex-direction: column;
            justify-content: center;
            width: 100%;
            min-height: 100%;
            padding: 20px;
        }

        #formContent {
            -webkit-border-radius: 10px 10px 10px 10px;
            border-radius: 10px 10px 10px 10px;
            background: #fff;
            padding: 30px;
            width: 90%;
            max-width: 450px;
            position: relative;
            padding: 0px;
            -webkit-box-shadow: 0 30px 60px 0 rgba(0, 0, 0, 0.3);
            box-shadow: 0 30px 60px 0 rgba(0, 0, 0, 0.3);
            text-align: center;
        }

        #formFooter {
            background-color: #f6f6f6;
            border-top: 1px solid #dce8f1;
            padding: 25px;
            text-align: center;
            -webkit-border-radius: 0 0 10px 10px;
            border-radius: 0 0 10px 10px;
        }

        /* TABS */

        h2.inactive {
            color: #cccccc;
        }

        h2.active {
            color: #0d0d0d;
            border-bottom: 2px solid #5fbae9;
        }

        /* FORM TYPOGRAPHY*/

        input[type=button],
        input[type=submit],
        input[type=reset] {
            background-color: #56baed;
            border: none;
            color: white;
            padding: 15px 80px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            text-transform: uppercase;
            font-size: 13px;
            -webkit-box-shadow: 0 10px 30px 0 rgba(95, 186, 233, 0.4);
            box-shadow: 0 10px 30px 0 rgba(95, 186, 233, 0.4);
            -webkit-border-radius: 5px 5px 5px 5px;
            border-radius: 5px 5px 5px 5px;
            margin: 5px 20px 40px 20px;
            -webkit-transition: all 0.3s ease-in-out;
            -moz-transition: all 0.3s ease-in-out;
            -ms-transition: all 0.3s ease-in-out;
            -o-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
        }

        input[type=button]:hover,
        input[type=submit]:hover,
        input[type=reset]:hover {
            background-color: #39ace7;
        }

        input[type=button]:active,
        input[type=submit]:active,
        input[type=reset]:active {
            -moz-transform: scale(0.95);
            -webkit-transform: scale(0.95);
            -o-transform: scale(0.95);
            -ms-transform: scale(0.95);
            transform: scale(0.95);
        }

        input[type=text],
        input[type=password] {
            background-color: #f6f6f6;
            border: none;
            color: #0d0d0d;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 5px;
            width: 85%;
            border: 2px solid #f6f6f6;
            -webkit-transition: all 0.5s ease-in-out;
            -moz-transition: all 0.5s ease-in-out;
            -ms-transition: all 0.5s ease-in-out;
            -o-transition: all 0.5s ease-in-out;
            transition: all 0.5s ease-in-out;
            -webkit-border-radius: 5px 5px 5px 5px;
            border-radius: 5px 5px 5px 5px;
        }

        input[type=text]:focus,
        input[type=password]:focus {
            background-color: #fff;
            border-bottom: 2px solid #5fbae9;
        }

        input[type=text]:placeholder {
            color: #cccccc;
        }

        /* ANIMATIONS */
        /* Simple CSS3 Fade-in-down Animation */

        .fadeInDown {
            -webkit-animation-name: fadeInDown;
            animation-name: fadeInDown;
            -webkit-animation-duration: 1s;
            animation-duration: 1s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
        }

        @-webkit-keyframes fadeInDown {
            0% {
                opacity: 0;
                -webkit-transform: translate3d(0, -100%, 0);
                transform: translate3d(0, -100%, 0);
            }

            100% {
                opacity: 1;
                -webkit-transform: none;
                transform: none;
            }
        }

        @keyframes fadeInDown {
            0% {
                opacity: 0;
                -webkit-transform: translate3d(0, -100%, 0);
                transform: translate3d(0, -100%, 0);
            }

            100% {
                opacity: 1;
                -webkit-transform: none;
                transform: none;
            }
        }

        /* Simple CSS3 Fade-in Animation */

        @-webkit-keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @-moz-keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        .fadeIn {
            opacity: 0;
            -webkit-animation: fadeIn ease-in 1;
            -moz-animation: fadeIn ease-in 1;
            animation: fadeIn ease-in 1;
            -webkit-animation-fill-mode: forwards;
            -moz-animation-fill-mode: forwards;
            animation-fill-mode: forwards;
            -webkit-animation-duration: 1s;
            -moz-animation-duration: 1s;
            animation-duration: 1s;
        }

        .fadeIn.first {
            -webkit-animation-delay: 0.4s;
            -moz-animation-delay: 0.4s;
            animation-delay: 0.4s;
        }

        .fadeIn.second {
            -webkit-animation-delay: 0.6s;
            -moz-animation-delay: 0.6s;
            animation-delay: 0.6s;
        }

        .fadeIn.third {
            -webkit-animation-delay: 0.8s;
            -moz-animation-delay: 0.8s;
            animation-delay: 0.8s;
        }

        .fadeIn.fourth {
            -webkit-animation-delay: 1s;
            -moz-animation-delay: 1s;
            animation-delay: 1s;
        }

        /* Simple CSS3 Fade-in Animation */

        .underlineHover:after {
            display: block;
            left: 0;
            bottom: -10px;
            width: 0;
            height: 2px;
            background-color: #56baed;
            content: "";
            transition: width 0.2s;
        }

        .underlineHover:hover {
            color: #0d0d0d;
        }

        .underlineHover:hover:after {
            width: 100%;
        }

        /* OTHERS */

        *:focus {
            outline: none;
        }

        #icon {
            width: 60%;
        }

        .icon-box {
            font-size: 80px;
        }

        #err_msg {
            color: red;
        }
    </style>

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script> -->
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>

<body>

    <div class="wrapper fadeInDown">
        <div id="formContent">
            <!-- Tabs Titles -->

            <!-- Icon -->
            <div class="fadeIn first icon-box">
                <!-- <img src="http://danielzawadzki.com/codepen/01/icon.svg" id="icon" alt="User Icon" /> -->
                <i class="icon ion-ios-locked-outline"></i>
                <h3>대산토탈 관리자</h3>
            </div>

            <!-- Login Form -->
            <form id="loginForm" name="loginForm" method="post" action="#">
                <input type="text" id="login_id" name="login_id" class="fadeIn second" placeholder="login">
                <input type="password" id="login_pw" name="login_pw" class="fadeIn third" placeholder="password">
                <input type="button" class="fadeIn fourth" value="Log In" onclick="loginSubmit(event)">
            </form>
            <span id="err_msg"></span>
            <br>

            <!-- Remind Passowrd -->
            <!-- <div id="formFooter">
        <a class="underlineHover" href="#">Forgot Password?</a>
      </div> -->

        </div>
    </div>
    <script>
        $('#err_msg').hide();

        function loginSubmit(event) {
            event.preventDefault();
            event.stopPropagation();

            if ($('#login_id').val() == '') {
                alert('ID 를 입력해 주세요.');
                $('#login_id').focus();
                return false;
            }

            if ($('#login_pw').val() == '') {
                alert('비밀번호를 입력해 주세요.');
                $('#login_pw').focus();
                return false;
            }

            // $('#loginForm').submit();
            $.ajax({
                cache: false,
                url: './action/login_ok.php',
                type: 'POST',
                data: {
                    login_id: $('#login_id').val(),
                    login_pw: btoa($('#login_pw').val())
                },
                success: function(resultData) {
                    console.log('login request result: ', resultData);
                    var resultObj = JSON.parse(resultData);
                    console.log('login request resultObj: ', resultObj);
                    var isResult = false;
                    if (resultObj) {
                        if (resultObj.result > 0) {
                            isResult = true;
                        }
                    }
                    if (isResult && resultObj.result > 0) {
                        $('#err_msg').hide();
                        $('#err_msg').text('');
                        location.href = '../index.php';
                    } else {
                        $('#err_msg').show();
                        $('#err_msg').text('알 수 없는 오류가 발생하였습니다.');
                        return false;
                    }
                }, // success 

                error: function(xhr, status) {
                    console.log('login request exception: ', xhr + ': ' + status);
                }
            });

            return false;
        }
    </script>
</body>

</html>