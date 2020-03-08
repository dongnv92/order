<?php
require_once '../../includes/core.php';
$product            = $db->from(_TABLE_PRODUCT)->where('product_url', $url)->fetch_first();
$images_first       = $db->select('media_source')->from(_TABLE_MEDIA)->where(array('media_type' => 'images_product', 'media_store' => 'local', 'media_parent' => $product['product_id']))->fetch_first();
$product_category   = $db->from(_TABLE_CATEGORY)->where('category_id', $product['product_category'])->fetch_first();;
$product_brand      = $db->from(_TABLE_CATEGORY)->where('category_id', $product['product_brand'])->fetch_first();
$images_thumb       = $db->select('media_source')->from(_TABLE_MEDIA)->where(array('media_type' => 'images_product', 'media_store' => 'local', 'media_parent' => $product['product_id']))->fetch_first();
$header['title']    = $product['product_name'];
$header['images']   = _URL_HOME.'/'.$images_thumb['media_source'];
require_once 'header.php';
?>
    <div class="tt-breadcrumb">
        <div class="container">
            <ul>
                <li><a href="<?=_URL_HOME?>">Trang chủ</a></li>
                <li><a href="#">Shop</a></li>
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
                                <span class="old-price" style="color: #0c84d1"><small><?=$function->convertNumberMoney(($product['product_price_default'] * _CONFIG_NDT))?>₫</small></span>
                                <span class="new-price"><?=$function->convertNumberMoney($product['product_price_vn'])?>₫</span>
                                <!--<span class="new-price"><small><?/*=$product['product_price_promotion']*/?>¥</small></span>-->
                            </div>
                            <div class="tt-swatches-container">
                                <!-- SIZE -->
                                <?php if(count($product['product_size']) > 1) {?>
                                <div class="tt-wrapper">
                                    <div class="tt-title-options">SIZE:</div>
                                    <ul class="tt-options-swatch options-large">
                                        <?php
                                        foreach (unserialize($product['product_size']) as $product_size){
                                            echo '<li data-content="product_size"><a href="javascript:;">'. $product_size .'</a></li>';
                                        }
                                        ?>
                                    </ul>
                                </div>
                                <?php }?>
                                <!-- SIZE -->
                                <!-- COLOR -->
                                <?php if(count($product['product_color']) > 1) {?>
                                <div class="tt-wrapper">
                                    <div class="tt-title-options">Màu:</div>
                                    <ul class="tt-options-swatch options-large">
                                        <?php
                                        foreach (unserialize($product['product_color']) as $product_color){
                                            echo '<li data-content="product_color">
                                            <a class="options-color" href="javascript:;">
										        <span class="swatch-img">
											        <img src="'. _URL_HOME .'/'. $product_color .'" alt="'. $product['product_name'] .'">
										        </span>
                                                <span class="swatch-label color-black"></span>
                                            </a>
                                            </li>';
                                        }
                                        ?>
                                    </ul>
                                </div>
                                <?php }?>
                                <!-- COLOR -->
                            </div>
                            <div class="tt-wrapper">
                                <div class="tt-row-custom-01">
                                    <div class="col-item">
                                        <div class="tt-input-counter style-01">
                                            <span class="minus-btn"></span>
                                            <input type="text" name="quantily" value="1" size="50">
                                            <span class="plus-btn"></span>
                                        </div>
                                    </div>
                                    <div class="col-item">
                                        <a href="javascript:;" data-goto="<?=$function->getCurrentDomain()?>" id="productAddToCart" data-content="<?=$product['product_id']?>" class="btn btn-lg"><i class="icon-f-39"></i>THÊM VÀO GIỎ HÀNG</a>
                                    </div>
                                </div>
                            </div>
                            <div class="tt-wrapper">
                                <ul class="tt-list-btn">
                                    <li><a class="btn-link" href="#"><i class="icon-n-072"></i>THÊM VÀO YÊU THÍCH</a></li>
                                </ul>
                            </div>
                            <div class="tt-wrapper">
                                <div class="tt-add-info">
                                    <ul>
                                        <li>Mã sản phẩm: <?=$product['product_code']?></li>
                                        <li>Chuyên mục: <a href="<?=$function->getUrlCategory($product_category['category_id'])?>"><?=$product_category['category_name']?></a></li>
                                        <?=$product_brand['category_name'] ? '<li>Hãng: '.$product_brand['category_name'].'</li>' : ''?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Content -->
        <div class="container-indent">
            <div class="container container-fluid-custom-mobile-padding">
                <div class="row justify-content-center">
                    <div class="col-md-2">
                        <div class="tt-collapse open">
                            <h3 class="tt-collapse-title">NGẪU NHIÊN</h3>
                            <div class="tt-collapse-content" style="">
                                <div class="tt-aside">
                                    <?php
                                    $db->select('product_id')->from(_TABLE_PRODUCT);
                                    $db->where('product_status != 0');
                                    $db->order_by('rand()');
                                    $db->limit(5);
                                    foreach ($db->fetch() as $product_rand){
                                        echo $function->getProduct($product_rand['product_id'], array('type' => 'sidebar'));
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-10">
                        <div class="tt-post-single">
                            <div class="tt-post-content">
                                <h2 class="tt-title">MÔ TẢ SẢN PHẨM</h2>
                                <?=$product['product_content']?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Content -->
        <div class="container-indent">
            <div class="container container-fluid-custom-mobile-padding">
                <div class="tt-block-title text-left">
                    <h3 class="tt-title-small">SẢN PHẨM TƯƠNG TỰ</h3>
                </div>
                <div class="tt-carousel-products row arrow-location-right-top tt-alignment-img tt-layout-product-item slick-animated-show-js">
                    <?php
                    $db->from(_TABLE_PRODUCT)->where(array('product_status !=' => 0, 'product_category' => $product['product_category']));
                    $db->order_by('product_id', 'DESC');
                    $db->limit(8);
                    foreach ($db->fetch() as $product_list) {
                        echo $function->getProduct($product_list['product_id'], array('type' => 'home', 'layout' => 'col-2 col-md-4 col-lg-3'));
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
<?php
require_once 'footer.php';
