<?php
include "header.php";


if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        //danhmuc
        case 'adddm':
            if(isset($POST['themmoi']) && ($_POST['themmoi'])){
               $tendanhmuc = $_POST['ten_danhmuc']; 
               insert_danhmuc($tendanhmuc);
               $thongbao = "thêm thành công";
            }
            include "danhmuc/add.php";
            break;
        case 'listdm':
            include "danhmuc/list.php";
            break;
        case 'suadm':
            include "danhmuc/update.php";
            break;
        case 'xoadm':
            include "danhmuc/list.php";
            break;
        case 'updatedm':
            include "danhmuc/list.php";
            break;
            
        //sanpham    
        case 'addsp':
            include "sanpham/add.php";
            break;
        case 'listsp':
            include "sanpham/list.php";
            break;
        case 'xoasp':
            include "sanpham/list.php";
            break;
        case 'suasp':
            include "sanpham/update.php";
            break;
        //khachhang
        case 'dskh':
            include "taikhoan/list.php";
            break;
        case 'xoatk':
            include "taikhoan/list.php";
            break;
        case 'suatk':
            include "taikhoan/update.php";
            break;
        case 'updatetk':
            include "taikhoan/list.php";
            break;
        //binhluan
        case 'dsbl':
            include "binhluan/list.php";
            break;
        case 'xoabl':
            include "binhluan/list.php";
            break;
        //baiviet
        case 'listbv':
            include "baiviet/list.php";
            break;
        case 'addbv':
            include "baiviet/add.php";
            break; 

        case 'xoabv':
            include "baiviet/list.php";
            break;
        case 'suabv':
            include "baiviet/update.php";
            break;
        //donhang
        case 'listdh':
            include "donhang/list.php";
            break;
        case 'updatedh':
            include "donhang/update.php";
            break; 
    }
} else {
    include "home.php";
}
include "sidebar.php";
include "footer.php";
?>
