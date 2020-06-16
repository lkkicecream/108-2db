<?php
    require_once("connect.php");
    session_start();
    $login = $_SESSION["login"];
    $word = $_GET['value'];
    $con = create_connection();
    
    $sql_bug = "SELECT * from myfavorite where myfavorite.myhname ='" . $word . "' OR myfavorite.mysname='" . $word . "'";

    $sql = "SELECT hotel.hname FROM hotel WHERE hotel.hname='" . $word . "'";
    $result = execute_sql($con, "test", $sql);
    $flag = 0; //hotel
    if(mysqli_num_rows($result) == 0) {
        $sql = "SELECT sights.sname FROM sights WHERE sights.sname='" . $word . "'";
        $result = execute_sql($con, "test", $sql);
        $flag = 1; //sights
    }
    if($data = mysqli_fetch_array($result)) {
        if($flag) {
            $result = execute_sql($con, "test", $sql_bug);
            if(mysqli_num_rows($result) != 0) {
                echo"<script>
                    alert(\"已加入我的最愛！\");
                    location.href = \"outcom_sight.php\"; 
                    </script>
                    ";
            }
            else {
                $sql_s = "INSERT INTO myfavorite (myaccount, myhname, mysname) VALUES ('" . $login . "', null,'" . $data[0] . "')";
                $result = execute_sql($con, "test", $sql_s);
                echo"<script>location.href = \"outcom_sight.php\"; </script>";
            }
        } else {
            $result = execute_sql($con, "test", $sql_bug);
            if(mysqli_num_rows($result) != 0) {
                echo"<script>
                    alert(\"已加入我的最愛！\");
                    location.href = \"outcom_hotel.php\"; 
                    </script>
                    ";
            }
            else {
                $sql_h = "INSERT INTO myfavorite (myaccount, myhname, mysname) VALUES ('" . $login ."','" . $data[0] . "', null)";
                $result = execute_sql($con, "test", $sql_h);
                echo"<script>location.href = \"outcom_hotel.php\"; </script>";
            }
        }
    }
