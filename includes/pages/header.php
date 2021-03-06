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
                    <li class="menu-item animate-dropdown"><a title="My Account" href="my-account.html"><i class="ec ec-user"></i>Tài khoản</a></li>
                </ul>
            </nav>
        </div>
    </div><!-- /.top-bar -->

    <header id="masthead" class="site-header header-v2">
        <div class="container">
            <div class="row">

                <!-- ============================================================= Header Logo ============================================================= -->
                <div class="header-logo">
                    <a href="<?=_URL_HOME?>" class="header-logo-link"><img src="<?=_URL_HOME.'/assets/images/logo.png'?>" height="42.52px"></a>
                </div>
                <!-- ============================================================= Header Logo : End============================================================= -->
                <div class="primary-nav animate-dropdown">
                    <div class="clearfix">
                        <button class="navbar-toggler hidden-sm-up pull-right flip" type="button" data-toggle="collapse" data-target="#default-header">
                            &#9776;
                        </button>
                    </div>

                    <div class="collapse navbar-toggleable-xs" id="default-header">
                        <nav>
                            <ul id="menu-main-menu" class="nav nav-inline yamm">
                                <li class="menu-item menu-item-has-children animate-dropdown dropdown"><a title="Home" href="shop.html" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true">Home</a>
                                    <ul role="menu" class=" dropdown-menu">
                                        <li class="menu-item animate-dropdown  "><a title="Home v1" href="home.html">Home v1</a></li>
                                        <li class="menu-item current-menu-item current_page_item animate-dropdown active"><a title="Home v2" href="home-v2.html">Home v2</a></li>
                                        <li class="menu-item animate-dropdown  "><a title="Home v3" href="home-v3.html">Home v3</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item animate-dropdown"><a title="About Us" href="about.html">About Us</a></li>

                                <li class="menu-item menu-item-has-children animate-dropdown dropdown"><a title="Blog" href="blog.html" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true">Blog</a>
                                    <ul role="menu" class=" dropdown-menu">
                                        <li class="menu-item animate-dropdown"><a title="Blog v1" href="blog-v1.html">Blog v1</a></li>
                                        <li class="menu-item animate-dropdown"><a title="Blog v2" href="blog-v2.html">Blog v2</a></li>
                                        <li class="menu-item animate-dropdown"><a title="Blog v3" href="blog-v3.html">Blog v3</a></li>
                                    </ul>
                                </li>
                                <li class="yamm-fw menu-item menu-item-has-children animate-dropdown dropdown">
                                    <a title="Pages" href="#" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true">Pages</a>
                                    <ul role="menu" class=" dropdown-menu">
                                        <li class="menu-item animate-dropdown">
                                            <div class="yamm-content" style="display:inline-block; width: 100%;">
                                                <div class="row">
                                                    <div class="wpb_column vc_column_container col-sm-4">
                                                        <div class="vc_column-inner ">
                                                            <div class="wpb_wrapper">
                                                                <div class="vc_wp_custommenu wpb_content_element">
                                                                    <div class="widget widget_nav_menu">
                                                                        <div class="menu-pages-menu-1-container">
                                                                            <ul id="menu-pages-menu-1" class="menu">
                                                                                <li class="nav-title menu-item"><a href="#">Home &#038; Static Pages</a></li>
                                                                                <li class="menu-item"><a href="home.html">Home v1</a></li>
                                                                                <li class="menu-item current-menu-item current_page_item"><a href="home-v2.html">Home v2</a></li>
                                                                                <li class="menu-item"><a href="home-v3.html">Home v3</a></li>
                                                                                <li class="menu-item"><a href="about.html">About</a></li>
                                                                                <li class="menu-item"><a href="contact-v2.html">Contact v2</a></li>
                                                                                <li class="menu-item"><a href="contact-v1.html">Contact v1</a></li>
                                                                                <li class="menu-item"><a href="faq.html">FAQ</a></li>
                                                                                <li class="menu-item"><a href="store-directory.html">Store Directory</a></li>
                                                                                <li class="menu-item"><a href="terms-and-conditions.html">Terms and Conditions</a></li>
                                                                                <li class="menu-item"><a href="404.html">404</a></li>
                                                                                <li class="nav-title menu-item"><a href="#">Product Categories</a></li>
                                                                                <li class="menu-item"><a href="cat-3-col.html">3 Column Sidebar</a></li>
                                                                                <li class="menu-item"><a href="cat-4-col.html">4 Column Sidebar</a></li>
                                                                                <li class="menu-item"><a href="cat-4-fw.html">4 Column Full width</a></li>
                                                                                <li class="menu-item"><a href="product-category-6-column.html">6 Columns Full width</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="wpb_column vc_column_container col-sm-4">
                                                        <div class="vc_column-inner ">
                                                            <div class="wpb_wrapper">
                                                                <div class="vc_wp_custommenu wpb_content_element">
                                                                    <div class="widget widget_nav_menu">
                                                                        <div class="menu-pages-menu-2-container">
                                                                            <ul id="menu-pages-menu-2" class="menu">
                                                                                <li class="nav-title menu-item"><a href="#">Shop Pages</a></li>
                                                                                <li class="menu-item"><a href="shop.html#grid">Shop Grid</a></li>
                                                                                <li class="menu-item"><a href="shop.html#grid-extended">Shop Grid Extended</a></li>
                                                                                <li class="menu-item"><a href="shop.html#list-view">Shop List View</a></li>
                                                                                <li class="menu-item"><a href="shop.html#list-view-small">Shop List View Small</a></li>
                                                                                <li class="menu-item"><a href="shop.html">Shop Left Sidebar</a></li>
                                                                                <li class="menu-item"><a href="shop-fw.html">Shop Full width</a></li>
                                                                                <li class="menu-item"><a href="shop-right-side-bar.html">Shop Right Sidebar</a></li>
                                                                                <li class="nav-title menu-item"><a href="#">Blog Pages</a></li>
                                                                                <li class="menu-item"><a href="blog-v1.html">Blog v1</a></li>
                                                                                <li class="menu-item"><a href="blog-v3.html">Blog v3</a></li>
                                                                                <li class="menu-item"><a href="blog-v2.html">Blog v2</a></li>
                                                                                <li class="menu-item"><a href="blog-fw.html">Blog Full Width</a></li>
                                                                                <li class="menu-item"><a href="blog-single.html">Single Blog Post</a></li>

                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="wpb_column vc_column_container col-sm-4">
                                                        <div class="vc_column-inner ">
                                                            <div class="wpb_wrapper">
                                                                <div class="vc_wp_custommenu wpb_content_element">
                                                                    <div class="widget widget_nav_menu">
                                                                        <div class="menu-pages-menu-3-container">
                                                                            <ul id="menu-pages-menu-3" class="menu">
                                                                                <li class="nav-title menu-item"><a href="single-product.html">Single Product Pages</a></li>
                                                                                <li class="menu-item"><a href="single-product-extended.html">Single Product Extended</a></li>
                                                                                <li class="menu-item"><a href="single-product.html">Single Product Fullwidth</a></li>
                                                                                <li class="menu-item"><a href="single-product-sidebar.html">Single Product Sidebar</a></li>
                                                                                <li class="menu-item"><a href="single-product-sidebar-accessories.html">Single Product Sidebar Accessories </a></li>
                                                                                <li class="menu-item"><a href="single-product-sidebar-specification.html">Single Product Sidebar Specification </a></li>
                                                                                <li class="menu-item"><a href="single-product-sidebar-reviews.html">Single Product Sidebar Reviews </a></li>
                                                                                <li class="nav-title menu-item"><a href="#">Ecommerce Pages</a></li>
                                                                                <li class="menu-item"><a href="shop.html">Shop</a></li>
                                                                                <li class="menu-item"><a href="cart.html">Cart</a></li>
                                                                                <li class="menu-item"><a href="checkout.html">Checkout</a></li>
                                                                                <li class="menu-item"><a href="my-account.html">My Account</a></li>
                                                                                <li class="menu-item"><a href="compare.html">Compare</a></li>
                                                                                <li class="menu-item"><a href="wishlist.html">Wishlist</a></li>
                                                                            </ul>
                                                                        </div>
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
                                <li class="menu-item"><a title="Features" href="#">Features</a></li>
                                <li class="menu-item"><a title="Contact Us" href="#">Contact Us</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>

                <div class="header-support-info">
                    <div class="media">
                        <span class="media-left support-icon media-middle"><i class="ec ec-support"></i></span>
                        <div class="media-body">
                            <span class="support-number"><strong>Support</strong> (+800) 856 800 604</span><br/>
                            <span class="support-email">Email: info@electro.com</span>
                        </div>
                    </div>
                </div>

            </div><!-- /.row -->
        </div>
    </header><!-- #masthead -->

    <nav class="navbar navbar-primary navbar-full">
        <div class="container">
            <ul class="nav navbar-nav departments-menu animate-dropdown">
                <li class="nav-item dropdown ">

                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id="departments-menu-toggle" >Shop by Department</a>
                    <ul id="menu-vertical-menu" class="dropdown-menu yamm departments-menu-dropdown">
                        <li class="highlight menu-item animate-dropdown active"><a title="Value of the Day" href="product-category.html">Value of the Day</a></li>
                        <li class="highlight menu-item animate-dropdown"><a title="Top 100 Offers" href="home-v3.html">Top 100 Offers</a></li>
                        <li class="highlight menu-item animate-dropdown"><a title="New Arrivals" href="home-v3-full-color-background.html">New Arrivals</a></li>

                        <li class="yamm-tfw menu-item menu-item-has-children animate-dropdown menu-item-2584 dropdown">
                            <a title="Computers &amp; Accessories" href="product-category.html" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true">Computers &#038; Accessories</a>
                            <ul role="menu" class=" dropdown-menu">
                                <li class="menu-item animate-dropdown menu-item-object-static_block">
                                    <div class="yamm-content">
                                        <div class="vc_row row wpb_row vc_row-fluid bg-yamm-content bg-yamm-content-bottom bg-yamm-content-right">
                                            <div class="wpb_column vc_column_container vc_col-sm-12 col-sm-12">
                                                <div class="vc_column-inner ">
                                                    <div class="wpb_wrapper">
                                                        <div class="wpb_single_image wpb_content_element vc_align_left">
                                                            <figure class="wpb_wrapper vc_figure">
                                                                <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="540" height="460" src="assets/images/megamenu-2.png" class="vc_single_image-img attachment-full" alt="megamenu-2"/></div>
                                                            </figure>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="vc_row row wpb_row vc_row-fluid">
                                            <div class="wpb_column vc_column_container vc_col-sm-6 col-sm-6">
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
                                            <div class="wpb_column vc_column_container vc_col-sm-6 col-sm-6">
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

                        <li class="yamm-tfw menu-item menu-item-has-children animate-dropdown menu-item-2585 dropdown">
                            <a title="Cameras, Audio &amp; Video" href="product-category.html" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true">Cameras, Audio &#038; Video</a>
                            <ul role="menu" class=" dropdown-menu">
                                <li class="menu-item animate-dropdown menu-item-object-static_block">
                                    <div class="yamm-content">
                                        <div class="vc_row row wpb_row vc_row-fluid bg-yamm-content bg-yamm-content-bottom bg-yamm-content-right">
                                            <div class="wpb_column vc_column_container vc_col-sm-12 col-sm-12">
                                                <div class="vc_column-inner ">
                                                    <div class="wpb_wrapper">
                                                        <div class="wpb_single_image wpb_content_element vc_align_left">
                                                            <figure class="wpb_wrapper vc_figure">
                                                                <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="540" height="460" src="assets/images/megamenu-2.png" class="vc_single_image-img attachment-full" alt="megamenu-2"/></div>
                                                            </figure>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="vc_row row wpb_row vc_row-fluid">
                                            <div class="wpb_column vc_column_container vc_col-sm-6 col-sm-6">
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
                                            <div class="wpb_column vc_column_container vc_col-sm-6 col-sm-6">
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

                        <li class="yamm-tfw menu-item menu-item-has-children animate-dropdown menu-item-2586 dropdown">
                            <a title="Mobiles &amp; Tablets" href="product-category.html" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true">Mobiles &#038; Tablets</a>
                            <ul role="menu" class=" dropdown-menu">
                                <li class="menu-item animate-dropdown menu-item-object-static_block">
                                    <div class="yamm-content">
                                        <div class="vc_row row wpb_row vc_row-fluid bg-yamm-content bg-yamm-content-bottom bg-yamm-content-right">
                                            <div class="wpb_column vc_column_container vc_col-sm-12 col-sm-12">
                                                <div class="vc_column-inner ">
                                                    <div class="wpb_wrapper">
                                                        <div class="wpb_single_image wpb_content_element vc_align_left">
                                                            <figure class="wpb_wrapper vc_figure">
                                                                <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="540" height="460" src="assets/images/megamenu-2.png" class="vc_single_image-img attachment-full" alt="megamenu-2"/></div>
                                                            </figure>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="vc_row row wpb_row vc_row-fluid">
                                            <div class="wpb_column vc_column_container vc_col-sm-6 col-sm-6">
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
                                            <div class="wpb_column vc_column_container vc_col-sm-6 col-sm-6">
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


                        <li class="yamm-tfw menu-item menu-item-has-children animate-dropdown menu-item-2587 dropdown">
                            <a title="Movies, Music &amp; Video Games" href="product-category.html" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true">Movies, Music &#038; Video Games</a>
                            <ul role="menu" class=" dropdown-menu">
                                <li class="menu-item animate-dropdown menu-item-object-static_block">
                                    <div class="yamm-content">
                                        <div class="vc_row row wpb_row vc_row-fluid bg-yamm-content bg-yamm-content-bottom bg-yamm-content-right">
                                            <div class="wpb_column vc_column_container vc_col-sm-12 col-sm-12">
                                                <div class="vc_column-inner ">
                                                    <div class="wpb_wrapper">
                                                        <div class="wpb_single_image wpb_content_element vc_align_left">
                                                            <figure class="wpb_wrapper vc_figure">
                                                                <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="540" height="460" src="assets/images/megamenu-2.png" class="vc_single_image-img attachment-full" alt="megamenu-2"/></div>
                                                            </figure>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="vc_row row wpb_row vc_row-fluid">
                                            <div class="wpb_column vc_column_container vc_col-sm-6 col-sm-6">
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
                                            <div class="wpb_column vc_column_container vc_col-sm-6 col-sm-6">
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


                        <li class="yamm-tfw menu-item menu-item-has-children animate-dropdown menu-item-2588 dropdown">
                            <a title="TV &amp; Audio" href="product-category.html" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true">TV &#038; Audio</a>
                            <ul role="menu" class=" dropdown-menu">
                                <li class="menu-item animate-dropdown menu-item-object-static_block">
                                    <div class="yamm-content">
                                        <div class="vc_row row wpb_row vc_row-fluid bg-yamm-content bg-yamm-content-bottom bg-yamm-content-right">
                                            <div class="wpb_column vc_column_container vc_col-sm-12 col-sm-12">
                                                <div class="vc_column-inner ">
                                                    <div class="wpb_wrapper">
                                                        <div class="wpb_single_image wpb_content_element vc_align_left">
                                                            <figure class="wpb_wrapper vc_figure">
                                                                <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="540" height="460" src="assets/images/megamenu-2.png" class="vc_single_image-img attachment-full" alt="megamenu-2"/></div>
                                                            </figure>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="vc_row row wpb_row vc_row-fluid">
                                            <div class="wpb_column vc_column_container vc_col-sm-6 col-sm-6">
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
                                            <div class="wpb_column vc_column_container vc_col-sm-6 col-sm-6">
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


                        <li class="yamm-tfw menu-item menu-item-has-children animate-dropdown menu-item-2589 dropdown">

                            <a title="Watches &amp; Eyewear" href="product-category.html" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true">Watches &#038; Eyewear</a>
                            <ul role="menu" class=" dropdown-menu">
                                <li class="menu-item animate-dropdown menu-item-object-static_block">
                                    <div class="yamm-content">
                                        <div class="vc_row row wpb_row vc_row-fluid bg-yamm-content bg-yamm-content-bottom bg-yamm-content-right">
                                            <div class="wpb_column vc_column_container vc_col-sm-12 col-sm-12">
                                                <div class="vc_column-inner ">
                                                    <div class="wpb_wrapper">
                                                        <div class="wpb_single_image wpb_content_element vc_align_left">
                                                            <figure class="wpb_wrapper vc_figure">
                                                                <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="540" height="460" src="assets/images/megamenu-2.png" class="vc_single_image-img attachment-full" alt="megamenu-2"/></div>
                                                            </figure>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="vc_row row wpb_row vc_row-fluid">
                                            <div class="wpb_column vc_column_container vc_col-sm-6 col-sm-6">
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
                                            <div class="wpb_column vc_column_container vc_col-sm-6 col-sm-6">
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


                        <li class="yamm-tfw menu-item menu-item-has-children animate-dropdown menu-item-2590 dropdown">

                            <a title="Car, Motorbike &amp; Industrial" href="product-category.html" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true">Car, Motorbike &#038; Industrial</a>
                            <ul role="menu" class=" dropdown-menu">
                                <li class="menu-item animate-dropdown menu-item-object-static_block">
                                    <div class="yamm-content">
                                        <div class="vc_row row wpb_row vc_row-fluid bg-yamm-content bg-yamm-content-bottom bg-yamm-content-right">
                                            <div class="wpb_column vc_column_container vc_col-sm-12 col-sm-12">
                                                <div class="vc_column-inner ">
                                                    <div class="wpb_wrapper">
                                                        <div class="wpb_single_image wpb_content_element vc_align_left">
                                                            <figure class="wpb_wrapper vc_figure">
                                                                <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="540" height="460" src="assets/images/megamenu-2.png" class="vc_single_image-img attachment-full" alt="megamenu-2"/></div>
                                                            </figure>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="vc_row row wpb_row vc_row-fluid">
                                            <div class="wpb_column vc_column_container vc_col-sm-6 col-sm-6">
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
                                            <div class="wpb_column vc_column_container vc_col-sm-6 col-sm-6">
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

                        <li class="menu-item animate-dropdown"><a title="Accessories" href="product-category.html">Accessories</a></li>
                        <li class="menu-item animate-dropdown"><a title="Printers &amp; Ink" href="product-category.html">Printers &#038; Ink</a></li>
                        <li class="menu-item animate-dropdown"><a title="Software" href="product-category.html">Software</a></li>
                        <li class="menu-item animate-dropdown"><a title="Office Supplies" href="product-category.html">Office Supplies</a></li>
                        <li class="menu-item animate-dropdown"><a title="Computer Components" href="product-category.html">Computer Components</a></li>
                        <li class="menu-item animate-dropdown"><a title="Car Electronic &amp; GPS" href="product-category.html">Car Electronic &#038; GPS</a></li>
                        <li class="menu-item animate-dropdown"><a title="Accessories" href="product-category.html">Accessories</a></li>
                        <li class="menu-item animate-dropdown"><a title="Printers &amp; Ink" href="product-category.html">Printers &#038; Ink</a></li>
                    </ul>
                </li>
            </ul>
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
        </div>
    </nav>