<!DOCTYPE html>
<html>
    <head>
        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/style1.css" type="text/css">
        <link rel="stylesheet" href="css/style.css" type="text/css"/>
        <link href="css/login.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <style>
            .log{
                float: none; 
                margin: 0 auto; 
                padding: 50px; 
                border: 5px solid white; 
                border-radius: 4px;
                background-color: white;
            }
            body{
                background-color: #f2eaf5;
            }
        </style>
        <title>Sign-Up | Lorolly.com</title>
    </head>
    <body >
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
                        <li><a class="nav-font1" href="logout.php"><span class="glyphicon glyphicon-log-out"></span>  Log-out</a></li>
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
        
        
        
        <br/><br/><br/>
        <div class = "container ">
            <div class="row">
                <div class="col-lg-6 log">
                    <h2 style="text-align: center; color: #8c55aa">Sign-up</h2>
                    <form action="registration.php" method="post">
                        <div class="form-group">
                            <label>First Name: </label>
                            <input type="text" name="firstname" class = "form-control i">
                        </div> 
                        <div class="form-group">
                            <label>Last Name: </label>
                            <input type="text" name="lastname" class = "form-control i">
                        </div> 
                        <div class="form-group">
                            <label>Email-id: </label>
                            <input type="text" name="email" class = "form-control i">
                        </div>    
                        <div class="form-group">
                            <label>Password: </label>
                            <input type="Password" name="password" class = "form-control i">
                        </div>
                        
                        <button class="btn btn-danger">Sign-up</button>
                    </form>
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
