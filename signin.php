<!DOCTYPE html>
<html>
    <head>
    <title> Login</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport content="width=device-width" , initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family = Roboto|Courgette|Pacifico:400,700" rel="stylesheet">
     <!--<link rel="stylesheet" href="https://maxcdn.boostrapcdn.com/boostrap/3.3.7/css/boostrap.min.css"> -->
    <link rel="stylesheet" href="css/signin.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
       <!-- <script src="https://maxcdn.boostrapcdn.com/boostrap/3.3.7/js/boostrap.min.js"></script> -->
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
       <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    </head>

    <body>

<div class="signin-form">
    <form action="" method="POST">
        <div class="form-header">
            <h2>Sign In</h2>
            <p> Log in to my chat</p>
        </div>

        <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" name="email" placeholder="jean21101999@gmail.com" autocomplete="off" required>

        </div>

        <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" name="pass" placeholder="Password" autocomplete="off" required>

        </div>

        <div class="small"> Forgot passowrd? <a href="forgot_pass.php"> Click here </a></div><br>

        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block btn-lg" name="sign_in">Sign in</button> 
        </div>

        <?php include("signin_user.php"); ?>

       
    </form>
</div>
<div class="text-center small" style="color: #674288;">Don't have an account? <a href="signup.php"> Create one  </a></div>

    </body>


</html>