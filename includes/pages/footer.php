<?php
require_once '../../includes/core.php';
?>
<br />
<footer class="nomargin">
    <div class="tt-footer-col tt-color-scheme-01">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-2 col-xl-3">
                    <div class="tt-mobile-collapse">
                        <h4 class="tt-collapse-title">
                            CHUYÊN MỤC
                        </h4>
                        <div class="tt-collapse-content">
                            <ul class="tt-list">
                                <li><a href="listing-collection.html">GIÀY - DÉP</a></li>
                                <li><a href="listing-collection.html">QUẦN - ÁO</a></li>
                                <li><a href="listing-collection.html">PHỤ KIỆN</a></li>
                                <li><a href="listing-collection.html">NỔI BẬT</a></li>
                                <li><a href="listing-collection.html">MỚI NHẤT</a></li>
                                <li><a href="listing-collection.html">MUA NHIỀU</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-2 col-xl-3">
                    <div class="tt-mobile-collapse">
                        <h4 class="tt-collapse-title">
                            TÀI KHOẢN CỦA BẠN
                        </h4>
                        <div class="tt-collapse-content">
                            <ul class="tt-list">
                                <li><a href="page404.html">Yêu thích</a></li>
                                <li><a href="page404.html">Giỏ hàng</a></li>
                                <li><a href="page404.html">Thanh toán</a></li>
                                <li><a href="login.html">Đăng nhập</a></li>
                                <li><a href="create-account.html">Đăng ký</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="tt-mobile-collapse">
                        <h4 class="tt-collapse-title">
                            GIỚI THIỆU
                        </h4>
                        <div class="tt-collapse-content">
                            <p>Chuyên Order hàng Trung Quốc, uy tín.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="tt-newsletter">
                        <div class="tt-mobile-collapse">
                            <h4 class="tt-collapse-title">
                                LIÊN HỆ
                            </h4>
                            <div class="tt-collapse-content">
                                <address>
                                    <p><span>HÀ NỘI:</span> Thôn Do Hạ, xã Tiền Phong, huyện Mê Linh, Hà Nội</p>
                                    <p><span>HÀ NỘI:</span> chợ Hoa, xã Mê Linh, huyện Mê Linh, Hà Nội</p>
                                    <p><span>HÀ NỘI:</span> Nhà A201, khu đô thị Mễ Trì Thượng, Nam Từ Liêm, Hà Nội</p>
                                    <p><span>Điện thoại:</span> 0966624292 (Mr. Đông),  0976407514 (Mr. Thanh)</p>
                                </address>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tt-footer-custom">
        <div class="container">
            <div class="tt-row">
                <div class="tt-col-left">
                    <div class="tt-col-item tt-logo-col">
                        <!-- logo -->
                        <a class="tt-logo tt-logo-alignment" href="index.html">
                            <img src="<?=_URL_STYLE?>/images/system/logo.png" alt="">
                        </a>
                        <!-- /logo -->
                    </div>
                    <div class="tt-col-item">
                        <!-- copyright -->
                        <div class="tt-box-copyright">
                            &copy; Chuyên order hàng Trung Quốc, giá rẻ nhất
                        </div>
                        <!-- /copyright -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<a href="#" class="tt-back-to-top">ĐẦU TRANG</a>
<script src="<?=_URL_STYLE?>/external/jquery/jquery.min.js"></script>
<script src="<?=_URL_STYLE?>/external/bootstrap/js/bootstrap.min.js"></script>
<script src="<?=_URL_HOME?>/javascript.js?act=add_cart"></script>
<script src="<?=_URL_STYLE?>/external/slick/slick.min.js"></script>
<script src="<?=_URL_STYLE?>/external/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="<?=_URL_STYLE?>/external/panelmenu/panelmenu.js"></script>
<script src="<?=_URL_STYLE?>/external/instafeed/instafeed.min.js"></script>
<script src="<?=_URL_STYLE?>/external/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script src="<?=_URL_STYLE?>/external/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script src="<?=_URL_STYLE?>/external/countdown/jquery.plugin.min.js"></script>
<script src="<?=_URL_STYLE?>/external/countdown/jquery.countdown.min.js"></script>
<script src="<?=_URL_STYLE?>/external/lazyLoad/lazyload.min.js"></script>
<script src="<?=_URL_STYLE?>/js/main.js"></script>
<script src="<?=_URL_STYLE?>/external/elevatezoom/jquery.elevatezoom.js"></script>
<script src="<?=_URL_STYLE?>/external/magnific-popup/jquery.magnific-popup.min.js"></script>
<!-- form validation and sending to mail -->
<script src="<?=_URL_STYLE?>/external/form/jquery.form.js"></script>
<script src="<?=_URL_STYLE?>/external/form/jquery.validate.min.js"></script>
<script src="<?=_URL_STYLE?>/external/form/jquery.form-init.js"></script>
<?php foreach ($js_plus AS $js){?>
    <script src="<?php echo $js;?>" type="text/javascript"></script>
<?php } ?>
</body>
</html>
