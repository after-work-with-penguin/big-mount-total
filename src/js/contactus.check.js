function moveContactList() { 
    location.href = './0301-contact-us.php'; 
} 

function checkContact() {
    const checkpw = $('#contact-check-password').val();
    if(checkpw == '') {
        alert('비밀번호를 입력해 주세요.');
        $('#contact-check-password').focus();
        return false;
    }

    const $tempForm = $('<form></form>');
    $tempForm.attr('method', 'post');
    $tempForm.attr('action', './action/contactus_check.php');

    $tempForm.append($('<input />', { type: 'hidden', name: 'seq', value: $('#contact-seq').val() }));
    $tempForm.append($('<input />', { type: 'hidden', name: 'checkpw', value: btoa(checkpw) }));
    
    $tempForm.appendTo('body');

    $tempForm.submit();
}