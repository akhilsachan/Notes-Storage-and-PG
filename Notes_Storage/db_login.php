<?php
include('connection.php');
include('db_dataForms.php');
session_start();

if(isset($_POST['login_submit']) && $_POST['login_submit'] == 'Sign In') {
    $userlog = $_POST['username'];
    $passlog = $_POST['passwordlog'];
    $encrypt_pass_checker = md5($passlog);
    $data = mysqli_query($connection, "SELECT * FROM signup_table WHERE email_id = '$userlog' && password = '$encrypt_pass_checker'");
    $total = mysqli_num_rows($data);
    $data2 = mysqli_fetch_assoc($data);
    $curr_user = $data2['id'];
    $_SESSION['user_id'] = $curr_user;
    if($total==1)
    {
        // echo $curr_user;  die;
        header("Location: http://localhost/Notes_Storage/vault.php?token=$curr_user");
    }
    else{
        header("Location: https://localhost/Notes_Storage/pg_page.php?code=3");
    }
	
}
?>