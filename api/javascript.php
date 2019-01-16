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
                $('a[data-label=addToCart]').click(function () {
                    var productId = $(this).attr('data-content');
                    $.ajax({
                        url     : '<?=_URL_HOME?>/api/ajax.php',
                        method  : 'GET',
                        dataType: 'json',
                        data    : {'act' : 'cart', 'type' : 'add', 'id' : productId},
                        success : function (data) {
                            if(data.response == 200){
                                $('div[id=product_cart_first]').remove();
                                $('div[id=product_cart]').html(data.product_cart_menu);
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

