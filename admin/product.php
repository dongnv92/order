<?php
/**
 * Created by PhpStorm.
 * User: DONG
 * Date: 2018-12-06
 * Time: 10:06
 */
require_once '../includes/core.php';

// Kiểm tra đã đăng nhập chưa
if(!$user){$function->redirect(_URL_LOGIN);}
$admin_module   = 'product';

switch ($act){
    case 'add':
        if($submit){

        }

        $header['breadcrumbs']  = array(_URL_ADMIN.'/product.php' => 'Sản phẩm', _URL_ADMIN.'/product.php?act=add' => 'Thêm sản phẩm');
        $header['title']        = 'Thêm sản phẩm';
        $css_plus       = array(
            'app-assets/vendors/css/forms/icheck/icheck.css',
            'app-assets/vendors/css/forms/icheck/custom.css',
            'app-assets/vendors/css/editors/tinymce/tinymce.min.css',
            'app-assets/vendors/css/forms/selects/select2.min.css',
            'app-assets/vendors/css/forms/toggle/bootstrap-switch.min.css',
            'app-assets/vendors/css/forms/toggle/switchery.min.css',
            'app-assets/css/plugins/forms/switch.min.css',
            'app-assets/css/core/colors/palette-switch.min.css',
            'app-assets/vendors/css/extensions/sweetalert.css'
        );
        $js_plus        = array(
            'app-assets/vendors/js/forms/icheck/icheck.min.js',
            'app-assets/js/scripts/forms/checkbox-radio.js',
            'app-assets/vendors/js/editors/tinymce/tinymce.js',
            'app-assets/js/scripts/editors/editor-tinymce.min.js',
            'app-assets/vendors/js/forms/select/select2.full.min.js',
            'app-assets/js/scripts/forms/select/form-select2.min.js',
            'app-assets/vendors/js/forms/toggle/bootstrap-switch.min.js',
            'app-assets/vendors/js/forms/toggle/bootstrap-checkbox.min.js',
            'app-assets/vendors/js/forms/toggle/switchery.min.js',
            'app-assets/js/scripts/forms/switch.min.js',
            'app-assets/vendors/js/extensions/sweetalert.min.js',
            'app-assets/js/scripts/extensions/sweet-alerts.min.js'
        );
        require_once 'header.php';
        echo $function->breadcrumbs($header['title'], $header['breadcrumbs']);
        ?>
        <form action="" class="form form-horizontal" method="post">
            <div class="row">
                <div class="col-lg-9">
                    <div class="card border-left-blue border-right-blue">
                        <div class="card-body">
                            <div class="form-group">
                                <input type="text" required class="form-control round border-blue" name="product_name" value="<?=$product_name?>" autofocus placeholder="Tên sản phẩm">
                            </div>
                            <div class="form-group">
                                <textarea class="tinymce round" name="product_content"><?=$product_content?></textarea>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-10">
                                        <input type="text" class="form-control round border-blue" name="product_suorce" value="<?=$product_suorce?>" placeholder="Link sản phẩm gốc">
                                    </div>
                                    <div class="col-md-2 text-right">
                                        <button class="btn round btn-outline-blue" id="connect_ajax">Lấy thông tin</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card border-left-blue border-right-blue">
                        <div class="card-body">
                            <div class="text-center">
                                <input class="btn round btn-outline-blue" type="submit" name="submit" value="Thêm sản phẩm">
                            </div>
                        </div>
                    </div>
                    <!-- Giá sản phẩm -->
                    <div class="card border-left-blue border-right-blue">
                        <div class="card-body">
                            <h4 class="card-title">Giá sản phẩm</h4>
                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="timesheetinput5">Giá gốc</label>
                                        <div class="position-relative has-icon-left">
                                            <input type="text" class="form-control round border-blue" name="product_price_default">
                                            <div class="form-control-position">
                                                <i class="la la-cny"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="timesheetinput6">Giá khuyến mãi</label>
                                        <div class="position-relative has-icon-left">
                                            <input type="text" class="form-control round border-blue" name="product_price_promotion">
                                            <div class="form-control-position">
                                                <i class="la la-cny"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="timesheetinput6">Giá Việt Nam Đồng</label>
                                <div class="position-relative has-icon-left">
                                    <input type="text" class="form-control round border-blue" name="product_price_vn">
                                    <div class="form-control-position">
                                        <i class="la la-vimeo"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Ảnh Sản Phẩm -->
                    <div class="card border-left-blue border-right-blue">
                        <div class="card-body">
                            <h4 class="card-title">Ảnh sản phẩm</h4>
                            <hr>
                            <div class="row" id="ajax_images">

                            </div>
                            <hr />
                            <input type="file" id="product_images_upload" class="round" name="product_images_upload">
                        </div>
                    </div>
                    <div class="card border-left-blue border-right-blue">
                        <div class="card-body">
                            <h4 class="card-title">Chuyên mục & hãng</h4><hr>
                            <fieldset class="form-group">
                                <label><strong class="text-danger">(*)</strong> Chuyên Mục</label><br />
                                <select name="product_category[]" id="category_select" class="select2 form-control border-grey-blue" multiple="multiple">
                                    <?php $function->showCategories($db->select('category_id, category_name, category_parent')->from(_TABLE_CATEGORY)->where(array('category_type' => 'shop'))->fetch(), 0, '','select'); ?>
                                </select>
                                <?php echo $error['product_category'] ? $function->getAlert('help_error', $error['product_category']) : '';?>
                            </fieldset>
                            <fieldset class="form-group">
                                <label><strong class="text-danger">(*)</strong> Thương Hiệu</label><br />
                                <select name="product_brand[]" id="category_select" class="select2 form-control border-grey-blue" multiple="multiple">
                                    <?php $function->showCategories($db->select('category_id, category_name, category_parent')->from(_TABLE_CATEGORY)->where(array('category_type' => 'brand'))->fetch(), 0, '','select'); ?>
                                </select>
                                <?php echo $error['product_brand'] ? $function->getAlert('help_error', $error['product_brand']) : '';?>
                            </fieldset>
                        </div>
                    </div>
                    <div class="card border-left-blue border-right-blue">
                        <div class="card-body">
                            <h4 class="card-title">SIZE</h4><hr />
                            <div class="row skin skin-flat">
                                <div class="col-md-6 col-sm-12" id="ajax_size">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card border-left-blue border-right-blue">
                        <div class="card-body">
                            <h4 class="card-title">MÀU</h4><hr />
                            <div class="row skin skin-flat">
                                <div class="col-md-6 col-sm-12">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!-- Javascript -->
        <script language="JavaScript">
            function ValidURL(str) {
                var regex = /(http|https):\/\/(\w+:{0,1}\w*)?(\S+)(:[0-9]+)?(\/|\/([\w#!:.?+=&%!\-\/]))?/;
                if(!regex .test(str)) {
                    return false;
                } else {
                    return true;
                }
            }
            $(document).ready(function () {
                $('#connect_ajax').click(function () {
                    var product_suorce = $('input[name=product_suorce]').val();
                    if(!product_suorce){
                        swal("Thông báo!", "Bạn chưa nhập link nguồn sản phẩm", "warning");
                        return false;
                    }
                    if(ValidURL(product_suorce) == false){
                        swal("Thông báo!", "Link nguồn sản phẩm đúng định dạng","warning");
                        return false;
                    }

                    $.ajax({
                        url         : '<?=_URL_HOME;?>/api/ajax.php',
                        method      : 'POST',
                        dataType    : 'json',
                        data        : {'act' : 'add_product', 'url' : product_suorce},
                        beforeSend  : function () {
                            $('#connect_ajax').html('<i class="la-circle-o-notch la spinner"></i>');
                        },
                        success     : function (data) {
                            $('input[name=product_price_default]').val(data.product_price_default);
                            $('input[name=product_price_promotion]').val(data.product_price_promotion);
                            $('input[name=product_price_vn]').val(data.product_price_vn);
                            $('input[name=product_suorce]').val(data.product_url);
                            $('#ajax_images').html(data.images);
                            $('#ajax_size').html(data.size);
                            $('#connect_ajax').html('Lấy thông tin');
                        }
                    })
                    return false;
                });
            });
        </script>
        <?php
        require_once 'footer.php';
        break;
}
