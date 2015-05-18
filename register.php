<!doctype html>
<html>
   <head>
      <title>Register to Oulu Events</title>
<link rel="stylesheet" type="text/css" href="styles.css">
   </head>
   <body style="background-image: url('inlaybg.jpg');  background-size: 100%;">
	<div class="center">
	      <div id="header">

         <h1 style="color:#e5e5ff;">Register to Oulu Events</h1><hr>
      

	<div id="cont" style="position:absolute;">
         <p><a href="login.php">Login</a>
         </p>
         <form action="register.php" method="POST" id="registerform">
	     <table style="width:100%">
  <tr>
             <td>Username: <input type="text" name="username" id="username"><br /></td>
  </tr>
  <tr>
            <td>Password: <input type="password" name="password" id="password"><br /></td>
  </tr>
  <tr>
            <td>Confirm-Password: <input type="password" name="rpass" id="rpass"><br /></td>
<tr>
</table>
            <input type="submit" value="Register" name="Submit"/>
         </form>
         <h2 style="color: #07B3D3;"> and Log In </h2>
         <p style="color:#000066;"> If your credentials are acceptable, you will be redirected to Login page  </p>
</div>
         <?php
            session_start();
            
            $con = mysql_connect('localhost', 'root', 'mypass') or die(mysql_error());
            $db = mysql_select_db('relation', $con) or die(mysql_error());
            
            if (isset($_POST['Submit'])) {
                
                $username = $_POST['username'];
                $password = $_POST['password'];
            	$rpass = $_POST['rpass'];
                
            
                if ($username == '') {
                    echo"<script>alert('Please Enter Your Name')</script>";
                    exit();
                }
                if ($password == '') {
                    echo "<script>alert('Please Enter a Password')</script>";
                    exit();
                }
             
               if ($_POST["password"] == $_POST["rpass"]) {
               echo "success!";
            	header("Location: login.php");
            	}
            	if ($_POST["password"] != $_POST["rpass"])  {
               echo "failed to register. Please take a time";
            	}

            	else {
				//md5('$password'), md5('$rpass') we can write like this once md5 is working for login also
                    $que = "insert into users (username, password, rpass) values('$username', '$password', '$rpass')";
            
                    if (mysql_query($que)) {
                        echo "<script><alert('Registration Successful')</script>";
                        //echo "<script>window.open('login.php','_self')</script>";
            		header("Location: login.php");
                    }
            		else{
            			echo "<script><alert('Registration Failed')</script>";
            		}
                }
            }
            ?>
      </div>
</div>
<style>
#registerform{
color: #000;
}

   </body>
</html>