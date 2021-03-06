<?php
/**
 * Created by PhpStorm.
 * User: DONG
 * Date: 06/12/2018
 * Time: 14:11
 */

require_once '../includes/core.php';
// Kiểm tra đã đăng nhập chưa
if(!$user){ $function->redirect(_URL_LOGIN);exit();}
$admin_module   = 'category';

switch ($act){
    default:
        if(!in_array($type, array('shop', 'brand', 'quality', 'role', 'payment_method'))){
            $admin_title = 'Chuyên Mục';
            require_once 'header.php';
            echo $function->getPanelError(array('title' => 'Trang Không Tồn Tại', 'content' => 'Không đúng định dạng chuyên mục !'));
            require_once 'footer.php';
            break;
        }
        if($submit){
            $category_name      = (isset($_POST['category_name'])   && !empty($_POST['category_name']))     ? $_POST['category_name']   : false;
            $category_url       = (isset($_POST['category_url'])    && !empty($_POST['category_url']))      ? $_POST['category_url']    : false;
            $category_parent    = (isset($_POST['category_parent']) && !empty($_POST['category_parent']))   ? $_POST['category_parent'] : 0;
            $error              = array();

            if(!$category_name){
                $error['category_name'] = 'Bạn chưa nhập tên chuyên mục';
            }
            if(!$category_url){
                $category_url = $function->makeSlug($category_name);
            }

            $db->select('category_url')->from(_TABLE_CATEGORY)->where(array('category_url' => $category_url))->fetch_first();
            if($db->affected_rows > 0){
                $error['category_url'] = 'URL đã tồn tại';
            }

            if($category_parent){
                $db->select('category_id')->from(_TABLE_CATEGORY)->where(array('category_id' => $category_parent))->fetch_first();
                if($db->affected_rows == 0){
                    $error['category_parent'] = 'Chuyên Mục Không Tồn Tại';
                }
            }

            if(!$error){
                $data = array(
                    'category_name'     => $category_name,
                    'category_url'      => $category_url,
                    'category_type'     => $type,
                    'category_parent'   => $category_parent,
                    'category_user'     => $user['users_id'],
                    'category_time'     => _CONGIF_TIME
                );
                $id = $db->insert(_TABLE_CATEGORY, $data);
                if(!$id){
                    $admin_title = 'Thêm Chuyên Mục Video';
                    require_once 'header.php';
                    require_once 'footer.php';
                    break;
                }
            }
        }

        $css_plus       = array(
            'app-assets/vendors/css/extensions/sweetalert.css'
        );
        $js_plus        = array(
            'app-assets/vendors/js/extensions/sweetalert.min.js',
            'app-assets/js/scripts/extensions/sweet-alerts.min.js'
        );

        switch ($act){
            default:
                switch ($type){
                    case 'role':
                        $header['title'] = 'Vai trò thành viên';
                        break;
                    case 'shop':
                        $header['title'] = 'Chuyên mục sản phẩm';
                        break;
                    case 'brand':
                        $header['title'] = 'Danh sách thương hiệu';
                        break;
                    case 'quality':
                        $header['title'] = 'Danh sách loại sản phẩm';
                        break;
                    case 'payment_method':
                        $header['title'] = 'Hình thức thanh toán';
                        break;
                }
                break;
        }
        require_once 'header.php';
        ?>
        <div class="row">
            <div class="col-4">
                <div class="card">
                    <div class="card-header"><h4 class="card-title">Thêm Chuyên Mục</h4></div>
                    <div class="card-body">
                        <?php if($submit && !$error){ echo $function->getAlert('success', 'Thêm chuyên mục thành công'); }?>
                        <form action="" class="form form-horizontal" method="post">
                            <div class="form-group label-floating">
                                <label class="control-label">Tên Chuyên Mục</label>
                                <input type="text" required value="<?php $category_name;?>" name="category_name" placeholder="Nhập Tên Chuyên Mục" class="<?php echo $function->form_style('text_input')?>">
                                <?php echo $error['category_name'] ? $function->getAlert('help_error', $error['category_name']) : '';?>
                            </div>
                            <div class="form-group label-floating">
                                <label class="control-label">Đường Dẫn</label>
                                <input type="text" value="<?php $category_url?>" name="category_url" placeholder="Nhập Tên Đường Dẫn" class="<?php echo $function->form_style('text_input')?>">
                                <?php echo $error['category_url'] ? $function->getAlert('help_error', $error['category_url']) : '';?>
                            </div>
                            <fieldset class="form-group">
                                <p>Chuyên mục cha</p>
                                <select name="category_parent" class="<?php echo $function->form_style('text_input')?>">
                                    <option value="0">Trống</option>
                                    <?php $function->showCategories($db->select('category_id, category_name, category_parent')->from(_TABLE_CATEGORY)->where(array('category_type' => $type))->fetch(), 0, '','select'); ?>
                                </select>
                                <?php echo $error['category_parent'] ? $function->getAlert('help_error', $error['category_parent']) : '';?>
                            </fieldset>
                            <div class="text-right"><input type="submit" name="submit" value="Thêm chuyên mục" class="btn btn-outline-blue round"></div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-8">
                <div class="card">
                    <div class="card-header"><h4 class="card-title">Danh Sách Chuyên Mục</h4></div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table mb-0" id="table_content">
                                <tbody>
                                <?php $function->showCategories($db->select('category_id, category_name, category_parent, category_type')->from(_TABLE_CATEGORY)->where(array('category_type' => $type))->fetch(), 0, '','table'); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script language="JavaScript">
            $(document).ready(function () {
                $('a[title=delete]').click(function () {
                    var ID = $(this).attr('id');
                    swal({
                        title: "Bạn có chắc chắn muốn xóa?",
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
                    })
                    .then((isConfirm) => {
                        if (isConfirm) {
                            $.ajax({
                                url     : '<?php echo _URL_HOME;?>/includes/ajax.php',
                                method  : 'POST',
                                dataType: 'json',
                                data    : {'act' : 'category', 'type' : 'delete', 'id' : ID},
                                success : function (data) {
                                    if(data.resposive == 200){
                                        $('#option_' + ID).remove();
                                        $('#tr_' + ID).remove();
                                        swal("Deleted!", "Đã Xóa Chuyên Mục Thành Công.", "success");
                                    }else{
                                        swal("Error!", "Có lỗi khi thực hiện xóa chuyên mục. Vui lòng thử lại!", "error");
                                    }
                                }
                            });
                        }
                    });
                })
            });
        </script>
        <?php
        require_once 'footer.php';
     break;
}