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

    $userName = $_POST['user'];
    $password = $_POST['pass'];

    if($userName && $password){

        // Create connection
        $connection = new mysqli("localhost", "root", "", "php_user");

        if ($connection) {
            echo "we are connected";
        } else{
            die ("Connection failed");
        }

    }

};  

?>
<br>
    <a href="index.php">now, go back</a>


</body>
</html>