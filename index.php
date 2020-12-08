<!DOCTYPE html>
<html lang="en">
<head>
    <meta mainfest="mainfest.appcache">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Project</title>
    <link rel="stylesheet" href="styles/bootstrap.min.css">
    <link rel="stylesheet" href="font-awsome/css/fontawesome.min.css">
    <link rel="stylesheet" href="font-awsome/css/regular.min.css">
    <link rel="stylesheet" href="font-awsome/css/solid.min.css">
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
    
    <div id="Top">
        <div class="container">
            <div class="col-md-6 offer">
                <a href="#" class="btn btn-success btn-sm">Welcome</a>
                <a href="checkout.php">5 Items in cart | Total price 300.0$</a>
            </div>
            <div class="col-md-6 offer">
                <ul class="menu">
                    <li><a href="register_custome.php">Register</a></li>
                    <li><a href="checkout.php">My account</a></li>
                    <li><a href="cart.php">Cart</a></li>
                    <li><a href="login.php">LogIn</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div id="navbar" class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <a href="index.php" class="navbar-brand home">
                    <img src="images/ecomm-cart.png" style="width:90px; height:40px"  alt="My-Store Logo">
                </a>
                <button class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                    <span class="sr-only">Toggle Navigation</span>
                    <i class="fa fa-align-justify"></i>
                </button>
                <button class="navbar-toggle" data-toggle="collapse" data-target="#search">
                    <span class="sr-only">Toggle Search</span>
                    <i class="fa fa-search"></i>
                </button>
            </div>

            <div class="navbar-collapse collapse" id="navigation">
                <div class="padding-nav">
                    <ul class="nav navbar-nav left">
                        <li class="active"> <a href="index.php">Home</a> </li>
                        <li><a href="shop.php">Shop</a></li>
                        <li><a href="checkout.php">My account</a></li>
                        <li><a href="cart.php">Shopping Cart</a></li>
                        <li><a href="contact.php">Contact us</a></li>
                    </ul>
                </div>
                    <a href="cart.php" class="btn btn-primary navbar-btn right">
                        <i class="fa fa-shopping-cart"></i>
                        <span>4 Items in your cart</span>
                    </a>
                    <div class="navbar-collapse collapse right">
                    <button class="bt btn-primary navbar-btn" data-toggle="collapse" data-target="#search">
                        <span class="sr-only">Toggle Search</span>
                        <i class="fa fa-search"></i>
                    </button>
               </div>
            </div>
           
               <div class="collapse clearfix" id="search">
                             <form method="get" action="results.php" class="navbar-form">
                                 <div class="input-group">
                                   <input type="text" class="form-control" name="user_query" placeholder="search" required>
                                   <span class="input-group-btn">
                                     <button type="submit" name="search" value="search" class="btn btn-primary">
                                         <i class="fa fa-search"></i>
                                     </button>
                                   </span>
                                  
                                 </div>
                            </form>
                </div>
        </div>
    </div>

    <div class="container" id="slider">
        <div class="col-md-12">
            <div class="carousel slide" id="myCarousel" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li class="active" data-target="#myCarousel" data-slide-to="0"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                </ol>

                <div class="carousel-inner">
                    <div class="item active">
                        <img src="admin_area/slides_images/slide1.jpg" alt="slider image 1">
                    </div>
                    <div class="item">
                        <img src="admin_area/slides_images/slide2.jpg" alt="slider image 2">
                    </div>
                    <div class="item">
                        <img src="admin_area/slides_images/slide3.jpg" alt="slider image 3">
                    </div>
                    <div class="item">
                        <img src="admin_area/slides_images/slide4.jpg" alt="slider image 4">
                    </div>
                </div>
                 <a href="#myCarousel" class="left carousel-control" data-slide="prev">
                     <span class="glyphicon glyphicon-chevron-left"></span>
                     <span class="sr-only">Previous</span>
                 </a>
                 <a href="#myCarousel" class="right carousel-control" data-slide="next">
                     <span class="glyphicon glyphicon-chevron-right"></span>
                     <span class="sr-only">Next</span>
                 </a>
            </div>
        </div>
    </div>

    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>