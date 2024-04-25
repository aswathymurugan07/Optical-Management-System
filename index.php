<?php

//start session
session_start();
require_once('php/CreateDb.php');
require_once('./php/component.php');


//create instance of createdb class
$database=new CreateDb(dbname:"Productdb",tablename:"Producttb");

if(isset($_POST['add'])){
   /// print_r($_POST['product_id']);
   if(isset($_SESSION['cart'])){

    $item_array_id=array_column($_SESSION['cart'],"product_id");
  

    if(in_array($_POST['product_id'],$item_array_id)){
      echo "<script>alert('Product already added to cart')</script>";
      echo "<script>window.location='index.php'</script>";
    }else{
      $count=count($_SESSION['cart']);
      $item_array=array(
      'product_id'=>$_POST['product_id']
      );
      $_SESSION['cart'][$count]=$item_array;
      
    
    }
    
   }else{
    $item_array=array(
      'product_id'=>$_POST['product_id']
    );

    //create new session variable
    $_SESSION['cart'][0]=$item_array;
    print_r($_SESSION['cart']);
   }
}
?>
<html>
<head>
<title>cart</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous"> 
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
 <link rel="stylesheet" href="style.css">
 </head>
<body>


<?php require_once("php/header.php") ?>
<div class="container">
  <div class="row text-center py-5">
    <?php
      $result=$database->getData();
      while($row=mysqli_fetch_assoc($result)){
        component($row['product_name'],$row['product_price'],$row['product_image'],$row['id']);
      }
      ?>
  </div>
</div>
</body>
</html>