<?php
include('connection.php');

session_start();
session_unset();
header("Location: https://localhost/Notes_Storage/pg_page.php?code=1");

?>