<?php
    include 'connection.php';

    $name = $_REQUEST['fullname'];
    $email = $_REQUEST['email'];
    $password = $_REQUEST['pass'];
    $number = $_REQUEST['mobno'];

    // $sql = "SELECT fullname FROM cjcommunity WHERE mobno = 8547865729";
    // $result = $conn->query($sql);

    // if ($result -> num_rows > 0) {
    //     // output data of each row
    //     while($row = $result->fetch_assoc()) {
    //         echo " " . $row["fullname"] . "";
    //     }
    // } else {
    //     echo "0 results";
    // }

?>