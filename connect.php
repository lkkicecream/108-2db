<?php
    function create_connection() { //連接資料庫
        $dbhost = "localhost";
        $dbuser = "root";
        $dbpasswd = "";
        
        $con = mysqli_connect($dbhost, $dbuser, $dbpasswd) or die ("Error Connection");
        mysqli_query($con, "SET NAME utf8");
        return $con;
    }

    function execute_sql($con, $dbname, $sql) { //傳SQL指令 and 選擇資料庫
        mysqli_select_db($con, $dbname) or die ("connection Error");
        $result = mysqli_query($con, $sql);
        return $result;
    }
?>