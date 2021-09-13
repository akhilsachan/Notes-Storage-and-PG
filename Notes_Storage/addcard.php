<?php
include('connection.php');

session_start();
// echo $_SESSION['user_id'];



if(isset($_POST['add_card']))
{
    $card_heading = $_POST['card_heading'];
    $card_category = $_POST['card_category'];
    $card_username = $_POST['card_username'];
    $card_pass = $_POST['card_password'];
    $card_data = mysqli_query($connection, "INSERT INTO `user_data_table` (`name`, `username`, `password`, `category`, `user_id`) VALUES ('$card_heading','$card_username','$card_pass','$card_category', $_SESSION[user_id])");
    if($card_data == true)
    {
        header("Location: https://localhost/Notes_Storage/vault.php");
    }

}

if(isset($_POST['update_card']))
{
    $card_heading = $_POST['card_heading'];
    $card_category = $_POST['card_category'];
    $card_username = $_POST['card_username'];
    $card_pass = $_POST['card_password'];
    $card_id = $_POST['card_id'];
    $card_data = mysqli_query($connection, " UPDATE `user_data_table` SET `name` = '$card_heading', `username` = '$card_username' , `password` = '$card_pass', `category` = '$card_category'   WHERE `id` = '$card_id' ");
    if($card_data == true)
    {
        header("Location: https://localhost/Notes_Storage/vault.php?updated=$card_id");
    }

}

if(isset($_POST['delete_cards']))
{
    $card_id = $_POST['card_id'];
    $card_data = mysqli_query($connection, "DELETE FROM `user_data_table` WHERE `user_data_table`.`id` = '$card_id'");
    if($card_data == true)
    {
        header("Location: https://localhost/Notes_Storage/vault.php");
    }

}

if(isset($_POST['delete-account']))
{
    $user_acc = $_SESSION['user_id'];
    $user_data = mysqli_query($connection, "DELETE FROM `signup_table` WHERE `id` = '$user_acc'");
    if($user_data == true)
    {
        header("Location: https://localhost/Notes_Storage/pg_page.php?code=signup");
    }
}

?>

