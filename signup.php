<!DOCTYPE html>
<html>
    <head>
    <title> Create Account </title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport content="width=device-width" , initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family = Roboto|Courgette|Pacifico:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.boostrapcdn.com/boostrap/3.3.7/css/boostrap.min.css">
    <link rel="stylesheet" href="css/signup.csss" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.miin.js"></script>
    <script src="https://maxcdn.boostrapcdn.com/boostrap/3.3.7/js/boostrap.min.js"></script>
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

        <div class="form-group">
            <label>Team</label>
            <select class="form_control" name="user-team" required>
                <option disabled="">Select a team </option>
                <option> Rayon Sport</option>
                <option>Kiyovu FC</option>
                <option> Mukura VS</option>
                <option> APR FC</option>
                <option> Gasogi FC</option>
            </select>
        </div>

        <div class="form-group">
            <label>Team</label>
            <select class="form_control" name="user-gender" required>
                <option disabled="">Select you gender </option>
                <option> Male</option>
                <option>Female</option>
                <option> Others</option>
             
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