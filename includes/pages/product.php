<?php
require_once '../../includes/core.php';
$product            = $db->from(_TABLE_PRODUCT)->where('product_url', $url)->fetch_first();
$header['title']    = $product['product_name'];
$images_first       = $db->select('media_source')->from(_TABLE_MEDIA)->where(array('media_type' => 'images_product', 'media_store' => 'local', 'media_parent' => $product['product_id']))->fetch_first();
require_once 'header.php';
?>

    <div class="tt-breadcrumb">
        <div class="container">
            <ul>
                <li><a href="index.html">Trang chủ</a></li>
                <li><a href="listing-left-column.html">Shop</a></li>
                <li>T-Shirt</li>
            </ul>
        </div>
    </div>
    <div id="tt-pageContent">
        <div class="container-indent">
            <!-- mobile product slider  -->
            <div class="tt-mobile-product-slider visible-xs arrow-location-center slick-animated-show-js">
                <?php
                foreach ($db->select('media_source')->from(_TABLE_MEDIA)->where(array('media_type' => 'images_product', 'media_store' => 'local', 'media_parent' => $product['product_id']))->fetch() as $images_mobile){
                    echo '<div><img src="'. _URL_HOME .'/'. $images_mobile['media_source'] .'" alt="'. $product['product_name'] .'"></div>';
                }
                ?>
            </div>
            <!-- /mobile product slider  -->
            <div class="container container-fluid-mobile">
                <div class="row">
                    <div class="col-6 hidden-xs">
                        <div class="tt-product-vertical-layout">
                            <div class="tt-product-single-img">
                                <div>
                                    <img class="zoom-product" src='<?=_URL_HOME.'/'.$images_first['media_source']?>' data-zoom-image="<?=_URL_HOME.'/'.$images_first['media_source']?>" alt="<?=$product['product_name']?>">
                                    <button class="tt-btn-zomm tt-top-right"><i class="icon-f-86"></i></button>
                                </div>
                            </div>
                            <div class="tt-product-single-carousel-vertical">
                                <ul id="smallGallery" class="tt-slick-button-vertical slick-animated-show-js">
                                    <?php
                                    $i = 0;
                                    foreach ($db->select('media_source')->from(_TABLE_MEDIA)->where(array('media_type' => 'images_product', 'media_store' => 'local', 'media_parent' => $product['product_id']))->fetch() as $images_mobile){
                                        $i++;
                                        if($i == 1){
                                            echo '<li><a class="zoomGalleryActive" href="#" data-image="'. _URL_HOME .'/'. $images_mobile['media_source'] .'" data-zoom-image="'. _URL_HOME .'/'. $images_mobile['media_source'] .'"><img src="'. _URL_HOME .'/'. $images_mobile['media_source'] .'" alt="'. $product['product_name'] .'"></a></li>';
                                        }else{
                                            echo '<li><a href="#" data-image="'. _URL_HOME .'/'. $images_mobile['media_source'] .'" data-zoom-image="'. _URL_HOME .'/'. $images_mobile['media_source'] .'"><img src="'. _URL_HOME .'/'. $images_mobile['media_source'] .'" alt="'. $product['product_name'] .'"></a></li>';
                                        }
                                    }
                                    foreach (unserialize($product['product_color']) as $product_color){
                                        echo '<li><a href="#" data-image="'. _URL_HOME .'/'. $product_color .'" data-zoom-image="'. _URL_HOME .'/'. $product_color .'"><img src="'. _URL_HOME .'/'. $product_color .'" alt="'. $product['product_name'] .'"></a></li>';
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="tt-product-single-info">
                            <h3 class="tt-title"><?=$product['product_name']?></h3>
                            <div class="tt-price">
                                <span class="new-price"><?=$product['product_price_vn']?>₫</span>
                                <!--<span class="old-price" style="color: #D81B60"><small><?/*=$product['product_price_default']*/?>¥</small></span>
                                <span class="new-price"><small><?/*=$product['product_price_promotion']*/?>¥</small></span>-->
                            </div>
                            <div class="tt-swatches-container">
                                <div class="tt-wrapper">
                                    <div class="tt-title-options">SIZE:</div>
                                    <ul class="tt-options-swatch options-large">
                                        <?php
                                        foreach (unserialize($product['product_size']) as $product_size){
                                            echo '<li><a href="#">'. $product_size .'</a></li>';
                                        }
                                        ?>
                                    </ul>
                                </div>
                                <div class="tt-wrapper product-information-buttons">
                                    <a data-toggle="modal" data-target="#modalProductInfo" href="#">Size Guide</a>
                                    <a data-toggle="modal" data-target="#modalProductInfo-02" href="#">Shipping</a>
                                </div>
                                <div class="tt-wrapper">
                                    <div class="tt-title-options">Màu:</div>
                                    <ul class="tt-options-swatch options-large">
                                        <?php
                                        foreach (unserialize($product['product_color']) as $product_color){
                                            echo '<li>
                                            <a class="options-color" href="#">
										        <span class="swatch-img">
											        <img src="'. _URL_HOME .'/'. $product_color .'" alt="">
										        </span>
                                                <span class="swatch-label color-black"></span>
                                            </a>
                                            </li>';
                                        }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                            <div class="tt-wrapper">
                                <div class="tt-row-custom-01">
                                    <div class="col-item">
                                        <div class="tt-input-counter style-01">
                                            <span class="minus-btn"></span>
                                            <input type="text" value="1" size="5">
                                            <span class="plus-btn"></span>
                                        </div>
                                    </div>
                                    <div class="col-item">
                                        <a href="#" class="btn btn-lg"><i class="icon-f-39"></i>THÊM VÀO GIỎ HÀNG</a>
                                    </div>
                                </div>
                            </div>
                            <div class="tt-wrapper">
                                <ul class="tt-list-btn">
                                    <li><a class="btn-link" href="#"><i class="icon-n-072"></i>THÊM VÀO YÊU THÍCH</a></li>
                                    <li><a class="btn-link" href="#"><i class="icon-n-08"></i>LINK SẢN PHẨM GỐC</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-indent">
            <div class="container container-fluid-custom-mobile-padding">
                <div class="tt-block-title text-left">
                    <h3 class="tt-title-small">SẢN PHẨM TƯƠNG TỰ</h3>
                </div>
                <div class="tt-carousel-products row arrow-location-right-top tt-alignment-img tt-layout-product-item slick-animated-show-js">
                    <div class="col-2 col-md-4 col-lg-3">
                        <div class="tt-product thumbprod-center">
                            <div class="tt-image-box">
                                <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"	data-tooltip="Quick View" data-tposition="left"></a>
                                <a href="#" class="tt-btn-wishlist" data-tooltip="Add to Wishlist" data-tposition="left"></a>
                                <a href="#" class="tt-btn-compare" data-tooltip="Add to Compare" data-tposition="left"></a>
                                <a href="product.html">
                                    <span class="tt-img"><img src="images/product/product-16.jpg" alt=""></span>
                                    <span class="tt-img-roll-over"><img src="images/product/product-16-02.jpg" alt=""></span>
                                </a>
                            </div>
                            <div class="tt-description">
                                <div class="tt-row">
                                    <ul class="tt-add-info">
                                        <li><a href="#">T-SHIRTS</a></li>
                                    </ul>
                                </div>
                                <h2 class="tt-title"><a href="product.html">Flared Shift Dress</a></h2>
                                <div class="tt-price">
                                    $24
                                </div>
                                <div class="tt-product-inside-hover">
                                    <div class="tt-row-btn">
                                        <a href="#" class="tt-btn-addtocart thumbprod-button-bg" data-toggle="modal" data-target="#modalAddToCartProduct">ADD TO CART</a>
                                    </div>
                                    <div class="tt-row-btn">
                                        <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"></a>
                                        <a href="#" class="tt-btn-wishlist"></a>
                                        <a href="#" class="tt-btn-compare"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-2 col-md-4 col-lg-3">
                        <div class="tt-product thumbprod-center">
                            <div class="tt-image-box">
                                <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"	data-tooltip="Quick View" data-tposition="left"></a>
                                <a href="#" class="tt-btn-wishlist" data-tooltip="Add to Wishlist" data-tposition="left"></a>
                                <a href="#" class="tt-btn-compare" data-tooltip="Add to Compare" data-tposition="left"></a>
                                <a href="product.html">
                                    <span class="tt-img"><img src="images/product/product-17.jpg" alt=""></span>
                                    <span class="tt-img-roll-over"><img src="images/product/product-17-01.jpg" alt=""></span>
                                </a>
                            </div>
                            <div class="tt-description">
                                <div class="tt-row">
                                    <ul class="tt-add-info">
                                        <li><a href="#">T-SHIRTS</a></li>
                                    </ul>
                                    <div class="tt-rating">
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star-half"></i>
                                        <i class="icon-star-empty"></i>
                                    </div>
                                </div>
                                <h2 class="tt-title"><a href="product.html">Flared Shift Dress</a></h2>
                                <div class="tt-price">
                                    $8
                                </div>
                                <div class="tt-product-inside-hover">
                                    <div class="tt-row-btn">
                                        <a href="#" class="tt-btn-addtocart thumbprod-button-bg" data-toggle="modal" data-target="#modalAddToCartProduct">ADD TO CART</a>
                                    </div>
                                    <div class="tt-row-btn">
                                        <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"></a>
                                        <a href="#" class="tt-btn-wishlist"></a>
                                        <a href="#" class="tt-btn-compare"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-2 col-md-4 col-lg-3">
                        <div class="tt-product thumbprod-center">
                            <div class="tt-image-box">
                                <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"	data-tooltip="Quick View" data-tposition="left"></a>
                                <a href="#" class="tt-btn-wishlist" data-tooltip="Add to Wishlist" data-tposition="left"></a>
                                <a href="#" class="tt-btn-compare" data-tooltip="Add to Compare" data-tposition="left"></a>
                                <a href="product.html">
                                    <span class="tt-img"><img src="images/product/product-18.jpg" alt=""></span>
                                    <span class="tt-img-roll-over"><img src="images/product/product-18-02.jpg" alt=""></span>
                                </a>
                            </div>
                            <div class="tt-description">
                                <div class="tt-row">
                                    <ul class="tt-add-info">
                                        <li><a href="#">T-SHIRTS</a></li>
                                    </ul>
                                </div>
                                <h2 class="tt-title"><a href="product.html">Flared Shift Dress</a></h2>
                                <div class="tt-price">
                                    $46
                                </div>
                                <div class="tt-option-block">
                                    <ul class="tt-options-swatch">
                                        <li><a class="options-color tt-color-bg-01" href="#"></a></li>
                                        <li><a class="options-color tt-color-bg-02" href="#"></a></li>
                                    </ul>
                                </div>
                                <div class="tt-product-inside-hover">
                                    <div class="tt-row-btn">
                                        <a href="#" class="tt-btn-addtocart thumbprod-button-bg" data-toggle="modal" data-target="#modalAddToCartProduct">ADD TO CART</a>
                                    </div>
                                    <div class="tt-row-btn">
                                        <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"></a>
                                        <a href="#" class="tt-btn-wishlist"></a>
                                        <a href="#" class="tt-btn-compare"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-2 col-md-4 col-lg-3">
                        <div class="tt-product thumbprod-center">
                            <div class="tt-image-box">
                                <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"	data-tooltip="Quick View" data-tposition="left"></a>
                                <a href="#" class="tt-btn-wishlist" data-tooltip="Add to Wishlist" data-tposition="left"></a>
                                <a href="#" class="tt-btn-compare" data-tooltip="Add to Compare" data-tposition="left"></a>
                                <a href="product.html">
                                    <span class="tt-img"><img src="images/product/product-19.jpg" alt=""></span>
                                    <span class="tt-img-roll-over"><img src="images/product/product-19-02.jpg" alt=""></span>
                                </a>
                            </div>
                            <div class="tt-description">
                                <div class="tt-row">
                                    <ul class="tt-add-info">
                                        <li><a href="#">T-SHIRTS</a></li>
                                    </ul>
                                    <div class="tt-rating">
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                    </div>
                                </div>
                                <h2 class="tt-title"><a href="product.html">Flared Shift Dress</a></h2>
                                <div class="tt-price">
                                    $35
                                </div>
                                <div class="tt-product-inside-hover">
                                    <div class="tt-row-btn">
                                        <a href="#" class="tt-btn-addtocart thumbprod-button-bg" data-toggle="modal" data-target="#modalAddToCartProduct">ADD TO CART</a>
                                    </div>
                                    <div class="tt-row-btn">
                                        <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"></a>
                                        <a href="#" class="tt-btn-wishlist"></a>
                                        <a href="#" class="tt-btn-compare"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-2 col-md-4 col-lg-3">
                        <div class="tt-product thumbprod-center">
                            <div class="tt-image-box">
                                <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"	data-tooltip="Quick View" data-tposition="left"></a>
                                <a href="#" class="tt-btn-wishlist" data-tooltip="Add to Wishlist" data-tposition="left"></a>
                                <a href="#" class="tt-btn-compare" data-tooltip="Add to Compare" data-tposition="left"></a>
                                <a href="product.html">
                                    <span class="tt-img"><img src="images/product/product-14.jpg" alt=""></span>
                                    <span class="tt-img-roll-over"><img src="images/product/product-14-02.jpg" alt=""></span>
                                </a>
                            </div>
                            <div class="tt-description">
                                <div class="tt-row">
                                    <ul class="tt-add-info">
                                        <li><a href="#">T-SHIRTS</a></li>
                                    </ul>
                                </div>
                                <h2 class="tt-title"><a href="product.html">Flared Shift Dress</a></h2>
                                <div class="tt-price">
                                    $12
                                </div>
                                <div class="tt-product-inside-hover">
                                    <div class="tt-row-btn">
                                        <a href="#" class="tt-btn-addtocart thumbprod-button-bg" data-toggle="modal" data-target="#modalAddToCartProduct">ADD TO CART</a>
                                    </div>
                                    <div class="tt-row-btn">
                                        <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"></a>
                                        <a href="#" class="tt-btn-wishlist"></a>
                                        <a href="#" class="tt-btn-compare"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="tt-footer-default tt-color-scheme-02">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-9">
                        <div class="tt-newsletter-layout-01">
                            <div class="tt-newsletter">
                                <div class="tt-mobile-collapse">
                                    <h4 class="tt-collapse-title">
                                        BE IN TOUCH WITH US:
                                    </h4>
                                    <div class="tt-collapse-content">
                                        <form id="newsletterform" class="form-inline form-default" method="post" novalidate="novalidate" action="#">
                                            <div class="form-group">
                                                <input type="text" name="email" class="form-control" placeholder="Enter your e-mail">
                                                <button type="submit" class="btn">JOIN US</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-auto">
                        <ul class="tt-social-icon">
                            <li><a class="icon-g-64" target="_blank" href="http://www.facebook.com/"></a></li>
                            <li><a class="icon-h-58" target="_blank" href="http://www.facebook.com/"></a></li>
                            <li><a class="icon-g-66" target="_blank" href="http://www.twitter.com/"></a></li>
                            <li><a class="icon-g-67" target="_blank" href="http://www.google.com/"></a></li>
                            <li><a class="icon-g-70" target="_blank" href="https://instagram.com/"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="tt-footer-col tt-color-scheme-01">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-2 col-xl-3">
                        <div class="tt-mobile-collapse">
                            <h4 class="tt-collapse-title">
                                CATEGORIES
                            </h4>
                            <div class="tt-collapse-content">
                                <ul class="tt-list">
                                    <li><a href="listing-collection.html">Women</a></li>
                                    <li><a href="listing-collection.html">Men</a></li>
                                    <li><a href="listing-collection.html">Accessories</a></li>
                                    <li><a href="listing-collection.html">Shoes</a></li>
                                    <li><a href="listing-collection.html">New Arrivals</a></li>
                                    <li><a href="listing-collection.html">Clearence</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-2 col-xl-3">
                        <div class="tt-mobile-collapse">
                            <h4 class="tt-collapse-title">
                                MY ACCOUNT
                            </h4>
                            <div class="tt-collapse-content">
                                <ul class="tt-list">
                                    <li><a href="account_order.html">Orders</a></li>
                                    <li><a href="page404.html">Compare</a></li>
                                    <li><a href="page404.html">Wishlist</a></li>
                                    <li><a href="login.html">Log In</a></li>
                                    <li><a href="create-account.html">Register</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="tt-mobile-collapse">
                            <h4 class="tt-collapse-title">
                                ABOUT
                            </h4>
                            <div class="tt-collapse-content">
                                <p>
                                    Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore. Lorem ipsum dolor sit amet conse ctetur adipisicing elit, seddo eiusmod tempor incididunt ut labore etdolore.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="tt-newsletter">
                            <div class="tt-mobile-collapse">
                                <h4 class="tt-collapse-title">
                                    CONTACTS
                                </h4>
                                <div class="tt-collapse-content">
                                    <address>
                                        <p><span>Address:</span> 2548 Broaddus Maple Court Avenue, Madisonville KY 4783, United States of America</p>
                                        <p><span>Phone:</span> +777 2345 7885;  +777 2345 7886</p>
                                        <p><span>Hours:</span> 7 Days a week from 10 am to 6 pm</p>
                                        <p><span>E-mail:</span> <a href="mailto:info@mydomain.com">info@mydomain.com</a></p>
                                    </address>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tt-footer-custom">
            <div class="container">
                <div class="tt-row">
                    <div class="tt-col-left">
                        <div class="tt-col-item tt-logo-col">
                            <!-- logo -->
                            <a class="tt-logo tt-logo-alignment" href="index.html">
                                <img  src="images/custom/logo.png" alt="">
                            </a>
                            <!-- /logo -->
                        </div>
                        <div class="tt-col-item">
                            <!-- copyright -->
                            <div class="tt-box-copyright">
                                &copy; Wokiee 2018. All Rights Reserved
                            </div>
                            <!-- /copyright -->
                        </div>
                    </div>
                    <div class="tt-col-right">
                        <div class="tt-col-item">
                            <!-- payment-list -->
                            <ul class="tt-payment-list">
                                <li><a href="page404.html"><span class="icon-Stripe"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span><span class="path11"></span><span class="path12"></span>
			                </span></a></li>
                                <li><a href="page404.html"> <span class="icon-paypal-2">
			                <span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span>
			                </span></a></li>
                                <li><a href="page404.html"><span class="icon-visa">
			                <span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span>
			                </span></a></li>
                                <li><a href="page404.html"><span class="icon-mastercard">
			                <span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span><span class="path11"></span><span class="path12"></span><span class="path13"></span>
			                </span></a></li>
                                <li><a href="page404.html"><span class="icon-discover">
			                <span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span><span class="path11"></span><span class="path12"></span><span class="path13"></span><span class="path14"></span><span class="path15"></span><span class="path16"></span>
			                </span></a></li>
                                <li><a href="page404.html"><span class="icon-american-express">
			                <span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span><span class="path11"></span>
			                </span></a></li>
                            </ul>
                            <!-- /payment-list -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <a href="#" class="tt-back-to-top">BACK TO TOP</a>
    <!-- modal (AddToCartProduct) -->
    <div class="modal  fade"  id="modalAddToCartProduct" tabindex="-1" role="dialog" aria-label="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content ">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="icon icon-clear"></span></button>
                </div>
                <div class="modal-body">
                    <div class="tt-modal-addtocart mobile">
                        <div class="tt-modal-messages">
                            <i class="icon-f-68"></i> Added to cart successfully!
                        </div>
                        <a href="#" class="btn-link btn-close-popup">CONTINUE SHOPPING</a>
                        <a href="shopping_cart_02.html" class="btn-link">VIEW CART</a>
                        <a href="page404.html" class="btn-link">PROCEED TO CHECKOUT</a>
                    </div>
                    <div class="tt-modal-addtocart desctope">
                        <div class="row">
                            <div class="col-12 col-lg-6">
                                <div class="tt-modal-messages">
                                    <i class="icon-f-68"></i> Added to cart successfully!
                                </div>
                                <div class="tt-modal-product">
                                    <div class="tt-img">
                                        <img src="images/loader.svg" data-src="images/product/product-01.jpg" alt="">
                                    </div>
                                    <h2 class="tt-title"><a href="product.html">Flared Shift Dress</a></h2>
                                    <div class="tt-qty">
                                        QTY: <span>1</span>
                                    </div>
                                </div>
                                <div class="tt-product-total">
                                    <div class="tt-total">
                                        TOTAL: <span class="tt-price">$324</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <a href="#" class="tt-cart-total">
                                    There are 1 items in your cart
                                    <div class="tt-total">
                                        TOTAL: <span class="tt-price">$324</span>
                                    </div>
                                </a>
                                <a href="#" class="btn btn-border btn-close-popup">CONTINUE SHOPPING</a>
                                <a href="shopping_cart_02.html" class="btn btn-border">VIEW CART</a>
                                <a href="#" class="btn">PROCEED TO CHECKOUT</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- modal (quickViewModal) -->
    <div class="modal  fade"  id="ModalquickView" tabindex="-1" role="dialog" aria-label="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content ">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="icon icon-clear"></span></button>
                </div>
                <div class="modal-body">
                    <div class="tt-modal-quickview desctope">
                        <div class="row">
                            <div class="col-12 col-md-5 col-lg-6">
                                <div class="tt-mobile-product-slider arrow-location-center">
                                    <div><img src="images/loader.svg" data-src="images/product/product-01.jpg" alt=""></div>
                                    <div><img src="images/loader.svg" data-src="images/product/product-01-02.jpg" alt=""></div>
                                    <div><img src="images/loader.svg" data-src="images/product/product-01-03.jpg" alt=""></div>
                                    <div><img src="images/loader.svg" data-src="images/product/product-01-04.jpg" alt=""></div>
                                    <div>
                                        <div class="tt-video-block">
                                            <a href="#" class="link-video"></a>
                                            <video class="movie" src="video/video.mp4" poster="video/video_img.jpg"></video>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-7 col-lg-6">
                                <div class="tt-product-single-info">
                                    <div class="tt-add-info">
                                        <ul>
                                            <li><span>SKU:</span> 001</li>
                                            <li><span>Availability:</span> 40 in Stock</li>
                                        </ul>
                                    </div>
                                    <h2 class="tt-title">Cotton Blend Fleece Hoodie</h2>
                                    <div class="tt-price">
                                        <span class="new-price">$29</span>
                                        <span class="old-price"></span>
                                    </div>
                                    <div class="tt-review">
                                        <div class="tt-rating">
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                            <i class="icon-star-half"></i>
                                            <i class="icon-star-empty"></i>
                                        </div>
                                        <a href="#">(1 Customer Review)</a>
                                    </div>
                                    <div class="tt-wrapper">
                                        Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                                    </div>
                                    <div class="tt-swatches-container">
                                        <div class="tt-wrapper">
                                            <div class="tt-title-options">SIZE</div>
                                            <form class="form-default">
                                                <div class="form-group">
                                                    <select class="form-control">
                                                        <option>21</option>
                                                        <option>25</option>
                                                        <option>36</option>
                                                    </select>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="tt-wrapper">
                                            <div class="tt-title-options">COLOR</div>
                                            <form class="form-default">
                                                <div class="form-group">
                                                    <select class="form-control">
                                                        <option>Red</option>
                                                        <option>Green</option>
                                                        <option>Brown</option>
                                                    </select>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="tt-wrapper">
                                            <div class="tt-title-options">TEXTURE:</div>
                                            <ul class="tt-options-swatch options-large">
                                                <li><a class="options-color" href="#">
												<span class="swatch-img">
													<img src="images/loader.svg" data-src="images/custom/texture-img-01.jpg" alt="">
												</span>
                                                        <span class="swatch-label color-black"></span>
                                                    </a></li>
                                                <li class="active"><a class="options-color" href="#">
												<span class="swatch-img">
													<img src="images/loader.svg" data-src="images/custom/texture-img-02.jpg" alt="">
												</span>
                                                        <span class="swatch-label color-black"></span>
                                                    </a></li>
                                                <li><a class="options-color" href="#">
												<span class="swatch-img">
													<img src="images/loader.svg" data-src="images/custom/texture-img-03.jpg" alt="">
												</span>
                                                        <span class="swatch-label color-black"></span>
                                                    </a></li>
                                                <li><a class="options-color" href="#">
												<span class="swatch-img">
													<img src="images/loader.svg" data-src="images/custom/texture-img-04.jpg" alt="">
												</span>
                                                        <span class="swatch-label color-black"></span>
                                                    </a></li>
                                                <li><a class="options-color" href="#">
												<span class="swatch-img">
													<img src="images/loader.svg" data-src="images/custom/texture-img-05.jpg" alt="">
												</span>
                                                        <span class="swatch-label color-black"></span>
                                                    </a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="tt-wrapper">
                                        <div class="tt-row-custom-01">
                                            <div class="col-item">
                                                <div class="tt-input-counter style-01">
                                                    <span class="minus-btn"></span>
                                                    <input type="text" value="1" size="5">
                                                    <span class="plus-btn"></span>
                                                </div>
                                            </div>
                                            <div class="col-item">
                                                <a href="#" class="btn btn-lg"><i class="icon-f-39"></i>ADD TO CART</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- modal (ModalSubsribeGood) -->
    <div class="modal  fade"  id="ModalSubsribeGood" tabindex="-1" role="dialog" aria-label="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xs">
            <div class="modal-content ">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="icon icon-clear"></span></button>
                </div>
                <div class="modal-body">
                    <div class="tt-modal-subsribe-good">
                        <i class="icon-f-68"></i> You have successfully signed!
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- modal (size guid) -->
    <div class="modal  fade"  id="modalProductInfo" tabindex="-1" role="dialog" aria-label="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content ">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="icon icon-clear"></span></button>
                </div>
                <div class="modal-body">
                    <div class="tt-layout-product-info">
                        <h6 class="tt-title">SIZE GUIDE</h6>
                        This is an approximate conversion table to help you find your size.
                        <div class="tt-table-responsive-md">
                            <table class="tt-table-modal-info">
                                <thead>
                                <tr>
                                    <th>Italian</th>
                                    <th>Spanish</th>
                                    <th>German</th>
                                    <th>UK</th>
                                    <th>US</th>
                                    <th>Japanese</th>
                                    <th>Chinese</th>
                                    <th>Russian</th>
                                    <th>Korean</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>34</td>
                                    <td>30</td>
                                    <td>28</td>
                                    <td>4</td>
                                    <td>00</td>
                                    <td>3</td>
                                    <td>155/75A</td>
                                    <td>36</td>
                                    <td>44</td>
                                </tr>
                                <tr>
                                    <td>36</td>
                                    <td>32</td>
                                    <td>30</td>
                                    <td>6</td>
                                    <td>0</td>
                                    <td>5</td>
                                    <td>155/80A</td>
                                    <td>38</td>
                                    <td>44</td>
                                </tr>
                                <tr>
                                    <td>38</td>
                                    <td>34</td>
                                    <td>32</td>
                                    <td>8</td>
                                    <td>2</td>
                                    <td>7</td>
                                    <td>160/84A</td>
                                    <td>40</td>
                                    <td>55</td>
                                </tr>
                                <tr>
                                    <td>40</td>
                                    <td>36</td>
                                    <td>34</td>
                                    <td>10</td>
                                    <td>4</td>
                                    <td>9</td>
                                    <td>165/88A</td>
                                    <td>42</td>
                                    <td>55</td>
                                </tr>
                                <tr>
                                    <td>42</td>
                                    <td>38</td>
                                    <td>36</td>
                                    <td>12</td>
                                    <td>6</td>
                                    <td>11</td>
                                    <td>170/92A</td>
                                    <td>44</td>
                                    <td>66</td>
                                </tr>
                                <tr>
                                    <td>44</td>
                                    <td>40</td>
                                    <td>38</td>
                                    <td>14</td>
                                    <td>8</td>
                                    <td>13</td>
                                    <td>175/96A</td>
                                    <td>46</td>
                                    <td>66</td>
                                </tr>
                                <tr>
                                    <td>46</td>
                                    <td>42</td>
                                    <td>40</td>
                                    <td>16</td>
                                    <td>10</td>
                                    <td>15</td>
                                    <td>170/98A</td>
                                    <td>48</td>
                                    <td>77</td>
                                </tr>
                                <tr>
                                    <td>48</td>
                                    <td>44</td>
                                    <td>42</td>
                                    <td>18</td>
                                    <td>12</td>
                                    <td>17</td>
                                    <td>170/100B</td>
                                    <td>50</td>
                                    <td>77</td>
                                </tr>
                                <tr>
                                    <td>50</td>
                                    <td>46</td>
                                    <td>44</td>
                                    <td>20</td>
                                    <td>14</td>
                                    <td>19</td>
                                    <td>175/100B</td>
                                    <td>52</td>
                                    <td>88</td>
                                </tr>
                                <tr>
                                    <td>52</td>
                                    <td>48</td>
                                    <td>46</td>
                                    <td>22</td>
                                    <td>16</td>
                                    <td>21</td>
                                    <td>180/104B</td>
                                    <td>54</td>
                                    <td>88</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- modal (size guid) -->
    <div class="modal  fade"  id="modalProductInfo-02" tabindex="-1" role="dialog" aria-label="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content ">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="icon icon-clear"></span></button>
                </div>
                <div class="modal-body">
                    <div class="tt-layout-product-info-02">
                        <h6 class="tt-title">SHIPPING</h6>
                        <ul>
                            <li>Complimentary ground shipping within 1 to 7 business days</li>
                            <li>In-store collection available within 1 to 7 business days</li>
                            <li>Next-day and Express delivery options also available</li>
                            <li>Purchases are delivered in an orange box tied with a Bolduc ribbon, with the exception of certain items</li>
                            <li>See the delivery FAQs for details on shipping methods, costs and delivery times</li>
                        </ul>
                        <h6 class="tt-title">RETURNS AND EXCHANGES</h6>
                        <ul>
                            <li>Easy and complimentary, within 14 days</li>
                            <li>See conditions and procedure in our return FAQs</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="<?=_URL_STYLE?>/external/jquery/jquery.min.js"></script>
    <script src="<?=_URL_STYLE?>/external/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?=_URL_STYLE?>/external/elevatezoom/jquery.elevatezoom.js"></script>
    <script src="<?=_URL_STYLE?>/external/slick/slick.min.js"></script>
    <script src="<?=_URL_STYLE?>/external/panelmenu/panelmenu.js"></script>
    <script src="<?=_URL_STYLE?>/external/countdown/jquery.plugin.min.js"></script>
    <script src="<?=_URL_STYLE?>/external/countdown/jquery.countdown.min.js"></script>
    <script src="<?=_URL_STYLE?>/external/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="<?=_URL_STYLE?>/external/lazyLoad/lazyload.min.js"></script>
    <script src="<?=_URL_STYLE?>/js/main.js"></script>
    <!-- form validation and sending to mail -->
    <script src="<?=_URL_STYLE?>/external/form/jquery.form.js"></script>
    <script src="<?=_URL_STYLE?>/external/form/jquery.validate.min.js"></script>
    <script src="<?=_URL_STYLE?>/external/form/jquery.form-init.js"></script>
    </body>
    </html>
<?php
//require_once 'footer.php';