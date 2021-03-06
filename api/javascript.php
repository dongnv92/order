<?php
/**
 * Created by PhpStorm.
 * User: DONG
 * Date: 2019-01-16
 * Time: 09:53
 */
require_once '../includes/core.php';
header('Content-type: application/javascript');
switch ($act){
    case 'add_cart':
        ?>
        //<script>
            $(document).ready(function () {
                // Thêm 1 sản phẩm vào giỏ hàng trong trang sản phẩm
                $('#productAddToCart').click(function () {
                    var productId       = $(this).attr('data-content');
                    var productQuantily = $('input[name=quantily]').val();
                    var productSize     = $('li[data-content=product_size][class=active] a').html();
                    var productcolor    = $('li[data-content=product_color][class=active] a span img').attr('src');
                    var productUrl      = $(this).attr('data-goto');
                    $.ajax({
                        url         : '<?=_URL_HOME?>/api/ajax.php',
                        method      : 'GET',
                        dataType    : 'json',
                        data        : {'act' : 'cart', 'type' : 'add', 'id' : productId, 'size' : productSize, 'color' : productcolor, 'quantily' : productQuantily},
                        beforeSend  : function(){
                            $('#productAddToCart').text('ĐANG THÊM VÀO GIỎ HÀNG ...');
                        },
                        success     : function (data) {
                            if(data.response == 200){
                                $(location).attr('href', productUrl);
                            }
                        }
                    });
                });

                // Thêm 1 sản phẩm vào giỏ hàng
                $('a[data-label=addToCart]').click(function () {
                    var productId   = $(this).attr('data-content');
                    var productUrl  = $(this).attr('data-goto');
                    $.ajax({
                        url     : '<?=_URL_HOME?>/api/ajax.php',
                        method  : 'GET',
                        dataType: 'json',
                        data    : {'act' : 'cart', 'type' : 'add', 'id' : productId},
                        success : function (data) {
                            if(data.response == 200){
                                $(location).attr('href', productUrl);
                            }
                        }
                    });
                });

                // Thêm số lượng sản phẩm trong giỏ hàng
                $('span[data-label=quanlity_plus]').click(function () {
                    var cartId      = $(this).attr('data-value');
                    var productId   = $(this).attr('data-product');
                    $.ajax({
                        url     : '<?=_URL_HOME?>/api/ajax.php',
                        method  : 'GET',
                        dataType: 'json',
                        data    : {'act' : 'cart', 'type' : 'add', 'cartId' : cartId, 'id' : productId},
                        success : function (data) {
                            if(data.response == 200){
                                $(location).attr('href', '<?=_URL_CART?>');
                            }
                        }
                    });
                });

                // Giảm số lượng sản phẩm trong giỏ hàng
                $('span[data-label=quanlity_minus]').click(function () {
                    var cartId      = $(this).attr('data-value');
                    var productId   = $(this).attr('data-product');
                    $.ajax({
                        url     : '<?=_URL_HOME?>/api/ajax.php',
                        method  : 'GET',
                        dataType: 'json',
                        data    : {'act' : 'cart', 'type' : 'add', 'cartId' : cartId, 'type_quantily' : 'minus', 'id' : productId},
                        success : function (data) {
                            if(data.response == 200){
                                $(location).attr('href', '<?=_URL_CART?>');
                            }
                        }
                    });
                });

                // Khi user nhập vào ô số lượng
                $('input[data-label=input_quanlity]').focusout(function () {
                    var cartId          = $(this).attr('data-value');
                    var quanlity        = $(this).val();
                    var quanlity_old    = $(this).attr('data-num');
                    var productId       = $(this).attr('data-product');

                    if(isNaN(quanlity) || quanlity < 1 || quanlity > 50){
                        alert('Vui lòng nhập số lượng từ 1 đến 50');
                        return false;
                    }
                    if(quanlity == quanlity_old){
                        return false;
                    }
                    $.ajax({
                        url     : '<?=_URL_HOME?>/api/ajax.php',
                        method  : 'GET',
                        dataType: 'json',
                        data    : {'act' : 'cart', 'type' : 'add', 'cartId' : cartId, 'quantily' : quanlity, 'id' : productId},
                        success : function (data) {
                            if(data.response == 200){
                                $(location).attr('href', '<?=_URL_CART?>');
                            }
                        }
                    });
                });

            });
        // </script>
        <?php
        break;
}
?>

