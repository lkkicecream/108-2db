<?php
require_once("connect.php");
$con = create_connection();
//組合查詢字串
$sql = "SELECT imagehotels.filepic , hotel.hname, hotel.hstars, hotel.hlocation 
            FROM imagehotels, hotel 
            WHERE imagehotels.filename = hotel.hname and hotel.hstars >= 4";
//
$cur = execute_sql($con, "test", $sql);
//取出資料
$i = 0;
while ($data = mysqli_fetch_array($cur)) {
    $img[$i] = "data:image/jpeg;base64," . $data[0];
    $name[$i] = $data[1];
    $stars[$i] = $data[2];
    $location[$i] = $data[3];
    $i++;
}
$i = 0;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/66a625edde.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>首頁</title>
    <style>
        body {
            background-color: #DEFFFF;
        }

        .Icon {
            width: 50px;
            height: 50px;
        }

        .Home {
            /* navbar距離 */
            width: 150px;
        }

        .bg-green {
            background-color: #466673;
            box-shadow: 0 3px 8px 0 #000;
        }

        .text {
            width: 100%;
        }

        .text select {
            width: 500px;
            height: 50px;
            line-height: 55px;
            font-size: 1.0rem;
            border: 1px solid #000;
            color: #5f5f5f;
        }

        .form-search {
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .input-search {
            height: 50px;
        }

        #carouselbody {
            /* 主要頁面 */
            margin-top: 30px;
            background-color: #466673;
        }

        .carousel .carousel-item {
            height: 400px;
        }

        .carousel .carousel-item img {
            align-items: center;
            max-width: 800px;
            margin: auto;
        }
    </style>
</head>

<body>
    <div id="navbar">
        <nav class="navbar navbar-expand-lg navbar-dark fixed-center bg-green">
            <a class="navbar-brand Home titleb " href="#" style="font-size: 25px;"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active Home">
                        <a class="nav-link titleb" href="home.php" style=" font-size: 17px;"><i class="fas fa-home"></i>
                            首頁 <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active Home">
                        <a class="nav-link titleb" href="signup.php" style="font-size: 17px;"><i class="fas fa-file-alt"></i>
                            登入 <span class="sr-only">(current)</span></a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <div align="center">
        <table style="margin-top: 4em">
            <tr>
                <form class="form-inline my-2 my-lg-0 form-search" align="center">
                    <th>
                        <input class="form-control mr-sm-2 input-search" align="left" type="search" placeholder="Search" aria-label="Search" style="width: 400px">
                    </th>
                    <td>
                        <div class="text" align="left">
                            <select class="text-select">
                                <option>不選擇</option>
                                <option>中區</option>
                                <option>東區</option>
                                <option>西區</option>
                                <option>南區</option>
                                <option>北區</option>
                                <option>西屯區</option>
                                <option>南屯區</option>
                                <option>北屯區</option>
                                <option>豐原區</option>
                                <option>大里區</option>
                                <option>太平區</option>
                                <option>清水區</option>
                                <option>沙鹿區</option>
                                <option>大甲區</option>
                                <option>東勢區</option>
                                <option>梧棲區</option>
                                <option>烏日區</option>
                                <option>神岡區</option>
                                <option>大肚區</option>
                                <option>大雅區</option>
                                <option>后里區</option>
                                <option>霧峰區</option>
                                <option>潭子區</option>
                                <option>龍井區</option>
                                <option>外埔區</option>
                                <option>和平區</option>
                                <option>石岡區</option>
                                <option>大安區</option>
                                <option>新社區</option>
                            </select>
                        </div>
                    </td>
            </tr>
            <tr>
                <th>
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">搜尋</button>
                </th>
                <td>
                    <button class="btn btn-outline-success my-2 my-sm-0" type="reset">重設</button>
                </td>
            </tr>
            </form>

        </table>
    </div>
    <section id="carouselbody">
        <div class="bd-example">
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <a href="https://travel.taichung.gov.tw/zh-tw/Shop/Accommodation/4047/%E7%B4%85%E9%BB%9E%E6%96%87%E6%97%85" class="link" title="2019谷關七雄登山趣" target="_blank">
                            <img src="https://travel.taichung.gov.tw/Utility/DisplayImage?id=10730" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                            </div>
                        </a>
                    </div>
                    <div class="carousel-item">
                        <a href="https://travel.taichung.gov.tw/zh-tw/Shop/Accommodation/3761/%E7%A6%8F%E5%AE%B9%E5%A4%A7%E9%A3%AF%E5%BA%97-%E9%BA%97%E5%AF%B6%E6%A8%82%E5%9C%92" class="link" title="臺中市即時景點或鄰近重要道路實況影像" target="_blank">
                            <img src="https://travel.taichung.gov.tw/Utility/DisplayImage?id=15155" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                            </div>
                        </a>
                    </div>
                    <div class="carousel-item">
                        <a href="https://travel.taichung.gov.tw/zh-tw/Shop/Accommodation/2283/%E7%A6%8F%E6%B3%B0%E6%A1%94%E5%AD%90%E5%95%86%E5%8B%99%E6%97%85%E9%A4%A8" class="link" title="108年工作成果" target="_blank">
                            <img src="https://travel.taichung.gov.tw/Utility/DisplayImage?id=4573" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                            </div>
                        </a>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon Icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                    <span class="carousel-control-next-icon Icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div id="newstitle">
        </div>
    </section>
    <table style="border-bottom:1px solid #ddd ; padding-bottom:10px ; margin-left: 10% ; margin-right: 10% ; margin-top: 2%;" cellpadding="3" ;border='10' RULES=ROWS>
        <tr>
            <th></th>
            <th>建議搜尋</th>
            <th>星星評分</th>
            <th align-text:center>地址</th>
        </tr>
        <?php
        for ($i = 0; $i < 5; $i++) {
            echo "
                <tr >
                    <td bgcolor=#f0efd3>
                    <img src=\"$img[$i] \" alt=\"\" style=\"height: 200px; width: 200px\">
                    </td>
                    <td width=\"40%\" bgcolor=#f0efd3>$name[$i]</td>
                    <td width=\"10%\" bgcolor=#f0efd3>$stars[$i]</td>
                    <td width=\"50%\" bgcolor=#f0efd3>$location[$i]</td>
                </tr>
                ";
        }
        ?>
    </table>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>