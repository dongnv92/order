<?php
/**
 * Created by PhpStorm.
 * User: DONG
 * Date: 2018-12-06
 * Time: 10:06
 */
require_once '../includes/core.php';
require_once '../includes/lib/class.uploader.php';

// Kiểm tra đã đăng nhập chưa
if(!$user){$function->redirect(_URL_LOGIN);}
$admin_module   = 'product';
switch ($act){
    case 'update':
        $product = $db->from(_TABLE_PRODUCT)->where('product_id', $id)->fetch_first();
        $header['title'] = 'Chỉnh sửa sản phẩm';
        // Kiểm tra xem sản phẩm có trong dữ liệu không
        if(!$product){
            require_once 'header.php';
            echo $function->getPanelError(array('title' => $header['title'], 'content' => 'Bài viết đã được xóa hoặc không tồn tại'));
            require_once 'footer.php';
            break;
        }
        $product_name               = isset($_POST['product_name'])             && !empty($_POST['product_name'])               ? $_POST['product_name']                : $product['product_name'];
        $product_content            = isset($_POST['product_content'])          && !empty($_POST['product_content'])            ? $_POST['product_content']             : $product['product_content'];
        $product_suorce             = isset($_POST['product_suorce'])           && !empty($_POST['product_suorce'])             ? $_POST['product_suorce']              : $product['product_suorce'];
        $product_status             = isset($_POST['product_status'])           && !empty($_POST['product_status'])             ? $_POST['product_status']              : $product['product_status'];
        $product_price_default      = isset($_POST['product_price_default'])    && !empty($_POST['product_price_default'])      ? $_POST['product_price_default']       : $product['product_price_default'];
        $product_price_promotion    = isset($_POST['product_price_promotion'])  && !empty($_POST['product_price_promotion'])    ? $_POST['product_price_promotion']     : $product['product_price_promotion'];
        $product_price_vn           = isset($_POST['product_price_vn'])         && !empty($_POST['product_price_vn'])           ? $_POST['product_price_vn']            : $product['product_price_vn'];
        $product_brand              = isset($_POST['product_brand'])            && !empty($_POST['product_brand'])              ? $_POST['product_brand']               : $product['product_brand'];
        $product_quality            = isset($_POST['product_quality'])          && !empty($_POST['product_quality'])            ? $_POST['product_quality']             : $product['product_quality'];
        $product_size               = isset($_POST['product_size'])             && !empty($_POST['product_size'])               ? $_POST['product_size']                : unserialize($product['product_size']);
        $product_color              = isset($_POST['product_color'])            && !empty($_POST['product_color'])              ? $_POST['product_color']               : unserialize($product['product_color']);
        $product_category           = isset($_POST['product_category'])         && !empty($_POST['product_category'])           ? $_POST['product_category']            : $product['product_category'];
        $product_gender             = isset($_POST['product_gender'])           && !empty($_POST['product_gender'])             ? $_POST['product_gender']              : $product['product_gender'];
        $product_sale               = ceil(($product_price_promotion/$product_price_default)*100);

        if($submit){
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
            if(!$product_category){
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
                $data_product = array(
                    'product_name'              => $product_name,
                    'product_content'           => $product_content,
                    'product_category'          => $product_category,
                    'product_brand'             => $product_brand,
                    'product_gender'            => $product_gender,
                    'product_quality'           => $product_quality,
                    'product_price_default'     => $product_price_default,
                    'product_price_promotion'   => $product_price_promotion,
                    'product_sale'              => $product_sale,
                    'product_price_vn'          => $product_price_vn,
                    'product_size'              => serialize($product_size),
                    'product_color'             => serialize($product_color),
                    'product_status'            => $product_status,
                    'product_time'              => _CONGIF_TIME
                );
                $product_update = $db->where('product_id', $id)->update(_TABLE_PRODUCT, $data_product);
                // nếu thêm dữ liệu lỗi thì break
                if(!$product_update){
                    require_once 'header.php';
                    echo $function->getPanelError(array('title' => $header['title'], 'content' => 'Update sản phẩm không thành công. Lỗi MYSQLI !'));
                    require_once 'footer.php';
                    break;
                }

                /*// Xóa danh mục trước khi thêm lại
                $db->delete()->from(_TABLE_METADATA)->where(array('metadata_type' => 'category_product', 'metadata_suorce' => $id))->execute();
                // Thêm chuyên mục của sản phẩm vào bảng metadata
                foreach ($product_category as $category){
                    $data_category = array(
                        'metadata_type'     => 'category_product',
                        'metadata_suorce'   => $id,
                        'metadata_value'    => $category,
                        'metadata_user'     => $user['user_id'],
                        'metadata_time'     => _CONGIF_TIME
                    );
                    if(!$db->insert(_TABLE_METADATA, $data_category)){
                        require_once 'header.php';
                        echo $function->getPanelError(array('title' => $header['title'], 'content' => 'Thêm chuyên mục không thành công. Lỗi MYSQLI !'));
                        require_once 'footer.php';
                        break;
                    }
                }*/

                // Upload ảnh
                $uploader = new Uploader();
                $data = $uploader->upload($_FILES['product_images_upload'], array(
                    'limit' => 10, //Maximum Limit of files. {null, Number}
                    'maxSize' => 10, //Maximum Size of files {null, Number(in MB's)}
                    'extensions' => null, //Whitelist for file extension. {null, Array(ex: array('jpg', 'png'))}
                    'required' => false, //Minimum one file is required for upload {Boolean}
                    'uploadDir' => '../'._CONGIF_FOLDER_IMAGES_PRODUCT.'/', //Upload directory {String}
                    'title' => array('auto', 10), //New file name {null, String, Array} *please read documentation in README.md
                    'removeFiles' => true, //Enable file exclusion {Boolean(extra for jQuery.filer), String($_POST field name containing json data with file names)}
                    'replace' => false, //Replace the file if it already exists {Boolean}
                    'perms' => null, //Uploaded file permisions {null, Number}
                    'onCheck' => null, //A callback function name to be called by checking a file for errors (must return an array) | ($file) | Callback
                    'onError' => null, //A callback function name to be called if an error occured (must return an array) | ($errors, $file) | Callback
                    'onSuccess' => null, //A callback function name to be called if all files were successfully uploaded | ($files, $metas) | Callback
                    'onUpload' => null, //A callback function name to be called if all files were successfully uploaded (must return an array) | ($file) | Callback
                    'onComplete' => null, //A callback function name to be called when upload is complete | ($file) | Callback
                    'onRemove' => 'onFilesRemoveCallback' //A callback function name to be called by removing files (must return an array) | ($removed_files) | Callback
                ));

                if($data['isComplete']){
                    foreach ($data['data']['files'] as $images_upload){
                        $images_upload = str_replace('../', '', $images_upload);
                        $data_images = array(
                            'media_type'    => 'images_product',
                            'media_store'   => 'local',
                            'media_name'    => basename($images_upload),
                            'media_source'  => $images_upload,
                            'media_user'    => $user['user_id'],
                            'media_parent'  => $id,
                            'media_time'    => _CONGIF_TIME
                        );
                        if(!$db->insert(_TABLE_MEDIA, $data_images)){
                            $admin_title = 'Sửa sảm phẩm';
                            require_once 'header.php';
                            echo $function->getPanelError(array('title' => 'Thêm sản phẩm', 'content' => 'Thêm ảnh không thành công. Lỗi MYSQLI !'));
                            require_once 'footer.php';
                            break;
                        }
                    }
                }
            }
        }

        $header['breadcrumbs']  = array(_URL_ADMIN.'/product.php' => 'Sản phẩm', _URL_ADMIN.'/product.php?act=add' => 'Thêm sản phẩm');
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
        <form action="" class="form form-horizontal" method="post" enctype="multipart/form-data">
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
                                <label class="label">Link gốc sản phẩm</label>
                                <input type="text" class="form-control round border-blue" disabled value="<?=$product_suorce?>" placeholder="Link sản phẩm gốc, VD: https://detail.tmall.com/item.htm?id=574580973041">
                                <?php echo $error['product_suorce'] ? $function->getAlert('help_error', $error['product_suorce']) : '';?>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control round border-blue" disabled value="<?=_URL_PRODUCT.'/'.$product['product_url'].'.html'?>" placeholder="URL sản phẩm">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card border-left-blue border-right-blue">
                        <div class="card-body">
                            <h4 class="card-title">Thuộc tính</h4>
                            <hr>
                            <div class="form-group">
                                <fieldset>
                                    <div class="row skin skin-flat">
                                        <div class="col-6 text-left">
                                            <input type="radio" <?php echo ($submit && $product_status == 2) ? 'checked' : '';?> name="product_status" id="product_status_2" value="2">
                                        </div>
                                        <div class="col-6 text-right">
                                            <label for="product_status_2">Nổi bật</label>
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset>
                                    <div class="row skin skin-flat">
                                        <div class="col-6 text-left">
                                            <input type="radio" <?php echo (($submit && $product_status == 1) || !$submit) ? 'checked' : '';?> name="product_status" id="product_status_1" value="1">
                                        </div>
                                        <div class="col-6 text-right">
                                            <label for="product_status_1">Hiện</label>
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset>
                                    <div class="row skin skin-flat">
                                        <div class="col-6 text-left">
                                            <input type="radio" <?php echo ($submit && $product_status == 0) ? 'checked' : '';?> name="product_status" id="product_status_0" value="0">
                                        </div>
                                        <div class="col-6 text-right">
                                            <label for="product_status_0">Ẩn</label>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                            <h4 class="card-title">Giới tính</h4>
                            <hr>
                            <div class="form-group">
                                <fieldset>
                                    <div class="row skin skin-flat">
                                        <div class="col-6 text-left">
                                            <input type="radio" <?php echo ($product_gender == 1) ? 'checked' : '';?> name="product_gender" id="product_gender_1" value="1">
                                        </div>
                                        <div class="col-6 text-right">
                                            <label for="product_gender_1">NAM</label>
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset>
                                    <div class="row skin skin-flat">
                                        <div class="col-6 text-left">
                                            <input type="radio" <?php echo ($product_gender == 2) ? 'checked' : '';?> name="product_gender" id="product_gender_2" value="2">
                                        </div>
                                        <div class="col-6 text-right">
                                            <label for="product_gender_2">NỮ</label>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-outline-danger round">Xóa</button>
                                <a href="<?=$function->getUrlProduct($id)?>" target="_blank" class="btn btn-outline-blue round">Xem</a>
                                <input class="btn round btn-outline-blue" type="submit" name="submit" value="Chỉnh sửa">
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
                            <h4 class="card-title">Ảnh sản phẩm <small>Click vào ảnh để xóa ảnh</small></h4>
                            <hr>
                            <div class="row" id="ajax_images">
                                <?php
                                foreach ($db->from(_TABLE_MEDIA)->where(array('media_type' => 'images_product', 'media_store' => 'local', 'media_parent' => $id))->fetch() as $images){
                                    echo '<div class="col-md-4 text-center" id="images_'. $images['media_id'] .'"><img data-hover="delete_images" data-num="'. $images['media_id'] .'" src="'. _URL_HOME.'/'.$images['media_source'] .'" style="height: 85px"></div>';
                                }
                                ?>
                            </div>
                            <hr />
                            <input type="file" id="product_images_upload" class="round" name="product_images_upload[]" multiple>
                        </div>
                    </div>
                    <div class="card border-left-blue border-right-blue">
                        <div class="card-body">
                            <h4 class="card-title">Chuyên mục & hãng</h4><hr>
                            <fieldset class="form-group">
                                <label><strong class="text-danger">(*)</strong> Chuyên Mục</label><br />
                                <select name="product_category" id="category_select" class="select2 form-control border-grey-blue" required>
                                    <?php
                                    foreach ($db->select('category_id, category_name')->from(_TABLE_CATEGORY)->where('category_type', 'shop')->fetch() as $category){
                                        echo '<option '. ( $category['category_id'] == $product_category ? 'selected' : '' ) .' value="'. $category['category_id'] .'">'. $category['category_name'] .'</option>';
                                    }
                                    ?>
                                </select>
                                <?php echo $error['product_category'] ? $function->getAlert('help_error', $error['product_category']) : '';?>
                            </fieldset>
                            <fieldset class="form-group">
                                <label>Thương Hiệu</label><br />
                                <select name="product_brand" id="category_select" class="select2 form-control border-grey-blue">
                                    <option value="">Trống</option>
                                    <?php
                                        foreach ($db->select('category_id, category_name, category_parent')->from(_TABLE_CATEGORY)->where(array('category_type' => 'brand'))->fetch() as $category){
                                            echo '<option value="'. $category['category_id'] .'" '. (($category['category_id'] == $product_brand) ? 'selected' : '') .'>'. $category['category_name'] .'</option>';
                                        }
                                    ?>
                                </select>
                                <?php echo $error['product_brand'] ? $function->getAlert('help_error', $error['product_brand']) : '';?>
                            </fieldset>
                            <fieldset class="form-group">
                                <label>Loại sản phẩm</label><br />
                                <select name="product_quality" id="category_select" class="select2 form-control border-grey-blue">
                                    <option value="">Trống</option>
                                    <?php
                                    foreach ($db->select('category_id, category_name, category_parent')->from(_TABLE_CATEGORY)->where(array('category_type' => 'quality'))->fetch() as $category){
                                        echo '<option value="'. $category['category_id'] .'" '. (($category['category_id'] == $product_quality) ? 'selected' : '') .'>'. $category['category_name'] .'</option>';
                                    }
                                    ?>
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
                                    <?php
                                    foreach ($product_size as $size){
                                        echo '<fieldset>
                                        <div class="row">
                                            <div class="col-6 text-center"><input type="checkbox" checked name="product_size[]" id="'. $size .'" value="'. $size .'"></div>
                                            <div class="col-6 text-center"><label for="'. $size .'">'. $size .'</label></div>
                                        </div>
                                        </fieldset>';
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card border-left-blue border-right-blue">
                        <div class="card-body">
                            <h4 class="card-title">MÀU</h4><hr />
                            <div class="row skin skin-flat">
                                <div class="col-md-6 col-sm-12" id="ajax_color">
                                <?php
                                foreach ($product_color as $color){
                                    echo '<fieldset>
                                    <div class="row">
                                        <div class="col-6 text-left"><input type="checkbox" checked name="product_color[]" id="'. $color .'" value="'. $color .'"></div>
                                        <div class="col-6 text-right"><label for="'. $color .'"><img src="'. _URL_HOME.'/'.$color .'" width="50px" height="50px" class="round"></label></div>
                                    </div>
                                    </fieldset>';
                                }
                                ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!-- Javascript -->
        <script language="JavaScript">
            $(document).ready(function () {
                // Xóa ảnh sản phẩm
                $('img[data-hover=delete_images]').click(function () {
                    var images_id = $(this).attr('data-num');
                    swal({
                        title: "Bạn có chắc chắn muốn xóa ảnh này?",
                        text: "Sau khi xóa sẽ không khôi phục được!",
                        icon: "warning",
                        buttons: {
                            cancel: {
                                text: "Quay Lại",
                                value: null,
                                visible: true,
                                className: "",
                                closeModal: true,
                            },
                            confirm: {
                                text: "Xóa Ngay",
                                value: true,
                                visible: true,
                                className: "",
                                closeModal: false
                            }
                        }
                    }).then((isConfirm) => {
                        if (isConfirm) {
                            $.ajax({
                                url     : '<?=_URL_HOME?>/api/ajax.php',
                                method  : 'POST',
                                dataType: 'json',
                                data    : {'act' : 'delete_media', 'id' : images_id},
                                success : function (data) {
                                    if(data.response == 200){
                                        $('#images_'+images_id).remove();
                                        swal("Deleted!", data.message, "success");
                                    }else{
                                        swal("Error!", data.message, "error");
                                    }
                                }
                            });
                        }
                    });
                });
            });
        </script>
        <?php
        require_once 'footer.php';
        break;
    case 'add':
        if($submit){
            $product_name               = isset($_POST['product_name'])             && !empty($_POST['product_name'])               ? $_POST['product_name']                : '';
            $product_content            = isset($_POST['product_content'])          && !empty($_POST['product_content'])            ? $_POST['product_content']             : '';
            $product_url                = isset($_POST['product_url'])              && !empty($_POST['product_url'])                ? $_POST['product_url']                 : '';
            $product_suorce             = isset($_POST['product_suorce'])           && !empty($_POST['product_suorce'])             ? $_POST['product_suorce']              : '';
            $product_status             = isset($_POST['product_status'])           && !empty($_POST['product_status'])             ? $_POST['product_status']              : 0;
            $product_price_default      = isset($_POST['product_price_default'])    && !empty($_POST['product_price_default'])      ? $_POST['product_price_default']       : '';
            $product_price_promotion    = isset($_POST['product_price_promotion'])  && !empty($_POST['product_price_promotion'])    ? $_POST['product_price_promotion']     : '';
            $product_price_vn           = isset($_POST['product_price_vn'])         && !empty($_POST['product_price_vn'])           ? $_POST['product_price_vn']            : '';
            $product_category           = isset($_POST['product_category'])         && !empty($_POST['product_category'])           ? $_POST['product_category']            : '';
            $product_brand              = isset($_POST['product_brand'])            && !empty($_POST['product_brand'])              ? $_POST['product_brand']               : '';
            $product_quality            = isset($_POST['product_quality'])          && !empty($_POST['product_quality'])            ? $_POST['product_quality']             : '';
            $product_size               = isset($_POST['product_size'])             && !empty($_POST['product_size'])               ? $_POST['product_size']                : '';
            $product_color              = isset($_POST['product_color'])            && !empty($_POST['product_color'])              ? $_POST['product_color']               : '';
            $product_images             = isset($_POST['product_images'])           && !empty($_POST['product_images'])             ? $_POST['product_images']              : '';
            $product_gender             = isset($_POST['product_gender'])           && !empty($_POST['product_gender'])             ? $_POST['product_gender']              : '';
            $product_sale               = ceil(($product_price_promotion/$product_price_default)*100);
            $error = array();

            if(!$product_name){
                $error['product_name']  = 'Bạn cần nhập tên sản phẩm';
            }
            if($product_suorce && !filter_var($product_suorce, FILTER_VALIDATE_URL)){
                $error['product_suorce']= 'Nguồn sản phẩm không đúng định dạng URL';
            }
            if($db->select('product_id')->from(_TABLE_PRODUCT)->where('product_suorce', $product_suorce)->execute()->affected_rows > 0){
                $error['product_suorce']= 'Nguồn này đã được sử dụng';
            }
            if(!$product_price_vn){
                $error['product_price_vn']  = 'Bạn cần nhập giá Việt Nam';
            }
            if(!$product_category){
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
            if(!$product_url){
                $product_url = $function->makeSlug($product_name);
                if($db->select()->from(_TABLE_PRODUCT)->where('product_url', $product_url)->execute()->affected_rows > 0 || !$product_url){
                    $product_url = $function->makeSlug($product_name).$function->randomString(4);
                }
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
                    'product_url'               => $product_url,
                    'product_content'           => $product_content,
                    'product_category'          => $product_category,
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
                    'product_gender'            => $product_gender,
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
                /*foreach ($product_category as $category){
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
                }*/

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

                // Upload ảnh
                $uploader = new Uploader();
                $data = $uploader->upload($_FILES['product_images_upload'], array(
                    'limit' => 10, //Maximum Limit of files. {null, Number}
                    'maxSize' => 10, //Maximum Size of files {null, Number(in MB's)}
                    'extensions' => null, //Whitelist for file extension. {null, Array(ex: array('jpg', 'png'))}
                    'required' => false, //Minimum one file is required for upload {Boolean}
                    'uploadDir' => '../'._CONGIF_FOLDER_IMAGES_PRODUCT.'/', //Upload directory {String}
                    'title' => array('auto', 10), //New file name {null, String, Array} *please read documentation in README.md
                    'removeFiles' => true, //Enable file exclusion {Boolean(extra for jQuery.filer), String($_POST field name containing json data with file names)}
                    'replace' => false, //Replace the file if it already exists {Boolean}
                    'perms' => null, //Uploaded file permisions {null, Number}
                    'onCheck' => null, //A callback function name to be called by checking a file for errors (must return an array) | ($file) | Callback
                    'onError' => null, //A callback function name to be called if an error occured (must return an array) | ($errors, $file) | Callback
                    'onSuccess' => null, //A callback function name to be called if all files were successfully uploaded | ($files, $metas) | Callback
                    'onUpload' => null, //A callback function name to be called if all files were successfully uploaded (must return an array) | ($file) | Callback
                    'onComplete' => null, //A callback function name to be called when upload is complete | ($file) | Callback
                    'onRemove' => 'onFilesRemoveCallback' //A callback function name to be called by removing files (must return an array) | ($removed_files) | Callback
                ));

                if($data['isComplete']){
                    foreach ($data['data']['files'] as $images_upload){
                        $images_upload = str_replace('../', '', $images_upload);
                        $data_images = array(
                            'media_type'    => 'images_product',
                            'media_store'   => 'local',
                            'media_name'    => basename($images_upload),
                            'media_source'  => $images_upload,
                            'media_user'    => $user['user_id'],
                            'media_parent'  => $product_id,
                            'media_time'    => _CONGIF_TIME
                        );
                        if(!$db->insert(_TABLE_MEDIA, $data_images)){
                            $admin_title = 'Sửa sảm phẩm';
                            require_once 'header.php';
                            echo $function->getPanelError(array('title' => 'Thêm sản phẩm', 'content' => 'Thêm ảnh không thành công. Lỗi MYSQLI !'));
                            require_once 'footer.php';
                            break;
                        }
                    }
                }
                $function->redirect(_URL_ADMIN.'/product.php?act=update&id='.$product_id);
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
        <form action="" class="form form-horizontal" method="post" enctype="multipart/form-data">
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
                            <div class="form-group">
                                <input type="text" name="product_url" class="form-control round border-blue" placeholder="URL bài viết">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card border-left-blue border-right-blue">
                        <div class="card-body">
                            <h4 class="card-title">Thuộc tính</h4>
                            <hr>
                            <div class="form-group">
                                <fieldset>
                                    <div class="row skin skin-flat">
                                        <div class="col-6 text-left">
                                            <input type="radio" <?php echo ($submit && $product_status == 2) ? 'checked' : '';?> name="product_status" id="product_status_2" value="2">
                                        </div>
                                        <div class="col-6 text-right">
                                            <label for="product_status_2">Nổi bật</label>
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset>
                                    <div class="row skin skin-flat">
                                        <div class="col-6 text-left">
                                            <input type="radio" <?php echo (($submit && $product_status == 1) || !$submit) ? 'checked' : '';?> name="product_status" id="product_status_1" value="1">
                                        </div>
                                        <div class="col-6 text-right">
                                            <label for="product_status_1">Hiện</label>
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset>
                                    <div class="row skin skin-flat">
                                        <div class="col-6 text-left">
                                            <input type="radio" <?php echo ($submit && $product_status == 0) ? 'checked' : '';?> name="product_status" id="product_status_0" value="0">
                                        </div>
                                        <div class="col-6 text-right">
                                            <label for="product_status_0">Ẩn</label>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                            <h4 class="card-title">Giới tính</h4>
                            <hr>
                            <div class="form-group">
                                <fieldset>
                                    <div class="row skin skin-flat">
                                        <div class="col-6 text-left">
                                            <input type="radio" <?php echo ($submit && $product_gender == 1) ? 'checked' : '';?> name="product_gender" id="product_gender_1" value="1">
                                        </div>
                                        <div class="col-6 text-right">
                                            <label for="product_gender_1">NAM</label>
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset>
                                    <div class="row skin skin-flat">
                                        <div class="col-6 text-left">
                                            <input type="radio" <?php echo ($submit && $product_gender == 2) ? 'checked' : '';?> name="product_gender" id="product_gender_2" value="2">
                                        </div>
                                        <div class="col-6 text-right">
                                            <label for="product_gender_2">NỮ</label>
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
                            <input type="file" id="product_images_upload" class="round" name="product_images_upload[]" multiple>
                        </div>
                    </div>
                    <div class="card border-left-blue border-right-blue">
                        <div class="card-body">
                            <h4 class="card-title">Chuyên mục & hãng</h4><hr>
                            <fieldset class="form-group">
                                <label><strong class="text-danger">(*)</strong> Chuyên Mục</label><br />
                                <select name="product_category" id="category_select" class="select2 form-control border-grey-blue" required>
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
                            $('textarea[name=product_content]').html(data.product_content);
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
    default:
        $product_where = array();
        $product_where['product_status !='] = 0;
        // Tính tổng số lượng product
        $db->select('product_id')->from(_TABLE_PRODUCT)->where($product_where)->execute();
        $pagination['count']       = $db->affected_rows;
        $pagination['page_row']    = _CONFIG_PAGINATION;
        $pagination['page_num']    = ceil($pagination['count']/$pagination['page_row']);
        $pagination['url']         = _URL_ADMIN.'/product.php?page={page}';
        $page_start                = ($page-1) * $pagination['page_row'];

        // Hiển thị dữ liệu
        $db->from(_TABLE_PRODUCT)->where($product_where);
        $db->limit(_CONFIG_PAGINATION, $page_start);
        $db->order_by('product_id', 'desc');
        $data = $db->fetch();

        $css_plus       = array(
            'app-assets/vendors/css/forms/toggle/bootstrap-switch.min.css',
            'app-assets/vendors/css/forms/toggle/switchery.min.css',
            'app-assets/css/plugins/forms/switch.min.css',
            'app-assets/css/core/colors/palette-switch.min.css',
            'app-assets/vendors/css/extensions/sweetalert.css'
        );
        $js_plus        = array(
            'app-assets/vendors/js/forms/toggle/bootstrap-switch.min.js',
            'app-assets/vendors/js/forms/toggle/bootstrap-checkbox.min.js',
            'app-assets/vendors/js/forms/toggle/switchery.min.js',
            'app-assets/js/scripts/forms/switch.min.js',
            'app-assets/vendors/js/extensions/sweetalert.min.js',
            'app-assets/js/scripts/extensions/sweet-alerts.min.js'
        );
        $header['breadcrumbs']  = array(_URL_ADMIN.'/product.php' => 'Sản phẩm', _URL_ADMIN.'/product.php' => 'Danh sách sản phẩm', _URL_ADMIN.'/product.php?act=add' => 'Thêm sản phẩm');
        $header['title']        = 'Danh sách sản phẩm';
        require_once 'header.php';
        echo $function->breadcrumbs($header['title'].' ('. $pagination['count'] .')', $header['breadcrumbs']);
        ?>
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card product_item_list">
                    <div class="body table-responsive">
                        <table class="table table-hover m-b-0">
                            <thead>
                            <tr>
                                <th width="5%">Ảnh</th>
                                <th width="40%">Tên sản phẩm</th>
                                <th data-breakpoints="sm xs" width="5%">Giá chuẩn (¥)</th>
                                <th data-breakpoints="sm xs" width="5%">Giá khuyến mãi (¥)</th>
                                <th data-breakpoints="sm xs" width="10%">Giá Việt Nam (₫)</th>
                                <th data-breakpoints="sm xs" width="10%">Chuyên mục</th>
                                <th data-breakpoints="sm xs" width="5%">Nổi bật</th>
                                <th data-breakpoints="sm xs" width="10%">Người Đăng</th>
                                <th data-breakpoints="sm xs" width="10%">Ngày đăng</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            foreach ($data as $row){
                                $product_user       = $db->select()->from(_TABLE_USER)->where('user_id', $row['product_user'])->fetch_first();
                                $product_images     = $db->select()->from(_TABLE_MEDIA)->where(array('media_store' => 'remote', 'media_type' => 'images_product', 'media_parent' => $row['product_id']))->fetch_first();
                                $product_category   = $db->select('category_name')->from(_TABLE_CATEGORY)->where('category_id', $row['product_category'])->fetch_first();
                                echo '<tr id="tr_'. $row['product_id'] .'">';
                                    echo '<td><img class="rounded" src="'. $product_images['media_source'] .'" height="50" /></td>';
                                    echo '<td data-hover="product_name" data-content="'. $row['product_id'] .'">
                                            <a href="product.php?act=update&id='. $row['product_id'] .'"><strong>'. $row['product_name'] .'</strong></a>
                                            <span style="display: none" id="product_manager_'. $row['product_id'] .'"><br />
                                            <a href="">Xem</a> - <a href="product.php?act=update&id='. $row['product_id'] .'">Chỉnh sửa</a> - <a href="javascript:;" data-hover="product_delete" data-num="'. $row['product_id'] .'" class="text-danger">Xóa</a></span>
                                         </td>';
                                    echo '<td>'. $row['product_price_default'] .' ¥</td>';
                                    echo '<td>'. $row['product_price_promotion'] .' ¥</td>';
                                    echo '<td>'. number_format($row['product_price_vn'], 0,'', '.') .' ₫</td>';
                                    echo '<td>'. $product_category['category_name'] .'</td>';
                                    echo '<td><input data-content="'. $row['product_id'] .'" name="product_status" type="checkbox" '. (($row['product_status'] == 2) ? 'checked' : '') .' class="switchery" data-size="xs" data-color="primary"/></td>';
                                    echo '<td>'. $product_user['user_name'] .'</td>';
                                    echo '<td>'. $function->getTimeDisplay($row['product_time']) .'</td>';
                                echo '</tr>';
                            }
                            ?>
                            </tbody>
                        </table>
                        <?=$function->pagination($pagination)?>
                    </div>
                </div>
            </div>
        </div>
        <script language="JavaScript">
            $(document).ready(function () {
                // Xóa bài viết
                $('a[data-hover=product_delete]').click(function () {
                    var id = $(this).attr('data-num');
                    swal({
                        title: "Bạn có chắc chắn muốn xóa bài viết này?" + id,
                        text: "Sau khi xóa sẽ không khôi phục được!",
                        icon: "warning",
                        buttons: {
                            cancel: {
                                text: "Quay Lại",
                                value: null,
                                visible: true,
                                className: "",
                                closeModal: true,
                            },
                            confirm: {
                                text: "Xóa Ngay",
                                value: true,
                                visible: true,
                                className: "",
                                closeModal: false
                            }
                        }
                    }).then((isConfirm) => {
                        if (isConfirm) {
                            $.ajax({
                            url     : '<?=_URL_HOME?>/api/ajax.php',
                            method  : 'POST',
                            dataType: 'json',
                            data    : {'act' : 'trash_product', 'id' : id},
                            success : function (data) {
                            if(data.response == 200){
                                $('#tr_'+id).remove();
                                swal("Deleted!", data.message, "success");
                            }else{
                                swal("Error!", data.message, "error");
                                }
                                }
                            });
                        }
                    });
                });

                // Sử lý hover
                $('td[data-hover=product_name]').hover(function () {
                    var data_content = $(this).attr('data-content');
                    $('#product_manager_'+data_content).show().fadeIn(1000);
                }, function () {
                    var data_content = $(this).attr('data-content');
                    $('#product_manager_'+data_content).hide().fadeOut(1000);
                });

                // Update trạng thái sản phẩm
                $('input[name=product_status]').change(function () {
                    var product_id = $(this).attr('data-content');
                    if(this.checked){
                        var product_status = 2;
                    }else{
                        var product_status = 1;
                    }
                    $.ajax({
                        url     : '<?=_URL_HOME?>/api/',
                        method  : 'POST',
                        dataType: 'json',
                        data    : {'act' : 'product', 'type' : 'update_status', 'id' : product_id, 'product_status' : product_status},
                        success : function (data) {
                            if(data.response == 200){
                                swal("Update!", data.message, "success");
                            }else{
                                swal("Error!", data.message, "error");
                            }
                        }
                    });
                });
            });
        </script>
        <?php
        require_once 'footer.php';
        break;
}
