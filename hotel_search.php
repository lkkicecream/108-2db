<?php
session_start();
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
$_SESSION['keyword'] = null;
$_SESSION['select'] = null;
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="https://kit.fontawesome.com/66a625edde.js" crossorigin="anonymous"></script>
  <title>首頁</title>

  <!-- 字型 -->
  <link rel="stylesheet" href="css/teko.css">

  <!-- 主體CSS -->
  <link rel="stylesheet" href="css/header.css">
  <link rel="stylesheet" href="css/hover.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <style>
    body {
      background-color: #E0E0E0;
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
      margin-top: 2em;
    }

    .form-search {
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border-radius: 4px;
      box-sizing: border-box;
    }

    .input-search {
      height: 60px;
      margin-top: 2em;
    }

    #carouselbody {
      /* 主要頁面 */
      margin-top: 30px;
      background-color: #8E8E8E;
    }

    .carousel .carousel-item {
      height: 400px;
    }

    .carousel .carousel-item img {
      align-items: center;
      max-width: 800px;
      margin: auto;
    }

    .header-navigation-box {
      display: -webkit-flex;
      display: flex;
      -webkit-align-items: center;
      align-items: center;
      -webkit-justify-content: center;
      justify-content: center;
      flex-direction: column;
      width: 30%;
      height: 100vh;
      position: fixed;
      margin-left: 1000px;
      z-index: 100;
      font-size: 0;
      top: -110%;
      background-color: rgba(0, 0, 0, 0.9);
      transition: all .4s linear;
    }
  </style>
  <script language='javascript' type='text/javascript'>
    function search() {
      var search1 = document.getElementById("search1");
      var select1 = document.getElementById("select1");
      if (search1.value == "" && select1.options[select1.selectedIndex].value == 0) {
        alert("請輸入關鍵字");
        document.myform.action = "hotel_search.php";
      }
    }

    function maintain() {
      alert("尚在維護！");
    }
  </script>
</head>

<body>
  <!-- Header -->
  <header id="header-fixed" class="header-fixed-open">
    <!-- Logo -->
    <section class="header-logo-box">
      <a href="home.php">
        <img src="logo.png" alt="鬼谷網頁設計公司" width="200px" height="50px">
      </a>
    </section>
    <!-- Logo END -->

    <!-- Menu -->
    <section class="header-menu-box">
      <nav class="navbar navbar-expand-lg navbar-light header-menu-box-list">
        <button class="navbar-toggler" style="position:absolute; right:0px;" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="header-menu-class navbar-nav mr-auto">
            <li class="header-menu-list nav-item">
              <a href="/#index-contact" onclick="menu_scrollTo(2);return false;">
                <span class="header-menu-en-title">Contact</span>
                <span class="header-menu-ch-title">聯絡我們</span>
              </a>
            </li>
            <li class="header-menu-list nav-item">
              <a href="hotel_search.php">
                <span class="header-menu-en-title">Hotel</span>
                <span class="header-menu-ch-title">飯店</span>
              </a>
            </li>
            <li class="header-menu-list nav-item">
              <a href="sights_search.php">
                <span class="header-menu-en-title">Sight</span>
                <span class="header-menu-ch-title">景點</span>
              </a>
            </li>
            <?php
            $account_en = $_SESSION['account_en'];
            $account = $_SESSION['account'];

            $login_en = $_SESSION["login_en"];
            $login = $_SESSION["login"];
            if ($login) {
              echo "
              <li class=\"header-menu-list nav-item\">
              <a href=\"\">
                <span class=\"header-menu-en-title\"> $account_en </span>
                <span class=\"header-menu-ch-title\"> $account </span>
              </a>
              </li>
              
                <li class=\"header-menu-list nav-item\">
                <a href=\"logout.php\">
                  <span class=\"header-menu-en-title\"> $login_en </span>
                  <span class=\"header-menu-ch-title\"> $login </span>
                </a>
              </li>
              ";
            }
            ?>
            <?php
            if (!$login)
              echo "<li class=\"header-menu-list\">
              <a href=\"signup_hotel.php\">
                <span class=\"header-menu-en-title\">login</span>
                <span class=\"header-menu-ch-title\">登入</span>
              </a>
              </li>
              <li class=\"header-menu-list\">
                <a href=\"register.php\">
                  <span class=\"header-menu-en-title\">regist</span>
                  <span class=\"header-menu-ch-title\">註冊</span>
                </a>
              </li>
              ";

            ?>

          </ul>
        </div>
      </nav>
    </section>
    <!-- 導覽  -->
    <section class="header-menu-rwd-btn-box">
      <div class="header-menu-rwd-btn-border" id="header-navigation-border">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </section>
    <!-- 導覽 END -->
    <!-- 展開視窗 -->
    <section class="header-navigation-box" id="header-navigation-box">
      <nav class="header-navigation-menu-box">
        <ul class="header-navigation-menu">
          <li>
            <a href="personal.php">
              <span class="header-navigation-ch-title">Personal</span>
              <span class="header-navigation-en-title" style="font-size: 20px;">修改個人資料</span>
            </a>
          </li>
          <li>
            <a href="myfavorite.php">
              <span class="header-navigation-en-title" style="font-size: 25px;">我的最愛</span>
              <span class="header-navigation-ch-title" style="font-size: 25px;">Myfavorite</span>
            </a>
          </li>
          <li>
            <a href="" onclick="maintain()">
              <span class="header-navigation-en-title" style="font-size: 25px;">關於我們</span>
              <span class="header-navigation-ch-title">About</span>
            </a>
          </li>
          <li>
            <a href="" onclick="maintain()">
              <span class="header-navigation-en-title" style="font-size: 25px;">文章專區</span>
              <span class="header-navigation-ch-title">Article</span>
            </a>
          </li>
        </ul>
        <dl class="header-navigation-summary-block">
          <dt class="header-navigation-summary-title">Tel：</dt>
          <dd class="header-navigation-summary-description">
            <a href="tel:0423157956" title="鬼谷聯絡電話" rel="noopener">
              04-23157956
            </a>
          </dd>
        </dl>
        <dl class="header-navigation-summary-block">
          <dt class="header-navigation-summary-title">E-mail：</dt>
          <dd class="header-navigation-summary-description">
            <a href="mailto:service@great-good.tw" title="鬼谷服務信箱" rel="noopener">
              service@great-good.tw
            </a>
          </dd>
        </dl>
        <p class="header-copyright">
          © 2018 GD Web Design.<small> All Rights Reserved.</small>
        </p>
        </div>
      </nav>
      <div class="header-mask" id="header-navigation-mask"></div>
    </section>
    <!-- 展開視窗 END -->
  </header>
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
            <a href="https://travel.taichung.gov.tw/zh-tw/Shop/Accommodation/4047/%E7%B4%85%E9%BB%9E%E6%96%87%E6%97%85" class="link" title="紅點文旅" target="_blank">
              <img src="https://travel.taichung.gov.tw/Utility/DisplayImage?id=10730" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
              </div>
            </a>
          </div>
          <div class="carousel-item">
            <a href="https://travel.taichung.gov.tw/zh-tw/Shop/Accommodation/3761/%E7%A6%8F%E5%AE%B9%E5%A4%A7%E9%A3%AF%E5%BA%97-%E9%BA%97%E5%AF%B6%E6%A8%82%E5%9C%92" class="link" title="福容大飯店-麗寶樂園" target="_blank">
              <img src="https://travel.taichung.gov.tw/Utility/DisplayImage?id=15155" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
              </div>
            </a>
          </div>
          <div class="carousel-item">
            <a href="https://travel.taichung.gov.tw/zh-tw/Shop/Accommodation/2283/%E7%A6%8F%E6%B3%B0%E6%A1%94%E5%AD%90%E5%95%86%E5%8B%99%E6%97%85%E9%A4%A8" class="link" title="福泰桔子商務旅館" target="_blank">
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

  <div align="center">
    <table style="margin-top: 1.5em">
      <tr>
        <form class="form-inline my-2 my-lg-0 form-search" align="center" action="outcom_hotel.php" method="POST" name="myform">
          <th>
            <input class="form-control mr-sm-2 input-search" align="left" type="search" placeholder="Search" aria-label="Search" name="keyword" style="width: 400px;" id="search1">
          </th>
          <td>
            <div class="text" align="left">
              <select class="text-select" name="select" id="select1">
                <option value="0">不選擇</option>
                <option value="中區">中區</option>
                <option value="東區">東區</option>
                <option value="西區">西區</option>
                <option value="南區">南區</option>
                <option value="北區">北區</option>
                <option value="西屯">西屯區</option>
                <option value="南屯">南屯區</option>
                <option value="北屯">北屯區</option>
                <option value="豐原">豐原區</option>
                <option value="大里">大里區</option>
                <option value="太平">太平區</option>
                <option value="清水">清水區</option>
                <option value="沙鹿">沙鹿區</option>
                <option value="大甲">大甲區</option>
                <option value="東勢">東勢區</option>
                <option value="梧棲">梧棲區</option>
                <option value="烏日">烏日區</option>
                <option value="神岡">神岡區</option>
                <option value="大肚">大肚區</option>
                <option value="大雅">大雅區</option>
                <option value="后里">后里區</option>
                <option value="霧峰">霧峰區</option>
                <option value="潭子">潭子區</option>
                <option value="龍井">龍井區</option>
                <option value="外埔">外埔區</option>
                <option value="和平">和平區</option>
                <option value="石岡">石岡區</option>
                <option value="大安">大安區</option>
                <option value="新社">新社區</option>
              </select>
            </div>
          </td>
      </tr>
      <tr>
        <th>
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit" onclick="search()">搜尋</button>
        </th>
        <td>
          <button class="btn btn-outline-success my-2 my-sm-0" type="reset">重設</button>
        </td>
      </tr>
      </form>

    </table>
  </div>

  <table style="border-bottom:1px solid #ddd ; padding-bottom:10px ; margin-left: 10% ; margin-right: 10% ; margin-top: 2%;" cellpadding="3" ;border='10' RULES=ROWS>
    <tr >
      <th style="background-color:white"></th>
      <th style="background-color:white;  text-align:center">建議搜尋</th>
      <th style="background-color:white;  text-align:center">星星評分</th>
      <th style="background-color:white;  text-align:center">地址</th>
    </tr>
    <?php
    $a = array();
    for ($i = 1; $i <= 5; $i++) {  //產生20個
      $b = rand(0, 35);  //產生1~25的亂數
      if (in_array($b, $a)) {
        $i--;
        continue;
      }
      $a[$i] = $b;
      echo "
                <tr >
                    <td bgcolor=white>
                    <img src=\"$img[$b] \" alt=\"\" style=\"height: 200px; width: 200px\">
                    </td>
                    <td width=\"40%\" bgcolor=white align=\"center\">$name[$b]</td>
                    <td width=\"10%\" bgcolor=white align=\"center\">$stars[$b]</td>
                    <td width=\"50%\" bgcolor=white align=\"center\">$location[$b]</td>
                </tr>
                ";
    }


    ?>
  </table>
  <!-- zenscroll -->
  <script type="text/javascript" src="js/zenscroll.js" async=""></script>
  <!-- zenscroll END -->

  <!-- 共用 JS -->
  <script src="js/shared.js" type="text/javascript" async=""></script>
  <!-- 共用 JS END -->
  <!-- Footer END-->
  <script type="text/javascript" src="js/articles.js" charset="utf-8" async=""></script>


  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>