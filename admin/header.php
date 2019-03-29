<?php
/**
 * Created by PhpStorm.
 * User: Dong
 * Date: 19/09/2018
 * Time: 22:45
 */
require_once '../includes/core.php';
$header['title'] = isset($header['title']) && !empty($header['title']) ? $header['title'] : 'SHOP ORDER';

$db->select('bill_id')->from(_TABLE_BILL)->where('bill_user', $user['user_id'])->execute();
$bill_all = $db->affected_rows;
if($bill_all > 0){
    $bill_all = '<div class="badge badge-pill badge-info float-right">'. $bill_all .'</div>';
}else{
    $bill_all = '';
}

$db->select('bill_id')->from(_TABLE_BILL)->where(array('bill_user' => $user['user_id'], 'bill_status' => 0))->execute();
$bill_0 = $db->affected_rows;
if($bill_0 > 0){
    $bill_0 = '<div class="badge badge-pill badge-info float-right">'. $bill_0 .'</div>';
}else{
    $bill_0 = '';
}

$db->select('bill_id')->from(_TABLE_BILL)->where(array('bill_user' => $user['user_id'], 'bill_status' => 1))->execute();
$bill_1 = $db->affected_rows;
if($bill_1 > 0){
    $bill_1 = '<div class="badge badge-pill badge-info float-right">'. $bill_1 .'</div>';
}else{
    $bill_1 = '';
}

$db->select('bill_id')->from(_TABLE_BILL)->where(array('bill_user' => $user['user_id'], 'bill_status' => 2))->execute();
$bill_2 = $db->affected_rows;
if($bill_2 > 0){
    $bill_2 = '<div class="badge badge-pill badge-info float-right">'. $bill_2 .'</div>';
}else{
    $bill_2 = '';
}

$db->select('bill_id')->from(_TABLE_BILL)->where(array('bill_user' => $user['user_id'], 'bill_status' => 3))->execute();
$bill_3 = $db->affected_rows;
if($bill_3 > 0){
    $bill_3 = '<div class="badge badge-pill badge-info float-right">'. $bill_3 .'</div>';
}else{
    $bill_3 = '';
}

$db->select('bill_id')->from(_TABLE_BILL)->where(array('bill_user' => $user['user_id'], 'bill_status' => 4))->execute();
$bill_4 = $db->affected_rows;
if($bill_4 > 0){
    $bill_4 = '<div class="badge badge-pill badge-info float-right">'. $bill_4 .'</div>';
}else{
    $bill_4 = '';
}
?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="author" content="BUYNHANH.COM">
    <title><?=$header['title']?></title>
    <link rel="apple-touch-icon" href="<?=_URL_HOME?>/favicon.png">
    <link rel="shortcut icon" type="image/x-icon" href="<?=_URL_HOME?>/favicon.png">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700" rel="stylesheet">
    <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="app-assets/css/vendors.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/app.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/core/colors/palette-gradient.css">
    <?php foreach ($css_plus AS $css){?>
    <link rel="stylesheet" type="text/css" href="<?php echo $css;?>">
    <?php }?>
    <script src="app-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
</head>
<body class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar"
      data-open="click" data-menu="vertical-menu" data-col="2-columns">
<!-- fixed-top-->
<nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-light bg-info navbar-shadow">
    <div class="navbar-wrapper">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
                <li class="nav-item">
                    <a class="navbar-brand" href="<?php echo _URL_ADMIN;?>">
                        <img class="brand-logo" alt="modern admin logo" src="<?=_URL_HOME?>/assets/images/system/logo3.png">
                        <h3 class="brand-text">BUYNHANH.COM</h3>
                    </a>
                </li>
                <li class="nav-item d-md-none">
                    <a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="la la-ellipsis-v"></i></a>
                </li>
            </ul>
        </div>
        <div class="navbar-container content">
            <div class="collapse navbar-collapse" id="navbar-mobile">
                <ul class="nav navbar-nav mr-auto float-left">
                    <li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu"></i></a></li>
                    <li class="nav-item nav-search"><a class="nav-link nav-link-search" href="#"><i class="ficon ft-search"></i></a>
                        <div class="search-input">
                            <input class="input" type="text" placeholder="Tìm kiếm ...">
                        </div>
                    </li>
                </ul>
                <ul class="nav navbar-nav float-right">
                    <li class="dropdown dropdown-user nav-item">
                        <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                            <span class="mr-1">Xin chào ,<span class="user-name text-bold-700"><?php echo $user['user_name'];?></span></span>
                            <span class="avatar avatar-online"><img src="<?php echo 'images/avatar.png'; ?>" alt="avatar"><i></i></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#"><i class="ft-user"></i> Xem trang cá nhân</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#"><i class="la la-gears"></i> Sửa trang cá nhân</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="<?=_URL_LOGOUT?>"><i class="ft-power"></i> Thoát</a>
                        </div>
                    </li>
                    <li class="dropdown dropdown-notification nav-item">
                        <a class="nav-link nav-link-label" href="#" data-toggle="dropdown">
                            <i class="ficon ft-bell"></i>
                            <?php echo $notification > 0 ? '<span class="badge badge-pill badge-default badge-danger badge-default badge-up badge-glow">'.$notification.'</span>' : '';?>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                            <li class="dropdown-menu-header">
                                <h6 class="dropdown-header m-0"><span class="grey darken-2">Thông báo</span></h6>
                                <span class="notification-tag badge badge-default badge-danger float-right m-0"></span>
                            </li>
                            <li class="scrollable-container media-list w-100">

                            </li>
                            <!--<li class="dropdown-menu-footer"><a class="dropdown-item text-muted text-center" href="javascript:void(0)">Read all notifications</a></li> Đọc tất cả thông báo-->
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<!-- ////////////////////////////////////////////////////////////////////////////-->
<div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class=" navigation-header">
                <span data-i18n="nav.category.layouts">Nội dung</span>
                <i class="la la-ellipsis-h ft-minus" data-toggle="tooltip" data-placement="right" data-original-title="Layouts"></i>
            </li>
            <li class=" nav-item">
                <a href="#"><i class="la la-list-alt"></i><span class="menu-title">Đơn hàng</span></a>
                <ul class="menu-content">
                    <li <?php echo ($admin_module == 'purchase' && in_array($type, array('')) && !$act) ? 'class="active"' : '';?>>
                        <a class="menu-item" href="<?php echo _URL_ADMIN;?>/purchase.php"><i class="ft-list"></i> Đơn hàng của bạn <?=$bill_all?></a>
                    </li>
                    <li <?php echo ($admin_module == 'purchase' && in_array($type, array('review')) && !$act) ? 'class="active"' : '';?>>
                        <a class="menu-item" href="<?php echo _URL_ADMIN;?>/purchase.php?type=review"><i class="ft-clock"></i> Đang xét duyệt <?=$bill_0?></a>
                    </li>
                    <li <?php echo ($admin_module == 'purchase' && in_array($type, array('pickup')) && !$act) ? 'class="active"' : '';?>>
                        <a class="menu-item" href="<?php echo _URL_ADMIN;?>/purchase.php?type=pickup"><i class="la la-coffee"></i> Đang lấy hàng <?=$bill_1?></a>
                    </li>
                    <li <?php echo ($admin_module == 'purchase' && in_array($type, array('delivery')) && !$act) ? 'class="active"' : '';?>>
                        <a class="menu-item" href="<?php echo _URL_ADMIN;?>/purchase.php?type=delivery"><i class="la la-truck"></i> Đang giao <?=$bill_2?></a>
                    </li>
                    <li <?php echo ($admin_module == 'purchase' && in_array($type, array('done')) && !$act) ? 'class="active"' : '';?>>
                        <a class="menu-item" href="<?php echo _URL_ADMIN;?>/purchase.php?type=done"><i class="la la-hand-peace-o"></i> Đã giao <?=$bill_3?></a>
                    </li>
                    <li <?php echo ($admin_module == 'purchase' && in_array($type, array('cancel')) && !$act) ? 'class="active"' : '';?>>
                        <a class="menu-item" href="<?php echo _URL_ADMIN;?>/purchase.php?type=cancel"><i class="la la-undo"></i> Đã hủy <?=$bill_4?></a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item">
                <a href="#"><i class="la la-money"></i><span class="menu-title">Hóa đơn</span></a>
                <ul class="menu-content">
                    <li <?php echo ($admin_module == 'payment' && in_array($type, array(''))) ? 'class="active"' : '';?>><a class="menu-item" href="<?php echo _URL_ADMIN;?>/payment.php"><i class="la la-clipboard"></i> Hóa đơn của bạn</a></li>
                </ul>
            </li>
            <?php
                if(in_array($user['user_role'], array(35))){
                    $db->select('bill_id')->from(_TABLE_BILL)->execute();
                    $bill_all = $db->affected_rows;
                    if($bill_all > 0){
                        $bill_all = '<div class="badge badge-pill badge-info float-right">'. $bill_all .'</div>';
                    }else{
                        $bill_all = '';
                    }

                    $db->select('bill_id')->from(_TABLE_BILL)->where('bill_status', 0)->execute();
                    $bill_0 = $db->affected_rows;
                    if($bill_0 > 0){
                        $bill_0 = '<div class="badge badge-pill badge-info float-right">'. $bill_0 .'</div>';
                    }else{
                        $bill_0 = '';
                    }

                    $db->select('bill_id')->from(_TABLE_BILL)->where('bill_status', 1)->execute();
                    $bill_1 = $db->affected_rows;
                    if($bill_1 > 0){
                        $bill_1 = '<div class="badge badge-pill badge-info float-right">'. $bill_1 .'</div>';
                    }else{
                        $bill_1 = '';
                    }

                    $db->select('bill_id')->from(_TABLE_BILL)->where('bill_status', 2)->execute();
                    $bill_2 = $db->affected_rows;
                    if($bill_2 > 0){
                        $bill_2 = '<div class="badge badge-pill badge-info float-right">'. $bill_2 .'</div>';
                    }else{
                        $bill_2 = '';
                    }

                    $db->select('bill_id')->from(_TABLE_BILL)->where('bill_status', 3)->execute();
                    $bill_3 = $db->affected_rows;
                    if($bill_3 > 0){
                        $bill_3 = '<div class="badge badge-pill badge-info float-right">'. $bill_3 .'</div>';
                    }else{
                        $bill_3 = '';
                    }

                    $db->select('bill_id')->from(_TABLE_BILL)->where('bill_status', 4)->execute();
                    $bill_4 = $db->affected_rows;
                    if($bill_4 > 0){
                        $bill_4 = '<div class="badge badge-pill badge-info float-right">'. $bill_4 .'</div>';
                    }else{
                        $bill_4 = '';
                    }
            ?>
            <!-- BAN QUẢN TRỊ -->
            <li class=" navigation-header">
                <span data-i18n="nav.category.layouts">Ban Quản Trị</span>
                <i class="la la-diamond ft-minus" data-toggle="tooltip" data-placement="right" data-original-title="Layouts"></i>
            </li>
            <li class=" nav-item">
                <a href="#"><i class="ft-shopping-cart"></i><span class="menu-title">Sản phẩm</span></a>
                <ul class="menu-content">
                    <li <?php echo ($admin_module == 'product' && in_array($act, array('', 'update'))) ? 'class="active"' : '';?>><a class="menu-item" href="<?php echo _URL_ADMIN;?>/product.php"><i class="ft-list"></i> Danh sách sản phẩm</a></li>
                    <li <?php echo ($admin_module == 'product' && $act == 'add') ? 'class="active"' : '';?>><a class="menu-item" href="<?php echo _URL_ADMIN;?>/product.php?act=add"><i class="ft-plus"></i> Thêm sản phẩm</a></li>
                    <li <?php echo ($admin_module == 'category' && $type == 'shop') ? 'class="active"' : '';?>><a class="menu-item" href="<?php echo _URL_ADMIN;?>/category.php?type=shop"><i class="ft-hash"></i> Chuyên mục</a></li>
                    <li <?php echo ($admin_module == 'category' && $type == 'brand') ? 'class="active"' : '';?>><a class="menu-item" href="<?php echo _URL_ADMIN;?>/category.php?type=brand"><i class="la la-twitter-square"></i> Thương Hiệu</a></li>
                    <li <?php echo ($admin_module == 'category' && $type == 'quality') ? 'class="active"' : '';?>><a class="menu-item" href="<?php echo _URL_ADMIN;?>/category.php?type=quality"><i class="la la-certificate"></i> Loại sản phẩm</a></li>
                </ul>
            </li>
            <li class=" nav-item">
                <a href="#"><i class="la la-list-alt"></i><span class="menu-title">Quản lý đơn hàng</span></a>
                <ul class="menu-content">
                    <li <?php echo ($admin_module == 'purchase' && $act == 'all_purchase'  && !$type) ? 'class="active"' : '';?>>
                        <a class="menu-item" href="<?php echo _URL_ADMIN;?>/purchase.php?act=all_purchase">
                            <i class="ft-list"></i> Tất cả đơn hàng <?=$bill_all?>
                        </a>
                    </li>
                    <li <?php echo ($admin_module == 'purchase' && in_array($type, array('review')) && $act == 'all_purchase') ? 'class="active"' : '';?>>
                        <a class="menu-item" href="<?php echo _URL_ADMIN;?>/purchase.php?type=review&act=all_purchase">
                            <i class="ft-clock"></i> Đang xét duyệt <?=$bill_0?>
                        </a>
                    </li>
                    <li <?php echo ($admin_module == 'purchase' && in_array($type, array('pickup')) && $act == 'all_purchase') ? 'class="active"' : '';?>>
                        <a class="menu-item" href="<?php echo _URL_ADMIN;?>/purchase.php?type=pickup&act=all_purchase">
                            <i class="la la-coffee"></i> Đang lấy hàng <?=$bill_1?>
                        </a>
                    </li>
                    <li <?php echo ($admin_module == 'purchase' && in_array($type, array('delivery')) && $act == 'all_purchase') ? 'class="active"' : '';?>>
                        <a class="menu-item" href="<?php echo _URL_ADMIN;?>/purchase.php?type=delivery&act=all_purchase">
                            <i class="la la-truck"></i> Đang giao <?=$bill_2?>
                        </a>
                    </li>
                    <li <?php echo ($admin_module == 'purchase' && in_array($type, array('done')) && $act == 'all_purchase') ? 'class="active"' : '';?>>
                        <a class="menu-item" href="<?php echo _URL_ADMIN;?>/purchase.php?type=done&act=all_purchase">
                            <i class="la la-hand-peace-o"></i> Đã giao <?=$bill_3?>
                        </a>
                    </li>
                    <li <?php echo ($admin_module == 'purchase' && in_array($type, array('cancel')) && $act == 'all_purchase') ? 'class="active"' : '';?>>
                        <a class="menu-item" href="<?php echo _URL_ADMIN;?>/purchase.php?type=cancel&act=all_purchase">
                            <i class="la la-undo"></i> Đã hủy <?=$bill_4?>
                        </a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item">
                <a href="#"><i class="la la-cogs"></i><span class="menu-title">Cài đặt</span></a>
                <ul class="menu-content">
                    <li <?php echo ($admin_module == 'category' && in_array($type, array('payment_method'))) ? 'class="active"' : '';?>>
                        <a class="menu-item" href="<?php echo _URL_ADMIN;?>/category.php?type=payment_method">
                            <i class="la la-credit-card"></i> Hình thức thanh toán
                        </a>
                    </li>
                    <li <?php echo ($admin_module == 'category' && in_array($type, array('role'))) ? 'class="active"' : '';?>>
                        <a class="menu-item" href="<?php echo _URL_ADMIN;?>/category.php?type=role">
                            <i class="ft-users"></i> Vai trò thành viên
                        </a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item">
                <a href="#"><i class="ft-users"></i><span class="menu-title">Quản lý thành viên</span></a>
                <ul class="menu-content">
                    <li <?php echo ($admin_module == 'users' && !$act) ? 'class="active"' : '';?>>
                        <a class="menu-item" href="<?php echo _URL_ADMIN;?>/users.php">
                            <i class="ft-user"></i> Danh sách thành viên
                        </a>
                    </li>
                    <li <?php echo ($admin_module == 'users' && $act == 'add') ? 'class="active"' : '';?>>
                        <a class="menu-item" href="<?php echo _URL_ADMIN;?>/users.php?act=add">
                            <i class="ft-user-plus"></i> Thêm thành viên
                        </a>
                    </li>
                </ul>
            </li>
            <!-- BAN QUẢN TRỊ -->
            <?php }?>
            <li class=" navigation-header">
                <span data-i18n="nav.category.layouts">Điều hướng</span>
                <i class="la la-ellipsis-h ft-minus" data-toggle="tooltip" data-placement="right" data-original-title="Layouts"></i>
            </li>
            <li class=" nav-item"><a href="<?php echo _URL_HOME;?>" target="_blank"><i class="la la-home"></i><span class="menu-title">Trang Chủ</span></a></li>
            <li class=" nav-item"><a href="<?php echo _URL_LOGOUT;?>"><i class="la la-long-arrow-left"></i><span class="menu-title">Đăng xuất</span></a></li>
        </ul>
    </div>
</div>
<div class="app-content content">
    <div class="content-wrapper">
