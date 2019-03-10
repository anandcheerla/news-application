<?php
        session_start();
        include "connect.php";
         if(isset($_POST["sub"]))
		 {
           $text=$_POST["comment"];
            echo "<br>";
            $temp=$_SESSION["username"];   
			
            $qry="insert into comments(id,username,comments) values ('','$temp','$text')";   
            $result=$conn->query($qry) or die("query failed".$conn->error);    
            header("location:homelogin.php");
        }
    ?>