<?php
require_once '../../includes/core.php';
$product            = $db->from(_TABLE_PRODUCT)->where('product_url', $url)->fetch_first();
$header['title']    = $product['product_name'];
$images_first       = $db->select('media_source')->from(_TABLE_MEDIA)->where(array('media_type' => 'images_product', 'media_store' => 'local', 'media_parent' => $product['product_id']))->fetch_first();
$product_categorys  = $db->from(_TABLE_METADATA)->where(array('metadata_type' => 'category_product', 'metadata_suorce' => $product['product_id']))->fetch();
$product_brand      = $db->from(_TABLE_CATEGORY)->where('category_id', $product['product_brand'])->fetch_first();
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
                                <span class="new-price"><?=$function->convertNumberMoney($product['product_price_vn'])?>₫</span>
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
                            <div class="tt-wrapper">
                                <div class="tt-add-info">
                                    <ul>
                                        <li>Chuyên mục:
                                            <?php
                                            foreach ($product_categorys as $product_category){
                                                $post_category = $db->from(_TABLE_CATEGORY)->where('category_id', $product_category['metadata_value'])->fetch_first();
                                                echo $post_category['category_name'].', ';
                                            }
                                            ?>
                                        </li>
                                        <li>Hãng: <?=$product_brand['category_name']?></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tt-collapse-block">
                                <div class="tt-item">
                                    <div class="tt-collapse-title">Giới thiệu</div>
                                    <div class="tt-collapse-content"><?=$product['product_content']?></div>
                                </div>
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
                    <?php
                    $db->select()->from(_TABLE_METADATA);
                    $db->join(_TABLE_PRODUCT, 'dong_product.product_id = dong_metadata.metadata_value');
                    $db->where(array('metadata_type' => 'category_product', 'metadata_suorce' => $product_categorys[0]['metadata_value'], 'dong_product.product_gender' => $product['product_gender']));
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
<?php
require_once 'footer.php';
