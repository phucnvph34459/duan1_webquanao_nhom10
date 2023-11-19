<?php
function loadone_khachhang($id_khachhang){
    $sql="select*from khach_hang where id_khachhang=".$id_khachhang;
    $tk=pdo_query_one($sql);   
    return $tk;
}
function insert_khachhang($tai_khoan,$mat_khau,$ho_ten,$nam_sinh,$dia_chi,$email,$so_dt,$vai_tro){
    $sql="insert into khach_hang(tai_khoan,mat_khau,ho_ten,nam_sinh,dia_chi,email,so_dt,vai_tro) values('$tai_khoan','$mat_khau','$ho_ten','$nam_sinh','$dia_chi','$email','$so_dt','$vai_tro')";
    pdo_execute($sql);
}
function loadall_khachhang(){
    $sql="select*from khach_hang order by id_khachhang desc";
    $listkhachhang=pdo_query($sql);
    return $listkhachhang;
}
function update_khachhang($id,$tai_khoan,$mat_khau,$ho_ten,$nam_sinh,$dia_chi,$email,$so_dt,$vai_tro){

    $sql=  "UPDATE khach_hang SET tai_khoan = '".$tai_khoan."', mat_khau = '".$mat_khau."', ho_ten = '".$ho_ten."',nam_sinh = '".$nam_sinh."', dia_chi = '".$dia_chi."',email = '".$email."',so_dt ='".$so_dt."',vai_tro = '".$vai_tro."' WHERE id_khachhang =" .$id;

pdo_execute($sql);
}

function delete_khachhang($id_khachhang){
$sql="delete from khach_hang where id_khachhang=".$id_khachhang;
pdo_execute($sql);
}

?>