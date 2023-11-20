<?php
 function insert_binhluan($noi_dung,$ngay_binh_luan,$danh_gia,$id_khachhang,$id_sanpham){
    $sql="insert into binh_luan(noi_dung,ngay_binh_luan,danh_gia,id_khachhang,id_sanpham) values('$noi_dung','$ngay_binh_luan','$danh_gia','$id_khachhang','$id_sanpham')";
    pdo_execute($sql);
}
function loadall_binhluan($id_sanpham){
    $sql = "select * from binh_luan where 1";
    if($id_sanpham>0) $sql.=" AND id_sanpham =.'".$id_sanpham."'";
    $sql.=" order by id_binh_luan desc";
    $listbinhluan=pdo_query($sql);
    return $listbinhluan;
}
function delete_binhluan($id) {
    $sql="delete from binh_luan where id_binh_luan=".$id;
    pdo_execute($sql);
}
?>