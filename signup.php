<!DOCTYPE html>
<html>
    <head>
    <title> Create Account </title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport content=width=device-width , initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family = Roboto|Courgette|Pacifico:400,700" rel="stylesheet">
     <!--<link rel="stylesheet" href="https://maxcdn.boostrapcdn.com/boostrap/3.3.7/css/boostrap.min.css"> -->
    <link rel="stylesheet" href="css/signup.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
       <!-- <script src="https://maxcdn.boostrapcdn.com/boostrap/3.3.7/js/boostrap.min.js"></script> -->
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
       <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    </head>

    <body>

<div class="signup-form">
    <form action="" method="POST">
        <div class="form-header">
            <h2>Sign Up</h2>
            <p> Fill the form</p>
        </div>
        <div class="form-group">
            <label>Username</label>
            <input type="text" class="form-control" name="user_name" placeholder="Example:John" autocomplete="off" required>

        </div>

        <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" name="user_pass" placeholder="Password" autocomplete="off" required>

        </div>

        <div class="form-group">
            <label>Email address</label>
            <input type="email" class="form-control" name="user_email" placeholder="jean21101999@gmail.com" autocomplete="off" required>

        </div>

        <div class="form-group" name="user-team">
            <label name="user-team">Team</label>
            <select class="form_control" name="user-team" required>
                <option disabled="" name="user-team">Select a team </option>
                <option name="user-team"> Rayon Sport</option>
                <option name="user-team">Kiyovu FC</option>
                <option name="user-team"> Mukura VS</option>
                <option name="user-team"> APR FC</option>
                <option name="user-team"> Gasogi FC</option>
            </select>
        </div>

        <div class="form-group"  name="user-gender">
            <label  name="user-gender">Team</label>
            <select class="form_control" name="user-gender" required>
                <option disabled=""  name="user-gender">Select you gender </option>
                <option  name="user-gender"> Male</option>
                <option  name="user-gender">Female</option>
                <option  name="user-gender"> Others</option>
             
            </select>
        </div>

        <div class="form-group">
            <label class="checkbox-inline"><input type="checkbox" required> I accept the <a href="#"> Terms of Use</a> &amp; <a href="#"> Privacy Policy</a></label>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block btn-lg" name="sign_up">Sign up</button> 
        </div>


        <?php include("signup_user.php"); ?>

       
    </form>
</div>
<div class="text-center small" style="color: #674288;">Have an account? <a href="signin.php"> Sign In</a></div>

    </body>


</html>