<?php
require_once 'includes/core.php';
if($user){
    $function->redirect(_URL_ADMIN);
    exit();
}
if($submit){
    $user_name      = isset($_POST['user_name'])    ? trim($_POST['user_name'])     : 'Thành viên';
    $user_login     = isset($_POST['user_login'])   ? trim($_POST['user_login'])    : '';
    $user_phone     = isset($_POST['user_phone'])   ? $_POST['user_phone']          : '';
    $user_email     = isset($_POST['user_email'])   ? trim($_POST['user_email'])    : '';
    $user_pass      = isset($_POST['user_pass'])    ? trim($_POST['user_pass'])     : '';
    $user_repass    = isset($_POST['user_repass'])  ? trim($_POST['user_repass'])   : '';
    $error          = array();

    if(strlen($user_name) > 50){
        $error['user_name'] = $function->getAlert('help_error', 'Họ tên không được quá 50 ký tự');
    }
    if(!$user_login){
        $error['user_login'] = $function->getAlert('help_error', 'Bạn cần nhập tên đăng nhập.');
    }
    if(strlen($user_login) <= 3 || strlen($user_login) > 32){
        $error['user_login'] = $function->getAlert('help_error', 'Tên đăng nhập phải từ 4 đến 32 ký tự.');
    }
    if($db->select('user_id')->from(_TABLE_USER)->where('user_login', $user_login)->fetch_first()){
        $error['user_login'] = $function->getAlert('help_error', 'Tên đăng nhập này đã có người đăng ký, vui lòng chọn tên khác.');
    }
    if(!$user_phone){
        $error['user_phone'] = $function->getAlert('help_error', 'Bạn cần nhập số điện thoại.');
    }
    if(!is_numeric($user_phone) || strlen($user_phone) != 10){
        $error['user_phone'] = $function->getAlert('help_error', 'Định dạng số điện thoại không chính xác.');
    }
    if($db->select('user_id')->from(_TABLE_USER)->where('user_phone', $user_phone)->fetch_first()){
        $error['user_phone'] = $function->getAlert('help_error', 'Số điện thoại này đã có người đăng ký, vui lòng chọn số điện thoại khác.');
    }
    if(!$user_email){
        $error['user_email'] = $function->getAlert('help_error', 'Bạn cần nhập địa chỉ Email.');
    }
    if(!filter_var($user_email, FILTER_VALIDATE_EMAIL)){
        $error['user_email'] = $function->getAlert('help_error', 'Địa chỉ Email không đúng định dạng.');
    }
    if($db->select('user_id')->from(_TABLE_USER)->where('user_email', $user_email)->fetch_first()){
        $error['user_email'] = $function->getAlert('help_error', 'Email này đã có người đăng ký, vui lòng chọn Email khác.');
    }
    if(!$user_pass || !$user_repass){
        $error['user_pass'] = $function->getAlert('help_error', 'Bạn cần nhập mật khẩu.');
    }
    if((strlen($user_pass) <= 5 || strlen($user_pass) > 32) || (strlen($user_repass) <= 5 || strlen($user_repass) > 32)){
        $error['user_pass'] = $function->getAlert('help_error', 'Mật khẩu phải từ 6 đến 32 ký tự.');
    }
    if($user_pass != $user_repass){
        $error['user_pass'] = $function->getAlert('help_error', '2 mật khẩu phải giống nhau.');
    }
    if(!$error){
        $data_user = array(
            'user_login'    => $user_login,
            'user_password' => md5($user_pass),
            'user_name'     => $user_name,
            'user_phone'    => $user_phone,
            'user_address'  => '',
            'user_avatar'   => '',
            'user_role'     => 38,
            'user_email'    => $user_email,
            'user_status'   => 1,
            'user_time'     => _CONGIF_TIME
        );
        $add_user = $db->insert(_TABLE_USER, $data_user);
        if($add_user){
            setcookie("user", $add_user, time() + 30*24*60*60);
            setcookie('pass', md5($user_pass),time() + 30*24*60*60);
            $_SESSION['user'] = $add_user;
            $_SESSION['pass'] = md5($user_pass);
            $function->redirect(_URL_ADMIN);
            exit();
        }
    }
}
?>
<!DOCTYPE html>
<html class="loading" lang="vi" data-textdirection="ltr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="author" content="DONG NGUYEN">
    <title>Đăng ký</title>
    <link rel="apple-touch-icon" href="favicon.png">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.png">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700" rel="stylesheet">
    <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css" rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="admin/app-assets/css/vendors.css">
    <link rel="stylesheet" type="text/css" href="admin/app-assets/vendors/css/forms/icheck/icheck.css">
    <link rel="stylesheet" type="text/css" href="admin/app-assets/vendors/css/forms/icheck/custom.css">
    <!-- END VENDOR CSS-->
    <!-- BEGIN MODERN CSS-->
    <link rel="stylesheet" type="text/css" href="admin/app-assets/css/app.css">
    <!-- END MODERN CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="admin/app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="admin/app-assets/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="admin/app-assets/css/pages/login-register.css">
    <!-- END Page Level CSS-->
</head>
<body class="vertical-layout vertical-menu 1-column   menu-expanded blank-page blank-page"
      data-open="click" data-menu="vertical-menu" data-col="1-column">
<!-- ////////////////////////////////////////////////////////////////////////////-->
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <section class="flexbox-container">
                <div class="col-12 d-flex align-items-center justify-content-center">
                    <div class="col-lg-4 col-md-8 col-10 box-shadow-2 p-0">
                        <div class="card border-grey border-lighten-3 px-2 py-2 m-0">
                            <div class="card-header border-0">
                                <div class="card-title text-center">
                                    <a href="<?=_URL_HOME?>"><img src="assets/images/system/logo3.png" height="70px" alt="Đăng ký tài khoản"></a>
                                </div>
                                <h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2"><span>Đăng ký tài khoản</span></h6>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <form class="form-horizontal form-simple" method="post" action="">
                                        <fieldset class="form-group position-relative has-icon-left mb-1">
                                            <input type="text" class="form-control form-control-lg input-lg" value="<?=$user_login?>" name="user_login" placeholder="Nhập tên đăng nhập" required>
                                            <div class="form-control-position"><i class="ft-user"></i></div>
                                            <?=$error['user_login'] ? $error['user_login'] : ''?>
                                        </fieldset>
                                        <fieldset class="form-group position-relative has-icon-left mb-1">
                                            <input type="text" class="form-control form-control-lg input-lg" value="<?=$user_phone?>" name="user_phone" placeholder="Nhập số điện thoại" required>
                                            <div class="form-control-position"><i class="ft-phone"></i></div>
                                            <?=$error['user_phone'] ? $error['user_phone'] : ''?>
                                        </fieldset>
                                        <fieldset class="form-group position-relative has-icon-left mb-1">
                                            <input type="email" class="form-control form-control-lg input-lg" name="user_email" value="<?=$user_email?>" placeholder="Nhập địa chỉ Email" required="">
                                            <div class="form-control-position"><i class="ft-mail"></i></div>
                                            <?=$error['user_email'] ? $error['user_email'] : ''?>
                                        </fieldset>
                                        <fieldset class="form-group position-relative has-icon-left mb-1">
                                            <input type="text" class="form-control form-control-lg input-lg" value="<?=$user_name?>" name="user_name" placeholder="Nhập họ và tên">
                                            <div class="form-control-position"><i class="ft-user"></i></div>
                                            <?=$error['user_name'] ? $error['user_name'] : ''?>
                                        </fieldset>
                                        <fieldset class="form-group position-relative has-icon-left">
                                            <input type="password" class="form-control form-control-lg input-lg" value="<?=$user_pass?>" name="user_pass" placeholder="Nhập mật khẩu" required="">
                                            <div class="form-control-position"><i class="la la-key"></i></div>
                                            <?=$error['user_pass'] ? $error['user_pass'] : ''?>
                                        </fieldset>
                                        <fieldset class="form-group position-relative has-icon-left">
                                            <input type="password" class="form-control form-control-lg input-lg" value="<?=$user_repass?>" name="user_repass" placeholder="Nhập lại mật khẩu" required="">
                                            <div class="form-control-position"><i class="la la-key"></i></div>
                                        </fieldset>
                                        <input type="submit" class="btn btn-info btn-lg btn-block" name="submit" value="Đăng ký">
                                    </form>
                                </div>
                                <p class="text-center">Bạn đã có tài khoản? <a href="<?=_URL_LOGIN?>" class="card-link">Đăng nhập</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
<!-- ////////////////////////////////////////////////////////////////////////////-->
<script src="admin/app-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
<script src="admin/app-assets/vendors/js/forms/icheck/icheck.min.js" type="text/javascript"></script>
<script src="admin/app-assets/vendors/js/forms/validation/jqBootstrapValidation.js" type="text/javascript"></script>
<script src="admin/app-assets/js/core/app-menu.js" type="text/javascript"></script>
<script src="admin/app-assets/js/core/app.js" type="text/javascript"></script>
<script src="admin/app-assets/js/scripts/forms/form-login-register.js" type="text/javascript"></script>
</body>
</html>
