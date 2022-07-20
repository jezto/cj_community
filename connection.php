<?php      
    $host = "sql303.epizy.com";  
    $user = "epiz_32205610";  
    $password = 'BHuLUWCJME6v4';  
    $db_name = "epiz_32205610_jestocjofficial";  
      
    $conn = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
?> 