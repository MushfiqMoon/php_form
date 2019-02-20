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

    $minimum = 3;
    $maximum = 10;

    // echo "wow";
    $userName = $_POST['user'];

    $userlingth = strlen($userName);
    $password = $_POST['pass'];

    // echo "your user name is ".$userName;
    // echo "<br>" ;
    // echo "your password is ".$password;

    if(($userlingth>$minimum) && ($userlingth<$maximum)){
        echo "your user name is ".$userName;
        echo "<br>" ;
        echo "your password is ".$password; 
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo $userlingth;  
    }else{      
        echo "user name will be in 4 to 10 charecter";
        echo "<br>";
        echo $userlingth;
    }

};  

?>
<br>
    <a href="index.php">now, go back</a>


</body>
</html>