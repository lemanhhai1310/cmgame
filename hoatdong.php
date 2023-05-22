<?php $data["title"] = "Hoạt động"; ?>
<?php $bodyClass = '' ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="uk-background-norepeat uk-light uk-section-large uk-background-center-center uk-background-cover" data-src="images/Rectangle-40.png" uk-img>
    <div class="uk-container">
        <div class="hoatdong__header__txt">Xem các hoạt động của chúng tôi</div>
        <div class="hoatdong__header__title"><span>Hoạt động</span></div>
    </div>
</div>
<div class="uk-section-small">
    <div class="uk-container">
        <div class="hoatdong__boxContent uk-section-small">
            <div class="uk-child-width-1-3@m" uk-scrollspy="target: >div; cls: uk-animation-slide-right-small; delay: 300; repeat: false" uk-grid>
                <?php for ($i=1;$i<=6;$i++): ?>
                    <div>
                        <div class="uk-card uk-card-default hoatdong__card">
                            <div class="uk-position-relative">
                                <img src="images/noimage.jpg" alt="">
                                <a href="" class="uk-position-cover"></a>
                            </div>
                            <div class="uk-card-body hoatdong__card__body">
                                <div class="hoatdong__card__time">April 17</div>
                                <div class="hoatdong__card__title"><a href="">Cát Bà ngày trở lại - 2022</a></div>
                                <div class="hoatdong__card__divider"></div>
                                <div class="hoatdong__card__desc">Chuyến đi Phú Quốc 4 ngày 3 đêm khép lại, chắc hẳn ai trong CMGame cũng đã có cho mình một kỷ niệm, một dấu ấn và một điều ...</div>
                            </div>
                        </div>
                    </div>
                <?php endfor; ?>
            </div>
        </div>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>