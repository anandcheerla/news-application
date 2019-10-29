<html>

    <head>
        <style>

            .headdiv{
                padding:30px;
                background-color:green;
                text-align:center;
            }
			textarea {
			  width: 400px;
			  height: 150px;
			}
			#heading_blank{
				width: 400px;
				height: 30px;
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
				{
					include "connect.php";
					$uploader=$_SESSION["username"];
					if(isset($_POST["nsubmit"]))
					{
						$target="uploads/";
						$heading=$_POST["heading"];
						$text=$_POST["textadd"];
						$file=$_FILES["imagefile"]["name"];  
						$target=$target.$file;
						$severity=0;
						$qry="insert into news(id,Heading,news,file,severity,date,uploader) values ('','$heading','$text','$file','$severity',CURRENT_TIMESTAMP,'$uploader')";
						$re=$conn->query($qry) or die("query failed");
						if(isset($_FILES["imagefile"]))	               
							move_uploaded_file($_FILES["imagefile"]["tmp_name"],$target);
						
					}
					if(isset($_POST["delete"]))
					{
			
					}
				}
			?>
			<h3 align="center"><a href="home.php">Home</a><h3>
		
			<form method="post" action="news_create.php" enctype="multipart/form-data">
				<h3>Upload News<h3>
				<input id="heading_blank" type="text" name="heading" placeholder="Heading"></input>
				<br><br>
				<textarea placeholder="News" name="textadd" rows="8",cols="400"></textarea>
				<br><br>
				<input name="imagefile" type="file" >
				<input type="submit" name="nsubmit" value="upload">
			</form>
		
			<br><br>
			If you want to logout:
			<a href="logout.php">Logout</a>
    </body>

</html>