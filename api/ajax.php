<?php
/**
 * Created by PhpStorm.
 * User: DONG
 * Date: 2018-12-06
 * Time: 15:25
 */
require_once '../includes/core.php';
switch ($act){
    case 'add_product':
        $product                                = file_get_contents(_URL_HOME.'/api/?act=get_tmall&url='.urlencode($url));
        $product                                = json_decode($product, true);
        $response                               = array();
        $response['product_price_default']      = $product['product_price_default'];
        $response['product_price_promotion']    = $product['product_price_promotion'];
        $response['product_price_vn']           = $response['product_price_promotion'] * 3500;
        $response['product_url']                = $product['product_url'];
        $response['response']                   = $product['response'];
        $response['product_images']             = $product['product_images'];
        $response['product_size']               = $product['product_size'];
        $response['product_color']              = $product['product_color'];
        foreach ($response['product_images'] AS $images){
            $response['images'] .= '<img src="'. $images .'" class="col-md-4 text-center" style="height: 85px"><input type="hidden" name="product_images[]" value="'. $images .'">';
        }
        foreach ($response['product_color'] AS $color){
            $response['color'] .= '<fieldset>
            <div class="row">
                <div class="col-6 text-left"><input type="checkbox" checked name="product_color[]" id="'. $size .'" value="'. $size .'"></div>
                <div class="col-6 text-right"><label for="'. $size .'">'. $size .'</label></div>
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