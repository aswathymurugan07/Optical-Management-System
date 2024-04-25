<?php
include("CreateDb.php");


$sql = "DELETE FROM producttb WHERE id='" . $_GET["id"] . "'";



if (mysqli_query($con, $sql)) {
    echo "Record deleted successfully";
    header("location:product_show.php");
} else {
    echo "Error deleting record: " . mysqli_error($con);
    
}
mysqli_close($con);
?>