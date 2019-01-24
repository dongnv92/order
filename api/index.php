<?php
require_once '../includes/core.php';
header('Content-Type: text/html; charset=utf-8');

if(!$token){
    echo '<center><h1>THIẾU MÃ TOKEN</h1>Thiếu mã Token, để thực hiện thao tác này, vui lòng liên hệ với BQT để lấy mã TOKEN. <a href="'. _URL_REFERER .'">Quay lại</a> </center>';
    exit();
}
if(!$function->checkToken($token)){
    echo '<center><h1>MÃ TOKEN KHÔNG ĐÚNG HOẶC HẾT HẠN</h1>Mã Token không đúng hoặc hết hạn, để thực hiện thao tác này, vui lòng liên hệ với BQT để lấy mã TOKEN. <a href="'. _URL_REFERER .'">Quay lại</a> </center>';
    exit();
}
switch ($act){
    case 'cart':
        switch ($type){
            case 'add':
                // Kiểm tra sản phẩm có tồn tại không?
                if(!$id || !$function->checkData(_TABLE_PRODUCT, array('product_id' => $id))){
                    echo '<center><h1>SẢN PHẨM KHÔNG TỒN TẠI HOẶC ĐÃ BỊ XÓA</h1>Sản phẩm không tồn tại trên hệ thống hoặc đã bị xóa. Vui lòng thử lại. <a href="'. _URL_REFERER .'">Quay lại</a> </center>';
                    exit();
                }

                $quantily       = isset($_GET['quantily'])      && !empty($_GET['quantily'])        ? $_GET['quantily']     : '';
                $type_quantily  = isset($_GET['type_quantily']) && !empty($_GET['type_quantily'])   ? $_GET['type_quantily']: '';
                $color          = isset($_GET['color'])         && !empty($_GET['color'])           ? $_GET['color']        : '';
                $size           = isset($_GET['size'])          && !empty($_GET['size'])            ? $_GET['size']         : '';
                $cartId         = isset($_GET['cartId'])        && !empty($_GET['cartId'])          ? $_GET['cartId']       : md5($id.($color ? '_'.$color : '').($size ? '_'.$size : ''));

                // Nếu sản phẩm đã có trong giỏ hàng thì cập nhập thêm số lượng
                if($function->checkArray($_SESSION['cart'], 'cartId', $cartId)){
                    foreach ($_SESSION['cart'] AS &$cart){
                        if($cart['cartId'] == $cartId){
                            $cart['quantily']               = $quantily ? $quantily : ($type_quantily == 'minus' ? ($cart['quantily'] >= 2 ? $cart['quantily'] - 1 : $cart['quantily']) : $cart['quantily'] + 1);
                        }
                    }
                }else{ // Nếu sản phẩm chưa có trong giỏ hàng thì thêm mới
                    $_SESSION['cart'][]             = array('productId' => $id, 'quantily' => $quantily ? $quantily : 1, 'color' => $color, 'size' => $size, 'cartId' => $cartId);
                }
                $function->redirect(_URL_REFERER);
                break;
            case 'delete_all':
                unset($_SESSION['cart']);
                $function->redirect(_URL_REFERER);
                break;
            case 'delete_product':
                $cartId = isset($_GET['cartId']) && !empty($_GET['cartId']) ? $_GET['cartId'] : '';
                // Check id product
                if(!$id || !$function->checkData(_TABLE_PRODUCT, array('product_id' => $id))){
                    $function->redirect(_URL_REFERER);
                    break;
                }

                if($function->checkArray($_SESSION['cart'], 'cartId', $cartId)){
                    foreach ($_SESSION['cart'] AS $key => $value){
                        if($value['cartId'] == $cartId){
                            unset($_SESSION['cart'][$key]);
                        }
                    }
                }
                $function->redirect(_URL_REFERER);
                break;
        }
        break;
    // Lấy danh sách các chuyên mục
    case 'get_list_product':
        switch ($type){
            case 'by_category':
                $category = (isset($_GET['category']) && !empty($_GET['category'])) ? $_GET['category'] : '';
                // Kiểm tra xem chuyên mục có tồn tại hay không?
                if(!$function->checkData(_TABLE_CATEGORY, array('product_id' => $category, 'product_type' => 'shop'))){
                    $response = array();
                    $response['response']   = 404;
                    $response['message']    = 'Category empty';
                    echo json_encode($response);
                    break;
                }


                break;
            default:
                $response = array();
                $response['response']   = 404;
                $response['message']    = 'Default Get List Product Page';
                echo json_encode($response);
                break;
        }
        break;
    case 'product':
        switch ($type){
            case 'update_status':
                $response = array();
                $product_status = isset($_REQUEST['product_status']) && !empty($_REQUEST['product_status']) ? $_REQUEST['product_status'] : '';
                // Kiểm tra đã truyền giá trị product status chưa
                if(!$product_status){
                    $response['response']   = 404;
                    $response['message']    = 'Miss product status value';
                    echo json_encode($response);
                    break;
                }
                // Check xem sản phẩm có tồn tại trên hệ thống không
                $db->select('product_id')->from(_TABLE_PRODUCT)->where('product_id', $id)->fetch_first();
                if($db->affected_rows == 0){
                    $response['response']   = 404;
                    $response['message']    = 'Product id wrong';
                    echo json_encode($response);
                    break;
                }
                // Update trạng thái sản phẩm
                if(!$db->where('product_id', $id)->update(_TABLE_PRODUCT, array('product_status' => $product_status))){
                    $response['response']   = 400;
                    $response['message']    = 'Cant update Product status ';
                    echo json_encode($response);
                    break;
                }
                $response['response']   = 200;
                $response['message']    = 'Update trạng thái sản phẩm thành công';
                echo json_encode($response);
                break;
            default:
                $response = array();
                $response['response']   = 404;
                $response['message']    = 'Default Product Page';
                echo json_encode($response);
                break;
        }
        break;
    case 'get_tmall':
        require_once '../includes/lib/simple_html_dom.php';
        $url_parse                          = parse_url($url);
        parse_str($url_parse['query'], $query);
        $html                               = file_get_html('https://detail.tmall.com/item.htm?id='.$query['id']);
        $response                           = array();
        $images                             = $html->find('ul[id=J_UlThumb] li a img');
        $sizes                              = $html->find('.tb-sku ul li a span');
        $colors                             = $html->find('dl[class=tm-img-prop] ul li a');
        preg_match('/defaultItemPrice\":\"(.*)\",\"globalSellItem\"/m', $html, $match);
        $url_parse                          = parse_url($url);
        foreach ($images AS $image){
            $picture = 'https:'.$image->src;
            $picture = str_replace('60x60', '500x500', $picture);
            $response['product_images'][] = $picture;
        }
        $array_size = array();
        for($i = 0; $i < (count($sizes) - (count($colors) + 1)); $i++){
            $response['product_size'][] = trim($sizes[$i]->plaintext);
        }
        foreach ($colors AS $color){
            $colorr = str_replace(array('background:url(', ') center no-repeat;','40x40'), array('','','500x500'),$color->style);
            $response['product_color'][] = 'https:'.$colorr;
        }
        $response['product_url']            = $html->find('link[rel=canonical]', 0)->href;
        $response['product_taobao']         = $html->find('link[rel=alternate]',0)->href;
        $response['product_price_default']  = $match[1];
        $response['product_price_default']  = explode('.', $response['product_price_default']);
        $response['product_price_default']  = $response['product_price_default'][0];
        $html_taobao                        = file_get_html($response['product_taobao']);
        $response['product_price_promotion']= trim($html_taobao->find('.price span[class=promotionPrice]', 0)->plaintext);
        $response['product_price_promotion']= str_replace('&yen', '', $response['product_price_promotion']);
        $response['product_price_promotion']= explode('.', $response['product_price_promotion']);
        $response['product_price_promotion']= $response['product_price_promotion'][0];
        $response['product_content']        = '';
        foreach ($html_taobao->find('img[align=absmiddle]') as $content){
            $response['product_content']   .= '<p><img src="'. $content->src .'" align="absmiddle"></p>';
        }
        $response['response'] = 200;
        echo json_encode($response);
        /*echo "<pre>";
        print_r($response);
        echo "<pre>";*/
        break;
    case 'get_taobao':
        require_once '../includes/lib/simple_html_dom.php';
        $html                               = file_get_html($url);
        $response                           = array();
        $response['product_price']          = trim($html->find('.price span[class=promotionPrice]', 0)->plaintext);
        $response['product_price']          = str_replace('&yen', '', $response['product_price']);
        $response['product_content']        = '';
        $i                                  = 0;
        foreach ($html->find('.thumbPic li img') as $images){
            if($i > 1){
                $images->src = str_replace('50x50', '500x500', $images->src);
                $response['product_images'][]   = 'https:'.$images->src;
            }
            $i++;
        }

        foreach ($html->find('img[align=absmiddle]') as $content){
            $response['product_content']   .= '<p><img src="'. $content->src .'" align="absmiddle"></p>';
        }


        echo "<pre>";
        print_r($response);
        echo "</pre>";
        //echo $html;
        break;
    default:
        $response = array();
        $response['response']   = 200;
        $response['message']    = 'Default Page';
        echo json_encode($response);
        break;
}
