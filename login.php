<html>
	<head>
		<style>
			
			.div1{
				padding-top:20px;
				text-align:center;
			}
		    .headdiv{
				padding:30px;
				background-color:green;
				text-align:center;
			}
			#e{	
				color:red;
				font-size:40;
			}
		</style>
	</head>
	
	<body>
		<div class="headdiv">
             <h1>N<span id="e">E</span>WS</h1>
        </div>
		<?php
		
			session_start();
			if(isset($_SESSION["username"]))
					header("location:homelogin.php");
				
			include "connect.php";
			if(isset($_POST["loginsubmit"]))
			{
				$username=$_POST["username"];
				$password=$_POST["password"];
				
				if($username=="akc" and $password=="akc")
				{
					$_SESSION["username"]=$username;
					header("location:news_create.php");
				}
				
				$qry="select * from users where username='$username' and password='$password'";
				
				$result=$conn->query($qry) or die("query failed");
				
				if($result->num_rows>0)
				{
					$_SESSION["username"]=$username;
					header("location:homelogin.php");
				}
			
			}
		
		?>
		<div class="div1">
			<a href="register.php">REGISTER</a><br>
			<h3>or</h3>
			<h3>LOGIN</h3>
			<form action="" method="post">
				Username:<input type="text" name="username">
				<br><br>
				Password:<input type="password" name="password">
				<br><br>
				<input type="submit" name="loginsubmit">
			</form>
	
		</div>
	
	</body>

</html>