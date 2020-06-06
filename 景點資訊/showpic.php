<?php
    require_once("connect.php");
    $con = create_connection();
    //組合查詢字串
    $sql = "SELECT imagesights.filepic , sights.sname, sights.sstars, sights.slocation 
            FROM imagesights, sights 
            WHERE imagesights.filename = sights.sname
    ";
    //
    $cur = execute_sql($con,"test", $sql);
    //取出資料
    $i = 0;
    while($data = mysqli_fetch_array( $cur )) {
        $img[$i] = "data:image/jpeg;base64,".$data[0];
        $name[$i] = $data[1];
        $stars[$i] = $data[2];
        $location[$i] = $data[3];
        $i++;
    }
    $i = 0;

    //設定網頁資料格式
    #header("Content-Type: $data[1]");
    // 輸出圖片資料
    #echo "<img src=\"$num\" alt=\"\" style=\"height: 300px;\">";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <img src="<?php echo $img[$i] ?>" alt="" style="height: 300px; weight: 200px">
        <p><?php echo $name[$i] ?></p>
        <p><?php echo $location[$i] ?></p>
        <p><?php echo $stars[$i] ?></p>
    </table>
</body>
</html>


