<?php
include_once('database.php');
function getAllctdh($id){
    $sql="select Id_donhang,ho_ten,Ten_xe,don_hang.Id_xe,ten_dangnhap, Ngay_thue, sdt from 
    don_hang inner join xe on don_hang.Id_xe = xe.id_xe inner join nguoi_dung on don_hang.Id_nguoidung = nguoi_dung.Id_nguoidung
 where don_hang.Id_donhang='$id' order by Id_donhang; ";
    return query($sql);
}
?>