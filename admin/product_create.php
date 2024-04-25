<?php
$connect = mysqli_connect("localhost", "root", "", "productdb");
if (isset($_POST["insert"])) {
  $product_name = $_REQUEST['product_name'];
  $product_price = $_REQUEST['product_price'];
  

  $file = addslashes(file_get_contents($_FILES["product_image"]["tmp_name"]));
  $query = "INSERT INTO producttb VALUES (0,'$product_name','$product_price','$file')";
  if (mysqli_query($connect, $query)) {
    echo '<script>alert("Image Inserted into Database")</script>';
    header("location:product_show.php");
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css\styles1.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link href="img\admin.png" rel="icon">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

  <title>Product add form</title>
  <style>
    form{

    }
    .b1{
              background-color:Red;
              font-size:20px;
              color:black;
              font-family: cursive;
              font-weight:bold;
              margin-left:100px;

          }
    </style>
</head>

<body>
<div style="margin-left: 470px;top:6pc;position: absolute;">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTQQwga2W8GltPOsmdqxOTz2hZeMSKfQ0Z6VKRUngXq4mfxGednKNbN67abXjDAJWo1lqI&usqp=CAU" 
            width="500px"height="500px" alt="profile">
        </div><br> 
        <div style="top: 9pc;margin-left: 550px;position: absolute;">
          <h1 style="color: rgb(79, 4, 44);font-size: 25px;font-family: cursive;margin-left: 60px;">ADD PRODUCTS!!!</h1><br>
          
      

      <!-- Form Start -->

      <form method="post" enctype="multipart/form-data">
        
          
          <br><br><input type="text" name="product_name" class="txtField form-control" placeholder="Product Name"id="product_name"><br>
        
        
         
          <input type="number" name="product_price" class="txtField form-control" placeholder="Product Price" id="product_price"><br>
        
        
       
          
          <input type="file" name="product_image" class="txtField form-control" placeholder="Product Image" id="product_image" /><br>
        
        <button type="submit" name="insert" id="insert" class="btn btn-color px-3 mb-5   b1" value="Insert">Insert</button>
      </form>
    
</div>
</body>
</html>
<script>
  $(document).ready(function () {
    $('#insert').click(function () {
      var image_name = $('#product_image').val();
      if (image_name == '') {
        alert("Please Select Image");
        return false;
      }
      else {
        var extension = $('#product_image').val().split('.').pop().toLowerCase();
        if (jQuery.inArray(extension, ['gif', 'png', 'jpg', 'jpeg']) == -1) {
          alert('Invalid Image File');
          $('#product_image').val('');
          return false;
        }
      }
    });
  });  
</script>