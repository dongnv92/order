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
                            <a href="<?=$function->getUrlCategory(1)?>?gender=make" class="tt-promo-box tt-one-child hover-type-2">
                                <img src="<?=_URL_STYLE?>/images/banner/3.png" data-src="<?=_URL_STYLE?>/images/banner/3.png" alt="">
                                <div class="tt-description">
                                    <div class="tt-description-wrapper">
                                        <div class="tt-background"></div>
                                        <div class="tt-title-small">GIÀY NAM</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-6">
                            <a href="<?=$function->getUrlCategory(1)?>?gender=femake" class="tt-promo-box tt-one-child hover-type-2">
                                <img src="<?=_URL_STYLE?>/images/banner/4.png" data-src="<?=_URL_STYLE?>/images/banner/4.png" alt="">
                                <div class="tt-description">
                                    <div class="tt-description-wrapper">
                                        <div class="tt-background"></div>
                                        <div class="tt-title-small">GIÀY NỮ</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-12">
                            <a href="listing-left-column.html" class="tt-promo-box tt-one-child">
                                <img src="<?=_URL_STYLE?>/images/banner/4.jpg" data-src="<?=_URL_STYLE?>/images/banner/4.jpg" alt="">
                                <div class="tt-description">
                                    <div class="tt-description-wrapper">
                                        <div class="tt-background"></div>
                                        <div class="tt-title-small">DÉP NAM - NỮ</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <a href="<?=$function->getUrlCategory(2)?>" class="tt-promo-box">
                        <img src="<?=_URL_STYLE?>/images/banner/1.jpg" data-src="<?=_URL_STYLE?>/images/banner/1.jpg" alt="">
                        <div class="tt-description">
                            <div class="tt-description-wrapper">
                                <div class="tt-background"></div>
                                <div class="tt-title-small">GIÀY THỂ THAO</div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-indent">
        <div class="container container-fluid-custom-mobile-padding">
            <ul class="nav nav-tabs tt-tabs-default" role="tablist">
                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#tab_1_1">NỔI BẬT</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tab_1_2">GIÀY NAM</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tab_1_3">GIÀY NỮ</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="tab_1_1">
                    <div class="row tt-layout-product-item">
                        <?php
                        $db->from(_TABLE_PRODUCT)->where(array('product_status' => 2));
                        $db->order_by('product_id', 'DESC');
                        $db->limit(8);
                        foreach ($db->fetch() as $product_list) {
                            $db->select('media_source')->from(_TABLE_MEDIA)->where(array('media_type' => 'images_product', 'media_store' => 'local', 'media_parent' => $product_list['product_id']));
                            $db->limit(1);
                            $images_1 = $db->fetch_first();
                            $db->select('media_source')->from(_TABLE_MEDIA)->where(array('media_type' => 'images_product', 'media_store' => 'local', 'media_parent' => $product_list['product_id']));
                            $db->limit(2);
                            $images_2 = $db->fetch_first();
                            $product_category = $db->select('category_id, category_name')->from(_TABLE_CATEGORY)->where(array('category_id' => $product_list['product_category']))->fetch_first();
                            ?>
                            <div class="col-6 col-md-4 col-lg-3">
                                <div class="tt-product thumbprod-center">
                                    <div class="tt-image-box">
                                        <a href="#" class="tt-btn-wishlist" data-tooltip="Yêu Thích" data-tposition="left"></a>
                                        <a href="<?=$function->getUrlProduct($product_list['product_id'])?>">
                                            <span class="tt-img"><img src="<?= _URL_HOME.'/'.$images_1['media_source']?>" alt=""></span>
                                            <span class="tt-img-roll-over"><img src="<?= _URL_HOME.'/'.$images_2['media_source']?>" alt=""></span>
                                            <?=$product_list['product_sale'] > 0 ? '<span class="tt-label-location"><span class="tt-label-new">Giảm giá '. $product_list['product_sale'] .'%</span></span>' : ''?>
                                        </a>
                                    </div>
                                    <div class="tt-description">
                                        <div class="tt-row"><ul class="tt-add-info"><li><a href="<?=$function->getUrlCategory($product_category['category_id'])?>"><?=$product_category['category_name']?></a></li></ul></div>
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
                <div class="tab-pane" id="tab_1_2">
                    <div class="row tt-layout-product-item">
                        <?php
                        $db->from(_TABLE_PRODUCT);
                        $db->where(array('product_status <>' => 0));
                        $db->where_in('product_category', $function->getListCategory(1));
                        $db->order_by('product_id', 'DESC');
                        $db->limit(8);
                        foreach ($db->fetch() as $product_list) {
                            $db->select('media_source')->from(_TABLE_MEDIA)->where(array('media_type' => 'images_product', 'media_store' => 'local', 'media_parent' => $product_list['product_id']));
                            $db->limit(1);
                            $images_1 = $db->fetch_first();
                            $db->select('media_source')->from(_TABLE_MEDIA)->where(array('media_type' => 'images_product', 'media_store' => 'local', 'media_parent' => $product_list['product_id']));
                            $db->limit(2);
                            $images_2 = $db->fetch_first();
                            $product_metadata = $db->from(_TABLE_METADATA)->where(array('metadata_type' => 'category_product', 'metadata_suorce' => $product_list['product_id']))->fetch_first();
                            $product_category = $db->from(_TABLE_CATEGORY)->where(array('category_id' => $product_metadata['metadata_value']))->fetch_first();
                            ?>
                            <div class="col-6 col-md-4 col-lg-3">
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
                                        <div class="tt-row"><ul class="tt-add-info"><li><a href="#"><?=$product_category['category_name']?></a></li></ul></div>
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
                <div class="tab-pane" id="tab_1_3">
                    <div class="row tt-layout-product-item">
                        <?php
                        $db->from(_TABLE_PRODUCT);
                        $db->where(array('product_status <>' => 0));
                        $db->where_in('product_category', $function->getListCategory(1));
                        $db->order_by('product_id', 'DESC');
                        $db->limit(8);
                        foreach ($db->fetch() as $product_list) {
                            $db->select('media_source')->from(_TABLE_MEDIA)->where(array('media_type' => 'images_product', 'media_store' => 'local', 'media_parent' => $product_list['product_id']));
                            $db->limit(1);
                            $images_1 = $db->fetch_first();
                            $db->select('media_source')->from(_TABLE_MEDIA)->where(array('media_type' => 'images_product', 'media_store' => 'local', 'media_parent' => $product_list['product_id']));
                            $db->limit(2);
                            $images_2 = $db->fetch_first();
                            $product_metadata = $db->from(_TABLE_METADATA)->where(array('metadata_type' => 'category_product', 'metadata_suorce' => $product_list['product_id']))->fetch_first();
                            $product_category = $db->from(_TABLE_CATEGORY)->where(array('category_id' => $product_metadata['metadata_value']))->fetch_first();
                            ?>
                            <div class="col-6 col-md-4 col-lg-3">
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
                                        <div class="tt-row"><ul class="tt-add-info"><li><a href="#"><?=$product_category['category_name']?></a></li></ul></div>
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
            </div>
        </div>
    </div>
    <div class="container-indent">
        <div class="container">
            <div class="row tt-layout-promo-box">
                <div class="col-md-6">
                    <a href="listing-left-column.html" class="tt-promo-box tt-one-child">
                        <img src="<?=_URL_STYLE?>/images/banner/5.jpg" data-src="<?=_URL_STYLE?>/images/banner/5.jpg" alt="">
                        <div class="tt-description">
                            <div class="tt-description-wrapper">
                                <div class="tt-background"></div>
                                <div class="tt-title-small">PHỤ KIỆN</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6">
                    <a href="listing-left-column.html" class="tt-promo-box tt-one-child">
                        <img src="<<?=_URL_STYLE?>/images/banner/6.jpg" data-src="<?=_URL_STYLE?>/images/banner/6.jpg" alt="">
                        <div class="tt-description">
                            <div class="tt-description-wrapper">
                                <div class="tt-background"></div>
                                <div class="tt-title-small">TÚI XÁCH</div>
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
                    <h6 class="tt-title-sub">MỚI NHẤT</h6>
                    <div class="tt-layout-vertical-listing">
                        <?php
                        $db->from(_TABLE_PRODUCT)->where(array('product_status <>' => 0));
                        $db->order_by('product_id', 'DESC');
                        $db->limit(3);
                        foreach ($db->fetch() as $product_list) {
                            $db->select('media_source')->from(_TABLE_MEDIA)->where(array('media_type' => 'images_product', 'media_store' => 'local', 'media_parent' => $product_list['product_id']));
                            $db->limit(1);
                            $images_1 = $db->fetch_first();
                            $db->select('media_source')->from(_TABLE_MEDIA)->where(array('media_type' => 'images_product', 'media_store' => 'local', 'media_parent' => $product_list['product_id']));
                            $db->limit(2);
                            $images_2 = $db->fetch_first();
                            $product_metadata = $db->from(_TABLE_METADATA)->where(array('metadata_type' => 'category_product', 'metadata_suorce' => $product_list['product_id']))->fetch_first();
                            $product_category = $db->from(_TABLE_CATEGORY)->where(array('category_id' => $product_metadata['metadata_value']))->fetch_first();
                            ?>
                            <div class="tt-item">
                                <div class="tt-layout-vertical">
                                    <div class="tt-img">
                                        <a href="<?=$function->getUrlProduct($product_list['product_id'])?>">
                                            <span class="tt-img-default"><img src="<?= _URL_HOME.'/'.$images_1['media_source']?>" data-src="<?= _URL_HOME.'/'.$images_1['media_source']?>" alt=""></span>
                                            <span class="tt-img-roll-over"><img src="<?= _URL_HOME.'/'.$images_2['media_source']?>" data-src="<?= _URL_HOME.'/'.$images_2['media_source']?>" alt=""></span>
                                        </a>
                                    </div>
                                    <div class="tt-description">
                                        <ul class="tt-add-info">
                                            <li><a href="#"><?=$product_category['category_name']?></a></li>
                                        </ul>
                                        <h6 class="tt-title"><a href="<?=$function->getUrlProduct($product_list['product_id'])?>"><?=$product_list['product_name']?></a></h6>
                                        <div class="tt-price">
                                            <?=$function->convertNumberMoney($product_list['product_price_vn'])?>₫
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                </div>
                <div class="divider visible-xs"></div>
                <div class="col-sm-6 col-md-4">
                    <h6 class="tt-title-sub">GIẢM GIÁ</h6>
                    <div class="tt-layout-vertical-listing">
                        <?php
                        $db->from(_TABLE_PRODUCT)->where(array('product_status <>' => 0));
                        $db->order_by('product_sale', 'DESC');
                        $db->limit(3);
                        foreach ($db->fetch() as $product_list) {
                            $db->select('media_source')->from(_TABLE_MEDIA)->where(array('media_type' => 'images_product', 'media_store' => 'local', 'media_parent' => $product_list['product_id']));
                            $db->limit(1);
                            $images_1 = $db->fetch_first();
                            $db->select('media_source')->from(_TABLE_MEDIA)->where(array('media_type' => 'images_product', 'media_store' => 'local', 'media_parent' => $product_list['product_id']));
                            $db->limit(2);
                            $images_2 = $db->fetch_first();
                            $product_metadata = $db->from(_TABLE_METADATA)->where(array('metadata_type' => 'category_product', 'metadata_suorce' => $product_list['product_id']))->fetch_first();
                            $product_category = $db->from(_TABLE_CATEGORY)->where(array('category_id' => $product_metadata['metadata_value']))->fetch_first();
                            ?>
                            <div class="tt-item">
                                <div class="tt-layout-vertical">
                                    <div class="tt-img">
                                        <a href="<?=$function->getUrlProduct($product_list['product_id'])?>">
                                            <span class="tt-img-default"><img src="<?= _URL_HOME.'/'.$images_1['media_source']?>" data-src="<?= _URL_HOME.'/'.$images_1['media_source']?>" alt=""></span>
                                            <span class="tt-img-roll-over"><img src="<?= _URL_HOME.'/'.$images_2['media_source']?>" data-src="<?= _URL_HOME.'/'.$images_2['media_source']?>" alt=""></span>
                                        </a>
                                    </div>
                                    <div class="tt-description">
                                        <ul class="tt-add-info">
                                            <li><a href="#"><?=$product_category['category_name']?></a></li>
                                        </ul>
                                        <span class="tt-label-location">
                                            <span class="tt-label-new">Giảm giá <?=$product_list['product_sale']?>%</span>
                                        </span>
                                        <h6 class="tt-title"><a href="<?=$function->getUrlProduct($product_list['product_id'])?>"><?=$product_list['product_name']?></a></h6>
                                        <div class="tt-price">
                                            <?=$function->convertNumberMoney($product_list['product_price_vn'])?>₫
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                </div>
                <div class="divider visible-sm visible-xs"></div>
                <div class="col-sm-6 col-md-4">
                    <h6 class="tt-title-sub">NỔI BẬT</h6>
                    <div class="tt-layout-vertical-listing">
                        <?php
                        $db->from(_TABLE_PRODUCT)->where(array('product_status' => 2));
                        $db->order_by('product_id', 'DESC');
                        $db->limit(3);
                        foreach ($db->fetch() as $product_list) {
                            $db->select('media_source')->from(_TABLE_MEDIA)->where(array('media_type' => 'images_product', 'media_store' => 'local', 'media_parent' => $product_list['product_id']));
                            $db->limit(1);
                            $images_1 = $db->fetch_first();
                            $db->select('media_source')->from(_TABLE_MEDIA)->where(array('media_type' => 'images_product', 'media_store' => 'local', 'media_parent' => $product_list['product_id']));
                            $db->limit(2);
                            $images_2 = $db->fetch_first();
                            $product_metadata = $db->from(_TABLE_METADATA)->where(array('metadata_type' => 'category_product', 'metadata_suorce' => $product_list['product_id']))->fetch_first();
                            $product_category = $db->from(_TABLE_CATEGORY)->where(array('category_id' => $product_metadata['metadata_value']))->fetch_first();
                            ?>
                            <div class="tt-item">
                                <div class="tt-layout-vertical">
                                    <div class="tt-img">
                                        <a href="<?=$function->getUrlProduct($product_list['product_id'])?>">
                                            <span class="tt-img-default"><img src="<?= _URL_HOME.'/'.$images_1['media_source']?>" data-src="<?= _URL_HOME.'/'.$images_1['media_source']?>" alt=""></span>
                                            <span class="tt-img-roll-over"><img src="<?= _URL_HOME.'/'.$images_2['media_source']?>" data-src="<?= _URL_HOME.'/'.$images_2['media_source']?>" alt=""></span>
                                        </a>
                                    </div>
                                    <div class="tt-description">
                                        <ul class="tt-add-info">
                                            <li><a href="#"><?=$product_category['category_name']?></a></li>
                                        </ul>
                                        <h6 class="tt-title"><a href="<?=$function->getUrlProduct($product_list['product_id'])?>"><?=$product_list['product_name']?></a></h6>
                                        <div class="tt-price">
                                            <?=$function->convertNumberMoney($product_list['product_price_vn'])?>₫
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-indent">
        <div class="container container-fluid-custom-mobile-padding">
            <div class="tt-block-title">
                <h2 class="tt-title">THƯƠNG HIỆU</h2>
                <div class="tt-description">THƯƠNG HIỆN NỔI BẬT</div>
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
</div>
<?php
require_once 'footer.php';