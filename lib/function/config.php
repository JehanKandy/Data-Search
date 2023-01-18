<?php 
    function Connection(){
        $server = "localhost";
        $user = "root";
        $pass = "";
        $db_name = "test_data_tbl";

        
        $con = mysqli_connect($server, $user, $pass, $db_name);

        $result = (!$con)? "Connection Lost" : $con;
        echo $result;
    }
?>
