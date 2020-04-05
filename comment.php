<?php
        session_start();
        include "connect.php";
         if(isset($_POST["commentSubmitButton"]))
		 {
           $text=$_POST["comment"];
            echo "<br>";
            $user=$_SESSION["username"]; 
            $commentFor= $POST["commentFrom"]

			
            $qry="insert into comments(id,username,comments) values ('','$temp','$text','$commentFor',CURRENT_TIMESTAMP)";   
            $result=$conn->query($qry) or die("query failed".$conn->error);    
            header("location:homelogin.php");
        }
    ?>