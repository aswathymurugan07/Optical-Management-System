<?php
include("CreateDb.php");

// display existing data in table
$sql = "SELECT * FROM orders";
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
  font-style:italic;
  border-collapse: collapse;
  width:1230px;
  text-align:center;
  margin-left:60px;
  margin-right:60px;
}
  
  table.center {
  margin-left:auto; 
  margin-right: auto;
}


td, th {
  border: 3px solid green;
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
h1{
  font-size:26px;
  font-family:Times New Roman;
  color:maroon;
  font-weight:bold;
  text-align:center;
}
body{
  background-image:url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSK2bUP-YBpgcEhbxZWD8lgIinTvdgClpyPDw&usqp=CAU");
    background-repeat:no-repeat;
  background-attachment: fixed;
  background-size:cover;
}
</style>  


<body>
<br><br><br><h1>ORDER DETAILS</h1><br><br><br>
	<?php

if (mysqli_num_rows($result) > 0) {
    ?>
   <table><tr><th>order_id</th><th>product_name</th><th>customer_name</th> <th>Email</th> <th>landmark</th><th>address</th> </tr>
    <?php
    $i=0;
    while($row = mysqli_fetch_assoc($result)) {
       ?>
       <tr>
        <td><?php echo $row["orderid"]; ?></td>
        <td><?php echo $row["product_name"];?></td>
        <td><?php echo $row["customer_name"]; ?></td>
        <td><?php echo $row["email"]; ?></td> 
        <td><?php echo $row["landmark"]; ?></td> 
        <td><?php echo $row["c_address"]; ?></td> 
      
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
