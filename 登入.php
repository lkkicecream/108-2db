<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>登入介面</title>
	<style type="text/css">
		.main {
			margin: 0 auto;
			padding: 10px;
			width: 250px;
			height: 200px;
			background: cornflowerblue;
		}

		.leftbar {
			width: 30%;
			padding-bottom: 15px;
			display: inline-block;
			text-align: right;
		}

		.bottom {
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
				<label>
					<div class="leftbar">使用者名稱：</div><input type="text" name="userName" />
				</label>
				<label>
					<div class="leftbar">密碼：</div><input type="password" name="userPassword" />
				</label>
			</div>
			<div class="bottom">
				<div class="leftbar"></div><input type="radio" name="remmber" />記住我一週
			</div>
			<div class="bottom">
				<div class="leftbar"></div><input type="submit" name="submit" value="登入" />
			</div>

		</div>

	</form>
</body>

</html>