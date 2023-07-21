<?php      
    $host = "localhost";  
    $user = "prati";  
    $password = 'prati';  
    $db_name = "light1";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
?>  