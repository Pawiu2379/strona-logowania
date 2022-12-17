<?php
    $news = null;
    $name = $_POST['name'];
    $secondName = $_POST['secondName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $company = $_POST['company'];
    $street = $_POST['street'];
    $postCode = $_POST['postCode'];
    $city = $_POST['city'];
    $country = $_POST['country'];
    $number = $_POST['phone'];
    $news = boolval($news);
    if($_POST['news'] = null){
    $news = 0;
    } else {
     $news = $_POST['news'];
    }
    
    // echo "$name $secondName $email $password $news $company $street $postCode $city $country $number"; 
    //mysql connestion
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

    $sql = "INSERT INTO $tablename(`name`, `secondName`,`email`,`password`,`news`,`company`,`street`,`postCode`,`city`,`country`,`number`)
     VALUES ('$name','$secondName','$email','$password','$news','$company','$street','$postCode','$city','$country','$number');";


   if (mysqli_query($connection, $sql)) {
        echo "<h3>Pomyślnie Cie Zarejestrowano </h3>";
        echo "<a href='index.html'>Do strony logowania</a>";
        echo "<script>console.log('New record created successfully')</script>";
    } else {
        echo "<script>console.log('Error: " . $sql . "<br>" . mysqli_error($conn) + "')<script>";
    }

    mysqli_close($connection);
?>




