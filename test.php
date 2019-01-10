<?php
require_once 'includes/core.php';

if($function->checkData(_TABLE_CATEGORY,array('category_id' => 200))){
    echo "Có dữ liệu";
}else{
    echo "Không có dữ liệu";
}