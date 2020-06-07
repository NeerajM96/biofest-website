<?php
include_once "database.php";

$gender = $_POST['gender'];
$name = $_POST['name'];
$contact = $_POST['contact'];
$email = $_POST['email'];
$institute = $_POST['institute'];
$city = $_POST['city'];

$sql = "INSERT INTO register (user_gender,user_name, user_contact, user_email, user_institute, user_city) VALUES ('$gender','$name', '$contact', '$email','$institute','$city');";
mysqli_query($conn, $sql);

header("Location: index.html");