<?php
/**
 * Created by PhpStorm.
 * User: DONG
 * Date: 2018-12-24
 * Time: 16:03
 */
require_once '../../includes/core.php';
$header['title'] = 'Trang chủ';
require_once 'header.php';
?>
<div id="tt-pageContent">
    <div class="container-indent0">
        <div class="container">
            <div class="row flex-sm-row-reverse tt-layout-promo-box">
                <div class="col-sm-12 col-md-6">
                    <div class="row">
                        <div class="col-sm-6">
                            <a href="listing-left-column.html" class="tt-promo-box tt-one-child hover-type-2">
                                <img src="<?=_URL_STYLE?>/images/loader.svg" data-src="<?=_URL_STYLE?>/images/promo/index04-promo-img-02.jpg" alt="">
                                <div class="tt-description">
                                    <div class="tt-description-wrapper">
                                        <div class="tt-background"></div>
                                        <div class="tt-title-small">WOMEN</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-6">
                            <a href="listing-left-column.html" class="tt-promo-box tt-one-child hover-type-2">
                                <img src="<?=_URL_STYLE?>/images/loader.svg" data-src="<?=_URL_STYLE?>/images/promo/index04-promo-img-03.jpg" alt="">
                                <div class="tt-description">
                                    <div class="tt-description-wrapper">
                                        <div class="tt-background"></div>
                                        <div class="tt-title-small">MEN</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-12">
                            <a href="listing-left-column.html" class="tt-promo-box tt-one-child">
                                <img src="<?=_URL_STYLE?>/images/loader.svg" data-src="<?=_URL_STYLE?>/images/promo/index04-promo-img-04.jpg" alt="">
                                <div class="tt-description">
                                    <div class="tt-description-wrapper">
                                        <div class="tt-background"></div>
                                        <div class="tt-title-small">READY TO</div>
                                        <div class="tt-title-large">USE UNIQUE DEMOS</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <a href="listing-left-column.html" class="tt-promo-box">
                        <img src="<?=_URL_STYLE?>/images/loader.svg" data-src="<?=_URL_STYLE?>/images/promo/index04-promo-img-01.jpg" alt="">
                        <div class="tt-description">
                            <div class="tt-description-wrapper">
                                <div class="tt-background"></div>
                                <div class="tt-title-small">MULTI-PURPOSE</div>
                                <div class="tt-title-large">SHOPIFY THEME</div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-indent1">
        <div class="container container-fluid-custom-mobile-padding">
            <div class="tt-block-title text-left">
                <h1 class="tt-title">WOMEN’S</h1>
            </div>
            <div class="tt-tab-wrapper">
                <ul class="nav nav-tabs tt-tabs-default" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link show active" data-toggle="tab" href="#tt-tab-01" role="tab">NEW ARRIVALS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#tt-tab-02" role="tab">SPECIALS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#tt-tab-03" role="tab">BESTSELLERS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#tt-tab-04" role="tab">MOST VIEWED</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#tt-tab-05" role="tab">FEATURED PRODUCTS</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active fade" id="tt-tab-01" role="tabpanel">
                        <div class="tt-carousel-products row arrow-location-tab tt-alignment-img tt-collection-listing slick-animated-show-js">
                            <div class="col-2 col-md-4 col-lg-3">
                                <a href="#" class="tt-collection-item">
                                    <div class="tt-image-box"><img src="<?=_URL_STYLE?>/images/product/product-14.jpg" alt=""></div>
                                    <div class="tt-description">
                                        <h2 class="tt-title">Shirts &amp; Tops</h2>
                                        <ul class="tt-add-info">
                                            <li>45 PRODUCTS</li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                            <div class="col-2 col-md-4 col-lg-3">
                                <a href="#" class="tt-collection-item">
                                    <div class="tt-image-box"><img src="<?=_URL_STYLE?>/images/product/product-46.jpg" alt=""></div>
                                    <div class="tt-description">
                                        <h2 class="tt-title">Jackets &amp; Outerwear</h2>
                                        <ul class="tt-add-info">
                                            <li>35 PRODUCTS</li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                            <div class="col-2 col-md-4 col-lg-3">
                                <a href="#" class="tt-collection-item">
                                    <div class="tt-image-box"><img src="<?=_URL_STYLE?>/images/product/product-45.jpg" alt=""></div>
                                    <div class="tt-description">
                                        <h2 class="tt-title">Sweaters</h2>
                                        <ul class="tt-add-info">
                                            <li>28 PRODUCTS</li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                            <div class="col-2 col-md-4 col-lg-3">
                                <a href="#" class="tt-collection-item">
                                    <div class="tt-image-box"><img src="<?=_URL_STYLE?>/images/product/product-23.jpg" alt=""></div>
                                    <div class="tt-description">
                                        <h2 class="tt-title">Pants</h2>
                                        <ul class="tt-add-info">
                                            <li>22 PRODUCTS</li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                            <div class="col-2 col-md-4 col-lg-3">
                                <a href="#" class="tt-collection-item">
                                    <div class="tt-image-box"><img src="<?=_URL_STYLE?>/images/product/product-14.jpg" alt=""></div>
                                    <div class="tt-description">
                                        <h2 class="tt-title">Sweaters</h2>
                                        <ul class="tt-add-info">
                                            <li>26 PRODUCTS</li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tt-tab-02" role="tabpanel">
                        <div class="tt-carousel-products row arrow-location-tab tt-alignment-img tt-collection-listing slick-animated-show-js">
                            <div class="col-2 col-md-4 col-lg-3">
                                <a href="#" class="tt-collection-item">
                                    <div class="tt-image-box"><img src="<?=_URL_STYLE?>/images/product/product-26.jpg" alt=""></div>
                                    <div class="tt-description">
                                        <h2 class="tt-title">Pants</h2>
                                        <ul class="tt-add-info">
                                            <li>22 PRODUCTS</li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                            <div class="col-2 col-md-4 col-lg-3">
                                <a href="#" class="tt-collection-item">
                                    <div class="tt-image-box"><img src="<?=_URL_STYLE?>/images/product/product-14.jpg" alt=""></div>
                                    <div class="tt-description">
                                        <h2 class="tt-title">Sweaters</h2>
                                        <ul class="tt-add-info">
                                            <li>26 PRODUCTS</li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                            <div class="col-2 col-md-4 col-lg-3">
                                <a href="#" class="tt-collection-item">
                                    <div class="tt-image-box"><img src="<?=_URL_STYLE?>/images/product/product-23.jpg" alt=""></div>
                                    <div class="tt-description">
                                        <h2 class="tt-title">Shirts &amp; Tops</h2>
                                        <ul class="tt-add-info">
                                            <li>45 PRODUCTS</li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                            <div class="col-2 col-md-4 col-lg-3">
                                <a href="#" class="tt-collection-item">
                                    <div class="tt-image-box"><img src="<?=_URL_STYLE?>/images/product/product-45.jpg" alt=""></div>
                                    <div class="tt-description">
                                        <h2 class="tt-title">Jackets &amp; Outerwear</h2>
                                        <ul class="tt-add-info">
                                            <li>35 PRODUCTS</li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                            <div class="col-2 col-md-4 col-lg-3">
                                <a href="#" class="tt-collection-item">
                                    <div class="tt-image-box"><img src="<?=_URL_STYLE?>/images/product/product-11.jpg" alt=""></div>
                                    <div class="tt-description">
                                        <h2 class="tt-title">Sweaters</h2>
                                        <ul class="tt-add-info">
                                            <li>28 PRODUCTS</li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tt-tab-03" role="tabpanel">
                        <div class="tt-carousel-products row arrow-location-tab tt-alignment-img tt-collection-listing slick-animated-show-js">
                            <div class="col-2 col-md-4 col-lg-3">
                                <a href="#" class="tt-collection-item">
                                    <div class="tt-image-box"><img src="<?=_URL_STYLE?>/images/product/product-10.jpg" alt=""></div>
                                    <div class="tt-description">
                                        <h2 class="tt-title">Jackets &amp; Outerwear</h2>
                                        <ul class="tt-add-info">
                                            <li>35 PRODUCTS</li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                            <div class="col-2 col-md-4 col-lg-3">
                                <a href="#" class="tt-collection-item">
                                    <div class="tt-image-box"><img src="<?=_URL_STYLE?>/images/product/product-11.jpg" alt=""></div>
                                    <div class="tt-description">
                                        <h2 class="tt-title">Sweaters</h2>
                                        <ul class="tt-add-info">
                                            <li>28 PRODUCTS</li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                            <div class="col-2 col-md-4 col-lg-3">
                                <a href="#" class="tt-collection-item">
                                    <div class="tt-image-box"><img src="<?=_URL_STYLE?>/images/product/product-23.jpg" alt=""></div>
                                    <div class="tt-description">
                                        <h2 class="tt-title">Pants</h2>
                                        <ul class="tt-add-info">
                                            <li>22 PRODUCTS</li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                            <div class="col-2 col-md-4 col-lg-3">
                                <a href="#" class="tt-collection-item">
                                    <div class="tt-image-box"><img src="<?=_URL_STYLE?>/images/product/product-14.jpg" alt=""></div>
                                    <div class="tt-description">
                                        <h2 class="tt-title">Sweaters</h2>
                                        <ul class="tt-add-info">
                                            <li>26 PRODUCTS</li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                            <div class="col-2 col-md-4 col-lg-3">
                                <a href="#" class="tt-collection-item">
                                    <div class="tt-image-box"><img src="<?=_URL_STYLE?>/images/product/product-16.jpg" alt=""></div>
                                    <div class="tt-description">
                                        <h2 class="tt-title">Shirts &amp; Tops</h2>
                                        <ul class="tt-add-info">
                                            <li>45 PRODUCTS</li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tt-tab-04" role="tabpanel">
                        <div class="tt-carousel-products row arrow-location-tab tt-alignment-img tt-collection-listing slick-animated-show-js">
                            <div class="col-2 col-md-4 col-lg-3">
                                <a href="#" class="tt-collection-item">
                                    <div class="tt-image-box"><img src="<?=_URL_STYLE?>/images/product/product-14.jpg" alt=""></div>
                                    <div class="tt-description">
                                        <h2 class="tt-title">Shirts &amp; Tops</h2>
                                        <ul class="tt-add-info">
                                            <li>45 PRODUCTS</li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                            <div class="col-2 col-md-4 col-lg-3">
                                <a href="#" class="tt-collection-item">
                                    <div class="tt-image-box"><img src="<?=_URL_STYLE?>/images/product/product-10.jpg" alt=""></div>
                                    <div class="tt-description">
                                        <h2 class="tt-title">Jackets &amp; Outerwear</h2>
                                        <ul class="tt-add-info">
                                            <li>35 PRODUCTS</li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                            <div class="col-2 col-md-4 col-lg-3">
                                <a href="#" class="tt-collection-item">
                                    <div class="tt-image-box"><img src="<?=_URL_STYLE?>/images/product/product-11.jpg" alt=""></div>
                                    <div class="tt-description">
                                        <h2 class="tt-title">Sweaters</h2>
                                        <ul class="tt-add-info">
                                            <li>28 PRODUCTS</li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                            <div class="col-2 col-md-4 col-lg-3">
                                <a href="#" class="tt-collection-item">
                                    <div class="tt-image-box"><img src="<?=_URL_STYLE?>/images/product/product-23.jpg" alt=""></div>
                                    <div class="tt-description">
                                        <h2 class="tt-title">Pants</h2>
                                        <ul class="tt-add-info">
                                            <li>22 PRODUCTS</li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                            <div class="col-2 col-md-4 col-lg-3">
                                <a href="#" class="tt-collection-item">
                                    <div class="tt-image-box"><img src="<?=_URL_STYLE?>/images/product/product-14.jpg" alt=""></div>
                                    <div class="tt-description">
                                        <h2 class="tt-title">Sweaters</h2>
                                        <ul class="tt-add-info">
                                            <li>26 PRODUCTS</li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tt-tab-05" role="tabpanel">
                        <div class="tt-carousel-products row arrow-location-tab tt-alignment-img tt-collection-listing slick-animated-show-js">
                            <div class="col-2 col-md-4 col-lg-3">
                                <a href="#" class="tt-collection-item">
                                    <div class="tt-image-box"><img src="<?=_URL_STYLE?>/images/product/product-11.jpg" alt=""></div>
                                    <div class="tt-description">
                                        <h2 class="tt-title">Sweaters</h2>
                                        <ul class="tt-add-info">
                                            <li>28 PRODUCTS</li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                            <div class="col-2 col-md-4 col-lg-3">
                                <a href="#" class="tt-collection-item">
                                    <div class="tt-image-box"><img src="<?=_URL_STYLE?>/images/product/product-23.jpg" alt=""></div>
                                    <div class="tt-description">
                                        <h2 class="tt-title">Pants</h2>
                                        <ul class="tt-add-info">
                                            <li>22 PRODUCTS</li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                            <div class="col-2 col-md-4 col-lg-3">
                                <a href="#" class="tt-collection-item">
                                    <div class="tt-image-box"><img src="<?=_URL_STYLE?>/images/product/product-27.jpg" alt=""></div>
                                    <div class="tt-description">
                                        <h2 class="tt-title">Shirts &amp; Tops</h2>
                                        <ul class="tt-add-info">
                                            <li>45 PRODUCTS</li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                            <div class="col-2 col-md-4 col-lg-3">
                                <a href="#" class="tt-collection-item">
                                    <div class="tt-image-box"><img src="<?=_URL_STYLE?>/images/product/product-10.jpg" alt=""></div>
                                    <div class="tt-description">
                                        <h2 class="tt-title">Jackets &amp; Outerwear</h2>
                                        <ul class="tt-add-info">
                                            <li>35 PRODUCTS</li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                            <div class="col-2 col-md-4 col-lg-3">
                                <a href="#" class="tt-collection-item">
                                    <div class="tt-image-box"><img src="<?=_URL_STYLE?>/images/product/product-14.jpg" alt=""></div>
                                    <div class="tt-description">
                                        <h2 class="tt-title">Sweaters</h2>
                                        <ul class="tt-add-info">
                                            <li>26 PRODUCTS</li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-indent1">
        <div class="container container-fluid-custom-mobile-padding">
            <div class="tt-block-title text-left">
                <h2 class="tt-title">GIÀY</h2>
            </div>
            <div class="tt-tab-wrapper">
                <ul class="nav nav-tabs tt-tabs-default" role="tablist">
                    <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#tt-tab01-01">Giày Nam</a></li>
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tt-tab01-02">Giày Nữ</a></li>
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tt-tab01-03">BESTSELLERS</a></li>
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tt-tab01-04">MOST VIEWED</a></li>
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tt-tab01-05">FEATURED PRODUCTS</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="tt-tab01-01">
                        <div class="tt-carousel-products row arrow-location-tab tt-alignment-img tt-layout-product-item slick-animated-show-js">
                            <?php
                            $db->from(_TABLE_PRODUCT)->where(array('product_gender' => 1, 'product_status <>' => 0));
                            $db->order_by('product_id', 'DESC');
                            $db->limit(10);
                            foreach ($db->fetch() as $product_list) {
                                $db->select('media_source')->from(_TABLE_MEDIA)->where(array('media_type' => 'images_product', 'media_store' => 'local', 'media_parent' => $product_list['product_id']));
                                $db->limit(1);
                                $images_1 = $db->fetch_first();
                                $db->select('media_source')->from(_TABLE_MEDIA)->where(array('media_type' => 'images_product', 'media_store' => 'local', 'media_parent' => $product_list['product_id']));
                                $db->limit(2);
                                $images_2 = $db->fetch_first();
                                ?>
                                <div class="col-2 col-md-4 col-lg-3">
                                    <div class="tt-product thumbprod-center">
                                        <div class="tt-image-box">
                                            <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView" data-tooltip="Quick View" data-tposition="left"></a>
                                            <a href="#" class="tt-btn-wishlist" data-tooltip="Add to Wishlist" data-tposition="left"></a>
                                            <a href="#" class="tt-btn-compare" data-tooltip="Add to Compare" data-tposition="left"></a>
                                            <a href="<?=$function->getUrlProduct($product_list['product_id'])?>">
                                                <span class="tt-img"><img src="<?= _URL_HOME.'/'.$images_1['media_source']?>" alt=""></span>
                                                <span class="tt-img-roll-over"><img src="<?= _URL_HOME.'/'.$images_2['media_source']?>" alt=""></span>
                                                <?=$product_list['product_sale'] > 0 ? '<span class="tt-label-location"><span class="tt-label-new">Giảm giá '. $product_list['product_sale'] .'%</span></span>' : ''?>
                                            </a>
                                        </div>
                                        <div class="tt-description">
                                            <div class="tt-row"><ul class="tt-add-info"><li><a href="#">T-SHIRTS</a></li></ul></div>
                                            <h2 class="tt-title"><a href="<?=$function->getUrlProduct($product_list['product_id'])?>"><?=$product_list['product_name']?></a></h2>
                                            <div class="tt-price"><?=$function->convertNumberMoney($product_list['product_price_vn'])?>₫</div>
                                            <div class="tt-product-inside-hover">
                                                <div class="tt-row-btn">
                                                    <a href="#" class="tt-btn-addtocart thumbprod-button-bg"
                                                       data-toggle="modal" data-target="#modalAddToCartProduct">THÊM VÀO GIỎ HÀNG</a>
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
                                <?php
                            }
                            ?>
                        </div>
                    </div>
                    <div class="tab-pane" id="tt-tab01-02">
                        <div class="tt-carousel-products row arrow-location-tab tt-alignment-img tt-layout-product-item slick-animated-show-js">
                            <div class="col-2 col-md-4 col-lg-3">
                                <div class="tt-product thumbprod-center">
                                    <div class="tt-image-box">
                                        <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"	data-tooltip="Quick View" data-tposition="left"></a>
                                        <a href="#" class="tt-btn-wishlist" data-tooltip="Add to Wishlist" data-tposition="left"></a>
                                        <a href="#" class="tt-btn-compare" data-tooltip="Add to Compare" data-tposition="left"></a>
                                        <a href="product.html">
                                            <span class="tt-img"><img src="<?=_URL_STYLE?>/images/product/product-24.jpg" alt=""></span>
                                            <span class="tt-img-roll-over"><img src="<?=_URL_STYLE?>/images/product/product-24-01.jpg" alt=""></span>
                                            <span class="tt-label-location">
												<span class="tt-label-sale">Sale 15%</span>
											</span>
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
                                            <span class="tt-img"><img src="<?=_URL_STYLE?>/images/product/product-17.jpg" alt=""></span>
                                            <span class="tt-img-roll-over"><img src="<?=_URL_STYLE?>/images/product/product-17-01.jpg" alt=""></span>
                                            <span class="tt-label-location">
												<span class="tt-label-new">New</span>
											</span>
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
                                            <span class="tt-img"><img src="<?=_URL_STYLE?>/images/product/product-20.jpg" alt=""></span>
                                            <span class="tt-img-roll-over"><img src="<?=_URL_STYLE?>/images/product/product-20-01.jpg" alt=""></span>
                                            <span class="tt-label-location">
												<span class="tt-label-new">New</span>
											</span>
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
                                            <span class="tt-img"><img src="<?=_URL_STYLE?>/images/product/product-02.jpg" alt=""></span>
                                            <span class="tt-img-roll-over"><img src="<?=_URL_STYLE?>/images/product/product-02-02.jpg" alt=""></span>
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
                                            <span class="tt-img"><img src="<?=_URL_STYLE?>/images/product/product-22.jpg" alt=""></span>
                                            <span class="tt-img-roll-over"><img src="<?=_URL_STYLE?>/images/product/product-22-02.jpg" alt=""></span>
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
                    <div class="tab-pane" id="tt-tab01-03">
                        <div class="tt-carousel-products row arrow-location-tab tt-alignment-img tt-layout-product-item slick-animated-show-js">
                            <div class="col-2 col-md-4 col-lg-3">
                                <div class="tt-product thumbprod-center">
                                    <div class="tt-image-box">
                                        <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"	data-tooltip="Quick View" data-tposition="left"></a>
                                        <a href="#" class="tt-btn-wishlist" data-tooltip="Add to Wishlist" data-tposition="left"></a>
                                        <a href="#" class="tt-btn-compare" data-tooltip="Add to Compare" data-tposition="left"></a>
                                        <a href="product.html">
                                            <span class="tt-img"><img src="<?=_URL_STYLE?>/images/product/product-02.jpg" alt=""></span>
                                            <span class="tt-img-roll-over"><img src="<?=_URL_STYLE?>/images/product/product-02-02.jpg" alt=""></span>
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
                                            <span class="tt-img"><img src="<?=_URL_STYLE?>/images/product/product-22.jpg" alt=""></span>
                                            <span class="tt-img-roll-over"><img src="<?=_URL_STYLE?>/images/product/product-22-02.jpg" alt=""></span>
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
                                            <span class="tt-img"><img src="<?=_URL_STYLE?>/images/product/product-24.jpg" alt=""></span>
                                            <span class="tt-img-roll-over"><img src="<?=_URL_STYLE?>/images/product/product-24-01.jpg" alt=""></span>
                                            <span class="tt-label-location">
												<span class="tt-label-sale">Sale 15%</span>
											</span>
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
                                            <span class="tt-img"><img src="<?=_URL_STYLE?>/images/product/product-17.jpg" alt=""></span>
                                            <span class="tt-img-roll-over"><img src="<?=_URL_STYLE?>/images/product/product-17-01.jpg" alt=""></span>
                                            <span class="tt-label-location">
												<span class="tt-label-new">New</span>
											</span>
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
                                            <span class="tt-img"><img src="<?=_URL_STYLE?>/images/product/product-20.jpg" alt=""></span>
                                            <span class="tt-img-roll-over"><img src="<?=_URL_STYLE?>/images/product/product-20-01.jpg" alt=""></span>
                                            <span class="tt-label-location">
												<span class="tt-label-new">New</span>
											</span>
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
                    <div class="tab-pane" id="tt-tab01-04">
                        <div class="tt-carousel-products row arrow-location-tab tt-alignment-img tt-layout-product-item slick-animated-show-js">
                            <div class="col-2 col-md-4 col-lg-3">
                                <div class="tt-product thumbprod-center">
                                    <div class="tt-image-box">
                                        <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"	data-tooltip="Quick View" data-tposition="left"></a>
                                        <a href="#" class="tt-btn-wishlist" data-tooltip="Add to Wishlist" data-tposition="left"></a>
                                        <a href="#" class="tt-btn-compare" data-tooltip="Add to Compare" data-tposition="left"></a>
                                        <a href="product.html">
                                            <span class="tt-img"><img src="<?=_URL_STYLE?>/images/product/product-22.jpg" alt=""></span>
                                            <span class="tt-img-roll-over"><img src="<?=_URL_STYLE?>/images/product/product-22-02.jpg" alt=""></span>
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
                                            <span class="tt-img"><img src="<?=_URL_STYLE?>/images/product/product-02.jpg" alt=""></span>
                                            <span class="tt-img-roll-over"><img src="<?=_URL_STYLE?>/images/product/product-02-02.jpg" alt=""></span>
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
                                            <span class="tt-img"><img src="<?=_URL_STYLE?>/images/product/product-24.jpg" alt=""></span>
                                            <span class="tt-img-roll-over"><img src="<?=_URL_STYLE?>/images/product/product-24-01.jpg" alt=""></span>
                                            <span class="tt-label-location">
												<span class="tt-label-sale">Sale 15%</span>
											</span>
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
                                            <span class="tt-img"><img src="<?=_URL_STYLE?>/images/product/product-20.jpg" alt=""></span>
                                            <span class="tt-img-roll-over"><img src="<?=_URL_STYLE?>/images/product/product-20-01.jpg" alt=""></span>
                                            <span class="tt-label-location">
												<span class="tt-label-new">New</span>
											</span>
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
                                            <span class="tt-img"><img src="<?=_URL_STYLE?>/images/product/product-17.jpg" alt=""></span>
                                            <span class="tt-img-roll-over"><img src="<?=_URL_STYLE?>/images/product/product-17-01.jpg" alt=""></span>
                                            <span class="tt-label-location">
												<span class="tt-label-new">New</span>
											</span>
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
                    <div class="tab-pane" id="tt-tab01-05">
                        <div class="tt-carousel-products row arrow-location-tab tt-alignment-img tt-layout-product-item slick-animated-show-js">
                            <div class="col-2 col-md-4 col-lg-3">
                                <div class="tt-product thumbprod-center">
                                    <div class="tt-image-box">
                                        <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"	data-tooltip="Quick View" data-tposition="left"></a>
                                        <a href="#" class="tt-btn-wishlist" data-tooltip="Add to Wishlist" data-tposition="left"></a>
                                        <a href="#" class="tt-btn-compare" data-tooltip="Add to Compare" data-tposition="left"></a>
                                        <a href="product.html">
                                            <span class="tt-img"><img src="<?=_URL_STYLE?>/images/product/product-02.jpg" alt=""></span>
                                            <span class="tt-img-roll-over"><img src="<?=_URL_STYLE?>/images/product/product-02-02.jpg" alt=""></span>
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
                                            <span class="tt-img"><img src="<?=_URL_STYLE?>/images/product/product-22.jpg" alt=""></span>
                                            <span class="tt-img-roll-over"><img src="<?=_URL_STYLE?>/images/product/product-22-02.jpg" alt=""></span>
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
                                            <span class="tt-img"><img src="<?=_URL_STYLE?>/images/product/product-24.jpg" alt=""></span>
                                            <span class="tt-img-roll-over"><img src="<?=_URL_STYLE?>/images/product/product-24-01.jpg" alt=""></span>
                                            <span class="tt-label-location">
												<span class="tt-label-sale">Sale 15%</span>
											</span>
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
                                            <span class="tt-img"><img src="<?=_URL_STYLE?>/images/product/product-20.jpg" alt=""></span>
                                            <span class="tt-img-roll-over"><img src="<?=_URL_STYLE?>/images/product/product-20-01.jpg" alt=""></span>
                                            <span class="tt-label-location">
												<span class="tt-label-new">New</span>
											</span>
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
                                            <span class="tt-img"><img src="<?=_URL_STYLE?>/images/product/product-17.jpg" alt=""></span>
                                            <span class="tt-img-roll-over"><img src="<?=_URL_STYLE?>/images/product/product-17-01.jpg" alt=""></span>
                                            <span class="tt-label-location">
												<span class="tt-label-new">New</span>
											</span>
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
        </div>
    </div>
    <div class="container-indent">
        <div class="container">
            <div class="row tt-layout-promo-box">
                <div class="col-md-6">
                    <a href="listing-left-column.html" class="tt-promo-box tt-one-child">
                        <img src="<?=_URL_STYLE?>/images/loader.svg" data-src="<?=_URL_STYLE?>/images/promo/index04-promo-img-05.jpg" alt="">
                        <div class="tt-description">
                            <div class="tt-description-wrapper">
                                <div class="tt-background"></div>
                                <div class="tt-title-small">NEW IN:</div>
                                <div class="tt-title-large">CLOTHING</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6">
                    <a href="listing-left-column.html" class="tt-promo-box tt-one-child">
                        <img src="<?=_URL_STYLE?>/images/loader.svg" data-src="<?=_URL_STYLE?>/images/promo/index04-promo-img-06.jpg" alt="">
                        <div class="tt-description">
                            <div class="tt-description-wrapper">
                                <div class="tt-background"></div>
                                <div class="tt-title-small">CLEARANCE SALES</div>
                                <div class="tt-title-large">GET UP TO <span class="tt-base-color">20% OFF</span></div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-indent">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-4">
                    <h6 class="tt-title-sub">NEW PRODUCTS</h6>
                    <div class="tt-layout-vertical-listing">
                        <div class="tt-item">
                            <div class="tt-layout-vertical">
                                <div class="tt-img">
                                    <a href="listing-collection.html">
                                        <span class="tt-img-default"><img src="<?=_URL_STYLE?>/images/loader.svg" data-src="images/product/product-18.jpg" alt=""></span>
                                        <span class="tt-img-roll-over"><img src="<?=_URL_STYLE?>/images/loader.svg" data-src="images/product/product-18-02.jpg" alt=""></span>
                                    </a>
                                </div>
                                <div class="tt-description">
                                    <ul class="tt-add-info">
                                        <li><a href="#">T-SHIRTS</a></li>
                                    </ul>
                                    <h6 class="tt-title"><a href="#">Flared Shift Dress</a></h6>
                                    <div class="tt-price">
                                        $24
                                    </div>
                                    <div class="tt-option-block">
                                        <ul class="tt-options-swatch">
                                            <li><a class="options-color tt-color-bg-01" href="#"></a></li>
                                            <li><a class="options-color tt-color-bg-02" href="#"></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tt-item">
                            <div class="tt-layout-vertical">
                                <div class="tt-img">
                                    <a href="listing-collection.html">
                                        <span class="tt-img-default"><img src="<?=_URL_STYLE?>/images/loader.svg" data-src="images/product/product-19.jpg" alt=""></span>
                                        <span class="tt-img-roll-over"><img src="<?=_URL_STYLE?>/images/loader.svg" data-src="images/product/product-19-02.jpg" alt=""></span>
                                    </a>
                                </div>
                                <div class="tt-description">
                                    <ul class="tt-add-info">
                                        <li><a href="#">T-SHIRTS</a></li>
                                    </ul>
                                    <h6 class="tt-title"><a href="#">Flared Shift Dress</a></h6>
                                    <div class="tt-price">
                                        $84
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tt-item">
                            <div class="tt-layout-vertical">
                                <div class="tt-img">
                                    <a href="listing-collection.html">
                                        <span class="tt-img-default"><img src="<?=_URL_STYLE?>/images/loader.svg" data-src="images/product/product-20.jpg" alt=""></span>
                                        <span class="tt-img-roll-over"><img src="<?=_URL_STYLE?>/images/loader.svg" data-src="images/product/product-20-01.jpg" alt=""></span>
                                    </a>
                                </div>
                                <div class="tt-description">
                                    <ul class="tt-add-info">
                                        <li><a href="#">T-SHIRTS</a></li>
                                    </ul>
                                    <h6 class="tt-title"><a href="#">Flared Shift Dress</a></h6>
                                    <div class="tt-price">
                                        $78
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="divider visible-xs"></div>
                <div class="col-sm-6 col-md-4">
                    <h6 class="tt-title-sub">SPECIAL PRODUCTS</h6>
                    <div class="tt-layout-vertical-listing">
                        <div class="tt-item">
                            <div class="tt-layout-vertical">
                                <div class="tt-img">
                                    <a href="listing-collection.html">
                                        <span class="tt-img-default"><img src="<?=_URL_STYLE?>/images/loader.svg" data-src="images/product/product-22.jpg" alt=""></span>
                                        <span class="tt-img-roll-over"><img src="<?=_URL_STYLE?>/images/loader.svg" data-src="images/product/product-22-02.jpg" alt=""></span>
                                    </a>
                                </div>
                                <div class="tt-description">
                                    <ul class="tt-add-info">
                                        <li><a href="#">T-SHIRTS</a></li>
                                    </ul>
                                    <h6 class="tt-title"><a href="#">Flared Shift Dress</a></h6>
                                    <div class="tt-price">
                                        <span class="new-price">$14</span>
                                        <span class="old-price">$24</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tt-item">
                            <div class="tt-layout-vertical">
                                <div class="tt-img">
                                    <a href="listing-collection.html">
                                        <span class="tt-img-default"><img src="<?=_URL_STYLE?>/images/loader.svg" data-src="images/product/product-23.jpg" alt=""></span>
                                        <span class="tt-img-roll-over"><img src="<?=_URL_STYLE?>/images/loader.svg" data-src="images/product/product-23-02.jpg" alt=""></span>
                                    </a>
                                </div>
                                <div class="tt-description">
                                    <ul class="tt-add-info">
                                        <li><a href="#">T-SHIRTS</a></li>
                                    </ul>
                                    <h6 class="tt-title"><a href="#">Flared Shift Dress</a></h6>
                                    <div class="tt-price">
                                        <span class="new-price">$14</span>
                                        <span class="old-price">$24</span>
                                    </div>
                                    <div class="tt-option-block">
                                        <ul class="tt-options-swatch">
                                            <li><a class="options-color tt-color-bg-03" href="#"></a></li>
                                            <li><a class="options-color tt-color-bg-04" href="#"></a></li>
                                            <li><a class="options-color tt-color-bg-05" href="#"></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tt-item">
                            <div class="tt-layout-vertical">
                                <div class="tt-img">
                                    <a href="listing-collection.html">
                                        <span class="tt-img-default"><img src="<?=_URL_STYLE?>/images/loader.svg" data-src="images/product/product-21.jpg" alt=""></span>
                                        <span class="tt-img-roll-over"><img src="<?=_URL_STYLE?>/images/loader.svg" data-src="images/product/product-21-02.jpg" alt=""></span>
                                    </a>
                                </div>
                                <div class="tt-description">
                                    <ul class="tt-add-info">
                                        <li><a href="#">T-SHIRTS</a></li>
                                    </ul>
                                    <h6 class="tt-title"><a href="#">Flared Shift Dress</a></h6>
                                    <div class="tt-price">
                                        <span class="new-price">$34</span>
                                        <span class="old-price">$74</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="divider visible-sm visible-xs"></div>
                <div class="col-sm-6 col-md-4">
                    <h6 class="tt-title-sub">FEATURED PRODUCTS</h6>
                    <div class="tt-layout-vertical-listing">
                        <div class="tt-item">
                            <div class="tt-layout-vertical">
                                <div class="tt-img">
                                    <a href="listing-collection.html">
                                        <span class="tt-img-default"><img src="<?=_URL_STYLE?>/images/loader.svg" data-src="images/product/product-16.jpg" alt=""></span>
                                        <span class="tt-img-roll-over"><img src="<?=_URL_STYLE?>/images/loader.svg" data-src="images/product/product-16-02.jpg" alt=""></span>
                                    </a>
                                </div>
                                <div class="tt-description">
                                    <div class="tt-rating">
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                    </div>
                                    <ul class="tt-add-info">
                                        <li><a href="#">T-SHIRTS</a></li>
                                    </ul>
                                    <h6 class="tt-title"><a href="#">Flared Shift Dress</a></h6>
                                    <div class="tt-price">
                                        $24
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tt-item">
                            <div class="tt-layout-vertical">
                                <div class="tt-img">
                                    <a href="listing-collection.html">
                                        <span class="tt-img-default"><img src="<?=_URL_STYLE?>/images/loader.svg" data-src="images/product/product-12.jpg" alt=""></span>
                                        <span class="tt-img-roll-over"><img src="<?=_URL_STYLE?>/images/loader.svg" data-src="images/product/product-12-01.jpg" alt=""></span>
                                    </a>
                                </div>
                                <div class="tt-description">
                                    <div class="tt-rating">
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                    </div>
                                    <ul class="tt-add-info">
                                        <li><a href="#">T-SHIRTS</a></li>
                                    </ul>
                                    <h6 class="tt-title"><a href="#">Flared Shift Dress</a></h6>
                                    <div class="tt-price">
                                        $178
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tt-item">
                            <div class="tt-layout-vertical">
                                <div class="tt-img">
                                    <a href="listing-collection.html">
                                        <span class="tt-img-default"><img src="<?=_URL_STYLE?>/images/loader.svg" data-src="images/product/product-13.jpg" alt=""></span>
                                        <span class="tt-img-roll-over"><img src="<?=_URL_STYLE?>/images/loader.svg" data-src="images/product/product-13-02.jpg" alt=""></span>
                                    </a>
                                </div>
                                <div class="tt-description">
                                    <div class="tt-rating">
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                    </div>
                                    <ul class="tt-add-info">
                                        <li><a href="#">T-SHIRTS</a></li>
                                    </ul>
                                    <h6 class="tt-title"><a href="#">Flared Shift Dress</a></h6>
                                    <div class="tt-price">
                                        $54
                                    </div>
                                    <div class="tt-option-block">
                                        <ul class="tt-options-swatch">
                                            <li><a class="options-color tt-color-bg-01" href="#"></a></li>
                                            <li><a class="options-color tt-color-bg-02" href="#"></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-indent">
        <div class="container container-fluid-custom-mobile-padding">
            <div class="tt-block-title">
                <h2 class="tt-title">POPULAR</h2>
                <div class="tt-description">CLOTHING BRANDS</div>
            </div>
            <div class="row tt-img-box-listing">
                <div class="col-6 col-sm-4 col-md-3">
                    <a href="#" class="tt-img-box">
                        <img src="<?=_URL_STYLE?>/images/loader.svg" data-src="images/custom/brand-img-01.png" alt="">
                    </a>
                </div>
                <div class="col-6 col-sm-4 col-md-3">
                    <a href="#" class="tt-img-box">
                        <img src="<?=_URL_STYLE?>/images/loader.svg" data-src="images/custom/brand-img-02.png" alt="">
                    </a>
                </div>
                <div class="col-6 col-sm-4 col-md-3">
                    <a href="#" class="tt-img-box">
                        <img src="<?=_URL_STYLE?>/images/loader.svg" data-src="images/custom/brand-img-03.png" alt="">
                    </a>
                </div>
                <div class="col-6 col-sm-4 col-md-3">
                    <a href="#" class="tt-img-box">
                        <img src="<?=_URL_STYLE?>/images/loader.svg" data-src="images/custom/brand-img-04.png" alt="">
                    </a>
                </div>
                <div class="col-6 col-sm-4 col-md-3">
                    <a href="#" class="tt-img-box">
                        <img src="<?=_URL_STYLE?>/images/loader.svg" data-src="images/custom/brand-img-05.png" alt="">
                    </a>
                </div>
                <div class="col-6 col-sm-4 col-md-3">
                    <a href="#" class="tt-img-box">
                        <img src="<?=_URL_STYLE?>/images/loader.svg" data-src="images/custom/brand-img-06.png" alt="">
                    </a>
                </div>
                <div class="col-6 col-sm-4 col-md-3">
                    <a href="#" class="tt-img-box">
                        <img src="<?=_URL_STYLE?>/images/loader.svg" data-src="images/custom/brand-img-07.png" alt="">
                    </a>
                </div>
                <div class="col-6 col-sm-4 col-md-3">
                    <a href="#" class="tt-img-box">
                        <img src="<?=_URL_STYLE?>/images/loader.svg" data-src="images/custom/brand-img-08.png" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-indent">
        <div class="container-fluid">
            <div class="tt-block-title">
                <h2 class="tt-title"><a href="https://www.instagram.com/wokieeshop/">@ FOLLOW</a> US ON</h2>
                <div class="tt-description">INSTAGRAM</div>
            </div>
            <div class="row">
                <div id="instafeed" class="instafeed-fluid"
                     data-accessToken="8626857013.dd09515.0fcd8351c65140d48f5a340693af1c3f"
                     data-clientId="dd095157744c4bd0a67181fc4906e5b6"
                     data-userId="8626857013"
                     data-limitImg="6">
                </div>
            </div>
        </div>
    </div>
</div>
<footer class="nomargin">
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
                            <img src="images/custom/logo.png" alt="">
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
<script src="<?=_URL_STYLE?>/external/jquery/jquery.min.js"></script>
<script src="<?=_URL_STYLE?>/external/bootstrap/js/bootstrap.min.js"></script>
<script src="<?=_URL_STYLE?>/external/slick/slick.min.js"></script>
<script src="<?=_URL_STYLE?>/external/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="<?=_URL_STYLE?>/external/panelmenu/panelmenu.js"></script>
<script src="<?=_URL_STYLE?>/external/instafeed/instafeed.min.js"></script>
<script src="<?=_URL_STYLE?>/external/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script src="<?=_URL_STYLE?>/external/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script src="<?=_URL_STYLE?>/external/countdown/jquery.plugin.min.js"></script>
<script src="<?=_URL_STYLE?>/external/countdown/jquery.countdown.min.js"></script>
<script src="<?=_URL_STYLE?>/external/lazyLoad/lazyload.min.js"></script>
<script src="<?=_URL_STYLE?>/js/main.js"></script>
<!-- form validation and sending to mail -->
<script src="<?=_URL_STYLE?>/external/form/jquery.form.js"></script>
<script src="<?=_URL_STYLE?>/external/form/jquery.validate.min.js"></script>
<script src="<?=_URL_STYLE?>/external/form/jquery.form-init.js"></script>
</body>
</html>