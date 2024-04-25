<?php
include("CreateDb.php");
// get the form data

$customer_name = $_POST['customer_name'];
$c_mail = $_POST['c_mail'];
$c_address = $_POST['c_address'];
$c_phoneno = $_POST['c_phoneno'];
$c_password = $_POST['c_password'];


// insert data into table
$sql = "INSERT INTO customer (customer_name,c_mail,c_address,c_phoneno,c_password) VALUES ('$customer_name', '$c_mail','$c_address','$c_phoneno','$c_password')";

if (mysqli_query($con, $sql)) {
    header("location: ./customer_login1.php");
   
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}



?>