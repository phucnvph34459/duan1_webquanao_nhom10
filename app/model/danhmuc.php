<?php

function insert_danhmuc($tendanhmuc){
    $sql="insert into danhmuc(ten_danhmuc) values('$tendanhmuc')";
    pdo_execute($sql);
}