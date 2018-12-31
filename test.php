<?php
require_once 'includes/core.php';

$db->select()->from(_TABLE_METADATA);
$db->join(_TABLE_PRODUCT, 'dong_product.product_id = dong_metadata.metadata_value');
$db->where(array('metadata_type' => 'category_product', 'metadata_suorce' => 2, 'dong_product.product_id' => 2));
$data = $db->fetch();
print_r($data);