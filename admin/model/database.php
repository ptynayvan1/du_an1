<?php
    function getConnertion(){
        $host='localhost';
        $dbname='ql_xe';
        $usename='root';
        $password='';
        $options=array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES uft8",PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION);
        $DBH= new PDO("mysql:host=$host;dbname=$dbname",$usename,$password);
        return $DBH;
        
    }
    function query($sql){
        $connect=getConnertion();
        $result=$connect->query($sql);
        return $result;
    }
    function queryone($sql){
        $connect=getConnertion();
        $result=$connect->query($sql);
        $row = $result->fetch(PDO::FETCH_ASSOC);
        return $row;
    }
    function execute($sql){
        $connect=getConnertion();
        $result=$connect->exec($sql);
        return $result;
    }
   
    
?>