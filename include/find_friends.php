<!DOCTYPE html>
<?php
session_start();
include ("include/connection.php");

if(isset($_SESSION ['user_email'])){
    header ("location: signin.php");
}else {

?>
<html>
    <head>
    <title> Search for Friends</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport content="width="device-width" , initial-scale="1">
    <link href="https://fonts.googleapis.com/css?family = Roboto|Courgette|Pacifico:400,700" rel="stylesheet">
  <!--<link rel="stylesheet" href="https://maxcdn.boostrapcdn.com/boostrap/3.3.7/css/boostrap.min.css"> -->
    <link rel="stylesheet" href="css/signin.css" >
    <link rel="stylesheet" href="css/home.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   <!--   <script src="https://maxcdn.boostrapcdn.com/boostrap/3.3.7/js/boostrap.min.js"></script> -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.boostrap.com/font-awesome/4.7.0/css/font-awesome.min.css"
    </head>

<body>
    <nav class="navbar-brand" href="#">
        <a class="navbar-brand" href="#">
            <?php
            $user = $_SESSION ['user_email'];
            $get_user = "select * from users where user_email = '$user'";
            $run_user = mysqli_query ($con , $get_user);
            $row = mysqli_fetch_array ($run_user);

            $user_name = $row ['user_name'];
            echo "<a href='../home.php' ";



            ?>
        </a>
    </nav>

</body>
</html>

<?php } ?>
