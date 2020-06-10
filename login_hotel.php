
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>登入驗證</title>
		
	</head>
	<body>
		<div class="main">
			<?php
				session_start();
                require_once("connect.php");
				$name=$_POST['userName'];
				$password=$_POST['userPassword'];

                
				
				
//				require_once('登入驗證資料庫連線.php');
//				$db=new connectDB();
//				$db->getConn();
                    $con = create_connection();
					//[email protected] mysqli('25.64.251.181','bacon'','0000000000');
			
					$sql='SELECT myaccount,	mypasswd FROM account WHERE myaccount='."'{$name}'AND mypasswd="."'$password';";
                    $result = execute_sql($con, "test", $sql);
                    
					$num_users=$result->num_rows;//在資料庫中搜索到符合的使用者
					if($num_users!=0){//搜尋到該使用者
						$account = mysqli_fetch_array($result);
						$_SESSION['account'] = "歡迎！";
						$_SESSION['account_en'] = "Welcome！";
						$_SESSION['login'] = $account[0];
						$_SESSION['login_en'] = "account";
						header("location: hotel_search.php");
					}
					else{
						$url = "signup_hotel.php" ;
						echo "<script language = 'javascript'  type = 'text/javascript'> alert('請輸入正確的使用者名稱和密碼！');";
						echo " window.location.href = '$url';";
						echo "</script>";
					}
			?>
		</div>
    </body>
    
</html>