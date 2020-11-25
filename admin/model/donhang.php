<?php

include_once('database.php');
function getAllorder(){
    $sql="select*from don_hang order by id_donhang";
    return query($sql);
}
function getOrderedit($mahd){
    $sql="select*from don_hang where id_donhang='$mahd' ";
    return queryone($sql);
}
function getUpdateOrder($name,$trangthai,$mahd){
    $sql="update don_hang set name='$name' where id_donhang='$mahd'";
    return execute($sql);
}
function deteleOrder($mahd){
    $sql="delete from don_hang where id_donhang='$mahd'";
    return execute($sql);
}

?>