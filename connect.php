<?php
    $host="localhost";
    $user="root";
    $password="";
    $db="project_news";

    $conn=new mysqli($host,$user,$password,$db);

    if($conn->connect_error)
	{
        echo "error connecting ".$conn->connect_error;
    }

?>







