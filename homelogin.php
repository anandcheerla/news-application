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
		.comments{
			padding-left:40%;

		}
		textarea {
			  width: 400px;
			  height: 100px;
			}
		#imgandnews{
			
			padding:20;
			border-style:ridge;
			position: relative;
			margin-right:40%;
			

			
		}
		#imgandnews img{
			
			
		}
		#imgandnews span{
			
			padding:20;
			height:200;
			width:400;
			position:absolute;
			
		}
		#rightsidediv{
			
			position:fixed;
			margin-left:80%;
		}
		#e{
				
				color:red;
				font-size:40;
				
			}

		#CandV_div{
			
		}
		</style>

	</head>

<body>
        <div class="headdiv">
           <h1>N<span id="e">E</span>WS</h1>
        </div>

  <div>
    <div class="indiv">
	<h2 align="center">News Articles</h2>

    <?php
        session_start();
		echo "<h3 align='right'>Login as :".$_SESSION['username']."</h3>";
		echo "<div id='rightsidediv'>";
			echo "<h3><a href='news_create.php'>Add News</a></h3>";
			echo "<h3><a href='logout.php'>Logout</a></h3>";
		echo "</div>";
        include "connect.php";
        $qry="select * from news where date>=DATE_SUB(CURRENT_DATE(), INTERVAL 1 DAY)";
        $re=$conn->query($qry) or die("Query failed");
		
		//Fetch the data from the data bases
        for($i=0;$i<$re->num_rows;$i++){
			$row=$re->fetch_assoc();
			//$votes=(int)$row["severity"];
			//$votes+=1;
			//echo gettype($votes);

            echo "<br>";
            echo "<div id='imgandnews'>";
					echo "<img id='".$row["id"]."' src='uploads/".$row["file"]."' width=200 height=200>";
					echo "<span>";
						echo "<p style='color:blue;'}>".$row['Heading']."</p>";
						echo "<br>";
						echo "".$row["news"];
						echo "<br><br>";
						echo " Uploader:".$row["uploader"];

					echo "</span>";
										
            echo "</div>";
            
            echo "<div id='CandV_div'>
            	  </div>";

            echo "<br>";
            
        }
    ?>
   </div>
   </div>
   <br>
   <br>

       
    
    
    <p align="center">Comments here!</p>
    <div class="comments">
	<form action="comment.php" method="post">
       <textarea name="comment"></textarea>
	   <br>
       <input type="submit" name="sub"> 
        
    </form>
    </div>

</body>

</html>