<?php
include_once('database.php');
function getAllctdh($madh){
    $sql="select*from chitietdonhang where madh='$madh' order by madh ";
    return query($sql);
}
?>