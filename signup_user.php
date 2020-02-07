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

    if ($rand == 1){
        $profile_pic = "img/Mapinduzi.jpeg";
    else if ($rand == 2){
        $profile_pic = "img/image1.jpeg";

    $insert = "insert into users (user_name , user_pass , user_email , user_profile , user_team , user_gender) valuse ('$name', '$pass', '$email', '$profile_pic', '$team', '$gender')";
    $query = mysqli_query ($con , $insert);

    if($query){
        echo "<script> alert ('Congratulation $name , your account has been created successfully')</script>";
        echo "<script> window.open ('signin.php' , '_self') </script>";
    }
else {
    echo "<script> alert ('Registration failed, try again') </script> ";
    echo "<script> window.open ('signup.php' , '_self') </script>";
}
    }
}





?>