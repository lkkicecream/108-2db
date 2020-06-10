<?php
    session_start();
    unset($_SESSION['account_en']);
    unset($_SESSION['account']);
    unset($_SESSION["login_en"]);
    unset($_SESSION["login"]);
    
    $url = "hotel_search.php" ;
    echo "<script language = 'javascript'  type = 'text/javascript'> alert('已登出');";
    echo " window.location.href = '$url';";
    echo "</script>";
?>