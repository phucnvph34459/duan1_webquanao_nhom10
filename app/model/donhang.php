<?php

function insert_donhang($trang_thai,$ngay_dathang){
    $sql="insert into don_hang(trang_thai,ngay_dathang) values('$trang_thai','$ngay_dathang')";
    pdo_execute($sql);
}
function delete_donhang($id){
    $sql="delete from don_hang where id_donhang=".$id;
    pdo_execute($sql);
}
function loadall_donhang(){
    $sql="select*from don_hang order by id_donhang desc";
    $listdonhang=pdo_query($sql);
    return $listdonhang;
}
function loadone_donhang($id){
    $sql="select*from don_hang where id_donhang=".$id;
    $dh=pdo_query_one($sql);
    return $dh;
}
function update_donhang($id,$trang_thai,$ngay_dathang,$id_khachhang){
    $sql="update don_hang set trang_thai='".$trang_thai."',ngay_dathang='".$ngay_dathang."',id_khachhang='".$id_khachhang."' where id_donhang=".$id ;
    pdo_execute($sql);
}
function load_tenkhachhang($id_khachhang){
    $sql="select*from khach_hang where id_khachhang=".$id_khachhang;
    $kh=pdo_query_one($sql);
    extract($kh);
    return $tai_khoan;
}
