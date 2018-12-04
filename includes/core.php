<?php
/**
 * Created by PhpStorm.
 * User: DONG
 * Date: 2018-12-04
 * Time: 14:41
 */
session_start();
error_reporting(0);
date_default_timezone_set('Asia/Ho_Chi_Minh');

// Get Parameter
$submit	    = $_POST['submit'];
$id 	    = isset($_REQUEST['id']) 	    ? abs(intval($_REQUEST['id'])) 	: false;
$page 	    = isset($_REQUEST['page']) 	    ? abs(intval($_REQUEST['page'])): 1;
$act 	    = isset($_REQUEST['act']) 	    ? trim($_REQUEST['act']) 		: '';
$type 	    = isset($_REQUEST['type']) 	    ? trim($_REQUEST['type']) 		: '';
$url 	    = isset($_REQUEST['url']) 	    ? trim($_REQUEST['url']) 		: '';
$controls   = isset($_REQUEST['controls']) 	? trim($_REQUEST['controls'])   : '';
$q          = isset($_REQUEST['q']) 	    ? trim($_REQUEST['q'])          : '';