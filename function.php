<?php include "db.php" ?>


<a href="index.php">go back</a>    
<br>



<?php


// CREATE
// ---------------------

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

                echo '<center><h1>Thank you for submitting the form</h1></center>';
        }else{
                echo "<center><h1>Please enter username and password</h1></center>";
        }
    };  



// UPDATE
// ---------------------





?>




