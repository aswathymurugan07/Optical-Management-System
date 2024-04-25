<?php
include("CreateDb.php");
$sql = "DELETE FROM appointment1 WHERE appointid='" . $_GET["id"] . "'";
if (mysqli_query($con, $sql)) {
    header("location: ./appointment_show.php");
} else {
    echo "Error deleting record: " . mysqli_error($con);
}
mysqli_close($con);
?>