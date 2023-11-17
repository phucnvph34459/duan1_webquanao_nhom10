<?php

function insert_danhmuc($tenloai,$mo_ta,$trang_thai){
    $sql="insert into danh_muc(ten_danhmuc,mo_ta,trang_thai) values('$tenloai','$mo_ta','$trang_thai')";
    pdo_execute($sql);
}
function delete_danhmuc($id){
    $sql="delete from danh_muc where iddm=".$id;
    pdo_execute($sql);
}
function loadall_danhmuc(){
    $sql="select*from danh_muc order by iddm desc";
    $listdanhmuc=pdo_query($sql);
    return $listdanhmuc;
}
function loadone_danhmuc($iddm){
    $sql="select*from danh_muc where iddm=".$iddm;
    $dm=pdo_query_one($sql);
    return $dm;
}
function update_danhmuc($id,$tenloai,$mo_ta,$trang_thai){
    $sql="update danh_muc set ten_danhmuc='".$tenloai."',mo_ta='".$mo_ta."',trang_thai='".$trang_thai."' where iddm=".$id ;
    pdo_execute($sql);
}

?>