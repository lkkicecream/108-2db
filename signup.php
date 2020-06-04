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
      background-color: white;
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
    .main{
				margin: 0 auto;
				padding: 10px;
				width: 350px;
				height: 300px;
				background: white;
			}
			.leftbar{
				width: 30%;
				padding-bottom: 10px;
				display: inline-block;
				text-align: right;
			}
			.bottom{
				padding-bottom: 15px;
			}
  </style>
</head>
<body>
		
		<form action="login.php" method="post">
			
			<div id="main" class="main">
				<h3>
					請輸入使用者名稱
				</h3>
				<div>
					<label><div class="news">使用者名稱：</div><input type="text" name="userName" /></label>
					<label><div class="news">密碼：</div><input type="text" name="userPassword" /></label>
				</div>
				<div class="bottom">
					<div class="news"></div><input type="radio" name="remmber"  />記住我一週
				</div>
				<div class="bottom">
					<div class="leftbar"></div><input type="submit" name="submit" value="登入" />
				</div>
				
			</div>
			
		</form>	
  </body>
  </html>