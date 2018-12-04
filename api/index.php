<?php
require_once '../includes/core.php';
switch ($act){
    case 'get_tmall':
        require_once '../includes/class/simple_html_dom.php';
        $html                               = file_get_html($url);
        $response                           = array();
        $response['product_url']            = $html->find('link[rel=canonical]', 0)->href;
        $images                             = $html->find('ul[id=J_UlThumb] li a img');
        $sizes                              = $html->find('.tb-sku ul li a span');
        $colors                             = $html->find('dl[class=tm-img-prop] ul li a');
        preg_match('/defaultItemPrice\":\"(.*)\",\"globalSellItem\"/m', $html, $match);
        $response['product_price_default']  = $match[1];
        $url_parse                          = parse_url($url);
        parse_str($url_parse['query'], $query);
        $response['product_id']             = $query['id'];
        $response['ref_taobao']             = $html->find('link[rel=alternate]',0)->href;
        foreach ($images AS $image){
            $picture = 'https:'.$image->src;
            $picture = str_replace('60x60', '500x500', $picture);
            $response['images'][] = $picture;
        }
        $array_size = array();
        for($i = 0; $i < (count($sizes) - (count($colors) + 1)); $i++){
            $response['size'][] = trim($sizes[$i]->plaintext);
        }
        foreach ($colors AS $color){
            $colorr = str_replace(array('background:url(', ') center no-repeat;','40x40'), array('','','500x500'),$color->style);
            $response['color'][] = 'https:'.$colorr;
        }
        $html_taobao                        = file_get_html($response['ref_taobao']);
        $response['product_price_promotion']= trim($html_taobao->find('.price span[class=promotionPrice]', 0)->plaintext);
        $response['product_price_promotion']= str_replace('&yen', '', $response['product_price_promotion']);
        $response['response'] = 200;
        //echo json_encode($response);
        echo "<pre>";
        print_r($response);
        echo "<pre>";
        break;
    case 'get_taobao':
        require_once '../includes/class/simple_html_dom.php';
        $html                               = file_get_html($url);
        $response                           = array();
        $response['product_price']          = trim($html->find('.price span[class=promotionPrice]', 0)->plaintext);
        $response['product_price']          = str_replace('&yen', '', $response['product_price']);
        $i                                  = 0;
        foreach ($html->find('.thumbPic li img') as $images){
            if($i > 1){
                $images->src = str_replace('50x50', '500x500', $images->src);
                $response['product_images'][]   = 'https:'.$images->src;
            }
            $i++;
        }
        echo "<pre>";
        print_r($response);
        echo "</pre>";
        break;
    default:
        $response = array();
        $response['response']   = 200;
        $response['message']    = 'Default Page';
        break;
}
