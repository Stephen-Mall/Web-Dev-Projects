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
        <title>Top-Wears | Lorolly.com</title>
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
            .button {
                margin:0 auto;
                display:block;
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

<!-- Products -->
        <div class ="container">
            <h1>Top-Wears</h1><br>
            <div class="row">
                
                <div class="col-sm-6 col-md-3"> 
                    <div class="thumbnail"> 
                      <img src="images/store-images/tops/shirt1.jpg" alt="shirt1">
                      <div class="caption">
                        <h3 style="font-weight: bolder ">Ether</h3>  
                        <p style=" padding-bottom: 15px; font-size: 18px; color: graytext">Men's Green Printed Casual Shirt</p>
                        <p style="font-size: 16px; font-weight: bold;"> Rs. 879 &nbsp;&nbsp;<strike>  Rs. 1599 </strike>&nbsp;&nbsp<span style="font-weight: bold; color: coral; font-size: 16px"> (45% Off) </span><br/><br/>
                        <button class="btn btn-warning button">Add to Cart</button>
                      </div>
                    </div>
                </div>
                
                <div class="col-sm-6 col-md-3"> 
                    <div class="thumbnail"> 
                      <img src="images/store-images/tops/shirt2.jpg" alt="shirt1">
                      <div class="caption">
                        <h3 style="font-weight: bolder ">Highlander</h3>  
                        <p style=" padding-bottom: 15px; font-size: 18px; color: graytext">Men White & Blue Slim-fit Printed Casual Shirt</p>
                        <p style="font-size: 16px; font-weight: bold;"> Rs. 472 &nbsp;&nbsp;<strike>  Rs. 1049 </strike>&nbsp;&nbsp<span style="font-weight: bold; color: coral; font-size: 16px"> (55% Off) </span><br/><br/>
                        <button class="btn btn-warning button">Add to Cart</button>
                      </div>
                    </div>
                </div>
                
                <div class="col-sm-6 col-md-3"> 
                    <div class="thumbnail"> 
                      <img src="images/store-images/tops/shirt3.jpg" alt="shirt1">
                      <div class="caption">
                        <h3 style="font-weight: bolder ">Highlander</h3>  
                        <p style=" padding-bottom: 15px; font-size: 18px; color: graytext">Men Olive Green Slim-fit Solid Casual Shirt</p>
                        <p style="font-size: 16px; font-weight: bold;"> Rs. 584 &nbsp;&nbsp;<strike>  Rs. 1299 </strike>&nbsp;&nbsp<span style="font-weight: bold; color: coral; font-size: 16px"> (55% Off) </span><br/><br/>
                        <button class="btn btn-warning button">Add to Cart</button>
                      </div>
                    </div>
                </div>
                
                <div class="col-sm-6 col-md-3"> 
                    <div class="thumbnail"> 
                      <img src="images/store-images/tops/shirt8.jpg" alt="shirt1">
                      <div class="caption">
                        <h3 style="font-weight: bolder ">Mast & Harbour</h3>  
                        <p style=" padding-bottom: 15px; font-size: 18px; color: graytext">Men Rust-Orange Regular-fit Printed Casual Shirt</p>
                        <p style="font-size: 16px; font-weight: bold;"> Rs. 949 &nbsp;&nbsp;<strike>  Rs. 1899 </strike>&nbsp;&nbsp<span style="font-weight: bold; color: coral; font-size: 16px"> (50% Off) </span><br/><br/>
                        <button class="btn btn-warning button">Add to Cart</button>
                      </div>
                    </div>
                </div>
                
                
            </div>
            
            <div class="row">
                
                <div class="col-sm-6 col-md-3"> 
                    <div class="thumbnail"> 
                      <img src="images/store-images/tops/shirt4.jpg" alt="shirt1">
                      <div class="caption">
                        <h3 style="font-weight: bolder ">Popnetic</h3>  
                        <p style=" padding-bottom: 15px; font-size: 18px; color: graytext">Women Green & Golden Printed Straight Kurta</p>
                        <p style="font-size: 16px; font-weight: bold;"> Rs. 489 &nbsp;&nbsp;<strike>  Rs. 1399 </strike>&nbsp;&nbsp<span style="font-weight: bold; color: coral; font-size: 16px"> (65% Off) </span><br/><br/>
                        <button class="btn btn-warning button">Add to Cart</button>
                      </div>
                    </div>
                </div>
                
                <div class="col-sm-6 col-md-3"> 
                    <div class="thumbnail"> 
                      <img src="images/store-images/tops/shirt5.jpg" alt="shirt1">
                      <div class="caption">
                        <h3 style="font-weight: bolder ">DressBerry</h3>  
                        <p style=" padding-bottom: 15px; font-size: 18px; color: graytext">Green Solid Cotton Inverse Pleat A-Line Top</p>
                        <p style="font-size: 16px; font-weight: bold;"> Rs. 399 &nbsp;&nbsp;<strike>  Rs. 999 </strike>&nbsp;&nbsp<span style="font-weight: bold; color: coral; font-size: 16px"> (60% Off) </span><br/><br/>
                        <button class="btn btn-warning button">Add to Cart</button>
                      </div>
                    </div>
                </div>
                
                <div class="col-sm-6 col-md-3"> 
                    <div class="thumbnail"> 
                      <img src="images/store-images/tops/shirt6.jpg" alt="shirt1">
                      <div class="caption">
                        <h3 style="font-weight: bolder ">Kook N Keech</h3>  
                        <p style=" padding-bottom: 15px; font-size: 18px; color: graytext">Women White Printed Crop-T-Shirt</p>
                        <p style="font-size: 16px; font-weight: bold;"> Rs. 404 &nbsp;&nbsp;<strike>  Rs. 899 </strike>&nbsp;&nbsp<span style="font-weight: bold; color: coral; font-size: 16px"> (55% Off) </span><br/><br/>
                        <button class="btn btn-warning button">Add to Cart</button>
                      </div>
                    </div>
                </div>
                
                <div class="col-sm-6 col-md-3"> 
                    <div class="thumbnail"> 
                      <img src="images/store-images/tops/shirt7.jpg" alt="shirt1">
                      <div class="caption">
                        <h3 style="font-weight: bolder ">Kook N Keech</h3>  
                        <p style=" padding-bottom: 15px; font-size: 18px; color: graytext">Women White Sheer-Crew Neck Solid Top</p>
                        <p style="font-size: 16px; font-weight: bold;"> Rs. 489 &nbsp;&nbsp;<strike>  Rs. 1399 </strike>&nbsp;&nbsp<span style="font-weight: bold; color: coral; font-size: 16px"> (65% Off) </span><br/><br/>
                        <button class="btn btn-warning button">Add to Cart</button>
                      </div>
                    </div>
                </div>
                
                
            </div>
        </div><br><br><br>

<!-- Footer -->
        <div class="container-fluid">
                <div class="row" style="background-color: #24262b">
                    <div class="col-md-3 col-sm-3 col-1g-3 col-12" align="center">
                        <img src="images/logo2.png" alt="alt" class="img-fluid img1"/><br/>
                    </div>
                    <div class="col-md-3 col-sm-3 col-1g-3 col-12" align="center">
                        <br/><br/><h4 style="color: #FFFFFF">company</h4><br/>
  	 			<ul>
  	 				<li><a href="#">about us</a></li>
  	 				<li><a href="#">our services</a></li>
  	 				<li><a href="#">privacy policy</a></li>
  	 			</ul>
                    </div>
                    <div class="col-md-3 col-sm-3 col-1g-3 col-12" align="center">
                        <br/><br/><h4 style="color: #FFFFFF">Shop Now</h4><br/>
  	 			<ul>
  	 				<li><a href="#">Top-wear</a></li>
  	 				<li><a href="#">Lowers</a></li>
  	 				<li><a href="#">Shoes</a></li>
  	 				<li><a href="#">Accessories</a></li>
  	 			</ul>
                    </div>
                    <div class="col-md-3 col-sm-3 col-1g-3 col-12" align="center">
                        <br/><br/><h4 style="color: #FFFFFF">Follow us</h4><br/>
  	 			<div class="social-links">
  	 				<a href="#" class="fa fa-facebook"></a>
                                        <a href="#" class="fa fa-twitter"></a>
                                        <a href="#" class="fa fa-instagram"></a>
                                        <a href="#" class="fa fa-linkedin"></a>
  	 			</div>
                    </div>
                </div>    
            </div>
    </body>
</html>
