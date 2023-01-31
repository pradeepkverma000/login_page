<?php
session_start();
include_once('db.php');

if(isset($_POST['submit']))
{
    $email=$_POST['email'];
    $password=$_POST['password'];

    if($email !="" && $password !="")
    {
        $insert="INSERT INTO user (email,password) VALUES('$email','$password')";
        $result=mysqli_query($con,$insert);
        if($result)
        {
            header('Location: http://localhost/hotel_ms/index.php');
        }
        else
        {

            ?>
		        <script type="text/javascript">
			    alert("Please! Enter Valid Details");
                window.open("http://localhost/hotel/signin.php","_self");
		        </script>
		    <?php
        }

    }
    else

    {
        ?>
		<script type="text/javascript">
			alert("Please! Fill Email $ Password");
            window.open("http://localhost/hotel/signin.php","_self");
		</script>
		<?php
    
    }

}

?>



<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>USER SIGN IN</title>
  <script src="https://kit.fontawesome.com/7357388eee.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="signin.css">
    
  
</head>

<body>

    <div class="container">
    
        <h1>Welcome on Sign in Page</h1>
        <form method="POST">
        <div class="box">
            <i class="fa-regular fa-envelope"></i>
            <input type="email" name="email" placeholder="Enter Your Email" required>
        </div>

        <div class="box">
        <i class="fa fa-key"></i>
            <input type="password" name="password" placeholder="Enter Your Password" required>
        </div>
        <button class="btn" type="submit" name="submit">Sign In</button>
        </form>
        
    </div>
  
  
</body>
</html>
