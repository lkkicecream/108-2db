<?php
    require_once("connect.php");
    session_start();
    $account = $_SESSION['login'];
    $name = $_POST['userName'];
    $phone = $_POST['userPhone'];
    $mail = $_POST['userMail'];
    $con = create_connection();
    $sql = "UPDATE account SET myname='" . $name . "',phone='" . $phone . "', mail='" . $mail . "'WHERE myaccount='". $account ."'";
    if(execute_sql($con, "test", $sql)){
        $url = "personal.php";
        echo "<script language = 'javascript'  type = 'text/javascript'> alert('更新成功！');";
        echo " window.location.href = '$url';";
        echo "</script>";
    } else {
        $url = "personal.php";
        echo "<script language = 'javascript'  type = 'text/javascript'> alert('更新失敗！');";
        echo " window.location.href = '$url';";
        echo "</script>";
    }
?>
