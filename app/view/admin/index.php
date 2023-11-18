<?php
include "../../model/pdo.php";
include "../../model/danhmuc.php";
include "../../model/baiviet.php";
include "../../model/lienhe.php";
include "header.php";


if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        //danhmuc
        case 'adddm':
            if(isset($_POST['themmoi']) && ($_POST['themmoi'])){
               $tenloai = $_POST['tenloai'];
               $mo_ta = $_POST['mota'];
               $trang_thai = $_POST['trang_thai']; 
               insert_danhmuc($tenloai,$mo_ta,$trang_thai);
               $thongbao = "thêm thành công";
            }
            include "danhmuc/add.php";
            break;
        case 'listdm':
            $listdanhmuc = loadall_danhmuc();

            include "danhmuc/list.php";
            break;
        case 'suadm':
            if (isset($_GET['iddm']) && ($_GET['iddm'] > 0)) {

                $dm = loadone_danhmuc($_GET['iddm']);
            }
            include "danhmuc/update.php";
            break;
        case 'xoadm':
            if (isset($_GET['iddm']) && ($_GET['iddm'] > 0)) {
                delete_danhmuc($_GET['iddm']);
            }
            $listdanhmuc = loadall_danhmuc();
            include "danhmuc/list.php";
            break;
        case 'updatedm':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $tenloai = $_POST['tenloai'];
                $mo_ta = $_POST['mota'];
                $trang_thai = $_POST['trang_thai']; 
                $iddm = $_POST['id'];
                update_danhmuc($iddm, $tenloai,$mo_ta,$trang_thai);
                $thongbao = "cập nhật thành công";
            }

            $listdanhmuc = loadall_danhmuc();
            include "danhmuc/list.php";
            break;
            
        //sanpham    
        case 'addsp':
            // if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
            //     $iddm = $_POST['iddm'];
            //     $name = $_POST['name'];
            //     $gia = $_POST['gia'];
            //     $mo_ta = $_POST['mo_ta'];
            //     $so_luong = $_POST['so_luong'];
            //     $luot_xem = $_POST['luot_xem'];
            //     $hinh_anh = $_FILES['hinh_anh']['name'];
            //     $target_dir = "../upload/";
            //     $target_file = $target_dir . basename($_FILES['hinh_anh']['name']);
            //     if (move_uploaded_file($_FILES["hinh_anh"]["tmp_name"], $target_file)) {
            //     } else {
            //     }
            //     insert_sanpham($name, $gia, $hinh_anh, $mo_ta,$so_luong,$luot_xem, $iddm);
            //     $thongbao = "Thêm thành công";
            // }

            // $listdanhmuc = loadall_danhmuc();
            include "sanpham/add.php";
            break;
        case 'listsp':
            // if (isset($_POST['listok']) && ($_POST['listok'])) {
            //     $kyw = $_POST['kyw'];
            //     $iddm = $_POST['iddm'];
            // } else {
            //     $kyw = '';
            //     $iddm = 0;
            // }
            // $listdanhmuc = loadall_danhmuc();
            // $listsanpham = loadall_sanpham($kyw, $iddm);
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
            $listbaiviet = loadall_baiviet();
            include "baiviet/list.php";
            break;
        case 'addbv':
            if(isset($_POST['themmoi']) && ($_POST['themmoi'])){
                $tieude = $_POST['tieu_de'];
                $noi_dung = $_POST['noi_dung'];
               $ngaydang=$_POST['ngay_dang'];
               $trang_thai=$_POST['trang_thai'];
                insert_baiviet($tieude,$noi_dung,$ngaydang,$trang_thai);
                $thongbao = "thêm thành công";
             }
            include "baiviet/add.php";
            break; 

        case 'xoabv':
            if (isset($_GET['idbv']) && ($_GET['idbv'] > 0)) {
                delete_baiviet($_GET['idbv']);
            }
            $listbaiviet = loadall_baiviet();
            include "baiviet/list.php";
            break;
        case 'suabv':
            if (isset($_GET['idbv']) && ($_GET['idbv'] > 0)) {
                $bv = loadone_baiviet($_GET['idbv']);
            }
            $listbaiviet = loadall_baiviet();
            include "baiviet/update.php";
            break;
       // donhang
        case 'listdh':
            include "donhang/list.php";
            break;
        case 'updatedh':
            include "donhang/update.php";
            break;
        //lienhe
        case 'listlh':
            $listlienhe = loadall_lienhe();
            include "lienhe/list.php";
            break;
        // case 'updatelh':
        //     include "lienhe/update.php";
        //     break;

    }
} else {
    include "home.php";
}
include "sidebar.php";
include "footer.php";
?>
