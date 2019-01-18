<?php
/**
 * Created by PhpStorm.
 * User: DONG
 * Date: 2018-12-06
 * Time: 09:50
 */

class orderFunction{

    // Tạo Mã Token
    function createToken(){
        $key_start  = 'DONG';
        $key_time   = _CONGIF_TIME;
        $key_end    = 'CHINH';
        return md5(md5($key_start.$key_time.$key_end));
    }

    // Kiểm tra mã token
    function checkToken($token){
        $arr_token = array();
        for ($i = 0; $i <= 60; $i++){
            $time_c         = time() + $i;
            $time_t         = time() - $i;
            $key_start      = 'DONG';
            $key_end        = 'CHINH';
            $arr_token[]    = md5(md5($key_start.$time_c.$key_end));
            $arr_token[]    = md5(md5($key_start.$time_t.$key_end));
        }
        if(in_array($token, $arr_token)){
            return true;
        }else{
            return false;
        }
    }

    // Tính tổng tiền trong giỏ hàng
    function sumPriceCart(){
        global $db;
        $count = 0;
        foreach ($_SESSION['cart'] as $detail){
            $product = $db->select('product_price_vn')->from(_TABLE_PRODUCT)->where('product_id', $detail['productId'])->fetch_first();
            $count += ($product['product_price_vn'] * $detail['quantily']);
        }
        return $count;
    }

    // Kiểm tra với xem dữ liệu trong array có tồn tại không
    function checkArray($array, $key, $value){
        $num = array_search($value, array_column($array, $key));
        if(is_numeric($num)){
            return true;
        }else{
            return false;
        }
    }

    // Tạo url chứa các Parameter
    function createParameter($parameter){
        $text = '';
        if(count($parameter) == 1){
            foreach ($parameter as $key => $value){
                if(isset($value) && !empty($value)){
                    $text .= urlencode($key).'='.urlencode($value);
                }
            }
            return '?'.$text;
        }
        $list_para = array();
        foreach ($parameter as $key => $value){
            if(isset($value) && !empty($value)) {
                $list_para[] = urlencode($key) . '=' . urlencode($value);
            }
        }
        $text = '?'.implode('&', $list_para);
        $text = str_replace(array('%7B','%7D'), array('{','}'), $text);
        $text = $text == '?' ? '' : $text;
        return $text;
    }

    // Lấy đường dẫn Categry
    function getUrlCategory($id){
        global $db;
        $category = $db->select('category_url')->from(_TABLE_CATEGORY)->where('category_id', $id)->fetch_first();
        if(!$category){
            return false;
        }
        return _URL_HOME.'/category/'.$category['category_url'].'.html';
    }

    // Lấy danh sách ID chuyên mục con từ 1 chuyên mục
    function getListCategory($category){
        global $db;
        if(!$this->checkData(_TABLE_CATEGORY, array('category_id' => $category))){
            return false;
        }
        $list_category      = array();
        $list_category[]    = $category;
        $cate_parents       = $db->select('category_id')->from(_TABLE_CATEGORY)->where('category_parent', $category)->fetch();
        if($cate_parents){
            foreach ($cate_parents AS $cate_parent){
                $list_category[] = $cate_parent['category_id'];
                $cate_parents_1  = $db->select('category_id')->from(_TABLE_CATEGORY)->where('category_parent', $cate_parent['category_id'])->fetch();
                if($cate_parents_1){
                    foreach ($cate_parents_1 AS $cate_parent_1){
                        $list_category[] = $cate_parent_1['category_id'];
                    }
                }
            }
        }
        return $list_category;
    }

    // Sắp xếp mảng đa chiều
    function sortMultiArray($array, $keySort, $sort = SORT_DESC){
        $sortArray = array();
        foreach($array as $arrays){
            foreach($arrays as $key=>$value){
                if(!isset($sortArray[$key])){
                    $sortArray[$key] = array();
                }
                $sortArray[$key][] = $value;
            }
        }
        array_multisort($sortArray[$keySort], $sort, $array);
        return $array;
    }

    // Function hiển thị tiền thêm dấu chấm
    function convertNumberMoney($number){
        return number_format($number, 0,'', '.');
    }

    // Function chuyển hướng đến trang khác
    function redirect($url){
        if(!$url){
            return false;
        }
        header('location:'.$url);
    }

    function checkData($table, $data){
        global $db;
        $check = $db->select()->from($table)->where($data)->fetch_first();
        if($check){
            return true;
        }else{
            return false;
        }
    }

    function getUrlProduct($id){
        global $db;
        $product    = $db->select('product_url')->from(_TABLE_PRODUCT)->where('product_id', $id)->fetch_first();
        if(!$product){
            return false;
        }
        return _URL_PRODUCT.'/'.$product['product_url'].'.html';
    }

    // Function hiển thị chuyên mục đệ quy
    function showCategories($categories, $parent_id = 0, $char = '', $display = 'table', $option = ''){
        global $db;
        foreach ($categories as $key => $item) {
            if ($item['category_parent'] == $parent_id){
                if($display == 'table'){
                    echo '<tr id="tr_'. $item['category_id'] .'">
                    <td width="80%">'. $char . $item['category_name'] .'</td>
                    <td class="text-right"><a title="delete" class="btn btn-outline-danger round btn-sm" id="'. $item['category_id'] .'" href="javascript:;">Xóa</a>
                    </td>
                    </tr>';
                }else if($display == 'select'){
                    if($option['selected'] == $item['category_id']){
                        $selected = 'selected';
                    }
                    echo '<option '. $selected .' value="'. $item['category_id'] .'" id="option_'. $item['category_id'] .'">'. $char . $item['category_name'] .'</option>';
                }
                unset($categories[$key]);
                $this->showCategories($categories, $item['category_id'], $char.' |--- ', $display, $option);
            }
        }
    }

    // Kiểm tra xem đã bấm File Upload chưa
    public function checkUpload($name_input_file){
        if(!file_exists($_FILES[$name_input_file]['tmp_name']) || !is_uploaded_file($_FILES[$name_input_file]['tmp_name'])) {
            return false;
        }else{
            return true;
        }
    }

    // Tạo ngẫu nhiên các ký tự
    public function randomString($length = 10){
        $random_string = substr(str_shuffle("_0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length);
        return $random_string;
    }

    // Function tạo đường dẫn từ 1 đoạn text
    public function makeSlug($text){
        return preg_replace('/[^A-Za-z0-9 -]+/', '-', $this->convertSlug($text));
    }

    private function convertSlug($string, $url = 1) {
        if(!$string) return false;
        $utf8 = array(
            'a'=>'á|à|ả|ã|ạ|ă|ắ|ặ|ằ|ẳ|ẵ|â|ấ|ầ|ẩ|ẫ|ậ|Á|À|Ả|Ã|Ạ|Ă|Ắ|Ặ|Ằ|Ẳ|Ẵ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ',
            'd'=>'đ|Đ',
            'e'=>'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ|É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ',
            'i'=>'í|ì|ỉ|ĩ|ị|Í|Ì|Ỉ|Ĩ|Ị',
            'o'=>'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ|Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ',
            'u'=>'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự|Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự',
            'y'=>'ý|ỳ|ỷ|ỹ|ỵ|Ý|Ỳ|Ỷ|Ỹ|Ỵ',
        );
        foreach($utf8 as $ascii=>$uni) $string = preg_replace("/($uni)/i",$ascii,$string);
        $string = ($url == 1) ? $this->utf8Url($string) : $string;
        return $string;
    }

    private function utf8Url($string){
        $string = strtolower($string);
        $string = str_replace( "ß", "ss", $string);
        $string = str_replace( "%", "", $string);
        $string = preg_replace("/[^_a-zA-Z0-9 -]/", "",$string);
        $string = str_replace(array('%20', ' '), '-', $string);
        $string = str_replace("----","-",$string);
        $string = str_replace("---","-",$string);
        $string = str_replace("--","-",$string);
        return $string;
    }

    private function createPaginationUrl($url, $page){
        $url = str_replace('{page}', $page, $url);
        return $url;
    }

    public function pagination($config = ''){
        $link = '';
        global $page;
        for($i=$page;$i<=($page+4) && $i<= $config['page_num'] ;$i++){
            if($page==$i){
                $link = '<li class="page-item active"><a href="javascript:;" class="page-link">'.$i.'</a></li>';
            }else{
                $link = $link.'<li class="page-item"><a href="'. $this->createPaginationUrl($config['url'], $i) .'" class="page-link">'.$i.'</a></li>';
            }
        }
        if($page>4){
            $page4 = '<li class="page-item"><a href="'. $this->createPaginationUrl($config['url'], ($page-4)) .'" class="page-link">'.($page-4).'</a></li>';
        }
        if($page>3){
            $page3 = '<li class="page-item"><a href="'. $this->createPaginationUrl($config['url'], ($page-3)) .'" class="page-link">'.($page-3).'</a></li>';
        }
        if($page>2){
            $page2 = '<li class="page-item"><a href="'. $this->createPaginationUrl($config['url'], ($page-2)) .'" class="page-link">'.($page-2).'</a></li>';
        }
        if($page>1){
            $page1 = '<li class="page-item"><a href="'. $this->createPaginationUrl($config['url'], ($page-1)) .'" class="page-link">'.($page-1).'</a></li>';
            $link1 = '<li class="page-item" class="page-link" aria-label="Previous"><a href="'. $this->createPaginationUrl($config['url'], ($page-1)) .'" class="page-link"><span aria-hidden="true">« Trang sau</span><span class="sr-only">Previous</span></a></li>';
        }
        if($page < $config['page_num']){
            $link2 = '<li class="page-item"><a href="'. $this->createPaginationUrl($config['url'], ($page+1)) .'" class="page-link" aria-label="Next"><span aria-hidden="true">Trang tiếp »</span><span class="sr-only">Next</span></a></li>';
        }
        $linked = $page4.$page3.$page2.$page1;
        if($page < $config['page_num']-4){
            $page_end_pt='<li class="page-item"><a href="'. $this->createPaginationUrl($config['url'], $config['page_num']) .'" class="page-link">'.$config['page_num'].'</a></li>';
        }
        if($page>5){
            $page_start_pt =' <li class="page-item"><a href="'.$config['url'].'" class="page-link">1</a></li>';
        }
        if($config['page_num']>1 && $page<=$config['page_num']){
            return '<ul class="pagination justify-content-center pagination-separate">'.$link1.$page_start_pt.$linked.$link.$page_end_pt.$link2.'</ul>';
        }else{
            return false;
        }
    }

    public function paginationListProduct($config = ''){
        $link = '';
        global $page;
        for($i=$page;$i<=($page+4) && $i<= $config['page_num'] ;$i++){
            if($page==$i){
                $link = '<li class="active"><a href="javascript:;">'.$i.'</a></li>';
            }else{
                $link = $link.'<li><a href="'. $this->createPaginationUrl($config['url'], $i) .'">'.$i.'</a></li>';
            }
        }
        if($page>4){
            $page4 = '<li><a href="'. $this->createPaginationUrl($config['url'], ($page-4)) .'">'.($page-4).'</a></li>';
        }
        if($page>3){
            $page3 = '<li><a href="'. $this->createPaginationUrl($config['url'], ($page-3)) .'">'.($page-3).'</a></li>';
        }
        if($page>2){
            $page2 = '<li><a href="'. $this->createPaginationUrl($config['url'], ($page-2)) .'">'.($page-2).'</a></li>';
        }
        if($page>1){
            $page1 = '<li><a href="'. $this->createPaginationUrl($config['url'], ($page-1)) .'" class="page-link">'.($page-1).'</a></li>';
            $link1 = '<a href="'. $this->createPaginationUrl($config['url'], ($page-1)) .'" class="btn-pagination btn-prev"></a>';
        }
        if($page < $config['page_num']){
            $link2 = '<a href="'. $this->createPaginationUrl($config['url'], ($page+1)) .'" class="btn-pagination btn-next"></a>';
        }
        $linked = $page4.$page3.$page2.$page1;
        if($page < $config['page_num']-4){
            $page_end_pt='<li><a href="'. $this->createPaginationUrl($config['url'], $config['page_num']) .'">'.$config['page_num'].'</a></li>';
        }
        if($page>5){
            $page_start_pt =' <li><a href="'.$config['url'].'">1</a></li>';
        }
        if($config['page_num']>1 && $page<=$config['page_num']){
            return '<div class="tt-pagination">'. $link1 .'<ul>'.$page_start_pt.$linked.$link.$page_end_pt.'</ul>'. $link2 .'</div>';
        }else{
            return false;
        }
    }

    // Function hiển thị Breadcrumbs trong trang admin
    function breadcrumbs($title = '', $page = ''){
        $text = '
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-1">
                <h3 class="content-header-title">'. $title .'</h3>
            </div>
            <div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-12">
                <div class="breadcrumb-wrapper col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="'. _URL_ADMIN .'">Trang chủ</a></li>';
                        foreach ($page AS $url => $textlink){
                            $text .= '<li class="breadcrumb-item"><a href="'. $url .'">'. $textlink .'</a></li>';
                        }
                    $text .= '</ol>
                </div>
            </div>
        </div>';
        return $text;
    }

    // Function hiển thị thông báo lỗi
    function getPanelError($option = ''){
        $text = '<div class="content-body">
            <section class="flexbox-container">
                <div class="col-12 d-flex align-items-center justify-content-center">
                    <div class="col-md-4 col-10 p-0">
                        <div class="card-header bg-transparent border-0">
                            <h2 class="error-code text-center mb-2">'. $option['title'] .'</h2>
                            <h3 class="text-uppercase text-center">'. $option['content'] .'</h3>
                        </div>
                        <div class="card-content">
                            <div class="row py-2">
                                <div class="col-12 col-sm-6 col-md-6">
                                    <a href="'. _URL_ADMIN .'" class="btn btn-primary btn-block"><i class="ft-home"></i> Trang Chủ</a>
                                </div>
                                <div class="col-12 col-sm-6 col-md-6">
                                    <a href="'. _URL_BACK .'" class="btn btn-danger btn-block"><i class="ft-search"></i>  Quay Lại</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>';
        return $text;
    }

    // Function hiển thị các thông báo nhỏ
    function getAlert($type = 'success', $content){
        switch ($type){
            case 'success':
                return '<div class="alert round bg-success alert-icon-left alert-dismissible mb-2" role="alert"><span class="alert-icon"><i class="la la-thumbs-o-up"></i></span><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>'. $content .'</div>';
                break;
            case 'help_error':
                return '<p class="text-left"><small class="text-muted text-danger">'. $content .'</small></p>';
                break;
        }
    }

    // Hiển thị thời gian, với thời gian nhập vào là timestam
    public function getTimeDisplay($time){
        return date('H:i:s d/m/Y', $time);
    }

    // Class chung của form
    function form_style($type){
        switch ($type){
            case 'text_input':
                return 'form-control round border-blue';
                break;
            case 'button':
                return 'btn btn-outline-blue round';
                break;
        }
    }

    // Hiển thị giỏ hàng trên Menu
    function getProductInMenu(){
        global $db;
        $cart['count_cart'] = count($_SESSION['cart']);
        $text = '
        <!-- tt-cart -->
        <div class="tt-cart tt-dropdown-obj" id="product_cart_first" data-tooltip="GIỎ HÀNG" data-tposition="bottom">
            <button class="tt-dropdown-toggle"><i class="icon-f-39"></i><span class="tt-badge-cart">'. $cart['count_cart'] .'</span></button>
            <div class="tt-dropdown-menu">
                <div class="tt-mobile-add">
                    <h6 class="tt-title">GIỎ HÀNG</h6>
                    <button class="tt-close">ĐÓNG</button>
                </div>
                <div class="tt-dropdown-inner">
                    <div class="tt-cart-layout">';
                        if($cart['count_cart'] == 0){
                            $text .= '<a href="'. _URL_HOME .'" class="tt-cart-empty"><i class="icon-f-39"></i><p>Chưa có sản phẩm nào trong giỏ hàng</p></a>';
                        }else{
                            $text .= '
                            <div class="tt-cart-content">
                                <div class="tt-cart-list">';
                                    $i = 1;
                                    foreach ($_SESSION['cart'] as $list_cart){
                                        if($i <= 5){
                                            $product        = $db->select()->from(_TABLE_PRODUCT)->where('product_id', $list_cart['productId'])->fetch_first();
                                            $images_product = $db->select('media_source')->from(_TABLE_MEDIA)->where(array('media_type' => 'images_product', 'media_store' => 'local', 'media_parent' => $product['product_id']))->fetch_first();;
                                            $text .='
                                            <div class="tt-item">
                                                <a href="'. $this->getUrlProduct($product['product_id']) .'">
                                                    <div class="tt-item-img"><img src=" '. _URL_HOME.'/'.$images_product['media_source'].'" data-src="'. _URL_HOME.'/'.$images_product['media_source'].'"></div>
                                                    <div class="tt-item-descriptions">
                                                        <h2 class="tt-title">'. $product['product_name'] .'</h2>
                                                        <div class="tt-quantity">'. $list_cart['quantily'] .' X</div> <div class="tt-price">'. $this->convertNumberMoney($product['product_price_vn']) .'₫</div>
                                                    </div>
                                                </a>
                                                <div class="tt-item-close"><a href="'. _URL_API .'/?act=cart&type=delete_product&id='. $list_cart['productId'] .'&token='. $this->createToken() .'" class="tt-btn-close"></a></div>
                                            </div>';
                                        }
                                        $i++;
                                    }
                                $text .= '
                                </div>
                                <div class="tt-cart-total-row">
                                    <div class="tt-cart-total-title">TỔNG TIỀN:</div>
                                    <div class="tt-cart-total-price">'. $this->convertNumberMoney($this->sumPriceCart()) .'đ</div>
                                </div>
                                <div class="tt-cart-btn">
                                    <div class="tt-item"><a href="'. _URL_CART .'" class="btn">XEM GIỎ HÀNG</a></div>
                                    <div class="tt-item">
                                        <a href="'. _URL_CART .'" class="btn-link-02 tt-hidden-mobile">THANH TOÁN</a>
                                        <a href="'. _URL_CART .'" class="btn btn-border tt-hidden-desctope">THANH TOÁN</a>
                                    </div>
                                </div>
                            </div>';
                        }
                    $text .= '
                    </div>
                </div>
            </div>
        </div>
        <!-- /tt-cart -->';
        return $text;
    }

    // Hiển thị chi tiết sản phẩm
    function getProduct($productId, $option = ''){
        global $db;
        $text = '';
        $product = $db->select()->from(_TABLE_PRODUCT)->where('product_id', $productId)->fetch_first();
        $images_1 = $db->select('media_id, media_source')->from(_TABLE_MEDIA)->where(array('media_type' => 'images_product', 'media_store' => 'local', 'media_parent' => $product['product_id']))->fetch_first();
        $images_2 = $db->select('media_source')->from(_TABLE_MEDIA)->where(array('media_type' => 'images_product', 'media_store' => 'local', 'media_parent' => $product['product_id'], 'media_id <>' => $images_1['media_id']))->fetch_first();
        $product_category = $db->select('category_id, category_name')->from(_TABLE_CATEGORY)->where(array('category_id' => $product['product_category']))->fetch_first();
        if($option['type'] == 'home'){
            $text .= '
            <!-- Product Detail -->
            <div class="'. $option['layout'] .'">
                <div class="tt-product thumbprod-center">
                    <div class="tt-image-box">
                        <a href="#" class="tt-btn-wishlist" data-tooltip="Yêu Thích" data-tposition="left"></a>
                        <a href="'. $this->getUrlProduct($productId) .'">
                            <span class="tt-img"><img src="'. _URL_HOME .'/'.$images_1['media_source'].'" alt=""></span>
                            <span class="tt-img-roll-over"><img src="'. _URL_HOME .'/'. $images_2['media_source'] .'" alt=""></span>
                            '. ($product['product_sale'] > 0 ? '<span class="tt-label-location"><span class="tt-label-new">Giảm giá '. $product['product_sale'] .'%</span></span>' : '') .'
                        </a>
                    </div>
                    <div class="tt-description">
                        <div class="tt-row"><ul class="tt-add-info"><li><a href="'. $this->getUrlCategory($product_category['category_id']).'">'. $product_category['category_name'] .'</a></li></ul></div>
                        <h2 class="tt-title"><a href="'. $this->getUrlProduct($product['product_id']) .'">'. $product['product_name'] .'</a></h2>
                        <div class="tt-price">'. $this->convertNumberMoney($product['product_price_vn']) .'₫</div>
                        <div class="tt-product-inside-hover">
                            <div class="tt-row-btn">
                                <a href="javascript:;" class="tt-btn-addtocart thumbprod-button-bg" data-toggle="modal" data-target="#modalAddToCartProduct_'. $product['product_id'] .'" data-content="'. $product['product_id'] .'" data-label="addToCart">THÊM VÀO GIỎ HÀNG</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product Detail -->
            
            <!-- Product Modal -->
            <div class="modal  fade"  id="modalAddToCartProduct_'. $product['product_id'] .'" tabindex="-1" role="dialog" aria-label="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content ">
                        <div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="icon icon-clear"></span></button></div>
                        <div class="modal-body">
                            <div class="tt-modal-addtocart mobile">
                                <div class="tt-modal-messages"><i class="icon-f-68"></i>Đã thêm sản phẩm vào giỏ hàng</div>
                                <a href="#" class="btn-link btn-close-popup">Tiếp tục mua hàng</a>
                                <a href="page404.html" class="btn-link">XEM GIỎ HÀNG</a>
                            </div>
                            <div class="tt-modal-addtocart desctope">
                                <div class="row">
                                    <div class="col-12 col-lg-6">
                                        <div class="tt-modal-messages"><i class="icon-f-68"></i>Đã thêm sản phẩm vào giỏ hàng</div>
                                        <div class="tt-modal-product">
                                            <div class="tt-img"><img src="'. _URL_HOME .'/'. $images_1['media_source'] .'" data-src="'. _URL_HOME .'/'. $images_1['media_source'] .'" alt=""></div>
                                            <h2 class="tt-title"><a href="'. $this->getUrlProduct($product['product_id']) .'">'. $product['product_name'] .'</a></h2>
                                            <div class="tt-qty">Số lượng: <span>1</span></div>
                                        </div>
                                        <div class="tt-product-total"><div class="tt-total">GIÁ TIỀN: <span class="tt-price">'. $this->convertNumberMoney($product['product_price_vn']) .'đ</span></div></div>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <a href="#" class="tt-cart-total">Bạn có '. count($_SESSION['cart']) .' sản phẩm trong giỏ hàng
                                            <div class="tt-total">TỔNG TIỀN: <span class="tt-price">'. $this->convertNumberMoney($this->sumPriceCart() + $product['product_price_vn']) .'đ</span></div>
                                        </a>
                                        <a href="'. _URL_HOME .'/cart" class="btn btn-border btn-close-popup">XEM GIỎ HÀNG</a>
                                        <a href="'. _URL_HOME .'/cart" class="btn">THANH TOÁN</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product Modal -->
            ';
        }
        return $text;
    }
}