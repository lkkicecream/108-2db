
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>登入驗證</title>
		<style type="text/css">
			.main{
				margin: 0 auto;
				width: 350px;
				height: 100px;
				background: cornflowerblue;
				padding: 20px;
			}
		</style>
	</head>
	<body>
		<div class="main">
			<?php
                require_once("connect.php");
				$name=$_POST['userName'];
				$password=$_POST['userPassword'];

                if($name==null||$password==null){
					header("location:登入.html");//直接開啟該php檔案，跳轉到登入介面
				}
				
				
//				require_once('登入驗證資料庫連線.php');
//				$db=new connectDB();
//				$db->getConn();
                    $con = create_connection();
					//[email protected] mysqli('25.64.251.181','bacon'','0000000000');
			
					$sql='SELECT myaccount,	mypasswd FROM account WHERE myaccount='."'{$name}'AND mypasswd="."'$password';";
                    $result = execute_sql($con, "test", $sql);
                    
					$num_users=$result->num_rows;//在資料庫中搜索到符合的使用者
					if($num_users!=0){//搜尋到該使用者
						echo "<h3>歡迎您&nbsp{$name}</h3>";
						
					}
					else{
						echo "使用者名稱或密碼錯誤";
					}
			?>
		</div>
    </body>
    






    


</html>