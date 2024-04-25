<?php
include("CreateDb.php");
// get the form data


$product_name=$_POST['product_name'];
$customer_name = $_POST['customer_name'];
$phone=$_POST['phone'];
$email = $_POST['email'];
$landmark=$_POST['landmark'];
$c_address = $_POST['c_address'];



// insert data into table
$sql = "INSERT INTO orders (product_name,customer_name,phone,email,landmark,c_address) VALUES ('$product_name','$customer_name','$phone','$email','$landmark','$c_address')";

if (mysqli_query($con, $sql)) {
  echo "<script>alert('Your order has been placed...!')</script>";
  
  $sql1="SELECT product_name,orderid,customer_name,email,landmark,c_address FROM orders where customer_name='customer_name'";

  
 if(mysqli_query($con,$sql1))
  {
    ?>
    <html>
      <head>
        <style>

          h3{
            font-size:26px;
            color:green;
            font-style:Times New Roman;
            font-weight:bold;
          }
          .img1{
            float:left;
            margin-left:70px;
            margin-top:20px;
          }
          h4{
            font-size:24px;
            font-style:italic;
            font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;;
            
          }
          </style>

      </head>
      <body>
      <div style="margin-left: 300px;top:6pc;position: absolute;margin-right:300px;">
      <img src="https://img.freepik.com/free-photo/black-friday-elements-assortment_23-2149074076.jpg?w=360"  width="800px"height="500px" alt="profile">
      </div><br> 
      <div style="top: 9pc;margin-left: 370px;position: absolute;">
      <img class="img1" src="https://t3.ftcdn.net/jpg/01/69/76/08/360_F_169760894_BIrY4b8bjvWD74PsZu5a61RCqzWmaZib.jpg" height="30px" width="30px">
      <h1 style="color: rgb(79, 4, 44);font-size: 28px;font-family: cursive;margin-left: 110px;">Your Order has been placed!!!</h1><br>
      <h3>Order Details : </h3>
      <h4>Product Name: <?php echo $product_name ?></h4>
      <h4>Name : <?php echo $customer_name ?></h4>
      <h4>Email : <?php echo $email ?></h4>
      <h4>Landmark : <?php echo $landmark ?></h4>  
      <h4>Address : <?php echo $c_address ?></h4> 
      </div>
    
      
      
  </body>
  </html>
  <?php
  }
}

 else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}



?>