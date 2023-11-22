<?php
include "../../model/pdo.php";
include "../../model/danhmuc.php";
include "../../model/sanpham.php";
include "../../model/taikhoan.php";
include "../../model/baiviet.php";
include "../../model/lienhe.php";
include "../../model/donhang.php";
include "../../model/binhluan.php";



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
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $iddm = $_POST['iddm'];
                $name = $_POST['name'];
                $gia = $_POST['gia'];
                $mo_ta = $_POST['mo_ta'];
                $so_luong = $_POST['so_luong'];
                $hinh = $_FILES['hinh']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES['hinh']['name']);
                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                } else {

                }
                insert_sanpham($name,$gia,$hinh,$mo_ta,$so_luong,$iddm);
                $thongbao = "Thêm thành công";
            }
            $listdanhmuc = loadall_danhmuc();
            include "sanpham/add.php";
            break;
        case 'listsp':
            $listsanpham = loadall_sanpham();
            include "sanpham/list.php";
            break;
        case 'xoasp':
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    delete_sanpham($_GET['id']);
                }
                $listsanpham = loadall_sanpham(" ", 0);
                //loadall_sanpham()
            include "sanpham/list.php";
            break;
        case 'suasp':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {

                $sanpham = loadone_sanpham($_GET['id']);
            }
            $listdanhmuc = loadall_danhmuc();
            include "sanpham/update.php";
            break;
        case 'updatesp':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $iddm = $_POST['iddm'];
                $id_sanpham = $_POST['id_sanpham'];
                $name = $_POST['name'];
                $gia = $_POST['gia'];
                $mo_ta = $_POST['mo_ta'];
                $so_luong = $_POST['so_luong'];
                $hinh_anh = $_FILES['hinh_anh']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES['hinh_anh']['name']);
                if (move_uploaded_file($_FILES["hinh_anh"]["tmp_name"], $target_file)) {
                } else {

                }
                update_sanpham($id_sanpham,$name,$gia,$hinh_anh,$mo_ta,$so_luong,$iddm);
                $thongbao = "Cập nhật thành công";
            }
            $listdanhmuc = loadall_danhmuc();
            $listsanpham = loadall_sanpham();
            include "sanpham/list.php";
            break;
        //khachhang
        case 'dskh':
            $listkhachhang = loadall_khachhang();
            include "taikhoan/list.php";
            break;
        case 'xoatk':
            if (isset($_GET['id_khachhang']) && ($_GET['id_khachhang'] > 0)) {
                delete_khachhang($_GET['id_khachhang']);
            }
            $listkhachhang = loadall_khachhang("", 0);
            include "taikhoan/list.php";
            break;
        case 'suatk':
            if (isset($_GET['id_khachhang']) && ($_GET['id_khachhang'] > 0)) {

                $tk = loadone_khachhang($_GET['id_khachhang']);
            }
            $listkhachhang = loadall_khachhang();
            include "taikhoan/update.php";
            break;
        case 'updatetk':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $tai_khoan = $_POST['tai_khoan'];
                $mat_khau = $_POST['mat_khau'];
                $ho_ten = $_POST['ho_ten'];
                $nam_sinh = $_POST['nam_sinh'];
                $dia_chi = $_POST['dia_chi'];
                $email = $_POST['email'];
                $so_dt = $_POST['so_dt'];
                $vai_tro = $_POST['vai_tro'];
                $id_khachhang = $_POST['id_khachhang'];

                update_khachhang($id_khachhang,$tai_khoan,$mat_khau,$ho_ten,$nam_sinh,$dia_chi,$email,$so_dt,$vai_tro );
                $thongbao = "cập nhật thành công!";
            }
            $listkhachhang = loadall_khachhang();
            include "taikhoan/list.php";
            break;
        //binhluan
        case 'dsbl':
             
            $listbinhluan = loadall_binhluan(0);
            include "binhluan/list.php";
            break;
        case 'xoabl':
            include "binhluan/list.php";
            if (isset($_GET['idbl']) && ($_GET['idbl'] > 0)) {
                delete_binhluan($_GET['idbl']);
                header("Location: index.php?act=dsbl");
            }
            $listbinhluan = loadall_binhluan(0);
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
             $listbaiviet = loadall_baiviet();
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
        //donhang
        case 'listdh':
            $listdonhang = loadall_donhang();
            include "donhang/list.php";
            break;
        case 'updatedh':
            include "donhang/update.php";
            break;
        //lienhe
        case 'addlh':
            if(isset($_POST['themmoi']) && ($_POST['themmoi'])){
                $ho_ten = $_POST['ho_ten'];
                $dia_chi = $_POST['dia_chi']; 
                $noi_dung = $_POST['noi_dung'];
                $id_khachhang=$_POST['id_khachhang'];
                insert_lienhe($ho_ten,$dia_chi,$noi_dung,$id_khachhang);
                $thongbao = "thêm thành công";
            }
            $listkhachhang=loadall_khachhang();
            include "lienhe/add.php";
            break;
        case 'listlh':
            $listlienhe = loadall_lienhe();
            include "lienhe/list.php";
            break;
            case 'sualh':
                if (isset($_GET['idlh']) && ($_GET['idlh'] > 0)) {
    
                    $dm = loadone_lienhe($_GET['idlh']);
                }
                include "lienhe/update.php";
                break;
            case 'xoalh':
                if (isset($_GET['idlh']) && ($_GET['idlh'] > 0)) {
                    $id_lienhe=$_GET['idlh'];
                    delete_lienhe($id_lienhe);
                }
                $listlienhe = loadall_lienhe();
                include "lienhe/list.php";
                break;
            case 'updatelh':
                if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                    $tenloai = $_POST['id_lienhe'];
                    $mo_ta = $_POST['noi_dung'];
                    $trang_thai = $_POST['trang_thai']; 
                    $iddm = $_POST['id_khachhang'];
                    update_lienhe($idlh, $id_lienhe,$noi_dung,$trang_thai,);
                    $thongbao = "cập nhật thành công";
                }
    }
} else {
    include "home.php";
}
include "sidebar.php";
include "footer.php";
?>
