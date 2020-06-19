<?php  //搜尋字串
require_once("connect.php");
session_start();
$login = $_SESSION['login'];
$con = create_connection();
//組合查詢字串
$sql = "SELECT myfavorite.myaccount , myfavorite.myhname , myfavorite.mysname
            FROM myfavorite , account 
            WHERE myfavorite.myaccount=account.myaccount";
//
$cur = execute_sql($con, "test", $sql);
//取出資料
$cnt = 0;
while ($data = mysqli_fetch_array($cur)) { 
    $hname[$cnt] = $data[0];
    $sname[$cnt] = $data[1];
    $cnt++;
}
$cnt1 = 0;
for($i=0; $i<$cnt; $i++) {
  $sql = "SELECT hotel.hlocation , hotel.hstars 
          FROM hotel , myfavorite
          WHERE myfavorite.myhname='" . $hname[$i] . "'";
  $cur = execute_sql($con, "test", $sql);
  while($hlo = mysqli_fetch_array($cur)) {
    $hlocation[$cnt1] = $hlo[0];
    $hstars[$cnt1] = $hlo[1];
    $cnt1++;
  }
  $sql = "SELECT  
          FROM hotel , myfavorite
          WHERE myfavorite.myhname='" . $hname[$i] . "'";
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>我的最愛</title>

  <!-- 字型 -->
  <link rel="stylesheet" href="css/teko.css">

  <!-- 主體CSS -->
  <link rel="stylesheet" href="css/header.css">
  <link rel="stylesheet" href="css/hover.css">

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
      <nav class="header-menu-box-list navbar navbar-expand-lg">
        <ul class="header-menu-class navbar-nav mr-auto">
          <li class="header-menu-list">
            <a href="/#index-contact" onclick="menu_scrollTo(2);return false;">
              <span class="header-menu-en-title">Contact</span>
              <span class="header-menu-ch-title">聯絡我們</span>
            </a>
          </li>
          <li class="header-menu-list">
            <a href="hotel_search.php">
              <span class="header-menu-en-title">Hotel</span>
              <span class="header-menu-ch-title">飯店</span>
            </a>
          </li>
          <li class="header-menu-list">
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
              <li class=\"header-menu-list\">
              <a href=\"\">
                <span class=\"header-menu-en-title\"> $account_en </span>
                <span class=\"header-menu-ch-title\"> $account </span>
              </a>
              </li>
              <li class=\"header-menu-list\">
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
              <a href=\"signup_sight.php\">
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
  <table style="border-bottom:1px solid #ddd ; padding-bottom:10px ; margin-left: 10% ; margin-right: 10% ; margin-top: 2%;" cellpadding="3" ;border='10' RULES=ROWS>
        <?php
        if ($cnt == 0 && $cnt1 == 0)
            echo '<p style="font-size: 32px">查無資料 </p>';
        else if ($word != '' and $cnt1 == 0) {
            echo "
                <tr>
                <th style=\"background-color:white\"></th>
                <th style=\"background-color:white; align-text:center\">搜尋結果</th>
                <th style=\"background-color:white; align-text:center\">星星評分</th>
                <th style=\"background-color:white; align-text:center\" >地址</th>
                </tr>
            ";
            for ($i = 0; $i < $cnt; $i++) {
                echo "
                    <tr >
                        <td bgcolor=white>
                        <img src=\"$img[$i] \" alt=\"\" style=\"height: 200px; width: 200px\">
                        </td>
                        <td width=\"40%\" bgcolor=white align=\"center\">$name[$i]</td>
                        <td width=\"10%\" bgcolor=white align=\"center\">$stars[$i]</td>
                        <td width=\"50%\" bgcolor=white align=\"center\">$location[$i]</td>
                        <td width=\"5%\"  bgcolor=white align=\"center\"><button value=\"$name[$i]\" onclick=mybtn(this)><img src=\"love.png\" style=\"height: 25px; width: 25px; border=0;\"></button>
                    </tr>
                    ";
            }
        } else if ($word == '' and $cnt1 != 0) {
            echo "
            <tr>
            <th style=\"background-color:white\"></th>
                <th style=\"background-color:white; align-text:center\">搜尋結果</th>
                <th style=\"background-color:white; align-text:center\">星星評分</th>
                <th style=\"background-color:white; align-text:center\" >地址</th>
            </tr>
        ";
            for ($i = 0; $i < $cnt1; $i++) {
                echo "
                    <tr >
                        <td bgcolor=white align=\"center\">
                        <img src=\"$img1[$i] \" alt=\"\" style=\"height: 200px; width: 200px\">
                        </td>
                        <td width=\"40%\" bgcolor=white align=\"center\">$name1[$i]</td>
                        <td width=\"10%\" bgcolor=white align=\"center\">$stars1[$i]</td>
                        <td width=\"50%\" bgcolor=white align=\"center\">$location1[$i]</td>
                        <td width=\"5%\"  bgcolor=white align=\"center\"3><button value=\"$name1[$i]\" onclick=mybtn(this)><img src=\"love.png\" style=\"height: 25px; width: 25px; border=0;\"></button>
                    </tr>
                    ";
            }
        } else if ($word != '' and $cnt1 != 0) {
            if ($cnt2 == 0) {

                echo '<p style="font-size: 32px">查無資料 </p>';
            } else {
                echo "
                <tr>
                <th style=\"background-color:white\"></th>
                <th style=\"background-color:white; align-text:center\">搜尋結果</th>
                <th style=\"background-color:white; align-text:center\">星星評分</th>
                <th style=\"background-color:white; align-text:center\" >地址</th>
                </tr>
                ";
                for ($i = 0; $i < $cnt2; $i++) {
                    echo "
                        <tr >
                            <td bgcolor=white>
                            <img src=\"$img2[$i] \" alt=\"\" style=\"height: 200px; width: 200px\">
                            </td>
                            <td width=\"40%\" bgcolor=white align=\"center\">$name2[$i]</td>
                            <td width=\"10%\" bgcolor=white align=\"center\">$stars2[$i]</td>
                            <td width=\"50%\" bgcolor=white align=\"center\">$location2[$i]</td>
                            <td width=\"5%\"  bgcolor=white align=\"center\"><button value=\"$name2[$i]\" onclick=mybtn(this)><img src=\"love.png\" style=\"height: 25px; width: 25px; border=0;\"></button>
                        </tr>
                        ";
                }
            }
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
  