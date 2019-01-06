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
    <meta name="keywords" content="HTML5 Template">
    <meta name="description" content="Wokiee - Responsive HTML5 Template">
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
            <li><a href="index-rtl.html">RTL</a></li>
        </ul>
        <div class="mm-navbtn-names">
            <div class="mm-closebtn">Close</div>
            <div class="mm-backbtn">Back</div>
        </div>
    </nav>
    <nav class="panel-menu mobile-caterorie-menu">
        <ul>
            <li>
                <a href="listing-left-column.html">
                    <i class="icon-new"></i>
                    <span>NEW ARRIVALS</span>
                </a>
            </li>
            <li>
                <a href="listing-left-column.html">
                    <i class="icon-sale"></i>
                    <span>CLEARENCE</span>
                </a>
            </li>
            <li>
                <a href="https://themeforest.net/item/wokiee-ecommerce-html-template/22564267?s_rank=2">
                    <i class="icon-theme"></i>
                    <span>BUY THEME!</span>
                </a>
            </li>
        </ul>
        <div class="mm-navbtn-names">
            <div class="mm-closebtn">Close</div>
            <div class="mm-backbtn">Back</div>
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
                                        <a href="#">
                                            <i class="icon-women"></i>
                                            <span>WOMEN</span>
                                        </a>
                                        <div class="dropdown-menu size-md">
                                            <div class="dropdown-menu-wrapper">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="row tt-col-list">
                                                            <div class="col-sm-4">
                                                                <a class="tt-title-submenu" href="listing-left-column.html">
                                                                    TOPS
                                                                </a>
                                                                <ul class="tt-megamenu-submenu">
                                                                    <li><a href="listing-left-column.html">Blouses &amp; Shirts</a></li>
                                                                    <li><a href="listing-left-column.html">Dresses <span class="tt-badge tt-new">New</span></a></li>
                                                                    <li>
                                                                        <a href="listing-left-column.html">Tops &amp; T-shirts</a>
                                                                        <ul>
                                                                            <li><a href="listing-left-column.html">Link Level 1</a></li>
                                                                            <li>
                                                                                <a href="listing-left-column.html">Link Level 1</a>
                                                                                <ul>
                                                                                    <li><a href="listing-left-column.html">Link Level 2</a></li>
                                                                                    <li>
                                                                                        <a href="listing-left-column.html">Link Level 2</a>
                                                                                        <ul>
                                                                                            <li><a href="listing-left-column.html">Link Level 3</a></li>
                                                                                            <li><a href="listing-left-column.html">Link Level 3</a></li>
                                                                                            <li><a href="listing-left-column.html">Link Level 3</a></li>
                                                                                            <li>
                                                                                                <a href="listing-left-column.html">Link Level 3</a>
                                                                                                <ul>
                                                                                                    <li>
                                                                                                        <a href="listing-left-column.html">Link Level 4</a>
                                                                                                        <ul>
                                                                                                            <li><a href="listing-left-column.html">Link Level 5</a></li>
                                                                                                            <li><a href="listing-left-column.html">Link Level 5</a></li>
                                                                                                            <li><a href="listing-left-column.html">Link Level 5</a></li>
                                                                                                            <li><a href="listing-left-column.html">Link Level 5</a></li>
                                                                                                            <li><a href="listing-left-column.html">Link Level 5</a></li>
                                                                                                        </ul>
                                                                                                    </li>
                                                                                                    <li><a href="listing-left-column.html">Link Level 4</a></li>
                                                                                                </ul>
                                                                                            </li>
                                                                                            <li><a href="listing-left-column.html">Link Level 3</a></li>
                                                                                        </ul>
                                                                                    </li>
                                                                                    <li><a href="listing-left-column.html">Link Level 2</a></li>
                                                                                    <li><a href="listing-left-column.html">Link Level 2</a></li>
                                                                                </ul>
                                                                            </li>
                                                                            <li><a href="listing-left-column.html">Link Level 1</a></li>
                                                                            <li><a href="listing-left-column.html">Link Level 1</a></li>
                                                                            <li><a href="listing-left-column.html">Link Level 1</a></li>
                                                                        </ul>
                                                                    </li>
                                                                    <li><a href="listing-left-column.html">Sleeveless Tops</a></li>
                                                                    <li><a href="listing-left-column.html">Sweaters</a></li>
                                                                    <li><a href="listing-left-column.html">Jackets</a></li>
                                                                    <li><a href="listing-left-column.html">Outerwear</a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <a class="tt-title-submenu" href="listing-left-column.html">
                                                                    BOTTOMS
                                                                </a>
                                                                <ul class="tt-megamenu-submenu">
                                                                    <li><a href="listing-left-column.html">Trousers <span class="tt-badge tt-fatured">Fatured</span></a></li>
                                                                    <li>
                                                                        <a href="listing-left-column.html">Jeans</a>
                                                                    </li>
                                                                    <li><a href="listing-left-column.html">Leggings</a></li>
                                                                    <li><a href="listing-left-column.html">Jumpsuit &amp; Shorts</a></li>
                                                                    <li><a href="listing-left-column.html">Skirts</a></li>
                                                                    <li><a href="listing-left-column.html">Tights</a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <a class="tt-title-submenu" href="listing-left-column.html">
                                                                    ACCESSORIES
                                                                </a>
                                                                <ul class="tt-megamenu-submenu">
                                                                    <li><a href="listing-left-column.html">Jewellery</a></li>
                                                                    <li><a href="listing-left-column.html">Hats</a></li>
                                                                    <li><a href="listing-left-column.html">Scarves &amp; Snoods</a></li>
                                                                    <li><a href="listing-left-column.html">Belts</a></li>
                                                                    <li><a href="listing-left-column.html">Bags</a></li>
                                                                    <li><a href="listing-left-column.html">Shoes <span class="tt-badge tt-sale">Sale 15%</span></a></li>
                                                                    <li><a href="listing-left-column.html">Sunglasses</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <a href="listing-left-column.html" class="tt-promo-02">
                                                            <img src="images/custom/header-promo-01.jpg" alt="">
                                                            <div class="tt-description tt-point-h-l">
                                                                <div class="tt-description-wrapper">
                                                                    <div class="tt-title-small">SUMMER <span class="tt-base-color">2018</span></div>
                                                                    <div class="tt-title-large">NEW ARRIVALS</div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="icon-men"></i>
                                            <span>MEN</span>
                                        </a>
                                        <div class="dropdown-menu size-lg">
                                            <div class="dropdown-menu-wrapper">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="row tt-col-list">
                                                            <div class="col-sm-4">
                                                                <a href="listing-right-column.html" class="tt-title-submenu">
                                                                    TOPS
                                                                    <img  src="images/loader.svg" data-src="images/custom/header-category-01.jpg" alt="">
                                                                </a>
                                                                <ul class="tt-megamenu-submenu">
                                                                    <li><a href="listing-right-column.html">Shirts</a></li>
                                                                    <li><a href="listing-right-column.html">Sweaters  <span class="tt-badge tt-new">New</span></a></li>
                                                                    <li>
                                                                        <a href="listing-right-column.html">Tops &amp; T-shirts</a>
                                                                        <ul>
                                                                            <li><a href="listing-right-column.html">Link Level 1</a></li>
                                                                            <li>
                                                                                <a href="listing-right-column.html">Link Level 1</a>
                                                                                <ul>
                                                                                    <li><a href="listing-right-column.html">Link Level 2</a></li>
                                                                                    <li>
                                                                                        <a href="listing-right-column.html">Link Level 2</a>
                                                                                        <ul>
                                                                                            <li><a href="listing-right-column.html">Link Level 3</a></li>
                                                                                            <li><a href="listing-right-column.html">Link Level 3</a></li>
                                                                                            <li><a href="listing-right-column.html">Link Level 3</a></li>
                                                                                            <li>
                                                                                                <a href="listing-right-column.html">Link Level 3</a>
                                                                                                <ul>
                                                                                                    <li>
                                                                                                        <a href="listing-right-column.html">Link Level 4</a>
                                                                                                        <ul>
                                                                                                            <li><a href="listing-right-column.html">Link Level 5</a></li>
                                                                                                            <li><a href="listing-right-column.html">Link Level 5</a></li>
                                                                                                            <li><a href="listing-right-column.html">Link Level 5</a></li>
                                                                                                            <li><a href="listing-right-column.html">Link Level 5</a></li>
                                                                                                            <li><a href="listing-right-column.html">Link Level 5</a></li>
                                                                                                        </ul>
                                                                                                    </li>
                                                                                                    <li><a href="listing-right-column.html">Link Level 4</a></li>
                                                                                                    <li><a href="listing-right-column.html">Link Level 4</a></li>
                                                                                                    <li><a href="listing-right-column.html">Link Level 4</a></li>
                                                                                                    <li><a href="listing-right-column.html">Link Level 4</a></li>
                                                                                                </ul>
                                                                                            </li>
                                                                                            <li><a href="listing-right-column.html">Link Level 3</a></li>
                                                                                        </ul>
                                                                                    </li>
                                                                                    <li><a href="listing-right-column.html">Link Level 2</a></li>
                                                                                    <li><a href="listing-right-column.html">Link Level 2</a></li>
                                                                                    <li><a href="listing-right-column.html">Link Level 2</a></li>
                                                                                </ul>
                                                                            </li>
                                                                            <li><a href="listing-right-column.html">Link Level 1</a></li>
                                                                            <li><a href="listing-right-column.html">Link Level 1</a></li>
                                                                            <li><a href="listing-right-column.html">Link Level 1</a></li>
                                                                        </ul>
                                                                    </li>
                                                                    <li><a href="listing-right-column.html">Sleeveless Tops</a></li>
                                                                    <li><a href="listing-right-column.html">Jackets</a></li>
                                                                    <li><a href="listing-right-column.html">Outerwear</a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <a class="tt-title-submenu" href="listing-right-column.html">
                                                                    BOTTOMS
                                                                    <img  src="images/loader.svg" data-src="images/custom/header-category-02.jpg" alt="">
                                                                </a>
                                                                <ul class="tt-megamenu-submenu">
                                                                    <li><a href="listing-right-column.html">Trousers <span class="tt-badge tt-fatured">Fatured</span></a></li>
                                                                    <li><a href="listing-right-column.html">Jeans</a></li>
                                                                    <li><a href="listing-right-column.html">Jumpsuit &amp; Shorts</a></li>
                                                                    <li><a href="listing-right-column.html">Skirts</a></li>
                                                                    <li><a href="listing-right-column.html">Tights</a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <a class="tt-title-submenu" href="listing-right-column.html">
                                                                    ACCESSORIES
                                                                    <img  src="images/loader.svg" data-src="images/custom/header-category-03.jpg" alt="">
                                                                </a>
                                                                <ul class="tt-megamenu-submenu">
                                                                    <li><a href="listing-right-column.html">Hats</a></li>
                                                                    <li><a href="listing-right-column.html">Scarves &amp; Snoods</a></li>
                                                                    <li><a href="listing-right-column.html">Belts</a></li>
                                                                    <li><a href="listing-right-column.html">Bags</a></li>
                                                                    <li><a href="listing-right-column.html">Shoes</a></li>
                                                                    <li><a href="listing-right-column.html">Sunglasses <span class="tt-badge tt-sale">Sale 15%</span></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="icon-new"></i>
                                            <span>NEW ARRIVALS</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="icon-sale"></i>
                                            <span>CLEARENCE</span>
                                        </a>
                                    </li>
                                    <li><a href="#">
                                            <i class="icon-theme"></i>
                                            <span>BUY THEME!</span>
                                        </a></li>
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