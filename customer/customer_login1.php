<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<style>
    .button {
        background-color: rgb(148, 72, 123);
        font-size: 15px;
        color: black;
        font-family: cursive;
    }
    body{
        background-image:url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRF18OOOzKLUypbEUI56zl5dpXMUet63JYkag&usqp=CAU");
        background-attachment:fixed;
        background-size:cover;
        background-repeat:no-repeat;
    }
</style>

<body >
    <form method="post" action="customer_login.php">
       
        <div style="top: 8pc;margin-left: 580px;position: absolute;">
        <h1 style="color: rgb(79, 4, 44);font-size: 25px;font-family: cursive;margin-left: 40px;">Login Here!!!</h1><br>

            <img style="margin-left:50px ;border-radius:50%"
                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQGLW2V8tR162Ye1jV-Pus-xoYcPaMJTXiJrQ&usqp=CAU"
                height="100px" width="100px"><br><br>
            <div class="mb-3">
                <input class="form-control" type="text" name="c_username" placeholder="UserName">
            </div>
            <div class="mb-3">
                <input type="password" class="form-control" name="c_password" placeholder="password">
            </div>
            
            <?php
            if (isset($_GET['password_msg'])) {
                echo $_GET['password_msg'];
                echo"<br>";
            }
            ?>
            <br>
            
            <button class="btn btn-color px-3 mb-5 w-100 button">login</button>
        </div>
    </form>
</body>

</html>