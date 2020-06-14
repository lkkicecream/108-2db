<?php
    $account = $_POST['userAccount'];
    $passwd = $_POST['userPassword'];
    $name = $_POST['userName'];
    $phone = $_POST['userPhone'];
    $mail = $_POST['userMail'];

    require_once("connect.php");
    $con = create_connection();
    $sql = "SELECT myaccount FROM account where myaccount='" . $account . "'";
    $result = execute_sql($con, "test", $sql);
    if (mysqli_num_rows($result)) {
        $url = "register.php";
        echo "<script language = 'javascript'  type = 'text/javascript'> alert('您輸入的帳號重複！');";
        echo " window.location.href = '$url';";
        echo "</script>";
    } else {
        if (file_exists("counter.txt"))                             //判斷counter.txt是否存在
        {
            $fp = fopen("counter.txt", "r+");               //存在,開啟counter.txt並具有寫入和讀取
            $counter = fgets($fp);
            $counter++;                                          //每次累進+1
            fseek($fp, 0);                                        //每次累進移到最上面的檔案表頭
            fputs($fp, $counter);                              //將每次$counter計算累加給$fp變數
            fclose($fp);
        } else {
            $fp = fopen("counter.txt", "w");
            $counter = 100000;
            fputs($fp, $counter);
            fclose($fp);
        }
        $date = getdate();
        $today = $date['year'].$date['mon'].$date['mday'];
        $sql1 = "INSERT INTO user (idnumber,startdate) VALUES ($counter, $today)";
        $sql2 = "INSERT INTO account (myaccount, mypasswd, myidnumber, myname, phone, mail) VALUES 
        ('" . $account . "','" . $passwd . "','" . $counter ."','" . $name . "','" . $phone . "','" . $mail ."')";
        $result1 = execute_sql($con, "test", $sql1);
        $result2 = execute_sql($con, "test", $sql2);
        $url = "hotel_search.php";
        echo "<script language = 'javascript'  type = 'text/javascript'> alert('註冊成功！');";
        echo " window.location.href = '$url';";
        echo "</script>";
    }
    
?>