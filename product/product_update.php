
<?php  
include("CreateDb.php");
 $connect = mysqli_connect("localhost", "root", "", "productdb");  
 if(isset($_POST["insert"]))  
 {   
    
     $product_name =  $_POST['product_name'];
     $product_price= $_POST['product_price'];
    
     
     $file = addslashes(file_get_contents($_FILES["product_image"]["tmp_name"]));  
    
     mysqli_query($con,"UPDATE producttb set id='" . $_POST['id'] . "', product_name='" . $_POST['product_name'] . "', product_price='" . $_POST['product_price'] . "',file='".addslashes(file_get_contents($_FILES["product_image"]["tmp_name"]))."' WHERE id='" . $_POST['id'] . "'"); 
     if(mysqli_query($connect, $query))  
     {  
          echo '<script>alert("Image Inserted into Database")</script>';  
          $message = "Record Modified Successfully";
     } 
    
     $result = mysqli_query($con, "SELECT * FROM producttb where id='" . $_GET['id'] . "'");
     $row = mysqli_fetch_array($result); 
    }
 ?>

<html>
<head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
      </head>
<body>
<style>
          .b1{
              background-color:powderblue;
              font-size:20px;
              color:black;
              font-family: cursive;
              font-weight:bold
          }
        </style>
<form name="frmUser" method="post" action="">
<div style="margin-left: 500px;top:6pc;position: absolute;">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTwmKXf6LVlEqDG2_M2Bgzt3Gvi2XMeMwiyctI_toR02kIkqMTL1UsyJPg7w_FcuQiI-1o&usqp=CAU" 
            width="500px"height="530px" alt="profile">
        </div><br> 
        <div style="top: 9pc;margin-left: 600px;position: absolute;">
          <h1 style="color: rgb(79, 4, 44);font-size: 25px;font-family: cursive;margin-left: 40px;">PLACE YOUR ORDER!!!</h1><br>

<div><?php if(isset($message)) { echo $message; } ?></div>

 <input type="text" name="id" class="txtField" value="<?php echo $row['id']; ?>">

 <div class="mb-3">
<input type="text" name="product_name" class="txtField form-control"placeholder="Product Name" value="<?php echo $row['product_name']; ?>"></div>
<div class="mb-3">
<input type="text" name="product_price" class="txtField form-control" placeholder="Product Price"value="<?php echo $row['product_price']; ?>"></div>
<div class="mb-3">
<input type="file" name="product_image" class="txtField form-control"placeholder="quantity" value=""></div>
<input  class="btn btn-color px-3 mb-5 w-100 button b1"type="submit" name="submit" value="Submit" >
<button class="btn btn-color px-3 mb-5 w-100 button b1"><a href="product_show.php">back to display page</a>
        </button>
</form>
</body>
</html>