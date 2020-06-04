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
      background-color: #d9b68b;
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
            <a class="nav-link titleb" href="home.php" style="font-size: 17px;"><i class="fas fa-home"></i>
              首頁 <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active Home">
            <a class="nav-link titleb" href="sign.php" style="font-size: 17px;"><i class="fas fa-file-alt"></i>
                登入 <span class="sr-only">(current)</span></a>
            </li>
            <a href="">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a>
            <form class="form-inline my-2 my-lg-0" style="margin-right: 100px;">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" 
                    style="width: 200px; height: 40px; font-size: 15px;">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit" style="width: 80px; height: 40px; font-size: 15px;">Search</button>
            </form>
        </ul>
        </div>
        </nav>
    </div>
</body>