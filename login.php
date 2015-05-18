<!doctype html>
<html>
<head>
<title>Login |Oulu Events</title>
<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body style="background-image: url('http://krishna.ipt.oamk.fi/upload/blurry-lights.jpg');  background-size: 100%;">
<div class="center">
	      <div id="header">

         <h1 style="color:#e5e5ff;">Login to Oulu Events</h1><hr>
      </div>
<p><a href="register.php">Register</a> | <a href="login.php">Login</a>
</p>
<form action="login.php" method="POST" id="loginform">
Username: <input type="text" name="username"><br />
Password: <input type="password" name="password"><br />
<input type="submit" value="Login" name="submit"/>
</form>
<?php
if(isset($_POST["submit"])){
$username=$_POST['username'];
$password=$_POST['password'];

//include_once('db.php');
$conn = mysql_connect('localhost', 'root', 'mypass');
		$db = mysql_select_db('relation');

	$usrname = mysql_real_escape_string($_POST['username']); 
    $password = mysql_real_escape_string($_POST['password']); 
    $sql = mysql_query("SELECT * FROM users  
        WHERE username='$username' AND 
        password='$password' 
        LIMIT 1"); 
    if(mysql_num_rows($sql) == 1){ 
        $row = mysql_fetch_array($sql); 
        session_start(); 
        $_SESSION['username'] = $row['username']; 
        $_SESSION['logged'] = TRUE; 
        header("Location: events.php"); // Modify to go to the page you would like 
        exit; 
    }else{ 
        //header("Location: adminlogin.php"); 
		echo "Wrong username or password.....<a href='login.php'>Try again</a>";
		
        exit; 
    } 
}else{    //If the form button wasn't submitted go to the index page, or login page 
    //header("Location: login.php");   
	//echo "username and password please...<a href='login.php'>Try again</a>";
   // exit; 
} 
?>
</div>
<style>
#loginform{
color: #000;
}
</body>
</html>
















