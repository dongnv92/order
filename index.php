<?php
/**
 * Created by PhpStorm.
 * User: nguye
 * Date: 2018-12-04
 * Time: 21:28
 */
require_once 'includes/core.php';

echo file_get_contents(_API.'/?act=get_tmall&url='.urlencode('https://detail.tmall.com/item.htm?spm=a220m.1000858.1000725.155.4a1d53d4j6EiWZ&id=566038532115&user_id=2926923597&cat_id=50105988&is_b=1&rn=9f2c3128a5c5f69d98da490940dc6656&sku_properties=1627207:960053987'));