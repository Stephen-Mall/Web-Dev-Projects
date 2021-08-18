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
    
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $dup_q  = "Select * from users where email = '$email'; ";
    
    $result = mysqli_query($con, $dup_q);
    $num = mysqli_num_rows($result);
    
    if ($num >=1)
    {
        echo"Invalid email-id";
        header('location:sign-up.php');
    }else
    {
        $insert = "insert into users (firstname, lastname, email, password) values('$fname','$lname','$email','$password')";
        mysqli_query($con, $insert);
    }
    header('location:login.php');
    mysqli_close($con);
?>
