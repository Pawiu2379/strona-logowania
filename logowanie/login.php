<?php

$login = $_POST['login'];
$password = $_POST['password'];

    $servername = "localhost";
    $username = "root";
    $db_password = "";
    $dbname = "usernames";
    $tablename = "usersData";
    // Create connection
    $connection = mysqli_connect($servername, $username, $db_password, $dbname);
    // Check connection
    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $sql = "SELECT email FROM $tablename WHERE email = '$login';";
    $sql1 = "SELECT password FROM $tablename WHERE password ='$password';";

    $result = mysqli_query($connection,$sql);

    if(mysqli_num_rows($result)>0){
        $result1 = mysqli_query($connection,$sql1);
        if($result1 !== NULL){
            $row = mysqli_fetch_assoc($result1);
            $db_pssword = $row['password'];
            if($password == $db_pssword){
                echo "Hasło prawidłowe";
            }else{
                echo "Podane hasło jest nie prawidłowe";
            };
        }else{
            echo "Podane hasło jest nie prawidłowe";
        };
    }else{
        echo "podany login nie istnieje w bazie danych ";
        echo "<a href='/rejestracja/signUp.html'>Zarejestruj sie</a>";
        echo "<a href='/logowanie/index.html'>Spróbuj ponownie</a>";
    };

    mysqli_close($connection);






?>