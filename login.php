<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pawel Koc</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
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
                echo "<h2>Hasło prawidłowe</h2>";
            }else{
                echo "<h2>Podane hasło jest nie prawidłowe</h2>";
            };
        }else{
            echo "<h2>Podane hasło jest nie prawidłowe</h2>";
        };
    }else{
        echo "<h2>podany login nie istnieje w bazie danych </h2>";
        echo "<a href='signUp.html'>Zarejestruj sie</a>";
        echo "<a href='index.html'>Spróbuj ponownie</a>";
    };

    mysqli_close($connection);






?>
</body>
</html>