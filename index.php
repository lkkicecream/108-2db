<!DOCTYPE html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="https://kit.fontawesome.com/66a625edde.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>首頁</title>
  <style type="text/css">
    #sitebody {
      width: device-width;
      margin: 0 auto;
      font-size: 13 px;
    }

    #header {
      background-color: #555150;
      height: 80px;
      text-align: center;
      line-height: 2.5;
    }

    .Logo .Logo1 {
      max-height: 80px;
      max-width: auto;
      display: inline;
      position: absolute;
      left: 80px;
    }

    #footer {
      clear: both;
      background-color: #466673;
      text-align: center;
      line-height: 80px;
    }

    .bg-green {
      background-color: #466673;
      box-shadow: 0 3px 8px 0 #000;
    }

    .Home {                   /* navbar距離 */
      width: 150px;
    }

    .carousel .carousel-item {
      height: 400px;
    }

    .carousel .carousel-item img {
      align-items: center;
      max-width: 800px;
      margin: auto;
    }

    #carouselbody {                 /* 主要頁面 */
      margin-top: 30px;
      background-color: #466673;
    }

    body {
      background-color: #DEFFFF;
    }

    .card-new .card {
      background-color: brown;
    }

    #news {
      margin: auto;
      width: 80vw;
      margin-top: 10px;
      background-color: rgb(185, 198, 187);
      border-radius: 10px;
      border: 10px solid;
      border-color: #466673;
    }

    .list-group-item {
      color: white;
      background-color: #8c634a;
    }

    .list-group-item.active {
      background-color: #d9b68b;
    }

    .newtext {
      padding: 20px;
    }

    .Icon {
      width: 50px;
      height: 50px;
    }

    #newsbut {
      margin-left: 13%;
      margin-top: 2%;
    }

    .newsbutback {
      background-color: #466673;
    }

    #MainBody {
      margin-bottom: 100px;
    }

    .ntitle a {
      font-weight: bold;
      font-size: medium;
      text-align: center;
    }
  </style>
</head>

<body>
    <div id="navbar">
        <nav class="navbar navbar-expand-lg navbar-dark fixed-center bg-green">
        <a class="navbar-brand Home titleb " href="#" style="font-size: 25px;"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
        aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active Home">
            <a class="nav-link titleb" href="home.php"" style="font-size: 17px;"><i class="fas fa-home"></i>
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
        <tr>
            <form class="form-inline my-2 my-lg-0" style="margin-left: 600px;">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </tr>
        <table width="50%" bgcolor="white" style="border-collapse: separate; border-spacing: 0 10px;" class="col-xs-6 col-md-6 table-responsive">
        <br><br>
        <tbody>
        <tr>
            <td width="98"><div align="center">地區</div></td>
            <td width="98"><input onclick="area1_g.check(this);" type="checkbox" name="area1_g_all" id="area1_g_all">中區</td>
            <td width="98"><input onclick="area1_g.check(this);" type="checkbox" name="area2_g_all" id="area2_g_all">東區</td>
            <td width="98"><input onclick="area1_g.check(this);" type="checkbox" name="area3_g_all" id="area3_g_all">西區</td>
            <td width="98"><input onclick="area1_g.check(this);" type="checkbox" name="area4_g_all" id="area4_g_all">南區</td>
            <td width="98"><input onclick="area1_g.check(this);" type="checkbox" name="area5_g_all" id="area5_g_all">北區</td>
        </tr>
        <tr>
            <td width="98"><div align="center"></div></td>
            <td width="98"><input onclick="area1_g.check(this);" type="checkbox" name="area6_g_all" id="area6_g_all">西屯區</td>
            <td width="98"><input onclick="area1_g.check(this);" type="checkbox" name="area7_g_all" id="area7_g_all">南屯區</td>
            <td width="98"><input onclick="area1_g.check(this);" type="checkbox" name="area8_g_all" id="area8_g_all">北屯區</td>
            <td width="98"><input onclick="area1_g.check(this);" type="checkbox" name="area9_g_all" id="area9_g_all">豐原區</td>
            <td width="98"><input onclick="area1_g.check(this);" type="checkbox" name="area10_g_all" id="area10_g_all">大里區</td>
            <td width="98"><input onclick="area1_g.check(this);" type="checkbox" name="area11_g_all" id="area11_g_all">太平區</td>
        </tr>
        <tr>
            <td width="98"><div align="center"></div></td>
            <td width="123"><input onclick="area1_g.check(this);" type="checkbox" name="area12_g_all" id="area12_g_all">清水區</td>
            <td width="123"><input onclick="area1_g.check(this);" type="checkbox" name="area13_g_all" id="area13_g_all">沙鹿區</td>
            <td width="123"><input onclick="area1_g.check(this);" type="checkbox" name="area14_g_all" id="area14_g_all">大甲區</td>
            <td width="123"><input onclick="area1_g.check(this);" type="checkbox" name="area15_g_all" id="area15_g_all">東勢區</td>
            <td width="130"><input onclick="area1_g.check(this);" type="checkbox" name="area16_g_all" id="area16_g_all">梧棲區</td>
            <td width="140"><input onclick="area1_g.check(this);" type="checkbox" name="area17_g_all" id="area17_g_all">烏日區</td>
        </tr>
        <tr>
            <td width="98"><div align="center"></div></td>
            <td width="123"><input onclick="area1_g.check(this);" type="checkbox" name="area18_g_all" id="area18_g_all">神岡區</td>
            <td width="123"><input onclick="area1_g.check(this);" type="checkbox" name="area19_g_all" id="area19_g_all">大肚區</td>
            <td width="123"><input onclick="area1_g.check(this);" type="checkbox" name="area20_g_all" id="area20_g_all">大雅區</td>
            <td width="123"><input onclick="area1_g.check(this);" type="checkbox" name="area21_g_all" id="area21_g_all">后里區</td>
            <td width="130"><input onclick="area1_g.check(this);" type="checkbox" name="area22_g_all" id="area22_g_all">霧峰區</td>
            <td width="140"><input onclick="area1_g.check(this);" type="checkbox" name="area23_g_all" id="area23_g_all">潭子區</td>
        </tr>
        <tr>
            <td width="98"><div align="center"></div></td>
            <td width="123"><input onclick="area1_g.check(this);" type="checkbox" name="area24_g_all" id="area24_g_all">龍井區</td>
            <td width="123"><input onclick="area1_g.check(this);" type="checkbox" name="area25_g_all" id="area25_g_all">外埔區</td>
            <td width="123"><input onclick="area1_g.check(this);" type="checkbox" name="area26_g_all" id="area26_g_all">和平區</td>
            <td width="123"><input onclick="area1_g.check(this);" type="checkbox" name="area27_g_all" id="area27_g_all">石岡區</td>
            <td width="130"><input onclick="area1_g.check(this);" type="checkbox" name="area28_g_all" id="area28_g_all">大安區</td>
            <td width="140"><input onclick="area1_g.check(this);" type="checkbox" name="area29_g_all" id="area29_g_all">新社區</td>
            </tr>
            <tr>
              <td align="center">
                <input name="submit" type="submit">
              </td>
              <td>
                <input name="delete" type="reset">
              </td>
            </tr>
          </tbody>
        </table>
    </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
</body>

</html>