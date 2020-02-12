<?php


$con = mysqli_connect ("localhost", "root" , "", "mychat") or die ("Connection was not established");

function search_user(){

    global $con;

    if (isset($_GET['search_btn'])){
        $search_query = htmlentities ($_GET ['search_query']);
        $get_user = "select * from users where user_name like '%search_query%' or 
        user_team '%search_query%'";
    } else {
        $get_user = "SELECT * FROM USERS order by user_team, user_name DESC LIMIT 5 ";
    }

    $run_user = mysqli_query ($con , $get_user);

    while ($row_user = mysqli_fetch_array ($run_user)){
        $user_name = $row_user ['user_name'];
        $user_profile = $row_user ['user_profile'];
        $team = $row_user['user_team'];
        $gender = $row_user ['user_gender'];


        echo "
            <div class='card'>
                <img src='../$user_profile'>
                <h1> $user_name </h1>
                <p class='title'> $team </p>
                <p> $gender </p>

                <form method='post'>
                <p><button name='add'> Chat with $user_name </button></p>

                </form>

            </div><br><br>
        ";

        if (isset($_POST['add'])){
            echo "<script> window.open ('../home.php?user_name = $user_name' , '_self')</script>";
        }
    }
}

?>