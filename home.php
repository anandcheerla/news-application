<html>

	<head>

		<style>
			.indiv{

				
				margin-left:100px;
				margin-right:100px;
			
			}
			.headdiv{
				padding:30px;
				background-color:green;
				text-align:center;
			}
			#login{
				position:fixed;
				margin-left:45%;
				font-size:20;
				
			}
			#recent{
				border-style:ridge;
				padding:30;
				
			}
			#e{
				
				color:red;
				font-size:40;
				
			}
			
		</style>

	</head>

<body>
    <?php
        session_start();
        if(isset($_SESSION['username']))
            header("location:homelogin.php");

    ?>

	<div class="headdiv">
		<h1>N<span id="e">E</span>WS</h1>
	</div>
	<br>
	<div id="login">
		<p><a href="login.php">LOGIN / REGISTER</a>
	</div>
	<br>
	<marquee><h2>PLEASE LOGIN FOR FULL ACCESS</h2></marquee>
	<div>
	<div class="indiv">
	
	<div id="recent">
		<h2 align="center">Recent News</h2>
		<?php

			include "connect.php";
			$qry="select * from news where date>=DATE_SUB(CURRENT_DATE(), INTERVAL 1 DAY)";
			$re=$conn->query($qry) or die("Query failed");
			for($i=0;$i<$re->num_rows;$i++){
				$row=$re->fetch_assoc();
				echo "<br>";
				echo "<div>";
					echo "<img src='uploads/".$row["file"]."' width=100 height=100>";
				echo "</div>";
				echo "<br>";
				echo "".$row["Heading"];
				echo "<br><br>";
				
				echo "<div>";
					echo "".substr($row["news"],0,30);
					echo "........";
				echo "</div>";
			}
		?>
	</div>
   </div>
   </div>

</body>

</html>