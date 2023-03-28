<?php require_once('./fragment/header.php'); ?>

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
                
                <?php require_once('./fragment/right.php'); ?>

            </div>
            <!-- 콘텐츠 내용-->
            <div class="contentArticle-w">
                <h5 class="contactTitle">견적문의 하기</h5>
                <div class="contactForm-w">
                    <div class="contactForm-row">
                        <div class="contactForm-cell">
                            <label for="contact-name">성함</label>
                            <input type="text" id="contact-name"/>
                        </div>
                        <div class="contactForm-cell">
                            <label for="contact-phone">연락처</label>
                            <input type="text" id="contact-phone"/>
                        </div>
                    </div>
                    <!-- 이메일-->
                    <div class="contactForm-row rowEtc">
                        <div class="contactForm-cell">
                            <label for="contact-email-id">이메일</label>
                            <input type="text" id="contact-email-id"/>
                            <span class="contactForm-dash">@</span>
                        </div>
                        <div class="contactForm-cell">
                            <input type="text" id="contact-email-host" placeholder="주소입력">
                        </div>
                    </div>
                    <!-- 비밀번호 -->
                    <div class="contactForm-row">
                        <div class="contactForm-cell">
                            <label for="contact-password">비밀번호</label>
                            <input type="password" id="contact-password"/>
                        </div>
                    </div>
                    <!-- 제목 -->
                    <div class="contactForm-row wideType">
                        <div class="contactForm-cell">
                            <label for="contact-title">제목</label>
                            <input type="text" id="contact-title"/>
                        </div>
                    </div>
                    <!-- 문의 내용 -->
                    <div class="contactForm-row">
                        <div class="contactForm-cell">
                            <label for="contact-contants">문의내용</label>
                            <textarea id="contact-contants" class="textArea"></textarea>
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
                        <button type="button" class="roundBtn" onclick="requestContact()">견적 문의하기</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once('./fragment/footer.php'); ?>

<script src="./js/contactus.write.js"></script>

<?php require_once('./fragment/tail.php'); ?>