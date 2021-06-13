<?php      
    $host = "sql200.epizy.com";  
    $user = "epiz_28802947";  
    $password ='xvsJELmF3JBc';  
    $db_name = "epiz_28802947_maharishi";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
?>  