<?php
session_start();
include("CreateDb.php");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style.css">

</head>
<body class="bg-light">
<header id="header">
    <nav class="navbar navbar-expand-lg navbar-darrk bg-dark">
        <a href="index.php" class="navbar-brand">
         <h3 style="color:white;" class="px-5"><i></i>Shopping Cart</h3>
         </a>
         <button class="navbar-toggler"
           type="button"
           data-toggle="collapse"
           data-target="#navbarNavAltMarkup"
           aria-controls="navbarNavAltMarkup"
           aria-expanded="false"
           aria-label="Toggle navigation"
         >
        <span class="navbar-toggler-icon"></span> 
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="mr-auto"></div>
        <div class="navbar-nav">
            <a href="cart.php" class="nav-item nav-link active">
                <h5 style="color:white;margin-left:750px;" class="px-5 cart">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT0tBS73GPTm5sRcq_9NrB5EPOleQM5bbEEUtn042wk4u2Fc6GcpXr8rRyfI1JjyGNR1fE&usqp=CAU" height="30px" width="30px">  Cart
                </h5>
            </a>
        </div>
        </div>
    </nav>
</header>
<form method="post" action="order_create.php" style="margin-left:500px;margin-top:100px">
<label>Product Name:&nbsp;&nbsp;</label>
    <input type="text" name="product_name" value=""><br><br>   
   <label>Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label>
    <input type="text" name="customer_name" value=""><br><br>   
    <label>Phone:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label>
    <input type="text" name="phone" value=""><br><br>
    Address:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<textarea type="text" name="c_address" value=""></textarea>
    <br><br> 
    <label>LandMark: &nbsp;&nbsp;&nbsp; </label>
    <input type="text" name="landmark" value=""><br><br>  
    <label>Email: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label>
    <input type="text" name="email" value=""><br><br>
                              
    <div class="form-check">
    <input class="form-check-input" type="radio" name="de" id="de2" checked>
    <label class="form-check-label" for="de2">Cash On Delivery</label>
    </div><br>
    <button style="margin-left:50px;" value="submit">Place Your Order</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <button> <a href="../index.php">Back to Cart </a></button>
    <br>
    
  
</form>
</body>
</html>
