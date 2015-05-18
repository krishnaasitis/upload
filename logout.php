<html>
   <head>
      <title>Log out</title>
<link rel="stylesheet" type="text/css" href="styles.css">
   </head>
   <body style="background-image: url('inlaybg.jpg');  background-size: 100%;">
<div class="center">
      <div id="header">
         
         <h1 style="color:#e5e5ff;">Login to Oulu Events</h1><hr>
      </div>
      <?php 
         session_start();
         if (isset($_SESSION['username'])) {
            session_destroy();
            echo "<br> you are logged out successufuly!";
         } 
            echo "<br/><a href='login.php'>login</a>";
         ?>
</div>
   </body>
</html>