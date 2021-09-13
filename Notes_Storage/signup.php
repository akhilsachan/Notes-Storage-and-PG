<?php
    $name = $_POST['name'];
    $email_id = $_POST['email_id'];
    $password = $_POST['password'];
    
    $sql0 = "SELECT email_id FROM `signup_table` WHERE email_id = '$email_id'";
    $abc = $connection -> query($sql0);
    print_r($abc -> num_rows);
    if($abc->num_rows > 0)
    {
        echo "email exists";
    }
    else{
        $sql = "INSERT INTO `signup_table`(`name`, `email_id`, `password`) VALUES ('$name','$email_id',DES_ENCRYPT('$password','mydespassw'))";

        if($connection -> query($sql) == true)
        {
         // header("Location: pg_home_page.html");
        }
        else{
        echo "not inserted";
        }
    }
?>

