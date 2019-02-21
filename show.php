<?php include "db.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Res</title>
</head>
<body>
    <h1>Thank you for submitting the form</h1>


<?php

    if(isset($_POST['submit'])){

        $user = $_POST['user'];
        $pass = $_POST['pass'];

        if($user && $pass){

                $query = "INSERT INTO user_app (username, password) 
                        VALUES ('$user', '$pass')";

                $result = mysqli_query($connection, $query);

                if(!$result){
                    die ("Connection failed databse");
                }
        }
    };  

?>

<br>
    <a href="index.php">now, go back</a>


</body>
</html>