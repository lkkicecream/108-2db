<?php
    require_once("connect.php");
    $login = $_SESSION["login"];
    $word = $_GET['value'];
    $con = create_connection();
    $sql = "SELECT hotel.hname FROM hotel WHERE hotel.hame='" . $word . "'";
    $result = execute_sql($con, "test", $sql);
    if(!mysqli_num_rows($result)) {
        $sql = "SELECT sights.sname FROM sights WHERE sights.same='" . $word . "'";
        $result = execute_sql($con, "test", $sql);
    }
    if($data = mysqli_fetch_array($result)) {

    }
?>