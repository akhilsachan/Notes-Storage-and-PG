<?php
    // include('connection.php');
    include('Frontend/PG_Home_Page/navbar.php');
    include('Frontend/PG_Home_Page/content_boxes.php');
    include('Frontend/PG_Home_Page/footer.php');
    include('Frontend/PG_Home_Page/login_signup_modal.php');

    // if(isset($_POST['signup_submit']) == true)
    // {
    //     $fname = $_POST['name'];
    //     $Mobile_no = $_POST['Mobile_no'];
    //     $email_id = $_POST['email_id'];
    //     $password = $_POST['password'];

    //     // $chk_exist_email = "SELECT email_id	FROM signup_table WHERE email_id = $email_id";
    //     // $data = mysqli_query($connection,$chk_exist_email);
    //     $insert_signup_data = "INSERT INTO `signup_table`(`first_name`, `Mobile_no`, `email_id`, `password`) VALUES ('$fname','$Mobile_no','$email_id','$password')";
    //     $data2 = mysqli_query($connection, $insert_signup_data);
    //     // echo $data;
    // }




?>