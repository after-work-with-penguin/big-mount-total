$(document).ready(function() {
    $('#formCaptchaTemp').hide();
    // $('#captcha_image').height('45px');
});

function requestContact() {
    const name = $('#contact-name').val();
    if(name == '') {
        alert('이름을 입력해 주세요.');
        $('#contact-name').focus();
        return false;
    }
    const phone = $('#contact-phone').val();
    if(phone == '') {
        alert('전화번호를 입력해 주세요.');
        $('#contact-phone').focus();
        return false;
    }
    const phoneRegex = /^[0-9]{3}[-]+[0-9]{4}[-]+[0-9]{4}$/;
    if (!phoneRegex.test(phoneNumber)) {
        alert('올바른 전화번호를 입력해 주세요. (010-1234-5678)');
        $('#contact-phone').focus();
        return false;
    }

    const email1 = $('#contact-email-id').val();
    if(email1 == '') {
        alert('email ID 를 입력해 주세요.');
        $('#contact-email-id').focus();
        return false;
    }    
    const email2 = $('#contact-email-host').val();
    if(email2 == '') {
        alert('email 주소를 입력해 주세요.');
        $('#contact-email-host').focus();
        return false;
    }
    const email = email1 + '@' + email2;
    const emailRegex = /^[0-9]{3}[-]+[0-9]{4}[-]+[0-9]{4}$/;
    if (!emailRegex.test(email)) {
        alert('올바른 이메일을 입력해 주세요.');
        $('#contact-email-id').focus();
        return false;
    }

    const password = $('#contact-password').val();
    if(password == '') {
        alert('비밀번호를 입력해 주세요.');
        $('#contact-password').focus();
        return false;
    }
    const title = $('#contact-title').val();
    if(title == '') {
        alert('제목을 입력해 주세요.');
        $('#contact-title').focus();
        return false;
    }
    const contants = $('#contact-contants').val();
    if(contants == '') {
        alert('내용을 입력해 주세요.');
        $('#contact-contants').focus();
        return false;
    }
    const captcha = $('#contact-captcha').val();
    if(captcha == '') {
        alert('자동 등록 방지 문구를 입력해 주세요.');
        $('#contact-captcha').focus();
        return false;
    }

    $.ajax({
        type: 'post',
        url: './action/contactus_quest.php',
        data: { 
            seq: $('#contact-seq').val(),
            name: name,
            phone: phone,
            email: email1 + '@' + email2,
            password: btoa(password),
            title: title,
            captcha: captcha,
            contants: contants
        },
        dataType: 'json',
        success: function (result) {
            console.log('[requestContact] result:: ', result);
            alert(result.message);
            if(result.result < 0) {
                return false;
            }
            location.href = './0301-contact-us.php';
        }, 
        error: function (xhr, status, error) {
            console.error('[requestContact] ajax error:: ', error);
        },
        
    });
}