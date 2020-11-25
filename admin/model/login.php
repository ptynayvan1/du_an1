<?php
    function checkuser($user,$pass){
        $sql="Select * form admin where username='.$user.' and pass='.$pass.'";
        $conn=connect();
       return queryone($sql);
    }

?>