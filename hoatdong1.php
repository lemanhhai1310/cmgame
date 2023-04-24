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
            <div class="uk-child-width-1-4@m uk-grid-small" uk-lightbox="animation: slide" uk-grid>
                <?php for ($i=1;$i<=8;$i++): ?>
                    <div>
                        <a class="uk-inline" href="images/photo.jpg" data-caption="Caption 1">
                            <img src="images/photo.jpg" width="1800" height="1200" alt="">
                        </a>
                    </div>
                    <div>
                        <a class="uk-inline" href="images/dark.jpg" data-caption="Caption 2">
                            <img src="images/dark.jpg" width="1800" height="1200" alt="">
                        </a>
                    </div>
                    <div>
                        <a class="uk-inline" href="images/light.jpg" data-caption="Caption 3">
                            <img src="images/light.jpg" width="1800" height="1200" alt="">
                        </a>
                    </div>
                <?php endfor; ?>
            </div>
        </div>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>