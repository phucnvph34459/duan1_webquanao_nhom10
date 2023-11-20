<?php 
function loadall_lienhe(){
    $sql="SELECT * FROM lien_he";
    $listlienhe=pdo_query($sql);
    return $listlienhe;
}
function insert_lienhe($noi_dung,$trang_thai,$id_khachhang){
    $sql="INSERT INTO lien_he(noi_dung, trang_thai, id_khachhang) 
    VALUES ('$noi_dung','$trang_thai','$id_khachhang')";
    pdo_execute($sql);
}
function delete_lienhe($id){
    $sql="delete from lien_he where idlh=".$id;
    pdo_execute($sql);
}
function loadone_lienhe($idlh){
    $sql="select*from lien_he where idlh=".$idlh;
    $lh=pdo_query_one($sql);
    return $lh;
}
function update_lienhe($id_lienhe,$noi_dung,$trang_thai,$id_khachhang){
    $sql="update lien_he set ten_lienhe='".$noi_dung."',trang_thai='".$trang_thai."' where idlh=".$id_lienhe ;
    pdo_execute($sql);
}



?>
