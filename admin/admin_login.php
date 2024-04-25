<?php
include("CreateDb.php");
$admin_name = $_POST['a_username'];
$Admin_password = $_POST['a_password'];
$sql = "SELECT * FROM admin WHERE admin_name= '$admin_name' AND Admin_password='$Admin_password'";
$result = mysqli_query($con, $sql);
$resultcheck = mysqli_num_rows($result);
session_start();
if ($resultcheck > 0) {
    echo "login success";
    while($row = mysqli_fetch_assoc($result)){
        echo $row['adminid'];
        $_SESSION["adminid"] = $row['adminid'];
    }
   
    echo "<br>";
    $_SESSION["a_username"] = $_POST['a_username'];
    echo $_SESSION["a_username"];
    echo "<br>";
    echo $_SESSION["adminid"];
} else {
    
    echo "<br>";
    echo "invalid";
    session_destroy();
    
   
    echo "<br>";
}



//1. Get username and passworf as POST method
//2.  get the user record in database




?>