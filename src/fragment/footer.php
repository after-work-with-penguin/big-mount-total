</div> <!-- .content-inner -->
</div> <!-- .content-wrap -->

<!-- 공통푸터 -->
<?php
//  (default) $PAGE_TYPE == 'common'
$footer_tel = '041-663-7332';
$footer_fax = '041-663-7331';

if($PAGE_TYPE == 'material') {
    $footer_tel = '041-669-7332';
    $footer_fax = '041-669-7335';
} else if($PAGE_TYPE == 'environment') {
    $footer_tel = '010-3235-9372';
    // $footer_fax = '041-663-7331';
}

?>
<div class="footer-w">
    <div class="footer-inner">
        <h3 class="footerLogo">
            <a href="#none" class="footerLogo-link"><img src="./imgs/footerLogo.png" alt="대산토탈"></a>
        </h3>
        <div class="footerList-w">
            <ul class="footerList-left">
                <li class="footerList-inner" onclick="viewMap()" style="cursor: pointer;">
                    <span class="icon-spot"><img src="./imgs/icon_footerSpot.png" alt="address"></span>충청남도 서산시 대산읍 평신1로 531-44
                </li>
                <li class="footerList-inner2">사업자등록번호 316-81-21855</li>
                <li class="footerList-inner2">대표이사 <strong>최태환</strong></li>
                <li class="footerList-inner"><strong>홈페이지</strong> : www.대산토탈.com</li>
            </ul>
            <ul class="footerList-right">
                <li class="footerList-inner2"><strong>TEL</strong> : <?php echo $footer_tel ?></li>
                <li class="footerList-inner2"><strong>FAX</strong> : <?php echo $footer_fax ?></li>
                <li class="footerList-inner"><strong>E-MAIL</strong> : daesantotal@daesantotal.com</li>
            </ul>
        </div>
    </div>
</div>

<script type="text/javascript" src="./vendor/jquery/jquery-3.6.3.min.js"></script>
<script type="text/javascript" src="./vendor/slick/slick.min.js"></script>
<script type="text/javascript" src="./js/common.js"></script>
