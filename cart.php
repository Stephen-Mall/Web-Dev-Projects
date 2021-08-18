<?php
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Cart | Lorolly.com</title>
		<link rel="stylesheet" href="css/style1.css" type="text/css">
                <link rel="stylesheet" href="css/style.css" type="text/css"/>
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                
                <style>
                    .cart-page{
                        margin: 80px auto;
                    }
                    table{
                        width: 100%;
                        border-collapse: collapse;
                    }
                    .cart-info{
                        display: flex;
                        flex-wrap: wrap;
                    }
                    th{
                        text-align: left;
                        padding: 5px;
                        background-color: #e91e63;
                        color : whitesmoke;
                        font-weight: normal;
                    }
                    td{
                        padding: 10px 5px;
                    }
                    td input{
                        width: 40px;
                        height: 30px;
                        padding: 5px;
                    }
                    td img{
                        width: 150px;
                        height: 150px;
                        margin-right: 30px;
                    }
                    td p{
                        font-size: 20px;
                    }
                    td small{
                        font-size: 16px;
                    }
                    .total-price{
                        display: flex;
                        justify-content: flex-end;
                    }
                    .total-price table{
                        border-top: 3px solid #e91e63;
                        width: 100%;
                        max-width: 230px;
                    }
                    td:last-child{
                        text-align: right;
                    }
                    th:last-child{
                        text-align: right;
                    }
                    .bttn{
                        padding-top: 30px;
                        float: right;
                        max-width: 230px;
                        width: 100%;
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
<!-- Cart Page -->

            <div class="container cart-page">
                <table>
                    <tr>
                        <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Product</th>
                        <th>Quantity</th>
                        <th>Subtotal&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                    </tr>
                    <tr>
                        <td>
                            <div class="cart-info">
                                <img src="images/store-images/tops/shirt2.jpg" alt="alt"/>
                                <div>
                                    <p><b>Men White & Blue Slim-fit Printed Casual Shirt</b></p><br>
                                    <small><b>Price:</b>&nbsp;&nbsp; Rs. 472</small><br><br>
                                    <button class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span>&nbsp;&nbsp; Remove </button>
                                </div>
                            </div>                            
                        </td>
                        <td><input type="number" value="1"></td>
                        <td>Rs. 472</td>
                        
                    </tr>
                    
                    <tr>
                        <td>
                            <div class="cart-info">
                                <img src="images/store-images/tops/shirt5.jpg" alt="alt"/>
                                <div>
                                    <p><b>DressBerry Green Solid Cotton Inverse Pleat A-Line Top</b></p><br>
                                    <small><b>Price:</b>&nbsp;&nbsp; Rs. 399</small><br><br>
                                    <button class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span>&nbsp;&nbsp; Remove </button>
                                </div>
                            </div>                            
                        </td>
                        <td><input type="number" value="1"></td>
                        <td>Rs. 399</td>                      
                    </tr>
                </table>
                <div class="total-price">
                    <table>
                        <tr>
                            <td>Total Price: </td>
                            <td>Rs. 871</td> 
                        </tr>
                    </table>
                    
                </div>
                <div class="bttn">
                                <button class="btn btn-lg btn-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Check-out&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
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