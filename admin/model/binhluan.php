<?php
    include_once('database.php');
   function getAllComment(){
        $sql="Select Id_binhluan,Ten_xe,ho_ten,Binh_luan,Thoigian_binhluan,xe.Id_xe
        from binh_luan,xe,nguoi_dung
        order by xe.Id_xe";
        return query($sql);
    }
    function detelecomment($id){
        $sql="delete from binh_luan where id_binhluan='$id'";
        return execute($sql);
    }

?>