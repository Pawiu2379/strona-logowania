<?php 
    $name = $_POST['name'];
    $secondName = $_POST['secondName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $news = $_POST['news'];
    $company = $_POST['company'];
    $street = $_POST['street'];
    $postCode = $_POST['postCode'];
    $city = $_POST['city'];
    $country = $_POST['country'];
    $number = $_POST['phone'];
    $news = boolval($news);

    
    echo "$name $secondName $email $password $news $company $street $postCode $city $country $number"; 
    //mysql connestion
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "usernames";
    $tablename = "usersData";
    // Create connection
    $connection = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql =" INSERT INTO usersData(`name`, `secondName`,`email`,`password`,`news`,`company`,`street`,`postCode`,`city`,`country`,`number`)
            VALUES ('$name', '$secondName','$email','$password',$news,'$company','$street',$postCode,'$city','$country',$number)";
    if (mysqli_query($connection, $sql)) {
        echo "<script>console.log('New record created successfully')</script>";
    } else {
        echo "<script>console.log('Error: " . $sql . "<br>" . mysqli_error($conn) + "')<script>";
    }

    mysqli_close($connection);
?>




