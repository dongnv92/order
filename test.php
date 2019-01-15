<?php
require_once 'includes/core.php';

$para = array('id' => 8, 'price' => 'desc', 'hehe' => '');
echo $function->createParameter($para);