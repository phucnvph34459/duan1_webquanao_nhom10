<?php 
session_start();
include "app/model/pdo.php";
include "app/view/client/header.php";
include "app/model/taikhoan.php";
include "app/model/danhmuc.php";
include "app/model/sanpham.php";
include "app/model/binhluan.php";
include "app/model/baiviet.php";
include "global.php";

if((isset($_GET['act']))&&($_GET['act']!="")){
    $act=$_GET['act'];
    switch($act){
        case 'dangnhap':
           if(isset($_POST['dangnhap'])&&($_POST['dangnhap'])){
            $tai_khoan=$_POST['tai_khoan'];
            $mat_khau=$_POST['mat_khau'];
            $checkkhachang=checkkhachhang($tai_khoan,$mat_khau);
            if(is_array($checkkhachang)){
                 $_SESSION['tai_khoan']=$tai_khoan;
                 
                $thongbao="Đăng nhập thành công";
                 
            }else{
                $thongbao="Tài khoản này không tồn tại vui lòng đăng nhập lại";
            }
           }
            include "app/view/client/dangnhap.php";
        break;
       
        case 'dangky':
            if(isset($_POST['dangky'])&&($_POST['dangky'])){
                $tai_khoan = $_POST['tai_khoan'];
                $mat_khau = $_POST['mat_khau'];
                $ho_ten = $_POST['ho_ten'];
                $nam_sinh = $_POST['nam_sinh'];
                $dia_chi = $_POST['dia_chi'];
                $email = $_POST['email'];
                $so_dt = $_POST['so_dt'];
                insert_khachhang($tai_khoan,$mat_khau,$ho_ten,$nam_sinh,$dia_chi,$email,$so_dt);
                $thongbao="Đăng ký thành viên thành công";

            }
             include "app/view/client/taikhoan/dangky.php";
        break;
        case 'thoat':
            session_unset();
            header('location:index.php');
            break;
    
        default:
        include "app/view/client/home.php";
        break;
    }
}else{
    include "app/view/client/home.php";
}

include "app/view/client/footer.php";










?>


 

 