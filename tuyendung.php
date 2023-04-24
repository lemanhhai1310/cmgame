<?php $data["title"] = "Tuyên dụng"; ?>
<?php $bodyClass = '' ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="uk-background-norepeat uk-light uk-section-large uk-background-center-center uk-background-cover" data-src="images/hr.png" uk-img>
    <div class="uk-container">
        <div class="hoatdong__header__txt">Trang chủ</div>
        <div class="hoatdong__header__title"><span>Tuyển dụng</span></div>
    </div>
</div>
<div class="uk-section">
    <div class="uk-container">
        <div class="hoatdong__boxContent uk-section-small">
            <?php for ($i=1;$i<=3;$i++): ?>
            <div class="tuyendung__item">
                <div uk-grid>
                    <div class="uk-width-auto@s uk-text-center">
                        <div class="uk-cover-container uk-flex-inline uk-border-circle">
                            <img src="images/noimage.jpg" alt="" uk-cover="">
                            <canvas width="90" height="90"></canvas>
                        </div>
                        <div class="tuyendung__c1">By HR</div>
                        <div class="tuyendung__c2">03/28/2023</div>
                    </div>
                    <div class="uk-width-expand">
                        <div class="tuyendung__title">TUYỂN DỤNG</div>
                        <div class="item__15 tuyendung__txt1">Unity Developer</div>
                        <div class="uk-margin tuyendung__txt2">Xây dựng và phát triển các dự án game casual và hyper casual, puzzle vv…Xây dựng và triển khai kiến trúc hệ thống game (game architecture design), cùng team lên ý tưởng và giải pháp cho các tính năng mới của game.Tham gia vào quy trình làm sản phẩm, được làm việc trực tiếp vs các bộ phận phối hợp với các thành viên trong team để hoàn thiện và tối ưu hóa sản phẩm .</div>
                        <div class="uk-text-right uk-margin">
                            <a href="tuyendung-detail.php" class="home__slideshow__btn uk-button uk-button-secondary uk-button-large uk-border-pill">Liên hệ</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endfor; ?>
        </div>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>