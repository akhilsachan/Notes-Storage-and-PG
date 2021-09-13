<?php
    session_start();
    if(!isset($_SESSION['user_id']))
    {
        header('Location: https://localhost/Notes_Storage/pg_page.php');
    }
    include('Frontend/Storage_Vault/sidebar_headbar.php');
    include('Frontend/Storage_Vault/cards_area.php');
    include('Frontend/Storage_Vault/sidebar_modals.php');
    include('Frontend/Storage_Vault/logout_modal.php');
    // $userProfile = $_SESSION['username'];
    // $data = mysqli_query($connection, "SELECT * FROM signup_table WHERE email_id = '$userProfile'");
    // $total = mysqli_num_rows($data);


    

?>