<?php
function loadall_baiviet(){
    $sql="SELECT * FROM bai_viet ";
    $listbaiviet=pdo_query($sql);
    return $listbaiviet;
}
function delete_baiviet($id_baiviet){
    $sql="DELETE FROM bai_viet WHERE id_baiviet=".$id_baiviet;
    pdo_execute($sql);
}
function insert_baiviet($tieu_de,$noi_dung,$ngay_dang,$trang_thai){
    $sql="INSERT INTO bai_viet( `tieu_de`, `noi_dung`, `ngay_dang`, `trang_thai`) VALUES ('$tieu_de','$noi_dung','$ngay_dang','$trang_thai')";
    pdo_execute($sql);
}
function loadone_baiviet($id_baiviet){
    $sql="SELECT * FROM bai_viet where id_baiviet=".$id_baiviet;
    $bv=pdo_query_one($sql);
    return $bv;
}
?>