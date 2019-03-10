<html>
    <head>
		<style>
			.headdiv
			{
				padding:30px;
				background-color:green;
				text-align:center;
			}
			#e
			{
				color:red;
				font-size:40;
					
			}
		</style>

    </head>
   <body>
		<?php
			include "connect.php";

			if(isset($_POST["regsubmit"]))
			{
				$firstname=$_POST["firstname"];
				$lastname=$_POST["lastname"];
				$username=$_POST["username"];
				$password=$_POST["password"];
				$confirmpassword=$_POST["confirmpassword"];
				$email=$_POST["email"];
				$mobile=$_POST["mobilenumber"];
				
				if ($password != $confirmpassword)
					echo "<h2>passwords not matched</h2>";
				else if(strlen($password)<8)
					echo "<h2>Password should be atleast 8 characters</h2>";
				else
				{
					
					$qry="insert into users(firstname,lastname,username,password,email,mobilenumber) values ('$firstname','$lastname','$username','$password','$email','$mobile')";

					$result=$conn->query($qry) or die("query failed".$conn->error);

					header("location:login.php");
				}
			}
			
		?>

		<div class="headdiv">
			 <h1>N<span id="e">E</span>WS</h1>
		</div>
		
		<h1>Create an a	ccount</h1>
		<form method="post" action="register.php">
			<fieldset>
					<legend>Register</legend>
					Firstname:<input type="text" name="firstname"><br><br>       
					Lastname:<input type="text" name="lastname"><br><br>
					Username:<input type="text" name="username"><br><br>
					Password:<input type="password" name="password"> *Password should be atleast 8 characters<br><br>
					confirm :<input type="password" name="confirmpassword"><br><br>
					Email:<input type="text" name="email"><br><br>
					Mobile:<input type="text" name="mobilenumber"><br><br>
					<input type="submit" name="regsubmit">
			</fieldset>
		</form>


    </body>


</html>