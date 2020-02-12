<!DOCTYPE html>
<?php
session_start();
include ("include/connection.php");
include ("include/header.php");

if(isset($_SESSION ['user_email'])){
    header ("location: signin.php");
}else {

?>
<html>
    <head>
    <title> Account Settings</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport content="width="device-width" , initial-scale="1">
    <link href="https://fonts.googleapis.com/css?family = Roboto|Courgette|Pacifico:400,700" rel="stylesheet">
  <!--<link rel="stylesheet" href="https://maxcdn.boostrapcdn.com/boostrap/3.3.7/css/boostrap.min.css"> -->
    <link rel="stylesheet" href="css/signin.css" >
    <link rel="stylesheet" href="../css/find_people.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   <!--   <script src="https://maxcdn.boostrapcdn.com/boostrap/3.3.7/js/boostrap.min.js"></script> -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudfare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.boostrap.com/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    

<body>
    <div class="row">
        <div class="col-sm-2">
</div>

<?php
    $user = $_SESSION ['user-email'];
    $get_user = "select * from user where user_email= '$user'";
    $run_user = mysqli_query ($con , $get_user);
    $row = mysqli_fetch_array ($run_user);

    $user_name = $row ['user_name'];
    $user_pass = $row ['user_pass'];
    $user_email = $row ['user_email'];
    $user_profile = $row['user_profile'];
    $user_team = $row ['user_team'];
    $user_gender = $row ['user_gender']; 
?>

<div  class="col-sm-8">
    <form action="" method="post" enctype="multipart/form-data">
        <table class="table table-bordered table-hover">
            <tr align="center">
                <td colspan="6" class="active"><h2> Change Account Settings </h2></td>
</tr>
<tr>
    <td style="font-weight: bold;"> Change your username </td>
    <td>
        <input type="text" name="u_name" class="form-control" required value="
        <?php  echo $user_name; ?>" />
</td>
</tr>
<tr><td></td><td><a class="btn btn-default" style:"text-decoration: none; font-size:15px; " href="upload.php">
    <i class="fa fa-user" aria-hidden="true"></i> Change Profile </a></td></tr>
</table>
    </form>

</div>


</body>


</html>

<?php } ?>