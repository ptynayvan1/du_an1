<?php
    include_once('database.php');
    function getAllCatalog()
    {
        $sql="SELECT*FROM hang_xe order by id_hangxe";
        return query($sql);
    }
    function addnewcatalog($name,$logo){
        $sql="INSERT into hang_xe(Tenhang,Logo) values('$name','$logo')";
        execute($sql);
    }
    function getcatalogbyid($id){
        $sql="SELECT * from hang_xe where Id_hangxe='$id'";
        return queryone($sql);
    }
    function updatecatalog($id,$name,$logo){
        $sql= "UPDATE hang_xe SET Tenhang='$name', Logo='$logo' Where Id_hangxe='$id'";
        execute($sql);
    }
    function deletecatalog($id){
        $sql="DELETE from hang_xe where Id_hangxe='$id'";
        execute($sql);
    }

?>