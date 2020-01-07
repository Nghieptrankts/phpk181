<?php
if (!defined('SECURITY')) {
	die('Bạn không có quyền truy cập trang này !');
}


$connect = mysqli_connect('localhost','root','','hocphpk181');
if($connect){
    mysqli_query($connect,"SET NAMES 'utf8'");
    // print_r('kết nối thành công');
}else{
    echo'kết nối thất bại';
}






?>