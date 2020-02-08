<!DOCTYPE html>
<html>
    <head>
    <title> My Chat </title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport content="width="device-width" , initial-scale="1">
    <link href="https://fonts.googleapis.com/css?family = Roboto|Courgette|Pacifico:400,700" rel="stylesheet">
  <!--<link rel="stylesheet" href="https://maxcdn.boostrapcdn.com/boostrap/3.3.7/css/boostrap.min.css"> -->
    <link rel="stylesheet" href="css/signin.csss" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.miin.js"></script>
   <!--   <script src="https://maxcdn.boostrapcdn.com/boostrap/3.3.7/js/boostrap.min.js"></script> -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    </head>

<body>
    <div class="container main-section">
        <div class="row">
            <div class="col-md-3 col-sm-3 col-xs-12 left-sidebar">
                <div class="input-group-btn">
                    <div class="input-group-btn">
                        <center><a href="include/find_friends.php"><button class="btn btn-default
                    search-icon" name="search_user" type="submit"> Add new user </button></a></center>
</div>
</div>

<div class="left-chat">
    <ul>
        <?php include ("include/get_users_data.php"); ?>
    </ul>


</div>
</div>

<div class="col-md-9 col-sm-9 col-xs-12 right-sidebar">
    <div class="row">
        <?php 
            $user = $_SESSION ['user-email'];
            $get_user = "select * from users where user_email = '$user'";
            $run_user = mysqli_query ($con , $get_user);
            $row = mysqli_fetch_array ($run_user);

            $user_id = $row ['user_id'];
            $user_name = $row ['user_name'];
        ?>

        <?php

            if (isset ($_GET['user_name'])){
                global $con;
                $get_username = $_GET ['user_name'];
                $get_user = "select * from users where user_name = '$get_username'";
                $run_user = mysqli_quer ($con , $get_user);

                $row_user = mysqli_fetch_array ($run_user);
                $username = $row_user ['user_name'];
                $user_profile_image = $row_user['user_profile'];
            }

            $total_messages = "select * from users_chats where (sender_username = '$user_name'
             AND receiver_username = '$username') OR (receiver_username = '$user_name' AND 
             sender_username = '$username')";

             $run_messages = mysqli_query ($con , $total_messages);
             $total = mysqli_num_rows ($run_messages);
        ?>

        <div class="col-md-12 right-header">
            <div class="right-header-img">
                <img src=" <?php echo"$user_profile_image"; ?>">
            </div>

            <div class="right-header-detail">
                <form method="post">
                    <p></p>
                </form>

            </div>
        </div>
    </div>

</div>
</div>
</div>

</body>
</html>