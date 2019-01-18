<?php
/**
 * Created by PhpStorm.
 * User: DONG
 * Date: 2019-01-18
 * Time: 16:23
 */
require_once '../core.php';
$header['title'] = 'Giỏ hàng của bạn';
require_once 'header.php';
?>
    <div class="tt-breadcrumb">
        <div class="container">
            <ul>
                <li><a href="<?=_URL_HOME?>">Trang chủ</a></li>
                <li><a href="<?=_URL_HOME?>/cart">Giỏ hàng của bạn</a></li>
            </ul>
        </div>
    </div>
    <div id="tt-pageContent">
        <div class="container-indent">
            <div class="container">
                <h1 class="tt-title-subpages noborder">GIỎ HÀNG</h1>
                <div class="row">
                    <div class="col-sm-12 col-xl-8">
                        <div class="tt-shopcart-table">
                            <table>
                                <tbody>
                                <?php
                                foreach ($_SESSION['cart'] as $list_product){
                                $product    = $db->select()->from(_TABLE_PRODUCT)->where('product_id', $list_product['productId'])->fetch_first();
                                $images     = $db->select('media_source')->from(_TABLE_MEDIA)->where(array('media_type' => 'images_product', 'media_store' => 'local', 'media_parent' => $product['product_id']))->fetch_first();
                                ?>
                                <tr>
                                    <td><a href="<?=_URL_API.'/?act=cart&type=delete_product&id='.$list_product['productId'].'&token='.$function->createToken()?>" class="tt-btn-close"></a></td>
                                    <td><div class="tt-product-img"><img src="<?=$images['media_source']?>" data-src="<?=$images['media_source']?>" alt="<?=$product['product_name']?>"></div></td>
                                    <td>
                                        <h2 class="tt-title"><a href="<?=$function->getUrlProduct($product['product_id'])?>"><?=$product['product_name']?></a></h2>
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
                                                <span class="minus-btn"></span>
                                                <input type="text" value="<?=$list_product['quantily']?>" size="5">
                                                <span class="plus-btn" data-label="quanlity" data-value="<?=$list_product['productId']?>"></span>
                                            </div>
                                        </div>
                                    </td>
                                    <td><div class="tt-price subtotal"><?=$function->convertNumberMoney($product['product_price_vn']*$list_product['quantily'])?>đ</div></td>
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
                        <div class="tt-shopcart-wrapper">
                            <div class="tt-shopcart-box">
                                <h4 class="tt-title">
                                    ESTIMATE SHIPPING AND TAX
                                </h4>
                                <p>Enter your destination to get a shipping estimate.</p>
                                <form class="form-default">
                                    <div class="form-group">
                                        <label for="address_country">COUNTRY <sup>*</sup></label>
                                        <select id="address_country" class="form-control">
                                            <option>Austria</option>
                                            <option>Belgium</option>
                                            <option>Cyprus</option>
                                            <option>Croatia</option>
                                            <option>Czech Republic</option>
                                            <option>Denmark</option>
                                            <option>Finland</option>
                                            <option>France</option>
                                            <option>Germany</option>
                                            <option>Greece</option>
                                            <option>Hungary</option>
                                            <option>Ireland</option>
                                            <option>France</option>
                                            <option>Italy</option>
                                            <option>Luxembourg</option>
                                            <option>Netherlands</option>
                                            <option>Poland</option>
                                            <option>Portugal</option>
                                            <option>Slovakia</option>
                                            <option>Slovenia</option>
                                            <option>Spain</option>
                                            <option>United Kingdom</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="address_province">STATE/PROVINCE <sup>*</sup></label>
                                        <select id="address_province" class="form-control">
                                            <option>State/Province</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="address_zip">ZIP/POSTAL CODE <sup>*</sup></label>
                                        <input type="text" name="name" class="form-control" id="address_zip" placeholder="Zip/Postal Code">
                                    </div>
                                    <a href="#" class="btn btn-border">CALCULATE SHIPPING</a>
                                    <p>
                                        There is one shipping rate available for Alabama, Tanzania, United Republic Of.
                                    </p>
                                    <ul class="tt-list-dot list-dot-large">
                                        <li><a href="#">International Shipping at $20.00</a></li>
                                    </ul>
                                </form>
                            </div>
                            <div class="tt-shopcart-box">
                                <h4 class="tt-title">
                                    NOTE
                                </h4>
                                <p>Add special instructions for your order...</p>
                                <form class="form-default">
                                    <textarea class="form-control" rows="7"></textarea>
                                </form>
                            </div>
                            <div class="tt-shopcart-box tt-boredr-large">
                                <table class="tt-shopcart-table01">
                                    <tbody>
                                    <tr>
                                        <th>SUBTOTAL</th>
                                        <td>$324</td>
                                    </tr>
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>GRAND TOTAL</th>
                                        <td>$324</td>
                                    </tr>
                                    </tfoot>
                                </table>
                                <a href="#" class="btn btn-lg"><span class="icon icon-check_circle"></span>PROCEED TO CHECKOUT</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
require_once 'footer.php';

