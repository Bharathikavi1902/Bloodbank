<?php      
    
     include 'connection.php'; 
    
    $email = $_POST['email'];  
    $password = $_POST['password'];
      
        $sql = "select * from register where email = '$email' and password = '$password'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){   
            header("location:../html/choice.html");
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }     
?>  