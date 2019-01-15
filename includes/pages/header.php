<?php
/**
 * Created by PhpStorm.
 * User: DONG
 * Date: 2018-12-17
 * Time: 10:06
 */
require_once '../core.php';
?>
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
                    <!-- tt-cart -->
                    <div class="tt-desctop-parent-cart tt-parent-box">
                        <div class="tt-cart tt-dropdown-obj" data-tooltip="Cart" data-tposition="bottom">
                            <button class="tt-dropdown-toggle">
                                <i class="icon-f-39"></i>
                                <span class="tt-badge-cart">3</span>
                            </button>
                            <div class="tt-dropdown-menu">
                                <div class="tt-mobile-add">
                                    <h6 class="tt-title">SHOPPING CART</h6>
                                    <button class="tt-close">Close</button>
                                </div>
                                <div class="tt-dropdown-inner">
                                    <div class="tt-cart-layout">
                                        <!-- layout emty cart -->
                                        <!-- <a href="empty-cart.html" class="tt-cart-empty">
                                            <i class="icon-f-39"></i>
                                            <p>No Products in the Cart</p>
                                        </a> -->
                                        <div class="tt-cart-content">
                                            <div class="tt-cart-list">
                                                <div class="tt-item">
                                                    <a href="product.html">
                                                        <div class="tt-item-img">
                                                            <img src="images/loader.svg" data-src="images/product/product-01.jpg" alt="">
                                                        </div>
                                                        <div class="tt-item-descriptions">
                                                            <h2 class="tt-title">Flared Shift Dress</h2>
                                                            <ul class="tt-add-info">
                                                                <li>Yellow, Material 2, Size 58,</li>
                                                                <li>Vendor: Addidas</li>
                                                            </ul>
                                                            <div class="tt-quantity">1 X</div> <div class="tt-price">$12</div>
                                                        </div>
                                                    </a>
                                                    <div class="tt-item-close">
                                                        <a href="#" class="tt-btn-close"></a>
                                                    </div>
                                                </div>
                                                <div class="tt-item">
                                                    <a href="product.html">
                                                        <div class="tt-item-img">
                                                            <img src="images/loader.svg" data-src="images/product/product-02.jpg" alt="">
                                                        </div>
                                                        <div class="tt-item-descriptions">
                                                            <h2 class="tt-title">Flared Shift Dress</h2>
                                                            <ul class="tt-add-info">
                                                                <li>Yellow, Material 2, Size 58,</li>
                                                                <li>Vendor: Addidas</li>
                                                            </ul>
                                                            <div class="tt-quantity">1 X</div> <div class="tt-price">$18</div>
                                                        </div>
                                                    </a>
                                                    <div class="tt-item-close">
                                                        <a href="#" class="tt-btn-close"></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tt-cart-total-row">
                                                <div class="tt-cart-total-title">SUBTOTAL:</div>
                                                <div class="tt-cart-total-price">$324</div>
                                            </div>
                                            <div class="tt-cart-btn">
                                                <div class="tt-item">
                                                    <a href="#" class="btn">PROCEED TO CHECKOUT</a>
                                                </div>
                                                <div class="tt-item">
                                                    <a href="shopping_cart_02.html" class="btn-link-02 tt-hidden-mobile">View Cart</a>
                                                    <a href="shopping_cart_02.html" class="btn btn-border tt-hidden-desctope">VIEW CART</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /tt-cart -->
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