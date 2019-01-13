<?php
/**
 * Created by PhpStorm.
 * User: DONG
 * Date: 2019-01-03
 * Time: 15:28
 */
require_once '../../includes/core.php';
switch ($act){
    case 'category':
        echo $url;
        exit();
        break;
    case 'feature':
        $header['title']        = 'Sản phẩm nổi bật';
        $header['menu_active']  = 'feature';
        $text_price_sort        = '<strong>SẮP XẾP THEO</strong>:  <a href="'. _URL_HOME .'/feature?price=desc'. ($page ? '&page='.$page : '') .'">Giá giảm dần</a> | <a href="'. _URL_HOME .'/feature?price=asc'. ($page ? '&page='.$page : '') .'">Giá tăng dần</a>';
        $text_brackcrum         = 'Sản phẩm nổi bật';
        $price                  = (isset($_GET['price']) && !empty($_GET['price']))   ? trim($_GET['price'])   : '';

        // Product Where
        $product_where                   = array();
        $product_where['product_status'] = 2;
        // Product Where

        // Config Pagination
        $db->select('product_id')->from(_TABLE_PRODUCT)->where($product_where)->fetch();
        $pagination['page_row']    = _CONFIG_PAGINATION_PRODUCT;
        $pagination['page_num']    = ceil($db->affected_rows/$pagination['page_row']);
        $pagination['url']         = _URL_HOME.'/new?page={page}';
        $page_start                = ($page-1) * $pagination['page_row'];
        // Config Pagination

        $db->select('product_id, product_price_vn')->from(_TABLE_PRODUCT)->where($product_where);
        $db->order_by('product_id', 'DESC');
        $db->limit(_CONFIG_PAGINATION_PRODUCT, $page_start);
        $db->order_by('product_id', 'DESC');
        $data = $db->fetch();

        if($price == 'desc'){
            $data = $function->sortMultiArray($data, 'product_price_vn', SORT_DESC);
        }else if($price == 'asc'){
            $data = $function->sortMultiArray($data, 'product_price_vn', SORT_ASC);
        }
        break;
    default:
        $header['title']        = 'Sản phẩm mới';
        $header['menu_active']  = 'new';
        $text_price_sort        = '<strong>SẮP XẾP THEO</strong>:  <a href="'. _URL_HOME .'/new?price=desc'. ($page ? '&page='.$page : '') .'">Giá giảm dần</a> | <a href="'. _URL_HOME .'/new?price=asc'. ($page ? '&page='.$page : '') .'">Giá tăng dần</a>';
        $text_brackcrum         = 'Sản phẩm mới đăng';
        $price                  = (isset($_GET['price']) && !empty($_GET['price']))   ? trim($_GET['price'])   : '';

        // Product Where
        $product_where                      = array();
        $product_where['product_status !='] = 0;
        // Product Where

        // Config Pagination
        $db->select('product_id')->from(_TABLE_PRODUCT)->where($product_where)->fetch();
        $pagination['page_row']    = _CONFIG_PAGINATION_PRODUCT;
        $pagination['page_num']    = ceil($db->affected_rows/$pagination['page_row']);
        $pagination['url']         = _URL_HOME.'/new?page={page}';
        $page_start                = ($page-1) * $pagination['page_row'];
        // Config Pagination

        $db->select('product_id, product_price_vn')->from(_TABLE_PRODUCT)->where($product_where);
        $db->order_by('product_id', 'DESC');
        $db->limit(_CONFIG_PAGINATION_PRODUCT, $page_start);
        $db->order_by('product_id', 'DESC');
        $data = $db->fetch();

        if($price == 'desc'){
            $data = $function->sortMultiArray($data, 'product_price_vn', SORT_DESC);
        }else if($price == 'asc'){
            $data = $function->sortMultiArray($data, 'product_price_vn', SORT_ASC);
        }
        break;
}
require_once 'header.php';
?>
<div class="tt-breadcrumb">
    <div class="container">
        <ul>
            <li><a href="<?=_URL_HOME?>">Trang Chủ</a></li>
            <li></li>
        </ul>
    </div>
</div>
<div id="tt-pageContent">
    <div class="container-indent">
        <div class="container container-fluid-custom-mobile-padding">
            <div class="row">
                <div class="col-md-12">
                    <div class="content-indent">
                        <div class="tt-filters-options desctop-no-sidebar">
                            <h1 class="tt-title"><?=$header['title']?></h1>
                            <div class="tt-sort"><?=$text_price_sort?></div>
                            <div class="tt-quantity">
                                <a href="#" class="tt-col-one" data-value="tt-col-one"></a>
                                <a href="#" class="tt-col-two" data-value="tt-col-two"></a>
                                <a href="#" class="tt-col-three" data-value="tt-col-three"></a>
                                <a href="#" class="tt-col-four" data-value="tt-col-four"></a>
                                <a href="#" class="tt-col-six" data-value="tt-col-six"></a>
                            </div>
                        </div>
                        <div class="tt-product-listing row">
                            <?php
                            foreach ($data as $product_list) {
                                $db->select('media_source')->from(_TABLE_MEDIA)->where(array('media_type' => 'images_product', 'media_store' => 'local', 'media_parent' => $product_list['product_id']));
                                $db->limit(1);
                                $images_1 = $db->fetch_first();
                                $db->select('media_source')->from(_TABLE_MEDIA)->where(array('media_type' => 'images_product', 'media_store' => 'local', 'media_parent' => $product_list['product_id']));
                                $db->limit(2);
                                $images_2 = $db->fetch_first();
                                $product_metadata = $db->from(_TABLE_METADATA)->where(array('metadata_type' => 'category_product', 'metadata_suorce' => $product_list['product_id']))->fetch_first();
                                $product_category = $db->from(_TABLE_CATEGORY)->where(array('category_id' => $product_metadata['metadata_value']))->fetch_first();
                                ?>
                                <div class="col-6 col-md-4 col-lg-3 tt-col-item">
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
                        <div class="text-center tt_product_showmore"><?=$function->paginationListProduct($pagination)?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
require_once 'footer.php';
