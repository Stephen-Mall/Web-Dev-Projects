<?php
    
    session_start();

    $dbhost = 'localhost:3307';
    $dbuser = 'root';
    $con = mysqli_connect($dbhost, $dbuser);
      
    if(!$con ) 
    {
        die('Could not connect: ' . mysqli_error());
    }
    else
    {     
        echo 'Connected successfully';
    }
    mysqli_select_db($con,'lorolly');
    
    $email = $_POST['email'];
    $password = $_POST['password'];
    $_SESSION['logged']=false;
    $dup_q  = "Select * from users where email = '$email' && password = '$password'; ";
    
    $result = mysqli_query($con, $dup_q);
    $num = mysqli_num_rows($result);
    
    if ($num == 1)
    {
        $_SESSION['logged'] = true;
        $_SESSION['username'] = $email;
        header('location:index.php');
        
    }else
    {
      header('location:login.php');
    }
    mysqli_close($con);
?>
