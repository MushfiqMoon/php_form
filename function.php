<?php include "db.php" ?>


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


function showUpdateData(){

    global $connection;

    $query = "SELECT * FROM user_app";
    $result = mysqli_query($connection, $query);
    
    while($row = mysqli_fetch_assoc($result)){

        $id = $row[id];

        echo "<option value='$id'>$id</option>";
    }

}


    if(isset($_POST['update'])){

        $user = $_POST['user'];
        $pass = $_POST['pass'];
        $id = $_POST['id'];

     

        $query = "UPDATE user_app 
                    SET username = '$user' , password = '$pass' 
                    WHERE id = $id ";

        $result = mysqli_query($connection, $query);

        if(!$result){
            die ("Connection failed databse" . mysqli_error($connection));
        }

       
    }; 


?>




