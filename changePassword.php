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

<<<<<<< HEAD:zmiana hasła/changePassword.php
        $result = mysqli_query($connection,$sql);

        echo "<h3>Twoje Hasło zostało zmienione</h3>";
        echo "<a href='index.html'>Zaloguj sie</a>";

    }else{
        echo "Podane hasła sie nie zgadzają";
        echo "<a href='changePassword.html'>Powrót</a>";
    }
    
    mysqli_close($connection);
=======
        mysqli_close($conn);
    }

>>>>>>> parent of 5780afb (working login, signup and chnage password):changePassword.php
?>