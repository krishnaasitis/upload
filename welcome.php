<html>
<body> 
<?php
            include_once('db.php');
            session_start(); 
            if(!$_SESSION['logged']){ 
            header("Location: login.php"); 
            	exit; 
            } else{
            echo "<br />";
            echo 'Welcome, '.$_SESSION['username'];
            
            }
            ?>
         <a href="logout.php" class="logout">Log out</a>

</body>
</html>