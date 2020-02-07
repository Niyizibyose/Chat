<?php

include ("include/connection.php");

if (isset($_POST['sign_up'])){
    $name = htmlentities(mysqli_real_escape_string ($con , $_POST ['user_name']));
    $pass = htmlentities(mysqli_real_escape_string ($con , $_POST ['user_pass']));
    $email = htmlentities(mysqli_real_escape_string ($con , $_POST ['user_email']));
    $team = htmlentities(mysqli_real_escape_string ($con , $_POST ['user_team']));
    $gender = htmlentities(mysqli_real_escape_string ($con , $_POST ['user_gender']));
    $rand = rand(1,2);

    if ($name == ''){
        echo "<script> alert ('We cannot verify your name') </script>";

    }

    if (strlen ($pass) < 8){
        echo "<script> alert ('Password should be minimum of 8 characters') </script>";
        exit();
    }

    $check_email = "select * from user where user_email='$email'";
    $run_email = mysqli_query ($con , $check_email);

    $check = mysqli_num_rows ($run_email);

    if ($check==1){
        echo "<script> alert ('Email already exist, please try again') </script>";
        echo "<script> window.open ('signup.php' , '_self' ) </script>";
        exit();
    }
}




?>