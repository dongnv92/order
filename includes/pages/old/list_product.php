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
        $category               = $db->from(_TABLE_CATEGORY)->where('category_url', $url)->fetch_first();
        $list_category          = $function->getListCategory($category['category_id']);

        $price                  = (isset($_GET['price'])    && !empty($_GET['price']))      ? trim($_GET['price'])   : '';
        $gender                 = (isset($_GET['gender'])   && !empty($_GET['gender']))     ? trim($_GET['gender'])  : '';

        // Cài đặt URL
        $parameter              = array();
        $parameter['page']      = $page > 1 ? $page : false;
        $parameter['gender']    = in_array($gender, array('make', 'femake')) ? $gender : false;
        $parameter['price']     = in_array($price, array('desc', 'asc')) ? $price : false;
        // Cài đặt URL

        $header['title']        = $category['category_name'];
        $header['menu_active']  = 'category';
        $text_price_sort        = '<li '. ($price == 'desc' ? 'class="active"' : '') .' ><a '. ($price == 'desc' ? 'style="font-weight: bold" class="text-danger"' : '') .' href="'. $function->getUrlCategory($category['category_id']) .$function->createParameter(array('price' => 'desc', 'gender' => $parameter['gender'], 'page' => $parameter['page'])).'">GIÁ GIẢM DẦN</a></li><li '. ($price == 'asc' ? 'class="active"' : '') .' ><a '. ($price == 'asc' ? 'style="font-weight: bold" class="text-danger"' : '') .' href="'. $function->getUrlCategory($category['category_id']) .$function->createParameter(array('price' => 'asc', 'gender' => $parameter['gender'], 'page' => $parameter['page'])).'">GIÁ TĂNG DẦN</a></li>';
        $text_price_del_option  = '<a href="'. $function->getUrlCategory($category['category_id']) . $function->createParameter(array('gender' => $parameter['gender'], 'page' => $parameter['page'])) .'" class="btn-link-02">Xóa lựa chọn</a>';
        $text_gender_sort       = '<li '. ($gender == 'make' ? 'class="active"' : '') .' ><a '. ($gender == 'make' ? 'style="font-weight: bold" class="text-danger"' : '') .' href="'. $function->getUrlCategory($category['category_id']) .$function->createParameter(array('price' => $parameter['price'], 'gender' => 'make', 'page' => $parameter['page'])).'">NAM</a></li><li '. ($gender == 'femake' ? 'class="active"' : '') .' ><a '. ($gender == 'femake' ? 'style="font-weight: bold" class="text-danger"' : '') .' href="'. $function->getUrlCategory($category['category_id']) .$function->createParameter(array('price' => $parameter['price'], 'gender' => 'femake', 'page' => $parameter['page'])).'">NỮ</a></li>';
        $text_gender_del_option = '<a href="'. $function->getUrlCategory($category['category_id']) . $function->createParameter(array('price' => $parameter['price'], 'page' => $parameter['page'])) .'" class="btn-link-02">Xóa lựa chọn</a>';
        $text_brackcrum         = 'Chuyên mục '.$header['title'];

        // Product Where
        $product_where                      = array();
        $product_where['product_status !='] = 0;
        if(in_array($gender, array('make', 'femake'))){
            $product_where['product_gender'] = $gender == 'make' ? 1 : 2;
        }
        // Product Where

        // Config Pagination
        $db->select('product_id')->from(_TABLE_PRODUCT);
        $db->where($product_where);
        $db->where_in('product_category', $list_category);
        $db->execute();
        $product_count              =   $db->affected_rows;
        $pagination['page_row']     = _CONFIG_PAGINATION_PRODUCT;
        $pagination['page_num']     = ceil($product_count/$pagination['page_row']);
        $pagination['url']          = $function->getUrlCategory($category['category_id']).$function->createParameter(array('price' => $parameter['price'], 'gender' => $parameter['gender'], 'page' => '{page}'));
        $page_start                 = ($page-1) * $pagination['page_row'];
        // Config Pagination

        // Data
        $db->from(_TABLE_PRODUCT);
        $db->where($product_where);
        $db->where_in('product_category', $list_category);
        $db->order_by('product_id', 'DESC');
        $db->limit(_CONFIG_PAGINATION_PRODUCT, $page_start);
        $db->order_by('product_id', 'DESC');
        $data = $db->fetch();
        // Data

        if($price == 'desc'){
            $data = $function->sortMultiArray($data, 'product_price_vn', SORT_DESC);
        }else if($price == 'asc'){
            $data = $function->sortMultiArray($data, 'product_price_vn', SORT_ASC);
        }
        break;
    case 'feature':
        $price                  = (isset($_GET['price'])    && !empty($_GET['price']))      ? trim($_GET['price'])   : '';
        $gender                 = (isset($_GET['gender'])   && !empty($_GET['gender']))     ? trim($_GET['gender'])  : '';

        // Cài đặt URL
        $parameter              = array();
        $parameter['page']      = $page > 1 ? $page : false;
        $parameter['gender']    = in_array($gender, array('make', 'femake')) ? $gender : false;
        $parameter['price']     = in_array($price, array('desc', 'asc')) ? $price : false;
        // Cài đặt URL

        $header['title']        = 'Sản phẩm nổi bật';
        $header['menu_active']  = 'feature';
        $text_price_sort        = '<li '. ($price == 'desc' ? 'class="active"' : '') .' ><a '. ($price == 'desc' ? 'style="font-weight: bold" class="text-danger"' : '') .' href="'. _URL_HOME .'/feature'.$function->createParameter(array('price' => 'desc', 'gender' => $parameter['gender'], 'page' => $parameter['page'])).'">GIÁ GIẢM DẦN</a></li><li '. ($price == 'asc' ? 'class="active"' : '') .' ><a '. ($price == 'asc' ? 'style="font-weight: bold" class="text-danger"' : '') .' href="'. _URL_HOME .'/feature'.$function->createParameter(array('price' => 'asc', 'gender' => $parameter['gender'], 'page' => $parameter['page'])).'">GIÁ TĂNG DẦN</a></li>';
        $text_price_del_option  = '<a href="'. _URL_HOME .'/feature'. $function->createParameter(array('gender' => $parameter['gender'], 'page' => $parameter['page'])) .'" class="btn-link-02">Xóa lựa chọn</a>';
        $text_gender_sort       = '<li '. ($gender == 'make' ? 'class="active"' : '') .' ><a '. ($gender == 'make' ? 'style="font-weight: bold" class="text-danger"' : '') .' href="'. _URL_HOME .'/feature'.$function->createParameter(array('price' => $parameter['price'], 'gender' => 'make', 'page' => $parameter['page'])).'">NAM</a></li><li '. ($gender == 'femake' ? 'class="active"' : '') .' ><a '. ($gender == 'femake' ? 'style="font-weight: bold" class="text-danger"' : '') .' href="'. _URL_HOME .'/feature'.$function->createParameter(array('price' => $parameter['price'], 'gender' => 'femake', 'page' => $parameter['page'])).'">NỮ</a></li>';
        $text_gender_del_option = '<a href="'. _URL_HOME .'/feature'. $function->createParameter(array('price' => $parameter['price'], 'page' => $parameter['page'])) .'" class="btn-link-02">Xóa lựa chọn</a>';
        $text_brackcrum         = 'Sản phẩm nổi bật';

        // Product Where
        $product_where                      = array();
        $product_where['product_status']    = 2;
        if(in_array($gender, array('make', 'femake'))){
            $product_where['product_gender'] = $gender == 'make' ? 1 : 2;
        }
        // Product Where

        // Config Pagination
        $db->select('product_id')->from(_TABLE_PRODUCT)->where($product_where)->fetch();
        $product_count              =   $db->affected_rows;
        $pagination['page_row']     = _CONFIG_PAGINATION_PRODUCT;
        $pagination['page_num']     = ceil($product_count/$pagination['page_row']);
        if($page > $pagination['page_num']){
            $function->redirect(_URL_HOME.'/feature'.$function->createParameter(array('price' => $parameter['price'], 'gender' => $parameter['gender'])));
        }
        $pagination['url']          = _URL_HOME.'/feature'.$function->createParameter(array('price' => $parameter['price'], 'gender' => $parameter['gender'], 'page' => '{page}'));
        $page_start                 = ($page-1) * $pagination['page_row'];
        // Config Pagination

        // Data
        $db->from(_TABLE_PRODUCT)->where($product_where);
        $db->order_by('product_id', 'DESC');
        $db->limit(_CONFIG_PAGINATION_PRODUCT, $page_start);
        $db->order_by('product_id', 'DESC');
        $data = $db->fetch();
        // Data

        if($price == 'desc'){
            $data = $function->sortMultiArray($data, 'product_price_vn', SORT_DESC);
        }else if($price == 'asc'){
            $data = $function->sortMultiArray($data, 'product_price_vn', SORT_ASC);
        }
        break;
    default:
        $price                  = (isset($_GET['price'])    && !empty($_GET['price']))      ? trim($_GET['price'])   : '';
        $gender                 = (isset($_GET['gender'])   && !empty($_GET['gender']))     ? trim($_GET['gender'])  : '';

        // Cài đặt URL
        $parameter              = array();
        $parameter['page']      = $page > 1 ? $page : false;
        $parameter['gender']    = in_array($gender, array('make', 'femake')) ? $gender : false;
        $parameter['price']     = in_array($price, array('desc', 'asc')) ? $price : false;
        // Cài đặt URL

        $header['title']        = 'Sản phẩm mới';
        $header['menu_active']  = 'new';
        $text_price_sort        = '<li '. ($price == 'desc' ? 'class="active"' : '') .' ><a '. ($price == 'desc' ? 'style="font-weight: bold" class="text-danger"' : '') .' href="'. _URL_HOME .'/new'.$function->createParameter(array('price' => 'desc', 'gender' => $parameter['gender'], 'page' => $parameter['page'])).'">GIÁ GIẢM DẦN</a></li><li '. ($price == 'asc' ? 'class="active"' : '') .' ><a '. ($price == 'asc' ? 'style="font-weight: bold" class="text-danger"' : '') .' href="'. _URL_HOME .'/new'.$function->createParameter(array('price' => 'asc', 'gender' => $parameter['gender'], 'page' => $parameter['page'])).'">GIÁ TĂNG DẦN</a></li>';
        $text_price_del_option  = '<a href="'. _URL_HOME .'/new'. $function->createParameter(array('gender' => $parameter['gender'], 'page' => $parameter['page'])) .'" class="btn-link-02">Xóa lựa chọn</a>';
        $text_gender_sort       = '<li '. ($gender == 'make' ? 'class="active"' : '') .' ><a '. ($gender == 'make' ? 'style="font-weight: bold" class="text-danger"' : '') .' href="'. _URL_HOME .'/new'.$function->createParameter(array('price' => $parameter['price'], 'gender' => 'make', 'page' => $parameter['page'])).'">NAM</a></li><li '. ($gender == 'femake' ? 'class="active"' : '') .' ><a '. ($gender == 'femake' ? 'style="font-weight: bold" class="text-danger"' : '') .' href="'. _URL_HOME .'/new'.$function->createParameter(array('price' => $parameter['price'], 'gender' => 'femake', 'page' => $parameter['page'])).'">NỮ</a></li>';
        $text_gender_del_option = '<a href="'. _URL_HOME .'/new'. $function->createParameter(array('price' => $parameter['price'], 'page' => $parameter['page'])) .'" class="btn-link-02">Xóa lựa chọn</a>';
        $text_brackcrum         = 'Sản phẩm mới đăng';

        // Product Where
        $product_where                      = array();
        $product_where['product_status !='] = 0;
        if(in_array($gender, array('make', 'femake'))){
            $product_where['product_gender'] = $gender == 'make' ? 1 : 2;
        }
        // Product Where

        // Config Pagination
        $db->select('product_id')->from(_TABLE_PRODUCT)->where($product_where)->fetch();
        $product_count              =   $db->affected_rows;
        $pagination['page_row']     = _CONFIG_PAGINATION_PRODUCT;
        $pagination['page_num']     = ceil($product_count/$pagination['page_row']);
        if($page > $pagination['page_num']){
            $function->redirect(_URL_HOME.'/new'.$function->createParameter(array('price' => $parameter['price'], 'gender' => $parameter['gender'])));
        }
        $pagination['url']          = _URL_HOME.'/new'.$function->createParameter(array('price' => $parameter['price'], 'gender' => $parameter['gender'], 'page' => '{page}'));
        $page_start                 = ($page-1) * $pagination['page_row'];
        // Config Pagination

        // Data
        $db->from(_TABLE_PRODUCT)->where($product_where);
        $db->order_by('product_id', 'DESC');
        $db->limit(_CONFIG_PAGINATION_PRODUCT, $page_start);
        $db->order_by('product_id', 'DESC');
        $data = $db->fetch();
        // Data

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
            <li><?=$text_brackcrum?></li>
        </ul>
    </div>
</div>
<div id="tt-pageContent">
    <div class="container-indent">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-lg-3 col-xl-3 leftColumn aside">
                    <div class="tt-btn-col-close">
                        <a href="#">Close</a>
                    </div>
                    <div class="tt-collapse open tt-filter-detach-option">
                        <div class="tt-collapse-content">
                            <div class="filters-mobile">
                                <div class="filters-row-select">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tt-collapse open ">
                        <h3 class="tt-collapse-title">LỌC THEO GIÁ</h3>
                        <div class="tt-collapse-content">
                            <ul class="tt-filter-list"><?=$text_price_sort?></ul>
                            <?=$text_price_del_option?>
                        </div>
                    </div>
                    <div class="tt-collapse open ">
                        <h3 class="tt-collapse-title">GIỚI TÍNH</h3>
                        <div class="tt-collapse-content">
                            <ul class="tt-filter-list"><?=$text_gender_sort?></ul>
                            <?=$text_gender_del_option?>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-9 col-xl-9">
                    <div class="content-indent container-fluid-custom-mobile-padding-02">
                        <div class="tt-filters-options">
                            <h1 class="tt-title"><?=$header['title']?> <span class="tt-title-total">(<?=$product_count?>)</span></h1>
                            <div class="tt-quantity">
                                <a href="#" class="tt-col-one" data-value="tt-col-one"></a>
                                <a href="#" class="tt-col-two" data-value="tt-col-two"></a>
                                <a href="#" class="tt-col-three" data-value="tt-col-three"></a>
                                <a href="#" class="tt-col-four" data-value="tt-col-four"></a>
                                <a href="#" class="tt-col-six" data-value="tt-col-six"></a>
                            </div>
                        </div>
                        <?php
                        if(count($data) == 0){
                            ?>
                            <div id="tt-pageContent">
                                <div class="tt-offset-0 container-indent">
                                    <div class="tt-page404">
                                        <h1 class="tt-title">KHÔNG CÓ SẢN PHẨM ĐỂ HIỂN THỊ.</h1>
                                        <p>Không có sản phẩm nào để hiển thị, vui lòng kiểm tra lại hoặc gửi thông đến BQT, cảm ơn bạn.</p>
                                        <a href="<?=_URL_HOME?>" class="btn">TRANG CHỦ</a>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                        ?>
                        <div class="tt-product-listing row">
                            <?php
                            foreach ($data as $product_list) {
                                echo $function->getProduct($product_list['product_id'], array('type' => 'home', 'layout' => 'col-6 col-md-4 tt-col-item'));
                            }
                            ?>
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
