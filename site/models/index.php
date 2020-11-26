<?php
require_once "./site/models/database.php";
function showxe(){
$sql="SELECT * FROM `xe`";
return query($sql);
}
function ctxe($id){
    $sql="SELECT * FROM `xe` INNER JOIN loai_xe ON loai_xe.Id_loaixe=xe.Id_loaixe WHERE id_xe=$id";
    return queryOne($sql);
}
function anhxe($anhxe){
    $manganh=explode(",",$anhxe);
    return $manganh;
}
function thuexe($idnd,$idxe,$ngaythue,$ngaytra){
    $sql="INSERT INTO `don_hang` (`Id_donhang`, `Id_nguoidung`, `Id_xe`, `Ngay_thue`, `ngay_tra`) VALUES (NULL, '$idnd', '$idxe', '$ngaythue', '$ngaytra')";
    execute($sql);
}
function themngd($hoten,$matkhau,$tendn,$sdt,$dc,$tp,$qg,$email,$cmnd){
    $sql="INSERT INTO `nguoi_dung` (`Id_nguoidung`, `ten_dangnhap`, `mat_khau`, `ho_ten`, `email`, `sdt`, `dia_chi`, `thanh_pho`, `quoc_gia`, `id_vaitro`, `cmnd`) VALUES (NULL, '$tendn', '$matkhau', '$hoten', '$email'
    , '$sdt', '$dc', '$tp', '$qg', '1', '$cmnd');";
   return postid($sql);
}
function getbinhluan($id){
    $sql="SELECT * FROM binh_luan INNER JOIN nguoi_dung ON binh_luan.Id_nguoidung = nguoi_dung.Id_nguoidung WHERE id_xe='$id' ORDER BY Id_binhluan";
    return query($sql);
    }
function checkdn($user,$pass){
    $sql="SELECT * FROM nguoi_dung WHERE ten_dangnhap='$user' AND mat_khau='$pass'";
    return queryOne($sql);
}
function checkuser($user){
    $sql="select * from nguoi_dung where ten_dangnhap ='$user'";
   return queryOne($sql);
}
function thembl($id_nguoidung,$id_xe,$cmt,$ngay){
    $sql="insert into binh_luan(Binh_luan,Id_xe,Id_nguoidung,Thoigian_binhluan)
        
    values('$cmt','$id_xe','$id_nguoidung','$ngay')";
    execute($sql); 
  }
function loaixe(){
    $sql="SELECT * FROM loai_xe";
    return query($sql);
}
function hangxe(){
    $sql="SELECT * FROM hang_xe";
    return query($sql);
}
function timkiem($hx,$lx){
    if ($hx!="") {
        $shx="xe.Id_hangxe= $hx";
      
    } else {
        $shx="";
    }
    if ($lx!="") {
        $slx="xe.Id_loaixe=$lx";
    } else {
        $slx="";
      
    }
    if ($slx!=""&&$shx!="") {
        $sql="SELECT * FROM `xe` WHERE $shx AND $slx";
    } else {
        $sql="SELECT * FROM `xe` WHERE $shx $slx";
    }
    
    
    return query($sql);
}
?>