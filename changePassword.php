<?php 
    $login = $_POST['login'];
    $newPassword = $_POST['newPassword'];
    $submitPassword = $_POST['submitPassword'];

    if($newPassword===$submitPassword){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "usernames";
        $tablename = "usersData";
        // Create connection
        $connection = mysqli_connect($servername, $username, $password, $dbname);
        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $sql = 

        mysqli_close($conn);
    }

?>