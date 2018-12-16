<?php
/**
 * Created by PhpStorm.
 * User: DONG
 * Date: 2018-12-14
 * Time: 14:30
 */
require_once '../includes/core.php';


do{
    $a = rand(1,4);
}while($a == 2);

echo $a;