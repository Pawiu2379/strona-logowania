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
    $newPassword = $_POST['newPassword'];
    $submitPassword = $_POST['submitPassword'];

    $servername = "localhost";
    $username = "root";
    $db_password = "";
    $dbname = "usernames";
    $tablename = "usersData";
    $connection = mysqli_connect($servername, $username, $db_password, $dbname);
    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }

    if($newPassword===$submitPassword){

        $sql = "UPDATE $tablename SET password='$newPassword' WHERE email='$login';";

        $result = mysqli_query($connection,$sql);

        echo "<h3>Twoje Hasło zostało zmienione</h3>";
        echo "<a href='index.html'>Zaloguj sie</a>";

    }else{
        echo "Podane hasła sie nie zgadzają";
        echo "<a href='changePassword.html'>Powrót</a>";
    }
    
    mysqli_close($connection);
?>
</body>
</html>