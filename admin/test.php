<?php
/**
 * Created by PhpStorm.
 * User: DONG
 * Date: 2018-12-14
 * Time: 14:30
 */
require_once '../includes/core.php';
echo $db->select()->from(_TABLE_PRODUCT)->where('product_id', 3)->execute()->affected_rows;