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
                   <?php
                   
                   if(isset($_SESSION['cart'])){
                    $count=count($_SESSION['cart']);
                    echo "<span id=\"cart_count\" class=\"text-warning bg-light\">$count</span>";
                 }else{
                  echo "<span id=\"cart_count\" class=\"text-warning bg-light\">0</span>";
                 }
                   ?>
                </h5>
            </a>
        </div>
        </div>
    </nav>
</header>