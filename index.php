<?php
    session_start();
?>
<!DOCTYPE html>
<html>
     <head>
        <link rel="stylesheet" href="css/style1.css" type="text/css">
        <link rel="stylesheet" href="css/style.css" type="text/css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Home | Lorolly.com</title>
        <style>
            body{
                background-image: linear-gradient(to right, #ECE9E6 ,#FFFFFF );
            } 
            .deals-caption{
                background-color: #e91e63;
                height: 15%;
                color: white;
                text-align: center;
                font-size: 30px;
                font-weight: bold;
            }
            a{
              text-decoration: none;

            }
            a:link {
              text-decoration: none;
            }

            a:visited {
              text-decoration: none;
            }

            a:hover {
              text-decoration: none;
            }

            a:active {
              text-decoration: none;
            }
        </style>
    </head>
    <body>
<!-- Navigation Bar -->
        <nav class="navbar navbar-inverse navbar-custom">
            <div class="container-fluid" cont>
                <div class="navbar-header ">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="index.php" class="navbar-brand nav-font">Lorolly.com</a>
                </div>
                
                
                <div class="col-sm-3 col-md-3>
                     <form class="navbar-form" role="search"> 
                        <div class="input-group search-adjust">
                            <input type="text" class="form-control" placeholder="Search" name="q">
                            <div class="input-group-btn">
                                <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
                
                
                <div class="collapse navbar-collapse " id="myNavbar" >
                    <ul class="nav navbar-nav navbar-right ">
                        
                        
                        <li><a class="nav-font1" href="index.php"><span class="glyphicon glyphicon-home"></span>  Home</a></li>
                        <li><a class="nav-font1" href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span>  Cart</a></li>      
                        <li><a class="nav-font1" href="sign-up.php"><span class="glyphicon glyphicon-user"></span>  Sign-up</a></li>
                        <?php 
                        if(isset($_SESSION['logged'])) 
                            {
                                echo'<li><a class="nav-font1" href="logout.php"><span class="glyphicon glyphicon-log-out"></span>  Log-out</a></li>';
                                echo'<li><h5 style="color: #e91e63; padding-top: 25px;">';
                                echo $_SESSION['username']; 
                                echo '</li>';
                            }
                            else
                            {    
                                echo '<li><a class="nav-font1" href="login.php"><span class="glyphicon glyphicon-log-in"></span>  Login</a></li>';
                            }
                        ?>
                    </ul>
                </div>
                
            </div>
        </nav>
<!-- Carousel Panel -->
        <div class="container-fluid">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
              </ol>

              <!-- Wrapper for slides -->
              <div class="carousel-inner">
                <div class="item active">
                    <a href="products-page.php" target="blank"> 
                        <img src="images/home11 (2).png" alt="alt" style=" width:100%; height: 50vh; object-fit: cover; ">
                    </a>
                </div>

                <div class="item">
                    <a href="products-page.php" target="blank"> 
                        <img src="images/home2.png" alt="alt" style=" width:100%; height: 50vh; object-fit: cover;">
                    </a>
                </div>

                <div class="item">
                  <a href="products-page.php" target="blank"> 
                      <img src="images/home3.png" alt="alt" style=" width:100%; height: 50vh; object-fit: cover;">
                  </a>
                </div>
              </div>

              <!-- Left and right controls -->
              <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
<!-- Categories Row -->
        <div>
            <h2 style="padding: 10px; padding-left: 30px; font-family: Monaco, sans-serif;"><b>CATEGORIES TO EXPLORE</b></h2>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-3 col-md-3 col-12">
                    <a href="topwear.php" target="blank">
                        <div class="category-image1">
                            <div class="inner-banner">
                                <h3 style="text-align: center">Top-wear</h3>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xs-3 col-md-3 col-12">
                    <a href="products-page.php" target="blank">
                        <div class="category-image2">
                            <div class="inner-banner">
                                <h3 style="text-align: center">Lowers</h3>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xs-3 col-md-3 col-1g-12">
                    <a href="products-page.php" target="blank">
                        <div class="category-image3">
                            <div class="inner-banner">
                                <h3 style="text-align: center">Shoes</h3>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xs-3 col-md-3 col-12">
                    <a href="products-page.php" target="blank">
                        <div class="category-image4">
                            <div class="inner-banner">
                                <h3 style="text-align: center">Accessories</h3>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <br/>
<!-- Deals Row -->
        <div>
            <h2 style="padding: 10px; padding-left: 30px; font-family: Monaco, sans-serif;"><b>DEALS OF THE DAY</b></h2>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 col-sm-4 col-1g-4 col-12">
                    <a href="products-page.php" target="blank">   
                        <img src="images/deal2.png" alt="alt" class="img-fluid"/>
                    </a>
                </div>
                <div class="col-md-4 col-sm-4 col-1g-4 col-12">
                    <a href="products-page.php" target="blank">
                        <img src="images/deal3.png" alt="alt" class="img-fluid"/>
                    </a>
                </div>
                <div class="col-md-4 col-sm-4 col-1g-4 col-12">
                    <a href="products-page.php" target="blank">
                        <img src="images/deal11.png" alt="alt" class="img-fluid"/>
                    </a>
                </div>
            </div>                
        </div>
             
            <br/><br><br>
<!-- Footer -->
            <div class="container-fluid">
                <div class="row" style="background-color: #24262b">
                    <div class="col-md-3 col-sm-3 col-1g-3 col-12" align="center">
                        <img src="images/logo2.png" alt="alt" class="img-fluid img1"/><br/>
                    </div>
                    <div class="col-md-3 col-sm-3 col-1g-3 col-12" align="center">
                        <br/><br/><h4 style="color: #FFFFFF">company</h4><br/>
  	 			<ul>
  	 				<li><a href="about-us.php">about us</a></li>
  	 				<li><a href="our-services.php">our services</a></li>
  	 				<li><a href="privacy-policy.com">privacy policy</a></li>
  	 			</ul>
                    </div>
                    <div class="col-md-3 col-sm-3 col-1g-3 col-12" align="center">
                        <br/><br/><h4 style="color: #FFFFFF">Shop Now</h4><br/>
  	 			<ul>
                                    <li><a href="topwear.php">Top-wear</a></li>
  	 				<li><a href="lower.php">Lowers</a></li>
  	 				<li><a href="shoes.php">Shoes</a></li>
  	 				<li><a href="accessories.php">Accessories</a></li>
  	 			</ul>
                    </div>
                    <div class="col-md-3 col-sm-3 col-1g-3 col-12" align="center">
                        <br/><br/><h4 style="color: #FFFFFF">Follow us</h4><br/>
  	 			<div class="social-links">
                                    <a href="https://facebook.com" class="fa fa-facebook" target="-self"></a>
                                        <a href="https://twitter.com" class="fa fa-twitter" target="-self"></a>
                                        <a href="https://instagram.com" class="fa fa-instagram" target="-self"></a>
                                        <a href="https://linkedin.com" class="fa fa-linkedin" target="-self"></a>
  	 			</div>
                    </div>
                </div>    
            </div>

    </body>
</html>
