<?php
include('connection.php');

if(isset($_POST['signup_submit']) && $_POST['signup_submit'] == 'Signup')
    {
        $fname = $_POST['name'];
        $Mobile_no = $_POST['Mobile_no'];
        $email_id = $_POST['email'];
        $password = $_POST['password'];

        // $chk_exist_email = "SELECT email_id	FROM signup_table WHERE email_id = $email_id";
        // $data = mysqli_query($connection,$chk_exist_email);
        $insert_signup_data = "INSERT INTO `signup_table`(`first_name`, `Mobile_no`, `email_id`, `password`) VALUES ('$fname','$Mobile_no','$email_id', md5('$password'))";
        $data2 = mysqli_query($connection, $insert_signup_data);

        if($data2 == true){
            header( "Location: https://localhost/Notes_Storage/pg_page.php?code=1" );
         }
        else{
        header( "Location: https://localhost/Notes_Storage/pg_page.php?code=0" );
        }
        // echo $data;
    } 
?>



