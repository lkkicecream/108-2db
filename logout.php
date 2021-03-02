<?php
    session_start();
    unset($_SESSION['account_en']);
    unset($_SESSION['account']);
    unset($_SESSION["login_en"]);
    unset($_SESSION["login"]);
    if($_SESSION['url'] == "myfav.php" || $_SESSION['url'] == "personal.php")
        $_SESSION['url'] = "hotel_search.php";
    $url = $_SESSION['url'] ;
    echo "<script language = 'javascript'  type = 'text/javascript'> alert('已登出');";
    echo " window.location.href = '$url';";
    echo "</script>";
?>