<?php $projectName = "CM GAME"; ?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="REFRESH" content="1800"/>
    <title><?= /** @var TYPE_NAME  */
        (isset($data['title'])) ? $data['title'] : ''; ?> - <?= $projectName ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <!--CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.16.11/dist/css/uikit.min.css" />
    <link rel="stylesheet" href="style.css?v=<?php echo(time()) ?>">

    <!--JS-->
    <script src="https://cdn.jsdelivr.net/npm/@shinsenter/defer.js/dist/defer_plus.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.16.11/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.16.11/dist/js/uikit-icons.min.js"></script>
    <script src="js/app.js?v=<?php echo(time()) ?>"></script>
</head>
<body class="">
<!--app-->
<div id="app" class="uk-height-viewport uk-offcanvas-content uk-overflow-hidden uk-position-relative">
    <nav class="header uk-navbar-container uk-navbar-transparent home__bg1" uk-sticky>
        <div class="uk-container">
            <div uk-navbar>

                <div class="uk-navbar-left">

                    <a href="." class="header__navitem uk-navbar-item uk-logo"><img src="images/logo.png" alt=""></a>

                </div>

                <div class="uk-navbar-center">

                    <ul class="uk-navbar-nav uk-visible@m">
                        <li class="uk-active"><a href=".">TRANG CHỦ</a></li>
                        <li><a href="vechungtoi.php">VỀ CHÚNG TÔI</a></li>
                        <li><a href="sanpham.php">SẢN PHẨM</a></li>
                        <li><a href="hoatdong.php">HOẠT ĐỘNG</a></li>
                        <li><a href="tuyendung.php">TUYỂN DỤNG</a></li>
                        <li><a href="lienhe.php">LIÊN HỆ</a></li>
                    </ul>

                </div>

                <div class="uk-navbar-right">
                    <div class="uk-navbar-item">
                        <div class="header__lang" style="--url: url('images/vietnam.png')">VI</div>
                    </div>
                    <a class="uk-navbar-toggle uk-navbar-toggle-animate uk-hidden@m" uk-navbar-toggle-icon uk-toggle href="#offcanvas-flip"></a>
                </div>

            </div>
        </div>
    </nav>
    <div id="offcanvas-flip" uk-offcanvas="flip: true; overlay: true">
        <div class="uk-offcanvas-bar">

            <button class="uk-offcanvas-close uk-close" type="button" uk-icon="ratio: 2; icon: close"></button>

            <ul class="uk-nav uk-nav-primary uk-margin-auto-vertical">
                <li class="uk-active"><a href=".">TRANG CHỦ</a></li>
                <li class="uk-margin-small-top"><a href="vechungtoi.php">VỀ CHÚNG TÔI</a></li>
                <li class="uk-margin-small-top"><a href="sanpham.php">SẢN PHẨM</a></li>
                <li class="uk-margin-small-top"><a href="hoatdong.php">HOẠT ĐỘNG</a></li>
                <li class="uk-margin-small-top"><a href="tuyendung.php">TUYỂN DỤNG</a></li>
                <li class="uk-margin-small-top"><a href="lienhe.php">LIÊN HỆ</a></li>
            </ul>

        </div>
    </div>