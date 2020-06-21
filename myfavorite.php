<?php
    require_once("connect.php");
    session_start();
    $login = $_SESSION["login"];
    $word = $_GET['value'];
    $url = $_SESSION['url'];
    $con = create_connection();
    if($_SESSION['delete'] == 0) {
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
                        alert(\"已經加入過囉！\");
                        location.href = \"$url\"; 
                        </script>
                        ";
                }
                else {
                    $sql_s = "INSERT INTO myfavorite (myaccount, myhname, mysname) VALUES ('" . $login . "', null,'" . $data[0] . "')";
                    $result = execute_sql($con, "test", $sql_s);
                    echo"<script>
                        alert(\"已加入我的最愛！\");
                        location.href = \"$url\"; </script>";
                }
            } else {
                $result = execute_sql($con, "test", $sql_bug);
                if(mysqli_num_rows($result) != 0) {
                    echo"<script>
                        alert(\"已經加入過囉！\");
                        location.href = \"$url\"; 
                        </script>
                        ";
                }
                else {
                    $sql_h = "INSERT INTO myfavorite (myaccount, myhname, mysname) VALUES ('" . $login ."','" . $data[0] . "', null)";
                    $result = execute_sql($con, "test", $sql_h);
                    echo"<script>
                        alert(\"已加入我的最愛！\");
                        location.href = \"$url\"; </script>";
                }
            }
        }
    }
    else {
        $sql = "DELETE FROM myfavorite WHERE myhname ='" . $word . "' or mysname='" . $word ."'AND myaccount='" . $login . "'";
        $result = execute_sql($con, "test", $sql);
        echo"<script>
            alert(\"已從我的最愛刪除！\");
            location.href = \"$url\"; </script>";
    }
