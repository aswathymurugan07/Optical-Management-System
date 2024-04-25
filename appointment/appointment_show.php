<?php
include("CreateDb.php");

// display existing data in table
$sql = "SELECT * FROM appointment1";
$result = mysqli_query($con, $sql);
?>
<!DOCTYPE html>
<html>
<head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
      </head>
   <style>
table {
  font-family:cursive;
  border-collapse: collapse;
  width: 100%;
  text-align:center;
}
  
  table.center {
  margin-left:auto; 
  margin-right: auto;
}


td, th {
  border: 5px solid powderblue;
  text-align: center;
  padding: 8px;
}

.b1{
        background-color:powderblue;
        font-size:15px;
        color:black;
        font-family: cursive;
        margin-left:500px;
        top:16pc;
        position: relative;
      }
.b2
{
    background-color: powderblue;
        font-size:15px;
        color:black;
        font-family: cursive;
        margin-left:50px;
        top:16pc;
        position: absolute;
}
</style>  


<body>
	<?php

if (mysqli_num_rows($result) > 0) {
    ?>
   <table><tr><th>appointment_id</th><th>customer_name</th><th>appointment_date</th> <th>appointment_time</th> <th>mail</th><th>phone no</th> </tr>
    <?php
    $i=0;
    while($row = mysqli_fetch_assoc($result)) {
       ?>
       <tr>
        <td><?php echo $row["appointid"]; ?></td>
        <td><?php echo $row["customer_name"]; ?></td>
        <td><?php echo $row["appoint_date"]; ?></td> 
        <td><?php echo $row["appoint_time"]; ?></td> 
        <td><?php echo $row["c_mail"]; ?></td> 
        <td><?php echo $row["c_phoneno"]; ?></td> 
       
       
        <td><a href="appointment_update.php?id=<?php echo $row["appointid"]; ?>">Update</a></td> 
        <td><a href="appointment_delete.php?id=<?php echo $row["appointid"]; ?>">Delete</a></td> 
       
        
        </tr><?php
    $i++;
    }
    echo "</table>";
} else {
    echo "0 results";
}

// close database connection
mysqli_close($con);


?>
