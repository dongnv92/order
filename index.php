<?php
/**
 * Created by PhpStorm.
 * User: nguye
 * Date: 2018-12-04
 * Time: 21:28
 */
require_once 'includes/core.php';

echo file_get_contents(_URL_HOME.'/api/?act=get_tmall&url='.urlencode('https://detail.tmall.com/item.htm?spm=a220m.1000858.1000725.159.657a6cb3l3bHoc&id=552653781485&user_id=2081299183&cat_id=50106420&is_b=1&rn=1865c1f249cc964d349b65734f51ea4d'));