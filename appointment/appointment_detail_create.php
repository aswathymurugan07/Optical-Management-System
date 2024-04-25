<?php
session_start();
include("CreateDb.php");



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
              background-color:Red;
              font-size:20px;
              color:black;
              font-family: cursive;
              font-weight:bold;
              margin-left:50px;

          }
          h3{
            font-size:24px;
            color:maroon;
            font-family:Times New Roman;
          }
          li{
            font-size:20px;
            font-style:italic;
            font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;;
            
          }
          body{
            background-color:pink;
          }
        </style>
        
    <form name="frmUser" method="post" action="appointment_create.php">
         <!-- contact -->
	<div class="contact">
		<div class="container">
			<div class="col-md-4 contact-left">
				<br><br><br><br><br><br><br><br><h3>Address</h3>
				<p>Regina building,
					opp. to CSI Mission hospital,
					Kulasekharam,
					<span>Tamil Nadu 629161</span></p>
				<ul>
					<li>Free Phone :+1 078 4589 2456</li>
					<li>Telephone :+1 078 4589 2456</li>
					<li>Fax :+1 078 4589 2456</li>
					<li><a href="mailto:maruthiopticals@gmail.com">maruthiopticals@gmail.com</a></li>
				</ul>
			</div>
        </div>
    </div>
    <div style="margin-left: 570px;top:6pc;position: absolute;">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTMefhLQOot_c0VA3iBs1Oh51QT5wzM15Ot5w&usqp=CAU" 
            width="700px"height="600px" alt="profile">
        </div><br> 
        <div style="top: 9pc;margin-left: 670px;position: absolute;">
          <h1 style="color: rgb(79, 4, 44);font-size: 25px;font-family: cursive;margin-left: 110px;">APPOINTMENT BOOKING!!!</h1><br>
          <div>
            <?php if (isset($message)) {
                echo $message;
            } ?>
        </div>
       
        
       <input type="text" name="customer_name" class="txtField form-control" placeholder="Name" value=""><br><br>
       
       <input  type="date" name="appoint_date" class="txtField form-control"placeholder="quantitiy" value=""><br><br>
        
        <input type="time" name="appoint_time" class="txtField form-control" placeholder="amount"><br><br>
        
       <input type="text" name="c_mail" class="txtField form-control" placeholder="Email" value=""><br><br>

       <input type="text" name="c_phoneno" class="txtField form-control" placeholder="Address" value=""><br><br>  
    

        <input style="margin-left:100px;" class="btn btn-color px-3 mb-5   b1"type="submit" name="submit" value="Book Your appointment" >
        </div>
        
    </form>
</body>

</html>