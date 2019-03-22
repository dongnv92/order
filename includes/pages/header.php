<?php
/**
 * Created by PhpStorm.
 * User: DONG
 * Date: 2018-12-17
 * Time: 10:06
 */
require_once '../core.php';
$header['title']        = $header['title']          ? $header['title']          : 'Chuyên Order Hàng Trung Quốc';
$header['keywords']     = $header['keywords']       ? $header['keywords']       : 'Order Trung Quốc, Order Quảng Châu, Order Taobao, vận chuyển hàng Trung Quốc giá rẻ, uy tín toàn quốc, order hang trung quoc';
$header['description']  = $header['description']    ? $header['description']    : 'Order Trung Quốc cung cấp các dịch vụ tư vấn, hỗ trợ đặt hàng, vận chuyển hàng Trung Quốc về Việt Nam từ các website thương mại lớn như : taobao.com, tmall.com, 1688.com, alibaba.com ... uy tín giá rẻ trách nhiệm cao';
$header['images']       = $header['images']         ? $header['images']         : _URL_HOME.'/assets/images/system/noimages.png';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?=$header['title']?></title>
    <meta name="keywords" content="<?=$header['keywords']?>">
    <meta name="description" content="<?=$header['description']?>">
    <meta name="author" content="buynhanh.com">
    <link rel="shortcut icon" href="<?=_URL_HOME?>/favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta property="og:description" content="<?=$header['description']?>" data-react-helmet="true">
    <meta name="robots" content="index, follow" data-react-helmet="true">
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?=$header['title']?>" data-react-helmet="true">
    <meta property="og:url" content="<?=$function->getCurrentDomain()?>" data-react-helmet="true">
    <meta property="og:image" content="<?=$header['images']?>" data-react-helmet="true">
    <meta property="og:image:type" content="image/jpeg" data-react-helmet="true">
    <meta property="fb:app_id" content="727590360722146" data-react-helmet="true">
    <link rel="stylesheet" href="<?=_URL_STYLE?>/css/theme.css">
    <?php foreach ($css_plus AS $css){?>
        <link rel="stylesheet" type="text/css" href="<?php echo $css;?>">
    <?php }?>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-136787704-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-136787704-1');
    </script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
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
                    <a class="tt-logo tt-logo-alignment" href="<?=_URL_HOME?>"><img src="<?=_URL_HOME?>/assets/images/system/logo3.png" alt=""></a>
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
                    <a class="tt-logo tt-logo-alignment" href="<?=_URL_HOME?>"><img src="<?=_URL_HOME?>/assets/images/system/logo3.png" alt=""></a>
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
                            <button class="tt-dropdown-toggle"  data-tooltip="Tài khoản" data-tposition="bottom"><i class="icon-f-94"></i></button>
                            <div class="tt-dropdown-menu">
                                <div class="tt-mobile-add">
                                    <button class="tt-close">ĐÓNG</button>
                                </div>
                                <div class="tt-dropdown-inner">
                                    <ul>
                                        <?php if($user){?>
                                        <li><a href="<?=_URL_ADMIN?>"><i class="icon-n-072"></i>Quản lý tài khoản</a></li>
                                        <li><a href="<?=_URL_LOGOUT?>"><i class="icon-n-072"></i>Đăng xuất</a></li>
                                        <?php }else{?>
                                            <li><a href="<?=_URL_LOGIN?>"><i class="icon-f-76"></i>Đăng nhập</a></li>
                                            <li><a href="<?=_URL_REGISTER?>"><i class="icon-f-76"></i>Đăng ký</a></li>
                                        <?php }?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /tt-account -->
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