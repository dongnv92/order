<?php
/**
 * Created by PhpStorm.
 * User: DONG
 * Date: 2019-01-31
 * Time: 16:26
 */
require_once '../includes/core.php';
// Kiểm tra đã đăng nhập chưa
if(!$user){$function->redirect(_URL_LOGIN);}
$admin_module   = 'purchase';

switch ($act){
    case 'add_payment':

        break;
    case 'detail':
        $bill_code          = isset($_GET['billcode']) && !empty($_GET['billcode']) ? $_GET['billcode'] : '';
        $bill               = $db->from(_TABLE_BILL)->where('bill_code', $bill_code)->fetch_first();
        // Kiểm tra đơn hàng có tồn tại không
        if(!$bill || !$function->checkRole('bill', $bill_code)){
            require_once 'header.php';
            echo $function->getPanelError(array('title' => 'Chi tiết đơn hàng', 'content' => 'Hóa đơn này không tồn tại hoặc bạn không có quyền xem!'));
            require_once 'footer.php';
            break;
        }
        $db->select()->from(_TABLE_BILL_PRODUCT)->where('bill_product_bill', $bill['bill_id'])->execute();
        $product_count = $db->affected_rows;

        $header['title']        = 'Chi tiết đơn hàng '.$bill['bill_code'];
        $header['breadcrumbs']  = array(_URL_ADMIN.'/purchase.php' => 'Đơn hàng', $function->getCurrentDomain() => 'Xem đơn hàng');
        $css_plus       = array(
            'app-assets/vendors/css/forms/icheck/icheck.css',
            'app-assets/vendors/css/forms/icheck/custom.css',
            'app-assets/vendors/css/editors/tinymce/tinymce.min.css',
            'app-assets/vendors/css/forms/selects/select2.min.css',
            'app-assets/vendors/css/forms/toggle/bootstrap-switch.min.css',
            'app-assets/vendors/css/forms/toggle/switchery.min.css',
            'app-assets/css/plugins/forms/switch.min.css',
            'app-assets/css/core/colors/palette-switch.min.css',
            'app-assets/vendors/css/extensions/sweetalert.css',
            'app-assets/css/plugins/forms/wizard.css'
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
            'app-assets/js/scripts/extensions/sweet-alerts.min.js',
            'app-assets/js/scripts/forms/wizard-steps.js'
        );
        require_once 'header.php';
        echo $function->breadcrumbs($header['title'], $header['breadcrumbs']);
        switch ($bill['bill_status']){
            case 0:
                $class_  = 'first done';
                $class_0 = 'current';
                $class_1 = 'disabled';
                $class_2 = 'disabled';
                $class_3 = 'last disabled';
                break;
            case 1:
                $class_  = 'first done';
                $class_0 = 'done';
                $class_1 = 'current';
                $class_2 = 'disabled';
                $class_3 = 'last disabled';
                break;
            case 2:
                $class_  = 'first done';
                $class_0 = 'done';
                $class_1 = 'done';
                $class_2 = 'current';
                $class_3 = 'last disabled';
                break;
            case 3:
                $class_  = 'first done';
                $class_0 = 'done';
                $class_1 = 'done';
                $class_2 = 'done';
                $class_3 = 'last disabled done current';
                break;
            }
        ?>
        <!-- STEP -->
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <div class="icons-tab-steps wizard-circle wizard clearfix" role="application">
                            <div class="steps clearfix">
                                <ul role="tablist">
                                    <li role="tab" class="<?=$class_?>" aria-disabled="false" aria-selected="false">
                                        <a id="steps-uid-2-t-0" href="javascript:;" aria-controls="steps-uid-2-p-0">
                                            <span class="step"><i class="la la-file-text-o"></i></span>
                                            <strong>Đơn hàng đã đặt</strong><br />
                                            <?=date('H:i:s d/m/Y', strtotime($bill['bill_time']))?>
                                        </a>
                                    </li>
                                    <li role="tab" class="<?=$class_0?>" aria-disabled="false" aria-selected="true">
                                        <a id="steps-uid-2-t-0" href="javascript:;" data-label="update_status" data-num="1" aria-controls="steps-uid-2-p-0">
                                            <span class="step"><i class="la la-clock-o"></i></span>
                                            <strong>Đang chờ xét duyệt</strong><br />
                                            <?=$bill['bill_time_status_1'] ? date('H:i:s d/m/Y', strtotime($bill['bill_time_status_1'])) : ''?>
                                        </a>
                                    </li>
                                    <li role="tab" class="<?=$class_1?>" aria-disabled="false" aria-selected="true">
                                        <a id="steps-uid-2-t-1" href="javascript:;" data-label="update_status" data-num="2" aria-controls="steps-uid-2-p-1">
                                            <span class="step"><i class="ft-shopping-cart"></i></span>
                                            <strong>Đang chờ lấy hàng</strong><br />
                                            <?=$bill['bill_time_status_2'] ? date('H:i:s d/m/Y', strtotime($bill['bill_time_status_2'])) : ''?>
                                        </a>
                                    </li>
                                    <li role="tab" class="<?=$class_2?>" aria-disabled="true">
                                        <a id="steps-uid-2-t-2" href="javascript:;" data-label="update_status" data-num="3" aria-controls="steps-uid-2-p-2">
                                            <span class="step"><i class="step-icon la la-truck"></i></span>
                                            <strong>Đang giao hàng</strong><br />
                                            <?=$bill['bill_time_status_3'] ? date('H:i:s d/m/Y', strtotime($bill['bill_time_status_3'])) : ''?>
                                        </a>
                                    </li>
                                    <li role="tab" class="<?=$class_3?>" aria-disabled="true">
                                        <a id="steps-uid-2-t-2" href="javascript:;" data-label="update_status" data-num="4" aria-controls="steps-uid-2-p-2">
                                            <span class="step"><i class="ft-check-circle"></i></span>
                                            <strong>Đơn hàng đã nhận</strong><br />
                                            <?=$bill['bill_time_status_4'] ? date('H:i:s d/m/Y', strtotime($bill['bill_time_status_4'])) : ''?>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- STEP -->
        <!-- PRODUCT -->
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-1">
                <h3 class="content-header-title">Danh sách sản phẩm (<?=$product_count?>)</h3>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card product_item_list">
                    <div class="body table-responsive">
                        <table class="table table-hover m-b-0">
                            <thead>
                            <tr>
                                <th width="10%" class="text-center">Ảnh</th>
                                <th width="40%" class="text-center">Tên sản phẩm</th>
                                <th data-breakpoints="sm xs" width="10%" class="text-center">Màu</th>
                                <th data-breakpoints="sm xs" width="10%" class="text-center">Size</th>
                                <th data-breakpoints="sm xs" width="10%" class="text-center">Giá</th>
                                <th data-breakpoints="sm xs" width="10%" class="text-center">Số lượng</th>
                                <th data-breakpoints="sm xs" width="10%" class="text-center">Thành tiền</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            foreach ($db->select()->from(_TABLE_BILL_PRODUCT)->where('bill_product_bill', $bill['bill_id'])->fetch() as $row){
                                $product            = $db->from(_TABLE_PRODUCT)->where('product_id', $row['bill_product_product'])->fetch_first();
                                $product_images     = $db->select()->from(_TABLE_MEDIA)->where(array('media_store' => 'remote', 'media_type' => 'images_product', 'media_parent' => $product['product_id']))->fetch_first();
                                echo '<tr>';
                                echo '<td class="text-center"><img class="rounded" src="'. $product_images['media_source'] .'" height="50" /></td>';
                                echo '<td class="text-center"><a href="'. $function->getUrlProduct($product['product_id']) .'" target="_blank">'. $product['product_name'] .'</a></td>';
                                echo '<td class="text-center">'. ($row['bill_product_color'] ? '<img src="'. $row['bill_product_color'] .'" height="50" />' : 'Không chọn') .'</td>';
                                echo '<td class="text-center">'. ($row['bill_product_size'] ? $row['bill_product_size'] : 'Không chọn') .'</td>';
                                echo '<td class="text-center">'. $function->convertNumberMoney($row['bill_product_price']) .'đ</td>';
                                echo '<td class="text-center">'. $row['bill_product_quantity'] .'</td>';
                                echo '<td class="text-center">'. $function->convertNumberMoney($row['bill_product_total_price']) .'đ</td>';
                                echo '</tr>';
                            }
                            ?>
                            <tr>
                                <td colspan="6" class="text-center">Tổng tiền</td>
                                <td class="text-center"><?=$function->convertNumberMoney($bill['bill_total_money'])?>đ</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- PRODUCT -->
        <!-- CONTACT -->
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-1">
                <h3 class="content-header-title">Thông tin người nhận & Thanh toán</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 order-md-2 mb-4">
                <div class="card">
                    <div class="card-header mb-3">
                        <h4 class="card-title">Thông tin người nhận</h4>
                    </div>
                    <div class="card-content">
                        <ul class="list-group mb-3">
                            <li class="list-group-item d-flex justify-content-between lh-condensed">
                                <div><h6 class="my-0">Họ tên</h6></div>
                                <span class="text-muted"><?=$bill['bill_name']?></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between lh-condensed">
                                <div><h6 class="my-0">Số điện thoại</h6></div>
                                <span class="text-muted"><?=$bill['bill_phone']?></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between lh-condensed">
                                <div><h6 class="my-0">Địa chỉ nhận</h6></div>
                                <span class="text-muted"><?=$bill['bill_address']?></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between lh-condensed">
                                <div><h6 class="my-0">Ghi chú</h6></div>
                                <span class="text-muted"><?=$bill['bill_note']?></span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6 order-md-2 mb-4">
                <div class="card">
                    <div class="card-header mb-3">
                        <h4 class="card-title">Lịch sử thanh toán</h4>
                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                        <?php if(in_array($user['user_role'], array(35))) {?>
                        <div class="heading-elements">
                            <ul class="list-inline mb-0">
                                <li>
                                    <a class="btn btn-sm btn-outline-blue box-shadow-2 round btn-min-width pull-right" href="#">Thêm thanh toán</a>
                                </li>
                            </ul>
                        </div>
                        <?php }?>
                    </div>
                    <div class="card-content">
                        <ul class="list-group mb-3">
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <script language="JavaScript">
            $(document).ready(function () {
                $('a[data-label=update_status]').click(function () {
                    var status = $(this).attr('data-num');
                    swal({
                        title: "Update trạng thái đơn hàng?",
                        text: "Bạn có chắc chắn muốn cập nhập trạng thái đơn hàng không!",
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
                                text: "Update",
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
                                method  : 'GET',
                                dataType: 'json',
                                data    : {'act' : 'update_status_bill', 'billcode' : '<?=$bill_code?>', 'status' : status},
                                success : function (data) {
                                    if(data.response == 200){
                                        swal("Cập nhập trạng thái Bill", data.message, "success");
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
        <!-- CONTACT -->
        <?php
        require_once 'footer.php';
        break;
    case 'all_purchase':
        if(!in_array($user['user_role'], array(35))){
            require_once 'header.php';
            echo $function->getPanelError(array('title' => 'Không có quyền xem', 'content' => 'Bạn không thể xem'));
            require_once 'footer.php';
            break;
        }
        // Product Where
        $product_where              = array();
        if(in_array($type, array('review', 'pickup', 'delivery', 'done', 'cancel'))){
            switch ($type){
                case 'review':
                    $product_where['bill_status'] = 0;
                    break;
                case 'pickup':
                    $product_where['bill_status'] = 1;
                    break;
                case 'delivery':
                    $product_where['bill_status'] = 2;
                    break;
                case 'done':
                    $product_where['bill_status'] = 3;
                    break;
                case 'cancel':
                    $product_where['bill_status'] = 4;
                    break;
            }
        }
        // Product Where

        // Config Pagination
        $db->select('bill_id')->from(_TABLE_BILL)->where($product_where)->execute();
        $product_count              = $db->affected_rows;
        $pagination['page_row']     = _CONFIG_PAGINATION_PRODUCT;
        $pagination['page_num']     = ceil($product_count/$pagination['page_row']);
        $pagination['url']          = '';
        $page_start                 = ($page-1) * $pagination['page_row'];
        // Config Pagination

        // Data
        $db->from(_TABLE_BILL)->where($product_where);
        $db->order_by('bill_id', 'DESC');
        $db->limit(_CONFIG_PAGINATION_PRODUCT, $page_start);
        $data = $db->fetch();
        // Data
        $header['title']        = 'Tất cả đơn hàng';
        $header['breadcrumbs']  = array(_URL_ADMIN.'/purchase.php' => 'Đơn hàng', _URL_ADMIN.'/purchase.php' => 'Đơn hàng của bạn');
        require_once 'header.php';
        echo $function->breadcrumbs($header['title'].' ('. $product_count .')', $header['breadcrumbs']);
        ?>
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card product_item_list">
                    <div class="body table-responsive">
                        <table class="table table-hover m-b-0">
                            <thead>
                            <tr>
                                <th width="10%" class="text-center">Mã đơn hàng</th>
                                <th width="20%" class="text-center">Tên người mua</th>
                                <th data-breakpoints="sm xs" width="20%" class="text-center">Số điện thoại nhận</th>
                                <th data-breakpoints="sm xs" width="10%" class="text-center">Số lượng SP</th>
                                <th data-breakpoints="sm xs" width="10%" class="text-center">Tổng tiền</th>
                                <th data-breakpoints="sm xs" width="15%" class="text-center">Trạng thái</th>
                                <th data-breakpoints="sm xs" width="15%" class="text-center">Thời gian</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            if(count($data) == 0){
                                echo '<tr><td colspan="7" class="text-center">Chưa có đơn hàng nào.</td></tr>';
                            }
                            foreach ($data as $row){
                                $db->select()->from(_TABLE_BILL_PRODUCT)->where('bill_product_bill', $row['bill_id'])->execute();
                                $product_count = $db->affected_rows;
                                echo '<tr>';
                                echo '<td class="text-center"><a href="'. _URL_ADMIN .'/purchase.php?act=detail&billcode='. $row['bill_code'] .'">#'. $row['bill_code'] .'</a></td>';
                                echo '<td class="text-center">'. $row['bill_name'] .'</td>';
                                echo '<td class="text-center">'. $row['bill_phone'] .'</td>';
                                echo '<td class="text-center">'. $product_count .'</td>';
                                echo '<td class="text-center">'. $function->convertNumberMoney($row['bill_total_money']) .'đ</td>';
                                echo '<td class="text-center">'. $function->getStatus(_TABLE_BILL, $row['bill_status']) .'</td>';
                                echo '<td class="text-center">'. date('H:i:s d/m/Y', strtotime($row['bill_time'])) .'</td>';
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
        <?php
        require_once 'footer.php';
        break;
    default:
        // Product Where
        $product_where              = array();
        $product_where['bill_user'] = $user['user_id'];
        if(in_array($type, array('review', 'pickup', 'delivery', 'done', 'cancel'))){
            switch ($type){
                case 'review':
                    $product_where['bill_status'] = 0;
                    break;
                case 'pickup':
                    $product_where['bill_status'] = 1;
                    break;
                case 'delivery':
                    $product_where['bill_status'] = 2;
                    break;
                case 'done':
                    $product_where['bill_status'] = 3;
                    break;
                case 'cancel':
                    $product_where['bill_status'] = 4;
                    break;
            }
        }
        // Product Where

        // Config Pagination
        $db->select('bill_id')->from(_TABLE_BILL)->where($product_where)->fetch();
        $product_count              = $db->affected_rows;
        $pagination['page_row']     = _CONFIG_PAGINATION_PRODUCT;
        $pagination['page_num']     = ceil($product_count/$pagination['page_row']);
        $pagination['url']          = '';
        $page_start                 = ($page-1) * $pagination['page_row'];
        // Config Pagination

        // Data
        $db->from(_TABLE_BILL)->where($product_where);
        $db->order_by('bill_id', 'DESC');
        $db->limit(_CONFIG_PAGINATION_PRODUCT, $page_start);
        $data = $db->fetch();
        // Data
        $header['title']        = 'Đơn hàng của bạn';
        $header['breadcrumbs']  = array(_URL_ADMIN.'/purchase.php' => 'Đơn hàng', _URL_ADMIN.'/purchase.php' => 'Đơn hàng của bạn');
        require_once 'header.php';
        echo $function->breadcrumbs($header['title'], $header['breadcrumbs']);
        ?>
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card product_item_list">
                    <div class="body table-responsive">
                        <table class="table table-hover m-b-0">
                            <thead>
                            <tr>
                                <th width="10%" class="text-center">Mã đơn hàng</th>
                                <th width="20%" class="text-center">Tên người mua</th>
                                <th data-breakpoints="sm xs" width="20%" class="text-center">Số điện thoại nhận</th>
                                <th data-breakpoints="sm xs" width="10%" class="text-center">Số lượng SP</th>
                                <th data-breakpoints="sm xs" width="10%" class="text-center">Tổng tiền</th>
                                <th data-breakpoints="sm xs" width="15%" class="text-center">Trạng thái</th>
                                <th data-breakpoints="sm xs" width="15%" class="text-center">Thời gian</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            if(count($data) == 0){
                                echo '<tr><td colspan="7" class="text-center">Chưa có đơn hàng nào.</td></tr>';
                            }
                            foreach ($data as $row){
                            $db->select()->from(_TABLE_BILL_PRODUCT)->where('bill_product_bill', $row['bill_id'])->execute();
                            $product_count = $db->affected_rows;
                            echo '<tr>';
                                echo '<td class="text-center"><a href="'. _URL_ADMIN .'/purchase.php?act=detail&billcode='. $row['bill_code'] .'">#'. $row['bill_code'] .'</a></td>';
                                echo '<td class="text-center">'. $row['bill_name'] .'</td>';
                                echo '<td class="text-center">'. $row['bill_phone'] .'</td>';
                                echo '<td class="text-center">'. $product_count .'</td>';
                                echo '<td class="text-center">'. $function->convertNumberMoney($row['bill_total_money']) .'đ</td>';
                                echo '<td class="text-center">'. $function->getStatus(_TABLE_BILL, $row['bill_status']) .'</td>';
                                echo '<td class="text-center">'. date('H:i:s d/m/Y', strtotime($row['bill_time'])) .'</td>';
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
        <?php
        require_once 'footer.php';
        break;
}