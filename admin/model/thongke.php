<?php
function drawChart(){
    $sql="SELECT hang_xe.Tenhang,COUNT(xe.Id_hangxe) as tongso 
    from hang_xe,xe 
    where hang_xe.Id_hangxe=xe.Id_hangxe 
    GROUP BY hang_xe.id_hangxe";
    return query($sql);
}

function drawChartXe(){
    $sql="SELECT id_xe, Ten_xe, soluong 
    from xe";
    return query($sql);
}

function countthongke()
{
    $sql="SELECT hang_xe.Tenhang, COUNT(hang_xe.Id_hangxe) as tongso, MAX(Gia_thue) as giacaonhat,MIN(Gia_thue) as giathapnhat
    FROM hang_xe,xe
    WHERE hang_xe.Id_hangxe=xe.id_xe
    GROUP BY hang_xe.Id_hangxe";
    return query($sql);
}
?>



