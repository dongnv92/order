<?php
/**
 * Created by PhpStorm.
 * User: DONG
 * Date: 2018-12-06
 * Time: 15:25
 */
require_once '../includes/core.php';
switch ($act){
    case 'delete_media':
        // Check id media
        $media = $db->select('media_source, media_store')->from(_TABLE_MEDIA)->where('media_id', $id)->fetch_first();
        if(!$media){
            $response['response']   = 404;
            $response['message']    = 'Thư viện không tồn tại';
            echo json_encode($response);
            break;
        }
        // Xóa Media
        if($media['media_store'] == 'local'){
            unlink('../'.$media['media_source']);
        }
        if(!$db->delete()->from(_TABLE_MEDIA)->where('media_id', $id)->execute()){
            $response['response']   = 400;
            $response['message']    = 'Lỗi SQL không xóa được media';
            echo json_encode($response);
            break;
        }
        $response['response']   = 200;
        $response['message']    = 'Xóa Media thành công';
        echo json_encode($response);
        break;
    case 'trash_product':
        // Check id product
        if(!$id || $db->select('product_id')->from(_TABLE_PRODUCT)->where('product_id', $id)->execute()->affected_rows == 0){
            $response['response']   = 404;
            $response['message']    = 'Sản phẩm không tồn tại';
            echo json_encode($response);
            break;
        }
        // Update Product
        if(!$db->where('product_id', $id)->update(_TABLE_PRODUCT, array('product_status' => 0))){
            $response['response']   = 400;
            $response['message']    = 'Có lỗi SQL';
            echo json_encode($response);
            break;
        }
        $response['response']   = 200;
        $response['message']    = 'Đưa sản phẩm vào thùng rác thành công';
        echo json_encode($response);
        break;
    case 'add_product':
        $product                                = file_get_contents(_URL_HOME.'/api/?act=get_tmall&url='.urlencode($url));
        $product                                = json_decode($product, true);
        $response                               = array();
        $response['product_price_default']      = trim($product['product_price_default']);
        $response['product_price_promotion']    = trim($product['product_price_promotion']);
        $response['product_price_vn']           = trim($response['product_price_promotion'] * 3500);
        $response['product_url']                = trim($product['product_url']);
        $response['response']                   = trim($product['response']);
        $response['product_images']             = $product['product_images'];
        $response['product_size']               = $product['product_size'];
        $response['product_color']              = $product['product_color'];
        foreach ($response['product_images'] AS $images){
            $response['images'] .= '<img src="'. $images .'" class="col-md-4 text-center" style="height: 85px"><input type="hidden" name="product_images[]" value="'. $images .'">';
        }
        foreach ($response['product_color'] AS $color){
            $response['color'] .= '<fieldset>
            <div class="row">
                <div class="col-6 text-left"><input type="checkbox" checked name="product_color[]" id="'. $color .'" value="'. $color .'"></div>
                <div class="col-6 text-right"><label for="'. $color .'"><img src="'. $color .'" width="50px" height="50px" class="round"></label></div>
            </div>
            </fieldset>';
        }
        $response['color'] .= '<script src="app-assets/vendors/js/forms/icheck/icheck.min.js" type="text/javascript"></script><script src="app-assets/js/scripts/forms/checkbox-radio.js" type="text/javascript"></script>';
        foreach ($response['product_size'] AS $size){
            $response['size'] .= '<fieldset>
            <div class="row">
                <div class="col-6 text-left"><input type="checkbox" checked name="product_size[]" id="'. $size .'" value="'. $size .'"></div>
                <div class="col-6 text-right"><label for="'. $size .'">'. $size .'</label></div>
            </div>
            </fieldset>';
        }
        $response['size'] .= '<script src="app-assets/vendors/js/forms/icheck/icheck.min.js" type="text/javascript"></script><script src="app-assets/js/scripts/forms/checkbox-radio.js" type="text/javascript"></script>';
        echo json_encode($response);
        break;
}