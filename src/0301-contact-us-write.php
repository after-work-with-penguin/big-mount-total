<?php require_once('./fragment/header.php'); ?>

<?php
if($isLogin) {
    echo '<script> alert("관리자는 문의글을 작성할 수 없습니다."); </script>';
    echo '<meta http-equiv="refresh" content="0 url=./0301-contact-us.php" />';
    exit;
}
?>

<?php
include('./admin/db_conn.php');
include('./admin/common.php');

$seq = 0;
if ($_SERVER['QUERY_STRING'] != '') {
    $seq = $_GET['seq'];
}

$seq = intval(mysqli_real_escape_string($conn, $seq));

$sql  = "SELECT seq, name, email, phone, password, title, question FROM dst_contact WHERE seq = " . $seq;
$result = mysqli_query($conn, $sql) or exit(mysqli_error($conn));
$contact_count = $result->num_rows;
$contact_info = $result->fetch_array();
$result->free();

if($seq > 0) {
    if($contact_count == 0) {
        viewAlert('잘못된 접근 입니다');
        mysqli_close($conn);
        flush();
        //historyBack();
        echo ('<meta http-equiv="refresh" content="0 url=./0301-contact-us.php" />');
        exit;
    }

    $checkPassword = mysqli_real_escape_string($conn, $_GET['cp']);
    if(base64_decode($checkPassword) != $contact_info['password']) {
        viewAlert('잘못된 접근 입니다.');
        mysqli_close($conn);
        flush();
        //historyBack();
        echo ('<meta http-equiv="refresh" content="0 url=./0301-contact-us.php" />');
        exit;
    }
}

$submitButtonText = '견적 문의 하기';
if ($contact_count == 0) {
    $contact_info = array();
    $contact_info['name'] = '';
    $contact_info['email'] = '';
    $contact_info['phone'] = '';
    $contact_info['password'] = '';
    $contact_info['title'] = '';
    $contact_info['question'] = '';

    $contact_info['email1'] = '';
    $contact_info['email2'] = '';
} else {
    $emailSplit = mb_split('@', $contact_info['email']);
    $contact_info['email1'] = $emailSplit[0];
    $contact_info['email2'] = $emailSplit[1];

    $submitButtonText = '수정 하기';
}

?>

<!-- contents -->
<div class="content-w-contact" id="content-main"><!-- 페이지 속성 분기 "content-w-aaa" -->
    <div class="contentVisual-w"> <!-- 비주얼 영역 -->

        <?php require_once('./fragment/left.php'); ?>

        <!-- 우측 content-->
        <div class="contSection-right">
            <div class="contentVisual-img-w">
                <img src="./imgs/cont03-01-top.png" alt="" class="contentVisual-img">
                <h3 class="sectionTitle">
                    <strong class="sectionTitle-bg">견적문의</strong>
                    <span class="sectionTitle-eng">Contact Us</span>
                </h3>
                
                <!-- right 메뉴 제거 -->

            </div>
            <!-- 콘텐츠 내용-->
            <div class="contentArticle-w">
                <h5 class="contactTitle">견적문의 하기</h5>
                <div class="contactForm-w">
                    <div class="contactForm-row">
                        <div class="contactForm-cell">
                            <label for="contact-name">성함</label>
                            <input type="text" id="contact-name" value="<?php echo $contact_info['name']; ?>" />
                        </div>
                        <div class="contactForm-cell">
                            <label for="contact-phone">연락처</label>
                            <input type="text" id="contact-phone" value="<?php echo $contact_info['phone']; ?>" placeholder="010-xxxx-xxxx" />
                        </div>
                    </div>
                    <!-- 이메일-->
                    <div class="contactForm-row rowEtc">
                        <div class="contactForm-cell">
                            <label for="contact-email-id">이메일</label>
                            <input type="text" id="contact-email-id" value="<?php echo $contact_info['email1']; ?>" />
                            <span class="contactForm-dash">@</span>
                        </div>
                        <div class="contactForm-cell">
                            <input type="text" id="contact-email-host" placeholder="주소입력 (예: daesantotal.com)" value="<?php echo $contact_info['email2']; ?>" />
                        </div>
                    </div>
                    <!-- 비밀번호 -->
                    <div class="contactForm-row">
                        <div class="contactForm-cell">
                            <label for="contact-password">비밀번호</label>
                            <input type="password" id="contact-password" value="<?php echo $contact_info['password']; ?>" />
                        </div>
                    </div>
                    <!-- 제목 -->
                    <div class="contactForm-row wideType">
                        <div class="contactForm-cell">
                            <label for="contact-title">제목</label>
                            <input type="text" id="contact-title" value="<?php echo $contact_info['title']; ?>" />
                        </div>
                    </div>
                    <!-- 문의 내용 -->
                    <div class="contactForm-row">
                        <div class="contactForm-cell">
                            <label for="contact-contants">문의내용</label>
                            <textarea id="contact-contants" class="textArea"><?php echo $contact_info['question']; ?></textarea>
                        </div>
                    </div>
                    <div class="contactForm-row captchaType">
                        <div class="contactForm-cell">
                            <label for="contact-captcha">자동 등록 방지</label>
                            <?php
                                require_once './vendor/securimage/securimage.php';

                                $options = array();
                                $options['input_id'] = 'formCaptchaTemp';
                                $options['input_name'] = 'ct_captcha';
                                $options['input_text'] = '';
                                $options['disable_flash_fallback'] = false;
                                $options['show_audio_button'] = false;
                                $options['image_height'] = '45';
                                echo Securimage::getCaptchaHtml($options);
                            ?>
                        </div>
                        <div class="contactForm-cell">
                            <input type="text" id="contact-captcha" autocomplete="off">
                        </div>
                    </div>
                    <div class="moduleBtn-w">
                        <button type="button" class="roundBtn" onclick="requestContact()"><?php echo $submitButtonText; ?></button>
                        <input type="hidden" id="contact-seq" value="<?php echo $seq; ?>" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once('./fragment/footer.php'); ?>

<script src="./js/contactus.write.js"></script>

<?php require_once('./fragment/tail.php'); ?>