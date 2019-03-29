<?php
/**
 * Created by PhpStorm.
 * User: DONG
 * Date: 2019-03-29
 * Time: 16:26
 */
require_once '../includes/core.php';
// Kiểm tra đã đăng nhập chưa
if(!$user){$function->redirect(_URL_LOGIN);}
$admin_module   = 'users';

if(!in_array($user['user_role'], array(35))){
    require_once 'header.php';
    echo $function->getPanelError(array('title' => 'Không có quyền xem', 'content' => 'Bạn không thể xem nội dung này'));
    require_once 'footer.php';
    exit();
}

switch ($act){
    case 'add':
        $header['title']        = 'Thêm thành viên';
        $header['breadcrumbs']  = array(_URL_ADMIN.'/users.php' => 'Thành viên', _URL_ADMIN.'/users.php?act=add' => 'Thêm thành viên');
        require_once 'header.php';
        echo $function->breadcrumbs($header['title'], $header['breadcrumbs']);
        ?>
        <div class="row match-height">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-content collapse show">
                        <div class="card-body">
                            <form class="form">
                                <div class="form-body">
                                    <div class="form-group">
                                        <label for="complaintinput1">Tên đăng nhập <small><i>(Từ 4 đến 32 ký tự) *</i></small></label>
                                        <input type="text" class="form-control round" placeholder="Tên đăng nhập" name="user_login" value="<?=$user_login?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="complaintinput1">Tên hiển thị <small><i>(Nhỏ hơn 50 ký tự)</i></small></label>
                                        <input type="text" class="form-control round" placeholder="Tên hiển thị" name="user_name" value="<?=$user_name?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="complaintinput1">Số điện thoại *</label>
                                        <input type="text" class="form-control round" placeholder="Số điện thoại" name="user_phone" value="<?=$user_phone?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="complaintinput1">Email *</label>
                                        <input type="email" class="form-control round" placeholder="Địa chỉ Email" name="user_email" value="<?=$user_email?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="complaintinput1">Mật khẩu <small><i>(Từ 6 đến 32 ký tự)</i></small> *</label>
                                        <input type="text" class="form-control round" placeholder="Mật khẩu" name="user_pass" value="<?=$user_pass?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="complaintinput5">Địa chỉ</label>
                                        <textarea rows="5" class="form-control round" name="user_address" placeholder="Địa chỉ"><?=$user_address?></textarea>
                                    </div>
                                    <fieldset class="form-group">
                                        <label>Vai trò</label><br />
                                        <select name="user_role" class="form-control border-grey-blue round">
                                        <?php
                                        foreach ($db->select('category_id, category_name')->from(_TABLE_CATEGORY)->where('category_type', 'role')->fetch() as $fetch_role){
                                            echo '<option value="'. $fetch_role['category_id'] .'">'. $fetch_role['category_name'] .'</option>';
                                        }
                                        ?>
                                        </select>
                                        <?php echo $error['product_brand'] ? $function->getAlert('help_error', $error['product_brand']) : '';?>
                                    </fieldset>
                                </div>
                                <div class="form-actions text-center">
                                    <input type="reset" class="btn btn-outline-danger round" value="Nhập Lại">
                                    <input type="submit" name="submit" class="btn btn-outline-info round" value="Thêm thành viên mới">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <?php
        require_once 'footer.php';
        break;
    default:
        // Where
        $where                      = array();
        // Where

        // Config Pagination
        $db->select('user_id')->from(_TABLE_USER)->where($where)->execute();
        $count_record               = $db->affected_rows;
        $pagination['page_row']     = _CONFIG_PAGINATION_PRODUCT;
        $pagination['page_num']     = ceil($count_record/$pagination['page_row']);
        $pagination['url']          = '';
        $page_start                 = ($page-1) * $pagination['page_row'];
        // Config Pagination

        // Data
        $db->from(_TABLE_USER)->where($where);
        $db->order_by('user_id', 'ASC');
        $db->limit(_CONFIG_PAGINATION_PRODUCT, $page_start);
        $data = $db->fetch();
        // Data

        $header['title']        = 'Quản lý thành viên';
        $header['breadcrumbs']  = array(_URL_ADMIN.'/users.php' => 'Thành viên', _URL_ADMIN.'/users.php' => 'Quản lý thành viên');
        require_once 'header.php';
        echo $function->breadcrumbs($header['title'].' ('. $count_record .')', $header['breadcrumbs']);
        ?>
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card product_item_list">
                    <div class="body table-responsive">
                        <table class="table table-hover m-b-0">
                            <thead>
                            <tr>
                                <th width="" class="text-center">Tên đăng nhập</th>
                                <th width="" class="text-center">Họ tên</th>
                                <th width="" class="text-center">Số điện thoại</th>
                                <th width="" class="text-center">Email</th>
                                <th width="" class="text-center">Vai trò</th>
                                <th width="" class="text-center">Trạng thái</th>
                                <th width="" class="text-center">Thời gian đăng ký</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            if(count($data) == 0){
                                echo '<tr><td colspan="6" class="text-center">Không có thành viên nào.</td></tr>';
                            }
                            foreach ($data as $row){
                                $user_role = $db->select('category_name')->from(_TABLE_CATEGORY)->where('category_id', $row['user_role'])->fetch_first();
                                echo '<tr>';
                                echo '<td class="text-center">'. $row['user_login'] .'</td>';
                                echo '<td class="text-center">'. $row['user_name'] .'</td>';
                                echo '<td class="text-center">'. $row['user_phone'] .'</td>';
                                echo '<td class="text-center">'. $row['user_email'] .'</td>';
                                echo '<td class="text-center">'. $user_role['category_name'] .'</td>';
                                echo '<td class="text-center">'. $function->getStatus(_TABLE_USER, $row['user_status']) .'</td>';
                                echo '<td class="text-center">'. date('H:i:s d/m/Y', $row['user_time']) .'</td>';
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