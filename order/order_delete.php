<?php
include("CreateDb.php");
$sql = "DELETE FROM orders WHERE orderid='" . $_GET["id"] . "'";
if (mysqli_query($con, $sql)) {
    header("location: ./order_show.php");
} else {
    echo "Error deleting record: " . mysqli_error($con);
}
mysqli_close($con);
?>