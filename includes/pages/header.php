<?php
/**
 * Created by PhpStorm.
 * User: DONG
 * Date: 2018-12-17
 * Time: 10:06
 */
require_once '../core.php';
?>
<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?=$header['title']?$header['title']:'Chuyên Order Hàng Trung Quốc'?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?=_URL_HOME?>/favicon.ico">

    <!-- CSS
	============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?=_URL_STYLE?>/css/bootstrap.min.css">
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="<?=_URL_STYLE?>/css/icons.min.css">
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="<?=_URL_STYLE?>/css/plugins.css">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="<?=_URL_STYLE?>/css/style.css">
    <!-- Modernizer JS -->
    <script src="<?=_URL_STYLE?>/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
<header class="header-area header-padding-1 sticky-bar header-res-padding clearfix">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-2 col-lg-2 col-md-6 col-4">
                <div class="logo">
                    <a href="<?=_URL_HOME?>"><img alt="" src="<?=_URL_STYLE?>/img/logo/logo.png"></a>
                </div>
            </div>
            <div class="col-xl-8 col-lg-8 d-none d-lg-block">
                <div class="main-menu">
                    <nav>
                        <ul>
                            <li><a href="index.html">Home <i class="fa fa-angle-down"></i></a>
                                <ul class="submenu">
                                    <li><a href="index.html">home version 1</a></li>
                                    <li><a href="index-2.html">home version 2</a></li>
                                    <li><a href="index-3.html">home version 3</a></li>
                                    <li><a href="index-4.html">home version 4</a></li>
                                    <li><a href="index-5.html">home version 5</a></li>
                                    <li><a href="index-6.html">home version 6</a></li>
                                    <li><a href="index-7.html">home version 7</a></li>
                                    <li><a href="index-8.html">home version 8</a></li>
                                    <li><a href="index-9.html">home version 9</a></li>
                                    <li><a href="index-10.html">home version 10</a></li>
                                </ul>
                            </li>
                            <li><a href="shop.html"> Shop <i class="fa fa-angle-down"></i> </a>
                                <ul class="mega-menu">
                                    <li>
                                        <ul>
                                            <li class="mega-menu-title"><a href="#">shop layout</a></li>
                                            <li><a href="shop.html">standard style</a></li>
                                            <li><a href="shop-filter.html">Grid filter style</a></li>
                                            <li><a href="shop-grid-2-col.html">Grid 2 column</a></li>
                                            <li><a href="shop-no-sidebar.html">Grid No sidebar</a></li>
                                            <li><a href="shop-grid-fw.html">Grid full wide </a></li>
                                            <li><a href="shop-right-sidebar.html">Grid right sidebar</a></li>
                                            <li><a href="shop-list.html">list 1 column box </a></li>
                                            <li><a href="shop-list-fw.html">list 1 column full wide </a></li>
                                            <li><a href="shop-list-fw-2col.html">list 2 column  full wide</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <ul>
                                            <li class="mega-menu-title"><a href="#">product details</a></li>
                                            <li><a href="product-details.html">tab style 1</a></li>
                                            <li><a href="product-details-2.html">tab style 2</a></li>
                                            <li><a href="product-details-3.html">tab style 3</a></li>
                                            <li><a href="product-details-4.html">sticky style</a></li>
                                            <li><a href="product-details-5.html">gallery style </a></li>
                                            <li><a href="product-details-slider-box.html">Slider style</a></li>
                                            <li><a href="product-details-affiliate.html">affiliate style</a></li>
                                            <li><a href="product-details-6.html">fixed image style </a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <ul>
                                            <li class="mega-menu-img"><a href="shop.html"><img src="assets/img/banner/banner-12.png" alt=""></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="shop.html">Collection</a></li>
                            <li><a href="#"> Pages <i class="fa fa-angle-down"></i></a>
                                <ul class="submenu">
                                    <li><a href="about.html">about us</a></li>
                                    <li><a href="cart-page.html">cart page</a></li>
                                    <li><a href="checkout.html">checkout </a></li>
                                    <li><a href="wishlist.html">wishlist </a></li>
                                    <li><a href="my-account.html">my account</a></li>
                                    <li><a href="login-register.html">login / register </a></li>
                                    <li><a href="contact.html">contact us </a></li>
                                </ul>
                            </li>
                            <li><a href="#">Blog <i class="fa fa-angle-down"></i></a>
                                <ul class="submenu">
                                    <li><a href="blog.html">blog standard</a></li>
                                    <li><a href="blog-no-sidebar.html">blog no sidebar</a></li>
                                    <li><a href="blog-right-sidebar.html">blog right sidebar</a></li>
                                    <li><a href="blog-details.html">blog details 1</a></li>
                                    <li><a href="blog-details-2.html">blog details 2</a></li>
                                    <li><a href="blog-details-3.html">blog details 3</a></li>
                                </ul>
                            </li>
                            <li><a href="about.html"> About </a></li>
                            <li><a href="contact.html"> Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-6 col-8">
                <div class="header-right-wrap">
                    <div class="same-style header-search">
                        <a class="search-active" href="#"><i class="pe-7s-search"></i></a>
                        <div class="search-content">
                            <form action="#">
                                <input type="text" placeholder="Search" />
                                <button class="button-search"><i class="pe-7s-search"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="same-style account-satting">
                        <a class="account-satting-active" href="#"><i class="pe-7s-user-female"></i></a>
                        <div class="account-dropdown">
                            <ul>
                                <li><a href="login-register.html">Login</a></li>
                                <li><a href="login-register.html">Register</a></li>
                                <li><a href="wishlist.html">Wishlist  </a></li>
                                <li><a href="my-account.html">my account</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="same-style header-wishlist">
                        <a href="wishlist.html"><i class="pe-7s-like"></i></a>
                    </div>
                    <div class="same-style cart-wrap">
                        <button class="icon-cart">
                            <i class="pe-7s-shopbag"></i>
                            <span class="count-style">02</span>
                        </button>
                        <div class="shopping-cart-content">
                            <ul>
                                <li class="single-shopping-cart">
                                    <div class="shopping-cart-img">
                                        <a href="#"><img alt="" src="assets/img/cart/cart-1.png"></a>
                                    </div>
                                    <div class="shopping-cart-title">
                                        <h4><a href="#">T- Shart & Jeans </a></h4>
                                        <h6>Qty: 02</h6>
                                        <span>$260.00</span>
                                    </div>
                                    <div class="shopping-cart-delete">
                                        <a href="#"><i class="fa fa-times-circle"></i></a>
                                    </div>
                                </li>
                                <li class="single-shopping-cart">
                                    <div class="shopping-cart-img">
                                        <a href="#"><img alt="" src="assets/img/cart/cart-2.png"></a>
                                    </div>
                                    <div class="shopping-cart-title">
                                        <h4><a href="#">T- Shart & Jeans </a></h4>
                                        <h6>Qty: 02</h6>
                                        <span>$260.00</span>
                                    </div>
                                    <div class="shopping-cart-delete">
                                        <a href="#"><i class="fa fa-times-circle"></i></a>
                                    </div>
                                </li>
                            </ul>
                            <div class="shopping-cart-total">
                                <h4>Shipping : <span>$20.00</span></h4>
                                <h4>Total : <span class="shop-total">$260.00</span></h4>
                            </div>
                            <div class="shopping-cart-btn btn-hover text-center">
                                <a class="default-btn" href="cart-page.html">view cart</a>
                                <a class="default-btn" href="checkout.html">checkout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mobile-menu-area">
            <div class="mobile-menu">
                <nav id="mobile-menu-active">
                    <ul class="menu-overflow">
                        <li><a href="index.html">HOME</a>
                            <ul>
                                <li><a href="index.html">home version 1</a></li>
                                <li><a href="index-2.html">home version 2</a></li>
                                <li><a href="index-3.html">home version 3</a></li>
                                <li><a href="index-4.html">home version 4</a></li>
                                <li><a href="index-5.html">home version 5</a></li>
                                <li><a href="index-6.html">home version 6</a></li>
                                <li><a href="index-7.html">home version 7</a></li>
                                <li><a href="index-8.html">home version 8</a></li>
                                <li><a href="index-9.html">home version 9</a></li>
                                <li><a href="index-10.html">home version 10</a></li>
                            </ul>
                        </li>
                        <li><a href="shop.html">Shop</a>
                            <ul>
                                <li><a href="#">shop layout</a>
                                    <ul>
                                        <li><a href="shop.html">standard style</a></li>
                                        <li><a href="shop-filter.html">Grid filter style</a></li>
                                        <li><a href="shop-grid-2-col.html">Grid 2 column</a></li>
                                        <li><a href="shop-no-sidebar.html">Grid No sidebar</a></li>
                                        <li><a href="shop-grid-fw.html">Grid full wide </a></li>
                                        <li><a href="shop-right-sidebar.html">Grid right sidebar</a></li>
                                        <li><a href="shop-list.html">list 1 column box </a></li>
                                        <li><a href="shop-list-fw.html">list 1 column full wide </a></li>
                                        <li><a href="shop-list-fw-2col.html">list 2 column  full wide</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">product details</a>
                                    <ul>
                                        <li><a href="product-details.html">tab style 1</a></li>
                                        <li><a href="product-details-2.html">tab style 2</a></li>
                                        <li><a href="product-details-3.html">tab style 3</a></li>
                                        <li><a href="product-details-4.html">sticky style</a></li>
                                        <li><a href="product-details-5.html">gallery style </a></li>
                                        <li><a href="product-details-slider-box.html">Slider style</a></li>
                                        <li><a href="product-details-affiliate.html">affiliate style</a></li>
                                        <li><a href="product-details-6.html">fixed image style </a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="shop.html">Collection</a></li>
                        <li><a href="#">Pages</a>
                            <ul>
                                <li><a href="about.html">about us</a></li>
                                <li><a href="cart-page.html">cart page</a></li>
                                <li><a href="checkout.html">checkout </a></li>
                                <li><a href="wishlist.html">wishlist </a></li>
                                <li><a href="my-account.html">my account</a></li>
                                <li><a href="login-register.html">login / register </a></li>
                                <li><a href="contact.html">contact us </a></li>
                            </ul>
                        </li>
                        <li><a href="blog.html">Blog</a>
                            <ul>
                                <li><a href="blog.html">blog standard</a></li>
                                <li><a href="blog-no-sidebar.html">blog no sidebar</a></li>
                                <li><a href="blog-right-sidebar.html">blog right sidebar</a></li>
                                <li><a href="blog-details.html">blog details 1</a></li>
                                <li><a href="blog-details-2.html">blog details 2</a></li>
                                <li><a href="blog-details-3.html">blog details 3</a></li>
                            </ul>
                        </li>
                        <li><a href="about.html">About us</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?=$header['title']?$header['title']:'Chuyên Order Hàng Trung Quốc'?></title>
    <meta name="keywords" content="Order Trung Quốc, Order Quảng Châu, Order Taobao, vận chuyển hàng Trung Quốc giá rẻ, uy tín toàn quốc, order hang trung quoc">
    <meta name="description" content="Order Trung Quốc cung cấp các dịch vụ tư vấn, hỗ trợ đặt hàng, vận chuyển hàng Trung Quốc về Việt Nam từ các website thương mại lớn như : taobao.com, tmall.com, 1688.com, alibaba.com ... uy tín giá rẻ trách nhiệm cao">
    <meta name="author" content="wokiee">
    <link rel="shortcut icon" href="<?=_URL_HOME?>/favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="<?=_URL_STYLE?>/css/theme.css">
    <?php foreach ($css_plus AS $css){?>
        <link rel="stylesheet" type="text/css" href="<?php echo $css;?>">
    <?php }?>
</head>
<body>
<div id="loader-wrapper">
    <div id="loader">
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
    </div>
</div>
<header>
    <!-- tt-mobile menu -->
    <nav class="panel-menu mobile-main-menu">
        <ul>
            <li class="<?=!$header['menu_active'] ? 'selected' : ''?>"><a href="<?=_URL_HOME?>">TRANG CHỦ</a></li>
            <li class="<?=$header['menu_active'] == 'new' ? 'selected' : ''?>"><a href="<?=_URL_HOME?>/new">MỚI NHẤT</a></li>
            <li class="<?=$header['menu_active'] == 'feature' ? 'selected' : ''?>"><a href="<?=_URL_HOME?>/feature">NỔI BẬT</a></li>
        </ul>
        <div class="mm-navbtn-names">
            <div class="mm-closebtn">Đóng</div>
            <div class="mm-backbtn">Quay lại</div>
        </div>
    </nav>
    <nav class="panel-menu mobile-caterorie-menu">
        <ul>
            <li>
                <a href="<?=$function->getUrlCategory(1)?>"><i class="icon-women"></i><span>GIÀY - DÉP</span></a>
                <ul>
                    <li>
                        <a href="<?=$function->getUrlCategory(1)?>?gender=make">NAM</a>
                        <ul>
                            <li><a href="<?=$function->getUrlCategory(2)?>?gender=make">Giày thể thao</a></li>
                            <li><a href="<?=$function->getUrlCategory(3)?>?gender=make">Giày thường</a></li>
                            <li><a href="<?=$function->getUrlCategory(13)?>?gender=make">Giày vải</a></li>
                            <li><a href="<?=$function->getUrlCategory(18)?>?gender=make">Giày tây</a></li>
                            <li><a href="<?=$function->getUrlCategory(19)?>?gender=make">Giày Sneakers</a></li>
                            <li><a href="<?=$function->getUrlCategory(20)?>?gender=make">Giày Sandals</a></li>
                            <li><a href="<?=$function->getUrlCategory(21)?>?gender=make">Giày Lười</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?=$function->getUrlCategory(1)?>?gender=femake">NỮ</a>
                        <ul>
                            <li><a href="<?=$function->getUrlCategory(2)?>?gender=femake">Giày thể thao</a></li>
                            <li><a href="<?=$function->getUrlCategory(3)?>?gender=femake">Giày thường</a></li>
                            <li><a href="<?=$function->getUrlCategory(13)?>?gender=femake">Giày vải</a></li>
                            <li><a href="<?=$function->getUrlCategory(19)?>?gender=femake">Giày Sneakers</a></li>
                            <li><a href="<?=$function->getUrlCategory(20)?>?gender=femake">Giày Sandals</a></li>
                            <li><a href="<?=$function->getUrlCategory(29)?>?gender=femake">Giày cao gót</a></li>
                            <li><a href="<?=$function->getUrlCategory(30)?>?gender=femake">Giày đế bằng</a></li>
                            <li><a href="<?=$function->getUrlCategory(31)?>?gender=femake">Bốt</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
        <div class="mm-navbtn-names">
            <div class="mm-closebtn">Đóng</div>
            <div class="mm-backbtn">Quay lại</div>
        </div>
    </nav>
    <!-- tt-mobile-header -->
    <div class="tt-mobile-header">
        <div class="container-fluid">
            <div class="header-tel-info">
                <i class="icon-f-93"></i> 0966624292 - 0976407514
            </div>
        </div>
        <div class="container-fluid tt-top-line">
            <div class="tt-header-row">
                <div class="tt-mobile-parent-menu">
                    <div class="tt-menu-toggle stylization-02">
                        <i class="icon-03"></i>
                    </div>
                </div>
                <div class="tt-mobile-parent-menu-categories tt-parent-box">
                    <button class="tt-categories-toggle">
                        <i class="icon-categories"></i>
                    </button>
                </div>
                <!-- search -->
                <div class="tt-mobile-parent-search tt-parent-box"></div>
                <!-- /search -->
                <!-- cart -->
                <div class="tt-mobile-parent-cart tt-parent-box"></div>
                <!-- /cart -->
                <!-- account -->
                <div class="tt-mobile-parent-account tt-parent-box"></div>
                <!-- /account -->
                <!-- currency -->
                <div class="tt-mobile-parent-multi tt-parent-box"></div>
                <!-- /currency -->
            </div>
        </div>
        <div class="container-fluid tt-top-line">
            <div class="row">
                <div class="tt-logo-container">
                    <!-- mobile logo -->
                    <a class="tt-logo tt-logo-alignment" href="index.html"><img src="http://softali.net/victor/wookie/html/images/custom/logo.png" alt=""></a>
                    <!-- /mobile logo -->
                </div>
            </div>
        </div>
    </div>
    <!-- tt-desktop-header -->
    <div class="tt-desktop-header headerunderline">
        <div class="container">
            <div class="tt-header-holder">
                <div class="tt-col-obj tt-obj-logo">
                    <!-- logo -->
                    <a class="tt-logo tt-logo-alignment" href="<?=_URL_HOME?>"><img src="http://softali.net/victor/wookie/html/images/custom/logo.png" alt=""></a>
                    <!-- /logo -->
                </div>
                <div class="tt-col-obj tt-obj-search-type2">
                    <div class="tt-search-type2">
                        <!-- tt-search -->
                        <form action="/search" method="get" role="search">
                            <i class="icon-f-85"></i>
                            <input class="tt-search-input" type="search" placeholder="NHẬP LINK SẢN PHẨM ..." aria-label="TÌM KIẾM ..." autocomplete="off">
                            <button type="submit" class="tt-btn-search">TÌM KIẾM</button>
                            <div class="search-results" style="display: none;"></div>
                        </form>
                        <!-- /tt-search -->
                    </div>
                </div>
                <div class="tt-col-obj obj-move-right">
                    <div class="header-tel-info">
                        <i class="icon-f-93"></i> 0966624292 <i class="icon-f-93"></i>0976407514
                    </div>
                </div>
            </div>
        </div>
        <div class="container small-header">
            <div class="tt-header-holder">
                <div class="tt-col-obj tt-obj-menu-categories tt-desctop-parent-menu-categories">
                    <div class="tt-menu-categories">
                        <button class="tt-dropdown-toggle">
                            CHUYÊN MỤC
                        </button>
                        <div class="tt-dropdown-menu">
                            <nav>
                                <ul>
                                    <li>
                                        <a href="<?=$function->getUrlCategory(1)?>"><i class="icon-women"></i><span>GIÀY - DÉP</span></a>
                                        <div class="dropdown-menu size-md">
                                            <div class="dropdown-menu-wrapper">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="row tt-col-list">
                                                            <div class="col-sm-6">
                                                                <a class="tt-title-submenu" href="<?=$function->getUrlCategory(1)?>?gender=make">NAM</a>
                                                                <ul class="tt-megamenu-submenu">
                                                                    <li><a href="<?=$function->getUrlCategory(2)?>?gender=make">Giày thể thao</a></li>
                                                                    <li><a href="<?=$function->getUrlCategory(3)?>?gender=make">Giày thường</a></li>
                                                                    <li><a href="<?=$function->getUrlCategory(13)?>?gender=make">Giày vải</a></li>
                                                                    <li><a href="<?=$function->getUrlCategory(18)?>?gender=make">Giày tây</a></li>
                                                                    <li><a href="<?=$function->getUrlCategory(19)?>?gender=make">Giày Sneakers</a></li>
                                                                    <li><a href="<?=$function->getUrlCategory(20)?>?gender=make">Giày Sandals</a></li>
                                                                    <li><a href="<?=$function->getUrlCategory(21)?>?gender=make">Giày Lười</a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <a class="tt-title-submenu" href="<?=$function->getUrlCategory(1)?>?gender=femake">NỮ</a>
                                                                <ul class="tt-megamenu-submenu">
                                                                    <li><a href="<?=$function->getUrlCategory(2)?>?gender=femake">Giày thể thao</a></li>
                                                                    <li><a href="<?=$function->getUrlCategory(3)?>?gender=femake">Giày thường</a></li>
                                                                    <li><a href="<?=$function->getUrlCategory(13)?>?gender=femake">Giày vải</a></li>
                                                                    <li><a href="<?=$function->getUrlCategory(19)?>?gender=femake">Giày Sneakers</a></li>
                                                                    <li><a href="<?=$function->getUrlCategory(20)?>?gender=femake">Giày Sandals</a></li>
                                                                    <li><a href="<?=$function->getUrlCategory(29)?>?gender=femake">Giày cao gót</a></li>
                                                                    <li><a href="<?=$function->getUrlCategory(30)?>?gender=femake">Giày đế bằng</a></li>
                                                                    <li><a href="<?=$function->getUrlCategory(31)?>?gender=femake">Bốt</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="tt-col-obj tt-obj-menu">
                    <!-- tt-menu -->
                    <div class="tt-desctop-parent-menu tt-parent-box">
                        <div class="tt-desctop-menu">
                            <nav>
                                <ul>
                                    <li class="dropdown tt-megamenu-col-02 <?=!$header['menu_active'] ? 'selected' : ''?>"><a href="<?=_URL_HOME?>">TRANG CHỦ</a></li>
                                    <li class="dropdown tt-megamenu-col-02 <?=$header['menu_active'] == 'new' ? 'selected' : ''?>"><a href="<?=_URL_HOME?>/new">MỚI NHẤT</a></li>
                                    <li class="dropdown tt-megamenu-col-02 <?=$header['menu_active'] == 'feature' ? 'selected' : ''?>"><a href="<?=_URL_HOME?>/feature">NỔI BẬT</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!-- /tt-menu -->
                </div>
                <div class="tt-col-obj tt-obj-options obj-move-right">
                    <!-- tt-search -->
                    <div class="tt-desctop-parent-search tt-parent-box tt-obj-desktop-hidden">
                        <div class="tt-search tt-dropdown-obj">
                            <button class="tt-dropdown-toggle" data-tooltip="Search" data-tposition="bottom">
                                <i class="icon-f-85"></i>
                            </button>
                            <div class="tt-dropdown-menu">
                                <div class="container">
                                    <form>
                                        <div class="tt-col">
                                            <input type="text" class="tt-search-input" placeholder="Search Products...">
                                            <button class="tt-btn-search" type="submit"></button>
                                        </div>
                                        <div class="tt-col">
                                            <button class="tt-btn-close icon-g-80"></button>
                                        </div>
                                        <div class="tt-info-text">
                                            What are you Looking for?
                                        </div>
                                        <div class="search-results">
                                            <ul>
                                                <li>
                                                    <a href="product.html">
                                                        <div class="thumbnail"><img src="images/loader.svg" data-src="images/product/product-03.jpg" alt=""></div>
                                                        <div class="tt-description">
                                                            <div class="tt-title">Flared Shift Bag</div>
                                                            <div class="tt-price">
                                                                <span class="new-price">$14</span>
                                                                <span class="old-price">$24</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="product.html">
                                                        <div class="thumbnail"><img src="images/loader.svg" data-src="images/product/product-02.jpg" alt=""></div>
                                                        <div class="tt-description">
                                                            <div class="tt-title">Flared Shift Bag</div>
                                                            <div class="tt-price">
                                                                $24
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="product.html">
                                                        <div class="thumbnail"><img src="images/loader.svg" data-src="images/product/product-01.jpg" alt=""></div>
                                                        <div class="tt-description">
                                                            <div class="tt-title">Flared Shift Bag</div>
                                                            <div class="tt-price">
                                                                $14
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="product.html">
                                                        <div class="thumbnail"><img src="images/loader.svg" data-src="images/product/product-04.jpg" alt=""></div>
                                                        <div class="tt-description">
                                                            <div class="tt-title">Flared Shift Bag</div>
                                                            <div class="tt-price">
                                                                $24
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="product.html">
                                                        <div class="thumbnail"><img src="images/loader.svg" data-src="images/product/product-05.jpg" alt=""></div>
                                                        <div class="tt-description">
                                                            <div class="tt-title">Flared Shift Bag</div>
                                                            <div class="tt-price">
                                                                $17
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="product.html">
                                                        <div class="thumbnail"><img src="images/loader.svg" data-src="images/product/product-06.jpg" alt=""></div>
                                                        <div class="tt-description">
                                                            <div class="tt-title">Flared Shift Bag</div>
                                                            <div class="tt-price">
                                                                $20
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                            <button type="button" class="tt-view-all">View all products</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /tt-search -->
                    <div class="tt-desctop-parent-cart tt-parent-box" id="product_cart">
                        <?=$function->getProductInMenu()?>
                    </div>
                    <!-- tt-account -->
                    <div class="tt-desctop-parent-account tt-parent-box">
                        <div class="tt-account tt-dropdown-obj">
                            <button class="tt-dropdown-toggle"  data-tooltip="My Account" data-tposition="bottom"><i class="icon-f-94"></i></button>
                            <div class="tt-dropdown-menu">
                                <div class="tt-mobile-add">
                                    <button class="tt-close">Close</button>
                                </div>
                                <div class="tt-dropdown-inner">
                                    <ul>
                                        <li><a href="login.html"><i class="icon-f-94"></i>Account</a></li>
                                        <li><a href="wishlist.html"><i class="icon-n-072"></i>Wishlist</a></li>
                                        <li><a href="compare.html"><i class="icon-n-08"></i>Compare</a></li>
                                        <li><a href="page404.html"><i class="icon-f-68"></i>Check Out</a></li>
                                        <li><a href="login.html"><i class="icon-f-76"></i>Sign In</a></li>
                                        <li><a href="page404.html"><i class="icon-f-77"></i>Sign Out</a></li>
                                        <li><a href="create-account.html"><i class="icon-f-94"></i>Register</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /tt-account -->
                    <!-- tt-langue and tt-currency -->
                    <div class="tt-desctop-parent-multi tt-parent-box">
                        <div class="tt-multi-obj tt-dropdown-obj">
                            <button class="tt-dropdown-toggle" data-tooltip="Settings" data-tposition="bottom"><i class="icon-f-79"></i></button>
                            <div class="tt-dropdown-menu">
                                <div class="tt-mobile-add">
                                    <button class="tt-close">Close</button>
                                </div>
                                <div class="tt-dropdown-inner">
                                    <ul>
                                        <li class="active"><a href="#">English</a></li>
                                        <li><a href="#">Deutsch</a></li>
                                        <li><a href="#">Español</a></li>
                                        <li><a href="#">Français</a></li>
                                    </ul>
                                    <ul>
                                        <li class="active"><a href="#"><i class="icon-h-59"></i>USD - US Dollar</a></li>
                                        <li><a href="#"><i class="icon-h-60"></i>EUR - Euro</a></li>
                                        <li><a href="#"><i class="icon-h-61"></i>GBP - British Pound Sterling</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /tt-langue and tt-currency -->
                </div>
            </div>
        </div>
    </div>
    <!-- /tt-desktop-header -->
    <!-- stuck nav -->
    <div class="tt-stuck-nav">
        <div class="container">
            <div class="tt-header-row ">
                <div class="tt-stuck-desctop-menu-categories"></div>
                <div class="tt-stuck-parent-menu"></div>
                <div class="tt-stuck-mobile-menu-categories"></div>
                <div class="tt-stuck-parent-search tt-parent-box"></div>
                <div class="tt-stuck-parent-cart tt-parent-box"></div>
                <div class="tt-stuck-parent-account tt-parent-box"></div>
                <div class="tt-stuck-parent-multi tt-parent-box"></div>
            </div>
        </div>
    </div>
</header>