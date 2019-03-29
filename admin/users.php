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
    case 'update':
        $datauser = $db->from(_TABLE_USER)->where('user_id', $id)->fetch_first();
        if(!$datauser){
            require_once 'header.php';
            echo $function->getPanelError(array('title' => 'Sửa thành viên', 'content' => 'ID thành viên không tồn tại. Vui lòng kiểm tra lại'));
            require_once 'footer.php';
            exit();
        }
        $user_name      = isset($_POST['user_name'])    ? trim($_POST['user_name'])     : $datauser['user_name'];
        $user_login     = isset($_POST['user_login'])   ? trim($_POST['user_login'])    : $datauser['user_login'];
        $user_phone     = isset($_POST['user_phone'])   ? trim($_POST['user_phone'])    : $datauser['user_phone'];
        $user_email     = isset($_POST['user_email'])   ? trim($_POST['user_email'])    : $datauser['user_email'];
        $user_address   = isset($_POST['user_address']) ? trim($_POST['user_address'])  : $datauser['user_address'];
        $user_role      = isset($_POST['user_role'])    ? trim($_POST['user_role'])     : $datauser['user_role'];
        $user_pass      = isset($_POST['user_pass'])    ? trim($_POST['user_pass'])     : '';
        if($submit){
            $error          = array();
            if(strlen($user_name) > 50){
                $error['user_name'] = $function->getAlert('help_error', 'Họ tên không được quá 50 ký tự');
            }
            if(!$user_login){
                $error['user_login'] = $function->getAlert('help_error', 'Bạn cần nhập tên đăng nhập.');
            }
            if(strlen($user_login) <= 3 || strlen($user_login) > 32){
                $error['user_login'] = $function->getAlert('help_error', 'Tên đăng nhập phải từ 4 đến 32 ký tự.');
            }
            if($user_login != $datauser['user_login'] && $db->select('user_id')->from(_TABLE_USER)->where('user_login', $user_login)->fetch_first()){
                $error['user_login'] = $function->getAlert('help_error', 'Tên đăng nhập này đã có người đăng ký, vui lòng chọn tên khác.');
            }
            if(!$user_phone){
                $error['user_phone'] = $function->getAlert('help_error', 'Bạn cần nhập số điện thoại.');
            }
            if(!is_numeric($user_phone) || strlen($user_phone) != 10){
                $error['user_phone'] = $function->getAlert('help_error', 'Định dạng số điện thoại không chính xác.');
            }
            if($user_phone != $datauser['user_phone'] && $db->select('user_id')->from(_TABLE_USER)->where('user_phone', $user_phone)->fetch_first()){
                $error['user_phone'] = $function->getAlert('help_error', 'Số điện thoại này đã có người đăng ký, vui lòng chọn số điện thoại khác.');
            }
            if(!$user_email){
                $error['user_email'] = $function->getAlert('help_error', 'Bạn cần nhập địa chỉ Email.');
            }
            if(!filter_var($user_email, FILTER_VALIDATE_EMAIL)){
                $error['user_email'] = $function->getAlert('help_error', 'Địa chỉ Email không đúng định dạng.');
            }
            if($user_email != $datauser['user_email'] && $db->select('user_id')->from(_TABLE_USER)->where('user_email', $user_email)->fetch_first()){
                $error['user_email'] = $function->getAlert('help_error', 'Email này đã có người đăng ký, vui lòng chọn Email khác.');
            }
            if($user_pass && (strlen($user_pass) <= 5 || strlen($user_pass) > 32)){
                $error['user_pass'] = $function->getAlert('help_error', 'Mật khẩu phải từ 6 đến 32 ký tự.');
            }

            if(!$error){
                $data_user = array(
                    'user_login'    => $user_login,
                    'user_name'     => $user_name,
                    'user_phone'    => $user_phone,
                    'user_address'  => $user_address,
                    'user_avatar'   => '',
                    'user_role'     => $user_role,
                    'user_email'    => $user_email
                );
                if($user_pass){
                    $data_user['user_password'] = md5($user_pass);
                }
                if($db->where('user_id', $id)->update(_TABLE_USER, $data_user)){
                    $notice = $function->getAlert('success', 'Sửa thành viên <strong>'. $datauser['user_name'] .'</strong> OK!!!');
                }
            }
        }
        $header['title']        = 'Sửa thành viên '.$datauser['user_name'];
        $header['breadcrumbs']  = array(_URL_ADMIN.'/users.php' => 'Thành viên', _URL_ADMIN.'/users.php?act=add' => 'Thêm thành viên');
        require_once 'header.php';
        echo $function->breadcrumbs($header['title'], $header['breadcrumbs']);
        ?>
        <div class="row match-height">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-content collapse show">
                        <div class="card-body">
                            <?=$notice ? $notice.'<br>' : ''?>
                            <form class="form form-control" method="post" action="">
                                <div class="form-body">
                                    <div class="form-group">
                                        <label for="complaintinput1">Tên đăng nhập <small><i>(Từ 4 đến 32 ký tự) *</i></small></label>
                                        <input type="text" class="form-control round" placeholder="Tên đăng nhập" name="user_login" value="<?=$user_login?>" required>
                                        <?=$error['user_login'] ? $error['user_login'] : ''?>
                                    </div>
                                    <div class="form-group">
                                        <label for="complaintinput1">Tên hiển thị <small><i>(Nhỏ hơn 50 ký tự)</i></small></label>
                                        <input type="text" class="form-control round" placeholder="Tên hiển thị" name="user_name" value="<?=$user_name?>">
                                        <?=$error['user_name'] ? $error['user_name'] : ''?>
                                    </div>
                                    <div class="form-group">
                                        <label for="complaintinput1">Số điện thoại *</label>
                                        <input type="text" class="form-control round" placeholder="Số điện thoại" name="user_phone" value="<?=$user_phone?>" required>
                                        <?=$error['user_phone'] ? $error['user_phone'] : ''?>
                                    </div>
                                    <div class="form-group">
                                        <label for="complaintinput1">Email *</label>
                                        <input type="email" class="form-control round" placeholder="Địa chỉ Email" name="user_email" value="<?=$user_email?>" required>
                                        <?=$error['user_email'] ? $error['user_email'] : ''?>
                                    </div>
                                    <div class="form-group">
                                        <label for="complaintinput1">Mật khẩu <small><i>(Từ 6 đến 32 ký tự | <i class="text-danger">Nếu không đổi mật khẩu, hãy để trống trường này.</i> )</i></small></label>
                                        <input type="text" class="form-control round" placeholder="Mật khẩu" name="user_pass" value="<?=$user_pass?>">
                                        <?=$error['user_pass'] ? $error['user_pass'] : ''?>
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
                                                echo '<option '. ($user_role == $fetch_role['category_id'] ? ' selected ' : '') .' value="'. $fetch_role['category_id'] .'">'. $fetch_role['category_name'] .'</option>';
                                            }
                                            ?>
                                        </select>
                                    </fieldset>
                                </div>
                                <div class="form-actions text-center">
                                    <input type="reset" class="btn btn-outline-danger round" value="Nhập Lại">
                                    <input type="submit" name="submit" class="btn btn-outline-info round" value="Update thành viên">
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
    case 'add':
        if($submit){
            $user_name      = isset($_POST['user_name'])    ? trim($_POST['user_name'])     : 'Thành viên';
            $user_login     = isset($_POST['user_login'])   ? trim($_POST['user_login'])    : '';
            $user_phone     = isset($_POST['user_phone'])   ? $_POST['user_phone']          : '';
            $user_email     = isset($_POST['user_email'])   ? trim($_POST['user_email'])    : '';
            $user_pass      = isset($_POST['user_pass'])    ? trim($_POST['user_pass'])     : '';
            $user_address   = isset($_POST['user_address']) ? trim($_POST['user_address'])  : '';
            $user_role      = isset($_POST['user_role'])    ? trim($_POST['user_role'])     : '';
            $error          = array();

            if(strlen($user_name) > 50){
                $error['user_name'] = $function->getAlert('help_error', 'Họ tên không được quá 50 ký tự');
            }
            if(!$user_login){
                $error['user_login'] = $function->getAlert('help_error', 'Bạn cần nhập tên đăng nhập.');
            }
            if(strlen($user_login) <= 3 || strlen($user_login) > 32){
                $error['user_login'] = $function->getAlert('help_error', 'Tên đăng nhập phải từ 4 đến 32 ký tự.');
            }
            if($db->select('user_id')->from(_TABLE_USER)->where('user_login', $user_login)->fetch_first()){
                $error['user_login'] = $function->getAlert('help_error', 'Tên đăng nhập này đã có người đăng ký, vui lòng chọn tên khác.');
            }
            if(!$user_phone){
                $error['user_phone'] = $function->getAlert('help_error', 'Bạn cần nhập số điện thoại.');
            }
            if(!is_numeric($user_phone) || strlen($user_phone) != 10){
                $error['user_phone'] = $function->getAlert('help_error', 'Định dạng số điện thoại không chính xác.');
            }
            if($db->select('user_id')->from(_TABLE_USER)->where('user_phone', $user_phone)->fetch_first()){
                $error['user_phone'] = $function->getAlert('help_error', 'Số điện thoại này đã có người đăng ký, vui lòng chọn số điện thoại khác.');
            }
            if(!$user_email){
                $error['user_email'] = $function->getAlert('help_error', 'Bạn cần nhập địa chỉ Email.');
            }
            if(!filter_var($user_email, FILTER_VALIDATE_EMAIL)){
                $error['user_email'] = $function->getAlert('help_error', 'Địa chỉ Email không đúng định dạng.');
            }
            if($db->select('user_id')->from(_TABLE_USER)->where('user_email', $user_email)->fetch_first()){
                $error['user_email'] = $function->getAlert('help_error', 'Email này đã có người đăng ký, vui lòng chọn Email khác.');
            }
            if((strlen($user_pass) <= 5 || strlen($user_pass) > 32)){
                $error['user_pass'] = $function->getAlert('help_error', 'Mật khẩu phải từ 6 đến 32 ký tự.');
            }

            if(!$error){
                $data_user = array(
                    'user_login'    => $user_login,
                    'user_password' => md5($user_pass),
                    'user_name'     => $user_name,
                    'user_phone'    => $user_phone,
                    'user_address'  => $user_address,
                    'user_avatar'   => '',
                    'user_role'     => 38,
                    'user_email'    => $user_email,
                    'user_status'   => 1,
                    'user_time'     => _CONGIF_TIME
                );
                if($db->insert(_TABLE_USER, $data_user)){
                    $function->redirect(_URL_ADMIN.'/users.php');
                    exit();
                }
            }
        }
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
                            <form class="form form-control" method="post" action="">
                                <div class="form-body">
                                    <div class="form-group">
                                        <label for="complaintinput1">Tên đăng nhập <small><i>(Từ 4 đến 32 ký tự) *</i></small></label>
                                        <input type="text" class="form-control round" placeholder="Tên đăng nhập" name="user_login" value="<?=$user_login?>" required>
                                        <?=$error['user_login'] ? $error['user_login'] : ''?>
                                    </div>
                                    <div class="form-group">
                                        <label for="complaintinput1">Tên hiển thị <small><i>(Nhỏ hơn 50 ký tự)</i></small></label>
                                        <input type="text" class="form-control round" placeholder="Tên hiển thị" name="user_name" value="<?=$user_name?>">
                                        <?=$error['user_name'] ? $error['user_name'] : ''?>
                                    </div>
                                    <div class="form-group">
                                        <label for="complaintinput1">Số điện thoại *</label>
                                        <input type="text" class="form-control round" placeholder="Số điện thoại" name="user_phone" value="<?=$user_phone?>" required>
                                        <?=$error['user_phone'] ? $error['user_phone'] : ''?>
                                    </div>
                                    <div class="form-group">
                                        <label for="complaintinput1">Email *</label>
                                        <input type="email" class="form-control round" placeholder="Địa chỉ Email" name="user_email" value="<?=$user_email?>" required>
                                        <?=$error['user_email'] ? $error['user_email'] : ''?>
                                    </div>
                                    <div class="form-group">
                                        <label for="complaintinput1">Mật khẩu <small><i>(Từ 6 đến 32 ký tự)</i></small> *</label>
                                        <input type="text" class="form-control round" placeholder="Mật khẩu" name="user_pass" value="<?=$user_pass?>" required>
                                        <?=$error['user_pass'] ? $error['user_pass'] : ''?>
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
                                            echo '<option '. ($user_role == $fetch_role['category_id'] ? ' selected ' : '') .' value="'. $fetch_role['category_id'] .'">'. $fetch_role['category_name'] .'</option>';
                                        }
                                        ?>
                                        </select>
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
                                echo '<td class="text-center text-bold-700"><a href="users.php?act=update&id='. $row['user_id'] .'">'. $row['user_login'] .'</a></td>';
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