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
            $product_name               = isset($_POST['product_name'])             && !empty($_POST['product_name'])               ? $_POST['product_name']                : '';
            $product_content            = isset($_POST['product_content'])          && !empty($_POST['product_content'])            ? $_POST['product_content']             : '';
            $product_suorce             = isset($_POST['product_suorce'])           && !empty($_POST['product_suorce'])             ? $_POST['product_suorce']              : '';
            $product_status             = isset($_POST['product_status'])           && !empty($_POST['product_status'])             ? $_POST['product_status']              : 0;
            $product_show               = isset($_POST['product_show'])             && !empty($_POST['product_show'])               ? $_POST['product_show']                : 0;
            $product_price_default      = isset($_POST['product_price_default'])    && !empty($_POST['product_price_default'])      ? $_POST['product_price_default']       : '';
            $product_price_promotion    = isset($_POST['product_price_promotion'])  && !empty($_POST['product_price_promotion'])    ? $_POST['product_price_promotion']     : '';
            $product_price_vn           = isset($_POST['product_price_vn'])         && !empty($_POST['product_price_vn'])           ? $_POST['product_price_vn']            : '';
            $product_category           = isset($_POST['product_category'])         && !empty($_POST['product_category'])           ? $_POST['product_category']            : '';
            $product_brand              = isset($_POST['product_brand'])            && !empty($_POST['product_brand'])              ? $_POST['product_brand']               : '';
            $product_quality            = isset($_POST['product_quality'])          && !empty($_POST['product_quality'])            ? $_POST['product_quality']             : '';
            $product_size               = isset($_POST['product_size'])             && !empty($_POST['product_size'])               ? $_POST['product_size']                : '';
            $product_color              = isset($_POST['product_color'])            && !empty($_POST['product_color'])              ? $_POST['product_color']               : '';
            $product_images             = isset($_POST['product_images'])           && !empty($_POST['product_images'])             ? $_POST['product_images']              : '';
            $product_sale               = ceil(($product_price_promotion/$product_price_default)*100);
            $error = array();
            if(!$product_name){
                $error['product_name']  = 'Bạn cần nhập tên sản phẩm';
            }
            if($product_suorce && !filter_var($product_suorce, FILTER_VALIDATE_URL)){
                $error['product_suorce']= 'Nguồn sản phẩm không đúng định dạng URL';
            }
            if(!$product_price_vn){
                $error['product_price_vn']  = 'Bạn cần nhập giá Việt Nam';
            }
            if(count($product_category) == 1 && $product_category[0] == ''){
                $error['product_category']  = 'Bạn hãy chọn 1 chuyên mục';
            }
            if($product_price_default && !is_numeric($product_price_default)){
                $error['product_price_default']  = 'Số tiền phải là dạng số';
            }
            if($product_price_promotion && !is_numeric($product_price_promotion)){
                $error['product_price_promotion']  = 'Số tiền phải là dạng số';
            }
            if($product_price_vn && !is_numeric($product_price_vn)){
                $error['product_price_vn']  = 'Số tiền phải là dạng số';
            }

            if(!$error){
                $list_color = array();
                foreach ($product_color as $color){
                    if(filter_var($color, FILTER_VALIDATE_URL)){
                        if(copy($color, '../'._CONGIF_FOLDER_IMAGES_PRODUCT_COLOR.'/'.basename($color))){
                            $list_color[] = _CONGIF_FOLDER_IMAGES_PRODUCT_COLOR.'/'.basename($color);
                        }
                    }
                }

                $data_product = array(
                    'product_name'              => $product_name,
                    'product_content'           => $product_content,
                    'product_suorce'            => $product_suorce,
                    'product_brand'             => $product_brand,
                    'product_quality'           => $product_quality,
                    'product_price_default'     => $product_price_default,
                    'product_price_promotion'   => $product_price_promotion,
                    'product_sale'              => $product_sale,
                    'product_price_vn'          => $product_price_vn,
                    'product_size'              => serialize($product_size),
                    'product_color'             => serialize($list_color),
                    'product_user'              => $user['user_id'],
                    'product_status'            => $product_status,
                    'product_show'              => $product_show,
                    'product_time'              => _CONGIF_TIME
                );
                $product_id = $db->insert(_TABLE_PRODUCT, $data_product);
                // nếu thêm dữ liệu lỗi thì break
                if(!$product_id){
                    $admin_title = 'Thêm sảm phẩm';
                    require_once 'header.php';
                    echo $function->getPanelError(array('title' => 'Thêm sản phẩm', 'content' => 'Thêm sản phẩm không thành công. Lỗi MYSQLI !'));
                    require_once 'footer.php';
                    break;
                }
                // thêm chuyên mục của sản phẩm vào bảng metadata
                foreach ($product_category as $category){
                    $data_category = array(
                        'metadata_type'     => 'category_product',
                        'metadata_suorce'   => $product_id,
                        'metadata_value'    => $category,
                        'metadata_user'     => $user['user_id'],
                        'metadata_time'     => _CONGIF_TIME
                    );
                    if(!$db->insert(_TABLE_METADATA, $data_category)){
                        $admin_title = 'Thêm sảm phẩm';
                        require_once 'header.php';
                        echo $function->getPanelError(array('title' => 'Thêm sản phẩm', 'content' => 'Thêm chuyên mục không thành công. Lỗi MYSQLI !'));
                        require_once 'footer.php';
                        break;
                    }
                }
                // thêm ảnh vào bảng media
                foreach ($product_images as $images){
                    $data_images = array(
                        'media_type'    => 'images_product',
                        'media_store'   => 'remote',
                        'media_name'    => basename($images),
                        'media_source'  => $images,
                        'media_user'    => $user['user_id'],
                        'media_parent'  => $product_id,
                        'media_time'    => _CONGIF_TIME
                    );
                    if(!$db->insert(_TABLE_MEDIA, $data_images)){
                        $admin_title = 'Thêm sảm phẩm';
                        require_once 'header.php';
                        echo $function->getPanelError(array('title' => 'Thêm sản phẩm', 'content' => 'Thêm ảnh không thành công. Lỗi MYSQLI !'));
                        require_once 'footer.php';
                        break;
                    }
                    $images_location = '../'._CONGIF_FOLDER_IMAGES_PRODUCT.'/'.basename($images);
                    copy($images, $images_location);
                    $data_images = array(
                        'media_type'    => 'images_product',
                        'media_store'   => 'local',
                        'media_name'    => basename($images),
                        'media_source'  => _CONGIF_FOLDER_IMAGES_PRODUCT.'/'.basename($images),
                        'media_user'    => $user['user_id'],
                        'media_parent'  => $product_id,
                        'media_time'    => _CONGIF_TIME
                    );
                    if(!$db->insert(_TABLE_MEDIA, $data_images)){
                        $admin_title = 'Thêm sảm phẩm';
                        require_once 'header.php';
                        echo $function->getPanelError(array('title' => 'Thêm sản phẩm', 'content' => 'Thêm ảnh không thành công. Lỗi MYSQLI !'));
                        require_once 'footer.php';
                        break;
                    }
                }
                echo 'OK'; exit();
            }
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
                                <?php echo $error['product_name'] ? $function->getAlert('help_error', $error['product_name']) : '';?>
                            </div>
                            <div class="form-group">
                                <textarea class="tinymce round" name="product_content"><?=$product_content?></textarea>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-10">
                                        <input type="text" class="form-control round border-blue" name="product_suorce" value="<?=$product_suorce?>" placeholder="Link sản phẩm gốc, VD: https://detail.tmall.com/item.htm?id=574580973041">
                                    </div>
                                    <div class="col-md-2 text-right">
                                        <button class="btn round btn-outline-blue" id="connect_ajax">Lấy thông tin</button>
                                    </div>
                                    <?php echo $error['product_suorce'] ? $function->getAlert('help_error', $error['product_suorce']) : '';?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card border-left-blue border-right-blue">
                        <div class="card-body">
                            <div class="form-group">
                                <fieldset>
                                    <div class="row skin skin-flat">
                                        <div class="col-6 text-left">
                                            <input type="checkbox" <?=$product_status == 1 ? 'checked="checked" ' : ''?> name="product_status" id="product_status" value="1">
                                        </div>
                                        <div class="col-6 text-right">
                                            <label for="product_status">Nổi bật</label>
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset>
                                    <div class="row skin skin-flat">
                                        <div class="col-6 text-left">
                                            <input type="checkbox" <?=$product_show == 0 ? '' : 'checked="checked" '?> checked name="product_show" id="product_show" value="1">
                                        </div>
                                        <div class="col-6 text-right">
                                            <label for="product_show">Ẩn/Hiện</label>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
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
                                            <input type="number" class="form-control round border-blue" value="<?=$product_price_default?>" name="product_price_default">
                                            <div class="form-control-position">
                                                <i class="la la-cny"></i>
                                            </div>
                                        </div>
                                        <?php echo $error['product_price_default'] ? $function->getAlert('help_error', $error['product_price_default']) : '';?>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="timesheetinput6">Giá khuyến mãi</label>
                                        <div class="position-relative has-icon-left">
                                            <input type="number" class="form-control round border-blue" value="<?=$product_price_promotion?>" name="product_price_promotion">
                                            <div class="form-control-position">
                                                <i class="la la-cny"></i>
                                            </div>
                                        </div>
                                        <?php echo $error['product_price_promotion'] ? $function->getAlert('help_error', $error['product_price_promotion']) : '';?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="timesheetinput6">Giá Việt Nam Đồng</label>
                                <div class="position-relative has-icon-left">
                                    <input type="number" required class="form-control round border-blue" value="<?=$product_price_vn?>" name="product_price_vn">
                                    <div class="form-control-position">
                                        <i class="la la-vimeo"></i>
                                    </div>
                                </div>
                                <?php echo $error['product_price_vn'] ? $function->getAlert('help_error', $error['product_price_vn']) : '';?>
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
                                <label>Thương Hiệu</label><br />
                                <select name="product_brand" id="category_select" class="select2 form-control border-grey-blue">
                                    <option value="">Trống</option>
                                    <?php $function->showCategories($db->select('category_id, category_name, category_parent')->from(_TABLE_CATEGORY)->where(array('category_type' => 'brand'))->fetch(), 0, '','select'); ?>
                                </select>
                                <?php echo $error['product_brand'] ? $function->getAlert('help_error', $error['product_brand']) : '';?>
                            </fieldset>
                            <fieldset class="form-group">
                                <label>Loại sản phẩm</label><br />
                                <select name="product_quality" id="category_select" class="select2 form-control border-grey-blue">
                                    <option value="">Trống</option>
                                    <?php $function->showCategories($db->select('category_id, category_name, category_parent')->from(_TABLE_CATEGORY)->where(array('category_type' => 'quality'))->fetch(), 0, '','select'); ?>
                                </select>
                                <?php echo $error['product_quality'] ? $function->getAlert('help_error', $error['product_quality']) : '';?>
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
                                <div class="col-md-6 col-sm-12" id="ajax_color">

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
                            $('#connect_ajax').html('Vui lòng chờ <i class="la-refresh la spinner"></i>');
                        },
                        success     : function (data) {
                            $('input[name=product_price_default]').val(data.product_price_default);
                            $('input[name=product_price_promotion]').val(data.product_price_promotion);
                            $('input[name=product_price_vn]').val(data.product_price_vn);
                            $('input[name=product_suorce]').val(data.product_url);
                            $('#ajax_images').html(data.images);
                            $('#ajax_size').html(data.size);
                            $('#ajax_color').html(data.color);
                            $('#connect_ajax').html('Lấy thông tin');
                        },
                        error: function(jqXHR, textStatus){
                            if(textStatus == 'timeout')
                            {
                                swal("Thông báo!", "Không lấy được dữ liệu, vui lòng thử lại","error");
                                $('#connect_ajax').html('Lấy thông tin');
                                return false;
                            }
                        },
                        timeout: 20000
                    });
                    return false;
                });
            });
        </script>
        <?php
        require_once 'footer.php';
        break;
}
