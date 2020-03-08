<?php
require_once '../../init.php';

if($user){
    $function->redirect(_URL_ADMIN);
}

if($submit){
    $username   = isset($_POST['username'])     && !empty($_POST['username'])   ? trim($_POST['username'])      : false;
    $password   = isset($_POST['password'])     && !empty($_POST['password'])   ? trim($_POST['password'])      : false;
    $rememberme = isset($_POST['rememberme'])   && !empty($_POST['rememberme']) ? trim($_POST['rememberme'])    : '';

    $error      = [];
    if(!$username){
        $error['username'] = '<label class="text-danger"><small>Bạn chưa điền tên đăng nhập</small></label>';
    }
    if(!$password){
        $error['password'] = '<label class="text-danger"><small>Bạn chưa điền mật khẩu</small></label>';
    }
    if(!$error){
        $login = $function->curlAPI(['username' => $username, 'password' => $password], 'POST', _URL_API.'/users/login');
        $login = json_decode($login);
        if($login->response == 200){
            if ($rememberme) {
                setcookie("access_token", $login->data->user_token, _CONFIG_TIME + (30 * 24 * 60 * 60));
                $_SESSION['access_token'] = $login->data->user_token;
            } else {
                $_SESSION['access_token'] = $login->data->user_token;
            }
            $function->redirect(_URL_ADMIN);
        }else{
            $error['username'] = '<label class="text-danger"><small>'. $login->message .'</small></label>';
        }
    }
}

$header['title'] = 'Đăng Nhập';
require_once 'header.php';
?>
<div id="content" class="site-content" tabindex="-1">
    <div class="container">
        <nav class="woocommerce-breadcrumb" ><a href="<?=_URL_HOME?>">Trang chủ</a><span class="delimiter"><i class="fa fa-angle-right"></i></span>Tài khoản</nav>
        <div id="primary" class="content-area">
            <main id="main" class="site-main">
                <article id="post-8" class="hentry">
                    <div class="entry-content">
                        <div class="woocommerce">
                            <div class="customer-login-form">
                                <span class="or-text">or</span>
                                <div class="col2-set" id="customer_login">
                                    <div class="col-1">
                                        <h2>Đăng nhập</h2>
                                        <form method="post" class="login">
                                            <p class="before-login-text">Đăng nhập để quản lý sản phẩm</p>
                                            <p class="form-row form-row-wide">
                                                <label for="username">Tên đăng nhập<span class="required">*</span></label>
                                                <input type="text" class="input-text" name="username" id="username" value="" />
                                                <?=$error['username']?$error['username']:''?>
                                            </p>
                                            <p class="form-row form-row-wide">
                                                <label for="password">Mật khẩu<span class="required">*</span></label>
                                                <input class="input-text" type="password" name="password" id="password" />
                                            </p>
                                            <p class="form-row">
                                                <input class="button" type="submit" value="Đăng Nhập" name="submit">
                                                <label for="rememberme" class="inline"><input name="rememberme" type="checkbox" id="rememberme" value="forever" /> Ghi nhớ đăng nhập</label>
                                            </p>
                                            <p class="lost_password"><a href="#">Quên mật khẩu?</a></p>
                                        </form>
                                    </div><!-- .col-1 -->
                                    <div class="col-2">
                                        <h2>Đăng ký</h2>
                                        <form method="post" class="register">
                                            <p class="before-register-text">Tạo mới tài khoản</p>
                                            <p class="form-row form-row-wide">
                                                <label for="reg_email">Nhập Email<span class="required">*</span></label>
                                                <input type="email" class="input-text" disabled="disabled" name="email" id="reg_email" value="" />
                                            </p>
                                            <p class="form-row"><input type="submit" class="button" name="register" value="Đăng Ký" disabled="disabled" /></p>
                                            <div class="register-benefits">
                                                <h3>Đăng ký tài khoản hiện đang bị khóa :</h3>
                                                <ul>
                                                    <li>Liên hệ với BQT để tạo tài khoản</li>
                                                    <li>0966624292</li>
                                                    <li>abcd@gmail.com</li>
                                                </ul>
                                            </div>
                                        </form>
                                    </div><!-- .col-2 -->
                                </div><!-- .col2-set -->
                            </div><!-- /.customer-login-form -->
                        </div><!-- .woocommerce -->
                    </div><!-- .entry-content -->
                </article><!-- #post-## -->
            </main><!-- #main -->
        </div><!-- #primary -->
    </div><!-- .col-full -->
</div><!-- #content -->
<?php
require_once 'footer.php';

