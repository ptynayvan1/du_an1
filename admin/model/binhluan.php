<?php
    include_once('database.php');
   function getAllComment(){
        $sql="Select Id_binhluan,Ten_xe,ho_ten,Binh_luan,Thoigian_binhluan,a.Id_xe
        from binh_luan a inner join xe b on a.Id_xe = b.Id_xe inner join nguoi_dung c on a.Id_nguoidung=c.Id_nguoidung
<<<<<<< HEAD
        order by a.Id_xe
";
=======
        order by a.Id_xe";
>>>>>>> 900a80cdd140cbd3b0800f432c638f4534c9ee37
        return query($sql);
    }
    function detelecomment($id){
        $sql="delete from binh_luan where Id_binhluan='$id'";
        return execute($sql);
    }

?>