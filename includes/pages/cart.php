<?php
/**
 * Created by PhpStorm.
 * User: DONG
 * Date: 2019-01-18
 * Time: 16:23
 */
require_once '../core.php';
$bill_name      = isset($_POST['bill_name'])    && !empty($_POST['bill_name'])      ? $_POST['bill_name']       : $user['user_name'];
$bill_phone     = isset($_POST['bill_phone'])   && !empty($_POST['bill_phone'])     ? $_POST['bill_phone']      : $user['user_phone'];
$bill_address   = isset($_POST['bill_address']) && !empty($_POST['bill_address'])   ? $_POST['bill_address']    : $user['user_address'];
$bill_note      = isset($_POST['bill_note'])    && !empty($_POST['bill_note'])      ? $_POST['bill_note']       : '';

if($submit){
    $error          = array();
    if(!$bill_name){
        $error['bill_name']     = 'Bạn cần nhập họ tên';
    }
    if(!$bill_phone){
        $error['bill_phone']    = 'Bạn cần nhập số điện thoại';
    }
    if(strlen($bill_phone) != 10 || !is_numeric($bill_phone)){
        $error['bill_phone']    = 'Số điện thoại không hợp lệ';
    }
    if(!$bill_address){
        $error['bill_address']  = 'Bạn cần nhập địa chỉ';
    }

    if(!$error){
        $data_bill = array(
            'bill_code'         => $function->createBillCode(5),
            'bill_name'         => $bill_name,
            'bill_phone'        => $bill_phone,
            'bill_address'      => $bill_address,
            'bill_note'         => $bill_note,
            'bill_user'         => $user?$user['user_id']:0,
            'bill_user_process' => 0,
            'bill_total_money'  => $function->sumPriceCart(),
            'bill_status'       => 0,
            'bill_time'         => date('Y/m/d H:i:s', _CONGIF_TIME)
        );
        $bill = $db->insert(_TABLE_BILL, $data_bill);
        if($bill){
            foreach ($_SESSION['cart'] as $cart){
                $product_cart = $db->select()->from(_TABLE_PRODUCT)->where('product_id', $cart['productId'])->fetch_first();
                $data_bill_product = array(
                    'bill_product_bill'         => $bill,
                    'bill_product_product'      => $cart['productId'],
                    'bill_product_size'         => $cart['size'],
                    'bill_product_color'        => $cart['color'],
                    'bill_product_quantity'     => $cart['quantily'],
                    'bill_product_price'        => $product_cart['product_price_vn'],
                    'bill_product_total_price'  => ($product_cart['product_price_vn'] * $cart['quantily']),
                    'bill_product_time'         => date('Y/m/d H:i:s', _CONGIF_TIME),
                );
                $db->insert(_TABLE_BILL_PRODUCT, $data_bill_product);
            }
            unset($_SESSION['cart']);
            $header['title'] = 'Giỏ hàng của bạn';
            require_once 'header.php';
            ?>
            <div class="tt-breadcrumb">
                <div class="container">
                    <ul>
                        <li><a href="<?=_URL_HOME?>">Trang chủ</a></li>
                        <li>Giỏ hàng của bạn</li>
                    </ul>
                </div>
            </div>
            <div id="tt-pageContent">
                <div class="container-indent nomargin">
                    <div class="tt-empty-cart">
                        <span class="tt-icon icon-f-39"></span>
                        <h1 class="tt-title">CẢM ƠN BẠN ĐÃ ĐẶT HÀNG</h1>
                        <p>Đơn hàng của bạn đã được tạo, chúng tôi sẽ liên hệ với bạn sớm nhất để xác nhận.</p>
                        <a href="<?=_URL_HOME?>" class="btn">TIẾP TỤC MUA HÀNG</a>
                    </div>
                </div>
            </div>
            <?php
            require_once 'footer.php';
        }
    }
}
$header['title'] = 'Giỏ hàng của bạn';
require_once 'header.php';
?>
    <div class="tt-breadcrumb">
        <div class="container">
            <ul>
                <li><a href="<?=_URL_HOME?>">Trang chủ</a></li>
                <li><a href="<?=_URL_CART?>">Giỏ hàng của bạn</a></li>
            </ul>
        </div>
    </div>
    <div id="tt-pageContent">
        <div class="container-indent">
            <div class="container">
                <h1 class="tt-title-subpages noborder">GIỎ HÀNG</h1>
                <div class="row">
                    <div class="col-sm-12 col-xl-8">
                        <div class="tt-shopcart-table-02">
                            <table>
                                <tbody>
                                <?php
                                foreach ($_SESSION['cart'] as $list_product){
                                $product    = $db->select()->from(_TABLE_PRODUCT)->where('product_id', $list_product['productId'])->fetch_first();
                                $images     = $db->select('media_source')->from(_TABLE_MEDIA)->where(array('media_type' => 'images_product', 'media_store' => 'local', 'media_parent' => $product['product_id']))->fetch_first();
                                ?>
                                <tr>
                                    <td><div class="tt-product-img"><img src="<?=$images['media_source']?>" data-src="<?=$images['media_source']?>" alt="<?=$product['product_name']?>"></div></td>
                                    <td>
                                        <h2 class="tt-title"><a href="<?=$function->getUrlProduct($product['product_id'])?>"><?=$product['product_name']?></a></h2>
                                        <ul class="tt-list-description">
                                            <?=$list_product['size']    ? '<li>SIZE: '.$list_product['size'].'</li>' : ''?>
                                            <?=$list_product['color']   ? '<li>MÀU: <ul class="tt-options-swatch options-large"><li data-content="product_color">
                                            <a class="options-color" href="javascript:;">
										        <span class="swatch-img"><img src="'. $list_product['color'] .'"></span>
                                                <span class="swatch-label color-black"></span>
                                            </a>
                                            </li></ul></li>' : ''?>
                                        </ul>
                                        <ul class="tt-list-parameters">
                                            <li><div class="tt-price"><?=$function->convertNumberMoney($product['product_price_vn'])?>đ</div></li>
                                            <li><div class="detach-quantity-mobile"></div></li>
                                            <li><div class="tt-price subtotal"><?=$product['product_price_vn']?>đ</div></li>
                                        </ul>
                                    </td>
                                    <td><div class="tt-price"><?=$function->convertNumberMoney($product['product_price_vn'])?>đ</div></td>
                                    <td>
                                        <div class="detach-quantity-desctope">
                                            <div class="tt-input-counter style-01">
                                                <span class="minus-btn" data-product="<?=$list_product['productId']?>" data-label="quanlity_minus" data-value="<?=$list_product['cartId']?>"></span>
                                                <input data-label="input_quanlity" data-product="<?=$list_product['productId']?>" data-value="<?=$list_product['cartId']?>" data-num="<?=$list_product['quantily']?>" type="text" value="<?=$list_product['quantily']?>" size="200">
                                                <span class="plus-btn" data-product="<?=$list_product['productId']?>" data-label="quanlity_plus" data-value="<?=$list_product['cartId']?>"></span>
                                            </div>
                                        </div>
                                    </td>
                                    <td><div class="tt-price subtotal"><?=$function->convertNumberMoney($product['product_price_vn']*$list_product['quantily'])?>đ</div></td>
                                    <td><a href="<?=_URL_API.'/?act=cart&type=delete_product&id='.$list_product['productId'].'&cartId='. $list_product['cartId'] .'&token='.$function->createToken()?>" class="tt-btn-close"></a></td>
                                </tr>
                                <?php
                                }
                                ?>
                                </tbody>
                                <tr>
                                    <td colspan="5" class="text-center"><h2 class="tt-title"><?=(count($_SESSION['cart']) > 0 ? 'TỔNG TIỀN' : 'CHƯA CÓ SẢN PHẨM NÀO ĐƯỢC CHỌN')?></td>
                                    <td class="text-right"><div class="tt-price"><?=$function->sumPriceCart() > 0 ? $function->convertNumberMoney($function->sumPriceCart()).'đ' : ''?></div></td>
                                </tr>
                            </table>
                            <div class="tt-shopcart-btn">
                                <div class="col-left">
                                    <a class="btn-link" href="<?=_URL_HOME?>"><i class="icon-e-19"></i>TIẾP TỤC MUA HÀNG</a>
                                </div>
                                <div class="col-right">
                                    <a class="btn-link" href="<?=_URL_API?>/?act=cart&type=delete_all&token=<?=$function->createToken()?>"><i class="icon-h-02"></i>LÀM TRỐNG GIỎ HÀNG</a>
                                    <a class="btn-link" href="<?=_URL_CART?>"><i class="icon-h-48"></i>CẬP NHẬP GIỎ HÀNG</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xl-4">
                        <form class="form-default" action="" method="post">
                            <div class="tt-shopcart-wrapper">
                                <div class="tt-shopcart-box">
                                    <h4 class="tt-title">THÔNG TIN KHÁCH HÀNG</h4>
                                    <p>Nhập thông tin của bạn để chúng tôi liên hệ xác nhận.</p>
                                    <div class="form-group">
                                        <label for="address_country">Họ tên <sup>*</sup></label>
                                        <input type="text" class="form-control" required name="bill_name" value="<?=$bill_name?>" placeholder="Nhập họ tên">
                                        <?=$error['bill_name']?'<span class="text-danger"><small>'. $error['bill_name'] .'</small></span>':''?>
                                    </div>
                                    <div class="form-group">
                                        <label for="address_province">Số điện thoại <sup>*</sup></label>
                                        <input type="text" class="form-control" required name="bill_phone" value="<?=$bill_phone?>" placeholder="Nhập số điện thoại">
                                        <?=$error['bill_phone']?'<span class="text-danger"><small>'. $error['bill_phone'] .'</small></span>':''?>
                                    </div>
                                    <div class="form-group">
                                        <label for="address_province">Số địa chỉ cụ thể <sup>*</sup></label>
                                        <input type="text" class="form-control" required name="bill_address" value="<?=$bill_address?>" placeholder="Nhập địa chỉ nhận hàng">
                                        <?=$error['bill_address']?'<span class="text-danger"><small>'. $error['bill_address'] .'</small></span>':''?>
                                    </div>
                                </div>
                                <div class="tt-shopcart-box">
                                    <p>Ghi Chú</p>
                                    <textarea class="form-control" name="bill_note" rows="6"><?=$bill_note?></textarea>
                                </div>
                                <div class="tt-shopcart-box tt-boredr-large">
                                    <table class="tt-shopcart-table01">
                                        <tfoot>
                                        <tr>
                                            <th>TỔNG TIỀN</th>
                                            <td><?=$function->convertNumberMoney($function->sumPriceCart()).'đ'?></td>
                                        </tr>
                                        </tfoot>
                                    </table>
                                    <input type="submit" name="submit" class="btn btn-lg" value="ĐẶT HÀNG">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
require_once 'footer.php';

