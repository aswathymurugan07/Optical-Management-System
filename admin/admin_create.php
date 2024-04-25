<?php
include("CreateDb.php");
// get the form data

$admin_name = $_POST['admin_name'];
$Admin_password = $_POST['Admin_password'];

// insert data into table
$sql = "INSERT INTO admin (admin_name,Admin_password) VALUES ( '$admin_name', '$Admin_password')";

if (mysqli_query($con, $sql)) {
    header("location: ./admin_display.html");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}

?>