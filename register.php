<?php
    require('config.php');
    // If the values are posted, insert them into the database.
    if (isset($_POST['username']) && isset($_POST['psw']) && isset($_POST['email'])){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = md5($_POST['password']);
 
        $query = "INSERT INTO `users` (username, password, email) VALUES ('$username', '$password', '$email')";
        $result = mysqli_query($connection, $query);
        if($result){
            $smsg = "User Created Successfully.";
            echo $msg;
            die();
        }else{
            $fmsg ="User Registration Failed";
        }

        
        die();
    }
?>