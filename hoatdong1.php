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
            <div class="uk-child-width-1-4@m uk-grid-small" uk-grid>
                <?php for ($i=1;$i<=8;$i++): ?>
                    <div>
                        <div class="uk-cover-container" uk-lightbox>
                            <img src="images/noimage.jpg" alt="" uk-cover="">
                            <canvas width="275" height="400"></canvas>
                            <a class="uk-position-cover" href="images/noimage.jpg"></a>
                        </div>
                    </div>
                <?php endfor; ?>
            </div>
        </div>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>