<?php
include_once('database.php');
function getAllctdh($id){
    $sql="select*from don_hang where Id_donhang='$id' order by Id_donhang ";
    return query($sql);
}
?>