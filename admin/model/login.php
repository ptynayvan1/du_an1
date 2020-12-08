<?php 
    include_once('database.php');
    function checkdn($admin,$pass){
        $sql="select * from nguoi_dung where ten_dangnhap='$admin' and mat_khau='$pass'";
        return queryOne($sql);
    }

?>