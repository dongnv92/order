<?php
$header_default = [
    'title' => 'KINI.VN | Trang Chủ'
];
$header         = $header ? $header : $header_default;
?>
<!DOCTYPE html>
<html lang="en-US" itemscope="itemscope" itemtype="http://schema.org/WebPage">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?=$header['title']?></title>
    <link rel="stylesheet" type="text/css" href="<?=_URL_HOME?>/assets/css/bootstrap.min.css" media="all" />
    <link rel="stylesheet" type="text/css" href="<?=_URL_HOME?>/assets/css/font-awesome.min.css" media="all" />
    <link rel="stylesheet" type="text/css" href="<?=_URL_HOME?>/assets/css/animate.min.css" media="all" />
    <link rel="stylesheet" type="text/css" href="<?=_URL_HOME?>/assets/css/font-electro.css" media="all" />
    <link rel="stylesheet" type="text/css" href="<?=_URL_HOME?>/assets/css/owl-carousel.css" media="all" />
    <link rel="stylesheet" type="text/css" href="<?=_URL_HOME?>/assets/css/style.css" media="all" />
    <link rel="stylesheet" type="text/css" href="<?=_URL_HOME?>/assets/css/colors/flat-blue.css" media="all" />
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,700italic,800,800italic,600italic,400italic,300italic' rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" href="<?=_URL_HOME?>/assets/images/fav-icon.png">
</head>
<body class="page home page-template-default">
<div id="page" class="hfeed site">
    <a class="skip-link screen-reader-text" href="#site-navigation">Skip to navigation</a>
    <a class="skip-link screen-reader-text" href="#content">Skip to content</a>
    <div class="top-bar">
        <div class="container">
            <nav>
                <ul id="menu-top-bar-left" class="nav nav-inline pull-left animate-dropdown flip">
                    <li class="menu-item animate-dropdown"><a title="Chào mừng bạn đến với KINI.VN" href="#">Chào mừng bạn đến với KINI.VN</a></li>
                </ul>
            </nav>
            <nav>
                <ul id="menu-top-bar-right" class="nav nav-inline pull-right animate-dropdown flip">
                    <li class="menu-item animate-dropdown"><a title="Store Locator" href="#"><i class="ec ec-map-pointer"></i>Địa chỉ</a></li>
                    <li class="menu-item animate-dropdown"><a title="Track Your Order" href="track-your-order.html"><i class="ec ec-transport"></i>Giao hàng</a></li>
                    <li class="menu-item animate-dropdown"><a title="Shop" href="shop.html"><i class="ec ec-shopping-bag"></i>Sản Phẩm</a></li>
                    <li class="menu-item animate-dropdown"><a title="My Account" href="<?=_URL_LOGIN?>"><i class="ec ec-user"></i>Tài khoản</a></li>
                </ul>
            </nav>
        </div>
    </div><!-- /.top-bar -->
    <header id="masthead" class="site-header header-v1">
        <div class="container">
            <div class="row">
                <!-- ============================================================= Header Logo ============================================================= -->
                <div class="header-logo">
                    <a href="<?=_URL_HOME?>" class="header-logo-link"><img src="<?=_URL_HOME.'/assets/images/logo.png'?>" height="70px" width="70px"></a>
                </div>
                <!-- ============================================================= Header Logo : End============================================================= -->

                <form class="navbar-search" method="get" action="/">
                    <label class="sr-only screen-reader-text" for="search">Search for:</label>
                    <div class="input-group">
                        <input type="text" id="search" class="form-control search-field" dir="ltr" value="" name="s" placeholder="Search for products" />
                        <div class="input-group-addon search-categories">
                            <select name='product_cat' id='product_cat' class='postform resizeselect' >
                                <option value='0' selected='selected'>All Categories</option>
                                <option class="level-0" value="laptops-laptops-computers">Laptops</option>
                                <option class="level-0" value="ultrabooks-laptops-computers">Ultrabooks</option>
                                <option class="level-0" value="mac-computers-laptops">Mac Computers</option>
                                <option class="level-0" value="all-in-one-laptops-computers">All in One</option>
                                <option class="level-0" value="servers">Servers</option>
                                <option class="level-0" value="peripherals">Peripherals</option>
                                <option class="level-0" value="gaming-laptops-computers">Gaming</option>
                                <option class="level-0" value="accessories-laptops-computers">Accessories</option>
                                <option class="level-0" value="audio-speakers">Audio Speakers</option>
                                <option class="level-0" value="headphones">Headphones</option>
                                <option class="level-0" value="computer-cases">Computer Cases</option>
                                <option class="level-0" value="printers">Printers</option>
                                <option class="level-0" value="cameras">Cameras</option>
                                <option class="level-0" value="smartphones">Smartphones</option>
                                <option class="level-0" value="game-consoles">Game Consoles</option>
                                <option class="level-0" value="power-banks">Power Banks</option>
                                <option class="level-0" value="smartwatches">Smartwatches</option>
                                <option class="level-0" value="chargers">Chargers</option>
                                <option class="level-0" value="cases">Cases</option>
                                <option class="level-0" value="headphone-accessories">Headphone Accessories</option>
                                <option class="level-0" value="headphone-cases">Headphone Cases</option>
                                <option class="level-0" value="tablets">Tablets</option>
                                <option class="level-0" value="tvs">TVs</option>
                                <option class="level-0" value="wearables">Wearables</option>
                                <option class="level-0" value="pendrives">Pendrives</option>
                            </select>
                        </div>
                        <div class="input-group-btn">
                            <input type="hidden" id="search-param" name="post_type" value="product" />
                            <button type="submit" class="btn btn-secondary"><i class="ec ec-search"></i></button>
                        </div>
                    </div>
                </form>
                <ul class="navbar-mini-cart navbar-nav animate-dropdown nav pull-right flip">
                    <li class="nav-item dropdown">
                        <a href="cart.html" class="nav-link" data-toggle="dropdown">
                            <i class="ec ec-shopping-bag"></i>
                            <span class="cart-items-count count">4</span>
                            <span class="cart-items-total-price total-price"><span class="amount">&#36;1,215.00</span></span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-mini-cart">
                            <li>
                                <div class="widget_shopping_cart_content">

                                    <ul class="cart_list product_list_widget ">


                                        <li class="mini_cart_item">
                                            <a title="Remove this item" class="remove" href="#">×</a>
                                            <a href="single-product.html">
                                                <img class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" src="assets/images/products/mini-cart1.jpg" alt="">White lumia 9001&nbsp;
                                            </a>

                                            <span class="quantity">2 × <span class="amount">£150.00</span></span>
                                        </li>


                                        <li class="mini_cart_item">
                                            <a title="Remove this item" class="remove" href="#">×</a>
                                            <a href="single-product.html">
                                                <img class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" src="assets/images/products/mini-cart2.jpg" alt="">PlayStation 4&nbsp;
                                            </a>

                                            <span class="quantity">1 × <span class="amount">£399.99</span></span>
                                        </li>

                                        <li class="mini_cart_item">
                                            <a data-product_sku="" data-product_id="34" title="Remove this item" class="remove" href="#">×</a>
                                            <a href="single-product.html">
                                                <img class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" src="assets/images/products/mini-cart3.jpg" alt="">POV Action Cam HDR-AS100V&nbsp;
                                            </a>
                                            <span class="quantity">1 × <span class="amount">£269.99</span></span>
                                        </li>
                                    </ul><!-- end product list -->
                                    <p class="total"><strong>Subtotal:</strong> <span class="amount">£969.98</span></p>
                                    <p class="buttons">
                                        <a class="button wc-forward" href="cart.html">View Cart</a>
                                        <a class="button checkout wc-forward" href="checkout.html">Checkout</a>
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>

                <ul class="navbar-wishlist nav navbar-nav pull-right flip">
                    <li class="nav-item">
                        <a href="wishlist.html" class="nav-link"><i class="ec ec-favorites"></i></a>
                    </li>
                </ul>
                <ul class="navbar-compare nav navbar-nav pull-right flip">
                    <li class="nav-item">
                        <a href="compare.html" class="nav-link"><i class="ec ec-compare"></i></a>
                    </li>
                </ul>
            </div><!-- /.row -->

            <div class="row">
                <div class="col-xs-12 col-lg-3">
                    <nav>
                        <ul class="list-group vertical-menu yamm make-absolute">
                            <li class="list-group-item"><span><i class="fa fa-list-ul"></i> All Departments</span></li>

                            <li class="highlight menu-item animate-dropdown"><a title="Value of the Day" href="home-v2.html">Value of the Day</a></li>

                            <li class="highlight menu-item animate-dropdown"><a title="Top 100 Offers" href="home-v3.html">Top 100 Offers</a></li>

                            <li class="highlight menu-item animate-dropdown"><a title="New Arrivals" href="home-v3-full-color-background.html">New Arrivals</a></li>

                            <li class="yamm-tfw menu-item menu-item-has-children animate-dropdown dropdown">
                                <a title="Computers &amp; Accessories" data-hover="dropdown" href="product-category.html" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true">Computers &#038; Accessories</a>
                                <ul role="menu" class=" dropdown-menu">
                                    <li class="menu-item animate-dropdown menu-item-object-static_block">
                                        <div class="yamm-content">
                                            <div class="row bg-yamm-content bg-yamm-content-bottom bg-yamm-content-right">
                                                <div class="col-sm-12">
                                                    <div class="vc_column-inner ">
                                                        <div class="wpb_wrapper">
                                                            <div class="wpb_single_image wpb_content_element vc_align_left">
                                                                <figure class="wpb_wrapper vc_figure">
                                                                    <div class="vc_single_image-wrapper vc_box_border_grey">

                                                                        <img src="assets/images/megamenu-2.png" class="vc_single_image-img attachment-full" alt="">
                                                                    </div>
                                                                </figure>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="vc_column-inner ">
                                                        <div class="wpb_wrapper">
                                                            <div class="wpb_text_column wpb_content_element ">
                                                                <div class="wpb_wrapper">
                                                                    <ul>
                                                                        <li class="nav-title">Computers &amp; Accessories</li>
                                                                        <li><a href="#">All Computers &amp; Accessories</a></li>
                                                                        <li><a href="#">Laptops, Desktops &amp; Monitors</a></li>
                                                                        <li><a href="#">Pen Drives, Hard Drives &amp; Memory Cards</a></li>
                                                                        <li><a href="#">Printers &amp; Ink</a></li>
                                                                        <li><a href="#">Networking &amp; Internet Devices</a></li>
                                                                        <li><a href="#">Computer Accessories</a></li>
                                                                        <li><a href="#">Software</a></li>
                                                                        <li class="nav-divider"></li>
                                                                        <li><a href="#"><span class="nav-text">All Electronics</span><span class="nav-subtext">Discover more products</span></a></li>
                                                                    </ul>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="vc_column-inner ">
                                                        <div class="wpb_wrapper">
                                                            <div class="wpb_text_column wpb_content_element ">
                                                                <div class="wpb_wrapper">
                                                                    <ul>
                                                                        <li class="nav-title">Office &amp; Stationery</li>
                                                                        <li><a href="#">All Office &amp; Stationery</a></li>
                                                                        <li><a href="#">Pens &amp; Writing</a></li>
                                                                    </ul>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>

                            <li class="yamm-tfw menu-item menu-item-has-children animate-dropdown dropdown">
                                <a title="Cameras, Audio &amp; Video" data-hover="dropdown" href="product-category.html" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true">Cameras, Audio &#038; Video</a>
                                <ul role="menu" class=" dropdown-menu">
                                    <li class="menu-item animate-dropdown menu-item-object-static_block">
                                        <div class="yamm-content">
                                            <div class="row bg-yamm-content bg-yamm-content-bottom bg-yamm-content-right">
                                                <div class="col-sm-12">
                                                    <div class="vc_column-inner ">
                                                        <div class="wpb_wrapper">
                                                            <div class="wpb_single_image wpb_content_element vc_align_left">
                                                                <figure class="wpb_wrapper vc_figure">
                                                                    <div class="vc_single_image-wrapper vc_box_border_grey">

                                                                        <img src="assets/images/megamenu-2.png" class="vc_single_image-img attachment-full" alt="">
                                                                    </div>
                                                                </figure>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="vc_column-inner ">
                                                        <div class="wpb_wrapper">
                                                            <div class="wpb_text_column wpb_content_element ">
                                                                <div class="wpb_wrapper">
                                                                    <ul>
                                                                        <li class="nav-title">Computers &amp; Accessories</li>
                                                                        <li><a href="#">All Computers &amp; Accessories</a></li>
                                                                        <li><a href="#">Laptops, Desktops &amp; Monitors</a></li>
                                                                        <li><a href="#">Pen Drives, Hard Drives &amp; Memory Cards</a></li>
                                                                        <li><a href="#">Printers &amp; Ink</a></li>
                                                                        <li><a href="#">Networking &amp; Internet Devices</a></li>
                                                                        <li><a href="#">Computer Accessories</a></li>
                                                                        <li><a href="#">Software</a></li>
                                                                        <li class="nav-divider"></li>
                                                                        <li><a href="#"><span class="nav-text">All Electronics</span><span class="nav-subtext">Discover more products</span></a></li>
                                                                    </ul>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="vc_column-inner ">
                                                        <div class="wpb_wrapper">
                                                            <div class="wpb_text_column wpb_content_element ">
                                                                <div class="wpb_wrapper">
                                                                    <ul>
                                                                        <li class="nav-title">Office &amp; Stationery</li>
                                                                        <li><a href="#">All Office &amp; Stationery</a></li>
                                                                        <li><a href="#">Pens &amp; Writing</a></li>
                                                                    </ul>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>

                            <li class="yamm-tfw menu-item menu-item-has-children animate-dropdown dropdown">
                                <a title="Mobiles &amp; Tablets" data-hover="dropdown" href="product-category.html" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true">Mobiles &#038; Tablets</a>
                                <ul role="menu" class=" dropdown-menu">
                                    <li class="menu-item animate-dropdown menu-item-object-static_block">
                                        <div class="yamm-content">
                                            <div class="row bg-yamm-content bg-yamm-content-bottom bg-yamm-content-right">
                                                <div class="col-sm-12">
                                                    <div class="vc_column-inner ">
                                                        <div class="wpb_wrapper">
                                                            <div class="wpb_single_image wpb_content_element vc_align_left">
                                                                <figure class="wpb_wrapper vc_figure">
                                                                    <div class="vc_single_image-wrapper vc_box_border_grey">

                                                                        <img src="assets/images/megamenu-2.png" class="vc_single_image-img attachment-full" alt="">
                                                                    </div>
                                                                </figure>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="vc_column-inner ">
                                                        <div class="wpb_wrapper">
                                                            <div class="wpb_text_column wpb_content_element ">
                                                                <div class="wpb_wrapper">
                                                                    <ul>
                                                                        <li class="nav-title">Computers &amp; Accessories</li>
                                                                        <li><a href="#">All Computers &amp; Accessories</a></li>
                                                                        <li><a href="#">Laptops, Desktops &amp; Monitors</a></li>
                                                                        <li><a href="#">Pen Drives, Hard Drives &amp; Memory Cards</a></li>
                                                                        <li><a href="#">Printers &amp; Ink</a></li>
                                                                        <li><a href="#">Networking &amp; Internet Devices</a></li>
                                                                        <li><a href="#">Computer Accessories</a></li>
                                                                        <li><a href="#">Software</a></li>
                                                                        <li class="nav-divider"></li>
                                                                        <li><a href="#"><span class="nav-text">All Electronics</span><span class="nav-subtext">Discover more products</span></a></li>
                                                                    </ul>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="vc_column-inner ">
                                                        <div class="wpb_wrapper">
                                                            <div class="wpb_text_column wpb_content_element ">
                                                                <div class="wpb_wrapper">
                                                                    <ul>
                                                                        <li class="nav-title">Office &amp; Stationery</li>
                                                                        <li><a href="#">All Office &amp; Stationery</a></li>
                                                                        <li><a href="#">Pens &amp; Writing</a></li>
                                                                    </ul>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>

                            <li class="yamm-tfw menu-item menu-item-has-children animate-dropdown dropdown">
                                <a title="Movies, Music &amp; Video Games" data-hover="dropdown" href="product-category.html" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true">Movies, Music &#038; Video Games</a>
                                <ul role="menu" class=" dropdown-menu">
                                    <li class="menu-item animate-dropdown menu-item-object-static_block">
                                        <div class="yamm-content">
                                            <div class="row bg-yamm-content bg-yamm-content-bottom bg-yamm-content-right">
                                                <div class="col-sm-12">
                                                    <div class="vc_column-inner ">
                                                        <div class="wpb_wrapper">
                                                            <div class="wpb_single_image wpb_content_element vc_align_left">
                                                                <figure class="wpb_wrapper vc_figure">
                                                                    <div class="vc_single_image-wrapper vc_box_border_grey">

                                                                        <img src="assets/images/megamenu-2.png" class="vc_single_image-img attachment-full" alt="">
                                                                    </div>
                                                                </figure>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="vc_column-inner ">
                                                        <div class="wpb_wrapper">
                                                            <div class="wpb_text_column wpb_content_element ">
                                                                <div class="wpb_wrapper">
                                                                    <ul>
                                                                        <li class="nav-title">Computers &amp; Accessories</li>
                                                                        <li><a href="#">All Computers &amp; Accessories</a></li>
                                                                        <li><a href="#">Laptops, Desktops &amp; Monitors</a></li>
                                                                        <li><a href="#">Pen Drives, Hard Drives &amp; Memory Cards</a></li>
                                                                        <li><a href="#">Printers &amp; Ink</a></li>
                                                                        <li><a href="#">Networking &amp; Internet Devices</a></li>
                                                                        <li><a href="#">Computer Accessories</a></li>
                                                                        <li><a href="#">Software</a></li>
                                                                        <li class="nav-divider"></li>
                                                                        <li><a href="#"><span class="nav-text">All Electronics</span><span class="nav-subtext">Discover more products</span></a></li>
                                                                    </ul>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="vc_column-inner ">
                                                        <div class="wpb_wrapper">
                                                            <div class="wpb_text_column wpb_content_element ">
                                                                <div class="wpb_wrapper">
                                                                    <ul>
                                                                        <li class="nav-title">Office &amp; Stationery</li>
                                                                        <li><a href="#">All Office &amp; Stationery</a></li>
                                                                        <li><a href="#">Pens &amp; Writing</a></li>
                                                                    </ul>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>

                            <li class="yamm-tfw menu-item menu-item-has-children animate-dropdown dropdown">
                                <a title="TV &amp; Audio" data-hover="dropdown" href="product-category.html" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true">TV &#038; Audio</a>
                                <ul role="menu" class=" dropdown-menu">
                                    <li class="menu-item animate-dropdown menu-item-object-static_block">
                                        <div class="yamm-content">
                                            <div class="row bg-yamm-content bg-yamm-content-bottom bg-yamm-content-right">
                                                <div class="col-sm-12">
                                                    <div class="vc_column-inner ">
                                                        <div class="wpb_wrapper">
                                                            <div class="wpb_single_image wpb_content_element vc_align_left">
                                                                <figure class="wpb_wrapper vc_figure">
                                                                    <div class="vc_single_image-wrapper vc_box_border_grey">

                                                                        <img src="assets/images/megamenu-2.png" class="vc_single_image-img attachment-full" alt="">
                                                                    </div>
                                                                </figure>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="vc_column-inner ">
                                                        <div class="wpb_wrapper">
                                                            <div class="wpb_text_column wpb_content_element ">
                                                                <div class="wpb_wrapper">
                                                                    <ul>
                                                                        <li class="nav-title">Computers &amp; Accessories</li>
                                                                        <li><a href="#">All Computers &amp; Accessories</a></li>
                                                                        <li><a href="#">Laptops, Desktops &amp; Monitors</a></li>
                                                                        <li><a href="#">Pen Drives, Hard Drives &amp; Memory Cards</a></li>
                                                                        <li><a href="#">Printers &amp; Ink</a></li>
                                                                        <li><a href="#">Networking &amp; Internet Devices</a></li>
                                                                        <li><a href="#">Computer Accessories</a></li>
                                                                        <li><a href="#">Software</a></li>
                                                                        <li class="nav-divider"></li>
                                                                        <li><a href="#"><span class="nav-text">All Electronics</span><span class="nav-subtext">Discover more products</span></a></li>
                                                                    </ul>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="vc_column-inner ">
                                                        <div class="wpb_wrapper">
                                                            <div class="wpb_text_column wpb_content_element ">
                                                                <div class="wpb_wrapper">
                                                                    <ul>
                                                                        <li class="nav-title">Office &amp; Stationery</li>
                                                                        <li><a href="#">All Office &amp; Stationery</a></li>
                                                                        <li><a href="#">Pens &amp; Writing</a></li>
                                                                    </ul>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>

                            <li class="yamm-tfw menu-item menu-item-has-children animate-dropdown dropdown">
                                <a title="Watches &amp; Eyewear" data-hover="dropdown" href="product-category.html" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true">Watches &#038; Eyewear</a>
                                <ul role="menu" class=" dropdown-menu">
                                    <li class="menu-item animate-dropdown menu-item-object-static_block">
                                        <div class="yamm-content">
                                            <div class="row bg-yamm-content bg-yamm-content-bottom bg-yamm-content-right">
                                                <div class="col-sm-12">
                                                    <div class="vc_column-inner ">
                                                        <div class="wpb_wrapper">
                                                            <div class="wpb_single_image wpb_content_element vc_align_left">
                                                                <figure class="wpb_wrapper vc_figure">
                                                                    <div class="vc_single_image-wrapper vc_box_border_grey">

                                                                        <img src="assets/images/megamenu-2.png" class="vc_single_image-img attachment-full" alt="">
                                                                    </div>
                                                                </figure>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="vc_column-inner ">
                                                        <div class="wpb_wrapper">
                                                            <div class="wpb_text_column wpb_content_element ">
                                                                <div class="wpb_wrapper">
                                                                    <ul>
                                                                        <li class="nav-title">Computers &amp; Accessories</li>
                                                                        <li><a href="#">All Computers &amp; Accessories</a></li>
                                                                        <li><a href="#">Laptops, Desktops &amp; Monitors</a></li>
                                                                        <li><a href="#">Pen Drives, Hard Drives &amp; Memory Cards</a></li>
                                                                        <li><a href="#">Printers &amp; Ink</a></li>
                                                                        <li><a href="#">Networking &amp; Internet Devices</a></li>
                                                                        <li><a href="#">Computer Accessories</a></li>
                                                                        <li><a href="#">Software</a></li>
                                                                        <li class="nav-divider"></li>
                                                                        <li><a href="#"><span class="nav-text">All Electronics</span><span class="nav-subtext">Discover more products</span></a></li>
                                                                    </ul>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="vc_column-inner ">
                                                        <div class="wpb_wrapper">
                                                            <div class="wpb_text_column wpb_content_element ">
                                                                <div class="wpb_wrapper">
                                                                    <ul>
                                                                        <li class="nav-title">Office &amp; Stationery</li>
                                                                        <li><a href="#">All Office &amp; Stationery</a></li>
                                                                        <li><a href="#">Pens &amp; Writing</a></li>
                                                                    </ul>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>

                            <li class="yamm-tfw menu-item menu-item-has-children animate-dropdown dropdown">
                                <a title="Car, Motorbike &amp; Industrial" data-hover="dropdown" href="product-category.html" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true">Car, Motorbike &#038; Industrial</a>
                                <ul role="menu" class=" dropdown-menu">
                                    <li class="menu-item animate-dropdown menu-item-object-static_block">
                                        <div class="yamm-content">
                                            <div class="row bg-yamm-content bg-yamm-content-bottom bg-yamm-content-right">
                                                <div class="col-sm-12">
                                                    <div class="vc_column-inner ">
                                                        <div class="wpb_wrapper">
                                                            <div class="wpb_single_image wpb_content_element vc_align_left">
                                                                <figure class="wpb_wrapper vc_figure">
                                                                    <div class="vc_single_image-wrapper vc_box_border_grey">

                                                                        <img src="assets/images/megamenu-2.png" class="vc_single_image-img attachment-full" alt="">
                                                                    </div>
                                                                </figure>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="vc_column-inner ">
                                                        <div class="wpb_wrapper">
                                                            <div class="wpb_text_column wpb_content_element ">
                                                                <div class="wpb_wrapper">
                                                                    <ul>
                                                                        <li class="nav-title">Computers &amp; Accessories</li>
                                                                        <li><a href="#">All Computers &amp; Accessories</a></li>
                                                                        <li><a href="#">Laptops, Desktops &amp; Monitors</a></li>
                                                                        <li><a href="#">Pen Drives, Hard Drives &amp; Memory Cards</a></li>
                                                                        <li><a href="#">Printers &amp; Ink</a></li>
                                                                        <li><a href="#">Networking &amp; Internet Devices</a></li>
                                                                        <li><a href="#">Computer Accessories</a></li>
                                                                        <li><a href="#">Software</a></li>
                                                                        <li class="nav-divider"></li>
                                                                        <li><a href="#"><span class="nav-text">All Electronics</span><span class="nav-subtext">Discover more products</span></a></li>
                                                                    </ul>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="vc_column-inner ">
                                                        <div class="wpb_wrapper">
                                                            <div class="wpb_text_column wpb_content_element ">
                                                                <div class="wpb_wrapper">
                                                                    <ul>
                                                                        <li class="nav-title">Office &amp; Stationery</li>
                                                                        <li><a href="#">All Office &amp; Stationery</a></li>
                                                                        <li><a href="#">Pens &amp; Writing</a></li>
                                                                    </ul>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>

                            <li id="menu-item-2695" class="menu-item menu-item-has-children animate-dropdown dropdown">
                                <a title="Accessories" data-hover="dropdown" href="product-category.html" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true">Accessories</a>
                                <ul role="menu" class=" dropdown-menu">
                                    <li class="menu-item animate-dropdown"><a title="Cases" href="product-category.html">Cases</a></li>
                                    <li class="menu-item animate-dropdown"><a title="Chargers" href="product-category.html">Chargers</a></li>
                                    <li class="menu-item animate-dropdown"><a title="Headphone Accessories" href="product-category.html">Headphone Accessories</a></li>
                                    <li class="menu-item animate-dropdown"><a title="Headphone Cases" href="product-category.html">Headphone Cases</a></li>
                                    <li class="menu-item animate-dropdown"><a title="Headphones" href="product-category.html">Headphones</a></li>
                                    <li class="menu-item animate-dropdown"><a title="Computer Accessories" href="product-category.html">Computer Accessories</a></li>
                                    <li class="menu-item animate-dropdown"><a title="Laptop Accessories" href="product-category.html">Laptop Accessories</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>

                <div class="col-xs-12 col-lg-9">
                    <nav>
                        <ul id="menu-secondary-nav" class="secondary-nav">
                            <li class="highlight menu-item"><a href="home-v2.html">Super Deals</a></li>
                            <li class="menu-item"><a href="home-v3.html">Featured Brands</a></li>
                            <li class="menu-item"><a href="home-v3-full-color-background.html">Trending Styles</a></li>
                            <li class="menu-item"><a href="blog-v1.html">Gift Cards</a></li>
                            <li class="pull-right menu-item"><a href="blog-v2.html">Free Shipping on Orders $50+</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header><!-- #masthead -->