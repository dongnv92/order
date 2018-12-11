<?php
/**
 * Created by PhpStorm.
 * User: DONG
 * Date: 2018-12-06
 * Time: 09:50
 */

class orderFunction{
    // Function chuyển hướng đến trang khác
    function redirect($url){
        if(!$url){
            return false;
        }
        header('location:'.$url);
    }

    // Function hiển thị chuyên mục đệ quy
    function showCategories($categories, $parent_id = 0, $char = '', $display = 'table'){
        foreach ($categories as $key => $item) {
            if ($item['category_parent'] == $parent_id){
                if($display == 'table'){
                    echo '<tr id="tr_'. $item['category_id'] .'">
                    <td width="80%">'. $char . $item['category_name'] .'</td>
                    <td class="text-right"><a title="delete" class="btn btn-outline-danger round btn-sm" id="'. $item['category_id'] .'" href="javascript:;">Xóa</a>
                    </td>
                    </tr>';
                }else if($display == 'select'){
                    echo '<option value="'. $item['category_id'] .'" id="option_'. $item['category_id'] .'">'. $char . $item['category_name'] .'</option>';
                }
                unset($categories[$key]);
                $this->showCategories($categories, $item['category_id'], $char.' |--- ',$display);
            }
        }
    }

    // Function tạo đường dẫn từ 1 đoạn text
    public function makeSlug($text){
        return preg_replace('/[^A-Za-z0-9 -]+/', '-', $this->convertSlug($text));
    }

    private function convertSlug($string, $url = 1) {
        if(!$string) return false;
        $utf8 = array(
            'a'=>'á|à|ả|ã|ạ|ă|ắ|ặ|ằ|ẳ|ẵ|â|ấ|ầ|ẩ|ẫ|ậ|Á|À|Ả|Ã|Ạ|Ă|Ắ|Ặ|Ằ|Ẳ|Ẵ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ',
            'd'=>'đ|Đ',
            'e'=>'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ|É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ',
            'i'=>'í|ì|ỉ|ĩ|ị|Í|Ì|Ỉ|Ĩ|Ị',
            'o'=>'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ|Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ',
            'u'=>'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự|Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự',
            'y'=>'ý|ỳ|ỷ|ỹ|ỵ|Ý|Ỳ|Ỷ|Ỹ|Ỵ',
        );
        foreach($utf8 as $ascii=>$uni) $string = preg_replace("/($uni)/i",$ascii,$string);
        $string = ($url == 1) ? $this->utf8Url($string) : $string;
        return $string;
    }

    private function utf8Url($string){
        $string = strtolower($string);
        $string = str_replace( "ß", "ss", $string);
        $string = str_replace( "%", "", $string);
        $string = preg_replace("/[^_a-zA-Z0-9 -]/", "",$string);
        $string = str_replace(array('%20', ' '), '-', $string);
        $string = str_replace("----","-",$string);
        $string = str_replace("---","-",$string);
        $string = str_replace("--","-",$string);
        return $string;
    }

    public function pagination($config = ''){
        $link = '';
        global $page;
        for($i=$page;$i<=($page+4) && $i<= $config['page_num'] ;$i++){
            if($page==$i){$link= '<li class="page-item active"><a href="javascript:;" class="page-link">'.$i.'</a></li>';}
            else{$link = $link.'<li class="page-item"><a href="'. $config['url'] .'page='.$i.'" class="page-link">'.$i.'</a></li>';}
        }
        if($page>4){$page4='<li class="page-item"><a href="'.$config['url'].'page='.($page-4).'" class="page-link">'.($page-4).'</a></li>';}
        if($page>3){$page3='<li class="page-item"><a href="'.$config['url'].'page='.($page-3).'" class="page-link">'.($page-3).'</a></li>';}
        if($page>2){$page2='<li class="page-item"><a href="'.$config['url'].'page='.($page-2).'" class="page-link">'.($page-2).'</a></li>';}
        if($page>1){
            $page1='<li class="page-item"><a href="'.$config['url'].'page='.($page-1).'" class="page-link">'.($page-1).'</a></li>';
            $link1='<li class="page-item" class="page-link" aria-label="Previous"><a href="'.$config['url'].'page='.($page-1).'" class="page-link"><span aria-hidden="true">« Trang sau</span><span class="sr-only">Previous</span></a></li>';
        }
        if($page < $config['page_num']){$link2='<li class="page-item"><a href="'.$config['url'].'page='.($page+1).'" class="page-link" aria-label="Next"><span aria-hidden="true">Trang tiếp »</span><span class="sr-only">Next</span></a></li>';}
        $linked=$page4.$page3.$page2.$page1;
        if($page<$config['page_num']-4){$page_end_pt='<li class="page-item"><a href="'.$config['url'].'page='.$config['page_num'].'" class="page-link">'.$config['page_num'].'</a></li>';}
        if($page>5){$page_start_pt=' <li class="page-item"><a href="'.$config['url'].'" class="page-link">1</a></li>';}
        if($config['page_num']>1 && $page<=$config['page_num']){
            return '<ul class="pagination justify-content-center pagination-separate">'.$link1.$page_start_pt.$linked.$link.$page_end_pt.$link2.'</ul>';
        }else{
            return false;
        }
    }

    // Function hiển thị Breadcrumbs trong trang admin
    function breadcrumbs($title = '', $page = ''){
        $text = '
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-1">
                <h3 class="content-header-title">'. $title .'</h3>
            </div>
            <div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-12">
                <div class="breadcrumb-wrapper col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="'. _URL_ADMIN .'">Trang chủ</a></li>';
                        foreach ($page AS $url => $textlink){
                            $text .= '<li class="breadcrumb-item"><a href="'. $url .'">'. $textlink .'</a></li>';
                        }
                    $text .= '</ol>
                </div>
            </div>
        </div>';
        return $text;
    }

    // Function hiển thị thông báo lỗi
    function getPanelError($option = ''){
        $text = '<div class="content-body">
            <section class="flexbox-container">
                <div class="col-12 d-flex align-items-center justify-content-center">
                    <div class="col-md-4 col-10 p-0">
                        <div class="card-header bg-transparent border-0">
                            <h2 class="error-code text-center mb-2">'. $option['title'] .'</h2>
                            <h3 class="text-uppercase text-center">'. $option['content'] .'</h3>
                        </div>
                        <div class="card-content">
                            <div class="row py-2">
                                <div class="col-12 col-sm-6 col-md-6">
                                    <a href="'. _URL_ADMIN .'" class="btn btn-primary btn-block"><i class="ft-home"></i> Trang Chủ</a>
                                </div>
                                <div class="col-12 col-sm-6 col-md-6">
                                    <a href="'. _URL_BACK .'" class="btn btn-danger btn-block"><i class="ft-search"></i>  Quay Lại</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>';
        return $text;
    }

    // Function hiển thị các thông báo nhỏ
    function getAlert($type = 'success', $content){
        switch ($type){
            case 'success':
                return '<div class="alert round bg-success alert-icon-left alert-dismissible mb-2" role="alert"><span class="alert-icon"><i class="la la-thumbs-o-up"></i></span><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>'. $content .'</div>';
                break;
            case 'help_error':
                return '<p class="text-left"><small class="text-muted text-danger">'. $content .'</small></p>';
                break;
        }
    }

    // Hiển thị thời gian, với thời gian nhập vào là timestam
    public function getTimeDisplay($time){
        return date('H:i:s d/m/Y', $time);
    }

    // Class chung của form
    function form_style($type){
        switch ($type){
            case 'text_input':
                return 'form-control round border-blue';
                break;
            case 'button':
                return 'btn btn-outline-blue round';
                break;
        }
    }
}