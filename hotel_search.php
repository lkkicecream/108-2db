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

  <!-- 字型 -->
  <link rel="stylesheet" href="css/teko.css">

  <!-- 主體CSS -->
  <link rel="stylesheet" href="css/header.css">
  <link rel="stylesheet" href="css/hover.css">

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
      <nav class="header-menu-box-list">
        <ul class="header-menu-class">
          <li class="header-menu-list" style="top: 10px;">
            <a href="/#index-contact" onclick="menu_scrollTo(2);return false;">
              <span class="header-menu-en-title">Contact</span>
              <span class="header-menu-ch-title">聯絡我們</span>
            </a>
          </li>
          <li class="header-menu-list" style="top: 10px;">
            <a href="hotel_search.php">
              <span class="header-menu-en-title">Hotel</span>
              <span class="header-menu-ch-title">飯店</span>
            </a>
          </li>
          <li class="header-menu-list" style="top: 10px; margin-right: 60px;">
            <a href="sights_search.php">
              <span class="header-menu-en-title">Sight</span>
              <span class="header-menu-ch-title">景點</span>
            </a>
          </li>
          <li class="header-menu-list" style="top: 10px;">
            <a href="signup_hotel.php">
              <span class="header-menu-en-title"><?php echo $_SESSION["account_en"]?></span>
              <span class="header-menu-ch-title"><?php echo $_SESSION["account"]?></span>
            </a>
          </li>
          <li class="header-menu-list" style="top: 10px;">
            <a href="signup_sight.php">
              <span class="header-menu-en-title"><?php echo $_SESSION["login_en"]?></span>
              <span class="header-menu-ch-title"><?php echo $_SESSION["login"]?></span>
            </a>
          </li>
        </ul>
      </nav>
    </section>
    <!-- Menu END -->

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
            <a href="/works/">
              <span class="header-navigation-ch-title">網站案例</span>
              <span class="header-navigation-en-title">Works</span>
            </a>
          </li>
          <li>
            <a href="/#index-contact" onclick="menu_scrollTo(2);return false;">
              <span class="header-navigation-ch-title">聯絡我們</span>
              <span class="header-navigation-en-title">Contact</span>
            </a>
          </li>
          <li>
            <a href="/articles/">
              <span class="header-navigation-ch-title">文章專區</span>
              <span class="header-navigation-en-title">Article</span>
            </a>
          </li>
          <li>
            <a href="/about/">
              <span class="header-navigation-ch-title">關於我們</span>
              <span class="header-navigation-en-title">About</span>
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
  <div align="center">
    <table style="margin-top: 4em">
      <tr>
        <form class="form-inline my-2 my-lg-0 form-search" align="center" action="outcom_hotel.php" method="POST">
          <th>
            <input class="form-control mr-sm-2 input-search" align="left" type="search" placeholder="Search" aria-label="Search" name="keyword" style="width: 400px;">
          </th>
          <td>
            <div class="text" align="left">
              <select class="text-select" name="select">
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