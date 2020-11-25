<?php 
    include_once('database.php');
    function getAllUser(){
        $sql="select * from nguoi_dung
        where id_vaitro=1
        order by id_nguoidung";
        return query($sql);
    }
    function deleteUser($id){
        $sql="DELETE from nguoi_dung where Id_nguoidung='$id'";
        execute($sql);
    }
    function getUserById($id){
        $sql="SELECT u.Id_nguoidung,ho_ten,email,sdt,dia_chi,cmnd,Id_donhang,Ten_xe,Ngay_thue
        from nguoi_dung u inner join don_hang o on u.Id_nguoidung=o.Id_nguoidung
        inner join xe x on o.Id_xe=x.id_xe
        where u.Id_nguoidung='$id'";
        return queryone($sql);
    }
?>