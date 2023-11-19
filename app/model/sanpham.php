<?php

function insert_sanpham($name,$gia,$hinh,$mo_ta,$so_luong,$iddm){
    $sql="insert into san_pham(name,gia,hinh_anh,mo_ta,so_luong,iddm) values('$name','$gia','$hinh','$mo_ta','$so_luong','$iddm')";
    pdo_execute($sql);
}
function delete_sanpham($id){
    $sql="delete from san_pham where id_sanpham=".$id;
    pdo_execute($sql);
}

function loadall_sanpham_top10(){
    $sql="select*from san_pham where 1 order by luotxem desc limit 0,7";
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}

function loadall_sanpham_home(){
    $sql="select*from san_pham where 1 order by id desc limit 0,9";
    $listsanpham=pdo_query($sql);
    return $listsanpham;
} 

function loadall_sanpham(){
    $sql="select*from san_pham order by id_sanpham desc ";
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}
function load_tendm($iddm){
    $sql="select*from danh_muc where id_danhmuc=".$iddm;
    $dm=pdo_query_one($sql);
    extract($dm);
    return $ten_danhmuc;
}
function loadone_sanpham($id_sanpham){
    $sql="select*from san_pham where id_sanpham=".$id_sanpham;
    $sp=pdo_query_one($sql);
    return $sp;
}

function load_sanpham_cungloai($id,$iddm){
    $sql="select*from san_pham where iddm=".$iddm." AND id_sanpham <>".$id;
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}

function update_sanpham($id_sanpham,$name,$gia,$hinh,$mo_ta,$so_luong,$iddm){
    if($hinh!=""){
        // $sql="update sanpham set iddm='".$iddm."',name='".$tensp."',price='".$giasp."',mota='".$mota."',img='".$hinh."' where id=".$id;
        $sql=  "UPDATE `san_pham` SET `name` = '{$name}', `gia` = '{$gia}', `mo_ta` = '{$mo_ta}',`hinh_anh` = '{$hinh}', `so_luong` = '{$so_luong}', `iddm` = '{$iddm}' WHERE `san_pham`.`id_sanpham` = $id_sanpham";
    }else{
        //  $sql="update sanpham set iddm='".$iddm."',name='".$tensp."',price='".$giasp."',mota='".$mota."' where id=".$id;
        $sql=  "UPDATE `san_pham` SET `name` = '{$name}', `gia` = '{$gia}', `mo_ta` = '{$mo_ta}',`so_luong` = '{$so_luong}', `iddm` = '{$iddm}' WHERE `san_pham`.`id_sanpham` = $id_sanpham";
    }
    pdo_execute($sql);
}


?>