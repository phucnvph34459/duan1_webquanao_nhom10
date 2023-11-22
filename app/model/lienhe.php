<?php 
function loadall_lienhe(){
    $sql="SELECT * FROM lien_he";
    $listlienhe=pdo_query($sql);
    return $listlienhe;
}
function insert_lienhe($ho_ten,$dia_chi,$noi_dung,$id_khachhang){
    $sql="INSERT INTO lien_he(ho_ten, dia_chi, noi_dung, id_khachhang) 
    VALUES ('$ho_ten','$dia_chi','$noi_dung','$id_khachhang')";
    pdo_execute($sql);
}
function delete_lienhe($id_lienhe){
    $sql="DELETE FROM lien_he WHERE id_lienhe=".$id_lienhe;
    pdo_execute($sql);
}
function loadone_lienhe($idlh){
    $sql="select*from lien_he where id_lienhe=".$idlh;
    $lh=pdo_query_one($sql);
    return $lh;
}
function update_lienhe($id_lienhe,$noi_dung,$trang_thai,$id_khachhang){
    $sql="update lien_he set ten_lienhe='".$noi_dung."',trang_thai='".$trang_thai."',id_khachhang='".$id_khachhang."' where id_lienhe=".$id_lienhe ;
    pdo_execute($sql);
}



?>
