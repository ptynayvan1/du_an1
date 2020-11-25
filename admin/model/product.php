<?php
include_once('database.php');
function getAllProduct()
{
    $sql="SELECT * from xe order by id_xe";
    return query($sql);
}
function addProduct($catalogId,$name,$img,$price,$date,$moTa)
{
    $sql="insert into xe(id_loaixe,Ten_xe,hinh_xe,Gia_thue,Namsx,mota) values('$catalogId','$name','$img','$price','$date','$moTa')";
    execute($sql);
}
function deleteproduct($id){
    $sql="delete from xe where id_xe='$id'";
    execute($sql);
}
function getproductbyid($id){
    $sql="SELECT * from xe where id_xe='$id'";
    return queryone($sql);
}
function updateproduct($id,$name,$img,$date,$mota,$address){
    $sql="update xe set Ten_xe='$name',Hinh_xe='$img',Namsx='$date',diachixe='$address',mota='$mota' where id_xe='$id'";
    execute($sql);
}
?>