function moveContactList() { 
    location.href = './0301-contact-us.php'; 
} 

function editContact() {
    if($('#contact-status').val() == 'A') {
        alert('답변 완료된 문의사항은 수정할 수 없습니다.');
        return false;
    }

    location.href = './0301-contact-us-write.php'
        + '?seq=' + $('#contact-seq').val() 
        + '&cp=' + $('#contact-cp').val();
}

function answerContact() {
    
}