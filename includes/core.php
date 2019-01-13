<?php
/**
 * Created by PhpStorm.
 * User: DONG
 * Date: 2018-12-04
 * Time: 14:41
 */
session_start();
// Tắt hiển thị thông báo lỗi
error_reporting(0);
// Đặt mặc định múi giờ Việt Nam
date_default_timezone_set('Asia/Ho_Chi_Minh');

// Require tất cả các file trong thư mục lib
$file_require = array(
    'lib/class_db_mysqli.php',
    'lib/class.function.php'
);
foreach ($file_require AS $file_requires){
    require_once $file_requires;
}
$function = new orderFunction();

// Đặt các giá trị hằng số mặc định
define('_CONGIF_TIME', time());
define('_CONGIF_FOLDER_IMAGES_PRODUCT', 'assets/images/products');
define('_CONGIF_FOLDER_IMAGES_PRODUCT_COLOR', 'assets/images/products_color');
define('_CONFIG_PAGINATION', 50);
define('_CONFIG_PAGINATION_PRODUCT', 16);

// Đặt các giá trị hằng số các đường dẫn
define('_URL_HOME','http://order.xoidua.com');
define('_URL_LOGIN',_URL_HOME.'/login');
define('_URL_LOGOUT',_URL_HOME.'/logout');
define('_URL_ADMIN',_URL_HOME.'/admin');
define('_URL_BACK', isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : _URL_ADMIN);
define('_URL_STYLE', _URL_HOME.'/assets');
define('_URL_PRODUCT', _URL_HOME.'/product');

// Đặt các giá trị hằng số cho tên các bảng
define('_TABLE_USER','dong_user');
define('_TABLE_CATEGORY','dong_category');
define('_TABLE_MEDIA','dong_media');
define('_TABLE_METADATA','dong_metadata');
define('_TABLE_PRODUCT','dong_product');

// Đặt các giá trị hằng số cho thông tin kết nối cơ sở dữ liệu
define('_DB_HOST','localhost');
define('_DB_USERNAME','xoiduaco');
define('_DB_PASSWORD','Nkthanh88...');
define('_DB_DATABASE','xoiduaco_order');

$db     = new Database(_DB_HOST, _DB_USERNAME,_DB_PASSWORD,_DB_DATABASE);

/** Manager Session, Cookie User */
if ($_COOKIE['user'] && $_COOKIE['pass']) {
    $_SESSION['user'] = $_COOKIE['user'];
    $_SESSION['pass'] = $_COOKIE['pass'];
}
/** Kiểm tra tồn tại của tên đăng nhập và mật khẩu  */
if ($_SESSION['user'] && $_SESSION['pass']) {
    $db->from(_TABLE_USER);
    $db->where(array('user_id' => $_SESSION['user'], 'user_password' => $_SESSION['pass']));
    $user = $db->fetch_first();
    if(!$user){
        unset ($_SESSION['user']);
        unset ($_SESSION['pass']);
        setcookie('user', '');
        setcookie('pass', '');
    }
}

// Khởi tạo các biến Form
$submit = (isset($_POST['submit'])  && !empty($_POST['submit']))    ? trim($_POST['submit'])    : false;
$id     = (isset($_REQUEST['id'])   && !empty($_REQUEST['id']))     ? (int) $_REQUEST['id']     : false;
$act    = (isset($_REQUEST['act'])  && !empty($_REQUEST['act']))    ? $_REQUEST['act']          : false;
$type   = (isset($_REQUEST['type']) && !empty($_REQUEST['type']))   ? $_REQUEST['type']         : false;
$url    = (isset($_REQUEST['url'])  && !empty($_REQUEST['url']))    ? trim($_REQUEST['url'])    : false;
$page   = (isset($_REQUEST['page']) && !empty($_REQUEST['page']))   ? trim($_REQUEST['page'])   : 1;