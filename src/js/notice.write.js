$(document).ready(function () {
    initTextForm();

    const notice_seq = getNoticeSeq();
    if(notice_seq > 0) {
        getNoticeInfo(notice_seq);
    }
});

function initTextForm() {
    let option = getSummernoteDefaultOption();
    option.placeholder = '공지사항 내용을 입력해 주세요.';
    $('#formText').summernote(option);
}

function getNoticeSeq() {
    const seq = getParameter('seq');
    if (isEmpty(seq) || !isNumeric(seq)) {
        return 0;
    }

    return seq;
}


function getImageUploadDefaultOption() {
    return {
        extensions: [
            '.jpg', '.jpeg', '.png', '.gif',
            '.JPG', '.JPEG', '.PNG', '.GIF'
        ],
        mimes: ['image/jpeg', 'image/png', 'image/gif'],
        maxFiles: 1,
    };
}

function getSummernoteDefaultOption() {
    return {
        tabsize: 4,
        height: 320,
        // toolbar: [
        //     ['style', ['style']],
        //     ['insert', ['link', 'table', 'hr']],
        //     ['style', ['bold', 'italic', 'underline', 'clear']],
        //     ['font', ['strikethrough', 'superscript', 'subscript']],
        //     ['fontsize', ['fontsize']],
        //     // ['color', ['color']],
        //     ['para', ['ul', 'ol', 'paragraph']],
        //     ['height', ['height']]
        // ],
        lang: 'ko-KR', 
        // fontSizes: [8, 9, 10, 11, 12, 14, 16, 18, 24, 28, 32, 36] // fontsize 제거 - 에디터가 고장남...
    };
}


function getNoticeInfo(notice_seq) {
     $.ajax({
        type: 'get',
        data: {seq: notice_seq},
        url: './admin/action/notice_get.php',
        success: function (result) {
            //console.log('[getNoticeInfo] result:: ', result);
            const resultObj = JSON.parse(result);
            //console.log('[getNoticeInfo] resultObj:: ', resultObj);
            setNoticeInfo(resultObj.notice_info);
        }, 
        error: function (xhr, status, error) {
            console.error('[getNoticeInfo] ajax error:: ', error);
        },
        
    });
}

function setNoticeInfo(noticeInfo) {
    $('#notice_seq').val(noticeInfo.seq);
    $('#formTitle').val(noticeInfo.title);
    $('#formText').summernote('code', noticeInfo.contents);

    $('#submitBtn').text('수정하기');
}

function doReset(event) {
    event.preventDefault();
    event.stopPropagation();

    $('#formTitle').val('');
    $('#formText').summernote('reset');
}

function doSubmit(event) {
    event.preventDefault();
    event.stopPropagation();

    const notice_seq = parseInt($('#notice_seq').val(), 10);
    const notice_title = $('#formTitle').val();
    if (notice_title == '') {
        alert('공지사항 제목을 입력해주세요.');
        return false;
    }
    if ($('#formText').summernote('isEmpty')) {
        alert('공지사항 내용을 입력해주세요.');
        return false;
    }
    const notice_contents = $('#formText').summernote('code');
    
    $.ajax({
        type: 'post',
        url: './admin/action/notice_submit.php',
        data: { seq: notice_seq, title: notice_title, contents: notice_contents },
        dataType: 'json',
        success: function (result) {
            console.log('[doSubmit] result:: ', result);
            alert(result.message);
            location.href = './0302-notice.php';
        }, 
        error: function (xhr, status, error) {
            console.error('[doSubmit] ajax error:: ', error);
        },
        
    });
}

function goNoticeList(event) {
    event.preventDefault();
    event.stopPropagation();

    location.href = './0302-notice.php';
}

function doDelete(event) {
    event.preventDefault();
    event.stopPropagation();

    const notice_seq = parseInt($('#notice_seq').val(), 10);
    if (notice_seq == 0) {
        alert('잘못된 접근 입니다.');
        location.href = './0302-notice.php';
        return false;
    }

    if(confirm('공지사항글을 정말로 삭제하시겠습니까?')) {
        $.ajax({
            type: 'post',
            url: './admin/action/notice_delete.php',
            data: { seq: notice_seq },
            dataType: 'json',
            success: function (result) {
                console.log('[doDelete] result:: ', result);
                alert(result.message);
                location.href = './0302-notice.php';
            },
            error: function (xhr, status, error) {
                console.error('[doDelete] ajax error:: ', error);
            },

        });
    }    
}

function moveList() {
    location.href = './0302-notice.php';
}