<?php      
    include('connection.php');

    $username = $_POST['email'];  
    $password = $_POST['pass'];
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($conn, $username);  
        $password = mysqli_real_escape_string($conn, $password);  
      
        $sql = "SELECT * FROM cjcommunity WHERE email = '$username' and password = '$password'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);
        $sqlji = "SELECT fullname FROM cjcommunity WHERE email = '$username';";
        $resultji = mysqli_query($conn, $sqlji);
          
        if($count == 1){
            echo '<script>window.location="/login_success/index.html"</script>';
            while ($row = mysqli_fetch_assoc($resultji)) {
                echo $row['fullname'];
            }
        }
        else{  
            echo '<script>window.location="/login_failed/index.html"</script>';
        } 

?>