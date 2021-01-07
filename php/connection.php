<?php
	$host = "localhost";  
    $user = "root";  
    $password = "root@123";  
    $db_name = "lifeline";  
      
    $conn = mysqli_connect($host, $user, $password, $db_name);

    if(!$conn)
    {
		echo"Error in Database Connection";
    }
    else
    {
    	echo"Database Connection Sucessfull";
    }

?>