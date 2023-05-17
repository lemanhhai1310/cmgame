<?php $data["title"] = "Sản phẩm"; ?>
<?php $bodyClass = '' ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="sanpham__block01 uk-background-norepeat uk-flex uk-flex-bottom uk-light uk-background-center-center uk-background-cover" data-src="images/banner1.png" uk-img>
    <div class="uk-text-center uk-section-xsmall uk-width">
        <div class="uk-container">
            <div class="sanpham__block01__txt1">Welcome to</div>
            <div class="sanpham__block01__txt2">CREATIVE MOBILE GAME</div>
        </div>
    </div>
</div>
<div class="uk-section">
    <div class="uk-container">
        <div class="hoatdong__boxContent uk-section-small">
            <?php for ($i=1;$i<=5;$i++): ?>
            <div class="sanpham__item">
                <div class="home__bg2 uk-height-min-small uk-position-relative">
                    <div class="uk-child-width-1-2@m uk-grid-6 uk-grid-match" uk-grid>
                        <div>
                            <div class="uk-card uk-card-body uk-flex uk-flex-middle sanpham__card">
                                <div class="uk-width uk-text-center sanpham__card__box">
                                    <div uk-scrollspy="cls: uk-animation-slide-bottom; repeat: true" class="sanpham__card__coverImg uk-cover-container uk-flex-inline uk-border-rounded">
                                        <img src="images/noimage.jpg" alt="" uk-cover="">
                                        <canvas width="110" height="110"></canvas>
                                    </div>
                                    <div uk-scrollspy="cls: uk-animation-slide-bottom; repeat: true" class="sanpham__card__txt1">Mini Mart: Idle Farm Tycoon</div>
                                    <div class="sanpham__card__txt2">Plant trees, raise livestock, harvest, and sell products to customers.</div>
                                    <div>
                                        <a href="" class="sanpham__card__btn uk-button uk-button-primary uk-border-pill">IOS</a>
                                        <a href="" class="sanpham__card__btn uk-button uk-button-secondary uk-border-pill uk-margin-small-left">Androi</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=" <?= ($i%2 == 0)?'uk-flex-first@m':'' ?>">
                            <img class="sanpham__img1 uk-width" src="images/noimage.jpg" alt="">
                        </div>
                        <div class="uk-width-1-1">
                            <div uk-slider>

                                <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">

                                    <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-3@m uk-grid-6" uk-grid>
                                        <?php for ($j=1;$j<5;$j++): ?>
                                        <li>
                                            <img class="sanpham__img2" src="images/noimage.jpg" alt="">
                                        </li>
                                        <?php endfor; ?>
                                    </ul>

                                </div>

                                <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin sanpham__card__dot1 uk-position-bottom-center uk-position-small"></ul>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endfor; ?>
        </div>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>